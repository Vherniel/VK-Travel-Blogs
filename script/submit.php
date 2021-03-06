<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/reset.css">
    <link rel="stylesheet" type="text/css" href="../css/contacts.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="../images/favicon.png">
    <title>Messege has been sent!</title>
  </head>
  <body>
    <div id="page-content">
      <!--  Navigation Menu  -->
      <nav id="nav-menu">
        <div id="nav-container">
          <!--  LOGO  -->
          <a id="page-logo" href="../index.html">
            <span id="logo-vherniel">Vherniel</span><span id="logo-kean">Kean<div class="trademark">&trade;</div></span>
            <div id="logo-subtitle">Travel Blogs&nbsp;</div>
          </a>
          <!--  Navigation Menu Links  -->
          <ul id="nav-ul">
            <li><a href="../index.html">Home</a></li>
            <li><a href="../page/gallery.html">Gallery</a></li>
            <li><a href="../page/contacts.html" style="color: #37A1FF;">Contacts</a></li>
            <li><a href="../page/about.html">About</a></li>
          </ul>
        </div>
      </nav>
      <!--  Spacer  -->
      <div class="spacer">&nbsp;</div>
      <main>
        <div class="container">
          <h2>Your messege has been sent!</h2>
          <?php
          $comment = 'From: '.$_POST["firstName"].' '.$_POST["lastName"].'\n'.'E-mail: '.$_POST["eMail"].'\n'.$_POST["comment"];

          $comment = wordwrap($comment, 60);

          mail("vherniel11@gmail.com", "V&K Travel Blogs", $comment);

/*          $msg = wordwrap($msg, 60);

          mail("email", "subj", $msg)*/

          echo 'Thank You <em>'.$_POST["firstName"].' '.$_POST["lastName"].'</em> for reaching us! '.'<br>Your messege has been sent.';
          ?>
          <br><br><br><a href="../index.html">Click here to return to homepage.</a>
        </div>
      </main>
      <!--  Footer  -->
			<footer id="footer">
				<!--  Main-footer  -->
				<section id="main-footer">
					<div class="container-free">
						<div id="footer-logo-wrapper">
							<!--  Footer Logo  -->
							<a id="footer-logo" href="../index.html">
								<span id="footer-vherniel">Vherniel</span><span id="footer-kean">Kean<div class="trademark">&trade;</div></span>
								<div id="footer-subtitle">Travel Blogs&nbsp;</div>
							</a>
						</div>
						<!--  Footer Navigation Links  -->
						<div id="footer-nav-wrapper">
							<h3 id="footer-nav-label">Navigate</h3>
							<ul id="footer-nav-ul">
								<li><a href="../index.html">Home</a></li>
								<li><a href="../page/gallery.html">Gallery</a></li>
								<li><a href="../page/contacts.html">Contacts</a></li>
								<li><a href="../page/about.html">About</a></li>
							</ul>
						</div>
						<!--	Footer Contact Links	-->
						<div id="footer-contacts-wrapper">
							<h3 id="footer-contacts-label">Contact us</h3>
							<ul>
								<li><a href="#">info@vk-travel-blogs.com</a></li>
								<li><a href="#">09368254723 | 9906230</a></li>
							</ul>
						</div>
						<!--	Footer Social Links	 -->
						<div id="footer-social-wrapper">
							<h3 id="footer-social-label">Follow us</h3>
							<ul>
								<li><a class="fa fa-facebook" href="#"></a></li>
								<li><a class="fa fa-twitter" href="#"></a></li>
								<li><a class="fa fa-instagram" href="#"></a></li>
								<li><a class="fa fa-google" href="#"></a></li>
							</ul>
						</div>
					</div>
				</section>
				<!--  Secondary-footer  -->
				<section id="secondary-footer">
					<div class="container">
						<p>Copyright &copy; 2018 V&amp;K Travel Blogs&trade; All rights reserved.&nbsp;<a href="https://github.com/Vherniel/VK-Travel-Blogs">Visit code in GitHub.</a><a href="https://github.com/Vherniel/VK-Travel-Blogs/blob/master/LICENSE">License.</a></p>
					</div>
				</section>
			</footer>
		</div>
	</body>
</html>
