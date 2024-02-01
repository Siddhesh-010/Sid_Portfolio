<?php
$servername="LAPTOP-AH3KCGSI";
$username= "sa";
$password= "abc456";
$dbname= "dbo.feedback_portfolio_website";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection failed ! ".$conn->connect_error);
}
if($_SERVER["REQUEST_METHOD"]==$POST){
    $name=$_POST("name");
    $email=$_POST("email");
    $comment=$_POST("comment");

    $sql="insert into feedback_portfolio_website(name,email,comment) values('$name','$email','$comment')";

    if($conn->query($sql)){
        echo "Thanks! It's Precious To Me!";
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>