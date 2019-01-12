<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>ELMA-CENTER</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Fullscreen Form Interface: A distraction-free form concept with fancy animations" />
    <meta name="keywords" content="fullscreen form, css animations, distraction-free, web design" />
    <meta name="author" content="Codrops" />
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/normalize.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/demo.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/component.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/cs-select.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/cs-skin-boxes.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" />
    <style type="text/css">
      .layout {
  display: block;
  position: relative;
  background: #fff;
  /*height: 100vh;*/
}
/* header */
header {
  height: 100vh;
  position: relative;
  overflow: hidden;
  background-size: cover;
  background: white;
}
header .content {
  position: relative;
  display: block;
  color: black;
  top: 50%;
  left: 50%;
  text-align: center;
  transform: translate(-50%, -50%);
  
}
header .content h1 {
  font-size: 5.7em;
  padding:20px;
  border-radius: 30px;
  animation: bouncey 3s infinite;
  background-color: #e21e3d;
  font-weight: bolder;
  color: white;
  box-shadow: 0px 2px 10px #0000002e;
}

header .content h3 {
  font-size: 2.5em;
  font-weight: lighter;
  animation: bouncey 3s infinite;
}

.bg-vector {
  max-width: 60vw;
  height:auto;
  animation: bouncey 3s infinite;
  transform: scale(0.5);
  z-index: -9;
}

.foo {
  position: absolute;
  top:15vh;
  left:10vw;
}


@media only screen and (max-width: 1050px) {
  .bg-vector {
    position: absolute;
    width: 100vw;
    height: 100vh;
    top:-300px;

    
  }

  .foo {
    top:-300px;
    left:54vw;
  }

  header .content h1 {
    font-size: 3rem;
  }
}

@media only screen and (max-width: 950px) {
  header .content h3 {
      font-size: 2em;
  }
}

@media only screen and (max-width: 850px) {

  header .content h1 {
    font-size: 1.7rem;
  }

  .foo {
    left:40vw;
  }

  header .content {
    left: 45%;
    transform: translate(-50%, -50%);
  }


  header .content h3 {
      font-size: 2.3rem;
  }

  .bg-vector {
  width: 100vw;
  height: auto;
  position: absolute;
  top:-220px;
  max-width: 100vw;
  
  
}


}

@media screen and (max-width: 650px) {
   header .content h3 {
      font-size: 1.9rem;
  }
}

@media only screen and (max-width: 550px) {

  header .content h1 {
    font-size: 2.4rem;
    
  }

  header .content h3 {
    font-size: 1rem;
  }
}


@media only screen and (max-width: 511px) {

  header .content h1 {
    font-size: 2.4rem;
    
  }

  .foo {
    left:17%;
  }

  .bg-vector {
    top:-20px;
  }

  header .content h3 {
    font-size: 1rem;
  }
}


.bg {
  display: block;
  position: fixed;
  width: 100vw;
  height: 130vh;
  top: 0;
  left: 0;
  background: url('{{ asset('img/just-waves.png')  }}') center ;
  background-size: all;
  -moz-transition: 0.1s;
  -o-transition: 0.1s;
  -webkit-transition: 0.1s;
  transition: 0.1s;
  z-index: -1;
}







    </style>
    <script src="{{ asset('js/modernizr.custom.js') }}"></script>
  </head>
  <body class="bg-white">

    <div class="container-fluid bg-white h-100">
      <div class="bg">
        ssssss
      </div>
<header>
  <div class="content">
    <div class="d-flex flex-row">
        <div style="min-width:40Vw">
          <div class="wow bounceInLeft foo" data-wow-delay="1s" >
            <h1 class="myi wow bounceInLeft" data-wow-delay="1s">Tofel Writing</h1>
            <h3 >Simple and Beautiful</h3>
          </div>
        </div>
      
    <img class="bg-vector wow bounceInRight" src="{{ asset('svg/undraw_typewriter_i8xd.svg') }}" />
    
    </div>
  </div>
</header>

