
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>nk </title>


<!--css links-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="css/animate.css">
 <!--js links-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
<script src="js/bootstrap-off-canvas-nav.js" type="text/javascript"></script>
<script>
    $(function(){
    $(".dropdown").hover(            
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            });
    });
    
	</script>
    
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script>
 
   <script src="js/wow.js"></script>
    <script>
              new WOW().init();
              </script>   
</head>

<?php include 'header.php'; ?>
  <!--about div start-->
 <div class="about">
	<img src="images/nk-banner.jpg">
 </div>
 <!--about div end-->
 
  <div class="download">
	<div class="download-center">
		<div class="container-fluid">
		  <div class="row"> 
		  <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h3>Download Forms</h3>
			</div>
			<div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<div class="download1">
					<a href="https://www.tin-nsdl.com/downloads/pan/download/Form_49A.PDF" target="_blank"><center>
					<i class="fa fa-download fa-2x" aria-hidden="true"></i></center>
					  <h2> pan form </h2></a>
				</div>
			</div>
			
			<div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<div class="download1">
					<a href=" https://www.tin-nsdl.com/services/tan/download/Form49b_22052012.pdf" target="_blank"><center>
					<i class="fa fa-download fa-2x" aria-hidden="true"></i></center> <h2>tan form </h2></a>
				</div>
			</div>
			
			<div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<div class="download1">
					<a href="https://www.tin-nsdl.com/downloads/pan/download/Request-for-New-PAN-Card-or-and-Changes-or-Correction-in-PAN-Data-Form.pdf" target="_blank"> <center>
					<i class="fa fa-download fa-2x" aria-hidden="true"></i></center><h2> pan correction form </h2></a>
				</div>
			</div>
			<div class="clear"></div>
			<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h3>Vat return form </h3>
			</div>
			 
				<div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<div class="download1">
					<a href="http://comtax.up.nic.in/vat/vf-eng/form%2024%20Eng.pdf" target="_blank"> <center>
					<i class="fa fa-download fa-2x" aria-hidden="true"></i></center><h2> Form -24 </h2></a>
				</div>
			</div>
			
			
				<div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<div class="download1">
					<a href="files/form-cst.xlsx" target="_blank"> <center>
					<i class="fa fa-download fa-2x" aria-hidden="true"></i></center><h2> Form- C s t</h2></a>
				</div>
			</div>
			
			
				<div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<div class="download1">
					<a href="http://comtax.up.nic.in/vat/vf-eng/Annexures_of_Consolidated_Details-_Form_LII.pdf" target="_blank"> <center>
					<i class="fa fa-download fa-2x" aria-hidden="true"></i></center><h2> Form - 52 </h2></a>
				</div>
			</div>
			
			<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h3>Challan Forms</h3>
			</div>
			
			<div class="clear"></div>
				 
			
			
				<div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<div class="download1">
					<a href="files/vat-challan.xls" target="_blank"> <center>
					<i class="fa fa-download fa-2x" aria-hidden="true"></i></center><h2> Vat challan</h2></a>
				</div>
			</div>
			
			
				<div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<div class="download1">
					<a href="files/income-tax-challan.xls" target="_blank"> <center>
					<i class="fa fa-download fa-2x" aria-hidden="true"></i></center><h2> income tax challan  </h2></a>
				</div>
			</div>
			 
			<div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<div class="download1">
					<a href="files/service-tax-challan.xls" target="_blank"> <center>
					<i class="fa fa-download fa-2x" aria-hidden="true"></i></center><h2> service tax challan </h2></a>
				</div>
			</div>
			
			
			<div class="clear"></div>
				
		  </div>
	   </div>	
	</div>   
</div>	