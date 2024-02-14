<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="viewTableStyles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View data</title>
</head>
<body>
    <header>
        <h1>SUBSCRIBER PORTAL FORM</h1>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>

    <?php
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

        $sql = "select * from assignment1";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "First Name: ".$row["First Name"] . " ". "Last Name: " .$row["Last Name"] . "Age: " .$row["Age"] . " " . "Email: " .$row["Email"]. " " . "Address: " .$row["Address"]. " " . "Personality: " .$row["Personality"]. " ". "Entertainment: " .$row["Entertainment"]. " " . "Sports: " .$row["Sports"]. " " . "Books: " .$row["Books"]. " " . "Food types: " .$row["Food types"]. "<br>";

                echo "<table>";
            }
        }
    ?>

    <footer>
        <div>
            <p>Contact us: aryanshah2125@gmail.com | Phone: *** - 662 - 3591</p>
        </div>
        <div>
            <p>&copy; 2024 Subscriber portal form. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>