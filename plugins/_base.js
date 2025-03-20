$(function () {
  getCookieByName('privacy');
  mobileMenu(1000);
  sliderMenu('.language');
  sliderMenu('.menuMember');
});

// table過長時增加卷軸
// $('table').wrap('<div class="tableBox"></div>');
$('body').append('<div class="mobileBtn"></div>');

// 單層選單功能
function sliderMenu(elm) {
  $(elm)
    .children('.btn')
    .off()
    .on('click', function () {
      $(this).parent().toggleClass('active');
      $(this).siblings('ul').slideToggle('fast');
      $(elm).siblings('.active').find('ul').slideToggle('fast');
      $(elm).siblings('.active').removeClass('active');
      $('body').removeClass('mobileOpen');
    });
  $(window).on('load resize', function () {
    $(elm).find('ul').removeAttr('style');
    $(elm).removeClass('active');
  });
}

// 電腦版主選單搜尋功能
(function () {
  // 搜尋功能
  $('.menuSearch .btn').on('click', function () {
    $('.menuSearch').siblings('.active').find('ul').slideUp('fast');
    $('.menuSearch').siblings('.active').removeClass('active');
    $('.menuSearch').addClass('active');
    $('body').removeClass('mobileOpen');
    $(this).parent().parent().siblings('.active').find('ul').slideToggle('fast');
    $(this).parent().parent().siblings('.active').removeClass('active');
  });
  $('.menuSearch .searchClose').on('click', function () {
    $('.menuSearch').removeClass('active');
  });
  $(window).on('load resize', function () {
    $('.menuSearch').removeClass('active');
  });
})();

// 滾動畫面時
$(window).on('load scroll', function () {
  // let headHeigh = $('.headerBox').outerHeight();
  if ($(window).scrollTop() > 20) {
    $('body').addClass('headFix');
    // $('.mainMenu .toggleBtn').siblings('ul').css('top', headHeigh);
  } else {
    $('body').removeClass('headFix');
    // headHeigh = $('.headerBox').outerHeight();
    // $('.mainMenu .toggleBtn').siblings('ul').css('top', headHeigh);
  }
});

// QA風琴功能
function qa(q, a) {
  $(q).on('click', function () {
    var thisQ = $(this);
    var thisP = thisQ.parent();
    if (thisP.is('.active') == true) {
      thisP.toggleClass('active').find(a).slideToggle('fast');
    } else {
      thisP.siblings('.active').removeClass('active').find(a).slideToggle('fast');
      thisP.toggleClass('active').find(a).slideToggle('fast');
    }
  });
}

// 主選單
// (function menuFn() {
//   let menuFirst = document.querySelectorAll('.mainMenu > ul > li');
//   let body = document.querySelector('body');
//   let bodyWidth = body.clientWidth;

//   menuFirst.forEach((item) => {
//     item.querySelector('.nextMenuBox')?.removeAttribute('style');
//     item.querySelector('.nextMenuBox') ? item.classList.add('nextLv') : '';
//     item.querySelector('.nextMenuBox') && !item.querySelector('.nextMenuBox .class') ? item.classList.add('small') : '';
//   });

//   let checkWidth = () => {
//     menuFirst.forEach((item) => {
//       if (bodyWidth > 1000) {
//         item.querySelectorAll('.nextMenuBox .listBox .list')[0]?.classList.add('active');
//         item.querySelectorAll('.nextMenuBox .class li')[0]?.classList.add('active');
//       } else {
//         item.querySelectorAll('.nextMenuBox .listBox .list')[0]?.classList.remove('active');
//         item.classList.remove('active');
//       }
//     });
//   };

//   let resizeFn = () => {
//     bodyWidth = body.clientWidth;
//     checkWidth();
//   };

//   let sliderFn = (target) => {
//     let nowStyle = window.getComputedStyle(target)?.display;
//     if (nowStyle === 'none') {
//       target.classList.add('active');
//       let targetHeight = target.offsetHeight;
//       target.style.height = 0;
//       target.offsetHeight;
//       target.style.transitionProperty = 'height';
//       target.style.transitionDuration = `300ms`;
//       target.style.height = `${targetHeight}px`;

//       setTimeout(() => {
//         target.style.removeProperty('height');
//         target.style.removeProperty('transition-duration');
//         target.style.removeProperty('transition-property');
//       }, 300);
//     } else {
//       let targetHeight = target.offsetHeight;
//       target.style.height = `${targetHeight}px`;
//       target.style.transitionProperty = 'height';
//       target.style.transitionDuration = `300ms`;
//       target.offsetHeight;
//       target.style.height = 0;
//       setTimeout(() => {
//         target.classList.remove('active');
//         target.style.removeProperty('height');
//         target.style.removeProperty('transition-duration');
//         target.style.removeProperty('transition-property');
//       }, 300);
//     }
//   };

