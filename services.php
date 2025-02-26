<?php

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <title>Health Care Services</title>
    <style>

/* Basic styling for the body and heading */
        body {
            font-family: Arial, sans-serif;
            
           
            background-color:rgb(253, 250, 245);
        }

        .head1 {
            text-align: center;
            color :rgb(221, 22, 22);
    
        }

        /* Styling for services section */
        .service {
            border: 1px solid #fff;
            border-radius: 5px;
            padding: 20px;
            margin: 20px 0;
            background-color :cyan;
        }

        .service h2 {
            color:rgb(86, 219, 24);
        }

        .service p {
            color:gb(35, 85, 11);
        }

        /* Styling for headings in tips section */
        h2 {
            color:crimson;
            margin-top: 20px;
        }
        .con
        {
            margin-top: 30px;
            width: 100%;
            height: 100%;
        }
        .main
        {
            display: flex;
            width: 100%;
            height: 60%;
        }
        .dup1
        {
            height: 100%;
            width: 30%;
            float: left;
            padding: 30px;
          
        }
        .dup2
        {
            height: 100%;
            width: 70%;
            float: right;
            margin-top: 70px;
            padding: 30px;
            color: blue;
            background-color: aquamarine;
         
        }
        img{
            width: 100%;
            height: 100%;
        }
    </style>
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

                <li><a  href="home.php">Home</a></li>
                <li><a class="active" href="services.php">Services</a></li>
                <li><a href="Appointment.php">Book Appointment</a></li>
                <li><a href="Health-Tips.php">Health Tips</a></li>
                <li><a href="https://www.apollohospitals.com/">Speak to Expert</a></li>
                <li><a href="About.php">About</a></li>
     </ul>
 </nav>
    
     <br>

    <h1 class="head1">Health Care Services</h1>
    <section>
        <div class="con">
            <div class="main">
                <div class="dup1">
                   <img src="images/l1.jpg">
                </div>
                <div class="dup2"> 
                        <h1> 'General Check-up',
                            <br>
                            Description: 'Get a routine check-up to ensure your health is on track.',
                            <br>
                            price: '100',
                        </h1>
                </div>
            </div>

            <div class="main">
                <div class="dup1">
                   <img src="images/l2.jpg">
                </div>
                <div class="dup2">
                    <h1> 'Vaccination',
                        <br>
                        Description: 'Keep yourself protected with essential vaccinations.',
                        <br>
                        Price: '50',</h1>
                </div>
            </div>

            <div class="main">
                <div class="dup1">
                   <img src="images/l3.jpg">
                </div>
                <div class="dup2">
                    <h1>  'Blood Test',
                        <br>
                        Description: 'Check your blood for any irregularities or deficiencies.',
                        <br>
                        price: 80,</h1>
                </div>
            </div>

            <div class="main">
                <div class="dup1">
                   <img src="images/l4.jpg">
                </div>
                <div class="dup2">
                    <h1>Health tips
                        <br>
                        Description : Enhances you to how to live a healthy and disease free life ;
                        <br>
                        Price:Free
                    </h1>
                </div>
            </div>

            
            <div class="main">
                <div class="dup1">
                   <img src="images/l5.jpg">
                </div>
                <div class="dup2">
                    <h1> 'speak to Experts' ,
                        <br>
                        Description: 'Gives you a special advice on any releated diseases and issues ',
                        <br>
                        price: free,</h1>
                </div>
            </div>
        </div>
    </section>

    
</body>

</html>
