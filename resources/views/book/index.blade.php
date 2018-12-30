<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>English Books</title>
		<meta name="description" content="3D Book Showcase with CSS 3D Transforms" />
		<meta name="keywords" content="3d transforms, css3 3d, book, jquery, open book, css transitions" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="{{ asset('css/default.css') }}" />
		<link rel="stylesheet" type="text/css" href="{{ asset('css/component_book.css') }}" />
		<script src="{{ asset('js/modernizr.custom.js') }}"></script>
		<style type="text/css">
			body.sticky-header {
  padding-top: 100px;
}
body.sticky-header #header {
  height: 60px;
  background-color: rgba(52, 152, 219, 0.9);
}
body.sticky-header #header h1 {
  -moz-transform: scale(0, 0);
  -ms-transform: scale(0, 0);
  -webkit-transform: scale(0, 0);
  transform: scale(0, 0);
}


#header {
  width: 100%;
  height: 300px;
  background-color: #3498db;
  text-align: center;
  position: relative;
  z-index: 9999;
  position: fixed;
  top: 0;
  overflow: hidden;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
}
#header h1 {
  font-size: 42px;
  color: #fff;
  line-height: 230px;
  text-transform: uppercase;
  font-weight: 100;
  -moz-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
#header nav {
  position: absolute;
  bottom: 0;
  height: 60px;
  line-height: 60px;
  width: 100%;
  background-color: rgba(0, 0, 0, 0.1);
}
#header nav a {
  color: #fff;
  display: inline-block;
  padding: 10px 15px;
  line-height: 1;
  text-decoration: none;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  border-radius: 2px;
}
#header nav a:hover {
  -moz-box-shadow: 0 0 0 1px #fff;
  -webkit-box-shadow: 0 0 0 1px #fff;
  box-shadow: 0 0 0 1px #fff;
}

h2 {
  font-size: 34px;
  text-transform: uppercase;
  font-weight: 100;
  line-height: 2;
  color: #2c3e50;
}

p {
  margin-bottom: 2rem;
  line-height: 2;
  color: #7f8c8d;
}

.wrapper {
  width: 800px;
  margin: 0 auto;
}

section {
  padding: 20px;
  margin-bottom: 40px;
  background-color: #fff;
  -moz-border-radius: 4px;
  -webkit-border-radius: 4px;
  border-radius: 4px;
  -moz-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.2);
  -webkit-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.2);
  box-shadow: 0 1px 0 rgba(0, 0, 0, 0.2);
}

