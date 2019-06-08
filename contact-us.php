<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <?php include('includes/includes.html') ?>
        <style>
			.contact-active,.contact-active:visited{
				color: #FFCC33 !important;
			}
		</style>
    </head>
    <body>
    <div class="contact-us-banner">
    	
    </div>
      <?php include('includes/header1.html') ?>
      
      <div class="contact-us-icon wow fadeIn" data-wow-duration="2s">
      		<img src="img/contact-us-icon.png">
      	</div>
      	
      	
	<div class="contact-us-heading wow zoomIn" data-wow-duration="2s" data-wow-delay="0.3s">
      		CONTACT <b>US</b>
      	</div>
      	
      	<div class="yellow-line wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s" style="text-align: center;">
      		<img src="img/yellow-link-new.png">
      	</div>
      	
      	
	<div class="head wow zoomInLeft" data-wow-duration="2s" data-wow-delay="0.3s">
		 <img src="img/contact-marker.png" style="padding-right: 20px;"> Super Knit Industries
	</div>
      	
    <div class="contact-para-one wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s">
    	
348, A to Z Industrial Estate, G.K. Marg, Lower Parel, Mumbai,<br> Maharashtra - 400 013, India

    </div>
    
    <div class="contact-para-two wow fadeIn hidden-xs" data-wow-duration="2s" data-wow-delay="0.3s">
    	Telephone: +(91)-(22)-40046920  &nbsp; &nbsp;|&nbsp; &nbsp;  Fax: +(91)-(22)-40046910 &nbsp; &nbsp; | &nbsp; &nbsp; Email: <a href="mailto:info@superknit.com" style="text-decoration: none;">info@superknit.com</a>
    </div>
    
    <div class="contact-para-two wow fadeIn visible-xs" data-wow-duration="2s" data-wow-delay="0.3s">
    	Telephone: +(91)-(22)-40046920  &nbsp; &nbsp;&nbsp; &nbsp; <br> Fax: +(91)-(22)-40046910 &nbsp; &nbsp;  &nbsp; &nbsp; <br> Email: <a href="mailto:info@superknit.com" style="text-decoration: none;">info@superknit.com</a>
    </div>
    
    <div class="contact-para-three wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s">
    	Please fill out the form below to get in touch with us
    </div>
    
    <form method="post" action="demomailcontact.php" enctype="multipart/form-data" id="cntc-form">
<div class="container-fluid">

<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-4 col-xs-10 col-lg-offset-3 col-md-offset-3 col-sm-offset-2 col-xs-offset-1">
			
    	<input type="text" name="Forename" class="form-control textbox" placeholder="Forename" data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"  data-validation-error-msg="This Field is required"/>
    	<span class="astrek">*</span>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-4 col-xs-10 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-1">
			
		<input type="text" name="Surname" class="form-control textbox" placeholder="Surname" data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"  data-validation-error-msg="This Field is required"/>
			<span class="astrek">*</span>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-4 col-xs-10 col-lg-offset-3 col-md-offset-3 col-sm-offset-2 col-xs-offset-1">
			
    	<input type="text" name="Organisation" class="form-control textbox" placeholder="Organisation" data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"  data-validation-error-msg="This Field is required"/>	<span class="astrek">*</span>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-4 col-xs-10 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-1">
			
		<input type="text" name="Address" class="form-control textbox" placeholder="Address"/>
		</div>
	</div>
	
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-4 col-xs-10 col-lg-offset-3 col-md-offset-3 col-sm-offset-2 col-xs-offset-1">
			
    	<input type="text" name="Email" class="form-control textbox" placeholder="Email" data-validation="required" data-validation-error-msg="This Field is required"/>
    		<span class="astrek">*</span>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-4 col-xs-10 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-1">
			
		<input type="text" name="Phone" class="form-control textbox" placeholder="Phone"/>
		</div>
	</div>
	
	
	<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-10 col-lg-offset-4 col-md-offset-4 col-sm-offset-3 col-xs-offset-1">
		<div>
			<textarea name="ask" class="form-control textbox" placeholder="Please use the given space to ask any specific questions or give us your comments" style="text-align: center; height: 100px; padding-top: 6%;"></textarea>
		</div>
		</div>
	</div>
	
	<div class="row" style="padding-top: 15px;padding-bottom: 15px;">
		<div class="col-lg-12 col-md-12 col-sm-12 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-10 col-xs-offset-1">
		<div class="submit-button">
		<input type="submit" id="form-submit" style="display: none;"/>
		<a class="btn btn-primary1" style="background-color: #FFCC33;" onclick="document.getElementById('form-submit').click();">SUBMIT</a>
	</div>
	
	
		</div>
	</div>
	
</div>
</form>

    
      <?php include('includes/footer.html') ?>
    
       <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
       

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/plugins.js"></script>
         
         
    
         
        <script src="js/main.js"></script>
        <script src="js/vendor/wow.min.js"></script>
       <script>
              new WOW().init();
              </script>
        <script>
          	$('#nav1').affix({
      offset: {
        top: $('.contact-us-banner').height()-$('#nav1').height()
      }
});	

          </script>
          <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.2.1/jquery.form-validator.min.js"></script>
	<script>
	 $.validate();
</script>	
          <script>
         	$(document).ready(function(){
         		$(".submit-form").on("click",function(){
         			$("#cntc-form").submit();
         		});
         	});
         	
         </script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
        
     
 	
    </body>
</html>

