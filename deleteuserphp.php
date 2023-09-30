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
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="sportevent";
    $registration=$_POST['reg'];
    
    $conn=new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
    $sql="DELETE from addusertable where registration='{$registration}'";
    if ($conn->query($sql) == TRUE) {
    echo "<script>alert('deleted successfully');</script>";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
    </body>
</html>
