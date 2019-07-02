<!DOCTYPE html>
<html>
	<head>
		<title>duve creative</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="description" content="duve creative">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link href="css/project/main.css" rel="stylesheet" type="text/css" />
		<link href="css/fontawesome/releases/v.5.8.1/css/all.css" rel="stylesheet" type="text/css" />


	</head>
	<body>

		<noscript><div class="page-container"></noscript>
		<script> if (window.innerWidth < 768 ) { document.writeln('<div class="page-container js">'); } else { document.writeln('<div class="page-container js work">'); } </script>

			<div id="about" class="about">
				<?php include '_menu.php';?>
				<div class="wrapper">
					<h3>Hi, I'm Michael Duve.</h3>
					<p>I’m a UX/UI Designer and Developer based out of Charlotte, NC. I have a passion for creating and building transformative, digital experiences. </p>
					<p>Want to get in touch? Feel free to <a href="#contact" class="button button-link js-link">drop me a line</a> or <a href="downloads/070119-Resume-UCD.pdf" target="_blank" class="button button-link">download my resume</a>.</p>
				</div>
			</div>
			<div id="work" class="work">
				<div id="design" class="design">
					<div class="inner inner--left">
						<?php include '_menu.php';?>
						<?php include '_toggle-work.php';?>
					</div>
					<div class="outer outer--left">
						<div class="image-container">
							<div class="cover for-proj-detail" value="ux-dispatch">
								<img class="img" src="projects/ux-dispatch/cover.png">
								<div class="dets">
									<span class="title">IAA Dispatch</span>
									<span>Research, UX, UI, IxD</span>
								</div>
								<?php include '_project_ux_dispatch.php';?>
							</div>

							<div class="cover for-proj-detail" value="ux-stock-cancellation">
							    <img class="img" src="projects/ux-stock-cancellation/cover.png">
							    <div class="dets">
							        <span class="title">IAA Stock Cancellation</span>
							        <span>Research, UI, IxD, Strategy</span>
							    </div>
								<?php include '_project_ux_stock-cancellation.php';?>
							</div>

							<div class="cover for-proj-detail" value="ux-support-dashboard">
							    <img class="img" src="projects/ux-support-dashboard/cover.png">
							    <div class="dets">
							        <span class="title">IAA Support Dashboard</span>
							        <span>Research, UI, IxD, Strategy</span>
							    </div>
								<?php include '_project_ux_support-dashboard.php';?>
							</div>

						</div>
 						<div class="detail-container">
						 	<?php include '_project_ux_details.php';?>
						</div>
					</div>
				</div>
				<div id="develop" class="develop">
					<div class="inner inner--right">
						<?php include '_toggle-work.php';?>
					</div>
					<div class="outer outer--right">
						<div  class="image-container">
							<div class="cover for-proj-detail" value="ui-dispatch">
								<img class="img" src="projects/ui-dispatch/cover.png">
								<div class="dets">
									<span class="title">IAA Dispatch</span>
									<span>HTML, CSS + Angular</span>
								</div>
								<?php include '_project_ui_dispatch.php';?>
							</div>
							<div class="cover for-proj-detail" value="ui-bricks">
						    	<img class="img" src="projects/ux-bricks/cover.png">
						    	<div class="dets">
									<span class="title">Bricks Inc Website</span>
									<span>Brand, Inform. Architecture, IxD, CMS</span>
								</div>
								<?php include '_project_ui_bricks.php';?>
							</div>
							<div class="cover for-proj-detail" value="ui-iaa-standardization">
							    <img class="img" src="projects/ui-iaa-standardization/cover.png">
							    <div class="dets">
									<span class="title">IAA Modernization</span>
									<span>HTML, CSS + Javascript</span>
								</div>
								<?php include '_project_ui_standardization.php';?>
							</div>
							<div class="cover for-proj-detail" value="ui-gps">
								<img class="img" src="projects/ui-gps/cover.png">
								<div class="dets">
									<span class="title">GPS Website</span>
									<span>CMS Wordpress</span>
								</div>
								<?php include '_project_ui_gps.php';?>
							</div>
						</div>
						<div class="detail-container">
						 	<?php include '_project_ui_details.php';?>
						</div>
					</div>
				</div>
			</div>
			<div id="detail"></div>
			<div id="contact" class="contact">
				<?php include '_menu.php';?>


				<div id="message-warning" style="display:none;">
				</div>
	
				<div id="message-success" style="display:none;">
					Your message was sent, thank you!
				</div>

				<div class="wrapper">
					<h3>Work With Me.</h3>

					<form class="contact__form" method="post" action="mailer.php">
						<div class="row">
							<div class="col-12 col-sm-6 col-md-6 col-lg-6 mb-2">
								<div class="form-field">
									<input name="name" type="text" class="form-control" placeholder="Name" required>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-md-6 col-lg-6 mb-2">
								<div class="form-field">
									<input name="email" type="email" class="form-control" placeholder="Email" required>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-md-6 col-lg-6 mb-2">
								<div class="form-field select">
									<select name="inquiry" class="form-control" required>
										<option value="" disabled selected>What is your business inquire?</option>
										<option value="UX">Branding</option>
										<option value="UX">UX Design</option>
										<option value="FED">UI Development</option>
									</select>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-md-6 col-lg-6 mb-2">
								<div class="form-field">
									<input name="subject" type="text" class="form-control" placeholder="Subject" required>
								</div>
							</div>
							<div class="col-12 mb-2">
								<div class="form-field">
									<textarea name="message" class="form-control" rows="3" placeholder="Message" required></textarea>
								</div>
							</div>
							<div class="col-12 mb-2">
								<div class="form-field">
									<input name="submit" type="submit" class="button button-primary" value="Send Message">
								</div>
							</div>
							<div class="col-12 col-sm-6 mb-2">
								<div class="g-recaptcha" data-sitekey="6Lf6CHoUAAAAAEEvZfLRIUXl93mimp1lt5RwNlux"></div>
							</div>

						</div>
					</form>
				</div>


			</div>
			<div class="overlay"></div>
		</div>



		<script src="js/jquery/jquery-3.3.1.min.js"></script>
		<script src="js/hammerjs/hammer.js"></script>
		<script src="js/popper/v.1.14.7/popper.min.js"></script>
		<script src="js/bootstrap/v.4.3.1/bootstrap.min.js"></script>
		<script src="js/pdfobject/v.2.1.1/pdfobject.js"></script>

		<script src="js/plugins/plugins.js"></script>
		<script src="js/custom.js"></script>

		<script src='https://www.google.com/recaptcha/api.js'></script>


		<script type="text/javascript">
			var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
			document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
		</script>
		<script type="text/javascript">
			try {
				var pageTracker = _gat._getTracker("UA-7708547-1");
				pageTracker._trackPageview();
			} catch (err) {}
		</script>


	</body>
</html>
