TweenMax.defaultOverwrite = false;

(function($) {
  
   var wh = window.innerHeight;
  
  var ctrl = new ScrollMagic.Controller({
    globalSceneOptions: {
        triggerHook: 'onLeave'
    }
 });
  
  $(".section").each(function() {
   
    new ScrollMagic.Scene({
        triggerElement: this,
        duration: '50%'
    })
    .setPin(this)
    .addTo(ctrl);
});
  
  var conat_h = $('.foo').height();
  console.log(conat_h);
  
  function func() {
    // $('.paper_2').css("position","relative");
  }
  
  function func_1() {
     // $('.paper_2').css("position","fixed");
  }
  
  var iphoneIntro = TweenMax.fromTo($('.foo'), 1, {height:'100%'} , {height:0,opacity:0.8, onComplete:func,onReverseComplete:func_1} );
  
  new ScrollMagic.Scene({
    duration: '50%'
})
.setTween(iphoneIntro)
.triggerElement($('body')[0])
.addTo(ctrl);
  
})(jQuery)