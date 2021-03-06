@if(Session::has('key'))
@foreach(Session::get('key') as $test)
<!--{{$test->id}}-->
@endforeach
<?php $i = 1; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>LEADS | Farmer :: Settings</title>
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
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--//Data table -->
<link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/fixedHeader.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/responsive.bootstrap.min.css">
<!--//Data table CSS -->
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
				@include('includes.farmerMenu');
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
					
				</ul>
			</div>
			<div class="w3layouts_breadcrumbs_right">
				<h2>Settings</h2>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- services -->
	<div class="welcome">
		<div class="container">
			<h3 class="agileits_w3layouts_head">Settings</h3>
			<div class="w3_agile_image">
				<img src="images/1.png" alt=" " class="img-responsive" />
			</div>
			<div class="col-md-12 text-right">
			<div class="althide">
                @if($errors->any())
                    <h5>{{$errors->first()}}</h5>
                @endif
            </div> 
            
            <div class="clearfix"> </div>
			<div class="table-responsive bs-example ">
            		<form action="{{url('/FartmerChPsw')}}" method="post">
						<table width="340" height="141" class="table">
                        {{ csrf_field() }}
                            <tbody> 
								<tr> 
                                	<td align="left">Usrename</td>
                                    <td>:</td>
                                    <td align="left">{{$test->Username}}</td>
                              	</tr> 
                                <tr> 
                                	<td align="left">Old Password</td>
                                    <td>:</td>
                                    <td align="left"><input type="password" name="txtoldPsw" /></td>
                              	</tr> 
                                <tr> 
                                	<td align="left">New Password</td>
                                    <td>:</td>
                                    <td align="left"><input type="password" name="txtnewPsw" /></td>
                              	</tr> 
                                <tr> 
                                	<td align="left">Confirm Password</td>
                                    <td>:</td>
                                    <td align="left"><input type="password" name="txtconPsw" /></td>
                              	</tr> 
                                <input type="hidden" name="txtfarmerId" value="{{$test->id}}" />
                                <tr> 
                                	<td></td>
                                    <td></td>
                                    <td align="left"><input type="submit" name="btnSubmit" value="Change Password" /></td>
                              	</tr> 
		                    </tbody> 
                        </table> 	
              </form>   
          </div>
		</div>
	</div>
<!-- //services -->

<!-- footer -->
		@include('includes.footer');
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
        <!--DATATABLES STARTS HERE-->
    
        <script type="text/javascript" language="javascript" src="js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" language="javascript" src="js/dataTables.bootstrap.min.js"></script>
		<script type="text/javascript" language="javascript" src="js/dataTables.fixedHeader.min.js"></script>
		<script type="text/javascript" language="javascript" src="js/dataTables.responsive.min.js"></script>
		<script type="text/javascript" language="javascript" src="js/responsive.bootstrap.min.js"></script>
        <script type="text/javascript">
            /* Data table js */

(function( $ ) {

	 var table = $('#example').DataTable( {

        /* responsive: true, */

		/* 'pageLength': 2 */

		 /* "dom": '<"pull-left"f><"clear"><"pull-top"l>tip', */

		 "dom": '<"pull-left"f><"clear"><"top"i>rt<"bottom"lp><"clear">'

/*    "dom": '<"top"i>rt<"bottom"flp><"pull-left"f><"clear">'  */

 /*  "dom": '<"top"i>rt<"top"flp><"pull-left"f><"clear">' */

    } );

	new $.fn.dataTable.FixedHeader( table );

  })(jQuery);
  
  (function( $ ) {

	 var table = $('#examplesub').DataTable( {

        /* responsive: true, */

		/* 'pageLength': 2 */

		 /* "dom": '<"pull-left"f><"clear"><"pull-top"l>tip', */

		 "dom": '<"pull-left"f><"clear"><"top"i>rt<"bottom"lp><"clear">'

/*    "dom": '<"top"i>rt<"bottom"flp><"pull-left"f><"clear">'  */

 /*  "dom": '<"top"i>rt<"top"flp><"pull-left"f><"clear">' */

    } );

	new $.fn.dataTable.FixedHeader( table );

  })(jQuery);
  </script>
<!-- //here ends scrolling icon -->
</body>
</html>
@endif