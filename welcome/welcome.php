<?php include 'header.php';

//setup our variables and empty them
$name = $email = "";

//condition to detect form data and clean it
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
}

//function to sanitize
function sanitize_input($data){
    //trim method removes spaces
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
}

?>

<div class="col">
    <div class="row">
        <p>Welcome <?php echo $_POST["name"] ?>, your email address is <?php echo $_POST["email"] ?> </p>
    </div>
</div>





<?php include 'footer.php'; ?>
