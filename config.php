<?php

$server='localhost';
$username='root';
$password='';
$database='job_portal';

$conn=mysqli_connect($server,$username,$password,$database);//connection string

if($conn->connect_error){
    die("Connection failed:".$conn->connect_error);
}
echo"";

if(isset($_POST['register'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['phone_no'];
    $password=$_POST['password'];

    $sql = "INSERT INTO users (Name,email,password,phone_no) VALUES ('{$name}','{$email}','{$password}','{$number}')";
    if(mysqli_query($conn,$sql)){
        echo "Records inserted successfully";
    }else{
        echo "ERROR: Could not able to execute $sql." .mysqli_error($conn);
    }
}

session_start();
if(isset($_POST['Login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query="SELECT * FROM users WHERE email='{$email}' AND password='{$password}'";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result)==1){
        header("location:index.php");
    }
    else{
        $error='email-id or password is incorrect';
    }
}
if(isset($_POST['job'])){
    $cname=$_POST['cname'];
    $pos=$_POST['pos'];
    $Jdesc=$_POST['Jdesc'];
    $skills=$_POST['skills'];
    $CTC=$_POST['CTC'];

  $job="INSERT INTO jobs (cname,position,Jdesc,skills,CTC) VALUES ('{$cname}','{$pos}','{$Jdesc}','{$skills}','{$CTC}')";
  mysqli_query($conn,$job);
  echo"New Job Posted";
}

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $qual=$_POST['qual'];
    $apply=$_POST['apply'];
    $year=$_POST['year'];

    $sql="INSERT INTO 'candidates'('name','apply','qual','year') VALUES ('{$name}','{$apply}','{$qual}','{$year}')";
    mysqli_query($conn,$sql);
}
if(isset($_POST['register'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['phone_no'];
    $password=$_POST['password'];

    $sql = "INSERT INTO candidates (Name,email,password,phone_no) VALUES ('{$name}','{$email}','{$password}','{$number}')";
    if(mysqli_query($conn,$sql)){
        echo "<script>Alert('User added Sucessfully')</script>";
    }
    else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
  //  var_dump($sql);
    //die();
    mysqli_query($conn,$sql);
}
 

?>