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
    





    <section class="home" id="home">
    <div class="content">
        <h3>adventure is worthwhile</h3>
        <p>discover new places with us, adventure waits</p>
        <a href="#" class="btn">discover more</a>
    </div>

    <div class="controls">
        <span class="vid-btn active" data-src="images/4961985_France_Paris_1280x720.mp4"></span>
        <span class="vid-btn" data-src="images/4961985_France_Paris_1280x720.mp4"></span>
        <span class="vid-btn" data-src="images/4961985_France_Paris_1280x720.mp4"></span>
        <span class="vid-btn" data-src="images/4961985_France_Paris_1280x720.mp4"></span>
        <span class="vid-btn" data-src="images/4961985_France_Paris_1280x720.mp4"></span>
    </div>

    <div class="video-container">
        <video src="images/4961985_France_Paris_1280x720.mp4" id="video-slider" loop autoplay muted></video>
    </div>
</section>


 

<section class="gallery" id="gallery">
    <h1 class="title">
        <span>d</span>
        <span>i</span> 
        <span>s</span>
        <span>c</span>
        <span>o</span>
        <span>v</span>
        <span>e</span>
        <span>r</span>


    </h1>
    
    <div class="box-container">

        <div class="abox">
            <img src="images/IMG_8709.jpeg" alt="">
            <div class="content">
                <h3> amazing places</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="abox">
            <img src="images/IMG_8710.webp" alt="">
            <div class="content">
                <h3> amazing places</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="abox">
            <img src="images/IMG_8711.webp" alt="">
            <div class="content">
                <h3> amazing places</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="abox">
            <img src="images/IMG_8712.jpeg" alt="">
            <div class="content">
                <h3> amazing places</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="abox">
            <img src="images/IMG_8713.jpeg" alt="">
            <div class="content">
                <h3> amazing places</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="abox">
            <img src="images/IMG_8714.jpeg" alt="">
            <div class="content">
                <h3> amazing places</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="abox">
            <img src="images/IMG_8715.jpeg" alt="">
            <div class="content">
                <h3> amazing places</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="abox">
            <img src="images/IMG_8716.jpeg" alt="">
            <div class="content">
                <h3> amazing places</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="abox">
            <img src="images/airplane-1732486592690-495.jpg" alt="">
            <div class="content">
                <h3> amazing places</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
    </div>

</section>


    <section class="services" id="services">
<h1 class="title">
    <span>S</span>
    <span>e</span>
    <span>r</span>
    <span>v</span>
    <span>i</span>
    <span>c</span>
    <span>e</span>
    <span>s</span>
</h1>




<div class="box-container">

    <div class="box">
        <i class="fas fa-hotel"></i>
        <h3>Affordable Hotels</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente perferendis, ex magnam doloremque natus
             possimus beatae animi voluptatem eius odio!</p>
    </div>
    <div class="box">
        <i class="fas fa-utensils"></i>
        <h3>Food & Drinks</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente perferendis, ex magnam doloremque natus
             possimus beatae animi voluptatem eius odio!</p>
    </div>
    <div class="box">
        <i class="fas fa-bullhorn"></i>
        <h3>Safety guide</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente perferendis, ex magnam doloremque natus
             possimus beatae animi voluptatem eius odio!</p>
    </div>
    <div class="box">
        <i class="fas fa-globe-asia"></i>
        <h3>Around The World</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente perferendis, ex magnam doloremque natus
             possimus beatae animi voluptatem eius odio!</p>
    </div>
    <div class="box">
        <i class="fas fa-plane"></i>
        <h3>Fastest Travel</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente perferendis, ex magnam doloremque natus
             possimus beatae animi voluptatem eius odio!</p>
    </div>
    <div class="box">
        <i class="fas fa-hiking"></i>
        <h3>Adventures</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente perferendis, ex magnam doloremque natus
             possimus beatae animi voluptatem eius odio!</p>
    </div>
</div>
</section>






<section class="home-offer">
    <div class="content">
        <h3>upto 50% off</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure tempora assumenda, debitis aliquid nesciunt maiores quas! Magni cumque quaerat saepe!</p>
        <a href="book.php" class="btn">book now</a>
    </div>
</section>





    <section class="footer">

    <div class="box-container">
        <!--
        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i>home</a>
            <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
            <a href="packages.php"><i class="fas fa-angle-right"></i>packages</a>
            <a href="About.php"><i class="fas fa-angle-right"></i>About</a>
        </div>-->
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