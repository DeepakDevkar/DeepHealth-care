<?php
        error_reporting(0);


    $conn=mysqli_connect("localhost","root","","hospital");

    if($conn)
    {
       // echo"connection created";
       $name=$_POST['name'];
       $email=$_POST['email'];
       $p_number=$_POST['pnumber'];
       $department=$_POST['department'];
       $doctor=$_POST['doctor'];
       $date= $_POST['date'];

            if($p_number!=0)
            {
            $sql="insert into appointment values('$name','$email','$p_number','$department','$doctor','$date')";
            
            mysqli_query($conn,$sql);
            }
            
    }
    else
    {
        echo"connection failed";

    }

    mysqli_close($conn);
    
    ?>


<Doctype html>
    <html>
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Appointment Form</title>
    

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5adeb;
           
        }
        
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #c8ff00;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            margin-top: 20px;
        }
        
        h1 {
            text-align: center;
            color:#0066ff;
        }
        h2 
        {
            text-align: center;
            color:#bd1212; 

        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        
        input[type="text"],
        input[type="email"],
        input[type="number"],
        select,
        input[type="date"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        select {
            height: 35px;
        }
        
        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        
        input[type="submit"]:hover {
            background-color: #0056b3;
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
     <ul style="margin-top: -85px">
                 <li><a href="home.php">Home</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a class="active" href="Appointment.php">Book Appointment</a></li>
                <li><a  href="Health-Tips.php">Health Tips</a></li>
                <li><a href="https://www.apollohospitals.com/">Speak to Expert</a></li>
                <li><a href="About.php">About</a></li>
                <li><a href="manage.php">manage</a></li>
     </ul>
 </nav>
    
    <br>

<section style="margin-top: ;">
     <div class="ht11">
        <h2> We Are Always Ready To Help You.<br>
                 Book An Appointment
                </h2>
     </div>

         <div class="container">
             <h1>Appointment Form</h1>

             <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">

                 <div class="form-group">
                     <label for="name">Name:</label>
                     <input type="text" id="name" name="name" required>
                 </div>
                 <div class="form-group">
                     <label for="email">Email:</label>
                     <input type="email" id="email" name="email" required>
                 </div>
                 <div class="form-group">
                     <label for="pnumber">Phone Number:</label>
                     <input type="number" id="pnumber" name="pnumber" required>
                 </div>
                 <div class="form-group">
                     <label for="department">Department:</label>
                     <select id="department" name="department" required>
                         <option value="General">General</option>
                         <option value="Cardiology">Cardiology</option>
                         <option value="Dermatology">Dermatology</option>
                         <option value="Orthopedics">Orthopedics</option>
                         <option value="Neurology">Neurology</option>
                     </select>
                 </div>
                 <div class="form-group">
                     <label for="doctor">Doctor:</label>
                     <input type="text" id="doctor" name="doctor" required>
                 </div>
                 <div class="form-group">
                     <label for="date">Date:</label>
                     <input type="date" id="date" name="date" required>
                 </div>
                 <div class="form-group">
                     <input type="submit" value="Submit">
                 </div>
             </form>
         </div>
         </section>

     </body>
     </html>