//   let firstNextLv = document.querySelectorAll('.mainMenu .nextLv') || null;

//   firstNextLv.forEach((item) => {
//     let mouse = (e) => {
//       if (bodyWidth > 1000) {
//         e.target.classList.toggle('active');
//       }
//     };

//     let click = (e) => {
//       if (bodyWidth <= 1000) {
//         let siblings = [...e.target.parentNode.children].find((child) => child !== e.target);
//         sliderFn(siblings);
//         e.target.parentElement.classList.toggle('active');
//       }
//     };

//     item.addEventListener('mouseenter', mouse);
//     item.addEventListener('mouseleave', mouse);
//     item.addEventListener('click', click);
//   });

//   let nextMenuIn = document.querySelectorAll('.nextMenuBox');
//   nextMenuIn.forEach((item) => {
//     let tab = item.querySelectorAll('.class button');
//     let tabContent = item.querySelectorAll('.listBox .list');

//     tab.forEach((list, index) => {
//       list.addEventListener('click', function () {
//         tab.forEach((other) => {
//           console.log(other.parentElement);
//           other.parentElement.classList.remove('active');
//         });
//         list.parentElement.classList.add('active');

//         tabContent.forEach((other) => {
//           other.classList.remove('active');
//         });
//         tabContent[index]?.classList.add('active');
//       });
//     });

//     tabContent.forEach((content, index) => {
//       const button = document.createElement('button');
//       button.className = 'contentBtn';
//       button.innerHTML = `${tab[index]?.textContent}`;
//       content.prepend(button);
//     });
//   });

//   nextMenuIn.forEach((item) => {
//     let mobileContent = item.querySelectorAll('.class li');
//     let siblings = item.querySelectorAll('.listBox .list ul');
//     mobileContent.forEach((v, i) => {
//       let cloneElem = siblings[i]?.cloneNode(true);
//       cloneElem !== undefined ? v.append(cloneElem) : '';
//     });
//   });

//   window.addEventListener('load', checkWidth);
//   window.addEventListener('resize', resizeFn);
// })();

(function menuFn() {
  let nextMenuIn = document.querySelectorAll('.nextMenuBox');
  nextMenuIn.forEach((item) => {
    let tab = item.querySelectorAll('.class button');
    let tabContent = item.querySelectorAll('.listBox .list');
    tabContent[0]?.classList.add('active');
    tab[0]?.parentElement.classList.add('active');

    tab.forEach((list, index) => {
      list.addEventListener('click', function () {
        tab.forEach((other) => {
          other.parentElement.classList.remove('active');
        });
        list.parentElement.classList.add('active');

        tabContent.forEach((other) => {
          other.classList.remove('active');
        });
        tabContent[index]?.classList.add('active');
      });
    });
  });

  nextMenuIn.forEach((item) => {
    let mobileContent = item.querySelectorAll('.class li');
    let siblings = item.querySelectorAll('.listBox .list ul');
    mobileContent.forEach((v, i) => {
      let cloneElem = siblings[i]?.cloneNode(true);
      cloneElem !== undefined ? v.append(cloneElem) : '';
    });
  });

  let resizeFn = () => {
    let nextMenuIn = document.querySelectorAll('.mainMenu .nextMenuBox');
    let tabContent = document.querySelectorAll('.mainMenu .tabContent');
    let menuUl = document.querySelectorAll('.mainMenu ul');
    let menuLl = document.querySelectorAll('.mainMenu li');
    let cleanFn = (item) => {
      item.classList.remove('active');
      item.removeAttribute('style');
    };
    nextMenuIn?.forEach((item) => cleanFn(item));
    tabContent?.forEach((item) => cleanFn(item));
    menuUl?.forEach((item) => cleanFn(item));
    menuLl?.forEach((item) => cleanFn(item));
  };
  window.addEventListener('load', resizeFn);
  window.addEventListener('resize', resizeFn);

  $('.mainMenu li').has('ul').addClass('nextLv');

  $(window).on('load resize', function () {
    let bodyWidth = $('body').outerWidth();
    if (bodyWidth > 1000) {
      $('.mainMenu .nextLv')
        .off()
        .mouseenter(function () {
          $(this).addClass('active');
        })
        .mouseleave(function () {
          $(this).removeClass('active');
        });
    } else {
      $('.mainMenu .nextLv').off('mouseenter');
      $('.mainMenu .nextLv').off('mouseleave');
    }

    $('.mainMenu .nextLv > button,.mainMenu .nextLv > a')
      .off()
      .on('click', function (e) {
        e.preventDefault();
        if (bodyWidth <= 1000) {
          $(this).parent('li').toggleClass('active');
          $(this).siblings('.nextMenuBox').slideToggle('fast');

          $(this).parent('li').siblings('li').removeClass('active');
          $(this).parent('li').siblings('li').find('.nextMenuBox').slideUp('fast');
        }
      });

    $('.mainMenu .class > li > button')
      .off()
      .on('click', function () {
        $(this).parent('li').toggleClass('active');
        $(this).siblings('ul').slideToggle('fast');
        $(this).parent('li').siblings('li').removeClass('active');
        $(this).parent('li').siblings('li').find('ul').slideUp('fast');
      });
  });
  let checkMobile = () => {
    windowWidth = window.outerWidth;
    webSearch.removeAttribute('style');
    const observer = new ResizeObserver(function (entries) {
      console.log(entries[0].contentRect.width);
      if (entries[0].contentRect.width <= 767) {
        !webSearchBtn.classList.contains('active') && webSearchBtn.classList.add('active');
        !webSearch.classList.contains('mobile') && webSearch.classList.add('mobile');
        let webSearchTop = document.querySelector('header').offsetHeight;
        webSearch.style.top = `${webSearchTop}px`;
      } else {
        webSearchBtn.classList.contains('active') && webSearchBtn.classList.remove('active');
        webSearch.classList.contains('mobile') && webSearch.classList.remove('mobile');
        let webSearchTop = searchBtnOut?.parentElement.offsetHeight;
        webSearch.style.top = `${webSearchTop}px`;
      }
    });
    observer.observe(siteHeader);
  };
})();

