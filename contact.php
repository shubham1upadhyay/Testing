
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
	<img src="images/contactbanner.jpg">
 </div>
 <!--about div end-->
 
 <div class="contact">
	<div class="contact-center">
		<div class="container-fluid">
		  <div class="row"> 
			<div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<img class="contactnk" src="images/contactnk.jpg" style="width:100%">
			</div>
			<div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<h2>NK Tyagi & Associates </h2>
				<p><strong> Contact Person :</strong> 	Navin Kumar Tyagi</p>
				<p><strong> Address :</strong> 	16, Prem Enclave, Opp. D.P.S.School, Near Kailash Hospital, Meerut Road, Ghaziabad</p>
				<p><strong> Contact No :</strong> +91-9311211051, 9999924828</p>
				<p><strong> Email :</strong> navintyagi1974@gmail.com , Navintyagi963@gmail.com</p>
				<p><strong> Customer Care :</strong> 	+91-9999924828 </p>
				<p> <a href="#"><img src="images/social1.png"> </a>  &nbsp &nbsp <a href="#"> <img src="images/social2.png"></a>  </p>
			</div>
			
			<!--<div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<h2>Enquiry</h2> 
				<ul class="contactmypage-ul20">
							 <form id="sendemail" class="form-book" name="form1" method="post" action="enq2.php" onSubmit="return fieldchkme(this);">  
							 <li><input type="text" name="name" id="name" placeholder="  Name" required=""></li>  
							 
							 <li><input type="email" name="mailus" id="name" placeholder="Email*" required=""></li>  
							  
							 <li><input type="phone" name="mobile" id="name" placeholder="Phone" required=""></li>  
							 
							 <li><textarea rows="5" cols="100" name="msg" required="" placeholder="Message*" id="message"></textarea></li>
							 <input type="submit" name="submit"   id="sub2" value="send now">  
						 </form>
							<div class="clear"></div>	  
          
       				 </ul>
					 
			</div>-->
			
		</div>	
	  </div>	
	</div>
</div>	

<div class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14000.968190201967!2d77.42970753604023!3d28.68240524311958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cf10871015d07%3A0x6e8487cc2b8bff90!2sN.K.+Tyagi+%26+Associates!5e0!3m2!1sen!2sin!4v1475595726302" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
 
</div> 
 
 <?php include 'footer.php'; ?>
 
 
 