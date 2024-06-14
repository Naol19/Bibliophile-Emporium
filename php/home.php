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
    <title>home</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/home.css">
    

</head>

<body>

<?php include 'header.php'; ?>

    <section class="home">

        <div class="content">
            <h3>Hand Picked Book to your door</h3>
            <p>“Bibliophile Emporium” suggests a books or gathering spot for passionate book lovers"</p>
            <a href="#" class="white-btn">discover more</a>
        </div>

    </section>

    <section class="products">

        <h1 class="title">latest products</h1>

        <div class="box-container">

            <?php
              echo '<p class="empty">no products added yet!</p>';
            ?>
        </div>

        <div class="load-more" style="margin-top: 2rem; text-align:center">
            <a href="#" class="option-btn">load more</a>
        </div>

    </section>

    <section class="about">

        <div class="flex">

            <div class="image">
                <img src="../images/about-img.jpg" alt="">
            </div>

            <div class="content">
                <h3>about us</h3>
                <p>“Bibliophile Emporium” is a bookstore catering to book enthusiasts. The name suggests a place where passionate readers gather to explore and celebrate literature. Additionally, the bookstore offers a convenient service: book delivery directly to customers.</p>
                <a href="#" class="btn">read more</a>
            </div>

        </div>

    </section>

    <section class="home-contact">

        <div class="content">
            <h3>have any questions?</h3>
            <p>Thank you for choosing Bibliophile Emporium. We look forward to assisting you and answering any questions you may have!</p>
            <a href="contact.php" class="white-btn">contact us</a>
        </div>

    </section>






    <?php include 'footer.php'?>

    <!-- custom js file link  -->
    <!--<script src="js/script.js"></script>-->

</body>

</html>