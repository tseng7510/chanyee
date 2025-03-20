<!doctype html>
<html lang="zh-TW">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/news.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper innerPage">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain newsListBox" aria-label="main" itemscope>

      <div class="mainBox">
        <div class="container">
          <div class="pageContent">

            <div class="pageTopBox">
              <div class="pageTitleBox">
                <h1 class="pageTitle wow fadeInUp" data-wow-delay="0s">承億工學</h1>
                <div class="en wow fadeInUp" data-wow-delay="0.2s">WHAT’S NEWS</div>
              </div>


              <nav class="pageNav">
                <ul>
                  <li class="wow fadeInUp">
                    <a href="#">新訊</a>
                  </li>
                  <li class="wow fadeInUp">
                    <a href="#">團隊</a>
                  </li>
                  <li class="wow fadeInUp">
                    <a href="#">建材&工法</a>
                  </li>
                </ul>
              </nav>

            </div>

            <div class="newsList">

              <div class="listBox">

                <? for ($i = 0; $i < 1; $i++) { ?>
                  <div class="item wow fadeInUp" data-wow-delay="0.2s">
                    <a href="news_detail.php">
                      <div class="infoBox">
                        <div class="top">
                          <time>2023年09月21日</time>
                          <div class="tag">新訊</div>
                        </div>
                        <div class="info">
                          <div class="title">承億建設購入新榮戲院基地辦展活化 未來將興建住宅大樓</div>
                          <div class="description">承億建設自嘉義起家深耕多年，董事長戴俊郎以精準眼光與經營哲學，一路拓展成「承億集團」，從建設跨足飯店事業，經營有成，不忘建設初心，累積養分後再次重回嘉義市中心...</div>
                        </div>
                        <div class="more">VIEW MORE</div>
                      </div>
                      <div class="pic"><img src="../images/in/news.jpg" alt=""></div>
                    </a>
                  </div>
                <? } ?>

              </div>
            </div>


            <div class="pageBox wow fadeInUp" data-wow-delay="0.2s">
              <ul class="pagination">
                <li class="controls"><a class="prev" href="#" title="Previous">Previous</a></li>
                <li class="active"><a href="#">1</a></li>

                <div style="display:none">
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                </div>

                <li class="controls"><a class="next" href="#" title="Next">Next</a></li>
              </ul>
            </div>

          </div>
        </div>
      </div>

    </main>


    <?php include('include_footer.php'); ?>
  </div>
  <?php include('include_body_bottom.php'); ?>
</body>

</html>