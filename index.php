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

<!--slider section start-->
<div class="slider">
 		<section class="jk-slider">
    <div id="carousel-example" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example" data-slide-to="1"></li>
    <li data-target="#carousel-example" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner">
    <div class="item active">
      <a href="#"><img src="images/4.jpg" /></a>
      	<!--div class="hero">
        <hgroup>
            <h1>Providing Quality Tax Services For You</h1>        
             <hr class="borderwhite-sm2">
             
        </hgroup>
        
      </div-->
    </div>
    <div class="item">
     <a href="#"><img src="images/about.jpg" /></a>
      
    </div>
    <div class="item">
      <a href="#"><img src="images/3.jpg" /></a>
      
    </div>
  </div>

  <a class="left carousel-control" href="#carousel-example" data-slide="prev">
    
     <img class="nexticonme glyphicon glyphicon-chevron-left"  src="images/next.png">
  </a>
  <a class="right carousel-control" href="#carousel-example" data-slide="next">
    
     <img class="nexticonme glyphicon glyphicon-chevron-right" src="images/prev.png">
  </a>
 
            
</div>
	
</section>
</div>    
<!--slider section end-->

<!--homesection div start-->
<div class="homesection">
	<div class="homesection-center">
    	<div class="container-fluid">
			 <div class="row"> 
            	<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12">	
                	<h1> Welcome To N.K. Tyagi & Associates</h1>
                      <hr class="borderwhite-sm2">
                       <p>We are a Proprietorship firm which was established in 2001 and we have provided services in the areas of accounting, taxation and legal to our clients Delhi-NCR.</p>
					   <p>
					   N.K. tyagi & Associates was established with the aim of providing value added professional services. We represent the Consortium of Knowledge and Experience in the Arena of Financial & Legal Consultancy and Tax Management. We believe in upholding highest standards of business ethics with complete commitment to total quality. We have knowledge in each field of the services that we offer. We take great pride in the confidence and respect that we have earned from our clients and strive to improve everyday.
					   </p>
                </div>
           </div>      
		</div>
    </div>
</div>    
<!--homesection div end-->


<!--homesection1 div start-->
<div class="homesection1">
	<div class="homesection1-center">
    	<div class="container-fluid">
			 <div class="row" style="overflow:hidden">  
            	<a href="javascript:void(0)"><div class=" col-xs-12 col-sm-6 col-md-4 col-lg-4 servicesdiv1 wow slideInLeft data-wow-duration='1s' data-wow-delay='0.2s'" style="visibility: visible; animation-name: slideInLeft;">	
                	<center><i class="fa fa-inr ser fa-2x" aria-hidden="true"></i></center>
                    <h2>Income tax</h2>
                    <p>We are stalwarts in offering Income Tax Services to our prestigious customers which are delivered accurately and precisely. 
                     </p> 
                </div></a>
                <a href="javascript:void(0)"><div class=" col-xs-12 col-sm-6 col-md-4 col-lg-4 servicesdiv6  wow fadeInLeft data-wow-duration='1s' data-wow-delay='0.2s'" style="visibility: visible; animation-name: fadeInLeft;">
                	<center><i class="fa fa-bars ser fa-2x" aria-hidden="true"></i></center>
                    <h2>GOODS AND SERVICES TAX (GST)</h2>
                    <p>Goods and Services Tax (GST) is an indirect tax which was introduced in India on 1 July 2017 and was applicable throughout India. 
                     </p>
                </div></a>
                
                
                <a href="javascript:void(0)"><div class=" col-xs-12 col-sm-6 col-md-4 col-lg-4 servicesdiv3 wow slideInRight data-wow-duration='1s' data-wow-delay='0.2s'" style="visibility: visible; animation-name: slideInRight;">	
                	<center><i class="fa fa-calculator ser fa-2x" aria-hidden="true"></i></center>
                    <h2>Tally accounting</h2>
                    <p>Emphasizing on increased demands of our services in the market, we have started to provide Accounting Services to manage accounts of the clients. 
                     </p>
                </div></a>
				
				<div class="clear"></div>
				<a href="javascript:void(0)"><div class=" col-xs-12 col-sm-6 col-md-4 col-lg-4 servicesdiv4 wow slideInLeft data-wow-duration='1s' data-wow-delay='0.2s'" style="visibility: visible; animation-name: slideInLeft;">	
                	<center><i class="fa fa-file-o ser fa-2x" aria-hidden="true"></i></center>
                    <h2>Data entry</h2>
                    <p>Nk tyagi and associates is the preeminent supplier of back office administrative services, including online and offline data entry services .</p> 
                </div></a>
				
				
				<a href="javascript:void(0)"><div class=" col-xs-12 col-sm-6 col-md-4 col-lg-4 servicesdiv5 wow fadeInDown data-wow-duration='1s' data-wow-delay='0.2s'" style="visibility: visible; animation-name: fadeInDown;">	
                	<center><i class="fa fa-inr ser fa-2x" aria-hidden="true"></i></center>
                    <h2>T.D.S</h2>
                    <p>The concept of TDS was introduced with an aim to collect tax from the very source of income. As per this concept, a person (deductor) who is liable to make payment  
                     </p>
                </div></a>
				
				
				<a href="javascript:void(0)"><div class=" col-xs-12 col-sm-6 col-md-4 col-lg-4 servicesdiv6 wow slideInRight data-wow-duration='1s' data-wow-delay='0.2s'" style="visibility: visible; animation-name: slideInRight;">	
                	<center><i class="fa fa-crosshairs ser fa-2x" aria-hidden="true"></i></center>
                    <h2>Excise Duty</h2>
                   <p>With our rich industry experience and skilled professionals, we are providing Excise Consultancy Service to our clients. Our experts carefully understand 
                     </p>
                </div></a>
				
				<div class="clear"></div>
				
				
				
				<a href="javascript:void(0)"><div class=" col-xs-12 col-sm-6 col-md-4 col-lg-4 servicesdiv9 wow fadeInDown data-wow-duration='1s' data-wow-delay='0.2s'" style="visibility: visible; animation-name: fadeInDown;">	
                	<center><i class="fa fa-male ser fa-2x" aria-hidden="true"></i></center>
                    <h2>Tax Consultant</h2>
                    <p>our immense experience in the industry, we also provide important Income Tax Consultant services to our reliable clients.  
                     </p>
                </div></a>
				
				<a href="javascript:void(0)"><div class=" col-xs-12 col-sm-6 col-md-4 col-lg-4 servicesdiv8  wow slideInRight data-wow-duration='1s' data-wow-delay='0.2s'" style="visibility: visible; animation-name: slideInRight;">	
                	<center><i class="fa fa-money ser fa-2x" aria-hidden="true"></i></center>
                    <h2>E.S.I & P.F</h2>
                    <p>For the organizations based at Ghaziabad, we provide flexible and personalized ESI & PF services.  
                     </p>
                </div></a>

