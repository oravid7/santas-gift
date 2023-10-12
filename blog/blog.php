<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" crossorigin="anonymous">


  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="../css/reusable.css" />
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/queries.css" />
  <link rel="stylesheet" href="../css/stylespage.css" />
  <meta name="yandex-verification" content="539c2cddbed37e13" />
  <meta name="description" content="Dive into the world of tech with our gadget blog. From reviews on the latest gadgets to tech gift ideas for gadget lovers, stay updated with all things tech. Read now!">
  <title>Santas gifts blog</title>
</head>

<body>
  <header>
    <!-- <div class="flex">
      <div class="header-img-flex">
        <img src="../img/santas gift logo.svg" class="logo" alt="logo Image" />
      </div>
      <div class="menu-toggle-flex">
        <button class="menu-toggle hidden" onclick="toggleMenu()">Menu</button>
      </div>
    </div> -->

    <? include('../config.php '); ?>
    <? include(ROOT_PATH . '../includes/header.php'); ?>
    <!--     
    <nav>
      <ul class="main-nav hidden">
        <li><a href="#" onclick="toggleNav('home',event)">HOME</a></li>
        <li>
          <a href="#" onclick="toggleNav('Christmas',event)">CHRISTMAS</a>
        </li>
        <li><a href="#" onclick="toggleNav('games',event)">GAMES</a></li>
        <li><a href="../pages/women-gifts.php" onclick="toggleNav('woman',event)">WOMAN</a></li>
        <li><a href="../pages/man-gifts.php" onclick="toggleNav('man',event)">MAN</a></li>
        <li><a href="../blog/blog.php" onclick="toggleNav('blog',event)">BLOG</a></li>
      </ul>
    </nav>
    <div id="home" class="expanded-nav hidden">
      <img src="../img/home.svg" alt="Home Image" />
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
      <img src="css/" alt="santa claus img" />
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
    <div id="games" class="expanded-nav hidden">
      <img src="css/img/game changer.svg" alt="game changer img" />
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
      <img src="css/img/man-gift.svg" alt="Contact Us Image" />
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
      <img src="css/img/women gift.svg" alt="women get gift" />
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
      <img src="css/img/blog.svg" alt="About Us Image" />
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
    </div>-->
  </header>
  <section class="hero-section">
    <div class="img-hero">
      <img id="heroImage" src="../img/sante.svg" alt="Hero Image">
      <script>
        window.addEventListener('resize', function() {
          var width = window.innerWidth;
          var heroImage = document.getElementById('heroImage');

          if (width <= 664) {
            heroImage.src = '../img/_down santa claus.jpg ';
          } else {
            heroImage.src = '../img/sante.svg ';
          }
        });
      </script>
    </div>
    <div class="intro-section">
      <h1><strong>Welcome to Santa's Gifts blog 🎅</strong></h1>
    </div>

  </section>
  <!-- <script defer src="../js/main.js"></script> -->
  <script defer src="../js/script.js"></script>
  <div class="blog-post grid-container  ">
    <div class=el--1>
      <a href="blog-post/a-new-office-gifts.php">
        <img class="cover-image" src="blog-img/a new office gifts1.jpg" alt="Image description for a new office gift">
        <div class=grid-headline>
          <h2>A Gift for a New Office?</h2>
        </div>
      </a>
    </div>
    <div class=el--2>
      <a href="blog-post/gifts-ideas-for-christmas.php">
        <img class="cover-image" src="blog-img/gifts ideas for christmas1.jpg " alt="gifts ideas for christmas">
        <div class=grid-headline>
          <h2>gifts ideas for christmas</h2>
        </div>
      </a>
    </div>
    <div class=el--3>
      <a href="blog-post/gifts-ideas-for-a-birthday.php">
        <img class="cover-image" src="blog-img/gifts ideas for a birthday.jpg" alt="gifts ideas for a birthday">
        <div class=grid-headline>
          <h2>gifts ideas for a birthday</h2>
        </div>
      </a>
    </div>
    <div class=el--4>
      <a href="blog-post/drone-as-a-gift.php">
        <img class="cover-image" src="blog-img/_drone.jpg" alt="drone img">
        <div class=grid-headline>
          <h2>drone as a gift?</h2>
        </div>
      </a>
    </div>
    <div class=el--5>
      <a href="blog-post/a-new-office-gifts.php">
        <img class="cover-image" src="blog-img/NEW OFFICE GIFTS.jpg" alt="NEW OFFICE GIFTS">
        <div class=grid-headline>
          <h2>new office gifts</h2>
        </div>
      </a>
    </div>
    <div class=el--6>
      <a href="blog-post/holiday-gifts-givin.php">
        <img class="cover-image" src="blog-img/holiday-gifts-givin.jpg" alt="holiday-gifts-givin">
        <div class=grid-headline>
          <h2>holiday-gifts-givin</h2>
        </div>
      </a>
    </div>
    <div class=el--7>
      <a href="blog-post/why-soap-are-a-winning-gifts.php">
        <img class="cover-image" src="blog-img/why-soap-are-a-winning-gifts.jpg" alt="why soap are a winning gifts">
        <div class=grid-headline>
          <h2>why soap basket are a winning gifts?</h2>
        </div>
      </a>
    </div>
    <div class=el--8>
      <a href="blog-post/gadgets-for-kitchen.php">
        <img class="cover-image" src="blog-img/gadgets for kitchen must have.jpg" alt="gadgets for kitchen must have">
        <div class=grid-headline>
          <h2>gadgets for kitchen </h2>
        </div>
      </a>
    </div>
    <div class=el--9>
      <a href="blog-post/design-clock.php">
        <img class="cover-image" src="blog-img/design clock for the wall.jpg " class="expand-nav-a">

        <div class=grid-headline>
          <h2>design clock for the wall</h2>
        </div>
      </a>
    </div>
    <div class=el--10>
      <a href="blog-post/gadgets-for-toilet.php">
        <img class="cover-image" src="blog-img/gadgets for toilet.jpg" alt="gadgets for toilet">
        <div class=grid-headline>
          <h2>gadgets for toilet</h2>
        </div>
      </a>
    </div>
    <div class=el--11>
      <a href="blog-post/gadgets-for-computer.php">
        <img class="cover-image" src="blog-img/gadgets for computer.jpg" alt="gadgets for computer">
        <div class=grid-headline>
          <h2>gadgets for computer</h2>
        </div>
      </a>
    </div>
    <div class=el--12>
      <a href="blog-post/gadgets-for-phone.php">
        <img class="cover-image" src="blog-img/gadgets for phone.jpg" alt="gadgets for phone">
        <div class=grid-headline>
          <h2>gadgets for phone</h2>
        </div>
      </a>
    </div>
  </div>
  <footer class="site-footer">
    <?php include('../includes/footer.php'); ?>
  </footer>
</body>

</html>