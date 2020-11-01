<!DOCTYPE html>
<html lang="en">
<head>
  <title>Compress & resize image for NEET form</title>
  <meta name="keywords" content="picture,image,jpeg,gate,form,graduate,level,aplitude,test,convert,resize,download">
  <meta name="description" content="Compress and Resize image for online forms- Gate, NDA/NA, CDS, AIPMT, SSC etc..">
  <meta property="og:site_name" content="alpha coders - sru">
  <meta property="og:title" content="Compress and Resize Image for NEET form">
  <meta property="og:description" content="Image resizing and compression for online forms - Gate, NDA/NA, CDS, AIPMT, SSC, DU">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" sizes="32x32" href="../logo.PNG">
   <link rel="stylesheet" href="../css/cropper.min.css">
  

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
  <script src="../js/scripts1.js"></script>
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
<body >

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
      
          <button type="button" class="btn btn-primary btncrp"  onclick=" select_form('NEET'); hello('2');" data-dismiss="modal">
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
  <a class="navbar-brand" href="../../home.php" style="font-size: 22px; font-weight: 600;">ALPHA CODERS <sub>SRU</sub></a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" style="font-size: 22px; font-weight: 600;  color: #f62626!important;  border: none;" data-toggle="collapse" data-target="#collapsibleNavbar">
  <i class="fas fa-align-right"></i>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" style="padding-right: 10px; padding-left: 150px; text-transform: uppercase; font-weight: 600; font-size: 16px;" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="../../photos/home.php" style="color:#f62626 !important;">Photos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../../documents/home.php" style="color:#f62626 !important;">Documents</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color:#f62626 !important;">My Conversions</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../../" style="color:#f62626 !important;">Logout</a>
      </li>
    </ul>
  </div>
</nav>


<div class="container-fluid" style="margin-top: 6rem" >

<div class="row " style="    align-items: center;margin-top: 100px;border-bottom:1px dashed lightgrey; padding-bottom: 15px;  font-weight: 600;" >
  <div class="col-sm-7 col-xs-12">
    <h3 style="font-weight: 600;margin-bottom: 40px;"  >Image conversion for NEET form</h3>
  </div>
  <div class="col-sm-5 col-xs-12" style="display: flex;
justify-content: flex-end;
align-items: center;">
    <div style="padding-right:  5px;display: inherit;
padding-right: 5px;
align-items: center;">Change Form: <span class="ml-1" id="list-form"></span>
    </div>
    <div style="padding-left: 5px;border-left: 1px solid #f62626;"><a class="btn btn-fp btn-sm has-shadow" href = '../../custom.php'; style="background: #f62626; color: white;">Custom Resizing <i class="fas fa-hand-pointer"></i></a></div>
  </div>
</div>
<div class="row mt-3 text" style="background-color: #f62626; padding: 25px; color: white;">

    <div class="col-sm-2 col-xs-12"></div>
    <div class="col-sm-8 col-xs-12">
      <div class="text-center mb-3" style="width:100%; border-bottom: 2px solid lightgrey;">
      <h3>Resize and compress image for NEET UG - National Eligibility cum Entrance Test
</h3>
      </div>
      <p class="text-center" style="display: inline-block;">Compress NEET UG - National Eligibility cum Entrance Test photograph less than 100KB and more than 10kb, resize with desired dimension, compress Signature for NEET UG to less than 20kb and more than 3kb with desired dimension.</p>
    </div>
    <div class="col-sm-2 col-xs-12"></div>
  </div>
