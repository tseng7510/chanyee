<!doctype html>
<html lang="zh-TW">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/project.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper innerPage">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain projectBox" aria-label="main" itemscope>

      <div class="mainBox">
        <div class="container">
          <div class="pageContent">

            <div class="pageTopBox">
              <div class="pageTitleBox">
                <h1 class="pageTitle wow fadeInUp" data-wow-delay="0s">建案作品</h1>
                <div class="en wow fadeInUp" data-wow-delay="0.2s">PROJECTS</div>
              </div>
            </div>

            <div class="project wow fadeInUp" data-wow-delay="0.4s">

              <div class="listBox">

                  <div class="item">
                    <a href="project_detail.php">
                      <div class="pic"><img src="../images/in/project.jpg" alt=""></div>
                      <div class="title">新榮序（敬請期待）</div>
                    </a>
                  </div>
                    <div class="item">
                    <a href="project_detail_01.php">
                      <div class="pic"><img src="../images/in/project01.jpg" alt=""></div>
                      <div class="title">三院</div>
                    </a>
                  </div>
                    <div class="item">
                    <a href="project_detail_02.php">
                      <div class="pic"><img src="../images/in/project02.jpg" alt=""></div>
                      <div class="title">樹央央</div>
                    </a>
                  </div>

                <div style="display:none">
                <div class="item">
                  <a href="case.php">
                    <div class="pic"><img src="../images/in/project.jpg" alt=""></div>
                    <div class="title">歷年建案</div>
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
</body>

</html>