body {
  background-color: #ecf0f1;
  font-family: helvetica, arial, sans-serif;
  font-size: 16px;
  padding-top: 330px;
  -moz-transition: padding-top 0.5s ease;
  -o-transition: padding-top 0.5s ease;
  -webkit-transition: padding-top 0.5s ease;
  transition: padding-top 0.5s ease;
}

		</style>
	</head>
	<body>
		<header id="header">
    <h1>Mansoreh Books</h1>
    <nav>
      <a href="">IELTES</a>
      <a href="">TOFEL</a>
      <a href="">SPEAKING</a>
      <a href="">WRITING</a>
    </nav>
  </header>
		<div class="container" style="padding-top:100px">	
			
			<header class="clearfix">
				<h1>Mansoreh English Books</h1>
				<span class="support-note">best english books in world</span>
			</header>
			<div class="main">
				<ul id="bk-list" class="bk-list clearfix">
					

					@foreach($books as $book)

					<li>
						<div class="bk-book book-1 bk-bookdefault">
							<div class="bk-front">
								<div class="bk-cover-back"></div>
								<div class="bk-cover">
								</div>
							</div>
							<div class="bk-page">
								
								@if(!empty($book->details_1))

								<div class="bk-content bk-content-current">
									<p>{{ $book->details_1 }}</p>
								</div>

								@endif

								@if(!empty($book->details_2))

								<div class="bk-content">
									<p>{{ $book->details_2 }}</p>
								</div>

								@endif

								@if(!empty($book->details_3))

								<div class="bk-content">
									<p>{{ $book->details_3 }}</p>
								</div>

								@endif


								<div class="bk-content">
									<p>Whale catfish leatherjacket deep sea anglerfish grenadier sawfish pompano dolphinfish carp large-eye bream, squeaker amago. Sandroller; rough scad, tiger shovelnose catfish snubnose parasitic eel? Black bass soldierfish duckbill--Rattail Atlantic saury Blind shark California halibut; false trevally warty angler!</p>
								</div>


								<div class="bk-content">
									<p>Trahira giant wels cutlassfish snapper koi blackchin mummichog mustard eel rock bass whiff murray cod. Bigmouth buffalo ling cod giant wels, sauger pink salmon. Clingfish luderick treefish flatfish Cherubfish oldwife Indian mul gizzard shad hagfish zebra danio. Butterfly ray lizardfish ponyfish muskellunge Long-finned sand diver mullet swordfish limia ghost carp filefish.</p>
								</div>
							</div>
							<div class="bk-back">
								<p>{{ $book->short_details }}</p>
							</div>
							<div class="bk-right"></div>
							<div class="bk-left">
								<h2>
									<span>{{ $book->name }}</span>
									<span>{{ $book->author }}</span>
								</h2>
							</div>
							<div class="bk-top"></div>
							<div class="bk-bottom"></div>
						</div>
						<div class="bk-info">
							<button class="bk-bookback">Flip</button>
							<button class="bk-bookview">View inside</button>
							<h3>
								<span>{{ $book->author }}</span>
								<span>{{ $book->name }}</span>
							</h3>
							<p>{{ $book->short_details }}</p>
						</div>
					</li>


					@endforeach

					<li>
						<div class="bk-book book-2 bk-bookdefault">
							<div class="bk-front">
								<div class="bk-cover-back"></div>
								<div class="bk-cover">
									
								</div>
							</div>
							<div class="bk-page">
								<div class="bk-content">
									<p>Whale catfish leatherjacket deep sea anglerfish grenadier sawfish pompano dolphinfish carp large-eye bream, squeaker amago. Sandroller; rough scad, tiger shovelnose catfish snubnose parasitic eel? Black bass soldierfish duckbill--Rattail Atlantic saury Blind shark California halibut; false trevally warty angler!</p>
								</div>
								<div class="bk-content">
									<p>Trahira giant wels cutlassfish snapper koi blackchin mummichog mustard eel rock bass whiff murray cod. Bigmouth buffalo ling cod giant wels, sauger pink salmon. Clingfish luderick treefish flatfish Cherubfish oldwife Indian mul gizzard shad hagfish zebra danio. Butterfly ray lizardfish ponyfish muskellunge Long-finned sand diver mullet swordfish limia ghost carp filefish.</p>
								</div>
								<div class="bk-content bk-content-current">
									<p>Red snapper Kafue pike fangtooth humums's slipmouth, salmon cutlassfish; swallower European perch mola mola sunfish, threadfin bream. Billfish hog sucker trout-perch lenok orbicular velvetfish. Delta smelt striped bass, medusafish dragon goby starry flounder cuchia round whitefish northern anchovy spadefish merluccid hake cat shark Black pickerel. Pacific cod.</p>
								</div>
							</div>
							<div class="bk-back">
								<p>Tyrant, blackmailer, racketeer, murderer - his influence reaches every level of American society. Meet Cat Corleone, a friendly cat, a just cat, a reasonable cat. The deadliest lord of the Cata Nostra. The Catfather.</p>
							</div>
							<div class="bk-right"></div>
							<div class="bk-left">
								<h2>
									<span>The Catfather</span>
									<span>by Mario Purrzo</span>
								</h2>
							</div>
							<div class="bk-top"></div>
							<div class="bk-bottom"></div>
						</div>
						<div class="bk-info">
							<button class="bk-bookback">Flip</button>
							<button class="bk-bookview">View inside</button>
							<h3>
								<span>Mario Purrzo</span>
								<span>The Catfather</span>
							</h3>
							<p>A modern masterpiece,The Godfather is a searing portrayal of the 1940s criminal underworld. It is also the intimate story of the Corleone family, at once drawn together and ripped apart by its unique position at the core of the American Mafia. </p>
						</div>
					</li>
					<li>
						<div class="bk-book book-3 bk-bookdefault">
							<div class="bk-front">
								<div class="bk-cover-back"></div>
								<div class="bk-cover">
								</div>
							</div>
							<div class="bk-page">
								<div class="bk-content bk-content-current">
									<p>Oceanic flyingfish spotted danio fingerfish leaffish, Billfish halibut Atlantic cod threadsail poacher slender mola. Swallower muskellunge, turbot needlefish yellow perch trout dhufish dwarf gourami false moray southern smelt cod dwarf gourami. Betta blue catfish bottlenose electric ray sablefish.</p>
								</div>
								<div class="bk-content">
									<p>Whale catfish leatherjacket deep sea anglerfish grenadier sawfish pompano dolphinfish carp large-eye bream, squeaker amago. Sandroller; rough scad, tiger shovelnose catfish snubnose parasitic eel? Black bass soldierfish duckbill--Rattail Atlantic saury Blind shark California halibut; false trevally warty angler!</p>
								</div>
								<div class="bk-content">
									<p>Trahira giant wels cutlassfish snapper koi blackchin mummichog mustard eel rock bass whiff murray cod. Bigmouth buffalo ling cod giant wels, sauger pink salmon. Clingfish luderick treefish flatfish Cherubfish oldwife Indian mul gizzard shad hagfish zebra danio. Butterfly ray lizardfish ponyfish muskellunge Long-finned sand diver mullet swordfish limia ghost carp filefish.</p>
								</div>
							</div>
							<div class="bk-back">
								<img src="images/3.png" alt="cat"/>
								<p>Holden Catfield is a seventeen-year-old dropout who has just been kicked out of his fourth school. Navigating his way through the challenges of growing up, Holden dissects the 'phony' aspects of society.</p>
							</div>
							<div class="bk-right"></div>
							<div class="bk-left">
								<h2>
									<span>J.C. Salinger</span>
									<span>The Catcher in the Rye</span>
								</h2>
							</div>
							<div class="bk-top"></div>
							<div class="bk-bottom"></div>
						</div>
						<div class="bk-info">
							<button class="bk-bookback">Flip</button>
							<button class="bk-bookview">View inside</button>
							<h3>
								<span>J.C. Salinger</span>
								<span>The Catcher in the Rye</span>
							</h3>
							<p>Originally published for adults, this novel has since become popular with adolescent readers for its themes of cat confusion, angst, alienation, and rebellion.</p>
						</div>
					</li>
				</ul>
			</div>
		</div><!-- /container -->
		<script src="{{ asset('js/jquery.min.js') }}"></script>
		<script src="{{ asset('js/books1.js') }}"></script>
		<script>
			$(function() {

				Books.init();

			});

			$(function(){
  $(window).scroll(function(){
    var winTop = $(window).scrollTop();
    if(winTop >= 30){
      $("body").addClass("sticky-header");
    }else{
      $("body").removeClass("sticky-header");
    }//if-else
  });//win func.
});//ready func.
		</script>
	</body>
</html>
