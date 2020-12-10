<!DOCTYPE html>
<html>
<body>


<?php

/**PHP homework I did not connect with my portfolio , only tutorial
 * @author: Arda Burak Atila
 * Neptun code: OL1BB5
 * */


//If - else

$i = credit("x");

if ($i > "100") {
    echo "Your credit is OK";
} elseif ($i == "100") {
    echo "Your credit is not very well but it's OK";

} else {
    echo "Your credit is not enough";
}

//Switch

$grade = "5";

switch ($grade) {

    case "1":
        echo "Fail";
        break;
    case "2":
        echo "Pass";
        break;
    case "3":
        echo "Satisfaction";
    case "4";
        break;
    case "4":
        echo "Good";
        break;
    case "5":
        echo "Excellent";
        break;

    default:
        echo "Your grade is invalid";
}


//Data types

$computer = array("MSI,ASUS,ACER,SAMSUNG,APPLE");
var_dump($computer);


//Array

$computer = array("MSI,ASUS,SAMSUNG,APPLE");
sort($computer);


// Form validation
$username = $email = $password = $comment = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = register($_POST["username"]);
    $email = register($_POST["email"]);
    $password = register($_POST["password"]);
    $comment = register($_POST["comment"]);

}

function register($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<h2>Contact</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    username: <input type="text" name="name">
    <br><br>
    e-mail: <input type="text" name="email">
    <br><br>
    password: <input type="text" name="website">
    <br><br>
    comment: <textarea name="comment" rows="5" cols="40"></textarea>
    <br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<h2>Your Account:</h2>";
echo $username;
echo "<br>";
echo $email;
echo "<br>";
echo $password;
echo "<br>";
echo $comment;
echo "<br>";

?>

<?php

//Create Database MYSQL

$server = "localhost";
$username = "username";
$password = "password";


$conn = new mysqli($server, $username, $password); //create connection

//Check the connection

if ($conn->connet_error) {
    die("connection failed:" . $conn->connect_error);
}

//Create database

$sql = "My new database";

if ($conn->query($sql) === TRUE) {
    echo "Database created";

} else {
    echo "Unknown Error" . $conn->error;
}

$conn->close();

?>

</body>
</body>
</html>

