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

    <link rel="stylesheet" href="ecommercee.css">
    <style>
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
    <div class="container hi">
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