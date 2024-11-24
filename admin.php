<?php
include 'database.php'; // Include the file where the database connection is established

// Function to add event to the database
function addEvent($conn, $title, $imageUrl, $description, $eventDate, $location) {
    $sql = "INSERT INTO events (event_name, image_url, description, event_date, location) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $title, $imageUrl, $description, $eventDate, $location);
    
    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}

// Function to add speaker to the database
function addSpeaker($conn, $name, $description, $imageUrl) {
    $sql = "INSERT INTO speakers (name, description, image_url) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $description, $imageUrl);
    
    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}

// Handle form submissions
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form is submitted to add an event
    if (isset($_POST["submit"])) {
        // Determine if it's an event or speaker being added
        if (isset($_POST["event_title"])) {
            $title = $_POST["event_title"];
            $imageUrl = $_POST["event_image_url"];
            $description = $_POST["event_description"];
            $eventDate = $_POST["event_date"];
            $location = $_POST["event_location"];
            if (addEvent($conn, $title, $imageUrl, $description, $eventDate, $location)) {
                echo "Event added successfully!";
            } else {
                echo "Error adding event.";
            }
        } elseif (isset($_POST["speaker_name"])) {
            $name = $_POST["speaker_name"];
            $description = $_POST["speaker_description"];
            $imageUrl = $_POST["speaker_image_url"];
            if (addSpeaker($conn, $name, $description, $imageUrl)) {
                echo "Speaker added successfully!";
            } else {
                echo "Error adding speaker.";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        /* Your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .form-container {
            margin-bottom: 30px;
        }
        
        .form-container h3 {
            margin-bottom: 10px;
        }
        
        input[type="text"],
        input[type="password"],
        textarea,
        input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
        }
        
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
        
        a {
            display: block;
            text-align: center;
            text-decoration: none;
            color: #007bff;
        }
        
        a:hover {
            text-decoration: underline;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        
        th, td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }
        
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Welcome, Admin!</h2>
        <div class="form-container">
            <h3>Add Event</h3>
            <form id="eventForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <input type="text" name="event_title" placeholder="Event Title" required>
                <input type="text" name="event_image_url" placeholder="Image URL" required>
                <textarea name="event_description" placeholder="Event Description" required></textarea>
                <input type="date" name="event_date" required>
                <input type="text" name="event_location" placeholder="Location" required>
                <button type="submit" name="submit">Add Event</button>
            </form>
        </div>
        <div class="form-container">
            <h3>Add Speaker</h3>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <input type="text" name="speaker_name" placeholder="Speaker Name" required>
                <input type="text" name="speaker_description" placeholder="Speaker Description">
                <input type="text" name="speaker_image_url" placeholder="Image URL">
                <button type="submit" name="submit">Add Speaker</button>
            </form>
        </div>
        <h3>Events</h3>
        <table>
            <tr>
                <th>Event ID</th>
                <th>Title</th>
                <th>Date</th>
                <th>Location</th>
                <th>Speakers</th>
            </tr>
            <?php
            // Fetch and display events
            $sql = "SELECT * FROM events";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["event_id"] . "</td>";
                    echo "<td>" . $row["event_name"] . "</td>";
                    echo "<td>" . $row["event_date"] . "</td>";
                    echo "<td>" . $row["location"] . "</td>";
                    
                    // Fetch and display speakers for each event
                    $event_id = $row["event_id"];
                    $sql_speakers = "SELECT speakers.name FROM event_speaker JOIN speakers ON event_speaker.speaker_id = speakers.speaker_id WHERE event_speaker.event_id = $event_id";
                    $result_speakers = $conn->query($sql_speakers);
                    echo "<td>";
                    if ($result_speakers->num_rows > 0) {
                        while ($row_speaker = $result_speakers->fetch_assoc()) {
                            echo $row_speaker["name"] . "<br>";
                        }
                    } else {
                        echo "No speakers";
                    }
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No events</td></tr>";
            }
            ?>
        </table>
        <a href="logout.php">Logout</a>
    </div>

    <script>
        <?php
        // Check if the form is submitted to add an event
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
            echo "alert('";
            if (isset($_POST["event_title"])) {
                echo "Event added successfully!";
            } elseif (isset($_POST["speaker_name"])) {
                echo "Speaker added successfully!";
            }
            echo "');";
        }
        ?>
    </script>
</body>
</html>
