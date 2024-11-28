<?php
/* 
// Establish database connection
$connection = mysqli_connect('localhost', 'root', '', 'book_db');

// Check connection
if (!$connection) {
    die('Connection failed: ' . mysqli_connect_error());
}

if (isset($_POST['send'])) {
    // Sanitize user input (just an example, should consider more sanitization)
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $phone = mysqli_real_escape_string($connection, $_POST['phone']);
    $address = mysqli_real_escape_string($connection, $_POST['address']);
    $location = mysqli_real_escape_string($connection, $_POST['location']);
    $guests = mysqli_real_escape_string($connection, $_POST['guests']);
    $arrival = mysqli_real_escape_string($connection, $_POST['arrival']);
    $leaving = mysqli_real_escape_string($connection, $_POST['leaving']);

    // Prepare an SQL statement
    $stmt = $connection->prepare("INSERT INTO book_form (name, email, phone, address, location, guests, arrival, leaving) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param('ssssssss', $name, $email, $phone, $address, $location, $guests, $arrival, $leaving);

    // Execute the query
    if ($stmt->execute()) {
        header('Location: book.php');
        exit();
    } else {
        echo 'Error: ' . $stmt->error;
    }

    // Close the statement
    $stmt->close();
} else {
    echo 'Something went wrong, try again.';
}

// Close the connection
mysqli_close($connection);
*/


// Establish a connection to the database
$connection = mysqli_connect('localhost', 'root', '', 'book_db');

// Check if the connection was successful
if (!$connection) {
    die('Connection failed: ' . mysqli_connect_error());
}

if (isset($_POST['send'])) {
    // Sanitize and validate user input to prevent SQL injection and other issues
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $phone = mysqli_real_escape_string($connection, $_POST['phone']);
    $address = mysqli_real_escape_string($connection, $_POST['address']);
    $location = mysqli_real_escape_string($connection, $_POST['location']);
    $guests = mysqli_real_escape_string($connection, $_POST['guests']);
    $arrival = mysqli_real_escape_string($connection, $_POST['arrival']);
    $leaving = mysqli_real_escape_string($connection, $_POST['leaving']);

    // Use a prepared statement to insert data safely
    $stmt = $connection->prepare("INSERT INTO book_form (name, email, phone, address, location, guests, arrival, leaving) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    
    // Bind parameters to the prepared statement
    $stmt->bind_param('ssssssss', $name, $email, $phone, $address, $location, $guests, $arrival, $leaving);

    // Execute the statement
    if ($stmt->execute()) {
        // Redirect if successful
        header('Location: book.php');
        exit();
    } else {
        // Display error message if the query failed
        echo 'Error: ' . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();
} else {
    // Handle the case where 'send' was not set in the form submission
    echo 'Something went wrong, please try again.';
}

// Close the database connection
mysqli_close($connection);


?>
