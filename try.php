<?php

include_once('functions/functions.php');

//header("Access-Control-Allow-Origin: *");

?>

<!doctype html>
<html lang="en">

<head>
    <title>AltvisionApp</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">
    <style>
    .Navbar {
  display: flex;
  font-family: sans-serif;
  color: white;
}

.Navbar__Link {
  padding-right: 8px;
}

.Navbar__Items {
  display: flex;
}

.Navbar__Items--right {
  margin-left:auto;
}

.Navbar__Link-toggle {
  display: none;
}

@media only screen and (max-width: 768px) {
  .Navbar__Items,
  .Navbar {
    flex-direction: column;
  }
    
.Navbar__Items {
    display:none;
  }
    
.Navbar__Items--right {
    margin-left:0;
  }
    
.Navbar__ToggleShow {
    display: flex;
  }
    
.Navbar__Link-toggle {
    align-self: flex-end;
    display: initial;
    cursor: pointer;
   } 
}
    </style>

  </head>

  <header class="site-navbar site-navbar-target" role="banner" style="padding: 0em;">

    <div class="container" style="max-width: 100%;">
      <div class="row align-items-center position-relative">

        <div class="col-3 ">
          <div class="site-logo">
            <a href="./" class="font-weight-bold"><img style="width: 15%" src="icons_new/logo/icon1.png" id="logoimg"></a>
          </div>
        </div>

        <div class="col-9  text-right" style="padding-right: 0px;">


          <!-- <span class="d-inline-block d-lg-none" onclick="showmenu();"><a href="#" class="text-primary site-menu-toggle js-menu-toggle py-5"><span class="icon-menu h3 text-primary"></span></a></span> -->



          <!-- <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation" id="nav">
            <ul class="site-menu main-menu js-clone-nav ml-auto ">
              <li class = 'active'><a href="./" class="nav-link">Home</a></li>
              <li><a href="about.html" class="nav-link">Our Story</a></li>
							<li><a href="video.php" class="nav-link">video</a></li>
              <li><a href="try.php" class="nav-link try_beta ">Try Beta</a></li>
            </ul>
          </nav> -->

          <div class="Navbar">
            <div class="Navbar__Link Navbar__Link-toggle">
              <span class="icon-menu h3 text-primary"></span>
            </div>
            <nav class="Navbar__Items Navbar__Items--right" style="min-height: 80px;">
              <div class="Navbar__Link" style="padding: 1em;">
                <a href="./" class="nav-link" style="color: #f7f7f7;">Home</a>
              </div>
              <div class="Navbar__Link" style="padding: 1em;">
                <a href="video.php" class="nav-link" style="color: #f7f7f7;">Video</a>
              </div>
              <div class="Navbar__Link" style="padding: 1em; background-color: blue;">
                <a href="try.php" class="nav-link" style="color: #f7f7f7;">Try Beta</a>
              </div>
            </nav>
          </div>
        </div>

      </div>
    </div>

  </header>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


<div class="site-wrap" id="home-section">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

</div>
<section>
       <div class="upload">
										 <div class="container" style="margin-top: 15%">
								         <div class="row my-4">
								             <div class="col">
								                 <div type="file" class="jumbotron" id='respdiv'>
								                     <form style="cursor: pointer;" onclick="clicked();" ondrop="dropimg(event);" action="/file-upload" class="dropzone dz-clickable" id="my-dropzone">
								                         <div class="dz-message d-flex flex-column" id=" click" type="file">
																					 <div class="upload-container">
																							 <input style="display: none;" type="file" id="file-uploader" name="file" accept="image/jpeg, image/png" />
																					 </div>
								                             <i class="material-icons text-muted">cloud_upload</i>
								                             Drag &amp; Drop here or click
								                         </div>
								                     </form>
								                 </div>
								             </div>
								         </div>
								     </div>
                   </div>
    <!-- <div class="rigt_create_icons">
        <img class="rigt_icons" src="icons/print/Group 5.png"></img>
        <img class="rigt_icons" src="icons/facebook share button/share on fb.png"></img>
        <img class="rigt_icons" src="icons\downlaod\Combined Shape.png"></img>
    </div> -->
</section>
<div class="site-section">
    <div class="container">
        <div class="row mb-4 text-center">
            <div class="col">
                <a href="#"><span class="m-2 icon-facebook"></span></a>
                <a href="#"><span class="m-2 icon-twitter"></span></a>
                <a href="#"><span class="m-2 icon-linkedin"></span></a>
                <a href="#"><span class="m-2 icon-instagram"></span></a>
            </div>
        </div>
        <div class="row mt-5 justify-content-center">
            <div class="col-md-7 text-center">
                <p>
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> <b>Alt Mind</b></a>
                </p>
            </div>
        </div>
    </div>
</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-migrate-3.0.0.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/aos.js"></script>

<script src="js/javascript.js"></script>
<script src="js/load-image.js"></script>


