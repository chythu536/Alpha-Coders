<?php include_once 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Alpha Coders - SRU</title>
  <meta property="og:site_name" content="alpha coders - sru">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" sizes="32x32" href="../logo.PNG">
   <link rel="stylesheet" href="css/cropper.min.css">
  

<!-- bootstrap -->

<link rel="stylesheet" type="text/css" href="css/animate.css">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!-- bootstrap -->

<!-- google fonts -->
<link href="https://fonts.googleapis.com/css?family=Sulphur+Point&display=swap" rel="stylesheet">
<!-- google fonts -->

<!-- fontawesome -->
<script src="https://kit.fontawesome.com/d708a7ff0e.js"></script>
<!-- fontawesome -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
  <script src="js/scripts1.js"></script>
  <style>
  html, body{
    margin: 0 !important;
    padding: 0 !important;
    width: 100%;
}
html, body { overflow-x: hidden; }
  
/*Ui changes start*/

body{
  font-family: 'Sulphur Point', sans-serif;
}
.has-shadow{
  box-shadow: 0 2px 10px 0 rgba(0,0,0,0.15);
}

.fp-select{
  padding: 0;
  border:none; 
  border-radius: 0;
  box-shadow: 0 2px 10px 0 rgba(0,0,0,0.15);
}

.btn-fp{
    background-color: #f62626;
    color: white;
    border-radius: 0;
  }
.btn-fp:focus{
  box-shadow: 0 0 0 0.2rem rgb(128 0 0 / 30%);
}
  .custom-control-input:checked~.custom-control-label::before {
    color: #fff;
    border-color: #f62626;
    background-color: #f62626;
}

  .btn-fp:hover{
    color:white;
  }
  .navbar{
    background-color: white!important;
    
    
    box-shadow: 0 2px 10px 0 rgba(0,0,0,0.15);

  }
  .navbar-brand{
    color: #f62626!important;
    font-weight: 800;
  }
  .fp-focus:focus{
    border:2px solid #f62626;
    box-shadow:0px 0px 5px 0px #f62626;
  }
  .status{
    min-width: 200px;
    padding: 10px;
    text-align: center;
    background-color: #f62626;
    color: white;
    font-weight: 600;
    position: fixed;
    bottom: 10%;
    right: 10%;
    z-index: 100;
  }
  .btn-addform{
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    /*padding: 8px;*/
    width: 50px;
    height: 50px;
    font-size: 25px;
    position: fixed;
    box-shadow: 0 7px 7px 4px rgba(0,0,0,0.15);
    bottom: 5%;
    right: 5%;
    z-index: 10;
  }
  .btn-addform:hover{
    cursor:pointer;
  }
  a{
    color: #f62626;
  }
  .pics{
    width: 175px;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 200px;
    border: 5px dashed lightgrey;
    color: #f62626;
    padding: 5px;
    font-size: 150PX;
  }
  .img-container img {
      max-width: 100%;
    max-height:60vh;
    }

.fp-border-0{
  border-radius: 0px !important;
}

.modal-content{
  border-radius: 0px;
}

.modal-footer button{
  background-color: #f62626;
    color: white;
    border-radius: 0;
}

.form-control:focus{
  box-shadow: 0 0 0 0.2rem rgb(128 0 0 / 30%);
}

.modal-footer button:focus{
  box-shadow: 0 0 0 0.2rem rgb(128 0 0 / 30%);
}

.btncrp{
  background-color: #f62626;
  color: white;
  border-radius: 0;
  border:0;
}

.theN{
  color: #f62626;
  font-weight: 700;
}

  </style>
</head>
<body>
	<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
  <!-- Brand -->
  <a class="navbar-brand" href="" style="font-size: 22px; font-weight: 600;">ALPHA CODERS <sub>SRU</sub></a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" style="font-size: 22px; font-weight: 600;  color: #f62626!important;  border: none;" data-toggle="collapse" data-target="#collapsibleNavbar">
  <i class="fas fa-align-right"></i>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <!-- <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      
    </ul> -->
  </div>
</nav>
<div class="row mt-5">
	<div class="col-sm-3"></div>
    <div class="col-sm-6 col-xs-12 p-4" >
      <div class="has-shadow p-3" style="width: 100%; min-height: 250px;">
        <center>
        <div class="row">
          <div class="col-md-12 justify-content-center">
          	<h1>Login Form</h1>
            <form action="" method="post">
 			<div class="form-group">
 				<label>Username</label>
 				<input class="form-control" type="text" name="username">
 			</div>
 		  </div>
 		  <div class="col-md-12 justify-content-center">
 			<div class="form-group">
 				<label>Password</label>
 				<input class="form-control" type="password" name="password">
 			</div>         	
          </div>
          <div class="col-md-12 text-right">
 			<div class="form-group">
 				New User? <a href="registration.php">Click</a> Here!
 			</div>         	
          </div>
          <div class="col-md-12 justify-content-center">
 			<div class="form-group">
 				<input class="btn btn-danger form-control" type="submit" name="login" value="Login">
 			</div>         	
          </div>
        </form>
    	</div>
		</center>
	</div>
  <?php 
    if(isset($_POST['login'])){
      $uname = $_POST['username'];
      $pwd = md5($_POST['password']);
      //echo $uname." : ".$pwd;
      $qry = "select * from users where uname = '$uname' and pwd = '$pwd'";
      //echo $qry;
      $res = mysqli_query($con, $qry);
      if($row=mysqli_fetch_array($res)){
        $id = $row[0];
        $un = $row['uname'];
        ?>
        <script language="javascript" type="text/javascript">
          <!--
          window.location="home.php";
          // -->
        </script>
        <?php
      }
      else{
        echo "Login failed";
      }
    }
  ?>
</div>
</div>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
  <script src="../../js/cropper.min.js"></script>
</body>
</html>