<div class="layout"></div>




      

      <div class="d-flex flex-column pt-5" style="height:1200px;padding-top:100px">
          <h2 class="sec_2  mt-5"">  Just In 
            <samp
            style="display:inline-block;text-align:center;color:black;font-size: 110px;background-color:#1d34bd;border-radius:280px;width:170px;height:170px;padding-top: 20px;box-shadow: 6px 6px 5px gray;color:white">2</samp> Step </h2>
        <div class="d-flex pt-5 mt-5 second-section ">
           <div class="top wow bounceInLeft ">
                  <div class="perspective">
                    <div class="card">
                        <div class="thumb" ></div>
                        <h2>Send Your Information</h2>
                        <span style="text-align: center;">Just with &nbsp;&nbsp;&nbsp;2 Clicks</span>
                    </div>
                  </div>
              </div>

              <div class="top wow bounceInRight" >
                  <div class="perspective">
                    <div class="card">
                        <div class="thumb" ></div>
                        <h2> Get Your Result </h2>
                        <span style="left:40px;"> <i style="color:white;font-size: 5rem">100%</i> Correct</span>
                    </div>
                  </div>
              </div>

              

        </div>



        <div class="d-flex justify-content-center" id="nex_sect">
          <form
          id="upload_"
          method="POST"
           action="{{ route('upload') }}"
           enctype="multipart/form-data"
              
              >
              @csrf

              <div id="fki">
                <h1 class="wow bounceInLeft" data-wow-delay="1s" style="color:black;font-size: 3rem">Upload File</h1>
                <div data-wow-delay="1.5s" class="btn btn-primary w-75 trigger_handler wow bounceInRight"> Upload File </div>
                <input id="sub_upload" data-wow-delay="1.8s" class="btn btn-primary w-75 wow bounceInLeft" type="submit" name="">
            
                <input  class="input_file" type="file" name="file">
                
              </div>
                
                
              </form>


        </div>

      </div>

      <div class="d-flex">
        <div class="arrow">
      <ul>
        <li></li>
        <li></li>
      </ul>
    </div>
      </div>
    </div>








    <div class="container_"   >

      <div class="fs-form-wrap" id="fs-form-wrap">
        <div class="fs-title">
          <h1>Project Worksheet</h1>
          

          
        </div>
        <form action="" id="myform" class="fs-form fs-form-full" autocomplete="off">
          <ol class="fs-fields">
            <li>
              <label class="fs-field-label fs-anim-upper" for="q1">What's your name?</label>
              <input class="fs-anim-lower" id="q1" name="user_name" type="text" placeholder="Dean Moriarty" required/>
            </li>
            <li>
              <label class="fs-field-label fs-anim-upper" for="q2" data-info="please enter your name">What's your Family?</label>
              <input class="fs-anim-lower" id="q2" name="user_family" type="text" required/>
            </li>
              <li>
              <label class="fs-field-label fs-anim-upper" for="q2" data-info="We won't send you Ad message , just for notify your result">What's your Mobile Nummber?</label>

              <input class="fs-anim-lower" id="q2" name="mobile" type="number" placeholder="0912 8888 8888" />
            </li>

            <li>
              <label class="fs-field-label fs-anim-upper" for="q2" data-info="We won't send you spam email">What's your Email Address?</label>

              <input class="fs-anim-lower" id="q2" name="email" type="email" placeholder="info@domain.com" />
            </li>


            <li data-input-trigger>
              <label class="fs-field-label fs-anim-upper" for="q3" data-info="This will help us know which way you enjoy">What's your solution for know about result?</label>
              <div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
                <span><input id="q3b" name="send_via" type="radio" value="both"/><label for="q3b" class="radio-conversion">Both</label></span>
                <span><input id="q3c" name="send_via" type="radio" value="email"/><label for="q3c" class="radio-social">Email</label></span>
                <span><input id="q3a" name="send_via" type="radio" value="telegram"/><label for="q3a" class="radio-mobile">Telegram</label></span>
              </div>
            </li>

          <!--  <li data-input-trigger>
              <label class="fs-field-label fs-anim-upper" data-info="We'll make sure to use it all over">Choose a color for your website.</label>
              <select class="cs-select cs-skin-boxes fs-anim-lower">
                <option value="" disabled selected>Pick a color</option>
                <option value="#588c75" data-class="color-588c75">#588c75</option>
                <option value="#b0c47f" data-class="color-b0c47f">#b0c47f</option>
                <option value="#f3e395" data-class="color-f3e395">#f3e395</option>
                <option value="#f3ae73" data-class="color-f3ae73">#f3ae73</option>
                <option value="#da645a" data-class="color-da645a">#da645a</option>
                <option value="#79a38f" data-class="color-79a38f">#79a38f</option>
                <option value="#c1d099" data-class="color-c1d099">#c1d099</option>
                <option value="#f5eaaa" data-class="color-f5eaaa">#f5eaaa</option>
                <option value="#f5be8f" data-class="color-f5be8f">#f5be8f</option>
                <option value="#e1837b" data-class="color-e1837b">#e1837b</option>
                <option value="#9bbaab" data-class="color-9bbaab">#9bbaab</option>
                <option value="#d1dcb2" data-class="color-d1dcb2">#d1dcb2</option>
                <option value="#f9eec0" data-class="color-f9eec0">#f9eec0</option>
                <option value="#f7cda9" data-class="color-f7cda9">#f7cda9</option>
                <option value="#e8a19b" data-class="color-e8a19b">#e8a19b</option>
                <option value="#bdd1c8" data-class="color-bdd1c8">#bdd1c8</option>
                <option value="#e1e7cd" data-class="color-e1e7cd">#e1e7cd</option>
                <option value="#faf4d4" data-class="color-faf4d4">#faf4d4</option>
                <option value="#fbdfc9" data-class="color-fbdfc9">#fbdfc9</option>
                <option value="#f1c1bd" data-class="color-f1c1bd">#f1c1bd</option>
              </select>
            </li> -->
            <li> 


              <label class="fs-field-label fs-anim-upper" for="q4">Describe how you imagine your result</label>
              <textarea class="fs-anim-lower" id="q4" name="details" placeholder="Describe here"></textarea>
            </li>
            <!-- <li>
              <label class="fs-field-label fs-anim-upper" for="q5">What's your budget?</label>
              <input class="fs-mark fs-anim-lower" id="q5" name="q5" type="mobile" placeholder="1000" step="100" min="100" required />
            </li> -->
          </ol><!-- /fs-fields -->
          <button class="fs-submit" type="submit">Send</button>
        </form><!-- /fs-form -->
      </div><!-- /fs-form-wrap -->

      <!-- Related demos -->
      

    </div><!-- /container -->
    <script src="{{ asset('js/classie.js') }}"></script>
    <script src="{{ asset('js/selectFx.js') }}"></script>
    <script src="{{ asset('js/fullscreenForm.js') }}"></script>
    <script>
      (function() {
        var formWrap = document.getElementById( 'fs-form-wrap' );

        [].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {  
          new SelectFx( el, {
            stickyPlaceholder: false,
            onChange: function(val){
              document.querySelector('span.cs-placeholder').style.backgroundColor = val;
            }
          });
        } );

        new FForm( formWrap, {
          onReview : function() {
            classie.add( document.body, 'overview' ); // for demo purposes only
          }
        } );
      })();
    </script>

