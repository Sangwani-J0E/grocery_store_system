<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/about-img-1.png" alt="">
         <h3>why choose us?</h3>
         <p>At Foody Foods, we’re passionate about bringing the best of local groceries straight to your doorstep. By partnering with trusted local producers, we ensure that every product is fresh, high-quality, and sustainably sourced.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
         <img src="images/about-img-2.png" alt="">
         <h3>what we provide?</h3>
         <p>we bring the best of locally made groceries directly to your doorstep. Our web app offers a convenient way to browse a wide range of fresh, locally sourced products, place orders with ease, and schedule flexible deliveries. Supporting local businesses, we deliver high-quality foods that make it from the farm to your table with just a few clicks.</p>
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">clients reivews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic1.jpg" alt="">
         <p>“Foody Foods has changed the way I shop for groceries! I love knowing that I’m supporting local farmers and producers, and the quality of the produce is unbeatable. The delivery is always on time, and it’s so convenient to order everything from home!”.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Mathews Banda</h3>
      </div>

      <div class="box">
         <img src="images/pic2.jpg" alt="">
         <p>“This is by far the easiest grocery delivery service I’ve used. The website is super intuitive, and the ability to choose my delivery time is a game-changer. Fresh, local food delivered straight to my door—what more could I ask for?”</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Taonga Mkandawire</h3>
      </div>

      <div class="box">
         <img src="images/pic3.jpg" alt="">
         <p>“I’m so glad I found Foody Foods! The variety of products is fantastic, and I can always count on them for fresh, quality ingredients. Plus, it feels good knowing I’m supporting local stores. Highly recommend!”</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Grace Chisambi</h3>
      </div>

      <div class="box">
         <img src="images/pic4.jpg" alt="">
         <p>“Foody Foods has become my go-to for groceries. I love that I can track my order and see exactly when it’s arriving. The team is friendly, the service is reliable, and the produce is always fresh. A great experience every time!”</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>David Banda</h3>
      </div>

      <div class="box">
         <img src="images/pic5.jpg" alt="">
         <p>“Fresh, local, and convenient—that’s how I’d describe Foody Foods. The app makes ordering so easy, and I love the recommendations for new products. I’m discovering so many local brands that I never knew about. Five stars!”</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Tabu Nyirenda</h3>
      </div>

      <div class="box">
         <img src="images/pic6.jpeg" alt="">
         <p>"Foody Foods has completely changed the way I shop! I love knowing that I’m supporting local farmers and businesses, and everything arrives fresh and on time. The app is super easy to use, and I appreciate being able to schedule deliveries around my busy day!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Stephano Kilimanjaro </h3>
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>