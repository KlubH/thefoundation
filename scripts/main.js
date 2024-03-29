var $j = jQuery;

var TF = (function(){

  return {
    
    touchDevice: false,
    curPage: "other",

    checkTouch: function() {
      if (Modernizr.touch){
        touchDevice = true; 
      } else {
        touchDevice = false;
      }
      return touchDevice;
    },

    checkPage: function(){
      if (($j("body").hasClass("home")) || ($j("body").hasClass("page-template-home-page-alt-php")) || $j("body").hasClass("page-template-home-page-old-php")) {
        curPage = "home";
      } else {
        curPage = "other";
      }
      return curPage;
    },

    init: function() {
      this.checkTouch();
      this.checkPage();
      HomeVideo.init();
      Podcast.init();     
      Menu.init(); 
    }
  }

})();

var Podcast = (function(){

  var c; 

  return {
    config: {
      $trigger: $j(".show-audio"),
      $audioElem: $j(".audio"),
      $audioState: "paused"
    },

    init: function() {
      c = this.config;
      this.bindActions();  
    },  

    bindActions: function () {     
      c.$trigger.on("click", function(e){
        e.preventDefault();
        var player = new MediaElementPlayer(c.$audioElem.find("#audio-player"));   
        if (c.$audioState === "paused") {
          Podcast.toggleElement(c.$audioElem);
          player.play();
          $(this).text("Pause Podcast").addClass("pause");
          c.$audioState = "playing";
        } else {
          player.pause();
          $(this).text("Play Podcast").removeClass("pause");
          c.$audioState = "paused";
        }
      });
    },

    toggleElement: function($toggled) {
      $toggled.slideDown();
    }

  };
  
})();

var HomeVideo = (function(){
  
  var c; 

  return {
    
    config: {
      $modalTrigger: $j(".modal-trigger"),
      $modalVid: $j("#video-modal"),
      $overlay: $j("#overlay"),
      $optin: $j("#optin-source").clone(),
      $closeModal: $j(".close-modal")
    },

    init: function() {
      c = this.config;
      this.bindActions();
    },

    bindActions: function() {
      c.$modalTrigger.on("click", function(e){
        e.preventDefault();
        if (Modernizr.touch) {
          HomeVideo.inlineVid($j(this), c.$modalVid);
        } else {
          HomeVideo.showModal(c.$modalVid);
        }
      });
      c.$closeModal.on("click", function(e) {
        e.preventDefault();
        HomeVideo.hideModal(c.$modalVid);        
      });
      c.$modalVid.on("click", function(e){
        e.stopPropagation();
      });
    },

    inlineVid: function(trigger, target){
      trigger.fadeOut(function(){
        target.slideDown();
      });
    }, 

    showModal: function(target) {
      c.$overlay.fadeIn("fast", function(){
        target.fadeIn().addClass("modal");
      });
      
    },

    hideModal: function(target) {
      target.fadeOut(function(){
        c.$overlay.hide();
      });
    }

  }

})();

var Menu = (function(){

  var c; 

  return {

    config: {
      $homeMenu: $j("#js-header"),
      $menu: $j(".site-header"),
      $menuToggle: $j(".mobile-nav-toggle"),
      $nav: $j(".site-nav").find("ul"),
      $homeMenuOffset: $j("#js-header .site-nav").offset(),
    },

    init: function() {
      c = this.config;
      this.bindActions();
    },

    bindActions: function() {
      if (!Modernizr.touch){
        if (curPage === "home") { 
         $(window).on('scroll resize', function(){
            if (c.$homeMenuOffset && $(this).scrollTop() > c.$homeMenuOffset.top) {
              Menu.fixNav(c.$homeMenu, "fix");
              Menu.animateNav("fix");     
            } else {
              Menu.fixNav(c.$homeMenu, "unfix");
              Menu.animateNav("unfix");
            }
          });
        } 
      }
      c.$menuToggle.on("click", function(e){
        e.preventDefault();
        Menu.showMobileNav(c.$nav);
      });
    },

    fixNav: function($navElem, direction){
      if (direction === "fix") {
        $navElem.addClass("fixed-top");     
      } else {
        $navElem.removeClass("fixed-top");
      }
    },

    animateNav: function(direction, cb) {
      var $logo = c.$homeMenu.find(".logo");
      var $ul = c.$homeMenu.find("ul");
      var $ulWidth = $ul.width();
      var $homeCon = $j(".home-content");
      if (direction === "fix") {
        $logo.fadeIn();
        $homeCon.css("padding-top", c.$homeMenu.height() + "px");
        $ul.animate({
          right: "-290"
        }, 1500);
      } else {
        $logo.hide();
        $homeCon.css("padding-top", 0);
      }
    },

    showMobileNav: function(navElem) {
      navElem.toggle();
    }

  }

})();

$j(document).ready(function(){
  TF.init(); 
  if (typeof(setupZoom) != "undefined")
    setupZoom();
  $j("div#fshare").click(function() { 
    $j(this).delay(1000*9).fadeOut(1000); 
    $j(this).next("#downloadpdf").delay(1000*10).fadeIn(2000);
  });
  
  $j('.moonray-form form').submit(function () {
    $('.form-error-box').remove();
    var count = $(this).find('input, select, textarea').each(function () {
      $(this).blur();
    }).filter('.moonray-form-state-error:not(.moonray-form-error-message)').length;
    if (count)
    {
      $j('.postcard').prepend($('<div/>').addClass('form-error-box').text('Please fill out the fields in red.'));
      $('html:not(:animated),body:not(:animated)').animate({scrollTop: 230}, 'slow', function () {
        $('.form-error-box').each(function(i) {
          $(this).css({ "position": "relative" });
          for (var x = 1; x <= 2; x++) {
            $(this).animate({ left: -10 }, 10).animate({ left: 0 }, 70).animate({ left: 10 }, 10).animate({ left: 0 }, 70);
          }
        });
      });
    }
    window.setTimeout(function () {
      $('.moonray-form-error-message').eq(0).css('left', $('.moonray-form-error-message').eq(1).css('left'));
    }, 10);
  });

  var wistiaiframe = $('iframe.wistia_embed');
  var wistiaResize = function () {
    wistiaiframe.height(Math.floor(wistiaiframe.width() * 521 / 920));
  }
  wistiaResize();
  wistiaiframe.load(wistiaResize);
  $(window).resize(wistiaResize)
  
  if ($('.countdown').length) {
    var secondsLeft = $('.countdown').data('secondsleft');

    window.setInterval(function () {
      secondsLeft--;
      if (secondsLeft > 0)
      {
        $('.counter.days em').text(Math.floor(secondsLeft / 86400));
        $('.counter.hours em').text(Math.floor((secondsLeft % 86400) / 3600));
        $('.counter.minutes em').text(Math.floor((secondsLeft % 3600) / 60));
        $('.counter.seconds em').text(secondsLeft % 60);
      }
    }, 1000);
  }
});
