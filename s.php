<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=name], input[type=email],input[type=password],input[type=Mobile] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: black;
    padding: 14px 20px;
    margin: 8px 0;
    border: black;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.pd {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 100px) {
    span.psw {
       display:inline-block ;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>
<body>


<form  method="post" action ="ragisation.php" >
   
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
      <div class="imgcontainer">
    <img src="dp.jpg" alt="Avatar" class="avatar">
  </div> 
      
       <label for="Name"><b>Name</b></label>
    <input type="Name" placeholder="Enter Name" name="name" required><br />

    <label for="Email"><b>Email</b></label>
    <input type="Email" placeholder="Enter Email" name="email" required><br />

    <label for="psw"><b>Password</b></label>
    <input type="Password" placeholder="Enter Password" name="password" required><br />

    <label for="Mobile"><b>Mobile</b></label>
    <input type="Mobile" placeholder="Enter Mobile" name="mobile" maxlength="10" pattern="[0-9]{10}" required>
     
<br />

   
    

    <div class="clearfix">
     
      <button type="submit" class="signupbtn"  onclick="location.href='l.php'">Submit</button>
        
        
        
    </div>
  </div>
</form>
<html/>