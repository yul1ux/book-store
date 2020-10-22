<?php
session_start();
$auth = isset($_SESSION['auth']);
?>
<!doctype html>
<html>
<head>
<title>Admin</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
<link href="https://fonts.googleapis.com/css?family=Calistoga&display=swap" rel="stylesheet">


<style>

/* form */
body{background:#0B2942;}
#form{margin: 20px 0;
   position: absolute;
   top:20%;
   left:30%;
   width: 500px;
     background:#f9fcfc;
   padding:40px;

 }

  #form .box_title{margin-bottom:25px;
                   margin-top: -5px;
                  font-weight: 300;}
#form .inputbox{position: relative;}
#form .inputbox input{width:100%;
                  margin-bottom: 50px;
                  padding:10px 0;
                  border: none;
                  outline:none;
                  border-bottom: 1px solid #000;
                  background: transparent;
                }
#form .inputbox label{position: absolute;
                 top:0;
               left:0;
                 padding:7px 0;
                pointer-events: none;
              transition: .5s;}
#form .inputbox input:focus ~ label , #form .inputbox input:valid ~ label, #form .inputbox input:invalid

{top: -22px;
 left: 0;
 color:blue;
 font-size: 13px;
 }
 #form .submit{cursor:pointer;
        
       position: relative;
     transition: 0.6s;
   float: right;
       margin:5px 10px;}
#form .submit::after {
  content: '»';
  position: absolute;
  opacity: 0;
  top: 6px;
  right: -20px;
  margin-bottom: 20px;
  transition: 0.5s;
}

#form .submit:hover {
  padding-right: 24px;
  padding-left:8px;
}

#form .submit:hover::after {
  opacity: 1;
  right: 10px;
}

</style>

</head>
<body>


  <div id="form">
  <h3 class="box_title">Login </h3>
<form action="login.php" method="POST">
  <div class="inputbox">
  <input type="name" id="name" required="" name="name">
  <label for="name" >Username</label>
  </div>
  <div class="inputbox">
  <input type="password" id="pass" required="" name="pass">
  <label for="pass">Password</label>
  </div>
<button class="btn btn-primary submit" type="submit" value=
'Login'>Submit</button>
  </form>
  </div>
 

</body>
</html>
