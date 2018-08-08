<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript">
function noBack(){window.history.forward();}
noBack();
window.onload=noBack;
window.onpageshow=function(evt){if(evt.persisted)noBack();}
window.onunload=function(){void(0);}
</script>
    
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=email], input[type=password] {
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

img.dp {
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

<h2>Login Form</h2>

<form method="post" action="apache_start.php" class="login-form">
	
    
  <div class="imgcontainer">
    <img src="dp.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
  
      <input type="email" name="email"  size="20" placeholder="email" required/>
      

    <label for="password"><b>Password</b></label>
   <input type="password" name="password"  size="20"  placeholder="password" required/>
    <button type="submit">Login</button>
    
     
      
        <button type="button" onclick="location.href='s.php'">sign up</button>

     
  </div>

  <!--<div class="container" style="background-color:# pink ">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>-->
    </form></body></html>