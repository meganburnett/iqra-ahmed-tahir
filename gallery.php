<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Creative - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">
    <!--CSS for gallery-->
    <link href="css/style.css" rel="stylesheet">


  </head>

  <body id="page-top">

    <!-- navigation-->
    <?php include('./duplicates/navigation.php'); ?>   

  <header class="masthead2"> 
        <div class="row">
        <div style="margin-top:10%; margin-left:10%; margin-right:10%;">     
            </div>
        </div>
    </header>

       <div class="row" style="margin-left:1%; margin-right:1%">
        <div class="col-md-7" >
        
        <img src="./img/gallery-title.png" class="img-fluid" alt="Responsive image" style="margin-top:-35%;">
        </div>
        <div class="col-md-4"  style="margin-top:-20%;">
        <!-- <img src="./img/" class="img-fluid" alt="Responsive image"> -->
        </div>
    </div>
    
    
</head>
<body>

<!-- Images used to open the lightbox -->
<div class="row" style="margin-left:1%; margin-right:1%">
<div class="col-md-3" >
    
    <img src="img/gallery1.png" style="width:75%" onclick="openModal();currentSlide(1)" class="hover-shadow">
  </div>
  <div class="col-md-3" >
    <img src="img/gallery2.jpg" style="width:75%" onclick="openModal();currentSlide(2)" class="hover-shadow">
  </div>
  <div class="col-md-3" >
    <img src="img/gallery3.jpg" style="width:75%" onclick="openModal();currentSlide(3)" class="hover-shadow">
  </div>
  <div class="col-md-3" >
    <img src="img/gallery4.jpg" style="width:75%" onclick="openModal();currentSlide(4)" class="hover-shadow">
  </div>
</div>

<!-- The Modal/Lightbox -->
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="img/gallery1.png" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img src="img/gallery2.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img src="img/gallery3.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img src="img/gallery4.jpg" style="width:100%">
    </div>

    <!-- Next/previous controls -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <!-- Caption text -->
    <div class="caption-container">
      <p id="caption"></p>
    </div>

    <!-- Thumbnail image controls -->
    <div class="column">
      <img class="demo" src="img1.jpg" onclick="currentSlide(1)" alt="Nature">
    </div>

    <div class="column">
      <img class="demo" src="img2.jpg" onclick="currentSlide(2)" alt="Trolltunga">
    </div>

    <div class="column">
      <img class="demo" src="img3.jpg" onclick="currentSlide(3)" alt="Mountains">
    </div>

    <div class="column">
      <img class="demo" src="img4.jpg" onclick="currentSlide(4)" alt="Lights">
    </div>
  </div>
</div>


<!-- The expanding image container -->
<div class="container">
  <!-- Close the image -->
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>

  <!-- Expanded image -->
  <img id="expandedImg" style="width:100%">

  <!-- Image text -->
  <div id="imgtext"></div>
</div>





</body>
</html>

    <div class="row" style="margin-left:1%; margin-right:1%">
        <div class="col-md-7" >

        <!-- <img src="./img/" class="img-fluid" alt="Responsive image"> -->
        </div>
    </div>

           
<!-- <?php include('./duplicates/footer.php'); ?>     -->
   
    

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

  </body>

</html>
