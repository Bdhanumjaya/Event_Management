<?php
// Database connection
include 'database.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch events and associated speakers from the database
$sql = "SELECT events.*, GROUP_CONCAT(speakers.name SEPARATOR ', ') AS speaker_names 
        FROM events 
        LEFT JOIN event_speaker ON events.event_id = event_speaker.event_id 
        LEFT JOIN speakers ON event_speaker.speaker_id = speakers.speaker_id 
        GROUP BY events.event_id";
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
    <link rel="stylesheet" href="speakerstyle.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Speakers</h1>
        <?php foreach ($events as $event): ?>
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $event['event_name']; ?></h5>
                    <p class="card-text"><?php echo $event['description']; ?></p>
                    <p class="card-text">Date: <?php echo $event['event_date']; ?></p>
                    <p class="card-text">Location: <?php echo $event['location']; ?></p>
                    <p class="card-text">Speakers: <?php echo $event['speaker_names']; ?></p>
              
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