<div class="clear"></div>
				

                
           </div>      
		</div>
    </div>
</div>    
<!--homesection div end-->


<!--testimonial div start-->
<div class="testimonial-div">
	<div class="testimonial-div-center">
		
<section id="carousel">    				
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
                <div class="quote"><i class="fa fa-quote-left fa-4x"></i></div>
				<div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
				  <!-- Carousel indicators -->
                  <ol class="carousel-indicators">
				    <li data-target="#fade-quote-carousel" data-slide-to="0"></li>
				    <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
				    <li data-target="#fade-quote-carousel" data-slide-to="2" class="active"></li>
                    <li data-target="#fade-quote-carousel" data-slide-to="3"></li>
                   
				  </ol>
				  <!-- Carousel items -->
				  <div class="carousel-inner">
				    <div class="item">
                        
				    	<blockquote>
				    		<p>The unique approach to the Balance Sheet structuring by Nk tyagi and Associates has made us accessible to the best of funding available in the markets.</p>
							<h2> Mr. Rajeev aggarwal</h2>
				    	</blockquote>	
				    </div>
				    <div class="item">
                        
				    	<blockquote>
				    	<p>The professionalism and prompt response has helped us in scaling up fast. They have in fact become a virtual back office support for our organization.</p>
							<h2> Vikas bhargava</h2>
				    	</blockquote>
				    </div>
				    <div class="active item">
                         
				    	<blockquote>
				    		<p> Firms like Nk tyagi and Associates with their long term commitment and focus increasing operational efficiencies have helped us manage our rapid expansion.</p>
							<h2> Mr. Rajneesh Sha</h2>
				    	</blockquote>
				    </div>
                    <div class="item">
                        
    			    	<blockquote>
				    		<p>Very dedicated, efficient and purposeful who keeps on meeting whatever challenges are thrown on them…..</p>
							<h2> Vivek Shukla</h2>
				    	</blockquote>
				    </div>
                    
                   
				  </div>
				</div>
			</div>							
		</div>
	</div>
</section>
	</div>
</div>	
	
<!--testimonial div end-->

 <?php include 'footer.php'; ?>
 