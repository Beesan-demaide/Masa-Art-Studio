<?php
session_Start();
$con = mysqli_connect("localhost","sqluser","password","masaartstudio");
$query = 'SELECT item_pic,item_name,price FROM shop';
$result = mysqli_query($con,$query);
while($record = mysqli_fetch_assoc($result))
{
    echo '<img'.$record['item_pic'].'>';
    $price = $record['price'];
}
if(isset($_POST['addToCart1']))
{
    $P1 = $_POST['P1'];
    $N1 = $_POST['N1'];
    $query = "INSERT INTO cart(cart_id,item_id,item_price,item_quantity,pic,item_name) VALUES ('1','2','$P1','1','bS.png','$N1')";
    $res = mysqli_query($con, $query);

}
if(isset($_POST['addToCart2']))
{
    $P2 = $_POST['P2'];
    $N2 = $_POST['N2'];
    $query = "INSERT INTO cart(item_id,item_price,item_quantity,pic,item_name) VALUES ('3','$P2','1','bS.png','$N2')";
    $res = mysqli_query($con, $query);

}
if(isset($_POST['addToCart3']))
{
    $P3 = $_POST['P3'];
    $N3 = $_POST['N3'];
    $query = "INSERT INTO cart(item_id,item_price,item_quantity,pic,item_name) VALUES ('1','$P3','1','bS.png','$N3')";
    $res = mysqli_query($con, $query);

}
if(isset($_POST['addToCart4']))
{
    $P4 = $_POST['P4'];
    $N4 = $_POST['N4'];
    $query = "INSERT INTO cart(item_id,item_price,item_quantity,pic,item_name) VALUES ('4','$P4','1','bS.png','$N4')";
    $res = mysqli_query($con, $query);

}
if(isset($_POST['addToCart5']))
{
    $P5 = $_POST['P5'];
    $N5 = $_POST['N5'];
    $query = "INSERT INTO cart(item_id,item_price,item_quantity,pic,item_name) VALUES ('5','$P5','1','bS.png','$N5')";
    $res = mysqli_query($con, $query);

}
if(isset($_POST['addToCart6']))
{
    $P6 = $_POST['P6'];
    $N6 = $_POST['N6'];
    $query = "INSERT INTO cart(item_id,item_price,item_quantity,pic,item_name) VALUES ('6','$P6','1','bS.png','$N6')";
    $res = mysqli_query($con, $query);

}
if(isset($_POST['addToCart7']))
{
    $P7 = $_POST['P7'];
    $N7 = $_POST['N7'];
    $query = "INSERT INTO cart(item_id,item_price,item_quantity,pic,item_name) VALUES ('7','$P7','1','bS.png','$N7')";
    $res = mysqli_query($con, $query);

}
if(isset($_POST['addToCart8']))
{
    $P8 = $_POST['P8'];
    $N8 = $_POST['N8'];
    $query = "INSERT INTO cart(item_id,item_price,item_quantity,pic,item_name) VALUES ('8','$P8','1','bS.png','$N8')";
    $res = mysqli_query($con, $query);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MASA ART STUDIO</title>
    <link rel="stylesheet" href="./HomeVideo.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <script src="https://kit.fontawesome.com/e020b906ca.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min. .css"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="./footerStyle.css">
    <link rel="stylesheet" href="./flippingCards.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./AboutMe.css">
    <link rel="stylesheet" href="./Home_MyWork.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <!--Header Section-->
    <section id="header">
        <a href="#"><img src="/logoo.png" class="logo" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a class="active" href="index.html">Home</a></li>
                <li><a href="shop.html">ArtShop</a></li>
                <li><a href="./mywork.html">My Works</a></li>
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
<!--Header Section-->

    <!--Video Section-->
<section>
    <div class="home" id="home">
        <div class="content">
            <h3> MASA art studio </h3>
            <h2> Art is revenge,I fight for beauty </h2>
            <button class="normal" id="Videobtn">Let's Go!</button>
        </div>
        <div class="video-container">
            <video src="/WebVideo.mp4" id="video-slider" loop autoplay ></video>
        </div>
    </div>
</section>
    <!--Video Section-->

    
    <!--Art Shop Section-->
    <section class="Artshop">
        <div class="title">
            <h1>
                <div class="cardd reveal" id="Artshop-title">
                <div class="maincontainer">
                    <div class="thecard">
                    <div class="thefront"><span>A</span></div>
                    <div class="theback"><span>A</span></div>
                </div>
            </div>

            <div class="maincontainer">
                <div class="thecard">
                <div class="thefront"><span>R</span></div>
                <div class="theback"><span>R</span></div>
            </div>
        </div>

        <div class="maincontainer">
            <div class="thecard">
            <div class="thefront"><span>T</span></div>
            <div class="theback"><span>T</span></div>
        </div>
    </div>
    <div class="maincontainer">
        <div class="thecard">
        <div class="thefront"><span id="space"></span></div>
        <div class="theback"><span id="space"></span></div>
    </div>
</div>
            <div class="maincontainer">
                    <div class="thecard">
                    <div class="thefront"><span>S</span></div>
                    <div class="theback"><span>S</span></div>
                </div>
            </div>
            

            <div class="maincontainer">
                <div class="thecard">
                <div class="thefront"><span>H</span></div>
                <div class="theback"><span>H</span></div>
            </div>
        </div>

            <div class="maincontainer">
                <div class="thecard">
                <div class="thefront"><span>O</span></div>
                <div class="theback"><span>O</span></div>
                </div>
            </div>

            <div class="maincontainer">
                 <div class="thecard">
                 <div class="thefront"><span>P</span></div>
                <div class="theback"><span>P</span></div>
                </div>
            </div> 
            </div>
                <br><br><br><br>
            </h1>
        </div>
    </section>
   
    <section id="product1" class="section-p1">
        <form method="post">
        <div class="pro-container">
            <div class="pro" >
                <img src=bs.png alt="" >
                <div class="des">
                    <input name = "N1" value="Tote Bag" class="input">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <input readonly  name = "P1" value="40$" class="input">
                </div>
                <button name="addToCart1" type="submit" class="fal fa-shopping-cart cart"></button>
                
            </div>
            <div class="pro" id="item2">
                <img src=OO4.jpg alt="">
                <div class="des" id="item3">
                <input name = "N2" value="Art Print" class="input">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <input name = "P2" value="30$" class="input">
                </div>
                <a href="#" name="addToCart2"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro"> 
                <img src=oo6.jpg alt="">
                <div class="des">
                    
                <input name = "N3" value="Tote Bag" class="input">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <input name = "P3" value="40$" class="input">
                </div>
                <a href="#" name="addToCart3"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro" >
                <img src=OO5.jpg alt="">
                <div class="des">
                <input name = "N4" value="Art Print" class="input">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <input name = "P4" value="30$" class="input">
                </div>
                <a href="#" name="addToCart4"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro" >
                <img src=m1.png alt="">
                <div class="des">
                    
                <input name = "N5" value="Mug Print" class="input">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <input name = "P5" value="15$" class="input">
                </div>
                <a href="#" name="addToCart5"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src=OO2.jpg alt="" >
                <div class="des">
                <input name = "N6" value="Pin brooch Print" class="input">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <input name = "P6" value="4$" class="input">
                </div>
                <form method="post">
                <a href="#" name="addToCart6"><i class="fal fa-shopping-cart cart"></i></a>
                </form>
            </div>
            <div class="pro">
                <img src=o1.jpg alt="">
                <div class="des">
                 
                <input name = "N7" value="Mug Print" class="input">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <input name = "P7" value="15$" class="input">
                </div>
                <a href="#" name="addToCart7"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src=OO1.jpg alt="">
                <div class="des">
                  
                <input name = "N8" value="Pillow Print" class="input">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <input name = "P8" value="25$" class="input">
                </div>
                <a href="#" name="addToCart8"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
        </div>
        </form>
    </section>
<!--Art Shop Section-->
        
<!--About Me Section-->
<section class="About">
    <div class="title">
        <h1>
            <div class="cardd reveal" id="Aboutme-title">
            <div class="maincontainer">
                <div class="thecard">
                <div class="thefront"><span>A</span></div>
                <div class="theback"><span>A</span></div>
            </div>
        </div>

        <div class="maincontainer">
            <div class="thecard">
            <div class="thefront"><span>B</span></div>
            <div class="theback"><span>B</span></div>
        </div>
    </div>

    <div class="maincontainer">
        <div class="thecard">
        <div class="thefront"><span>O</span></div>
        <div class="theback"><span>O</span></div>
    </div>
</div>
    <div class="maincontainer">
        <div class="thecard">
        <div class="thefront"><span>U</span></div>
        <div class="theback"><span>U</span></div>
    </div>
</div>

<div class="maincontainer">
    <div class="thecard">
    <div class="thefront"><span>T</span></div>
    <div class="theback"><span>T</span></div>
</div>
</div>
<div class="maincontainer">
    <div class="thecard">
    <div class="thefront"><span id="space"></span></div>
    <div class="theback"><span id="space"></span></div>
</div>
</div>
        <div class="maincontainer">
                <div class="thecard">
                <div class="thefront"><span>M</span></div>
                <div class="theback"><span>M</span></div>
            </div>
        </div>
        <div class="maincontainer">
            <div class="thecard">
            <div class="thefront"><span id="M">E</span></div>
            <div class="theback"><span id="M">E</span></div>
        </div>
    </div> 
        </h1>
    </div>
    <div class="main">
    <div class="about-text">
       <h1>Masa Demaide</h1>
       <h5>Artist</h5>
        <p>Masa Demaide, self-taught artist born in Palestine, Nablus on October, 1997. I started my first steps in painting in 2018, learned painting and sketches of attitudes and observations by myself and add my own style on. I am interested in creating a link between our authentic Palestinian heritage and our generation, focusing on the aesthetic of the Palestinian dress and the element of women. I specialized in acrylic and oil colors.
            I try to be an artistic symbol establishing for our stolen culture. And I get inspired from our rich culture and daily life, it make my memory related to my artistic style and ready to create new paintings. I show up the Palestinian woman in her best form, her pain and glory, focusing on the dresses colors which belonging to each city or region in Palestine. My philosophy in art that (Art always takes revenge, I fight evil with beauty). I work as a freelance artist and sell my artworks online. I have participated at many local exhibitions in the West Bank, and I am working on a solo exhibition soon.
            </p>
        <button class="normal">See My work</button>
    </div>
    <img src="./IMG_2175 (1).jpg" alt="Artist Photo">
    </div>
</section>
<!--About Me Section-->

<!--My Work section-->
 <section class="MyWork">
    <div class="title">
        <h1>
            <div class="cardd reveal" id="MyWork-title">
            <div class="maincontainer">
                <div class="thecard">
                <div class="thefront"><span>M</span></div>
                <div class="theback"><span>M</span></div>
            </div>
        </div>

        <div class="maincontainer">
            <div class="thecard">
            <div class="thefront"><span>Y</span></div>
            <div class="theback"><span>Y</span></div>
        </div>
    </div>

    <div class="maincontainer">
        <div class="thecard">
        <div class="thefront"><span id="space"></span></div>
        <div class="theback"><span id="space"></span></div>
    </div>
</div>
<div class="maincontainer">
    <div class="thecard">
    <div class="thefront"><span>W</span></div>
    <div class="theback"><span>W</span></div>
</div>
</div>
        <div class="maincontainer">
                <div class="thecard">
                <div class="thefront"><span>O</span></div>
                <div class="theback"><span>O</span></div>
            </div>
        </div>
        

        <div class="maincontainer">
            <div class="thecard">
            <div class="thefront"><span>R</span></div>
            <div class="theback"><span>R</span></div>
        </div>
    </div>

        <div class="maincontainer">
            <div class="thecard">
            <div class="thefront"><span>K</span></div>
            <div class="theback"><span>K</span></div>
            </div>
        </div>
        </div>
            <br><br><br><br>
        </h1>
    </div>
<div class="pictures">
    <div class="pic1">
        <div class="box_border" >
            <img src="./img/products/40e5768b-8d25-46f2-865b-3c360e4bee6c.jpg">
            <div class="contentt" >
                <p>Text ABout the paint </p>
            </div>
        </div>
    </div>

    <div class="pic2">
        <div class="box_border">
            <img src="./img/products/427dc7c5-9f27-4abc-83dc-30b8252f9ca7.jpg">
            <div class="contentt" >
                <p>Text about the paint</p>
            </div>
        </div>
    </div>    

    <div class="pic3">
        <div class="box_border">
            <img src="./img/products/71ae7829-53bf-4ca5-a481-200a405739ce.jpg">
            <div class="contentt">
                <p>Text about the paint</p>
            </div>
        </div>
    </div>

    <div class="pic4">
        <div class="box_border" id="pic4">
            <img src="./img/products/ccff723b-1556-4d34-a15e-fe71b44ac20e.jpg">
            <div class="contentt">
                <p>Text about the paint</p>
            </div>
        </div>
    </div>
</div>
</section>
<!--My Work section-->

<!--Review Section-->
<section class="reviews" id="reviews">
        <div class="title">
            <h1>
                <div class="cardd reveal" id="Reviews-title">
                <div class="maincontainer">
                    <div class="thecard">
                    <div class="thefront"><span>R</span></div>
                    <div class="theback"><span>R</span></div>
                </div>
            </div>
    
            <div class="maincontainer">
                <div class="thecard">
                <div class="thefront"><span>E</span></div>
                <div class="theback"><span>E</span></div>
            </div>
        </div>
    
        <div class="maincontainer">
            <div class="thecard">
            <div class="thefront"><span>V</span></div>
            <div class="theback"><span>V</span></div>
        </div>
    </div>
    <div class="maincontainer">
        <div class="thecard">
        <div class="thefront"><span>I</span></div>
        <div class="theback"><span>I</span></div>
    </div>
    </div>
            <div class="maincontainer">
                    <div class="thecard">
                    <div class="thefront"><span>E</span></div>
                    <div class="theback"><span>E</span></div>
                </div>
            </div>
            
    
            <div class="maincontainer">
                <div class="thecard">
                <div class="thefront"><span>W</span></div>
                <div class="theback"><span>W</span></div>
            </div>
        </div>
    
            <div class="maincontainer">
                <div class="thecard">
                <div class="thefront"><span>S</span></div>
                <div class="theback"><span>S</span></div>
                </div>
            </div>
            </div>
                <br><br><br><br>
            </h1>
        </div>
        

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                
              <div class="carousel-item">
               
              </div>


              <div class="carousel-item">
                
              </div>


            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>       
    
               
    
                
</section>
 <!--Review Section-->

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
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="/review.js"></script>
    <script src="./HomeVideo.js"></script>
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>