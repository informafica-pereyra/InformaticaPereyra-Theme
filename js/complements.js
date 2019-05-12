// Scroll.js
$(window).on('scroll', function(){
  if($(window).scrollTop()){
    $('nav').addClass('navbar-scroll');
  } else {
    $('nav').removeClass('navbar-scroll');
  }
  if($(window).scrollTop()){
    $('i.img-btn-fixed').addClass('img-btn-fixed-show');
  } else {
    $('i.img-btn-fixed').removeClass('img-btn-fixed-show');
  }
})

// Scroll down animation
 $(function() {
  var already_clicked = 0;
    $('.button-down-home').click (function() {
      if (already_clicked === 0){
        already_clicked += 1;
        $('html, body').animate({scrollTop: $('#first-content-home').offset().top }, 1000);
        setTimeout(()=>{
          already_clicked = 0;
        }, 1000);
      }
      return false;
    });
  });

 // Scroll down single animation
 $(function() {
  var already_clicked = 0;
    $('.button-down-single').click (function() {
      if (already_clicked === 0){
        already_clicked += 1;
        $('html, body').animate({scrollTop: $('#first-content-single').offset().top }, 1000);
        setTimeout(()=>{
          already_clicked = 0;
        }, 1000);
      }
      return false;
    });
  });

// Scroll up animation
 $(function() {
  var already_clicked = 0;
    $('.img-btn-fixed').click (function() {
      if (already_clicked === 0){
        already_clicked += 1;
        $('html, body').animate({scrollTop: $('#top_content').offset().top }, 1000);
        setTimeout(()=>{
          already_clicked = 0;
        }, 1000);
      }
      return false;
    });
  });

// Menu dropdown
function openMobileMenu() {
  var bg = document.getElementById('bg-menu-mobile');
  var menu = document.getElementById('navbarContentMenu');
  var after = document.querySelector("a.dropdown-toggle::after");
  var icon = document.getElementById('btn-menu-nav');
  if (menu.style.visibility === 'visible') {
    icon.classList.add('fa-bars');
    icon.classList.remove('fa-times');
    menu.style.visibility = 'hidden';
    bg.style.height = '0px';
  } else {
    icon.classList.remove('fa-bars');
    icon.classList.add('fa-times');
    bg.style.height = '100vh';
    setTimeout(()=>{
      menu.style.visibility = 'visible';
    }, 250)
  }
}

// Searchform mobile
var background = document.getElementById('bg-searchform-mobile');
var close = document.getElementById('searchform-close');
var searchform = document.getElementById('searchform-mobile');

function showBackground() {
  background.style.padding = '100vh 0 0 0';
  setTimeout(()=>{
    close.classList.add('searchform-close');
    searchform.classList.add('d-block');
  }, 500)
}

function closeSearchform() {
  background.style.padding = '0vh 0 0 0';
  close.classList.remove('searchform-close');
  searchform.classList.remove('d-block');
}

// Countdown.js
if (document.getElementById('clock') && document.getElementById('message')){

  var time_left = document.getElementById('clock').textContent;

  var final_message = document.getElementById('message').textContent; 

  const getRemainingTime = deadline => {
    let now = new Date(),
        remainTime = (new Date(deadline) - now + 1000) / 1000,
        remainSeconds = ('0' + Math.floor(remainTime % 60)).slice(-2),
        remainMinutes = ('0' + Math.floor(remainTime / 60 % 60)).slice(-2),
        remainHours = ('0' + Math.floor(remainTime / 3600 % 24)).slice(-2),
        remainDays = Math.floor(remainTime / (3600 * 24));

    return {
      remainSeconds,
      remainMinutes,
      remainHours,
      remainDays,
      remainTime
    }
  };

  const countdown = (deadline,elem,finalMessage) => {
    const el = document.getElementById(elem);

    const timerUpdate = setInterval( () => {
      let t = getRemainingTime(deadline);
      el.innerHTML = `${t.remainDays}d ${t.remainHours}h ${t.remainMinutes}m ${t.remainSeconds}s`;

      el.className = "d-inline-block";

      if(t.remainTime <= 1) {
        clearInterval(timerUpdate);
        el.innerHTML = finalMessage;
      }

    }, 1000)

  }; 

  countdown( time_left, 'clock', final_message);

}

// Add fade in effect

$(window).on('scroll', function(){
 if ($(".to-fade").is(':visible')){
       $(".to-fade").addClass("fadein");
       $(".to-fade").removeClass("to-fade");
  }
  if ($(".to-fade-content").is(':visible')){
       $(".to-fade-content").addClass("fadein");
       $(".to-fade-content").removeClass("to-fade");
  }
  if ($(".to-fade-footer").is(':visible')){
       $(".to-fade-footer").addClass("fadein");
       $(".to-fade-footer").removeClass("to-fade");
  }
});