var sr1;
var sr2;
var sr3;
var pic_width1;
var pic_height1;
var pic_width2;
var pic_height2;
var pic_width3;
var pic_height3;
var size_limit1;
var size_limit2;
var size_limit3;
var tname;
var flag=0;
var flagu=0;
var flags=0;
var tdata;

function select_form(select){
	
	if(select=='GATE')
	{	
			w1=560;
	        h1=160;
	        w2=480;
	        h2=640;
	        w3=480;
	        h3=640;
		pic_width1=560;
		pic_height1=160;
		size_limit1=200;
		pic_width2=480;
		pic_height2=640;
		size_limit2=200;
		pic_width3=480;
		pic_height3=640;
		size_limit3=200;
	}
	if(select=='SSC')
	{ 
		w1=140;
	        h1=60;
	        w2=100;
	        h2=120;
	        w3=100;
	        h3=120;
		pic_width1=140;
		pic_height1=60;
		size_limit1=30;
		pic_width2=100;
		pic_height2=120;
		size_limit2=40;
		pic_width3=100;
		pic_height3=120;
		size_limit3=30;
	}
	if(select=='NEET')
	{	w1=140;
	        h1=60;
	        w2=200;
	        h2=300;
	        w3=200;
	        h3=300;
		pic_width1=140;
		pic_height1=60;
		size_limit1=20;
		pic_width2=200;
		pic_height2=300;
		size_limit2=100;
		pic_width3=200;
		pic_height3=300;
		size_limit3=20;
	}
	if(select=='NET')
	{	
			w1="3.5cm";
	        h1="1.5cm";
	        w2="3.5cm";
	        h2="4.5cm";
	        w3="3.5cm";
	        h3="4.5cm";
		pic_width1=cnvtr('3.5cm');
		pic_height1=cnvtr('1.5cm');
		size_limit1=30;
		pic_width2=cnvtr('3.5cm');
		pic_height2=cnvtr('4.5cm');
		size_limit2=40;
		pic_width3=cnvtr('3.5cm');
		pic_height3=cnvtr('4.5cm');
		size_limit3=30;
	}
	if(select=='JEE')
	{	
	w1="3.5cm";
	        h1="1.5cm";
	        w2="3.5cm";
	        h2="4.5cm";
	        w3="3.5cm";
	        h3="4.5cm";
		pic_width1=cnvtr('3.5cm');
		pic_height1=cnvtr('1.5cm');
		size_limit1=30;
		pic_width2=cnvtr('3.5cm');
		pic_height2=cnvtr('4.5cm');
		size_limit2=40;
		pic_width3=cnvtr('3.5cm');
		pic_height3=cnvtr('4.5cm');
		size_limit3=30;
	}
	if(select='')
		{
				bootbox.alert({
				message: "Select a Form ",
				backdrop: true
				});
		return;	
		}
		flags=1;
		
	
	
	function cnvtr(ht)
	   	{
		  var para=document.createElement('div');
		  document.body.appendChild(para);
		  para.style.cssText="background-color:red; width:100px; height:"+ht+"; position:absolute; visibility:hidden;";
		  var inpx=para.clientHeight;
          return inpx;
		}


}

  var cropper;
    window.addEventListener('DOMContentLoaded', function () {
      var image2 = document.getElementById('image2');
	  var cropBoxData;
      var canvasData;
     

      $('#modal1').on('shown.bs.modal', function () {
        cropper = new Cropper(image1, {
          autoCropArea: 0.8,
          rotatable:true,
          ready: function () {
			  
            // Strict mode: set crop box data first
            cropper.setCropBoxData(cropBoxData).setCanvasData(canvasData);
		
			
          }
        });
		
      }).on('hidden.bs.modal', function () {
        cropBoxData = cropper.getCropBoxData();
        canvasData = cropper.getCanvasData();
        cropper.destroy();

      });
	  
	     $('#modal2').on('shown.bs.modal', function () {
        cropper = new Cropper(image2, {
          autoCropArea: 0.8,
          rotatable: true,
          ready: function () {
			  
            // Strict mode: set crop box data first
            cropper.setCropBoxData(cropBoxData).setCanvasData(canvasData);
			
          }
        });
		
      }).on('hidden.bs.modal', function () {
        cropBoxData = cropper.getCropBoxData();
        canvasData = cropper.getCanvasData();
        cropper.destroy();

      });
	  
	  
	    $('#modal3').on('shown.bs.modal', function () {
        cropper = new Cropper(image3, {
          autoCropArea: 0.8,
          rotatable: true,
          ready: function () {
			  
            // Strict mode: set crop box data first
            cropper.setCropBoxData(cropBoxData).setCanvasData(canvasData);
			
          }
        });
		
      }).on('hidden.bs.modal', function () {
        cropBoxData = cropper.getCropBoxData();
        canvasData = cropper.getCanvasData();
        cropper.destroy();

      });
    });
	
	
	function hello(instr){
	flagu=1;
			var result= cropper.getCroppedCanvas();
			
			if(instr=='2')
			{
			tdata=result.toDataURL('image/jpeg');
			document.getElementById('photo').setAttribute('src',tdata);
			$('#icon-img2').hide();
			$('#photo').removeClass('d-none');
			readU('photo',tdata);
			}
		}
	



