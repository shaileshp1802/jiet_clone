<?php
if(isset($_POST['submit'])) //FORM SUBMISSION CHECK
{
$name = $_POST['name'];
$email = $_POST['mail'];
$mob_no = $_POST['mob_no'];
$state = $_POST['state'];
$city = $_POST['city'];
$course_category =$_POST['course_category'];
$course = $_POST['course'];
$branch = $_POST['branch'];
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
$sql = "INSERT INTO students (NAME, EMAIL, MOBILE_NUMBER, STATE, CITY, COURSE_CATEGORY, COURSE, BRANCH) VALUES
('$name','$email', '$mob_no', '$state', '$city', '$course_category', '$course', '$branch')";
//fire query to save entries and check it with if statement
$rs = mysqli_query($con, $sql);
if($rs)
{
echo "You are successfully registered. Thank You...";
}
//connection closed.
mysqli_close($con);
}
?>