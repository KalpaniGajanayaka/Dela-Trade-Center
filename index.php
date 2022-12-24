<?php
    include 'components/connect.php';
    session_start();
    if(isset($_SESSION['user_id'])){
        $user_id = $_SESSION['user_id'];
    }else{
        $user_id = '';
    };
include 'components/wishlist_cart.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dela Trade Center</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body>
    <?php include 'components/user_header.php'; ?>

    <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images/IMG001.jpg" width="800" height="400">
  <div class="text">Get Dankotuwa porcelain from us Very easily.</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images/IMG_003.jpg" width="800" height="400">
  <div class="text">You are invited to join us to get the new experience of shopping in a new face.</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images/IMG002.jpg" width="800" height="400">
  <div class="text">We guarantee that we are the only and best place in Kalawana to get anything you want,<br> in any color, any size, any brand..</div>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

    <!-- banner section starts  -->
    <section class="banner-container">
        <div class="banner">
            <img src="images/trade1 (3).jpg"  width="250" height="250">
            <div class="content">
                <span>Get an offer</span>
                <h3>2% Discount!!</h3>
                <a href="shop.php" class="btn">shop now</a>
            </div>
        </div>
        <div class="banner">
            <img src="images/trade4.png"  width="250" height="250">
            <div class="content">
                <span>Get an offer</span>
                <h3>50% Discount!!</h3>
                <a href="shop.php" class="btn">shop now</a>
            </div>
        </div>
        <div class="banner">
            <img src="images/trade5.jpg"  width="250" height="250">
            <div class="content">
                <span>Get an offer</span>
                <h3> 5% Discount!!!</h3>
                <a href="shop.php" class="btn">shop now</a>
            </div>
        </div>
        <div class="banner">
            <img src="images/WhatsApp Image2.jpeg"  width="250" height="250">
            <div class="content">
                <span>Get an offer</span>
                <h3>5% Discount!!</h3>
                <a href="shop.php" class="btn">shop now</a>
            </div>
        </div>
        </div>
        <div class="banner">
            <img src="images/Baby Items.png"  width="250" height="250">
            <div class="content">
                <span>Get an offer</span>
                <h3>5% Discount!!</h3>
                <a href="shop.php" class="btn">shop now</a>
            </div>
        </div>
        <div class="banner">
            <img src="images/Four-wheel-drive-kids-electric-cars-children-electric-car-ride-on-1-5-years-riding-toy.jpg_640x640.jpg"  width="250" height="250">
            <div class="content">
                <span>Get an offer</span>
                <h3>10% Discount!!</h3>
                <a href="shop.php" class="btn">shop now</a>
            </div>
        </div>

    </section>
    <!-- banner section ends -->
    <section class="category">
        <h1 class="heading">shop by category</h1>
        <div class="swiper category-slider">
            <div class="swiper-wrapper">
            <a href="category.php?category=cosmetic" class="swiper-slide slide">
                    <img src="images/cosmetics.jpg" alt="">
                    <h3>cosmetic</h3>
             <a href="category.php?category=Toys" class="swiper-slide slide">
                    <img src="images/girl.jpg" alt="">
                    <h3>Toys</h3>
            <a href="category.php?category=Gifts" class="swiper-slide slide">
                    <img src="images/Cooking+Gifts.jpg" alt="">
                    <h3>Gifts</h3>
            <a href="category.php?category=Kitchen Items" class="swiper-slide slide">
                    <img src="images/trade3.jpg" alt="">
                    <h3>Kitchen Items</h3>
            <a href="category.php?category=Ceramic" class="swiper-slide slide">
                    <img src="images/trade2.jpg" alt="">
                    <h3>Ceramic </h3>
            <a href="category.php?category=Ceramic" class="swiper-slide slide">
                    <img src="images/ngc.jpg" alt="">
                    <h3>NGC toy vehicles  </h3>
            <a href="category.php?category=Ceramic" class="swiper-slide slide">
                    <img src="images/GettyImages-999271266-e1565731893458.jpg" alt="">
                    <h3> School equipments </h3>
            <a href="category.php?category=Ceramic" class="swiper-slide slide">
                    <img src="images/birthday.jpg" alt="">
                    <h3> Birthday Items </h3>
            
            </a>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!--lates-->
    <section class="home-products">
        <h1 class="heading">latest <span>products</span></h1>
        <div class="swiper products-slider">
            <div class="swiper-wrapper">
                <?php
                    $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6"); 
                    $select_products->execute();
                    if($select_products->rowCount() > 0){
                    while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
                ?>
                <form action="" method="post" class="swiper-slide slide">
                    <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
                    <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
                    <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
                    <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
                    <button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
                    <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
                    <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="">
                    <div class="name"><?= $fetch_product['name']; ?></div>
                    <div class="flex">
                        <div class="price"><span>Rs.</span><?= $fetch_product['price']; ?><span>/-</span></div>
                        <input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
                    </div>
                    <input type="submit" value="add to cart" class="btn" name="add_to_cart">
                </form>
                <?php
                    }
                    }else{
                        echo '<p class="empty">no products added yet!</p>';
                    }
                ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- deal section starts  -->
    <section class="deal">
        <div class="image">
            <img src="images/WhatsApp Image 2022-12-14 at 14.22.58.jpeg" alt="">
        </div>
        <div class="content">
            <span>new season trending!</span>
            <h3>best New Year collection</h3>
            <p>Get up to 5% off</p>
            <a href="shop.php" class="btn">shop now</a>
        </div>
    </section>

<!-- deal section ends -->

    <?php include 'components/footer.php'; ?>

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
    <script>
        var swiper = new Swiper(".home-slider", {
            loop:true,
            spaceBetween: 20,
            pagination: {
                el: ".swiper-pagination",
                clickable:true,
            },
        });
        var swiper = new Swiper(".category-slider", {
        spaceBetween: 20,
        pagination: {
            el: ".swiper-pagination",
            clickable:true,
        },
        breakpoints: {
            0: {
                slidesPerView: 2,
            },
            650: {
                slidesPerView: 3,
            },
            768: {
                slidesPerView: 4,
            },
            1024: {
                slidesPerView: 5,
            },
        },
        });
        var swiper = new Swiper(".products-slider", {
        loop:true,
        spaceBetween: 20,
        pagination: {
            el: ".swiper-pagination",
            clickable:true,
        },
        breakpoints: {
            550: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        },
        });
    </script>
</body>
</html>