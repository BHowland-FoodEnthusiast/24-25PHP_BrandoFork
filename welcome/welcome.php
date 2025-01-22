<?php include 'header.php';

//setup our variables and empty them
$name = $email = "";

//condition to detect form data and clean it
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = sanitize_input($_POST["name"]);
    $email = sanitize_input($_POST["email"]);
}

//function to sanitize
function sanitize_input($data){
    //trim method removes spaces
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<div class="col">
    <div class="row">
        <p>Welcome <?php echo $name; ?>,
            your email address is <?php echo $email; ?> </p>
    </div>
</div>





<?php include 'footer.php'; ?>