// lazyload
(function () {
  const placeholderSrc = (w, h) => `data:image/svg+xml,%3Csvg xmlns="http:// www.w3.org/2000/svg" viewBox="0 0 ${w} ${h}"%3E%3C/svg%3E`;
  const options = {
    root: null,
    rootMargin: '0px',
    thresholds: 1,
  };

  let observer = new IntersectionObserver((entries) => {
    entries.forEach((img) => {
      if (img.isIntersecting) {
        img.target.src = img.target.dataset.src;
        img.target.classList.add('picAnimated');
        observer.unobserve(img.target);
      }
    });
  }, options);

  document.querySelectorAll('.lazyLoad').forEach((img) => {
    img.src = placeholderSrc(img.dataset.width, img.dataset.height);
    observer.observe(img);
  });
})();

// 偵測物件距離顯示畫面，需要偵測的物件增加.isAnimate
(function () {
  let options = {
    root: null,
    rootMargin: '0px',
    thresholds: 0.5,
  };
  let observer = new IntersectionObserver((entries) => {
    entries.forEach((elm) => {
      if (elm.isIntersecting) {
        elm.target.classList.add('isAnimated');
      } else {
        elm.target.classList.remove('isAnimated');
      }
    });
  }, options);

  document.querySelectorAll('.isAnimate').forEach((elm) => {
    observer.observe(elm);
  });
})();

//  GOTOP
// (function () {
//   let goTopBtn = document.querySelector('.goTop');

//   window.addEventListener('scroll', function () {
//     let windowScrollTop = document.documentElement.scrollTop;
//     if (windowScrollTop >= 200) {
//       goTopBtn.style.cssText = 'opacity:1';
//     } else {
//       goTopBtn.style.cssText = 'opacity:0';
//     }
//   });
//   goTopBtn.addEventListener('click', function () {
//     window.scrollTo({
//       top: 0,
//       behavior: 'smooth',
//     });
//   });
// })();

// cookie
function getCookieByName(name) {
  var value = Cookies.get(name);
  if (value !== 'true') {
    $('.closePrivacy').on('click', function () {
      Cookies.set(name, 'true');
      $('.privacyBox').slideUp(400, function () {
        $(this).remove();
      });
    });
  } else {
    $('.privacyBox').remove();
  }
}

// 手機主選單
function mobileMenu(maxWidth) {
  $(window).on('load resize', function () {
    let windowWidth = $(window).outerWidth();
    if (windowWidth < maxWidth) {
      $('body').addClass('onMobile');
      $('body').removeClass('mobileOpen');
    } else {
      $('body').removeClass('onMobile');
    }
  });

  $('.mobileBtn').on('click', function (event) {
    $('.menuBox').css('transition', 'all 1.2s cubic-bezier(1, 0, 0.2, 1)');
    if ($('body').is('.mobileOpen')) {
      $('body').removeClass('mobileOpen');
      $('.menuBox').css('transform', 'translateX(100%)');
    } else {
      $('body').addClass('mobileOpen');
      $('.menuBox').css('transform', 'translateX(0%)');
    }
    $('.menuMember.active,.language.active').removeClass('active').find('ul').slideUp();
    $('.menuSearch').removeClass('active');
  });
}
$(window).on('resize load', function () {
  $('.menuBox').attr('style', '');
  $('body').removeClass('mobileOpen');
});

