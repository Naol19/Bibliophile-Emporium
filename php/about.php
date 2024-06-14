<?php

include 'config.php';

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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/about.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="../images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>At Bibliophile Emporium we are passionate about connecting readers with captivating stories, inspiring ideas, and valuable knowledge. Whether you're an avid reader searching for your next literary adventure or a casual reader exploring new interests, we're here to cater to all your bookish needs.</p>
         <p> we're more than just a bookstore. We're a community of book enthusiasts who share a love for the written word.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="../images/pic-7.png" alt="">
         <p>I looked too many websites to get a good website that I can find all books in it but in your website I got more than I looked for.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
         </div>
         <h3>Lidya Getachew</h3>
      </div>

      <div class="box">
         <img src="../images/pic-16.png" alt="">
         <p>I'm happy to see my students' developing such amazing website I'm proud of you guys keep it up. And I'liked to be your client.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
         </div>
         <h3>Habtamu Alemayehu</h3>
      </div>

      <div class="box">
         <img src="../images/pic-17.png" alt="">
         <p>I like you website that it has an amazing interface and all books I want to read. if it's your willingness I want to bring you in my show.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>solomon Mulgeta</h3>
      </div>

      <div class="box">
         <img src="../images/pic-9.png" alt="">
         <p>Most of the time I read books As you would say in short I am a bibliophile, but i didn't get new released books on time before but after I found your website it's solved</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Diyana Andualem</h3>
      </div>

      <div class="box">
         <img src="../images/pic-15.png" alt="">
         <p>As a prime minister I have to read as many books as I can to govern my country and also to write a good book properly in that case I found your website well developed to fullfill my goal. </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Dr. Abiy Ahmed</h3>
      </div>

      <div class="box">
         <img src="../images/pic-2.png" alt="">
         <p>I am a foreginer and i really wants to get knowledge about Ethiopia because of that I also want to read your Books And your site are best fit to get all books.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Anabel stewart</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">greate authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="../images/author-8.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>ሎሬት ጸጋዬ ገብረመድን</h3>
      </div>

      <div class="box">
         <img src="../images/author-9.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>በዓሉ ግርማ</h3>
      </div>

      <div class="box">
         <img src="../images/author-14.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>ዶክተር ምህረት ደበበ</h3>
      </div>

      <div class="box">
         <img src="../images/author-12.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>በዕውቀቱ ስዩም</h3>
      </div>

      <div class="box">
         <img src="../images/author-13.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>ዶክተር አብይ አህመድ</h3>
      </div>

      <div class="box">
         <img src="../images/author-11.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>አለማየሁ ዋሴ እሸቴ</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>
<!-- custom js file link -->
<script src="js/script.js"></script>


</body>
</html>
