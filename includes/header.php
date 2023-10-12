<?php
include('../config.php');
?>

<div class="flex">
  <div class="header-img-flex">
    <a href="../#">
      <!-- <img src="../img/santas gift logo.svg" class="logo" alt="logo Image" />
      <img src="img/santas_gift_logo.svg" alt="Logo"> -->
      <img id="logo" src="img/santas_gift_logo.svg" alt="Logo">
      <script>
        document.addEventListener("DOMContentLoaded", function() {
          var logo = document.getElementById('logo');
          var path = window.location.pathname.split('/');
          var depth = path.length - 1; // Adjust this value based on your directory structure
          var prefix = '';

          for (var i = 0; i < depth; i++) {
            prefix += '../';
          }

          logo.src = prefix + '../img/santas gift logo.svg';
        });
      </script>

    </a>
  </div>
  <div class="menu-toggle-flex">
    <button class="menu-toggle hidden" onclick="toggleMenu()">Menu</button>
  </div>
</div>
<nav>
  <ul class="main-nav hidden">
    <li><a href="<?php echo BASE_URL; ?>../#" onclick="toggleNav('home',event)">HOME</a></li>
    <li><a href="<?php echo BASE_URL; ?>../pages/Christmas.php" onclick="toggleNav('Christmas',event)">CHRISTMAS</a></li>
    <li><a href="<?php echo BASE_URL; ?>../pages/games.php" onclick="toggleNav('games',event)">GAMES</a></li>
    <li><a href="<?php echo BASE_URL; ?>../pages/women-gifts.php" onclick="toggleNav('woman',event)">WOMAN</a></li>
    <li><a href="<?php echo BASE_URL; ?>../pages/man-gifts.php" onclick="toggleNav('man',event)">MAN</a></li>
    <li><a href="<?php echo BASE_URL; ?>../blog/blog.php" onclick="toggleNav('blog',event)">BLOG</a></li>
  </ul>
</nav>

<!-- <ul class="main-nav hidden">
       <li><a href="#" onclick="toggleNav('home',event)">HOME</a></li>
         <li>
       <a href="Christmas.php" onclick="toggleNav('Christmas',event)">CHRISTMAS</a>
         </li>
          <li><a href="games.php" onclick="toggleNav('games',event)">GAMES</a></li>
          <li><a href="../pages/women-gifts.php" onclick="toggleNav('woman',event)">WOMAN</a></li>
        <li><a href="../pages/man-gifts.php" onclick="toggleNav('man',event)">MAN</a></li>
        <li><a href="../blog/blog.php" onclick="toggleNav('blog',event)">BLOG</a></li>
              </ul> -->
<div id="home" class="expanded-nav hidden">
  <img src="<?php echo BASE_URL; ?>/img/home.svg" alt="Site Logo">
  <!-- <img src="../img/home.svg" alt="Home Image" /> -->
  <ul>
    <li class="expand-nav-a"><a href="#">Home Decorating </a></li>
    <li class="expand-nav-a"><a href="#">Home Office</a></li>
    <li class="expand-nav-a"><a href="#">Household Cleaning </a></li>
    <li class="expand-nav-a">
      <a href="#">Kitchen & Entertaining </a>
    </li>
    <li class="expand-nav-a">
      <a href="#">Tools & Home Improvement </a>
    </li>
  </ul>
</div>
<div id="Christmas" class="expanded-nav hidden">
  <img src="<?php echo BASE_URL; ?>/img/home.svg" alt="santa claus img">

  <!-- <img src="../img/christmas-main.svg" alt="santa claus img" /> -->
  <ul>
    <li class="expand-nav-a"><a href="#">Christmas Lights</a></li>
    <li class="expand-nav-a">
      <a href="#">Christmas Inflatables</a>
    </li>
    <li class="expand-nav-a">
      <a href="#">Halloween Decorations</a>
    </li>
    <li class="expand-nav-a"><a href="#">Christmas Wreath</a></li>
  </ul>
  <!-- Add your products links here -->
</div>
<div id="games" class="expanded-nav hidden">
  santa claus img

  <img src="../img/game changer.svg" alt="game changer img" />
  <ul>
    <li class="expand-nav-a"><a href="#">Christmas Lights</a></li>
    <li class="expand-nav-a">
      <a href="#">Christmas Inflatables</a>
    </li>
    <li class="expand-nav-a">
      <a href="#">Halloween Decorations</a>
    </li>
    <li class="expand-nav-a"><a href="#">Christmas Wreath</a></li>
  </ul>
</div>
<div id="man" class="expanded-nav hidden">
  <img src="../img/man-gift.svg" alt="Contact Us Image" />
  <ul>
    <li class="expand-nav-a"><a href="#">PERSONALIZED WALLET</a></li>
    <li class="expand-nav-a">
      <a href="#">ELECTRIC RAZOR</a>
    </li>
    <li class="expand-nav-a">
      <a href="#">SMART WATCHES</a>
    </li>
    <li class="expand-nav-a"><a href="#">DIGITAL WATCHES</a></li>
    <li class="expand-nav-a"><a href="#">RINGS FOR MAN</a></li>
  </ul>
</div>
<div id="woman" class="expanded-nav hidden">
  <img src="../img/women gift.svg" alt="women get gift" />
  <ul>
    <li class="expand-nav-a"><a href="#">digital watches</a></li>
    <li class="expand-nav-a">
      <a href="#">smart watches</a>
    </li>
    <li class="expand-nav-a">
      <a href="#">rings</a>
    </li>
    <li class="expand-nav-a"><a href="#">Bracelets</a></li>
  </ul>
</div>
<div id="blog" class="expanded-nav hidden">
  <img src="../img/blog.svg" alt="About Us Image" />
  <ul>
    <li class="expand-nav-a">
      <a href="#">A Gift for a New Office?</a>
    </li>
    <li class="expand-nav-a">
      <a href="#">gifts ideas for christmas</a>
    </li>
    <li class="expand-nav-a">
      <a href="#">gifts ideas for a birthday</a>
    </li>
    <li class="expand-nav-a"><a href="#">drone as a gift?</a></li>
    <li class="expand-nav-a">
      <a href="#">holiday-gifts-givin</a>
    </li>
    <li class="expand-nav-a">
      <a href="#">why soap basket are a winning gifts?</a>
    </li>
    <li class="expand-nav-a">
      <a href="#">design clock for the wall</a>
    </li>
    <li class="expand-nav-a">
      <a href="#">gadgets for toilet</a>
    </li>
    <li class="expand-nav-a">
      <a href="#">gadgets for computer</a>
    </li>
    <li class="expand-nav-a">
      <a href="#">gadgets for phone</a>
    </li>
  </ul>
</div>