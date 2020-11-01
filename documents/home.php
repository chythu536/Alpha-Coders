<!DOCTYPE html>
<html lang="en">
<head>
  <title>Compress & resize document for your form</title>
  <meta name="keywords" content="picture,image,jpeg,nda,na,nda/na,cds,ssc,du,aipmt,convert,form,resize,download">
  <meta name="description" content="Compress and Resize image for online forms- NDA/NA, CDS, AIPMT, SSC, DU etc..">
  <meta property="og:site_name" content="">
  <meta property="og:title" content="Compress and Resize Image for your form">
  <meta property="og:description" content="Image resizing and compression for online forms- NDA/NA, CDS, AIPMT, SSC, DU">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
    color: #f62626 !important;
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
<body >
<!-- Modal -->
 <div class="modal fade" id="modal1" role="dialog" aria-labelledby="modalLabel" tabindex="-1">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalLabel1">Cropper</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <div class="img-container">
            <img id="image1" alt="your image"  />
       </div>
          
            </div>
      
          <button type="button" class="btn btn-primary btncrp"  onclick=" select_form(''); hello('1');" data-dismiss="modal">
            <span class="docs-tooltip" id='crp1' data-toggle="tooltip" title="cropper.getCroppedCanvas()">
              crop
            </span>
          </button>
  
         
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
       </div>
        </div>
      </div>
    <!-- Modal -->
 <div class="modal fade" id="modal2" role="dialog" aria-labelledby="modalLabel" tabindex="-1">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalLabel2">Cropper</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <div class="img-container">
            <img id="image2" alt="your image"  />
       </div>
          
            </div>
      
          <button type="button" class="btn btn-primary btncrp"  onclick=" select_form(''); hello('2');" data-dismiss="modal">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.getCroppedCanvas()">
              crop
            </span>
          </button>
  
         
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
       </div>
        </div>
      </div><!-- Modal -->
 <div class="modal fade" id="modal3" role="dialog" aria-labelledby="modalLabel" tabindex="-1">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalLabel3">Cropper</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <div class="img-container">
            <img id="image3" alt="your image"  />
       </div>
          
            </div>
      
          <button type="button" class="btn btn-primary btncrp"  onclick=" select_form(''); hello('3');" data-dismiss="modal">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.getCroppedCanvas()">
              crop
            </span>
          </button>
  
         
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
       </div>
        </div>
      </div>

<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
  <!-- Brand -->
  <a class="navbar-brand" href="../home.php" style="font-size: 22px; font-weight: 600;">ALPHA CODERS <sub>SRU</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" style="font-size: 22px; font-weight: 600;  color: #f62626!important;  border: none;" data-toggle="collapse" data-target="#collapsibleNavbar">
  <i class="fas fa-align-right"></i>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" style="padding-right: 10px; padding-left: 150px; text-transform: uppercase; font-weight: 600; font-size: 16px;" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="../photos/home.php" style="color:#f62626 !important;">Photos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../documents/home.php" style="color:#f62626 !important;">Documents</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color:#f62626 !important;">My Conversions</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../" style="color:#f62626 !important;">Logout</a>
      </li>
    </ul>
  </div>
</nav>


<div class="container-fluid" style="margin-top: 6rem" >
<div class="row " style="    align-items: center;margin-top: 100px;border-bottom:1px dashed lightgrey; padding-bottom: 15px;  font-weight: 600;" >
  <div class="col-sm-7 col-xs-12">
    <h3 style="font-weight: 600;margin-bottom: 40px;"  >Image/Document conversion for your form</h3>
  </div>
  <div class="col-sm-5 col-xs-12" style="display: flex;justify-content: flex-end; align-items: center;">
    <div style="display: inherit; padding-right: 5px; align-items: center;">
      Change Form: 
      <span class="ml-1" id="list-form"></span>
    </div>
    <div style="padding-left: 5px;border-left: 1px solid #f62626;"><a class="btn btn-fp btn-sm has-shadow" href = 'custom.php'; style="background: #eab447; color: white;">Custom Resizing <i class="fas fa-hand-pointer"></i></a></div>
  </div>
</div>
<div class="gap-40"></div>
<div class="row mt-3 text" style="background-color: #f62626; padding: 25px; color: white;">

    <div class="col-sm-2 col-xs-12"></div>
    <div class="col-sm-8 col-xs-12">
      <div class="text-center mb-3" style="width:100%; border-bottom: 2px solid lightgrey;">
      <h3>Compress and resize image/document for your online form</h3>
      </div>
      <p class="text-center" style="display: inline-block;">Form picture is a simple utility to resize and compress your image before uploading it to your online form like Gate, SSC, UGC NET, JEE Main, NEET. Get your form ready image in just three clicks 1) Select form, 2) upload image, 3) Convert and download image.</p>
    </div>
</div>

</div>
 <script>
  $( document ).ready(function(){
    $("#list-form").load("list.php",function(){
      $('#theselect').val('');
    });

  });
</script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
  <script src="../dist/js/cropper.min.js"></script>
</body>
</html>