
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
	<img src="images/clientsbanner.jpg">
 </div>
 <!--about div end-->
 
<div class="clients">
	<div class="clients-center">
		<div class="container-fluid">
		  <div class="row"> 
			<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h1>our clients</h1>
			</div>
             <div class=" col-xs-12 col-sm-4 col-md-2 col-lg-2">
				<img src="images/client1.png">
				<h2>client name</h2>
			 </div>
			 <div class=" col-xs-12 col-sm-4 col-md-2 col-lg-2">
				<img src="images/client2.png">
				<h2>client name</h2>
			 </div>
			 <div class=" col-xs-12 col-sm-4 col-md-2 col-lg-2">
				<img src="images/client3.png">
				<h2>client name</h2>
			 </div>
			 <div class=" col-xs-12 col-sm-4 col-md-2 col-lg-2">
				<img src="images/client4.png">
				<h2>client name</h2>
			 </div>
			 <div class=" col-xs-12 col-sm-4 col-md-2 col-lg-2">
				<img src="images/client5.png">
				<h2>client name</h2>
			 </div>
			 <div class=" col-xs-12 col-sm-4 col-md-2 col-lg-2">
				<img src="images/client6.png">
				<h2>client name</h2>
			 </div>
			 <div class="clear"></div>
			 
			  <div class=" col-xs-12 col-sm-4 col-md-2 col-lg-2">
				<img src="images/client1.png">
				<h2>client name</h2>
			 </div>
			 <div class=" col-xs-12 col-sm-4 col-md-2 col-lg-2">
				<img src="images/client2.png">
				<h2>client name</h2>
			 </div>
			 <div class=" col-xs-12 col-sm-4 col-md-2 col-lg-2">
				<img src="images/client3.png">
				<h2>client name</h2>
			 </div>
			 <div class=" col-xs-12 col-sm-4 col-md-2 col-lg-2">
				<img src="images/client4.png">
				<h2>client name</h2>
			 </div>
			 <div class=" col-xs-12 col-sm-4 col-md-2 col-lg-2">
				<img src="images/client5.png">
				<h2>client name</h2>
			 </div>
			 <div class=" col-xs-12 col-sm-4 col-md-2 col-lg-2">
				<img src="images/client6.png">
				<h2>client name</h2>
			 </div>
			 <div class="clear"></div>
			 
			  <div class=" col-xs-12 col-sm-4 col-md-2 col-lg-2">
				<img src="images/client1.png">
				<h2>client name</h2>
			 </div>
			 <div class=" col-xs-12 col-sm-4 col-md-2 col-lg-2">
				<img src="images/client2.png">
				<h2>client name</h2>
			 </div>
			 <div class=" col-xs-12 col-sm-4 col-md-2 col-lg-2">
				<img src="images/client3.png">
				<h2>client name</h2>
			 </div>
			 <div class=" col-xs-12 col-sm-4 col-md-2 col-lg-2">
				<img src="images/client4.png">
				<h2>client name</h2>
			 </div>
			 <div class=" col-xs-12 col-sm-4 col-md-2 col-lg-2">
				<img src="images/client5.png">
				<h2>client name</h2>
			 </div>
			 <div class=" col-xs-12 col-sm-4 col-md-2 col-lg-2">
				<img src="images/client6.png">
				<h2>client name</h2>
			 </div>
			 <div class="clear"></div>
			 
		  </div>
	    </div>		
	</div>
</div>	
<?php include 'footer.php'; ?>