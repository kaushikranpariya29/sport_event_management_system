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
          $conn=mysqli_connect("localhost","root","") or die (mysql_error());
          mysqli_select_db($conn,"sportevent") or die(mysql_error());
        
          if(isset($_POST['submit']))
          {
              $registration=$_POST['reg'];
              $name=$_POST['name'];
              $dept=$_POST['dept'];
              $year=$_POST['year'];
              $sport=$_POST['sport'];
              
              $query="insert into result (registration, name, dept, year, sport) values ('$registration', '$name', '$dept', '$year', '$sport')";
            
              if(mysqli_query($conn,$query))
              {
                  echo "<script> alert('update Successful') </script>";
              }
              else
              {
                  echo "<script> alert('update Failure') </script>";
              }
          }
        ?>
    </body>
</html>
