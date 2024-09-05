<?php
session_start() ;
echo "welcome in server";
require("connection.php");

// print_r($_POST);

/*** register
 * store data from form in data base
 * userName
 * email
 * password
 * 
 *  ==>data returened => $_POST
 */
  

if(isset($_POST["regBtn"]))
{
    $flag=false;
    $name=$_POST["name"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $image = $_POST['image'] ;
    $namePattern="/^[a-zA-Z]{3,}$/";
    $passwordPattern="/^[0-9]{5,10}$/";
    $hashPassword=md5($password); // encrypt password
if(!preg_match($namePattern,$name))
{
   header("location:register.php?message=Name must characters and be more than 3 characters");
   exit();
}
if(!preg_match($passwordPattern,$password))
{
   header("location:register.php?message= password must  numbers and be more than 5 numbers");
   exit();
}

    // Check for Email  
   $sql = "SELECT * FROM users Where email = :email" ; 
   $stmt =$connection->prepare($sql) ; 
   $stmt->bindparam(':email' , $email) ;
   $stmt->execute() ;
   if($stmt->rowCount() > 0){
    header("location:register.php?message= Email already registered!");
    exit();
   }


   $query="insert into users (name,email,password, image) values  ('$name','$email','$hashPassword', '$image')";
   $sqlQuery=$connection->prepare($query);
   // var_dump($sqlQuery);
   $sqlQuery->execute();
   $flag=true;
   if($flag)
   {
    header("location:login.php?");
    exit();
   }else{
    header("location:register.php?");
   }
}


if(isset($_POST["logBtn"]))
{
    $email = $_POST["email"];
    $password = $_POST["password"];
    $hashPassword = md5($password); // Encrypt password

    $query = "SELECT * FROM users WHERE email = :email AND password = :password";
    $sqlQuery = $connection->prepare($query);
    $sqlQuery->bindParam(':email', $email);
    $sqlQuery->bindParam(':password', $hashPassword);
    $sqlQuery->execute();
    $result = $sqlQuery->fetch(PDO::FETCH_ASSOC);
    
    if($result)
    {
        $_SESSION['name'] = $result['name'];
        $_SESSION['email'] = $result['email'];
        $_SESSION['image'] = $result['image'];

        header("location:profile.php");
        exit();
    }
    else
    {
        header("location:login.php?message=Enter Valid Email Or Password");
        exit();
    }
}


/***  Task
 * 
 * login =>data show in profile (session)
 * ===> image
 */

 










?>