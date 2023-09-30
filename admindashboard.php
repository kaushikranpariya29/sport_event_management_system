<html>
    <!--<link rel="stylesheet" type="text/css" href="deleteuserdesign.css">-->
    <style>
        body {
  font-family: Arial, sans-serif;
  background: url(images/admin.jpg) no-repeat;
  background-size: cover;
  height: 100vh;
}

h1 {
  text-align: center;
  font-family: Tahoma, Arial, sans-serif;
  color: #06D85F;
  margin: 80px 0;
}

.box {
  width: 40%;
  margin: 21px 0px 0px 343px;
  background: rgba(255,255,255,0.2);
  padding: 35px;
  border: 2px solid #fff;
  border-radius: 20px/50px;
  background-clip: padding-box;
  text-align: center;
}

.button {
  font-size: 1em;
  padding: 10px;
  color: #fff;
  border: 2px solid #06D85F;
  border-radius: 20px/50px;
  text-decoration: none;
  cursor: pointer;
  transition: all 0.3s ease-out;
}
.button:hover {
  background: #06D85F;
}

.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 70px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 30%;
  position: relative;
  transition: all 5s ease-in-out;
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: #06D85F;
}
.popup .content {
  max-height: 30%;
  overflow: auto;
}

@media screen and (max-width: 700px){
  .box{
    width: 70%;
  }
  .popup{
    width: 70%;
  }
}

#name
{
    width: 300px;
    border-color: black;
    border-radius: 3px;
    outline: 0px;
    padding: 7px;
}
#submit
{
    width:200px;
    padding: 7px;
    font-size: 16px;
    font-family: sans-serif;
    font-style: italic;
    font-weight: 600;
    border:0px;
    border-radius: 3px;
}
    </style>
<h1>ADMIN DASHBOARD</h1>
<div class="box">
    <a class="button" href="adduser.php" >Add User</a><br><br><br><br><br>
	<a class="button" href="#popup2">Delete User</a><br><br><br><br><br>
    <a class="button" href="viewregister.php">View Registration</a><br><br><br><br><br>
    <a class="button" href="#popup1">Delete Registration</a><br><br><br><br><br>
    <a class="button" href="updateresulthtml.html">Update Result</a>
    <a class="button" href="C:\Users\user\Desktop\registerkums.xml">View File</a>
</div>

<div id="popup1" class="overlay">
	<div class="popup">
		<h2>Delete User</h2>
		<a class="close" href="#">&times;</a>
		<div class="content"> 
            <form action="deletephp.php" method="post">
			<label>Registration Number:</label><br><br>
            <input type="text" name="reg" id="name" placeholder="Registration Number"><br> <br>
            <button type="submit" id="submit" >Delete</button>
            </form>
		</div>
	</div>
</div>
    <div id="popup2" class="overlay">
	<div class="popup">
		<h2>Delete Registration</h2>
		<a class="close" href="#">&times;</a>
		<div class="content"> 
            <form action="deleteuserphp.php" method="post">
			<label>Registration Number:</label><br><br>
            <input type="text" name="reg" id="name" placeholder="Registration Number"><br> <br>
            <button type="submit" id="submit" >Delete</button>
            </form>
		</div>
	</div>
</div>
</html>
