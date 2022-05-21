<?php
if(isset($_POST['submit'])) //FORM SUBMISSION CHECK
{
$name = $_POST['name'];
$contact_number = $_POST['contact_no'];
$email = $_POST['email'];
$description = $_POST['description'];
//database details. You have created these details in the third step. Use your own.
$host = "localhost";
$username = "root";
$password = "1106";
$dbname = "jiet_db";
//create connection
$con = mysqli_connect($host, $username, $password, $dbname,3306);
//check connection if it is working or not
if (!$con)
{
die("Connection failed!" . mysqli_connect_error());
}
//This below line is a code to Send form entries to database
$sql = "INSERT INTO feedback (Name, Contact_Number, E_mail, Description) VALUES
('$name', '$contact_number', '$email', '$description')";
//fire query to save entries and check it with if statement
$rs = mysqli_query($con, $sql);
if($rs)
{
echo "Your response was sucessfully recorded. Thank you... ";
}
//connection closed.
mysqli_close($con);
}
?>