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
      if (($j("body").hasClass("home")) || ($j("body").hasClass("page-template-home-page-alt-php"))) {
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
            if ($(this).scrollTop() > c.$homeMenuOffset.top) {
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
          right: "-310px"
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
});
