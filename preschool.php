<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="preschool.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pre-School Teacher Training Course</title>
    <style>
        /* Reset styles */
        * {
            margin: 0;
            padding: 0;
         
            justify-content: center;
        }

        /* Body styles */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f5f5;
            color: #333;
        }

        /* Header styles */
        header {
            background-color: #fff;
            width: 100%;
            padding: 20px 0;

        }

        .navbar {
            list-style-type: none;


        }

        .navbar li {
            display: inline-block;
            margin-right: 70px;

        }

        .navbar li a {
            text-decoration: none;
            color: #333;
           

        }

        .navbar li a:hover {
            border: 2px solid #ccc;
            border-radius: 3px;
            padding: 10px 20px;
        }


        /* Photo styles */
        .photo {
            position: relative;
            text-align: right;

        }

        .photo img {
            max-width: 100%;
            height: 570px;
        }


        .main {
            font-size: 50px;

        }

        /* Welcome tag styles */
        .welcometag {
            padding: 20px;
            text-align: center;
            font-size: 25px;
            margin-top: 85px;
        }

        .titles {
            font-size: 35px;
            text-align: center;
            margin-top: 70px;
        }

        /* Button styles */
        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        .button-container button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .button-container button:hover {
            background-color: #0056b3;
        }


        /* Course info styles */
        .course-info {
            display: flex;
            justify-content: space-between;
            padding: 60px;
            margin-top: 20px;
        }

        .info-box-1,
        .info-box-2 {
            flex: 1;
            padding: 30px;
            background-color: #ffff;
            border-radius: 5px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            color: #333;
            position: relative;
        }




        .predpoto,
        .childpoto {
            width: 50%;
            height: 100%;
            /* Adjust height */
        }

        .predpoto img,
        .childpoto img {
            width: 100%;
            /* Set image width to 100% */
            height: 100%;
            /* Set image height to 100% */
            object-fit: cover;
            /* Ensure the image covers the entire container */
            border-radius: 5px;
            /* Add border radius to match the content boxes */
        }


        /* Why choose styles */
        .why-info {
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
            margin-top: 20px;
        }

        .why-box-1,
        .why-box-2,
        .why-box-3 {
            flex: 1;
            padding: 10px 10px 10px 10px;
            background-color: #ffff;
            border-radius: 5px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
            color: #333;
            margin-bottom: 20px;

        }

        .why-box-1 img,
        .why-box-2 img,
        .why-box-3 img {
            width: 300px;
            height: auto;
        }



        /* Service info styles */
        .service-info {
            display: flex;


            margin-top: 20px;
            margin-left: 350px;
            margin-right: 350px;
        }

        .service-box-1,
        .service-box-2,
        .service-box-3,
        .service-box-4 {
            flex: 1;
            padding: 60px;
            background-color: #ffff;
            border-radius: 5px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            color: #333;
            position: relative;
            margin-left: 40px;

        }

        .icon {
            position: absolute;
            top: 0;
            left: -90px;
            width: 90px;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #0056b3;
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
            color: #fff;
            margin-left: 40px;
        }

        .icon i {
            font-size: 20px;
        }


        /* Resources info styles */
        .resources-info {

            justify-content: space-around;
            margin-top: 20px;
        }

        .resources-box-1,
        .resources-box-2,
        .resources-box-3,
        .resources-box-4 {
            flex: 1;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-top: 20px;
        }

        /* Apply info styles */
        .apply-info {
            justify-content: center;
            margin-top: 20px;
        }

        .apply-box {
            padding: 100px;
            background-color: #333;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
            color: #fff;
            font-size: 20px;
        }

        /* Contact info styles */
        .contact-info {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .contact-box {
            padding-left: 400px;
            padding-right: 400px;
            padding-top: 100px;
            padding-bottom: 100px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        .contact-box form {
            display: flex;
            flex-direction: column;
        }

        .contact-box label {
            font-weight: bold;
        }

        .contact-box input,
        .contact-box textarea {
            margin-bottom: 10px;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .contact-box input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .contact-box input[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* Call info styles */
        .call-info {
            background-color: #f5f5f5;
            padding: 20px;
            text-align: center;
        }

        /* Footer styles */
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        .map-section {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <div class="logo-up">
                <img src="logo.png" alt="Logo">
            </div>

            </ul>
            <ul class="navbar">
                <li><a href="#home">Home</a></li>
                <li><a href="#vocational">About</a></li>
                <li><a href="#packages">Service</a></li>
                <li><a href="#programs">Resourses</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>


    </header>

    <div class="photo">
        <img class="slide1" src="social\slide1.webp" alt="photo">
        <div class="text-overlay">
            <p class="main"><b>Welcome to Asian Lanka Hotel School </b></p>
        </div>
    </div>

    <div class="welcometag">
        <p>Welcome to Asian Lanka Hotel School's Pre-School !<br>
            Our program, recognized by principal councils and registered<br>
            under the Women & Children Secretariat, sets the standard for
            excellence in teacher <br>training in Sri Lanka. Join us to shape the
            future of early childhood education!</p>
        <div class="button-container">
            <button>LEARN MORE</button>
        </div>
    </div>



    <p class="titles"><b>About The Courses</b></p>
    <section class="course-info">
        <div class="info-box-1">
            <p><b>Pre - School Teacher (Early Childhood Development) - N.V.Q. Level 4</b></p>
            <p>Our Early Childhood Education Programme has Been prepared to suit the present requirements.</p>
            <p>It is recognized by all the principal councils in Sri Lanka which are registered in the Women & Children Secretariat under ECCD NC/CS/023</p>
            <ul>
                <li>Course Fee: Rs 99,900</li>
                <li>Duration: 12 months</li>
                <li>Practical Duration: 6 months</li>
            </ul>
        </div>
        <div class="predpoto">
            <img src="social/img1.jpg" alt="Image 1">
        </div>
    </section>

    <section class="course-info">
        <div class="info-box-2">
            <p><b>Child Care Center Operations N.V.Q. Level – 4</b></p>
            <p>Discover excellence in early childhood education with our Day Care Training Course, recognized by principal councils and registered under Sri Lanka's Women & Children Secretariat.</p>
            <ul>
                <li>Course Fee: Rs 99,900</li>
                <li>Duration: 6 months</li>
            </ul>
        </div>
        <div class="childpoto">
            <img src="social/day care center.webp" alt="Image 2">
        </div>
    </section>




    <p class="titles"><b>Why Choose Asian Lanka Hotel School?</b></p>
    <section class="why-info">
        <div class="why-box-1">
            <img src="social/expert.jpg" alt="Image 1">
            <p><b>Expert Faculty</b></p>
            <p>Learn from experienced educators who are dedicated to your success and passionate about early childhood education</p>

        </div>

        <div class="why-box-2">
            <img src="social/handson.jpg" alt="Image 2">
            <p><b>Hands-On Experience</b></p>
            <p>Gain valuable practical experience through our immersive training programs and real-world teaching opportunities</p>

        </div>

        <div class="why-box-3">
            <img src="social/industry.webp" alt="Image 3">
            <p><b>Industry Recognition</b></p>
            <p>Our courses are recognized and respected by leading institutions and employers in Sri Lanka and beyond</p>

        </div>
    </section>



    <p class="titles"><b>Our Services</b></p>
    <section class="service-info">
        <div class="service-box-1">
            <div class="icon"><i class="fas fa-users"></i></div>
            <p><b>Individualized Support</b></p>
            <p>Personalized guidance and mentorship from<br> experienced faculty</p>
        </div>

        <div class="service-box-2">
            <div class="icon"><i class="fas fa-briefcase"></i></div>
            <p><b>Career Counseling</b></p>
            <p>Assistance in exploring career options and <br>setting professional goals</p>
        </div>
    </section>

    <section class="service-info">
        <div class="service-box-3">
            <div class="icon"><i class="fas fa-chalkboard-teacher"></i></div>
            <p><b>Practical Training</b></p>
            <p>Hands-on experience in real-world educational <br>settings</p>
        </div>

        <div class="service-box-4">
            <div class="icon"><i class="fas fa-book"></i></div>
            <p><b>Resource Center</b></p>
            <p>Access to a wide range of educational materials<br> and tools</p>
        </div>
    </section>



    <p class="titles"><b>Resourses</b></p>
    <section class="resourses-info">
        <div class="service-box-1">
            <p><b>Online Learning Platform</b></p>
            <p>Access course materials, lecture notes, and additional resources through our user-friendly online learning platform. Stay organized and stay ahead with 24/7 access to educational content</p>

            <div class="resourses-box-2">
                <p><b>Workshops and Seminars</b></p>
                <p>Participate in workshops, seminars, and guest lectures conducted by industry experts and renowned educators. Stay updated on the latest trends, research findings, and best practices in early childhood education through engaging and informative sessions.</p>
            </div>
            <div class="resourses-box-3">
                <p><b>Career Services</b></p>
                <p>Prepare for success beyond graduation with our career services offerings. From resume writing workshops to mock interviews, we provide the tools and guidance you need to launch your career in early childhood education.</p>
            </div>
            <div class="resourses-box-4">
                <p><b>Student Organization</b></p>
                <p>Get involved and make connections through our student organizations and clubs. Join like-minded peers in exploring shared interests, participating in events, and making a difference in the community.</p>
            </div>
        </div>
    </section>


    <p class="titles"><b>HOW TO APPLY?</b></p>
    <section class="apply-info">
        <div class="apply-box">
            ed pre-school teacher? Applying to our Pre-School Teacher Training<br> Course is simple. Visit our website to fill out the online application form or contact us for assistance.</p>
            <p>Ready to embark on your journey towards becoming a certifi
            <section class="button-container">
                <button>APPLY HERE</button>
            </section>
        </div>

    </section>


    <p class="titles"><b>Contact Us</b></p>
    <section class="contact-info">
        <div class="contact-box">
            <form action="submit_form.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" cols="50" required></textarea>

                <input type="checkbox" id="privacy_policy" name="privacy_policy" required>
                <label for="privacy_policy">I have read and understand the privacy policy.</label>

                <input type="submit" value="Submit">
            </form>
        </div>
    </section>

    <section class="call-info">
        <div class="call-box">
            <p><strong>Address:</strong> 215 High Level Rd, Nugegoda</p>
            <p><strong>Call Us:</strong> Phone: <a href="tel:+94112810045">011 2810045</a> | <a href="tel:+94112826412">011 2826412</a> | <a href="tel:+94112826413">011 2826413</a></p>
            <p><strong>Contact:</strong> Email: <a href="mailto:info@asianlankahotelschool.com">info@asianlankahotelschool.com</a></p>
            <p><strong>Whatsapp:</strong> <a href="https://wa.me/94775810033">0775810033</a></p>
        </div>
    </section>


    <footer>
        <section class="map-section">
            <iframe width="100%" height="300" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=215+High+Level+Rd,+Nugegoda&key=YOUR_API_KEY" allowfullscreen>
            </iframe>
        </section>
    </footer>








</body>

</html>