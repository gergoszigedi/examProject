<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">    
  <title>Áruházak</title>
  <link rel="shortcut icon" href="../img/favicon.jpg" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <script defer src="https://pro.fontawesome.com/releases/v5.10.0/js/all.js" integrity="sha384-G/ZR3ntz68JZrH4pfPJyRbjW+c0+ojii5f+GYiYwldYU69A+Ejat6yIfLSxljXxD" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="../css/markets.css">
</head>
<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Áruházak</h1>
          <p class="lead">Balassagyarmat-Rétság-Szécsény</p>
        </div>
      </div>


      <nav class="navbar navbar-expand-lg bar sticky-top nav font-weight-bolder m-auto">
        <a class="navbar-brand a" href="fooldal.php">Főoldal</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                Boltok
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#Bgy">Balassagyarmat</a>
                <a class="dropdown-item" href="#Rts">Rétság</a>
                <a class="dropdown-item" href="#Szcs">Szécsény</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="data_search.php">Termékek</a>
            </li>
          </ul> 
        </div>
      </nav>
<!--Kártyák az üzletek térképével és adataival:-->

<!-----Balassagyarmat áruházai---->
<div class="jumbotron jumb" id="Bgy">
    <h1 class="display-4" >Balassagyarmat</h1>
    <hr class="my-4">
    <!-- <p>It uses utility classes for typography and spacing to space content out within the larger container.</p> -->
    
    <div class="container">
      <div class="row">
        <div class="col mb-4 col-lg-6 col-md-12 col-12">
          <div class="card mb-4">
             <img height="500" style="border:0;" src="../img/penny.png" class="card-img-top" alt="pennyaruhaz"> 
            <div class="card-body">
              <h5 class="card-title">Penny Market</h5>
              <p class="card-text">Cím: 2660. Balassagyarmat Kóvári út 12. 
                <br>
                Tel: 06-35-111-111
              </p>
              <a href="https://www.google.com/maps/place/PENNY+Balassagyarmat/@48.0746268,19.2808194,17z/data=!3m1!4b1!4m5!3m4!1s0x476aa06ceb4d681f:0x53e4d8bb088c3502!8m2!3d48.0747116!4d19.2829142?hl=hu" class="btn btn-primary" target="_blank">Mutasd a teljes térképet</a>
            </div>
          </div>
        </div>
        <div class="col mb-4 col-lg-6 col-md-12 col-12">
          <div class="card ">
            <img height="500" style="border:0;" src="../img/lidl.png" class="card-img-top" alt="lidláruház">
            <div class="card-body">
              <h5 class="card-title">Lidl Áruház</h5>
              <p class="card-text">Cím: 2660 Balassagyarmat Kóvári út 12.
                <br>
                Tel: 06-29-339-345

              </p>
              <a href="https://www.google.com/maps/place/Lidl/@48.0735972,19.2789735,17z/data=!3m1!4b1!4m5!3m4!1s0x476aa06c80772faf:0x528089f49761ee0e!8m2!3d48.0735409!4d19.281068?hl=hu" class="btn btn-primary" target="_blank">Mutasd a teljes térképet</a>
            </div>
          </div>
        </div>
        <div class="col mb-4 col-lg-6 col-md-12 col-12">
          <div class="card">
               <img height="500" style="border:0;"  src="../img/tesco.jpg" class="card-img-top" alt="tescoáruház">
               <div class="card-body">
                 <h5 class="card-title">Tesco Áruház</h5>
                 <p class="card-text">Cím: 2660 Balassagyarmat Mikszáth Kálmán út 56. <br>
                Tel: 06-35-111-111
                 </p>
                 <a href="https://www.google.com/maps/place/Tesco/@48.0848891,19.2955289,17z/data=!3m1!4b1!4m5!3m4!1s0x476aa07c9e3ae7ef:0x8571ce022327611c!8m2!3d48.0848881!4d19.2981482?hl=hu" class="btn btn-primary" target="_blank">Mutasd a teljes térképet</a>
               </div>
          </div>
        </div>
        <div class="col mb-4 col-lg-6 col-md-12 col-12">
          <div class="card">
               <img height="500" style="border:0;"  src="../img/spar1.png" class="card-img-top" alt="sparáruház">
               <div class="card-body">
                 <h5 class="card-title">Spar Áruház</h5>
                 <p class="card-text">Cím: 2660. Balassagyarmat Mikszáth út 14.
                   
                  <br>
                  Tel: 06-20-555-5555
                 </p>
                 <a href="https://www.google.com/maps/place/SPAR+szupermarket/@48.0809756,19.2948254,17z/data=!3m1!4b1!4m5!3m4!1s0x476aa0708180e835:0xaa75574f0ac1f43b!8m2!3d48.0809756!4d19.2970194?hl=hu" class="btn btn-primary" target="_blank">Mutasd a teljes térképet</a>
               </div>
          </div>
        </div> 
      </div>
    </div>
  </div>
<!----------Rétság áruházai---------->