// 無限輪播
function sliderUse(elm) {
  let parentBox = 0;
  let sliderMovePx = 0;
  let request;

  $(window).on('load resize', function () {
    parentBox = $(elm).outerWidth(true);
    cancelAnimationFrame(request);
    requestAnimationFrame(animation);
  });

  function animation() {
    sliderMovePx++;
    if (sliderMovePx < parentBox) {
      $(elm).css('transform', `translateX(-${sliderMovePx}px)`);
      request = requestAnimationFrame(animation);
    } else {
      sliderMovePx = 0;
      request = requestAnimationFrame(animation);
    }
  }
}

// 滾動漂浮
$(window).on('load resize', function () {
  $('.acBoxDown').removeAttr('style');
  $('.acBoxUp').removeAttr('style');

  $(window).on('scroll', function () {
    let windowWidth = $(window).outerWidth();
    let windowHeight = $(window).outerHeight();
    let windowScrollTop = document.documentElement.scrollTop;
    if (windowWidth > 767) {
      // let bg_use = $('.bgUse');
      // let bg_use_h = ((windowScrollTop - 100) / $('.mainBox').height()) * 100;
      // if (windowScrollTop > 0) {
      //   gsap.to(bg_use, 1, {
      //     'background-position': '0 ' + bg_use_h + '%',
      //   });
      // } else {
      //   gsap.to(bg_use, 1, {
      //     'background-position': '0 ' + '0' + '%',
      //   });
      // }

      $('.acBoxDown').each(function () {
        let box_t = $(this).offset().top;
        // let ac_move = $(this).find('.acMove');
        let ac_move = $(this);
        if (windowScrollTop + windowHeight / 3 > box_t && windowWidth > 800) {
          gsap.to(ac_move, 1, {
            y: (windowScrollTop + windowHeight / 3 - box_t) / 10,
          });
        }
      });

      $('.acBoxUp').each(function () {
        let box_t = $(this).offset().top;
        // let ac_move = $(this).find('.acMove');
        let ac_move = $(this);
        if (windowScrollTop + windowHeight / 3 > box_t && windowWidth > 800) {
          gsap.to(ac_move, 1, {
            y: -(windowScrollTop + windowHeight / 3 - box_t) / 10,
          });
        }
      });

      $('.acBoxLeft').each(function () {
        let box_t = $(this).offset().top;
        // let ac_move = $(this).find('.acMove');
        let ac_move = $(this);
        if (windowScrollTop + windowHeight / 3 > box_t && windowWidth > 800) {
          gsap.to(ac_move, 1, {
            x: -(windowScrollTop + windowHeight / 3 - box_t) / 10,
          });
        }
      });
    } else {
      $('.acBoxUp').attr('style', '');
      $('.acBoxDown').attr('style', '');
    }
  });
});

// 跟隨滑鼠
$.fn.parallax = function (resistance, mouse) {
  $el = $(this);
  TweenLite.to($el, 0.2, {
    x: -((mouse.clientX - window.innerWidth / 2) / resistance),
    y: -((mouse.clientY - window.innerHeight / 2) / resistance),
  });
};

// 倒數用
$.fn.animateNumbers = function (stop, commas, duration, ease) {
  return this.each(function () {
    let $this = $(this);
    let start = parseInt($this.text().replace(/,/g, ''));
    commas = commas === undefined ? true : commas;
    $({
      value: start,
    }).animate(
      {
        value: stop,
      },
      {
        duration: duration == undefined ? 1000 : duration,
        easing: ease == undefined ? 'swing' : ease,
        step: function () {
          $this.text(Math.floor(this.value));
          if (commas) {
            $this.text($this.text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, '$1,'));
          }
        },
        complete: function () {
          if (parseInt($this.text()) !== stop) {
            $this.text(stop);
            if (commas) {
              $this.text($this.text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, '$1,'));
            }
          }
        },
      }
    );
  });
};

// 開啟畫面動態效果
// AOS.init({
//   offset: 100, // 移動距離 (單位為像素)
//   delay: 0, // 延遲時間，範圍從 0-3000
//   duration: 1000, // 完成動畫所需的時間，範圍從 0-3000
//   easing: 'ease', // 動畫曲線
//   once: true, // 動畫是否只跑一次
//   mirror: false, // 鏡像
//   anchorPlacement: 'top-bottom', // 動畫觸發的位置
// });
