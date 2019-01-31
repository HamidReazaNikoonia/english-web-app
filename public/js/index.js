TweenMax.defaultOverwrite = false;

(function($) {

  $(".text_line_1").lettering();

  function animation() {
  var title1 = new TimelineMax();

  console.log('run animaion');
  
  title1.staggerFromTo(".text_line_1 span", 0.5, 
  {ease: Back.easeOut.config(1.7), opacity: 0, bottom: -80},
  {ease: Back.easeOut.config(1.7), opacity: 1, bottom: 0}, 0.05);
  
}
  
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
  
  function on_start() {
      animation();
      
  }

  function LableChage() {
    var textLable = $('.text_line_1');
    textLable.html("Correct&nbsp; All &nbsp;Mistakes");
  }

  function onReverseLableText() {
     var textLable = $('.text_line_1');
      textLable.html("Edit Your Documents");
  }

  function statrt_wrong1() {
    $('.wrong1').text("and");
  }

  function compleate_wrong1() {
    $('.wrong1').css('backgroundColor','white');
    $('.wrong1').css('color','gray');
  }

  function reverse_wrong1() {
    $('.wrong1').text("andd");
  }

  function onReverseLableText2() {
    var textLable = $('.text_line_1');
      textLable.html("<i class='fa fa-bank'></i>");
  }


  //
  
    function statrt_wrong2() {
    $('.wrong2').text("some");
  }

  function compleate_wrong2() {
    $('.wrong2').css('backgroundColor','white');
    $('.wrong2').css('color','gray');
  }

  function reverse_wrong2() {
    $('.wrong2').text("sone");
  }

  function oncomp1() {

  }

  //
  

    function statrt_wrong() {
    $('.wrong').html("&nbsp;&nbsp;&nbsp ");
  }

  function compleate_wrong() {
    $('.wrong').css('backgroundColor','white');
    $('.wrong').css('color','gray');
  }

  function reverse_wrong() {
    $('.wrong').text("be");
  }

  //

    function statrt_wrong3() {
    $('.wrong3').text("you");
  }

  function compleate_wrong3() {
    $('.wrong3').css('backgroundColor','white');
    $('.wrong3').css('color','gray');
  }

  function reverse_wrong3() {
    $('.wrong3').text("us");
  }
  //

    function statrt_wrong4() {
    $('.wrong4').text("have");
  }

  function compleate_wrong4() {
    $('.wrong4').css('backgroundColor','white');
    $('.wrong4').css('color','gray');
  }

  function reverse_wrong4() {
    $('.wrong4').text("has");
  }
  
  // var iphoneIntro = TweenMax.fromTo($('.foo'), 1, {height:'100%'} , {height:0,opacity:0.8, onComplete:func,onReverseComplete:func_1} );
  
  // var paper_2 = TweenMax.to($('.paper_2'),3, {scale:1.2,boxShadow:"0px 0px 60px gray",delay:4});
  // 
  // 
  

  function addLayer_1() {
    $('#onLayer_1').css('display','block');
  }

  function removeLayer_1() {
    $('#onLayer_1').css('display','none'); 
  }
  

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
  .add(TweenMax.fromTo($('.line_1'),2,{width:0},{display:'block',width:"90%"}))
  .add(TweenMax.to($('.text_line_1'),2,{backgroundColor:'#00000041',opacity:1,onStart:on_start}))
  .add([
      
      TweenMax.to($('.wrong1'),0.4,{backgroundColor:'yellow',opacity:1,color:'red',color:'black',fontWeight:'bolder',delay:0.5}),
      TweenMax.to($('.wrong2'),0.4,{backgroundColor:'yellow',opacity:1,color:'red',color:'black',fontWeight:'bolder',delay:1}),
      TweenMax.to($('.wrong'),0.4,{backgroundColor:'yellow',opacity:1,color:'red',color:'black',fontWeight:'bolder',delay:1.5}),
      TweenMax.to($('.wrong3'),0.4,{backgroundColor:'yellow',opacity:1,color:'red',color:'black',fontWeight:'bolder',delay:2}),
      TweenMax.to($('.wrong4'),0.4,{backgroundColor:'yellow',opacity:1,color:'red',color:'black',fontWeight:'bolder',delay:2.5})
    ])
  .add([
      TweenMax.to($('#t_1'),1.2,{x:420,scale:2.5,width:"100%",delay:1, ease: Power3.easeIn}),
      TweenMax.to($('#t_2'),1.2,{x:418,scale:2.5,width:"100%",y:30,delay:2, ease: Power3.easeIn}),
      TweenMax.to($('#t_3'),1.2,{x:418,scale:2.5,width:"100%",y:70,delay:2.8})
    ])
  .add([
    TweenMax.fromTo($('.line_1'),2,{width:"90%"},{width:0}),
    TweenMax.to($('.text_line_1'),2,{y:190,delay:1.8,rotation:-30,scale:0.5,x:-152,onComplete:LableChage,onReverseComplete:onReverseLableText,backgroundColor:'red'}),
    TweenMax.to($('#t_4'),1.2,{x:420,scale:2.5,width:"100%",y:100,delay:0.2}),
    TweenMax.to($('#t_5'),1.2,{x:420,scale:2.5,width:"100%",y:140,delay:1.5}),
    TweenMax.to($('#t_6'),1.2,{x:400,scale:2.5,width:"100%",y:120,delay:1.6})
    ])
  .add([

      TweenMax.to($('.wrong1'),0.4,{backgroundColor:'green',color:'white',fontWeight:'bolder',delay:0.5,onStart:statrt_wrong1,onReverseComplete:reverse_wrong1,onComplete:compleate_wrong1}),
      TweenMax.to($('.wrong2'),0.4,{backgroundColor:'green',opacity:1,color:'white',fontWeight:'bolder',delay:1,onStart:statrt_wrong2,onReverseComplete:reverse_wrong2,onComplete:compleate_wrong2}),
      TweenMax.to($('.wrong'),0.4,{backgroundColor:'green',opacity:1,color:'white',fontWeight:'bolder',delay:1.5,onStart:statrt_wrong,onReverseComplete:reverse_wrong,onComplete:compleate_wrong}),
      TweenMax.to($('.wrong3'),0.4,{backgroundColor:'green',opacity:1,color:'white',fontWeight:'bolder',delay:2,onStart:statrt_wrong3,onReverseComplete:reverse_wrong3,onComplete:compleate_wrong3}),
      TweenMax.to($('.wrong4'),0.4,{backgroundColor:'green',opacity:1,color:'white',fontWeight:'bolder',delay:2.5,onStart:statrt_wrong4,onReverseComplete:reverse_wrong4,onComplete:compleate_wrong4})
      
    ])
  .add([
      TweenMax.to([$('.hidden_action > h5'),$('.hidden_action > h3')],2,{display:'none'}),
      TweenMax.to([$('.hidden_action > h5'),$('.hidden_action > h3')],2,{display:'none'}),
      TweenMax.to($('.text_line_1'),2,{display:'none'}),
    ])
  .add([
      TweenMax.to($('.p_1'),3,{rotation:40,y:-100,x:-200}),
      TweenMax.to($('.p_2'),3,{scale:1.7,rotation:20,y:-100,x:-200},"-=1"),
      TweenMax.to($('.p_3'),3,{scale:1.7,rotation:-30,y:-400,x:-20,delay:0.4},"+=1"),
      TweenMax.to($('.p_4'),3,{scale:1.4,rotation:40,y:-300,x:400}),
      TweenMax.to($('.gray_back'),3,{y:-600,padding:0}),
      TweenMax.to($('.paper_2'),3,{scale:1.3,y:90,position:'fixed',onComplete:addLayer_1},"-=1"),

    ])
  .add([
            TweenMax.to($('._section_text'),3,{display:'block',left:"45%",onReverseComplete:removeLayer_1}),
      TweenMax.to($('._section_text_subTitle'),2,{display:'block',left:"50%",delay:2}),
      
    ])
  .add(
      TweenMax.to($('.red_section'),3,{paddingTop:200,height:690,top:50,onStart:removeLayer_1,onReverseComplete:addLayer_1})
    )
  .add([
      TweenMax.to($('.paper_2'),4,{top:280}),
      TweenMax.to($('.paper_2'),1,{boxShadow:"1px 1px 20px black"}),
      TweenMax.from($('.red_section_sub_title'),2,{y:800}),
      TweenMax.from($('.red_section_title'),2,{y:800}),
      TweenMax.to($('.paper_2'),5,{rotation:2}),
      TweenMax.to($('.paper_2_1'),5,{rotation:5,display:'block'}),
      TweenMax.to($('.paper_2_2'),5,{rotation:-4,display:'block'})

    ])







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