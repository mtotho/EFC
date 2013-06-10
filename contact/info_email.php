<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">

<!-- #BeginTemplate "master.dwt" -->

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- #BeginEditable "doctitle" -->
<title>Thank You!</title>
<!-- #EndEditable -->
<link rel="stylesheet" title="CSS" type="text/css" href="../styles/style1.css" media="screen" />
</head>

<body>
<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$visitor_email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['content'];

$email_from = 'eileen@eileenflynnconsulting.com';
$email_subject = "Information Request";
$email_body = "You have received a new contact form submission\n".
							"Name: $fname $lname.\n".
							"Phone: $phone \n".
							"Email: $visitor_email \n \n".
                            "Here is the message:\n $message";
                            
$to ="eileen@eileenflynnconsulting.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);                            


?>

<!-- Begin Container -->
<div id="container"><br />
	<!-- Begin Masthead -->
	<div id="masthead">
		<img src="../images/celticSymbol.jpg" alt="Your Company Logo Here" height="200" width="75" />
		<img id="_head" src="../images/header.gif" alt="Eileen Flynn Consulting - Focusing on people to accelerate business results"  width="525"/>
		<p>
		office (732) 774-7419<br />
		moblie (267) 614-3612<br />
		<a href="mailto:eileen@eileenflynnconsulting.com">
		eileen@eileenflynnconsulting.com</a>
		</p>
	</div>
	<!-- End Masthead -->
	<!-- Begin Navigation -->
	<div id="navigation">
		<ul>
			<li><a href="../default.htm"><strong>Home</strong></a></li>
			<li><a href="../about/about.htm"><strong>About Us</strong></a></li>
			<li><a href="../services/services.htm"><strong>Services</strong></a></li>
			<li><a href="../failure_stories/failure_stories.htm"><strong>Failure Stories</strong></a></li>
			<li><a href="../resources/resources.htm"><strong>Resources</strong></a></li>
			<li><a href="contact.htm"><strong>Contact Us</strong></a></li>
		</ul>
	</div>
	<!-- End Navigation -->
	<!-- Begin Page Content -->
	<div id="page_content">
		<!-- Begin Left Column -->
		<div id="column_l">
			<!-- #BeginEditable "content" -->
			<center><h2>Thank you for your submission!</h2></center>
			
			<center><p>We will respond as soon as possible and look forward to hearing from you again.</p></center>
			<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
			<!-- #EndEditable -->
		</div>
		<!-- End Left Column -->
		<!-- End Right Column --->
		<div id="column_r">
			<!-- #BeginEditable "sidebar" -->
			<!-- #EndEditable -->
		</div>
		<!-- End Right Column --></div>
	<!-- End Page Content -->
	<!-- Begin Footer -->
	<div id="footer">
		<p>
		<a href="../default.htm">Home</a> | 
		<a href="../about/about.htm">About Us</a> |
		<a href="../services/services.htm">Services</a> |
		<a href="../failure_stories/failure_stories.htm">Failure Stories</a> |
		<a href="../resources/resources.htm">Resources</a> |
		<a href="../contact/contact.htm">Contact Us</a> <br />
		Copyright © 2011 Eileen Flynn Consulting, LLC. All Rights Reserved.
		</p>
	</div>
	<!-- End Footer -->
	</div>
<!-- End Container -->

</body>

<!-- #EndTemplate -->

</html>
