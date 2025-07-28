<?php
$con = mysqli_connect("localhost","sqluser","password","masaartstudio");
$query = 'SELECT article_id,Title,publishdate,article,pic FROM blog';
$result = mysqli_query($con,$query);
while($record = mysqli_fetch_assoc($result))
{
    echo '<img'.$record['pic'].'>';
}

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
                <li><a href="shop.html">ArtShop</a></li>
                <li><a href="./mywork.html">My Works</a></li>
                <li><a class="active" href="blog.html">Art Blog</a></li>
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

    <section id="page-header" class="blog-header">
        <h2 class="blogg-header">Art Blog</h2>
        <p class="blogg-header"><b>You can’t use up creativity. The more the you use, the more you have</b> </p>
    </section>

    <section id="blog">
        <div class="blog-box">
            <div class="blog-img">
                <img src=11.jpg alt="">
            </div>
            <div class="blog-details">
                <h4>Painting colors</h4>
                <p>Painting is color on a flat surface. One of the basic problems in painting is that when you paint an area and then paint another area and then another you get what I tell students is a "checkerboard", a visually uninteresting surface of opaque areas divided off from one another. If you are Mondrian you go with that and make the best of it. Otherwise you devise ways to make the surface live. This is very basic.
 
 Realist pictures have modeling and an illusion of deep space so you have a "box" and you can fill it up with interesting depicted things. When abstract painting came along it lost deep space and had to invent other ways to circumvent the checkerboard problem, such as shallow illusionist space with centering (Cubism), shallow space with holes in it (Pollock), big-area simplicity (Rothko), atomizing the surface (Olitski), staining and pale coloration (Frankenthaler), "boiling" the surface with hyperactive paint strokes (many artists), and on and on. (This is very oversimplified, of course.)
 
 Here i used realist devices structurally and often used simplification but his great skill was to never let an area die. I was exquisitely sensitive to surface, to what the brush was doing, much more than i was to the subject matter, which was there to serve the paint rather than the other way around. Even when i painted large, solid areas they were never quite solid and never went dead and boring, and even when i messed up in part of a painting, and i did, a lot, every inch is alive with my hand and eye. Underpainting is part of this—you can even see it in the reproductions here.</p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>12/12/2022</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src=55.jpg alt="">
            </div>
            <div class="blog-details">
                <h4>Painting using oil colors</h4>
                <p>Sometimes slow progress is the best.  October 12, 2022 | When I paint, it's usually with a great flurry of paint, gestures, and mark-making.  Sometimes it doesn't matter what comes first, so it's okay to give up the acrylic, and then there are other times when you have to slow down... ...and that's not a bad thing.  Oil painting is one such process.  I have to slow down, look more, think more.  This was the case with the last two paintings I started at the same time.  One is still waiting for more judgment.  This one gets to the point I can show.  It may not be fully completed.  Sometimes a little more finesse is needed in the surface of the paint, or a dark streak or line is needed which I'll find out a little later.  I turned it all over......... It can be hung either way, especially since it's square.</p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>13/04</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="55.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>Must-Have Skater Girl Items</h4>
                <p>Kickstarter man braid godard coloring book. Raclette waistcoat selfies yr wolf chartreuse hexagon irony, godard…</p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>12/01</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="55.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>Runway-Inspired Trends</h4>
                <p>Kickstarter man braid godard coloring book. Raclette waistcoat selfies yr wolf chartreuse hexagon irony, godard…</p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>16/01</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="55.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>Drawing..</h4>
                <p>Kickstarter man braid godard coloring book. Raclette waistcoat selfies yr wolf chartreuse hexagon irony, godard…</p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>10/03</h1>
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