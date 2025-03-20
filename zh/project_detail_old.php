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
        <section class="page">
          <div class="pic"><img src="../images/in/project_00.jpg" alt=""></div>
          <div class="container"></div>
        </section>
        <section class="page type2">
          <div class="pic"><img src="../images/in/project_01.jpg" alt=""></div>
          <div class="container">
            <div style="display:none">
              <div class="title wow fadeInUp" data-wow-delay="0.4s">人生起點</div>
            </div>
          </div>
        </section>
        <section class="page type3">
          <div class="pic"><img src="../images/in/project_02.jpg" alt=""></div>
          <div class="container">
            <div style="display:none">
              <div class="info wow fadeInUp" data-wow-delay="0.4s">
                <div class="address">嘉義市東區大雅路一段368巷22弄<br />
                  近文雅國小、大雅商圈。</div>
              </div>
            </div>
          </div>
        </section>
        <!-- <section class="page type4">
          <div class="pic"><img src="../images/index/banner.jpg" alt=""></div>
          <div class="container">
            <div class="info wow fadeInUp" data-wow-delay="0.4s">
              <div class="description">
                一間房子，一個客餐廳，一座衛浴，一張床；<br />
                簡單一點，舒服一些，我只是用心做自己最喜歡的樣子</div>
            </div>
          </div>
        </section> -->
      </div>

    </main>

  </div>
  <script type="text/javascript" src="../plugins/jquery.js"></script>
  <script type="text/javascript" src="../plugins/js.cookie.min.js"></script>
  <script type="text/javascript" src="../plugins/WOW-master/dist/wow.min.js"></script>
  <script type="text/javascript" src="../plugins/gsap.min.js"></script>
  <script type="text/javascript" src="../plugins/ScrollTrigger.min.js"></script>
  <script type="text/javascript" src="../plugins/ScrollToPlugin.min.js"></script>
  <script type="text/javascript" src="../plugins/_base.js"></script>
  <script type="text/javascript" src="../plugins/_customize.js"></script>
  <script type="text/javascript">
    (function() {
      let windowWidth = $(window).width();
      $(window).on('load resize scroll', function() {
        windowWidth = $(window).width();
        if (windowWidth < 1000) {
          $('.logo img').attr('src', '../images/logo.svg');
        } else {
          $('.logo img').attr('src', '../images/logo_w.svg');
        }
      });

      const page = document.querySelectorAll('.page')
      const nav = document.createElement('nav');
      nav.className = 'sideNav';
      page.forEach((v, i) => {
        const button = document.createElement('button');
        nav.append(button)
        v.dataset.index = i
      })
      document.body.append(nav)


      const navButton = document.querySelectorAll('.sideNav button')
      const callback = (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            navButton[entry.target.parentElement.dataset.index].parentElement.querySelector('.active')?.classList.remove('active')
            navButton[entry.target.parentElement.dataset.index].classList.add('active')
          }
        })
      }
      const observer = new IntersectionObserver(callback);
      page.forEach((v) => observer.observe(v.querySelector('.container')));


      const checkPosition = () => {
        navButton.forEach((v) => {
          v.addEventListener('click', (e) => {
            v.parentElement.querySelector('.active').classList.remove('active')
            v.classList.toggle('active')
          })
        })
      }

      window.scrollTo({
        top: 0,
        behavior: 'smooth',
      });

      let checkScroll = false;

      window.addEventListener('wheel', (e) => {
        if (checkScroll === false && windowWidth > 1000) {
          checkScroll = true;
          const windowHeight = window.innerHeight;
          const scrollY = window.scrollY;

          if (scrollY < windowHeight) {
            navButton.forEach((v) => v.classList.remove('active'));
            navButton[0].classList.add('active');
          }

          if (e.deltaY > 0) {
            window.scrollTo({
              top: scrollY + windowHeight,
              behavior: 'smooth',
            });
            setTimeout(() => {
              checkScroll = false;
            }, 800)
          } else {
            window.scrollTo({
              top: scrollY - windowHeight,
              behavior: 'smooth',
            });
            setTimeout(() => {
              checkScroll = false;
            }, 800)
          }
        }
      })
    })()
  </script>
</body>

</html>