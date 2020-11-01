<!DOCTYPE html>
<html lang="en">
<head>
  <title>Compress & resize image for your form:Form Picure</title>
	<meta name="keywords" content="without uploading server, compress, picture, image, jpeg, Custom Resizing, Custom Image Compression, convert, resize, download">
	<meta name="description" content="Resize and Compress Image of any size, to any size. Resize Your image in mm, px, cm, pt, em, %, in. Without uploading to Server.">
	<meta property="og:site_name" content="formpicture.com">
	<meta property="og:title" content="Compress and Resize Image for your form">
	<meta property="og:description" content="Image resizing and compression for online forms- NDA/NA, CDS, AIPMT, SSC, DU">
	<meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="icon" type="image/png" sizes="32x32" href="logo.PNG">
 


<!-- bootstrap -->

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<!-- bootstrap -->

<!-- google fonts -->
<link href="https://fonts.googleapis.com/css?family=Sulphur+Point&display=swap" rel="stylesheet">
<!-- google fonts -->

<link rel="stylesheet" href="dist/css/cropper.min.css">



	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-86897255-1', 'auto');
  ga('send', 'pageview');

</script>

<script data-ad-client="ca-pub-2141063778491864" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>


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
/*Ui changes end*/

.main-content{
 	width: 75%!important;
 	padding: 25px 40px!important;
 }




@media only screen and (max-width: 767px) {
     #ninja{
	 display:none;
	 position:absolute;
	 }

	 .main-content{
	 	width: 100%!important;
	 }

	 .btn-container{
	 	margin-left: 20px;
	 }
      
    }

 @media only screen and (min-width: 768px) {
      #ninja{
	 display:visible;
	 position:inherit;
	 }
      


    }

	
</style>



</head>
<body>
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
			
          <button type="button" class="btn btn-primary btncrp" style="width:100%" onclick="hello();" data-dismiss="modal">
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

<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
  <!-- Brand -->
  <a class="navbar-brand" href="./" style="font-size: 22px; font-weight: 600;">ALPHA CODERS <sub> SRU</a>

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

<div class="container-fluid" style="margin-top: 6rem" >

<div class="row " style="    align-items: center;margin-top: 100px;border-bottom:1px dashed lightgrey; padding-bottom: 15px;	font-weight: 600;" >
	<div class="col-sm-7 col-xs-12">
		<h3 style="font-weight: 600;margin-bottom: 40px;"  >Image conversion for your form</h3>
	</div>
	<div class="col-sm-5 col-xs-12" style="display: flex;
justify-content: flex-end;
align-items: center;">
		<div style="padding-left: 5px;border-left: 1px solid #f62626;"><a class="btn btn-fp btn-sm has-shadow" href = './'; style="background: ##f62626; color: white;"><i class="fas fa-home"></i>&nbsp;Home</a></div>
	</div>
</div>

<div class="row mt-3 text" style="background-color: #f62626; padding: 25px; color: white;">

	<div class="col-sm-2 col-xs-12"></div>
	<div class="col-sm-8 col-xs-12">
		<div class="text-center mb-3" style="width:100%; border-bottom: 2px solid lightgrey;">
		<h3>Compress and resize image in cm , mm, px</h3>
		</div>
		<p class="text-center" style="display: inline-block;">Resize and Compress Image of any size, to any size. Resize Your image in mm (millimeter), px (pixel), cm (centimeter), pt (point), em, % (percentage), in (inches). Compress your image to specified given size Without uploading to Server. 
</p>
	</div>
	<div class="col-sm-2 col-xs-12"></div>
