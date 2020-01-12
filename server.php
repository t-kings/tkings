 <?php
    $servername = "localhost";
    $username = "id10661862_tkings";
    $passwd = "tkings";

    // Create connection
    $conn = new mysqli($servername, $username, $passwd);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected to server successfully";

    // connect to the database
    $db = mysqli_connect('localhost', 'id10661862_tkings', 'tkings', 'id10661862_tkings');

    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected to database successfully";

    // sql to create table
    $sql1 = "CREATE TABLE  clients(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    services VARCHAR(100) NOT NULL,
    phonenumber VARCHAR(100) NOT NULL,
    cdate VARCHAR(30) NOT NULL,
    jobinfo VARCHAR(200) NOT NULL
    )";

    if ($db->query($sql1) === TRUE) {
        echo "Table created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }

    // sql to create table
    $sql1 = "CREATE TABLE  portfolio(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    jn VARCHAR(100) NOT NULL,
    jd VARCHAR(100) NOT NULL,
    js VARCHAR(100) NOT NULL,
    jc VARCHAR(100) NOT NULL,
    jdate VARCHAR(30) NOT NULL
    )";

    if ($db->query($sql1) === TRUE) {
        echo "Table created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }

        // sql to create table
    $sql1 = "CREATE TABLE  blog(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    bt VARCHAR(100) NOT NULL,
    bd VARCHAR(100) NOT NULL,
    bc VARCHAR(3000) NOT NULL,
    bp VARCHAR(100) NOT NULL,
    bdate VARCHAR(30) NOT NULL
    )";

    if ($db->query($sql1) === TRUE) {
        echo "Table created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }



    // sql to create table
    $sql1 = "CREATE TABLE  messages(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(100) NOT NULL,
    lastname VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    topic VARCHAR(100) NOT NULL,
    cdate VARCHAR(30) NOT NULL,
    content VARCHAR(200) NOT NULL
    )";
    
    if ($db->query($sql1) === TRUE) {
        echo "Table created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }

    // sql to create table
    $sql2 = "CREATE TABLE  suscribers(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL,
    cdate VARCHAR(30) NOT NULL
    )";


if ($db->query($sql2) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

?> 