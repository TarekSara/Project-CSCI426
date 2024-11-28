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

    <div class="heading" style="background:url(images/)no-repeat">
        <h1>packages</h1>
    </div>
-->
       
    <section class="packages" id="packages">
   
   <h1 class="title">
       <span>p</span>
       <span>a</span>
       <span>c</span>
       <span>k</span>
       <span>a</span>
       <span>g</span>
       <span>e</span>
       <span>s</span>
   </h1>

   <div class="box-container">
       
       <div class="box">
           <img src="images/368FB3B2-0274-45E8-BB62B99DD0720B7B.jpeg" alt="">
           <div class="content">
               <h3><i class="fas fa-map-marker-alt"></i> mumbai</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
               <div class="stars">
                   <i class="fas fa-star"></i> 
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
               </div>
               <div class="price"> $90.00 <span>$120.00</span> </div>
               <a href="book.php" class="btn">book now</a>
           </div>
       </div>

       <div class="box">
           <img src="images/home-sydney-harbour-bridge-opera-house-and-cbd-night-vivid-1.jpg" alt="">
           <div class="content">
               <h3><i class="fas fa-map-marker-alt"></i> sydney</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
               <div class="stars">
                   <i class="fas fa-star"></i> 
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
               </div>
               <div class="price"> $90.00 <span>$120.00</span> </div>
               <a href="book.php" class="btn">book now</a>
           </div>
       </div>

       <div class="box">
           <img src="images//0x0.webp" alt="">
           <div class="content">
               <h3><i class="fas fa-map-marker-alt"></i> hawaii </h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
               <div class="stars">
                   <i class="fas fa-star"></i> 
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
               </div>
               <div class="price"> $90.00 <span>$120.00</span> </div>
               <a href="book.php" class="btn">book now</a>
           </div>
       </div>

       <div class="box">
           <img src="images/paris.jpg" alt="">
           <div class="content">
               <h3><i class="fas fa-map-marker-alt"></i> paris </h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
               <div class="stars">
                   <i class="fas fa-star"></i> 
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
               </div>
               <div class="price"> $90.00 <span>$120.00</span> </div>
               <a href="book.php" class="btn">book now</a>
           </div>
       </div>

       <div class="box">
           <img src="images/caption.jpg" alt="">
           <div class="content">
               <h3><i class="fas fa-map-marker-alt"></i> tokyo </h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
               <div class="stars">
                   <i class="fas fa-star"></i> 
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
               </div>
               <div class="price"> $90.00 <span>$120.00</span> </div>
               <a href="book.php" class="btn">book now</a>
           </div>
       </div>

       <div class="box">
           <img src="images/this-is-the-nile-valley.jpg" alt="">
           <div class="content">
               <h3><i class="fas fa-map-marker-alt"></i> egypt </h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
               <div class="stars">
                   <i class="fas fa-star"></i> 
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
               </div>
               <div class="price"> $90.00 <span>$120.00</span> </div>
               <a href="book.php" class="btn">book now</a>
           </div>
       </div>

</section>




    <section class="gallery" id="gallery">
    <h1 class="title">
        <span>G</span>
        <span>a</span> 
        <span>l</span>
        <span>l</span>
        <span>e</span>
        <span>r</span>
        <span>y</span>

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