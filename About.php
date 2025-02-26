<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
  
    <link rel="stylesheet" href="style.css">

    <style>
        .container {
    display: flex;
    margin-top: 40px;
   

height: 100%;
    width: 100%;
        }
.map
{
    float: left;
   width: 100%;
}

.owner-info {
    border: 2px solid #333;
    padding: 20px;
    border-radius: 5px;
    float: right;
    height:40%;
    margin-right: 20px;
    width: 30%;
    background-color: rgb(201, 214, 21);
}

h1 {
    text-align: center;
}

p {
    margin: 10px 0;
}
.k1
{
    background-color: rgb(165, 202, 231);
}
</style>

</head>
<body class="k1">  

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
                 <li><a href="home.php">Home</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a  href="Appointment.php">Book Appointment</a></li>
                <li><a  href=" Health-Tips.php">Health Tips</a></li>
                <li><a href="https://www.apollohospitals.com/">Speak to Expert</a></li>
                <li><a class="active" href="About.php">About</a></li>
               
     </ul>
     </ul>
 </nav>
    
    <div class="container">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.9974647475588!2d72.83631431041266!3d19.019833382098817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7cfd7f13fa27b%3A0xa87481b7bb8ca109!2sDeep%20Health%20Care!5e0!3m2!1sen!2sin!4v1697389018374!5m2!1sen!2sin" width="100%" height="600px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    
        </div>
        <div class="owner-info">
            <h1>Owner Information</h1>
            <p>Name:  Deepak Devkar</p>
            <p>Email: deepakdevkar60@gmail.com</p>
            <p>Phone: 9763522761</p>
        </div>
    </div>
</body>
</html>
