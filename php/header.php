<header class="header">

    <div class="header-1">
        <div class="flex">
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
            <p> new <a href="login.php">login</a> | <a href="register.php">register</a> </p>
        </div>
    </div>

    <div class="header-2">
        <div class="flex">
            <a href="home.php" class="logo">Bibliophile Emporium.</a>

            <nav class="navbar">
                <a href="home.php">home</a>
                <a href="#">about</a>
                <a href="#">shop</a>
                <a href="#">contact</a>
                <a href="#">orders</a>
            </nav>

            <div class="icons">
                <div id="menu-btn" class="fas fa-bars"></div>
                <a href="#" class="fas fa-search"></a>
                <div id="user-btn" class="fas fa-user"></div>
                <a href="#"> <i class="fas fa-shopping-cart"></i></a>
            </div>

            <div class="user-box">
                <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>
                <p>email : <span><?php echo $_SESSION['user_email']; ?></span></p>
                <a href="#" class="delete-btn">logout</a>
            </div>
        </div>
    </div>

</header>