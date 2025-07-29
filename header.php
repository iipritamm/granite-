<?php
include 'connection.php';
?>


<!DOCTYPE html>
<html lang="en">

<!-- index47:29  -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Set Private Limited" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Blueveneret Granites pvt ltd</title>


    <!------------------------------------------
      Main CSS File
    <------------------------------------------>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/custom-animation.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Favicon -->
    <link href="images/assets/logo.jpg" rel="shortcut icon" type="image/png">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
      </script>
    <script type="text/javascript">
      (function() {
        emailjs.init("Exi5nsBGxocINQGWW"); // Make sure this Public Key is correct and matches your EmailJS account
        console.log("EmailJS initialized");
      })();
    </script>
</head>

<style>
    .container-fluid {
     
    }
    .hero-slides-nav {
  width: 312px;
  height: 200px;
  background-color: #ddd;
  position: absolute;
  bottom: 107px;
  right: 0px;
  z-index: 9;
}


.hero-slides-nav:after {
  position: absolute;
  width: 100%;
  background-color: rgba(0, 0, 0, 0.3);
  height: 100%;
  top: 0;
  left: 0;
  content: '';
  z-index: -1;
}

@media screen and (max-width: 1300px) {
  #dis {
    display: none;
  }
}

    /* Initial header style */
    .header {
        position: fixed;
        top: 0;
        width: 100%;
        background-color: transparent;
        transition: background-color 0.3s ease, color 0.3s ease;
        z-index: 999;
    }

    /* When scrolled, header becomes white and text becomes black */
    .header.scrolled {
        background-color: white;
        color: black;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Optional: adds shadow for better effect */
    }

    /* Default header link style */
    .header a {
        color: white;
        transition: color 0.3s ease;
    }

    /* Change link color when scrolled */
    .header.scrolled a {
        color: black;
    }


<!-- Add this script before the closing body tag or in a separate JS file -->


</style>

<body>

    <!-- <div class="preloader"></div> -->

    <!-- Start Page Wrapper  -->
    <div class="page-wrapper">

        <!--    Section Start -->
        <header class="header header-style-1 clearfix">
    <div class="menu-style menu-style-1 bg-transparent clearfix">
        <!-- Main Navigation -->
        <div class="main-navigation fixed-header">
            <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid px-0" style="background-color: transparant;"> <!-- Added px-0 for no horizontal padding -->
                    <!-- Logo -->
                    <a class="navbar-brand" href="index.php">
                        <img id="logo_img" src="images/logo-removebg-preview (1).png "style="width: 70px !important;" alt="Logo">
                        
                    </a>

                    <!-- Toggler for mobile view -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navbar-collapse-1" 
                            aria-controls="navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Navbar links -->
                    <div class="collapse navbar-collapse" id="navbar-collapse-1">
                        <ul class="navbar-nav ml-auto">
                            <!-- Home -->
                            <li class="nav-item">
                                <a href="index.php" class="nav-link">Home</a>
                            </li>

                            <!-- Product Dropdown -->
                            <li class="nav-item dropdown">
                                <a href="product.php" class="nav-link dropdown-toggle" data-toggle="dropdown" 
                                   aria-haspopup="true" aria-expanded="false">products</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="granite.php">GRANITE</a>
                                    <a class="dropdown-item" href="granite.php">SANDSTONE</a>
                                    <a class="dropdown-item" href="granite.php">PORPHYRY</a>
                                    <a class="dropdown-item" href="granite.php">BASALT STONE</a>
                                    <a class="dropdown-item" href="granite.php">STONECRAFT</a>
                                </div>
                            </li>
                            
                            

                            <!-- Pages Dropdown -->
                             <!-- About link -->
                            <li class="nav-item dropdown">
                                <a href="about.php" class="nav-link dropdown-toggle" data-toggle="dropdown" 
                                   aria-haspopup="true" aria-expanded="false">About Us</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="company.php">Company Profile</a>
                                    <a class="dropdown-item" href="infrastructure.php">Infrastructure</a>
                                </div>
                            </li>

                            
                            

                            <!-- Gallery Link -->
                            <li class="nav-item">
                                <a href="gallery.php" class="nav-link">Gallery</a>
                            </li>

                            <!-- Contact Link -->
                            <li class="nav-item">
                                <a href="contact.php" class="nav-link">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Main Navigation End -->
    </div>
</header>

        <!-- Header Section End -->
        <script>
    window.addEventListener('scroll', function () {
        const header = document.querySelector('.header');
        if (window.scrollY > 50) { // When scrolled 50px from the top
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
</script>

</body>
</html>       