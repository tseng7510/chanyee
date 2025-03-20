<!doctype html>
<html lang="zh-TW">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/index.css" async>
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain" aria-label="main" itemscope>

      <div class="mainBox">

        <div class="banner wow fadeIn" data-wow-delay="0s">
          <div class="listBox">
            <div class="item">
              <a href="project.php">
                <div class="title"></div>
                <div class="pic"><img src="../images/index/banner00.jpg" alt=""></div>
                <div class="link"></div>
              </a>
            </div>
            <div class="item">
              <a href="project.php">
                <div class="title">造風</div>
                <div class="pic"><img src="../images/index/banner01.jpg" alt=""></div>
                <div class="link"></div>
              </a>
            </div>
            <div class="item">
              <a href="project.php">
                <div class="title">蘊光</div>
                <div class="pic"><img src="../images/index/banner02.jpg" alt=""></div>
                <div class="link"></div>
              </a>
            </div>
            <div class="item">
              <a href="project.php">
                <div class="title">導雨</div>
                <div class="pic"><img src="../images/index/banner03.jpg" alt=""></div>
                <div class="link"></div>
              </a>
            </div>
            <div class="item">
              <a href="project.php">
                <div class="title">綠建築</div>
                <div class="pic"><img src="../images/index/banner04.jpg" alt=""></div>
                <div class="link"></div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </main>

  </div>
  <?php include('include_body_bottom.php'); ?>
  <script type="text/javascript">
    $(window).on('load', function() {
      $('.logo img').attr('src', '../images/logo_i.svg');
    });
    $(function() {
      $('.banner .listBox').slick({
        draggable: true,
        arrows: false,
        dots: true,
        fade: true,
        speed: 900,
        infinite: true,
        autoplay: true,
        loop: true,
        autoplaySpeed: 5000,
        cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
        touchThreshold: 100
      })
    })
  </script>

</body>

</html>