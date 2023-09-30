<!DOCTYPE html>
<html>
<head>
    <title> Registration</title>
<!--    <link rel="stylesheet" type="text/css" href="adduserdesign.css">-->
    <style>
        /* styles.css */

/* Apply styles to the body */
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: black;
}

/* Center the form on the page */
.register {
  max-width: 400px;
  margin: 0 auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
}

/* Style form headings */
h1, h2 {
  text-align: center;
}

/* Style form labels and input fields */
label {
  font-weight: bold;
}

input[type="text"],
input[type="password"],
input[type="email"],
select {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

/* Style radio buttons */
input[type="radio"] {
  margin-right: 5px;
}

/* Style the submit button */
button[type="submit"] {
  background-color: #007bff;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

button[type="submit"]:hover {
  background-color: #0056b3;
}

/* Add spacing between form elements */
br {
  line-height: 20px;
}

    </style>
    </head>
    
    <body>
       <h1> ADD USER</h1>
        <div class="register">
          <form method="post" id="register" action="adduserphp.php">
              <h2>Add User here...</h2>
              
            <label> Registration Number  :</label><br>
              <input type="text" name="reg" id="name" placeholder="Registration Number"> <br><br> 
            <label> Name                 :</label><br>
              <input type="text" name="name" id="name" placeholder="Name of the student"> <br><br>
            <label> Register As:           </label><br>
              <select id="ph" name="dept">
                  <option>Team Manager</option>
                  <option>Participants</option>
                  <option>Referee</option>
<!--                  <option>MECH</option>
                  <option>CHEM</option>
                  <option>CIVIL</option>-->
                  
               </select><br><br>
              
            <label> Year                 :</label><br>
              <select id="ph" name="year">
                  <option>I</option>
                  <option>II</option>
                  <option>III</option>
                  <option>IV</option>
                  <option>MCA</option>
                  <option>M.tech</option>
               </select><br><br>
              
              <label>Password:</label><br>
              <input type="password" name="pass" id="name" placeholder="Enter Password"><br><br>
            
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
             <input type="radio" name="male" id="male"> Male <br><br>
              <input type="radio" name="male" id="female"> Female
              <br>
              <br>
              <button type="submit" name="submit" id="submit">ADD</button>

            </form>
        </div>
    </body>
</html>