</div>

	<div class="row mt-3" >

	<div class="col-lg-3 col-xs-12 mt-1">
			<div class="row">
				<div class="col-3 d-flex align-items-center justify-content-center"><span style="font-weight: 600"> Width:</span></div>
				<div class="col-9">
					<input type="number" placeholder="Enter Width" class="form-control fp-border-0" style="border: 1px solid lightgrey;" id="wd">
				</div>
			</div>
					  			
	</div>
	<div class="col-lg-3 col-xs-12 mt-1">
	
			<div class="row">
				<div class="col-3 d-flex align-items-center justify-content-center"><span style="font-weight: 600"> Height:</span></div>
				<div class="col-9">
					<input type="number" placeholder="Enter Height" class="form-control fp-border-0" style="border: 1px solid lightgrey;" name="ht" id="ht">
				</div>
			</div>	
   </div>
   <div class="col-lg-3 col-xs-12 text-center mt-1">
		
		<div class="row">
				<div class="col-3 d-flex align-items-center justify-content-center"><span style="font-weight: 600"> Unit:</span></div>
				<div class="col-9">
					<div id="unt" >
					 	<select class="form-control fp-border-0 " style="border: 1px solid lightgrey;" id='slct'>
						  	<option value="px" >px</option>
						   	<option value="cm" >cm</option>
						  	<option value="mm">mm</option>
						  	<option value="pt" >pt</option>
						  	<option value="in">in</option>
						  	<option value="%">%</option>
						   	<option value="em" >em</option>
						</select>
					</div>
				</div>
			</div>	
   </div>
		<div class="col-lg-3 col-xs-12 mt-1">
		  <div class="row">
				<div class="col-3 d-flex align-items-center justify-content-center"><span style="font-weight: 600">Size(Kb):</span></div>
				<div class="col-9">
					<input type="number" placeholder="Max size" class="form-control fp-border-0" style="border: 1px solid lightgrey;" name="mx" id="mx">
				</div>
			</div>
		</div>
	</div>

<div class="row mt-3 p-2 justify-content-center">
	<div class="has-shadow main-content" > 
	<div class="row">
				<div class="col-sm-4 col-6 d-flex justify-content-center">
					<div class="">
						<canvas id="myCanvas1" style="visibility:hidden; position:absolute;" ></canvas>
						<img class="img-responsive pics has-shadow d-none" id='sign'   style="width: 175px;height: 200px;" src="" alt="Chania"/>
						<div class="pics has-shadow" id="icon-img1"> <i class="fas fa-user-tie"></i></div>
						<img id='signrsl'  style="visibility:hidden; position:absolute;"/>
						<div class="text-center has-shadow p-1 mt-2" style="background-color: white; color: black; width: 175px;" id="resol1">
						  Width= -- Height= --
						  </div>      
					</div> 
				</div>
				<div class=" text-center col-sm-4 col-6 d-flex align-items-center justify-content-center">
						

						<div class=" text-center btn-container" style="width: 100%">
							<div class="container-fluid">
								<!-- Upload Clutter -->
								<input type="file" class="sr-only" id="inputImage1" onchange="flagu=1; document.getElementById('image1').src = window.URL.createObjectURL(this.files[0]);tname=this.files[0].name; $('#modal1').modal({backdrop: 'static'}); this.value = ''; " name="file" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff" class="d-none">
								<!-- Upload Clutter end -->
							<div class="row mb-2 d-flex justify-content-center"><button onclick="$('#inputImage1').click()" class="btn btn-fp  has-shadow">Upload</button></div>
							<div class="row mb-2 d-flex justify-content-center"><button onclick="convert('sign','sign2')" class="btn btn-fp  has-shadow">Convert</button></div>
							<div class="row mb-2 d-flex justify-content-center"><a class="btn btn-fp  has-shadow"  download='' id="down1" class="btn btn-default" style="color: white" onclick="thedownload();">Download</a></div>
							</div>
						</div>
				</div>
				<div class="col-sm-4 col-6 d-flex  justify-content-center" >
				<div id="ninja">
						<canvas id="myCanvas2" style="visibility:hidden; position:absolute;" ></canvas>
						<img class="img-responsive pics has-shadow d-none" id='sign2' style="width: 175px;height: 200px;" src="" alt="Chania"/>
						<div class="pics has-shadow" id="icon-img2"> <i style="font-size:110px" class="fas fa-user-check"></i></div>
						<div class="text-center has-shadow p-1 mt-2" style="background-color: white; color: black; width: 175px" id="resol2">
						  Width= -- Height= --
						  </div>       
					</div>
				</div>
			
	</div>	
	</div>
	
</div>
<div class="row has-shadow p-2 justify-content-center" style="font-weight:600; color:#f62626">
	<span>All Rights Reserved</span>
</div>
			

</div>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
   <script src="scripts2.js"></script>

   <script src="https://kit.fontawesome.com/d708a7ff0e.js"></script>
<script>
	

	$( document ).ready(function(){
	  $("#list-form").load("forms/list.html",function(){

	}); 
	});
</script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
  <script src="dist/js/cropper.min.js"></script>



</body>
</html>