<script type="text/javascript">

    window.onload = function() {
      let dropHere = document.getElementById('my-dropzone');
      dropHere.addEventListener("drop", function(e) { e.preventDefault(); });
      dropHere.addEventListener("dragover", function(e) { e.preventDefault(); });
    };

    function dropimg(ev) {

      // Prevent default behavior (Prevent file from being opened)
      ev.preventDefault();

      if (ev.dataTransfer.items) {
        // Use DataTransferItemList interface to access the file(s)
        for (var i = 0; i < ev.dataTransfer.items.length; i++) {
          // If dropped items aren't files, reject them
          if (ev.dataTransfer.items[i].kind === 'file') {
            var file = ev.dataTransfer.items[i].getAsFile();
            //console.log('... file[' + i + '].name = ' + file.name);

            var tmppath = URL.createObjectURL(file)
            let image = document.createElement('img');

            image.src = tmppath;

            var fileName = file.name;
            lastFile = file;
            fileType = file.type;
            loadImage(
								file,
								function(image, data) {
									  var imgCanvas = document.createElement("canvas"),
								    imgContext = imgCanvas.getContext("2d");
								    // Make sure canvas is as big as the picture
								    imgCanvas.width = image.width;
								    imgCanvas.height = image.height;

								    // Draw image into canvas element
								    imgContext.drawImage(image, 0, 0, image.width, image.height);
								    // Save image as a data URL

                  showFile(imgCanvas.toDataURL(fileType), fileName);
                  uploadFile(file, '');
                },
                {
                    canvas: true,
                    pixelRatio: window.devicePixelRatio,
                    orientation: true
                }
            );
          }
        }
      } else {
        // Use DataTransfer interface to access the file(s)
        for (var i = 0; i < ev.dataTransfer.files.length; i++) {
          console.log('... file[' + i + '].name = ' + ev.dataTransfer.files[i].name);
        }
      }
    }

    window.mobileAndTabletCheck = function() {
    let check = false;
    (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);

    return check;
    };

    if (mobileAndTabletCheck()){
        document.getElementById('logoimg').style.width = '60%';
    }

    function classToggle() {
        const navs = document.querySelectorAll('.Navbar__Items')
        
        navs.forEach(nav => nav.classList.toggle('Navbar__ToggleShow'));
    }

    document.querySelector('.Navbar__Link-toggle')
        .addEventListener('click', classToggle);

function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}

        //loadArtists(artists, artists.length > 0 ? artists[0].id : undefined);
        var lastFile;

        var downloadLinkUrl = {};
        var alreadyStylizedImages = {};

        function onUpload() {
            if (!this.files || !(this.files.length >= 0)) {
                lastFile = undefined;
                return;
            }
            var fileName = $(this).val();
            lastFile = this.files[0];
            fileType = lastFile.type;
            loadImage(
								this.files[0],
								function(image, data) {
									var imgCanvas = document.createElement("canvas"),
								    imgContext = imgCanvas.getContext("2d");
								    // Make sure canvas is as big as the picture
								    imgCanvas.width = image.width;
								    imgCanvas.height = image.height;

								    // Draw image into canvas element
								    imgContext.drawImage(image, 0, 0, image.width, image.height);
								    // Save image as a data URL

									showFile(imgCanvas.toDataURL(fileType), fileName);
									checkAndUpload();
                },
                {
                    canvas: true,
                    pixelRatio: window.devicePixelRatio,
                    orientation: true
                }
            );
        }

        $('#file-uploader').bind('change', onUpload);

        function showFile(imageSrc, fileName) {
            document.querySelectorAll('.jumbotron')[0].style.backgroundColor = "black";
            remakePhotoArea(imageSrc);
            var image = document.getElementById('main-image');
            if (!image) {
                $('.main-image-container').append('<img src="" id="main-image" />');
                image = document.getElementById('main-image');
            }

            if (!image) {
                return;
            }

            image.src = imageSrc;
            downloadName = fileName.split("\\").pop();
            downloadName = downloadName.substring(0, downloadName.lastIndexOf(".")) + "_colored" + downloadName.substring(downloadName.lastIndexOf("."));

            $("#downloadLinkUrl").attr("href", imageSrc);
            $("#downloadLinkUrl").attr("download", downloadName);
        }

        var hasAlreadyShown = false;

        function remakePhotoArea(imageSrc) {
            if (hasAlreadyShown) {
                return;
            }
            hasAlreadyShown = true;
            $('.jumbotron').html('\
                <div class="main-image-container"><div class="original-image-view-icon"></div></div>\
                <div class="main-image-support-buttons">\
                    <a href="" id="downloadLinkUrl" download="">\
                        <span>\
												<img src="icons_new/downlaod/download.png" height="70" width="70">\
							          </span>\
                    </a>\
                    <div class="minmized-upload-container">\
                            <input style="display: none;" type="file" id="minimized-file-uploader" name="file" accept="image/jpeg, image/png">\
												<i class="material-icons text-muted" style="font-size:80px" onclick="up_ag();">cloud_upload</i>\
                        <br/>\
                        \
                    </div>\
                </div>\
            ');

            $('#minimized-file-uploader').bind('change', onUpload);

            $(".original-image-view-icon").mouseleave(function() {
                $("#supporter-image").hide();
            });

            var lastCalledFile = null;

            $(".original-image-view-icon").mouseenter(function() {
                if (lastCalledFile !== lastFile) {
                    clearSupportetImageSrc();
                    lastCalledFile = lastFile;
                    updateSupporterImage(lastFile, imageSrc);
                }
                if (document.getElementById('supporter-image')) {
                    $("#supporter-image").show();
                    return;
                }
                $('.main-image-container').append('<img src="" id="supporter-image" />');
            });
        }

        function clearSupportetImageSrc() {
            var image = document.getElementById('supporter-image');
            if (image) {
                image.src = "";
            }
        }

        function updateSupporterImage(file, imageSrc) {
            var reader = new FileReader();
            reader.onload = function() {
                image = document.getElementById('supporter-image');
                image.src = imageSrc;
            };
            reader.readAsDataURL(file);
        }

    </script>


<script src="js/main.js"></script>

<script>
	function clicked() {
        document.getElementById('upbutt').click();
    }
    function up_ag() {
        document.getElementById('minimized-file-uploader').click();
    }
</script>

</body>

</html>
