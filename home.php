<?php
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>home page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    </head>
    <body>
        <nav>
               <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </label>
            <label class="logo">
                <i class="fa fa-user-md" aria-hidden="true"></i>
                DEEP-HEALTH CARE
            </label>
            <ul>
                <li><a class="active" href="home.php">Home</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="Appointment.php">Book Appointment</a></li>
                <li><a href=" Health-Tips.php">Health Tips</a></li>
                <li><a href="https://www.apollohospitals.com/">Speak to Expert</a></li>
                <li><a href="About.php">About</a></li>
            </ul>
        </nav>

        <div class="Container">  
            <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="images/h9.jpg"></div>
                <div class="swiper-slide"><img src="images/h6.jpg"></div>
                <div class="swiper-slide"><img src="images/h3.jpg"></div>
                <div class="swiper-slide"><img src="images/h4.jpg"></div>
            </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
     
         
        

        <div class ="sec-header">
            
            <br>
            <h1> We Are Always Ready To Help You & Your Family </h1>
   </div>
     

        <div class="emergancy">

            <h1>Do you need Emergency Medical Care? 
                <br>Call @ 9876456789</h1>

        </div>
              
              
            
        
   
        <!-- Inner JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
        <script>
            const swiper = new Swiper('.swiper',
             {
                autoplay:
                {
                    delay: 4000,
                disableOnInteraction: false,
                },
                loop: true,
                pagination: 
                {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: 
                {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });


        

        </script>
    </body>
</html>