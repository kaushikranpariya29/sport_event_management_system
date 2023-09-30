<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php  
if(isset($_POST["signin"])){  
  
if(!empty($_POST['email']) && !empty($_POST['pass'])) {  
    $user=$_POST['email'];  
    $pass=$_POST['pass'];  
  
    $con=mysqli_connect('localhost','root','') or die(mysql_error());  
    mysqli_select_db($con,'sportevent') or die("cannot select DB");  
  
    $query=mysqli_query($con,"SELECT * FROM addusertable WHERE mail='".$user."' AND pass='".$pass."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbusername=$row['mail'];  
    $dbpassword=$row['pass'];  
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {
     echo "<script type= 'text/javascript'>alert('Login successfully!!');</script>";
        header("location:registerhtml.html");
    //session_start();  
    //$_SESSION['sess_user']=$user; 
    //header("Location: member.php");  
    }  
    } else {  
    echo "Invalid username or password!";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  
?>
    </body>
</html>
