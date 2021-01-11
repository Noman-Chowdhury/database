<!DOCTYPE html>
<html lang="zxx">
<head>
<meta charset="UTF-8">
<meta name="description" content="Ogani Template">
<meta name="keywords" content="Ogani, unica, creative, html">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Ogani | Template</title>

<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&amp;display=swap" rel="stylesheet">

<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
<link rel="stylesheet" href="css/nice-select.css" type="text/css">
<link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
<link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
<link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>

<div id="preloder">
<div class="loader"></div>
</div>

<div class="humberger__menu__overlay"></div>
<div class="humberger__menu__wrapper">
<div class="humberger__menu__logo">
<a href="#"><img src="img/logo.png" alt=""></a>
</div>
<div class="humberger__menu__cart">
<ul>
<li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
<li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
</ul>
<div class="header__cart__price">item: <span>$150.00</span></div>
</div>
<div class="humberger__menu__widget">
<div class="header__top__right__language">
<img src="img/language.png" alt="">
<div>English</div>
<span class="arrow_carrot-down"></span>
<ul>
<li><a href="#">Spanis</a></li>
<li><a href="#">English</a></li>
</ul>
</div>
<div class="header__top__right__auth">
<a href="#"><i class="fa fa-user"></i> Login</a>
</div>
</div>
<nav class="humberger__menu__nav mobile-menu">
<ul>
<li class="active"><a href="index-2.html">Home</a></li>
<li><a href="shop-grid.html">Shop</a></li>
<li><a href="#">Pages</a>
<ul class="header__menu__dropdown">
<li><a href="shop-details.html">Shop Details</a></li>
<li><a href="shoping-cart.html">Shoping Cart</a></li>
<li><a href="checkout.html">Check Out</a></li>
<li><a href="blog-details.html">Blog Details</a></li>
</ul>
</li>
<li><a href="blog.html">Blog</a></li>
<li><a href="contact.html">Contact</a></li>
</ul>
</nav>
<div id="mobile-menu-wrap"></div>
<div class="header__top__right__social">
<a href="#"><i class="fa fa-facebook"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
<a href="#"><i class="fa fa-linkedin"></i></a>
<a href="#"><i class="fa fa-pinterest-p"></i></a>
</div>
<div class="humberger__menu__contact">
<ul>
<li><i class="fa fa-envelope"></i> <a href="https://preview.colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="751d1019191a35161a191a07191c175b161a18">[email&#160;protected]</a></li>
<li>Free Shipping for all Order of $99</li>
</ul>
</div>
</div>


@include('frontend.partials.header')


@include('frontend.partials.sidebar')


{{-- @include('frontend.partials.categories') --}}


@include('frontend.partials.allproducts')


{{-- @include('frontend.partials.banner') --}}


{{-- @include('frontend.partials.rated') --}}


{{-- @include('frontend.partials.blog') --}}


@include('frontend.partials.footer')


<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/ogani/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Jan 2021 06:19:24 GMT -->
</html>
