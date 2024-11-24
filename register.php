<?php
// Database connection
include 'database.php';

// Check if event ID is provided in the URL
if (!isset($_GET['event_id'])) {
    die("Event ID not provided.");
}

// Fetch event details based on event ID
$event_id = $_GET['event_id'];
$stmt = $conn->prepare("SELECT event_name FROM events WHERE event_id = ?");
$stmt->bind_param("i", $event_id);
$stmt->execute();
$result = $stmt->get_result();

// Check if event exists
if ($result->num_rows == 0) {
    die("Event not found.");
}

// Get event name
$row = $result->fetch_assoc();
$event_name = $row['event_name'];

// Close statement
$stmt->close();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Prepare and execute SQL query to insert registration details into the database
    $stmt = $conn->prepare("INSERT INTO event_registrations (event_id, event_name, user_name, email, phone) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("issss", $event_id, $event_name, $user_name, $email, $phone);
    
    if ($stmt->execute()) {
        $registration_success = true;
    } else {
        $registration_error = "Registration failed. Please try again.";
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <style>
        /* Set text color to white */
        body, .card-title, .card-text, .btn {
            color: white !important;
        }
    </style>
    
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Event Registration for <?php echo $event_name; ?></h1>
        <?php if (isset($registration_success) && $registration_success): ?>
            <div class="alert alert-success" role="alert">
                Registration successful!
            </div>
        <?php elseif (isset($registration_error)): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $registration_error; ?>
            </div>
        <?php endif; ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="hidden" name="event_id" value="<?php echo $event_id; ?>">
            <div class="mb-3">
                <label for="user_name" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="user_name" name="user_name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" id="phone" name="phone" required>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
</body>
</html>
