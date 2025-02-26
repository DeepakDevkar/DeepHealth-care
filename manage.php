
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

body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }
    
    .container {
        
        max-width: 290px;
        margin-left: 700px;
        margin-right: 700px;
        margin-top: 150px;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    
    h2 {
        text-align: center;
        margin-bottom: 20px;
    }
    
    label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
    }
    
    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }
    
    input[type="submit"] {
        background-color: #4CAF50;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }
    
    input[type="submit"]:hover {
        background-color: #45a049;
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
     <ul style="margin-top:-90px;">
                 <li><a href="home.php">Home</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a  href="Appointment.php">Book Appointment</a></li>
                <li><a  href=" Health-Tips.php">Health Tips</a></li>
                <li><a href="https://www.apollohospitals.com/">Speak to Expert</a></li>
                <li><a  href="About.php">About</a></li>
                <li><a class="active" href="manage.php">manage</a></li>
     </ul>
     </ul>
 </nav>
    <div class="container">
        
        <br>
        
        <form action="<?php $_PHP_SELF ?>" method="POST">
        <center>
        <h2>Admin Login</h2>         
        <br>  
            <br> 

            <br> 
     
        <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
            <input type="submit" value="Login">
</center>
        </form>


    </div>
</body>
</html>
<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection parameters
    $conn = mysqli_connect("localhost", "root", "", "hospital");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate username and password (you may want to use more secure methods)
    if ($username === "admin" && $password === "123") { // Replace with your admin credentials
        // Redirect to dashboard.php with a success message and user data
        header("Location: dashboard.php?success=true&username=$username");
        exit(); // Stop further execution
    } else {
        echo "Invalid username or password.";
    }

    // Close the database connection
    $conn->close();
} else {
    // Handle non-POST requests (if needed)
}
?>
