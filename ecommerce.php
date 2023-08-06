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

    <link rel="stylesheet" href="ecommerce.css">
    <style>
        #clearAll {
            width: auto;
            margin: 0;
            float: left;
            background-color: red;
            color: white;
        }

        #deleteForm>input {
            margin: 0;
            float: left;
        }

        html {
            scroll-behavior: smooth;
        }

        .navbar {
            /* background-color: white; */
            /* border-top: 1px solid black; */
            background: #f19d1f;
            background: -webkit-linear-gradient(59deg, #0B553E, #F19D1F);
            background: linear-gradient(59deg, #0B553E, #F19D1F);
        }

        nav>a>img {
            width: 85px;
        }

        .header_img {
            height: 740px;
            background-image: url("img/slideshowV1-bg1.webp");
            background-repeat: no-repeat;
            background-size: cover;
        }

        .header_img>div>p {
            font-size: 25px;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

        .header_img>div {
            padding: 200px 0 0 50px;
        }

        .header_img p:nth-child(2) {
            font-size: 60px;
            font-weight: 600;
        }

        li {
            margin-left: 15px;
        }

        h2 {
            text-align: center;
            margin: 10px 0 0;
            font-size: 3.1rem;
        }

        table>tbody>tr>td>img {
            width: 100px;
            height: 50px;
        }

        .table td {
            vertical-align: middle;
        }

        input:hover {
            background-color: #f19d1f;
            border: 1px solid #f19d1f;
            color: white
        }

        .navbar-light .navbar-nav .nav-link {
            color: black;
            font-weight: 600;
        }

        .navbar-light .navbar-nav .nav-link:hover {
            color: white;
            background-color: #f19d1f;
        }

        form {
            width: 100%;
            margin: 30px;
            font-size: 20px;
        }

        form>div {
            width: 100%;
            margin-bottom: 25px;
        }

        input {
            width: 100%;
            background-color: white;
            border: 1px solid #f19d1f;
            border-radius: 5px;
            padding: 10px;
        }

        .container {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }

        .addContainer {
            width: 50%;
            border: 5px solid #f19d1f;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-between;
            border-radius: 20px;
            box-shadow: 0 0 1000px rgba(0, 0, 0, 0.1);
        }

        form div:nth-child(5) {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        form input:nth-child(6) {
            width: 100%;
            float: middle;
        }

        form:nth-child(2)>input,
        #deleteForm>input {
            width: auto;
            background-color: red;
            color: white;
        }

        #viewProduct {
            width: auto;
        }

        #deleteForm>input {
            margin-right: 20px;
        }

        footer {
            background: #f19d1f;
            background: -webkit-linear-gradient(59deg, #F19D1F, #0B553E);
            background: linear-gradient(59deg, #F19D1F, #0B553E);
            color: linear-gradient(59deg, #F19D1F, #0B553E);
            margin-top: 100px;
        }

        footer a {
            color: black;
            font-size: 14px;
            transition-duration: 0.2s;
        }

        footer a:hover {
            color: #FA944B;
            text-decoration: none;
        }

        .copy {
            font-size: 12px;
            padding: 10px;
            border-top: 1px solid #FFFFFF;
        }

        .footer-middle {
            padding-top: 2em;
            color: black;
        }


        /*SOCİAL İCONS*/

        /* footer social icons */

        ul.social-network {
            list-style: none;
            display: inline;
            margin-left: 0 !important;
            padding: 0;
        }

        ul.social-network li {
            display: inline;
            margin: 0 5px;
        }


        /* footer social icons */

        .social-network a.icoFacebook:hover {
            background-color: #0B553E;
        }

        .social-network a.icoLinkedin:hover {
            background-color: #0B553E;
        }

        .social-network a.icoFacebook:hover i,
        .social-network a.icoLinkedin:hover i {
            color: #fff;
        }

        .social-network a.socialIcon:hover,
        .socialHoverClass {
            color: #44BCDD;
        }

        .social-circle li a {
            display: inline-block;
            position: relative;
            margin: 0 auto 0 auto;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 50%;
            text-align: center;
            width: 30px;
            height: 30px;
            font-size: 15px;
        }

        .social-circle li i {
            margin: 0;
            line-height: 30px;
            text-align: center;
        }

        .social-circle li a:hover i,
        .triggeredHover {
            -moz-transform: rotate(360deg);
            -webkit-transform: rotate(360deg);
            -ms--transform: rotate(360deg);
            transform: rotate(360deg);
            -webkit-transition: all 0.2s;
            -moz-transition: all 0.2s;
            -o-transition: all 0.2s;
            -ms-transition: all 0.2s;
            transition: all 0.2s;
        }

        .social-circle i {
            color: #595959;
            -webkit-transition: all 0.8s;
            -moz-transition: all 0.8s;
            -o-transition: all 0.8s;
            -ms-transition: all 0.8s;
            transition: all 0.8s;
        }

        .social-network a {
            background-color: #F9F9F9;
        }

        @media screen and (max-width: 768px) {
            .addContainer {
                width: 100%;
            }
        }

        @media screen and (min-width:480px) and (max-width: 768px) {
            .header_img {
                height: 400px;
                background-image: url("img/slideshowV1-bg1.webp");
                background-repeat: no-repeat;
                background-size: cover;
            }

            .header_img>div>p {
                font-size: 15px;
                font-family: Georgia, 'Times New Roman', Times, serif;
            }

            .header_img>div {
                padding: 140px 0 0 25px;
            }

            .header_img p:nth-child(2) {
                font-size: 30px;
                font-weight: 600;
            }

            .h4,
            h4 {
                font-size: 0.9rem;
            }

            h2 {
                font-size: 2.5rem;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light fixed-top">
        <a class="navbar-brand" href="#"><img src="img/rawabifarah_logo170.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#addProduct">Add Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#productTable">Product Table</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/PHP-Tasks/Task4(3-8-2023)/viewProducts.php?">View
                        Product</a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="header_img">
        <div>
            <p>
                FRESH VEGITABLES
            </p>
            <p>
                Delicious Helthiest <br>Vegitables
            </p>
            <p>
                Reach for a healthier you with orgnic foods
            </p>
        </div>
    </div>
    <div class="container">
        <br>
        <hr>
        <h2 id="addProduct">Add Product</h2>
        <hr>
        <div class="addContainer">
            <form method="get" action="ecommerce.php" class="productFill">
                <div>
                    <label for="Product_Name">Product Name: </label><br>
                    <input type="text" name="Product_Name" id="Product_Name">
                </div>
                <div>
                    <label for="Product_Details">Product Details: </label><br>
                    <input type="text" name="Product_Details">
                </div>
                <div>
                    <label for="Product_Date">Product Date: </label><br>
                    <input type="date" name="Product_Date">
                </div>
                <div>
                    <label for="Product_Image">Product Image: </label><br>
                    <input type="file" name="Product_Image">
                </div>
                <div>
                    <input type="checkbox" id="Active" name="Active">
                    <label for="Active">Active</label>
                </div>
                <input type="submit" value="Add" name="Add">
            </form>
        </div>
        <br><br>
    </div>
    <?php
    if (isset($_GET['Product_Name']) && isset($_GET['Product_Details']) && isset($_GET['Product_Date']) && isset($_GET['Product_Image']) && $_GET['Product_Name'] !== "" && $_GET['Product_Details'] !== "" && $_GET['Product_Date'] !== "" && $_GET['Product_Image'] !== "") {
        $Products = array(
            'Product_Name' => $_GET['Product_Name'],
            'Product_Details' => $_GET['Product_Details'],
            'Product_Date' => $_GET['Product_Date'],
            'Product_Image' => $_GET['Product_Image'],
            'Product_Active' => isset($_GET['Active']) == 'on' ? 'Active' : 'Not Active'
        );


        $_SESSION['Products'][] = $Products;
        header('Location: ecommerce.php');
        exit;
    }
    ?>
    <div class="container">

        <h2>Product Table</h2>
        <div class="table-responsive">
            <table class="table table-sm table-hover " id="productTable">
                <thead>
                    <tr>
                        <th scope="col">Product Name</th>
                        <th scope="col">Product Details</th>
                        <th scope="col">Product Date</th>
                        <th scope="co">Product Image</th>
                        <th scope="col">Product Active</th>
                        <th scope="col">
                            <form method='get'><input type='submit' name='deleteAll' value='clear all' id="clearAll">
                            </form>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($_GET['deleteAll']) && $_GET['deleteAll'] == true) {
                        unset($_SESSION['Products']);
                    }
                    if (isset($_GET['delete']) && $_GET['delete'] == true) {
                        $indexToDelete = $_GET['index'];
                        if (isset($_SESSION['Products'][$indexToDelete])) {
                            unset($_SESSION['Products'][$indexToDelete]);
                        }
                    }
                    if (isset($_SESSION['Products'])) {
                        $products = $_SESSION['Products'];
                    } else {
                        $products = array();
                    }
                    foreach ($products as $index => $product) {
                        echo "<tr>";
                        echo "<td>" . $product['Product_Name'] . "</td>";
                        echo "<td>" . $product['Product_Details'] . "</td>";
                        echo "<td>" . $product['Product_Date'] . "</td>";
                        echo "<td>";
                        echo "<img src='" . "img/" . $product['Product_Image'] . "' alt='Product Image'>";
                        echo "</td>";
                        echo "<td>" . $product['Product_Active'] . "</td>";
                        echo "<td>";
                        echo "<form method='get' id='deleteForm'>";
                        echo "<input type='hidden' name='index' value='" . $index . "'>";
                        echo "<input type='submit' name='delete' value='delete' class='delete'>";
                        echo "</form>";
                        echo "</td>";
                        echo "</tr>";
                    }
                    ?>
            </table>
        </div>
        <form action="viewProducts.php">
            <input type="submit" value="View Products" id="viewProduct">
        </form>
    </div>
    <footer class="mainfooter" role="contentinfo">
        <div class="footer-middle">
            <div class="container" style="padding : 0 150px">
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
                            <li><a href="https://www.facebook.com/yousef.garadat.9/" target="_blank" class="icoFacebook"
                                    title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/yousef-jaradat-5a8a01279/" target="_blank"
                                    class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="https://github.com/" target="_blank" class="icoLinkedin" title="Linkedin"><i
                                        class="fa fa-github"></i></a></li>
                            <li><a href="https://www.instagram.com/yousef.jaradat/" target="_blank" class="icoLinkedin"
                                    title="Linkedin"><i class="fa fa-instagram"></i></a></li>
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