<div class="row mt-5">
  <div class="col-sm-3 col-xs-12"></div>
    <div class="col-sm-6 col-xs-12 p-4" >
      <div class="has-shadow p-3" style="width: 100%; min-height: 250px;">
        <div class="row">
          <div class="col-6 p-2 d-flex justify-content-center">
              <div style="margin-left: 20px">
              <canvas id="myCanvas2" style="visibility:hidden; position:absolute;" ></canvas>
              <img class="img-responsive pics has-shadow d-none" id='photo' style="width: 175px;height: 200px;" src="" alt="Chania"/>
              <div class="pics has-shadow" id="icon-img2"> <i class="fas fa-file-image"></i></div>
              <img id='photorsl'  style="visibility:hidden; position:absolute;"/>
              <div class="text-center has-shadow p-1 mt-2" style="background-color: white; color: black; width: 175px;" id="resol2">
                Width= -- Height= --
                </div>      
              </div> 
          </div>
          <div class="col-6 p-2 d-flex justify-content-center">
            <div class="pt-2 text-center" style="width: 100%">
              <div class="container-fluid">
              <div class="row mb-3" style="width: 80%; display: inline-block; border-bottom: 1px dashed lightgrey;"><h4 class="text-center" style="font-weight: 600;">Photo/Sign</h4></div>
              <div class="row mb-2 d-flex justify-content-center">
                  <!-- upload clutter -->
                 <input type="file" class="sr-only" id="inputImage2" onchange="document.getElementById('image2').src = window.URL.createObjectURL(this.files[0]);  tname=this.files[0].name; $('#modal2').modal({backdrop: 'static'}); this.value = '';" name="file" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff">
                <!-- upload clutter end -->

              <button class="btn btn-fp  has-shadow" onclick="$('#inputImage2').click();" ><i class="fas fa-folder-open"> </i>&nbsp;Browse</button></div>
              <div class="row mb-2 d-flex justify-content-center"><button class="btn btn-fp  has-shadow" onclick=" convert('photo','photorsl');"><i class="fas fa-compress-arrows-alt"></i>&nbsp;Convert</button></div>
              <div class="row mb-2 d-flex justify-content-center"><a class="btn btn-fp  has-shadow"  download='' id="down2" class="btn btn-default" style="color: white;cursor:pointer;" onclick="thedownload();"><i class="fas fa-save"></i>&nbsp;Save & Upload</a></div>
              </div>
            </div> 
          </div>
        </div>
       </div>
    </div>
    <!-- <div class="col-sm-6 col-xs-12 p-4" >
      <div class="has-shadow p-3" style="width: 100%; min-height: 250px;">
        <div class="row">
          <div class="col-6 p-2 d-flex justify-content-center">
              <div style="margin-left: 20px">
              <canvas id="myCanvas1" style="visibility:hidden; position:absolute;" ></canvas>
              <img class="img-responsive pics has-shadow d-none" id='sign'   style="width: 175px;height: 200px;" src="" alt="Chania"/>
              <div class="pics has-shadow" id="icon-img1"> <i class="fas fa-file-alt"></i></div>
              <img id='signrsl'  style="visibility:hidden; position:absolute;"/>
              <div class="text-center has-shadow p-1 mt-2" style="background-color: white; color: black; width: 175px;" id="resol1">
                File Size = --
                </div>      
              </div> 
          </div>
          <div class="col-6 p-2 d-flex justify-content-center">
            <div class="pt-2 text-center" style="width: 100%">
              <div class="container-fluid">
              <div class="row mb-3" style="width: 80%; display: inline-block; border-bottom: 1px dashed lightgrey;"><h4 class="text-center" style="font-weight: 600;" >Document</h4></div>
              <div class="row mb-2 d-flex justify-content-center">
                  
                 <input type="file" class="sr-only" id="inputImage1" onchange="document.getElementById('image1').src = window.URL.createObjectURL(this.files[0]);  tname=this.files[0].name; $('#modal1').modal({backdrop: 'static'}); this.value = '';" name="file" accept=".pdf,.doc,.docx,.ppt,.pptx">
                
              <button class="btn btn-fp  has-shadow" onclick="$('#inputImage1').click();" ><i class="fas fa-folder-open"> </i>&nbsp;Browse</button></div>
              <div class="row mb-2 d-flex justify-content-center"><button class="btn btn-fp  has-shadow"  onclick=" convert('sign','signrsl');" ><i class="fas fa-compress-arrows-alt"></i>&nbsp;Convert</button></div>
              <div class="row mb-2 d-flex justify-content-center"><a class="btn btn-fp  has-shadow"  download='' id="down1" class="btn btn-default" style="color: white;cursor:pointer;" onclick="thedownload();"><i class="fas fa-save"></i>&nbsp;Save & Upload</a></div>
              </div>
            </div> 
          </div>
        </div>
       </div> -->
    </div>
  </div>

</div>
<script>
  $( document ).ready(function(){
    $("#list-form").load("list.php",function(){
      $('#theselect').val('neet');
    });

  });
</script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
  <script src="../js/cropper.min.js"></script>
</body>
</html>