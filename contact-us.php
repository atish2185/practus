<?php 
require_once ("recaptcha/recaptchalib.php");
$error = '';
$success = '';

$captcha_req = 0; // to enable the recaptcha set it to 1


if(!empty($_POST['sbutton'])) {  //After submitting form

		if( $captcha_req == 1 ) { // Checking captcha is enable

			$privatekey = "6LcOmTQUAAAAAASC8pQ7Vi5zD46rcmzsgmol0Ttn"; //secret Key

		  	$resp = recaptcha_check_answer($privatekey, $_SERVER["REMOTE_ADDR"], @$_POST["recaptcha_challenge_field"],@$_POST["recaptcha_response_field"]);
		  	if (!$resp->is_valid) {

					// What happens when the CAPTCHA was entered incorrectly
					echo "<script>javascript:Recaptcha.reload();</script>"; // reload captcha
					$error = "Sorry, the verification code wasn't entered correctly. Try again.";

			}else{

				//$to  = 'sreejit.nair@practusinc.com';
			  $to  = 'sreejipractus@gmail.com';

				$subject = $_POST['name']." Contacted through ".$_SERVER['HTTP_HOST'];

				$message = '<html><body>';
			
				$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
				$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
				$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
				$message .= "<tr><td><strong>Phone Number:</strong> </td><td>" . strip_tags($_POST['phone']) . "</td></tr>";
				$message .= "<tr><td><strong>Company:</strong> </td><td>" . strip_tags($_POST['type']) . "</td></tr>";
				$message .= "<tr><td><strong>Reference :</strong> </td><td>" . $_POST['where'] . "</td></tr>";
				$message .= "<tr><td><strong>Message:</strong> </td><td>" . htmlentities($_POST['message']) . "</td></tr>";
				$message .= "</table>";
				$message .= "</body></html>";

				$headers = "From: " . strip_tags($_POST['email']) . "\r\n";
				$headers .= "MIME-Version: 1.0\r\n";
				$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
				
			 //Something to write to txt log
				 //$log  = "<br/>To : ".$to.PHP_EOL."<br/>".
				 			//"From: ".$_POST['email'].PHP_EOL."<br/>".
				 			//"Subject: ".$subject.PHP_EOL."<br/>".
				 			//"Message: ".$message.PHP_EOL."<br/>".
							//"--------------------------------------------------------------------------------------------------------------------------------------------".PHP_EOL."<br/>";
				// //Save string to log, use FILE_APPEND to append.
				// @file_put_contents('log_'.date("j.n.Y").'.html', $log, FILE_APPEND);
				
				
					// Email log end
				if(mail($to, $subject, $message, $headers)){
					$success = "Thanks for contacting us.";
				}else{
					$error = "Sorry, we are unable to process your request.";
				}

			}
		}else{ // if the captcha is disable

				//$to  = 'sreejit.nair@practusinc.com';
				$to  = 'sreejipractus@gmail.com';

				$subject = $_POST['name']." Contacted through ".$_SERVER['HTTP_HOST'];

				$message = '<html><body>';
				
				$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
				$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
				$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
				$message .= "<tr><td><strong>Phone Number:</strong> </td><td>" . strip_tags($_POST['phone']) . "</td></tr>";
				$message .= "<tr><td><strong>Company:</strong> </td><td>" . strip_tags($_POST['type']) . "</td></tr>";
				$message .= "<tr><td><strong>Reference :</strong> </td><td>" . $_POST['where'] . "</td></tr>";
				$message .= "<tr><td><strong>Message:</strong> </td><td>" . htmlentities($_POST['message']) . "</td></tr>";
				$message .= "</table>";
				$message .= "</body></html>";

				$headers = "From: " . strip_tags($_POST['email']) . "\r\n";
				$headers .= "MIME-Version: 1.0\r\n";
				$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
				//Something to write to txt log
				// $log  = "<br/>To : ".$to.PHP_EOL."<br/>".
				// "From: ".$_POST['email'].PHP_EOL."<br/>".
				 //"Subject: ".$subject.PHP_EOL."<br/>".
				 //"Message: ".$message.PHP_EOL."<br/>".
				// "--------------------------------------------------------------------------------------------------------------------------------------------".PHP_EOL."<br/>";
				 //Save string to log, use FILE_APPEND to append.
				// @file_put_contents('log_'.date("j.n.Y").'.html', $log, FILE_APPEND);
				if(mail($to, $subject, $message, $headers)){
					$success = "Your email has been successfully sent and we appreciate you contacting us. We'll be in touch soon.";
				}else{
					$error = "Sorry, we are unable to process your request.";
				}

		}
}?>
<?php require("header.php"); ?>
   <!--  Header Area End Here -->
    <!-- Slider Area Start Here -->
		<div class="contact-banner-bg">
			<div class="container">
				<div class="row">
					<div class="header-banner">
						<h1>Contact Us</h1>
					</div>
					<div class="breadcum">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li>/ Contact Us</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!--<div class="team">
			<img class="img-w" src="img/slider/team-banner.jpg" alt="" title="" />
		</div>-->
      
    <!-- Slider Area End Here -->
	
	<div class="homepage-contact-us-area">
       
		<div class="container-fluid main-contact-address-page-area">
			<div class="container">
				<div class="row">
					<h2>Our Locations</h2>
					
					
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="address-box">
							<h3>USA</h3>
							<div class="row m-bot-20px" style="padding-left: 12px;">
								<div class="icon-img"><img src="img/location-icon.png"></div>
								<div class="addr-text">214 West, 29th Street,<br>Floor 2, New York, NY 10001, <br> USA