<script src="{{ asset('js/wow.js') }}"></script>
<script type="text/javascript">
    new WOW().init();
</script>


    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

    <script>
      $(document).ready(function() {



        $('.trigger_handler').click(function() {
          var but = $('.input_file');
          but.click();
        });

        window.uploaded_file = '';


        function removeUploadLayout() {
          $('body').removeClass('bg-white');
          $('.container-fluid').css('display','none');
          $('.container_').css('display', 'block');
          $('.container_').css('visibility', 'visible');

        }
        

        //PARALLAX
        //
        
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        }); 


        $('#myform').submit(function(e) {
          e.preventDefault();
          loading_(true);
          var user_name ,
          user_family ,
          email,
          mobile,
          telegram,
          send_via,
          details,
          input;

          user_name = $("input[name=user_name]").val();
          user_family = $("input[name=user_family]").val();
          email= $("input[name=email]").val();
          mobile = $("input[name=mobile]").val();
          // telegram = $("input[name=telegram]").val();
          telegram = null;
          send_via = $("input[name=send_via]:checked").val();
          details = $("textarea[name=details]").val();
          input = window.uploaded_file;




          console.log(input);

          function loading_(state) {
            if(state) {
              $('.fs-submit').text(" Loading ");
              return false;
            }

            $('.fs-submit').text("Send");
            return false;
          }

           $.ajax({
                 url: '{{ url("service/t/writing") }}',
                type: 'POST',
        
                   
                data: {
                  user_name : user_name,
                  user_family : user_family,
                  email  : email,
                  mobile : mobile,
                  telegram : telegram,
                  send_via: send_via,
                  details: details,
                  input : input
                },
                success: function(result)
                {
                    console.log('success');
                     alert('Your Result Sent successfully');
                     loading_(false);
                     window.uploaded_file = '';
                     console.log(result);
                     window.location = window.location;
                },
                error: function(data)
                {
                    console.log(data);
                    loading_(false);
                    alert('Try Again');
                }
            });


        });

        function loading(state) {
          
          var ele = $('#sub_upload');

          if(state) {
            ele.prop("value","Loading ...");
            return false;
          }

          ele.prop("value","Submit");

        }
        

        $('#upload_').submit(function(event) {
          event.preventDefault();
          loading(true);
          var formData = new FormData($("#upload_")[0]);
          
          console.log(formData);
    $.ajax({
        url: '{{ route("upload") }}',
        type: 'POST',              
        data: formData,
      processData: false,
      contentType: false,
        success: function(result)
        {
            console.log('success');
             window.uploaded_file = result;
             loading(false);
             removeUploadLayout();
        },
        error: function(data)
        {
            console.log(data);
        }
    });

});
        
      

$(window).scroll(function(){
  parallax();
});

function parallax(){
  var scrolled = $(window).scrollTop();
  $('.bg').css('top',-(scrolled*0.1)+'px');
  $('header .content').css('top',50+(scrolled*0.1)+'%');
  $('header .content').css('opacity',1-(scrolled*0.01)/10);
  $('header .content').css('opacity',1-(scrolled*0.01)/10);
};




var o = $(".card");
$(".top").on("mousemove", function (t) {
    var e = -($(window).innerWidth() / 2 - t.pageX) / 50,
        n = ($(window).innerHeight() / 2 - t.pageY) / 90;
    o.attr("style", "transform: rotateY(" + e + "deg) rotateX(" + n + "deg);-webkit-transform: rotateY(" + e + "deg) rotateX(" + n + "deg);-moz-transform: rotateY(" + e + "deg) rotateX(" + n + "deg)")
})



      });
    </script>

    <script src="{{ asset('js/dropzone.js') }}"></script>

  </body>
</html>