<div class="jumbotron jumb" id="Rts">
    <h1 class="display-4" >Rétság</h1>
    <hr class="my-4">
    <!-- <p>It uses utility classes for typography and spacing to space content out within the larger container.</p> -->
    
    <div class="container">
      <div class="row">
        <div class="col mb-4 col-lg-6 col-md-12 col-12">
          <div class="card">
            <img src="../img/real.jpg" class="card-img-top" alt="reáláruház">
            <div class="card-body">
              <h5 class="card-title">Reál ABC</h5>
              <p class="card-text"> Cím: Rétság 2651. Piac tér <br> 
              Tel: 06-35-550-043
              </p>
              <a href="https://www.google.hu/maps/place/R%C3%A9ts%C3%A1g,+Piac+t%C3%A9r+14,+2651/@47.9270578,19.1370645,18z/data=!3m1!4b1!4m5!3m4!1s0x476a9cd8eb24c7fb:0x1d283d9c4b0a562b!8m2!3d47.9270578!4d19.1381588" class="btn btn-primary">Mutasd a teljes térképet</a>
            </div>
          </div>
        </div>
        
        <!-- <div class="w-100"></div> -->
        <div class="col mb-4 col-lg-6 col-md-12 col-12 ">
          <div class="card">
               <img height="500" style="border:0;" src="../img/coop_logo_0.jpg" class="card-img-top" alt="coopáruház">
               <div class="card-body">
                 <h5 class="card-title"> Coop Áruház</h5>
                 <p class="card-text">Cím:Rétság 2651 Piac tér 2.</p>
                 <a href="https://www.google.hu/maps/place/R%C3%A9ts%C3%A1g,+Piac+t%C3%A9r+2,+2651/@47.9273802,19.136581,18z/data=!3m1!4b1!4m5!3m4!1s0x476a9cd8c30e8e2d:0xd1d2558a58108eec!8m2!3d47.9273802!4d19.1376753" class="btn btn-primary">Mutasd a teljes térképet</a>
               </div>
          </div>
        </div>      
      </div>
    </div>
  </div>

<!---------Szécsény áruházak-------->
<div class="jumbotron jumb" id="Szcs">
  <h1 class="display-4" >Szécsény</h1>
  <hr class="my-4">
  <!-- <p>It uses utility classes for typography and spacing to space content out within the larger container.</p> -->
  
  <div class="container">
   <div class="row">
      <div class="col mb-4 col-lg-6 col-md-12 col-12">
        <div class="card">
          <img src="../img/spar1.png" class="card-img-top" alt="sparáruház">
          <div class="card-body">
            <h5 class="card-title">Spar Áruház</h5>
            <p class="card-text">Cím: 3170. Szécsény Rákóczi út 112. 
              <br>
              Tel: 06-20-823-79-86

            </p>
            <a href="https://www.google.com/maps/place/SPAR+szupermarket/@48.0812075,19.5131528,17z/data=!3m1!4b1!4m5!3m4!1s0x4740198a461fb4b3:0x5ae3931baa24a664!8m2!3d48.0812075!4d19.5153468?hl=hu" class="btn btn-primary" target="_blank">Mutasd a teljes térképet</a>
          </div>
        </div>
      </div>
      <div class="col mb-4 col-lg-6 col-md-12 col-12">
        <div class="card">
          <img width="600" height="500" style="border:0;" src="../img/coop_logo_0.jpg" class="card-img-top" alt="coopáruház">
          <div class="card-body">
            <h5 class="card-title">Palóc-Coop Áruház</h5>
            <p class="card-text">Cím: 2660 Szécsény Rákóczi út 93.
              <br>
              Tel: 06-32-370-035

            </p>
            <a href="https://www.google.com/maps/place/Pal%C3%B3c-Coop+Rt./@48.0809705,19.5177695,17z/data=!3m1!4b1!4m5!3m4!1s0x47401992fa4aaa89:0x8bf74e04df441647!8m2!3d48.0809705!4d19.5199635?hl=hu" class="btn btn-primary" target="_blank">Mutasd a teljes térképet</a>
          </div>
        </div>
      </div> 
      <div class="w-100"></div>
      <div class="col col-lg-6 col-md-12 col-12 m-auto">
        <div class="card mt-4">
             <img width="600" height="450" style="border:0;" src="../img/penny.png" class="card-img-top" alt="pennyaruhaz">
             <div class="card-body">
               <h5 class="card-title">Penny Áruház</h5>
               <p class="card-text">Cím: 3170 Szécsény Sas út 3. <br>
              Tel: 06-29-339-345
               </p>
               <a href="https://www.google.com/maps/place/PENNY+Sz%C3%A9cs%C3%A9ny/@48.0794267,19.5186492,17z/data=!3m1!4b1!4m5!3m4!1s0x474019ecc54e420b:0xd4a091de0d5268b0!8m2!3d48.0794267!4d19.5208432?hl=hu" class="btn btn-primary" target="_blank">Mutasd a teljes térképet</a>
             </div>
        </div>
      </div>
    </div> 
  </div>
</div>
 <!------------FOOTER------------>
  <footer>
    <div class="container-fluid p-2">
      <div class="container">
        <div class="row text-center p-3">
          <div class="col-md-4">Cégnév: <br> <br> SZP & SZG <br> <br>
          </div>
          <div class="col-md-4">Cím: <br> <br> <p>I Olaszország</p> 
            <p>10000. Firenze Pachetto út 50.</p>
          </div>
          <div class="col-md-4">Elérhetőségek: <br>
            <br>
            <p>Tel: +3654584558</p>
            <p>Mobil: +3654584558</p>
            <p>E-mail: info@cegnev.hu</p>
            <br>
          </div>
        </div>
        <div class="col-md-12 text-center p-3">Copyright 2022</div>
        <div class="row text-center padding">
          <div class="col-12 social padding">
              <a href="#">
                  <i class="fab fa-facebook"></i>
              </a>
              <a href="#">
                  <i class="fab fa-twitter"></i>
              </a>
              <a href="">
                  <i class="fab fa-google-plus-g"></i>
              </a>
              <a href="">
                  <i class="fab fa-instagram"></i>
              </a>
              <a href="">
                  <i class="fab fa-youtube"></i>
              </a>
          </div>
      </div>
      </div>
    </div>
  </footer>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>