<!doctype html>
<html lang="zh-TW">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/case.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper innerPage">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain caseBox" aria-label="main" itemscope>

      <div class="mainBox">
        <div class="container">
          <div class="pageContent">

            <div class="pageTopBox">
              <div class="pageTitleBox">
                <h1 class="pageTitle wow fadeInUp" data-wow-delay="0s">歷年建案</h1>
                <div class="en wow fadeInUp" data-wow-delay="0.2s">YEARS OF PROJECTS</div>
              </div>
            </div>

            <div class="case">

              <div class="listBox">

                <div class="item">
                  <div class="originBox">
                    <div class="info">
                      <time>2006</time>
                      <div class="title">雲那裡</div>
                    </div>
                  </div>
                  <div class="infoBox">
                    <a href="project_detail.php">
                      <div class="info">
                        <time>2006</time>
                        <div class="title">雲那裡</div>
                        <div class="description">坐看雲起時，更是悠閒恬靜</div>
                      </div>
                      <div class="pic"><img src="../images/in/case.jpg" alt="">
                      </div>
                    </a>
                  </div>
                </div>
                <div class="item">
                  <div class="originBox">
                    <div class="info">
                      <time>2006</time>
                      <div class="title">雲那裡</div>
                    </div>
                  </div>
                  <div class="infoBox">
                    <a href="project_detail.php">
                      <div class="info">
                        <time>2006</time>
                        <div class="title">雲那裡</div>
                        <div class="description">坐看雲起時，更是悠閒恬靜</div>
                      </div>
                      <div class="pic"><img src="../images/in/case.jpg" alt="">
                      </div>
                    </a>
                  </div>
                </div>
                <div class="item">
                  <div class="originBox">
                    <div class="info">
                      <time>2006</time>
                      <div class="title">雲那裡</div>
                    </div>
                  </div>
                  <div class="infoBox">
                    <a href="project_detail.php">
                      <div class="info">
                        <time>2006</time>
                        <div class="title">雲那裡</div>
                        <div class="description">坐看雲起時，更是悠閒恬靜</div>
                      </div>
                      <div class="pic"><img src="../images/in/case.jpg" alt="">
                      </div>
                    </a>
                  </div>
                </div>

              </div>
            </div>

          </div>
        </div>
      </div>

    </main>




    <?php include('include_footer.php'); ?>
  </div>
  <?php include('include_body_bottom.php'); ?>
  <script type="text/javascript">
    if ($('.case .listBox .item').length < 4) {
      $('.case .listBox .item').each(function(index) {
        $(this).clone().appendTo('.case .listBox');
      })
    };
    $('.case .listBox').slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      arrows: true,
      centerMode: true,
      cssEase: 'ease-in-out',
      focusOnSelect: true,
      responsive: [{
        breakpoint: 1000,
        settings: {
          slidesToShow: 1,
        }
      }]
    });
    let initItem = $('.case .listBox .slick-slide[data-slick-index="0"]');
    initItem.next().addClass('marginRight');
    initItem.prev().addClass('marginLeft');

    $('.case .listBox').on('beforeChange',
      function(event, slick, currentSlide, nextSlide) {
        let centerItem = $('.case .listBox .slick-slide[data-slick-index="' + nextSlide + '"]');
        $('.marginRight').removeClass('marginRight');
        $('.marginLeft').removeClass('marginLeft');
      })

    $('.case .listBox').on('afterChange',
      function(event, slick, currentSlide) {
        let centerItem = $('.case .listBox .slick-slide[data-slick-index="' + currentSlide + '"]');
        centerItem.next().addClass('marginRight');
        centerItem.prev().addClass('marginLeft');
      })
  </script>
</body>

</html>