</div>
							</div>
							<div class="row" style="padding-left: 12px;">
								<div class="icon-img"><a href="tel:+1 (314) 452-5461"><img src="img/con-phone-icon.png"></a></div>
								<div class="phone-text">
									<!-- +1 (314) 452-5461<br> -->
									+1 646-463-2457 <br>
								</div>
							</div>
							
							
						</div>
					</div>
					
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="address-box">
							<h3>UK</h3>
							<div class="row m-bot-20px" style="padding-left: 12px;">
								<div class="icon-img"><img src="img/location-icon.png"></div>
								<div class="addr-text">2, Wollaton Vale, Nottingham, NG8 2NR <br>United Kingdom</div>
							</div>
							
							
							
							<div class="row" style="padding-left: 12px;">
								<div class="icon-img"><a href="tel:+44 07884587071"><img src="img/con-phone-icon.png"></a></div>
								<div class="phone-text">+44 07884587071<br>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="address-box">
							<h3>UAE</h3>
							<div class="row m-bot-20px" style="padding-left: 12px;">
								<div class="icon-img"><img src="img/location-icon.png"></div>
								<div class="addr-text">112, Level 1,

C1 Building,<br>Dubai World Trade Center District, Sheikh Zayed Road, Dubai</div>
								
							</div>
							<div class="row" style="padding-left: 12px;">
								<div style="float:left;width:30px;"><a href="tel:+971 552921449"><img src="img/con-phone-icon.png"></a></div>
								<div class="phone-text">+971 552921449</div>
							</div>
							

						</div>
					</div>
					
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="address-box">
							<h3>India</h3>
							<div class="row m-bot-20px" style="padding-left: 12px;">
								<div style="float:left;width:30px;"><img src="img/location-icon.png"></div>
								<div class="addr-text">18th Floor – The Ruby, Senpati Bapat Marg, Dadar (West), Mumbai, <br>India
