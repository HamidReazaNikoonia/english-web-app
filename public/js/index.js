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
        duration: 3000
    })
    .setPin(this)
    .addTo(ctrl);
});
  

  
  function func() {
    // $('.paper_2').css("position","relative");
  }
  
  function func_1() {
     // $('.paper_2').css("position","fixed");
  }
  
  // var iphoneIntro = TweenMax.fromTo($('.foo'), 1, {height:'100%'} , {height:0,opacity:0.8, onComplete:func,onReverseComplete:func_1} );
  
  // var paper_2 = TweenMax.to($('.paper_2'),3, {scale:1.2,boxShadow:"0px 0px 60px gray",delay:4});
  // 
  

  var tl = new TimelineMax();

  tl.add(TweenMax.fromTo($('.foo'), 14, {height:'100%'} , {height:0,opacity:0.8} ))
  .add(TweenMax.to($('.paper_2'),3, {scale:1.2,boxShadow:"0px 0px 60px gray"}))
  .add(TweenMax.to($('.paper_2'),3, {scale:0.8,boxShadow:"0px 0px 60px gray",delay:1}))
  .add(TweenMax.to($('.paper_2'),3, {scale:1,boxShadow:"0px 0px 60px gray",delay:5}))
  .add(TweenMax.to($('.paper_2'),3, {scale:0.2,boxShadow:"0px 0px 60px gray",delay:1}))
  .add(TweenMax.to($('.paper_2'),5, {scale:1.2,boxShadow:"0px 0px 60px gray",delay:1}));




//   new ScrollMagic.Scene({
//     duration: '50%'
// })
// .setTween(iphoneIntro)
// .triggerElement($('body')[0])
// .addTo(ctrl);

//--------------------------

  new ScrollMagic.Scene({
    duration: 3000
})
.setTween(tl)
.triggerElement($('body')[0])
.addTo(ctrl);
  
})(jQuery)