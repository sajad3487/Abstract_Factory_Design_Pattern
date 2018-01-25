<?php
$host = 'db';
$dbname = 'database';
$user = 'user';
$pass = 'pass';
$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";
$conn = new PDO($dsn, $user, $pass);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//    $sql = "CREATE TABLE electronic (
//  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//  title VARCHAR(250),
//  description VARCHAR(250),
//  type VARCHAR(250),
//  battery INT(10),
//  price INT(10),
//  status INT(10),
//  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//  )";
//

//    $sql = "CREATE TABLE book (
//  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//  title VARCHAR(250),
//  description VARCHAR(250),
//  type VARCHAR(250),
//  pages INT(10),
//  price INT(10),
//  status INT(10),
//  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//  )";

//    $sql = "CREATE TABLE polls (
//  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//  title VARCHAR(250),
//  question_one VARCHAR(250),
//  question_two VARCHAR(250),
//  question_three VARCHAR(250),
//  question_four VARCHAR(250),
//  likes INT(10),
//  views INT(10),
//  status INT(10),
//  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//  )";
//    $conn->exec($sql);




// SQL query to get all table names from the information_schema database
$sql = "SELECT table_name FROM information_schema.tables WHERE table_schema = :dbname";


//$sql = "SELECT * FROM Moves WHERE game_id = 15";
//$sql = "SHOW COLUMNS FROM Moves";
//$sql = "SHOW COLUMNS FROM Users";
//$sql = "SHOW COLUMNS FROM Games";



//$sql = "DROP TABLE Moves";


// Prepare the SQL statement
$stmt = $conn->prepare($sql);

// Bind the parameter
$stmt->bindParam(':dbname', $dbname, PDO::PARAM_STR);

// Execute the query
$stmt->execute();

// Fetch all the table names
$tables = $stmt->fetchAll(PDO::FETCH_COLUMN);

// Output the table names
echo "Tables in database $dbname: <br>";
foreach ($tables as $table) {
    echo $table . "<br>";
}