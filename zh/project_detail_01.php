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
          <div class="pic"><img src="../images/in/project_01_00.jpg" alt=""></div>
          <div class="infoBox">
            <div class="content">
              <div class="title">三院</div>
              <div class="slogan">一幢擁有三個院子的家，最理想的院落生活。</div>
              <div class="description">前院尋樂， 中院取靜， 後院求閑， 一宅有三院， 滿足了生活的每個理想。</div>
              <table>
                <tr>
                  <th>基地位置</th>
                  <td>大雅路一段368巷22弄</td>
                </tr>
                <tr>
                  <th>基地面積</th>
                  <td>302坪</td>
                </tr>
                <tr>
                  <th>坪數</th>
                  <td>51-53 地坪</td>
                </tr>
                <tr>
                  <th>規劃</th>
                  <td>四房 電梯院落宅</td>
                </tr>
                <tr>
                  <th>銷售諮詢</th>
                  <td>05-2255222</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="pic"><img src="../images/in/project_01_01.jpg" alt=""></div>
        </div>
        <div class="item">
          <div class="pic"><img src="../images/in/project_01_02.jpg" alt=""></div>
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

    $('.logo img').attr('src', '../images/logo_w.svg');

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

    $('.mobileBtn').on('click', function(e) {
      if ($('body').hasClass('mobileOpen')) {
        setTimeout(() => {
          $('.logo img').attr('src', '../images/logo_w.svg');
        }, 1100)
      } else {
        setTimeout(() => {
          $('.logo img').attr('src', '../images/logo.svg');
        }, 1100)
      }
    })
  </script>
</body>

</html>