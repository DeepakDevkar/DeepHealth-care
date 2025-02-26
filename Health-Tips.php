<?php

?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <title>Image and Information Page</title>
   
    <style>
        /* Basic styling for the body and headings */


        body {
            font-family: Arial, sans-serif;
            color: rgb(23, 15, 73);
         
        }

        h1 {
            text-align: center;
            color: #ff0022;;
        }

        .info-section {
        
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px 0;
        }

        .info-section div {
            flex: 1;
        }

        .info-section img {
            max-width: 50%;
            height: auto;
            border-radius: 5px;
            margin-right: 20px;
        }

        .info-section p {
            font-size: 18px;
            color: #555;
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
                <li><a href="services.php">Services</a></li>
                <li><a href="Appointment.php">Book Appointment</a></li>
                <li><a class="active" href=" Health-Tips.php">Health Tips</a></li>
                <li><a href="https://www.apollohospitals.com/">Speak to Expert</a></li>
                <li><a href="About.php">About</a></li>
     </ul>
 </nav>

    <br>
    <br>

    <p>
        <h1> 
            Healthy Diet and Exercise 
             For your healthy Living
             </h1>
    </p>

    <div id="content"></div>

    <script>
        // Data for the page
        const contentData = [
        {
                imageUrl: 'images/j3.jpg',
                title: 'Morning walk',
                text: ' it has following benifits :Physical health: Improved mood, mental clarity, cardiovascular endurance, and overall well-being Weight management: Burn up to 300 calories by using up stored fats and sugars Blood circulation: Reduces the strain on your heart by lowering triglyceride levels Bone strength: Along with a healthy diet, weight-bearing exercise like walking strengthens your bonesSkin health: Improves blood circulation, which prevents the growth of acne, pimples, and other skin-related issues',
            },   
        
        
        {
                imageUrl: 'images/j2.jpg',
                title: 'Balanced Diet',
                text: 'An eating plan that helps promote health and manage your weight includes a variety of healthy foods. Add an array of colors to your plate and think of it as eating the rainbow. Dark, leafy greens, oranges, and tomatoes—even fresh herbs—are loaded with vitamins, fiber and minerals. Adding frozen peppers, broccoli, or onions to stews and omelets gives them a quick and convenient boost of color and nutrients.',
            },

            {
                imageUrl: 'images/j6.jpg',
                title: 'Stay hydrated',
                text: 'You should drink plenty of fluids such as water, diluted squash and fruit juice to stay hydrated. The key is to drink regularly throughout the day (at least 6-8 mugs). I',


},
          
            {
                imageUrl: 'images/k5.jpg',
                title: 'Exercise',
                text: 'Exercise: Exercise helps your cardiovascular system work more efficiently and improves your heart and lung health.Get enough sleep: Sleep deprivation can undo your hard work with diet and exercise.Stay hydrated: Staying hydrated is one of the most crucial aspects of staying healthy.',

                

},
{
                imageUrl: 'images/j5.jpg',
                title: 'Enough sleep',
                text: 'How much sleep you need changes with age. Experts recommend school-age children get at least nine hours a night and teens get between eight and 10. Most adults need at least seven hours or more of sleep each night.',


},

        ];

        // Creating content sections dynamically
        const contentElement = document.getElementById('content');
        contentData.forEach(section => {
            const sectionElement = document.createElement('div');
            sectionElement.classList.add('info-section');

            const imageElement = document.createElement('img');
            imageElement.src = section.imageUrl;

            const textElement = document.createElement('div');
            const titleElement = document.createElement('h2');
            titleElement.textContent = section.title;
            const paragraphElement = document.createElement('p');
            paragraphElement.textContent = section.text;

            textElement.appendChild(titleElement);
            textElement.appendChild(paragraphElement);

            sectionElement.appendChild(imageElement);
            sectionElement.appendChild(textElement);

            contentElement.appendChild(sectionElement);
        });
    </script>
</body>

</html>
