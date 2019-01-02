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
    var ele = $('#t_1');
    console.dir(ele);
    TweenMax.to(ele,1,{opacity:1});
  }
  
  function func_1() {
     // $('.paper_2').css("position","fixed");
  }
  
  // var iphoneIntro = TweenMax.fromTo($('.foo'), 1, {height:'100%'} , {height:0,opacity:0.8, onComplete:func,onReverseComplete:func_1} );
  
  // var paper_2 = TweenMax.to($('.paper_2'),3, {scale:1.2,boxShadow:"0px 0px 60px gray",delay:4});
  // 
  

  var tl = new TimelineMax();

  tl.add(TweenMax.fromTo($('.foo'), 9, {height:'100%'} , {height:0,opacity:0.8} ))
  .add(TweenMax.to($('.paper_2'),3, {scale:1.2,boxShadow:"0px 0px 60px gray"}))
  .add(TweenMax.to($('.gray_back'),3,{paddingTop:850,paddingBottom:78,display:'block'}))
  .add([
      TweenMax.to($('.p_1'),3,{display:'block',x:400}),
      TweenMax.to($('.p_2'),3,{display:'block',x:170,delay:0.3}),
      TweenMax.to($('.p_3'),4,{display:'block',right:140}),
      TweenMax.to($('.p_4'),4,{display:'block',right:-50})
    ])
  .add(
      TweenMax.to($('.p_1'),2,{rotation:40,y:-100,x:-200,delay:2})
    )






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