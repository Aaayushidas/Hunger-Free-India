<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hunger Free India</title>
    <link rel="stylesheet" href="nhaayu.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
</head>

<body>
    <header>
    <nav id="navbar">
        <div id="logo">
            <img src="rlogo.jpg.jpg" alt="Hunger Free India" height="60" width="70">
        </div>
        <ul class="items">
            <li class="item"><a href="nhaayu.php">Home</a></li>
            <li class="item"><a href="#services ">Services</a></li>
            <li class="item"><a href="about.html">About us</a></li>
            <li class="item"><a href="contact.html">Contact us</a></li>
            <button id="bttn"><a href="login.php">Donate</a></button>
        </ul>
    </nav>
    </header>
    <section id="home">
        <h1 class="everyh1">Join us to make India hunger free</h1>
        <p>We as a community strive to make our nation hunger free blah blah blahh Lorem ipsum, dolor sit amet
            consectetur adipisicing elit. Repellendus  eos in? Illo, dolorem ratione dolore praesentium
            harum, dolorum odit veniam quam, illum doloribus culpa deserunt error maxime officiis assumenda?</p>
            <div id="but">
            <!-- <button class="btn">Sign up Restaurant</button> -->
            <a href="login.php"> <button class="btn">Log in </button></a>
            <!-- <button class="btn">Sign up NGO</button> -->
        </div>
        
    </section>
    <section class="services-container">
        <h1 class="everyh1 center">Our Work</h1>
        <div id="services">
            <div class="box">

                <img src="pic3.jpg.jpg" alt="" height="400" width="400">
                <h2 class="everyh2">Food Donation</h2>
                <p class="center2">Lorem ipsum dolor sit amet  adipisicing elit. Illo dolor minima iure
                    expedita facilis
                    recusandae enim udiandae delectus eius asperiores neque voluptatum! Sed
                    molestiae id illum.</p>
            </div>
            <div class="box">

                <img src="pic6.jpg.jpg" alt="" height="400" width="400">
                <h2 class="everyh2">Fund Raised</h2>
                <p class="center2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo dolor minima iure
                    expedita facilis
                    recusandae enim delectus eius asperiores neque voluptatum! Sed
                    molestiae id illum.</p>
            </div>
            <div class="box">

                <img src="pic5.jpg.jpg" alt="" height="400" width="400">
                <h2 class="everyh2">Community</h2>
                <p class="center2">Lorem ipsum dolor sit amet adipisicing elit. Illo dolor minima iure
                    expedita facilis
                    recusandae enim  delectus eius asperiores neque voluptatum! Sed
                    molestiae id illum.</p>
            </div>
        </div>
   </section>
    <section id="Feedback">
        <h1 class="everyh2 center">Feedback</h1>
        <div id="feedback-box">
            <form action="">
                <div class="form-group">
                    <label for="name">Name: </label>
                    <input type="text" name="name" id="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="email" name="name" id="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number: </label>
                    <input type="phone" name="name" id="phone" placeholder="Enter your phone">
                </div>
                <div class="form-group">
                    <label for="message">Message: </label>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                </div>
                <button class="btn" id="bn">Submit</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="foot">
            Copyright &copy; www.hungerfreeindia.com. All rights reserved!
        </div>
    </footer>

</body>

</html>