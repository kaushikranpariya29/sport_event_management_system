<html>
<head>
    <title> Registration</title>
    <link rel="stylesheet" type="text/css" href="registerdesign.css">
    <style>
        * {
    margin: 0;
    padding: 0;
}
h1
{
    color: white;
    text-align: center;
    padding: 20px;
    font-family: monospace;
}
h2
{
    text-align: center;
    padding: 20px;
}
.register{
    background-color: #2d85b0;
    width: 430px;
    margin: 0px 0px 0px 430px;
    color: white;
    padding: 20px;
    border-radius: 10px;
}
body
{
    background-image: url(images/register.jpg);
    background-size: 100% 800px;
    background-repeat: no-repeat;
}
#register
{
    margin-left: 50px;
}
label
{
    color:white;
    font-family: sans-serif;
    font-size: 18px;
    font-style: italic;
}
#name
{
    width: 300px;
    border: none;
    border-radius: 3px;
    outline: 0px;
    padding: 7px;
}
#ph
{
    width: 150px;
    padding: 7px;
    border: none;
    border-radius: 3px;
    outline: 0px;
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
    </head>
    
    <body>
       <h1> REGISTRATION FORM</h1>
        <div class="register">
          <form method="post" id="register" action="register.php">
              <h2>Register Here...</h2>
              
            <label> Registration Number  :</label><br>
              <input type="text" name="reg" id="name" placeholder="Registration Number"> <br><br> 
            <label> Name                 :</label><br>
              <input type="text" name="name" id="name" placeholder="Name of the student"> <br><br>
            <label> Department           :</label><br>
              <select name="dept" id="ph">
                  <option></option>
                  <option>CSE</option>
                  <option>ECE</option>
                  <option>EEE</option>
                  <option>IT</option>
                  <option>MECH</option>
                  <option>CHEM</option>
                  <option>CIVIL</option>
                  
               </select><br><br>
              
            <label> Year                 :</label><br>
              <select name="year" id="ph">
                  <option></option>
                  <option>I</option>
                  <option>II</option>
                  <option>III</option>
                  <option>IV</option>
                  <option>MCA</option>
                  <option>M.tech</option>
               </select><br><br>
            <label> Sports to be register:</label><br>
              <select name="sport" id="ph">
                  <option></option>
                  <option>Cricket</option>
                  <option>Football</option>
                  <option>Volleyball</option>
                  <option>Badminton</option>
                  <option>BasketBall</option>
                  <option>Running(100m)</option>
                  <option>Running(200m)</option>
                  <option>Running(400m)</option>
                  <option>Running(800m)</option>
                  <option>Running(1500m)</option>
                  <option>Running(5000m)</option>
                  <option>Running(400m Relay)</option>
                  <option>High Jump</option>
                  <option>Long Jump</option>
                  <option>Javelin Throw</option>
                  <option>Throw Ball</option>
                  <option>Kabaddi</option>
               </select>
              <br><br>
            <label> Phone Number         :</label><br>
              <select id="ph">
                  <option>+91</option>
                  <option>+92</option>
                  <option>+93</option>
                  <option>+94</option>
                  <option>+95</option>
               </select><br><br>
              
              <input type="number" name="phone" id="name" placeholder="Phone Number"> <br><br>
            <label> Mail Id              :</label><br>
              <input type="email" name="mail" id="name" placeholder="Name of the student"> <br><br>
             <input type="radio" name="male" id="male"><span id="male"> &nbsp; Male</span> &nbsp; &nbsp;
              <input type="radio" name="female" id="female"><span id="female"> &nbsp; Female</span> &nbsp; &nbsp;
              <br>
              <br>
              <input type="submit" name="submit" id="submit">
            </form>
        </div>
        
    </body>
    
    
</html>