</div>
							</div>
							
							<div class="row" style="padding-left: 12px;">
								<div style="float:left;width:30px;"><a href="tel:+91 9029524092"><img src="img/con-phone-icon.png"></a></div>
								<div class="phone-text">+91 9029524092
								</div>
							</div>
						</div>
					</div>
				</div>
				
				
				
				<div class="row">
					<div class="col-md-12 foot-link">
						<img src="img/email-icon.png"><span><a href="mailto:corporate@practusinc.com">corporate@practusinc.com</a></span></div>
							
					</h2>
				</div>
				
				
			</div>
		</div>
		
		
		
		
		 <div class="container-fluid acurate">
            <div class="row">
                <div class="homepage-contact-us-area">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 map">
                        <!--<iframe class="map-bor" src="https://www.google.com/maps/d/u/0/embed?mid=1VpDweFQRgg2j36y3Ls5nZ5RGUj8" width="100%" height="480" frameborder="0"></iframe>-->
						<h2>Careers</h2>
						<h4>Our people and our work culture make Practus a great place to work! Our team is a great blend of Youth and Experience</h4>
						<h3>Practus may just be the perfect place for you.</h3>
						<h3>Email your resume at <a href="mailto:corporate@practusinc.com">corporate@practusinc.com</a></h3>
						
						
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 contact-area">
						<h2>How Can We Help You!</h2>
                        <div class="contact-form">
							<form id="contact-form" class="contact-form" role="form" novalidate="true" method="POST">
								<?php  if(!empty($error) && $error != ''){ ?>
										<div class="alert alert-danger">
											<p><?= $error; ?></p>
										</div>
								<?php } ?>
									<?php  if(!empty($success) && $success != ''){ ?>
										<div class="alert alert-success">
											<p><?= $success; ?></p>
										</div>
								<?php } ?>
								<fieldset>
									<div class="clearfix">
									<div class="col-sm-12">
										<div class="form-group">
											<input type="text"  name="name" placeholder="Name" class="form-control-con" id="form-name">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<input type="text" placeholder="Company Name"  name="type" class="form-control-con" id="form-type">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<input type="email" placeholder="Email" name="email" class="form-control-con" id="form-email" >
										</div>
									</div></div>
									<div class="clearfix"></div>
									<div class="col-sm-6">
										<div class="form-group">
											<!-- <input type="text" placeholder="Where did you hear about us?" class="form-control" name="where" id="form-where"> -->
										<select name="where" id="form-where" class="form-control-con" >
											<option value="">Where did you hear about us?</option>
											<option value="Web Search">Web Search</option>
											<option value="Emailer">Emailer</option>
											<option value="Social Media">Social Media</option>
											<!--<option value="Twitter">Twitter</option>-->
											<option value="LinkedIn">LinkedIn</option>
											<option value="Existing Customer">Existing Customer</option>
											<option value="Event">Event</option>
											<option value="Others">Others</option>
										</select>	
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<input name="phone" type="text" placeholder="Phone" class="form-control-con" id="form-phone">
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group has-error has-danger">
											<textarea name="message" placeholder="Message/Query" class="textarea form-control-con" id="form-message" rows="5" cols="20"></textarea>
										</div>
									</div>
									<?php if( $captcha_req == 1 ) { ?>
                                    <div class="col-sm-6">
										<div class="form-group">
									   		<div class="g-recaptcha" data-sitekey="6LcOmTQUAAAAALUeaqqIVjwm8Y15XhhuxbiCUAey"></div>
									   		<!-- Site Key -->
							
                                        </div>
                                    </div>
                                    <?php } ?>
									
									<div class="col-sm-12">
										<button type="submit" name="sbutton" value="Send" class="btn ">Send</button>
									</div>
								</fieldset>
							</form>
						</div>
                    </div>
                </div>
            </div>
        </div>
		
		
    </div>
    
	
	
	
  
	
	
	
<?php require("footer.php"); ?>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="js/jquery.validate.min.js" ></script>
<script>
$(function(){
	 $("#contact-form").validate(
		 {
		  rules: {
			name: {
			  minlength: 3,
			  required: true
			},
			email: {
			  required: true,
			  email: true
			},
			phone: {
			  minlength: 10,
			  required: true,
			  number: true
			},
			type: {
			  minlength: 4,
			  required: true
			},
			message: {
			  minlength: 16,
			  required: true
			},
			where: {
			  required: true
			}
		  },
		  highlight: function(label) {
			$(label).closest(".form-group").addClass("error");
		  },
		  success: function(label) {
			label
			  .addClass("valid")
			  .closest(".form-group").addClass("success");
		  }
		 });

		$("button").click(function(event){
				   var recaptcha = $("#g-recaptcha-response").val();
				   if (recaptcha === "") {
				      event.preventDefault();
				      alert("Please check the recaptcha");
				   }
		});
		 
});

</script>
