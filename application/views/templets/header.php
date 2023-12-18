<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gudea&family=Lato:wght@100;400&family=Lexend:wght@100;400&family=Poppins:wght@100&family=Raleway:wght@100;300&family=Rufina&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gudea&family=Lato:wght@100;400&family=Lexend:wght@100;400&family=Poppins:wght@100&family=Raleway:wght@100;300;400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gudea&family=Lato:wght@100;400&family=Lexend:wght@100;400&family=Poppins:wght@100&family=Raleway:wght@100;300;400;600&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="<?php echo base_url('/assets/css/style.css')?>" rel="stylesheet" >
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,700;1,100&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>
       <style>

    
    </style>
</head>
  
<body>
<div class="head">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="nav-img">
  <img src="<?php echo base_url('/assets/image/pantai3.jpg')?>" alt="">
  </div>
  <div class="container-fluid">
    <div class="judul">
    <a class="navbar-brand" href="#"> JENDELA WISATA </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    </div>
     <div class="collapse navbar-collapse" id="navbarNav"> 
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#about">ABOUT US</a>
        </li>
        <li class="nav-item" >
          <a class="nav-link" href="#">CONTACT</a>
        </li>   
      </ul>
      <a href="<?php echo base_url('../auth/v_register.php/') ?>">
      <button type="button" class="btn">
        SIGN-IN
      </button>
      </a>
  </div>
</nav>
</div>

<div class="content" data-aos="fade-up">
<h3>What are You Looking?</h3>
<div id="slider-container" class="slider">
  <div class="slide">
      <img src="<?php echo base_url('/assets/image/akom.jpg')?>" alt="" href="">
      <div class="overlay-text">
        <p>AKOMODATION</p>
      </div>
  </div>
  <div class="slide">
      <img src="<?php echo base_url('/assets/image/event.jpg')?>" alt="">
      <div class="overlay-text">
        <p>EVENT</p>
      </div>
    </div>
  <div class="slide">
      <img src="<?php echo base_url('/assets/image/pantai2.jpg')?>" alt="" >
      <div class="overlay-text">
        <p>DESTINATION</p>
      </div>
    </div>
</div>
</div>


<div class="overlay"></div>
<div id="about" class="about" >
            <h2>About <span>Us</span></h2>

            <div class="row">
                <div class="about-img">
                    <img src="<?php echo base_url('/assets/image/pante3.jpg')?>" alt="About Us">
                </div>
                <div class="content" data-aos="fade-up">
                    <h3>Kenapa Memilih Bali?</h3>
                    <p>Lorem ipsum dolor sit amet consectetur 
                        adipisicing elit. Nihil aspernatur quae 
                        quisquam sint est neque?</p>
                    <p>Lorem ipsum, dolor sit amet consectetur 
                        adipisicing elit. Voluptatibus quisquam 
                        reprehenderit laboriosam, voluptatum optio 
                        magni libero eveniet ab ullam quos.</p>
                </div>
            </div>
        </div> 
<div class="crec" data-aos="fade-up">
<h3>Recomended</h3>
<div id="recomend" class="recomend">
  <div class="recslide">
      <img src="<?php echo base_url('/assets/image/akom.jpg')?>" alt="" href="">
      <div class="rec-text">
        <p>AKOMODATION</p>
      </div>
  </div>
  <div class="recslide">
      <img src="<?php echo base_url('/assets/image/event.jpg')?>" alt="">
      <div class="rec-text">
        <p>EVENT</p>
      </div>
    </div>
  <div class="recslide">
      <img src="<?php echo base_url('/assets/image/pantai2.jpg')?>" alt="" >
      <div class="rec-text">
        <p>DESTINATION</p>
      </div>
    </div>
</div>
</div>


<div class="overlay"></div>
        <footer>
        <div class="socials">
            <a href="#"><i data-feather="instagram"></i></a>
            <a href="#"><i data-feather="twitter"></i></a>
            <a href="#"><i data-feather="facebook"></i></a>
        </div>
        <div class="links">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
        </div>
        <div class="credit">
            <p>Created By <a href="">Kelompok 3</a>. | &copy; 2023.</p>
        </div>
    </footer>

    <!-- <div class="highlight">
    <a style="--bs-aspect-ratio: 125%" class="ratio d-block rounded-3 overflow-hidden" href="/id/id/destinasi/bali-nusa-tenggara/bali/tari-barong-dan-keris">
              <img src="/content/dam/indtravelrevamp/en/destinations/revisi-2020/barongthumbnail.jpg" class=" bg-img w-100 h-100 object-fit-cover position-absolute top-0" alt="Tari Barong dan Keris " loading="lazy">
             <div class="overlay-text position-absolute top-0 w-100 px-4 text-center d-flex h-100 justify-content-center align-items-end">
                <h6 class="text-white  pb-2 mb-4">Tari Barong dan Keris </h6>
             </div>
             
            
          </a>
    </div> -->

<div class="isi d-flex" >
  <div data-aos="zoom-in">
    <?php $this->load->view( $data['Homepage']);?>
  </div>
</div>
<script src="<?php echo base_url('assets/js/main.js')?>"></script>