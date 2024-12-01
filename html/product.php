<?php
session_start();

include "connection.php";

$sqlCommand = "SELECT * FROM products";

$answer = $conn->query($sqlCommand);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETHIO GAMES - Gaming website</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- 
        - favicon link
    -->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

    <!-- w
        - custom css link
    -->
    <link rel="stylesheet" href="../css/home.css">
    <!-- 
        - google font link
    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fontaqs.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&family=Poppins:wght@400;500;700&display=swap"
        rel="stylesheet">
        
    </head>

    <body id="top">

    <!-- 
        - #HEADER
    -->

    <header class="header">

        <!-- 
        - overlay
        -->
        <div class="overlay" data-overlay></div>

        <div class="container">
        <div  class="ethio">
        <a href="#" class="logo">
            <img src="../images/logoM.png" alt="ETHIO GAMES logo">
            <h2> ETHIO GAMES</h2>
        </a>
        </div>
        <button class="nav-open-btn" data-nav-open-btn>
            <ion-icon name="menu-outline"></ion-icon>
        </button>

        <nav class="navbar" data-nav>

            <div class="navbar-top">
            <div  class="ethio">
            <a href="#" class="logo">
                <img src="../images/logoM.png" width="100px" alt="ETHIO GAMES logo">
            </a>
            </div>
            <button class="nav-close-btn" data-nav-close-btn>
            <ion-icon name="close-outline"></ion-icon>
            </button>

            </div>

            <ul class="navbar-list">

            <li>
                <a href="home.php" class="navbar-link">HOME</a>
            </li>
        
            <li>
                <a href="product.php" class="navbar-link">PRODUCTS</a>
            </li>

            <li>
                <a href="../html/account.php" class="navbar-link">Account</a>
            </li>
            <li>
                <a href="#about" class="navbar-link">About</a>
            </li>
            <li>
                <a href="logout.php" class="navbar-link">Logout</a>
            </li>

            </ul>

            <ul class="nav-social-list">

            <li>
                <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
                </a>
            </li>

            <li>
                <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
                </a>
            </li>

            <li>
                <a href="#" class="social-link">
                <ion-icon name="logo-github"></ion-icon>
                </a>
            </li>

            <li>
                <a href="#" class="social-link">
                <ion-icon name="logo-youtube"></ion-icon>
                </a>
            </li>


        </ul>

        <div class="logout-nav">
            <img src="../images/logout_16dp_E8EAED_FILL0_wght400_GRAD0_opsz20.png" alt="" style="font-size:10px;">
            <p>LogOut</p>
        </div>


        </nav>

        <div class="profile">

        <a href="account.php"> <img src="../images/person_16dp_E8EAED_FILL0_wght400_GRAD0_opsz20.png" alt=""></a>
            <p style="color:#fff">
            <?php
            if(isset($_SESSION['email'])){
                $email = $_SESSION['email'];
                $query = mysqli_query($conn,"SELECT maindb.* FROM  `maindb` WHERE maindb.email = '$email' ");
                while($row=mysqli_fetch_array($query)){
                echo $row['firstname'];
                }
            }
            ?>
            </p>

        
        </div>


        </div>

    </header>





    <main>
        <article>
        <!-- 
            - #HERO
        -->

        <section class="hero" id="hero">
            <div class="container">

            <p class="hero-subtitle">New GEN</p>

            <h1 class="h1 hero-title">ETHIO Gears</h1>

            <div class="btn-group">

            <button class="btn btn-link">Dream making</button>

            </div>

            </div>
        </section>





        <div class="section-wrapper">

        



            <!-- 
            - #Game Area
            -->

            


        <!-- 
            - #GEARS
            -->

            <section class="gears" id="gears">
            <div class="container">
                <a href="../html/item.html">
                <h2 class="h2 section-title">products</h2>
            </a>

                <ul class="gears-list">

                <?php
        while($row =mysqli_fetch_array($answer)) {
        ?>

        <li>
            <div class="gears-card">

            <div class="card-banner">

                <a href="#">
                <img src="<?php echo $row['product_image'] ?>" alt="Headphone">
                </a>


                <div class="card-time-wrapper">
                <ion-icon name="time-outline"></ion-icon>

                <span><?php echo $row['remaing_stock'] ?></span>
                </div>

            </div>

            <div class="card-content">

                <div class="card-title-wrapper">

                <h3 class="h3 card-title"><?php echo $row['product_name'] ?></h3>

                <p class="card-subtitle"><?php echo $row['product_desc'] ?></p>

                </div>

                <div class="card-prize">$<?php echo $row['product_price'] ?></div>

            </div>

            <div class="card-actions">

                <button class="btn btn-primary">
                <ion-icon name="add-outline"></ion-icon>

                <span>ADD to Products</span>
                </button>


            </div>

            </div>
        </li>

        <?php 
        }

        ?>
                

        
            

                </ul>

            </div>
            </section>


    <!-- 
            - #ABOUT
            -->

            <section class="about" id="about">
            <div class="container">

                <div class="about-content">

                <p class="about-subtitle">Find your perfect game</p>

                <h2 class="about-title">Experience just for  <strong>gamers</strong> </h2>

                <p class="about-text">
                    "Our Ethio" emerged on April 23, 2024, when a team of four passionate individuals from Ethiopia united with a shared mission: to reach people's hearts through the medium of games. With a focus on storytelling, cultural representation, and innovation, they dedicated themselves to creating captivating gaming experiences. By infusing their games with elements rooted in Ethiopian heritage and showcasing the country's beauty, they aimed to foster pride and connection. Overcoming challenges, their creations resonated with an expanding audience, forging connections and leaving a lasting impact. Today, "Our Ethio" stands as a testament to the transformative power of games, touching hearts and celebrating Ethiopian culture worldwide.
                </p>

                <p class="about-bottom-text">
                    <ion-icon name="arrow-forward-circle-outline"></ion-icon>

                    <span>Will sharpen your brain and focus</span>
                </p>

                </div>

                

            </div>
            </section>



        </div>
        

        </article>
    </main>





    <!-- 
        - #FOOTER
    -->

    <footer>

        <div class="footer-top">
        <div class="container">

            <div class="footer-brand-wrapper">
            <div class="ethio">
            <a href="#" class="logo">
                <img src="../images/logoM.png" width="100px" alt="ETHIO GAMES logo">
                <h2>ETHIO GAMES</h2>
            </a>
            </div>
            <div class="footer-menu-wrapper">

                <ul class="footer-menu-list">

                <li>
                    <a href="#hero" class="footer-menu-link">Home</a>
                </li>

                <li>
                    <a href="#about" class="footer-menu-link">About</a>
                </li>

                <li>
                    <a href="#gears" class="footer-menu-link">Gears</a>
                </li>

                <li>
                    <a href="#" class="footer-menu-link">Account</a>
                </li>

                </ul>

                <div class="footer-input-wrapper">
                <input type="text" name="message" required placeholder="Find Here Now" class="footer-input">

                <button class="btn btn-primary">
                    <ion-icon name="search-outline"></ion-icon>
                </button>
                </div>

            </div>

            </div>

            <div class="footer-quicklinks">

            <ul class="quicklink-list">

                <li>
                <a href="#" class="quicklink-item">Faq</a>
                </li>

                <li>
                <a href="#" class="quicklink-item">Help center</a>
                </li>

                <li>
                <a href="#" class="quicklink-item">Terms of use</a>
                </li>

                <li>
                <a href="#" class="quicklink-item">Privacy</a>
                </li>

            </ul>

            <ul class="footer-social-list">

                <li>
                <a href="#" class="footer-social-link">
                    <ion-icon name="logo-discord"></ion-icon>
                </a>
                </li>

                <li>
                <a href="#" class="footer-social-link">
                    <ion-icon name="logo-twitch"></ion-icon>
                </a>
                </li>

                <li>
                <a href="#" class="footer-social-link">
                    <ion-icon name="logo-xbox"></ion-icon>
                </a>
                </li>

                <li>
                <a href="#" class="footer-social-link">
                    <ion-icon name="logo-youtube"></ion-icon>
                </a>
                </li>

            </ul>

            </div>

        </div>
        </div>



    </footer>





    <!-- 
        - #GO TO TOP
    -->

    <a href="#top" class="btn btn-primary go-top" data-go-top>
        <ion-icon name="chevron-up-outline"></ion-icon>
    </a>





    <!-- 
        - custom js link
    -->
    <script src="..//js/script.js"></script>

    <!-- 
        - ionicon link
    -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>