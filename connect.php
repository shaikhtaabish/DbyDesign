<?php
$firstname = $_POST['firstname'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$designation = $_POST['designation'];
$company = $_POST['company'];

//Database connection
$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stml = $conn->prepare("insert into registration(firstname, email, phonenumber, designation, company)
    values(?, ?, ?, ?, ?)");
    $stmt->blind_param("ssiss",$firstname, $email, $phonenumber, $designation, $company );
    $stmt->execute();
    echo "registration Sucessfully...";
    $stmt->close();
    $conn->close();
}
?>

