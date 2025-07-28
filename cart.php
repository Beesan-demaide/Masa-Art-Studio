<?php
$con = mysqli_connect("localhost","sqluser","password","masaartstudio");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MASA ART STUDIO</title>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <script src="https://kit.fontawesome.com/e020b906ca.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="stylesheet" href="href=https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="./footerStyle.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section id="header">
        <a href="#"><img src="/logoo.png" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a class="active" href="shop.html">ArtShop</a></li>
                <li><a href="mywork.html">My Works</a></li>
                <li><a href="blog.php">Art Blog</a></li>
                <li><a href="about.html">About Me</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li id="lg-bag"><a href="./s/sss.html"><i class="fa-solid fa-user"></i></a></li>
                <li id="lg-bag"><a href="cart.php"><i class="far fa-shopping-bag"></i></a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="./s/sss.html"><i class="fa-solid fa-user"></i></a></li>
            <a href="cart.html"><i class="far fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>

        </div>
    </section>

    <section id="page-header" class="about-header">

        <h2 class="aboutt-header">#cart</h2>
        <p class="aboutt-header">Add your coupon code & SAVE upto 70%!</p>

    </section>

    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Image</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Subtotal</td>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                    <td><img src="img/products/f1.jpg" alt=""></td>
                    <td>Cartoon Astronaut T-Shirts</td>
                    <td>$118.19</td>
                    <td><input type="number" value="1" name="" id=""></td>
                    <td>$118.19</td>
                </tr>
                <tr>
                    <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                    <td><img src="img/products/f2.jpg" alt=""></td>
                    <td>Cartoon Astronaut T-Shirts</td>
                    <td>$118.19</td>
                    <td><input type="number" value="1" name="" id=""></td>
                    <td>$118.19</td>
                </tr>
                <tr>
                    <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                    <td><img src="img/products/f3.jpg" alt=""></td>
                    <td>Cartoon Astronaut T-Shirts</td>
                    <td>$118.19</td>
                    <td><input type="number" value="1" name="" id=""></td>
                    <td>$118.19</td>
                </tr>
            </tbody>
        </table>
    </section>

    <section id="cart-add" class="section-p1">
        <div id="cuopon">
            <h3>Apply Coupon</h3>
            <div>
                <input type="text" name="" id="" placeholder="Enter Your Coupon">
                <button class="normal">Apply</button>
            </div>
        </div>

        <div id="subtotal">
            <h3>Cart Totals</h3>
            <table>
                <tr>
                    <td>Cart Subtotal</td>
                    <td>$ 335</td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>Free</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong>$ 335</strong></td>
                </tr>
            </table>
            <button class="normal">Proceed to checkout</button>
        </div>
    </section>

<!--Footer section-->
<footer class = "footer">
    <div class="box-container">
        <div class="box" id="quick-links">
            <h3>quick links</h3>
            <a href=""><i class="fas fa-angle-right"></i> Home</a>
            <a href=""><i class="fas fa-angle-right"></i> My Works</a>
            <a href=""><i class="fas fa-angle-right"></i> Art Shop</a>
            <a href=""><i class="fas fa-angle-right"></i> Art Blog</a>
        </div>

        <div class="box" id="contact-info">
            <h3>Contact info</h3>
            <a href=""><i class="fas fa-phone"></i>Kariem Mohammed AbuAisheh</a>
            <a href=""><i class="fas fa-envelope"></i>kariemalwazany@gmail.com</a>
            <a href=""><i class="fas fa-phone"></i>Beesan Waleed Demaide</a>
            <a href=""><i class="fas fa-envelope"></i>email</a>
            <a href=""><i class="fas fa-map"></i>Palestine - Nablus</a>
        </div>

        <div class="box" id="follow-us">
            <h3>Follow Us</h3>
            <a href=""><i class="fab fa-facebook"></i>Facebook</a>
            <a href="https://www.instagram.com/masa.artstudio/?igshid=YmMyMTA2M2Y%3D&fbclid=IwAR0Ia8pbptx6xfwMfwNg8edJdABMChr4a0jL8nkxKzvPjldKsfPbs4C_ycw" target="_blank"><i class="fab fa-instagram"></i>Instagram</a>
            <a href="https://www.tiktok.com/@masa.artstudio1?_t=8Xey2vFtgW2&_r=1&fbclid=IwAR09AEdhmEP3hL-7JmQFml9A4wR4Y3FWgLBRUfjoT8MexvHxs6GxoQ00Ngo" target="_blank"><i class="fa-brands fa-tiktok"></i>TikTok</a>            
        </div>
    </div> 
    <div class="credit"> <br> Created by <span>Kariem Alwazany, Beesan Demaide</span> | All Rights Reserved!<br><br></div>
</footer>

<!--Footer section-->


    <script src="script.js"></script>

</body>

</html>