@if(Session::has('key'))
@foreach(Session::get('key') as $test)
<!--{{$test->id}}-->
@endforeach
<?php 
	$i = 1;
	error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>LEADS | Farmer :: Remedy</title>
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
				<h2>View Remedy</h2>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- services -->
	<div class="welcome">
		<div class="container">
			<h3 class="agileits_w3layouts_head">View <span>Remedy</span> Here</h3>
			<div class="w3_agile_image">
				<img src="images/1.png" alt=" " class="img-responsive" />
			</div>
			<div class="col-md-12 text-right" style=" margin-bottom:3em; margin-top:3em;">
            	<form action="{{url('/FarmerRemedySearch')}}" method="post" enctype="multipart/form-data">
                 {{ csrf_field() }}
                    <select class="form-control1" name="SelDoctor" required style=" display:inline; margin-right:5em;">
                        <option value="">Select Doctor</option>
                        @foreach($doctor as $doctor)
                        <option value="{{$doctor->doc_id}}">{{$doctor->doc_name}}</option>
                        @endforeach
                    </select>
                    <input type="submit" class="btn btn-default" name="btnSubmit" value="Search Here" style=" display:inline;">
				</form>               
			</div>
            
			<div class="althide">
                @if($errors->any())
                    <h5>{{$errors->first()}}</h5>
                @endif
            </div> 
            
            <div class="clearfix"> </div>
			<div class="table-responsive bs-example ">
						<table class="table" id="example">
                        	<thead>
                            	<tr> 
                                	<th style="color: #e7eff0 !important;"></th> 
                                    <th>Issue</th> 
                                    <th>Solution</th> 
                                    <th>Description</th> 
                                    <th>Added On </th> 
                                    <th style="color: #e7eff0 !important;">Action</th> 
                              	</tr> 
                      		</thead> 
                            <tbody> 
                            
                            @foreach($data as $object)
								<tr> 
                                	<td><?php echo $i; ?> </td> 
                                    <td>{{ $object->Issue }}</td> 
                                    <td>{{ $object->Solution }}</td>
                                    <td>{{ $object->DoctorDescription }}</td>
                                    <td>{{ $object->regOn }}</td>
                                    <td>
                                        <a class="agile-icon" href="#" data-toggle="modal" data-target="#ViewRemedy-{{ $object->id }}">Details</a>
                                    </td> 
                               	</tr>
                                <?php $i++; ?>
                                 @include('farmer.ViewRemedy')
                               @endforeach
								
                            
  		                    </tbody> 
                        </table> 	
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