<?php
// Database connection
include 'database.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch events from the database
$sql = "SELECT * FROM events";
$result = $conn->query($sql);

// Dummy event details (for testing)
$events = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $events[] = $row;
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        /* Set text color to white */
        body, .card-title, .card-text, .btn {
            color: white !important;
        }
        /* Adjust image size */
        .card-img-top {
            max-height: 500px;
            max-width: 500px; /* Set maximum height for the image */
            object-fit: cover; /* Cover the entire card container */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Events</h1>
        <?php foreach ($events as $event): ?>
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $event['event_name']; ?></h5>
                    <img src="<?php echo $event['image_url']; ?>" class="card-img-top" alt="Event Image">
                    <p class="card-text"><?php echo $event['description']; ?></p>
                    <p class="card-text">Date: <?php echo $event['event_date']; ?></p>
                    <p class="card-text">Location: <?php echo $event['location']; ?></p>
                    <a href="register.php?event_id=<?php echo $event['event_id']; ?>" class="btn btn-primary">Register</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
