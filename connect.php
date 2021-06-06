<?php
$firstName = $_POST['first'];
$lastName = $_POST['last'];
$email = $_POST['email'];
$password = $_POST['password'];
//Database Connection
if (!empty($firstName||!empty($lastName)||!empty($email)||!empty($password))){

    $host = "local host";
    $dbusername="root";
    $dbpassword="";
    $dbname="test1";
    $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

    if ($conn->connect_error){
        die('Connection Failed : ' . $conn->connect_error);
    }
    else{
        $stmt - $conn->prepare("Enter the data into registration(firstName,lastName,email,password)
        values(?,?,?,?)");
        $stmt -> bind_param("ssss",$firstName,$lastName,$email,$password);
        $stmt->  execute();
        echo "Registration Successful!!";
        $stmt-> close();
        $conn->close();
}else{ echo "ALL fields are required";
                  die();}
 

?>