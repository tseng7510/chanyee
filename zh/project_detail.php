<!doctype html>
<html lang="zh-TW">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/project.css">
</head>

<body class="projectDetail">
  <?php include('include_body_top.php'); ?>
  <div class="wrapper innerPage">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain projectBox" aria-label="main" itemscope>
      <div class="listBox">
        <div class="item">
          <div class="pic"><img src="../images/in/project_00.jpg" alt=""></div>




          <div class="infoBox">
            <div class="content">
              <div class="title">新榮序（敬請期待）</div>


            </div>
          </div>



        </div>
        <div class="item">
          <div class="pic"><img src="../images/in/project_01.jpg" alt=""></div>
        </div>
        <div class="item">
          <div class="pic"><img src="../images/in/project_02.jpg" alt=""></div>
        </div>
      </div>

    </main>

  </div>
  <?php include('include_body_bottom.php'); ?>
  <script type="text/javascript">
    let checkWidth = false;
    let checkScroll = false;
    let p = true;
    let m = true;
    let startY;
    $('.projectBox .listBox .item').eq(0).clone().prependTo('.projectBox .listBox');
    $('.projectBox .listBox .item').eq(0).find('.infoBox').remove();
    $('.projectBox .listBox .item').eq(0).css('display', 'block');
    $('.projectBox .listBox .item').eq(1).addClass('contentBox');

    $('.projectBox .listBox').slick({
      slidesToShow: 1,
      fade: true,
      arrows: false,
      infinite: true,
      speed: 1000,
    });

    $('.projectBox .listBox').on('mousewheel', function(e) {
      if (checkScroll === false) {
        checkScroll = true;
        if (e.deltaY > 0) {
          $('.projectBox .listBox').slick('slickPrev');
          setTimeout(() => {
            checkScroll = false;
          }, 1200)
        } else {
          $('.projectBox .listBox').slick('slickNext');
          setTimeout(() => {
            checkScroll = false;
          }, 1200)
        }
      }
    })

    $(document).on('touchstart', function(e) {
      startY = e.originalEvent.touches[0].clientY;
    });

    $(document).on('touchmove', function(e) {
      var currentY = e.originalEvent.touches[0].clientY;
      var deltaY = currentY - startY;

      if (checkScroll === false) {
        checkScroll = true;
        if (deltaY > 0) {
          $('.projectBox .listBox').slick('slickPrev');
          setTimeout(() => {
            checkScroll = false;
          }, 1200)
        } else if (deltaY < 0) {
          $('.projectBox .listBox').slick('slickNext');
          setTimeout(() => {
            checkScroll = false;
          }, 1200)
        }
      }
    });
  </script>
</body>

</html>