function readU(str,data) {

	if(flags!=1)
		{
				bootbox.alert({
				message: "Select a Form first!",
				backdrop: true
				});
		return;	
		}    
		if(str=='photo')
		{
			displayPreview('photo',2,data);	
		}	
    }
	function displayPreview(tid,no,thedata) {
		var fileSize = Math.round((((thedata.length * 3 / 4)/1024)+0.00001)*100)/100;
        var img=new Image();
        img.onload = function () {
			if(no==2)
			 document.getElementById('resol2').innerHTML="Width="+img.width+"px</br>Height="+img.height+"px</br>Size="+fileSize+"kb";
        };
     img.src=thedata;
}
//HANDLE COMPRESS BUTTON
function convert(inpic,outpic)
{		

	if(flagu!=1)
	{
		bootbox.alert({
    		message: "Upload an image first!",
    		backdrop: true
    	});
		return;	
	}	
	if(flags!=1)
	{
		bootbox.alert({
    		message: "Select a Form first!",
    		backdrop: true
		});
		return;	
	}
	flag=1;
	var source_image;
	var result_image;
	flagu=0;// seltting upload to 0 again
	//******************resizing*******************
	var canvas2 = document.getElementById('myCanvas2');
	var context2 = canvas2.getContext('2d');
	
//**************jic library function*********//
var jic = {
   
			compress: function(source_img_obj, quality, output_format,inpic){
             var mime_type = "image/jpeg";
             if(typeof output_format !== "undefined" && output_format=="png"){
                mime_type = "image/png";
             }

             var cvs = document.createElement('canvas');
            
			 
			 	
			if(inpic=='photo')
				{	 cvs.width = pic_width2;
				cvs.height = pic_height2;
			 }
             // alert(source_img_obj.naturalWidth);
             // alert(source_img_obj.naturalHeight);
						

             var ctx = cvs.getContext("2d").drawImage(source_img_obj, 0, 0,cvs.width ,cvs.height);
			 
			 do{var newImageData = cvs.toDataURL(mime_type, (quality/100));
             var result_image_obj = new Image();
             result_image_obj.src = newImageData;
			
			 var size1 = Math.round((((result_image_obj.src.length * 3 / 4)/1024)+0.00001)*100)/100;
			 quality--;
			 }while( ((inpic=='sign')&&(size1>size_limit1)) || ((inpic=='photo')&&(size1>size_limit2)) || ((inpic=='thmb')&&(size1>size_limit3)) );
			
			return result_image_obj;
        },

        /**
         * Receives an Image Object and upload it to the server via ajax
         * @param {Image} compressed_img_obj The Compressed Image Object
         * @param {String} The server side url to send the POST request
         * @param {String} file_input_name The name of the input that the server will receive with the file
         * @param {String} filename The name of the file that will be sent to the server
         * @param {function} successCallback The callback to trigger when the upload is succesful.
         * @param {function} (OPTIONAL) errorCallback The callback to trigger when the upload failed.
	     * @param {function} (OPTIONAL) duringCallback The callback called to be notified about the image's upload progress.
	     * @param {Object} (OPTIONAL) customHeaders An object representing key-value  properties to inject to the request header.
         */

        upload: function(compressed_img_obj, upload_url, file_input_name, filename, successCallback, errorCallback, duringCallback, customHeaders){

            //ADD sendAsBinary compatibilty to older browsers
            if (XMLHttpRequest.prototype.sendAsBinary === undefined) {
                XMLHttpRequest.prototype.sendAsBinary = function(string) {
                    var bytes = Array.prototype.map.call(string, function(c) {
                        return c.charCodeAt(0) & 0xff;
                    });
                    this.send(new Uint8Array(bytes).buffer);
                };
            }

            var type;
            if(filename.substr(-4).toLowerCase()===".png"){
                type = "image/png";
            } else if(filename.substr(-5).toLowerCase()===".webp") {
                type = "image/webp";
            } else {
                type = "image/jpeg";
            }

            var data = compressed_img_obj.src;
            data = data.replace('data:' + type + ';base64,', '');
            
            var xhr = new XMLHttpRequest();
            xhr.open('POST', upload_url, true);
            var boundary = 'someboundary';

            xhr.setRequestHeader('Content-Type', 'multipart/form-data; boundary=' + boundary);
		
		// Set custom request headers if customHeaders parameter is provided
		if (customHeaders && typeof customHeaders === "object") {
			for (var headerKey in customHeaders){
				xhr.setRequestHeader(headerKey, customHeaders[headerKey]);
			}
		}
		
		// If a duringCallback function is set as a parameter, call that to notify about the upload progress
		if (duringCallback && duringCallback instanceof Function) {
			xhr.upload.onprogress = function (evt) {
				if (evt.lengthComputable) {  
					duringCallback ((evt.loaded / evt.total)*100);  
				}
			};
		}
		
            xhr.sendAsBinary(['--' + boundary, 'Content-Disposition: form-data; name="' + file_input_name + '"; filename="' + filename + '"', 'Content-Type: ' + type, '', atob(data), '--' + boundary + '--'].join('\r\n'));
            
            xhr.onreadystatechange = function() {
			if (this.readyState == 4){
				if (this.status == 200) {
					successCallback(this.responseText);
				}else if (this.status >= 400) {
					if (errorCallback &&  errorCallback instanceof Function) {
						errorCallback(this.responseText);
					}
				}
			}
            };


        }

      
};
//**************jic library function end *************
	
        var output_format = "jpg";

		source_image = document.getElementById(inpic);
		if(sr1!=null &&inpic=='sign')
			source_image.src=sr1;
		if(sr2!=null &&inpic=='photo')
			source_image.src=sr2;
		if(sr3!=null &&inpic=='thmb')
			source_image.src=sr3;
		
          result_image = document.getElementById(outpic);
		
		if (source_image.src == "") {
            alert("You must load an image first!");
            return false;
        }
		
		if (source_image.src != "")
		{
			//	var comprs=document.getElementById("slide").value;
     		//   var quality =comprs;
			//	quality=100-quality;
		quality=100;
        result_image.src = jic.compress(source_image,quality,output_format,inpic).src; 
	
		
		var size = Math.round((((result_image.src.length * 3 / 4)/1024)+0.00001)*100)/100;
		
		source_image.src=result_image.src;
		
        result_image.onload = function(){
        
       	        
	        
	        	result_image.style.width="140px";
	       
	        	result_image.style.height="100px";
	        
	     


        }
		

		
		
		if(inpic=='photo')
		{	
			document.getElementById("down2").setAttribute('download',"alpha-coders-sru-"+tname);
			document.getElementById("down2").setAttribute('href',result_image.src);
			document.getElementById('resol2').innerHTML='<span class="theN">New </span>Width='+w2+' <span class="theN"><br>New </span>Height='+h2+' <span class="theN"><br>New </span>Size='+'~'+size+'kb';
		//	document.getElementById('inresrslt2').innerHTML='<br><b>New Width x Height: </b>'+pic_width2+'x'+pic_height2;
		}	
		
		}
		 
    }
	
	function thedownload(){
		if(flag!=1)
		{
			bootbox.alert({
    message: "Covert image before downloading",
    backdrop: true
});
		}
		
		flag=0;
		
	}
	
	