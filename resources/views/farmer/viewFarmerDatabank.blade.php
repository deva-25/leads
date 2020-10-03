
<!DOCTYPE html>
<html lang="en">
<head>
<title>LEADS | Farmer :: View Databank</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<script type="text/javascript" src="//maps.googleapis.com/maps/api/js"></script>
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Bree+Serif&amp;subset=latin-ext" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
	
<body>
<!-- banner -->
	<div class="banner1">
		<div class="container">
			<div class="w3_agileits_banner_main_grid">
				<div class="w3_agile_logo">
					<h1><a href=""><span>L</span>eads<i>Farmer Face</i></a></h1>
				</div>
				<div class="agile_social_icons_banner">
					<ul class="agileits_social_list">
						<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				
			</div>
		</div>
	</div>
<!-- banner -->
<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Germinate
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<img src="images/4.jpg" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, 
							nisi ut aliquid ex ea commodi consequatur? Quis autem 
							vel eum iure reprehenderit qui in ea voluptate velit 
							esse quam nihil molestiae consequatur, vel illum qui 
							dolorem eum fugiat quo voluptas nulla pariatur.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i></p>
					</div>
				</section>
			</div>
		</div>
	</div>
<!-- //bootstrap-pop-up -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="w3layouts_breadcrumbs_left">
				<ul>
					<li><a href="{{url('/farmer')}}">Login</a><span>/</span></li>
					<li>Register<span>/</span></li>
					<li><a href="{{url('/')}}">Home</a></li>
				</ul>
			</div>
			<div class="w3layouts_breadcrumbs_right">
				<h2>Register</h2>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- contact -->
	<div class="welcome">
		<div class="container">
			<h3 class="agileits_w3layouts_head">Farmers<span> Register</span> with us</h3>
			<div class="w3_agile_image">
				<img src="images/1.png" alt=" " class="img-responsive" />
			</div>
            <div class="althide">
                @if($errors->any())
                    <h5>{{$errors->first()}}</h5>
                @endif
            </div> 
            <div class="clearfix"> </div>
			<div class="w3ls_news_grids">
				<div class="col-md-12 w3_agile_mail_left">
					<div class="agileits_mail_grid_right1 agile_mail_grid_right1">
                    @foreach($data as $object)
						<form action="" method="post" enctype="multipart/form-data">
						{{ csrf_field() }}
							<span>
								<i>Name</i>
								<input type="text" name="txtName" placeholder=" " value="{{ str_limit($object->Name, 50) }}" required="">
							</span>
							<span>
								<i>Address</i>
								<textarea name="txtAddress" placeholder=" " required=""></textarea>
							</span>
                            <span>
								<i>DOB</i>
								<input type="date" name="txtDob" placeholder=" " required="">
							</span>
                            <span>
								<i>Sex</i>
                                <select name="farsex">
                                	<option value="">Select</option>
                                	<option value="Male">Male</option>
                                    <option value="female">Female</option>
                                </select>
							</span>
							<span>
								<i>Email</i>
								<input type="email" name="txtEmail" placeholder=" " required="">
							</span>
							<span>
								<i>Contact</i>
								<input type="text" name="txtContact" placeholder=" " required="">
							</span>
							<span>
								<i>Qualification</i>
								<input type="text" name="txtQuali" placeholder=" " required="">
							</span>
							<span>
								<i>Specialized In</i>
								<input type="text" name="txtSpec" placeholder=" " required="">
							</span>
							<span>
								<i>Toatal Area</i>
								<input type="text" name="txtExp" placeholder=" " required="">
							</span>
							<span>
								<i>About</i>
								<textarea name="txtAbout" placeholder=" " required=""></textarea>
							</span>
                            <span>
								<i>Username</i>
								<input type="text" name="txtUsername" placeholder=" " required="">
							</span>
                            <span>
								<i>Password</i>
                                <input type="password" name="txtPassword" placeholder=" " required="">
							</span>
							<span>
								<i>Image</i>
								 <input type="file" id="exampleInputFile"  name="image">
							</span>
							<div class="w3_submit">
								<input type="submit" name="btnSubmit" value="Register Now">
							</div>
						</form>
                        
                         @endforeach
					</div>
				</div>
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	
<!-- footer -->
	@include('includes.footer')
<!-- //footer -->
<!-- menu -->
	<script>
		$(function() {
			
			initDropDowns($("div.shy-menu"));

		});

		function initDropDowns(allMenus) {

			allMenus.children(".shy-menu-hamburger").on("click", function() {
				
				var thisTrigger = jQuery(this),
					thisMenu = thisTrigger.parent(),
					thisPanel = thisTrigger.next();

				if (thisMenu.hasClass("is-open")) {

					thisMenu.removeClass("is-open");

				} else {			
					
					allMenus.removeClass("is-open");	
					thisMenu.addClass("is-open");
					thisPanel.on("click", function(e) {
						e.stopPropagation();
					});
				}
				
				return false;
			});
		}
	</script>
<!-- //menu -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>