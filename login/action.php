<?php
// Set up our variables and set them to empty
$user = $pass = "";

// Condition to detect form data and sanitize it
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $user = sanitize_inputs($_POST["user"]);
    $password = sanitize_inputs($_POST["pass"]);
}
// Function to sanitize the data
function sanitize_inputs($data){
    // Trim method removes spaces at beginning and end
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


//values for mysql connection
$servername = "localhost";
$username = "root";
$password = "brandon24";
$dbname = "db_auth";

//Create the connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

//SQL query
$sql = "SELECT * FROM login";

// execute the query
$result = mysqli_query($conn, $sql);

//check for catastrophic failure
if(mysqli_num_rows($result) > 0){
    //output data
    while($row = mysqli_fetch_assoc($result)){
        if($row["pass"] === $password && $row["user"] === $user){
            echo "lOGIN SUCCESSFULL";
        }

    }
}


?>
