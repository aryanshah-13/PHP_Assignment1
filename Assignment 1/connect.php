<?php

// Creating the variables to store the data from the html form
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$age = $_POST["age"]; 
$email = $_POST["Email"];
$addy = $_POST["Address"];
$description = $_POST["personality"];
$entertainment = $_POST["entertainment"]; 
$sports = $_POST["sports"];
$books = $_POST["books"];
$foodTypes = $_POST["food"];

// var_dump($firstName,  $lastName, $age, $email, $addy, $description, $entertainment, $sports, $books, $foodTypes);

// Setting up the connection with MySQL
$host = "localhost";
$user = "root";
$pass = "";
$db = "mydb";

$conn = mysqli_connect(hostname: $host,
username: $user,
password: $pass,
database: $db);

// Checking the connection and returning an error if so
if(mysqli_connect_errno()) {
    die("Connection Error: " . mysqli_connect_errno());
}

else {
    echo "Connection Successful." , "<br>";
}

// Inserting data into the mysql database

// Writing the sql query to insert the data where the databse is already set and the table name is assignment1

$sql = "insert into assignment1 values ('$firstName', '$lastName', '$age', '$email', '$addy', '$description', '$entertainment', '$sports', '$books', '$foodTypes')";

// Printing the query for general reference
echo "$sql";
echo "<br>";


// Checking if the query is true then printing the message records saved
if ($conn->query($sql) === TRUE) {
    echo "Records Saved.";
}

else {
    echo "Error". $sql. "<br>" .$conn->error;
}


// Closing the connection
$conn->close();

?>