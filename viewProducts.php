<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="viewProducts.css">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light fixed-top">
        <a class="navbar-brand" href="#"><img src="img/logo1-removebg-preview.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/mini-project-php/ecommerce.php?#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/mini-project-php/ecommerce.php?#addProduct">Add
                        Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                        href="http://localhost/mini-project-php/ecommerce.php?#productTable">Product Table</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/mini-project-php/viewProducts.php?">View
                        Product</a>
                </li>
            </ul>
        </div>
    </nav><br><br><br>
    <h1>View Product</h1>
    <hr>
    <?php
    if (isset($_SESSION['Products'])) {
        $products = $_SESSION['Products'];
    } else {
        $products = array();
    }
    echo "<div class='card_container'>";
    foreach ($products as $index => $product) {
        echo "<div class='card' id='viewProduct'>";
        echo "<img src='" . "img/" . $product['Product_Image'] . "' alt='Product Image'>";
        echo "<p>" . "Name: " . $product['Product_Name'] . "</p>";
        echo "<p>" . "Details: " . $product['Product_Details'] . "</p>";
        echo "<p>" . "Date: " . $product['Product_Date'] . "</p>";
        echo "<p>" . "Status: " . $product['Product_Active'] . "</p>";
        echo "<span>" . $index + 1 . "</span>";
        echo "</div>";
    }
    echo "</div>";
    ?>
    <form action="ecommerce.php">
        <input type="submit" value="Return">
    </form>
    <footer class="mainfooter" role="contentinfo">
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <!--Column1-->
                        <div class="footer-pad">
                            <h4>Company</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">about us</a></li>
                                <li><a href="#">our services</a></li>
                                <li><a href="#">privacy policy</a></li>
                                <li><a href="#">affiliate program</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!--Column1-->
                        <div class="footer-pad">
                            <h4>Get Help</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">shipping</a></li>
                                <li><a href="#">order status</a></li>
                                <li><a href="#">payment options</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!--Column1-->
                        <div class="footer-pad">
                            <h4>Online shop</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">Vegitables</a></li>
                                <li><a href="#">Fruits</a></li>
                                <li><a href="#">Seeds</a></li>
                                <li><a href="#">Trees</a></li>
                                <li>
                                    <a href="#"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h4>Follow Us</h4>
                        <ul class="social-network social-circle">
                            <li><a href="https://www.facebook.com/yousef.garadat.9/" target="_blank" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/yousef-jaradat-5a8a01279/" target="_blank" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="https://github.com/" target="_blank" class="icoLinkedin" title="Linkedin"><i class="fa fa-github"></i></a></li>
                            <li><a href="https://www.instagram.com/yousef.jaradat/" target="_blank" class="icoLinkedin" title="Linkedin"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 copy">
                        <p class="text-center">&copy; Copyright 2023 - Yousef&Qasem. All rights reserved.</p>
                    </div>
                </div>


            </div>
        </div>
    </footer>
    <!-- End of .container -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>



</html>