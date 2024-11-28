<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
</head>
<body>

<header>
        
        <div id="menu-bar" class="fas fa-bars"></div>
    
        <a href="#" class="logo"><span>T</span>ravel</a>
    
        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="packages.php">packages</a>
            <a href="book.php">book</a>
            <a href="About.php">About</a>
        </nav>
    
        <div class="icons">
            <i class="fas fa-search" id="search-btn"></i>
            <i class="fas fa-user" id="login-btn"></i>
        </div>
    
        <form action="" class="search-bar-container">
            <input type="search" id="search-bar" placeholder="search here...">
            <label for="search-bar" class="fas fa-search" ></label>
        </form>
    
       
        <div class="login-form-container">
    
        <i class="fas fa-times" id="form-close"></i>
    
        <form action="">
             <h3>login</h3>
             <input type="email" class="box" placeholder="Enter your email">
             <input type="password" class="box" placeholder="Enter your password">
             <input type="submit" value="login now" class="btn">
             <input type="checkbox" id="remember">
             <label for="remember">Remember me</label>
             <p>Forget password?<a href="#">Click here</a></p>
             <p>Dont have an account?<a href="#">Register now</a></p>
    
            </form>
        </div>
    </header>


<!--

    <div class="heading" style="background:url(images/nature1.jpg)no-repeat">
        <h1>Book Now</h1>
    </div>
-->



    <section class="book" id="book">

<h1 class="title">
    <span>b</span>
    <span>o</span>
    <span>o</span>
    <span>k</span>
    <span class="space"></span>
    <span>n</span>
    <span>o</span>
    <span>w</span>
</h1> 

<div class="row">

    <div class="image">
        <img src="images/4513670.jpg" alt="">
    </div>

    <form action="book-form.php" method="post" class="book-form">
        <div class="inputBox">
            <h3>Name </h3>
            <input type="text" placeholder="enter your name" name="name">
        </div>
        <div class="inputBox">
            <h3>Phone </h3>
            <input type="number" placeholder="enter your number" name="phone">
        </div>
        <div class="inputBox">
        <h3>email </h3>
            <input type="email" placeholder="enter your email" name="email">
        </div>
        <div class="inputBox">
            <h3>address </h3>
            <input type="text" placeholder="enter your address" name="address">
        </div>
        <div class="inputBox">
            <h3>Where to </h3>
            <input type="text" placeholder="place you want to visit" name="location">
        </div>
        <div class="inputBox">
            <h3>how many </h3>
            <input type="number" placeholder="number of guests" name="guests">
        </div>
        <div class="inputBox">
            <h3>arrival </h3>
            <input type="date"  name="arrival">
        </div>
        <div class="inputBox">
            <h3>leaving </h3>
            <input type="date"  name="leaving">
        </div>
        <input type="submit" class="btn" value="submit" name="send">
    </form>
    
</div>
</section>



<section class="contact">
    <h1 class="title">
        <span>c</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>
    </h1>

    <div class="row">

        <div class="image">
        <img src="images/TRVL_around_the_planet_preview.jpg" alt="">  
        </div>

        <form action="">
            <div class="inputBox">
                <input type="text" placeholder="name">
                <input type="email" placeholder="email">
            </div>
            <div class="inputBox">
                <input type="number" placeholder="number">
                <input type="text" placeholder="subject">
            </div>
            <textarea placeholder="message" name="" id="" cols="30" rows="10"></textarea>
            <input type="submit" class="btn" value="send message">
        </form>
        
     </div>

</section>
<section class="footer">

<div class="box-container">
    
    
    <div class="box">
        <h3>Extra links</h3>
        <a href="#"><i class="fas fa-angle-right"></i>Ask Questions</a>
        <a href="#"><i class="fas fa-angle-right"></i>About us</a>
        <a href="#"><i class="fas fa-angle-right"></i>Privacy Policy</a>
        <a href="#"><i class="fas fa-angle-right"></i>Term Of Use</a>
    </div>
    <div class="box">
        <h3>contact Info</h3>
        <a href="#"><i class="fas fa-phone"></i>+123-4455-6777</a>
        <a href="#"><i class="fas fa-phone"></i>+111-222-3333</a>
        <a href="#"><i class="fas fa-envelope"></i>tarek.saraqbi@gmail.com</a>
        <a href="#"><i class="fas fa-map"></i>Lebanon - Beirut 623888</a>
    </div>
    <div class="box">
        <h3>follow us</h3>
        <a href="#"><i class="fab fa-facebook"></i>facebook</a>
        <a href="#"><i class="fab fa-twitter"></i>instagram</a>
        <a href="#"><i class="fab fa-instagram"></i>twitter</a>
        <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
    </div>

</div>

<h1 class="credit"> created by <span> Tarek SARAKBI </span> | all rights reserved!</h1>

</section>


<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="script.js"></script>

</body>
</html>