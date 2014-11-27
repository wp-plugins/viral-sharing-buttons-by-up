<!-- HTML GOES HERE -->
<?php if( $partner_id != "") { ?>
<style>#upshare_notice {display: none;}</style>
<div class="wrap">
	<section id="upheader">
		<div id="upwrapper">
			<div class="logo"><img src="<?php echo $this->_plugin_url . '/images/logo.png'; ?>">for Wordpress</div>
			<div class="text-right pull-right" style="display:none;">
				Need an account?<a href="http://www.upshare.co/partners/sign_up?origin=wp&source=v3#signupForm" target="_blank"><b> Sign Up</b></a>
			</div>
			<div class="border-image"><img src="<?php echo $this->_plugin_url . '/images/border-img.png'; ?>"></div>
		</div>
	</section>
	<section id="got-widget">
		<div id="upwrapper">
			<div class="widget-main-content">
				<h1>You've got the widget - now go viral with<span> UP </span></h1>
				<p style="padding-left:40px;padding-right:40px;">
						Every time users share content from your site, they'll get points they can redeem for cool stuff and you'll get viral data you can't get anywhere else.
				</p>
			</div>
		</div>
	</section>
	<section id="partner-id">
		<div id="upwrapper">
			<div class="partner-id-main-contant1">
				<h1>VISIT YOUR DASHBOARD TO CHOOSE THE PLACEMENT OF YOUR SHARING BUTTONS</h1>
				<div align="center" style="padding-top: 10px;">
					<a class="partner-botton" href="http://www.upshare.co/partners/home" target="_blank">My Dashboard</a>
				</div>
			</div>
		</div>
	</section>
	<!--<section id="partner-id">
		<div class="upwrapper">
		<div class="partner-bottom"><p>Where can I get my Partner ID?</p></div>
		</div>
	</section>-->
	<section id="main-widgets">
		<div id="upwrapper">
			<div class="main-widgets-box">
				<div class="widget-first">
					<img src="<?php echo $this->_plugin_url . '/images/yes-icon.png'; ?>">
					<h1>Install the Widget</h1>
					<p>
						UP;s cloud-based responsive sharing widget combines lightening-fast load time with one-of-a-kind value for your users
					</p>
				</div>
				<div class="widget-first">
					<img src="<?php echo $this->_plugin_url . '/images/yes-icon.png'; ?>">
					<h1>Sync your Free Account</h1>
					<p>
						Sign up as an UP partner for free, then enter your partner ID above to give your users points for sharing your content, 
						and get access to the UP Partner Dashboard
					</p>
				</div>
				<div class="widget-second1">
					<h1>Select Your Placement</h1>
					<p>
						Your UP Partner Dashboard gives you quick and easy control over the placement of your sharing buttons, as well as tons 
						of other powerful features that can help you go viral.
					</p>
				</div>
			</div>
			<div align="center">
				<div style="max-width:650px;clear:both;padding-top:20px;">

          <div class="up-video-container">
          <iframe id="updemo" src="//player.vimeo.com/video/105724953?title=0&amp;byline=0&amp;portrait=0" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
		</div>		 
			 <div align="center" style="padding-top:15px;">
			  <button id="unmute" class="play-sound-button">Play Sound</button>
			</div>
 
				</div>
			</div>
		</div>
	</section>
	<section id="footer" class="upshare_footer">
			<div id="upwrapper">
				<div class="row">
					<div class="footer-text">
						<p>
							<a href="https://www.upshare.co/partners/sign_up?origin=wp" target="_blank">Learn More About <b>UP</b></a>
						</p>
					</div>
				</div>
			</div>
	</section>
</div><!-- end class="wrap" -->
<?php } else { ?>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/bootstrap/3.3.0/css/bootstrap.min.css">
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://cdn.jsdelivr.net/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	
	<div class="wrap">
	
		<section id="upheader">
			<div id="upwrapper">
				<div class="logo"><img src="<?php echo $this->_plugin_url . '/images/logo.png'; ?>">for Wordpress
				</div>
				<div class="text-right pull-right">
					Need an account?<a href="http://www.upshare.co/partners/sign_up?origin=wp&source=v3#signupForm" target="_blank" onClick="ga('send', 'event', 'Widget Settings', 'Signup Click 1', 'WP Sharing Button Widget V3')"><b> Sign Up Free</b></a>
				</div>
				<div class="border-image"><img src="<?php echo $this->_plugin_url . '/images/border-img.png'; ?>">
				</div>
			</div>
		</section>
	
		<section id="syncfree">
			<div id="upwrapper">
				<div class="widget-main-content">
					<h1>Get Your Free UP Partner Account</h1>
					<p>
						<a href="http://www.upshare.co/partners/sign_up?origin=wp&source=v3#signupForm" target="_blank" onClick="ga('send', 'event', 'Widget Settings', 'Signup Click 2', 'WP Sharing Button Widget V3') ">Create a free account</a> in less than 30 seconds.  Now every time users share content from your site, they’ll get points they can redeem for cool stuff and you’ll get viral data you can’t get anywhere else online.
					</p>
					
					<div class="text-center" style="padding-top:40px;clear:both">
				<a class="large-button" href="http://www.upshare.co/partners/sign_up?origin=wp&source=v3#signupForm" target="_blank"  onClick="ga('send', 'event', 'Widget Settings', 'Signup Click 3', 'WP Sharing Button Widget V3')">Create Your Free Account</a>
				</div>
					
				</div>
			</div>
		</section>

	
	<section id="content">
			<div id="upwrapper">
	
	      <div class="row">
	        <div class="col-md-12">
	          <div class="up-copy up-big-copy text-center" style="font-size:55px;padding-top:0px;padding-bottom:20px;">Make Your Site More Viral
	          </div>
	        </div>
	      </div>
	      <div class="row">
	        <div class="col-md-5 left-copy" style="padding-top:20px;">
	          <div class="up-copy up-small-copy">
	            <p>The formula for going viral is simple:</p>
	            <p>Every user who sees your content needs to recruit one or more users for you.</p>
	            <p>To make this happen, users need a reason to share. <strong>That’s where we come in.</strong></p>
	          </div>
	            <div style="padding-top:20px;"><a class="small-button"  href="http://www.upshare.co/partners/sign_up?origin=wp&source=v3#signupForm" target="_blank" onClick="ga('send', 'event', 'Widget Settings', 'Signup Click 4', 'WP Sharing Button Widget V3')">Create Your Free Account</a></div>
	        </div>
	        <div class="col-md-7 video">
          <div class="up-video-container">
          <iframe id="updemo" src="//player.vimeo.com/video/105724953?title=0&amp;byline=0&amp;portrait=0" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
		</div>		 
			 <div align="center" style="padding-top:15px;">
			  <button id="unmute" class="btn btn-default">Play Sound</button>
			</div>
       	</div>
	      </div>
	  
			</div>
	
		</section>
	
		<!-- block 2 -->
		<section id="content">
			<div id="upwrapper">
				<div class="up-copy up-big-copy">
					Reward Users for Starting Conversations About Your Content on Social Media
				</div>
				<div class="up-copy up-small-copy text-center">
					<p>
						Every time your users share your content, they get points they can cash in for cool stuff in our store
					</p>
					<p>
						As their friends interact with that share, their points go up - <strong>and so does your traffic</strong>.
					</p>
				</div>
			</div>
		</section>
		<section id="content">
			<div id="upwrapper">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
					</ol>
					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
							<img class="img-responsive text-center center-block" src="<?php echo $this->_plugin_url . '/images/partner-slider-1.png'; ?>">
						</div>
						<div class="item">
							<img class="img-responsive text-center center-block" src="<?php echo $this->_plugin_url . '/images/partner-slider-2.png'; ?>">
						</div>
						<div class="item">
							<img class="img-responsive text-center center-block" src="<?php echo $this->_plugin_url . '/images/partner-slider-3.png'; ?>">
						</div>
					</div>
				</div>
			</div>
		</section>
	
		<section id="content" style="margin-top:-70px;">
			<div id="upwrapper">
	
				<div class="main-widgets-box">
					<div class="widget-first">
						<img src="<?php echo $this->_plugin_url . '/images/yes-icon.png'; ?>">
						<h1>Install the Widget</h1>
						<p>
							UP;s cloud-based responsive sharing widget combines lightening-fast load time with one-of-a-kind value for your users
						</p>
	
					</div>
					<div class="widget-second">
						<h1>Create Your Free Account</h1>
						<p>
							Sign up as an UP partner for free so that your users get points for sharing your content, and get access to the UP Partner Dashboard
						</p>
	
					</div>
					<div class="widget-third">
						<h1>Select Your Placement</h1>
					<p>
						Your UP Partner Dashboard gives you quick and easy control over the placement of your sharing buttons, as well as tons of other powerful features that can help you go viral.
					</p>
					</div>
				</div>
				
				<div class="text-center" style="padding-top:40px;clear:both">
				<a class="large-button" href="http://www.upshare.co/partners/sign_up?origin=wp&source=v3#signupForm" target="_blank" onClick="ga('send', 'event', 'Widget Settings', 'Signup Click 5', 'WP Sharing Button Widget V3')">Create Your Free Account</a>
				</div>
			</div>
		</section>
	
	
	
		<!-- end block 2 -->
		<!-- begin block 3 -->
		<section id="content">
			<div id="upwrapper">
				<div class="row">
					<div class="col-md-11 left-copy text-center">
						<div class="up-copy up-big-copy">
							Responsive, Lightening Fast Sharing Tools - Free
						</div>
						<div class="up-copy up-small-copy">
							<p>
								Get to know your users better than ever before with sharing data, geolocation, hashtag tracking, rewards analytics, and our Viral Achievements&trade; feature.
							</p>
							<p>
								Hear what your fans and followers are saying about you in real time with your viral activity feed.
							</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-11">
						<div id="metrics-carousel-div" class="carousel slide" data-ride="carousel">
							<!-- Indicators -->
							<ol class="carousel-indicators">
								<li data-target="#metrics-carousel-div" data-slide-to="0" class="active"></li>
								<li data-target="#metrics-carousel-div" data-slide-to="1"></li>
								<li data-target="#metrics-carousel-div" data-slide-to="2"></li>
								<li data-target="#metrics-carousel-div" data-slide-to="3"></li>
								<li data-target="#metrics-carousel-div" data-slide-to="4"></li>
							</ol>
							<!-- Wrapper for slides -->
							<div class="carousel-inner" id="metrics-carousel">
								<div class="item active">
									<img class="img-responsive text-center center-block" src="<?php echo $this->_plugin_url . '/images/partner-metrics-slider-1.png'; ?>">
								</div>
								<div class="item">
									<img class="img-responsive text-center center-block" src="<?php echo $this->_plugin_url . '/images/partner-metrics-slider-2.png'; ?>">
								</div>
								<div class="item">
									<img class="img-responsive text-center center-block" src="<?php echo $this->_plugin_url . '/images/partner-metrics-slider-3.png'; ?>">
								</div>
								<div class="item">
									<img class="img-responsive text-center center-block" src="<?php echo $this->_plugin_url . '/images/partner-metrics-slider-4.png'; ?>">
								</div>
								<div class="item">
									<img class="img-responsive text-center center-block" src="<?php echo $this->_plugin_url . '/images/partner-metrics-slider-5.png'; ?>">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end block 3 -->
		<!-- begin block 4 -->
	
		<section id="content" style="margin-top:-40px;">
			<div id="upwrapper">
				<div class="row">
					<div class="col-md-11 left-copy text-center">
						<div class="up-copy up-big-copy">
							Users Join UP With One Click Without Ever Leaving Your Site - and Earn Points Forever
						</div>
						<div class="up-copy up-small-copy">
							<p>
								Our responsive, cloud-based sharing widgets maximize sharing and data simultaneously.
							</p>
							<p>
								Users can sign up to get rewards for sharing with one click - without ever leaving your site.</br>
								From there, they share your content more often, and you get the data you need to win.
							</p>
						</div>
					</div>
				</div>
				<div class="row" style="padding-top:20px;">
					<div class="col-md-9 col-md-offset-2">
						<img src="<?php echo $this->_plugin_url . '/images/partner-widget.png'; ?>">
	
						<div style="float:right;width:80%">
							<div class="up-copy up-big-copy" style="text-align: left">
								Industry-Leading Widget Performance Stats
							</div>
							<p>
								You never want a widget that slows down your site, and you can rest assured that UP never will.
							</p>
							<ul style="margin-top: 25px;margin-bottom: 20px;">
								<li style="line-height: 40px;">
									153 kb size*
								</li>
	
								<li style="line-height: 40px;">
									Lightening fast load time
								</li>
	
								<li style="line-height: 40px;">
									Perfect Google PageScore
								</li>
							</ul>
							<p>
								* verified by Pingdom
							</p>
	
						</div>
	
					</div>
				</div>
				
				<div class="text-center" style="padding-top:40px;clear:both">
				<a class="large-button" href="http://www.upshare.co/partners/sign_up?origin=wp&source=v3#signupForm" target="_blank"  onClick="ga('send', 'event', 'Widget Settings', 'Signup Click 6', 'WP Sharing Button Widget V3')">Create Your Free Account</a>
				</div>
				
			</div>
		</section>
		<!-- end block 4 -->
		<!-- begin block 5 -->
	
		<!-- end block 5 -->
	
	<section id="syncfree" style="margin-top:0px;">
			<div id="upwrapper">
				<div class="widget-main-content">
					<h1>Get Your Free UP Partner Account</h1>
					<p>
						<a href="http://www.upshare.co/partners/sign_up?origin=wp&source=v3#signupForm" target="_blank" onClick="ga('send', 'event', 'Widget Settings', 'Signup Click 7', 'WP Sharing Button Widget V3') ">Create a free account</a> in less than 30 seconds.  Now every time users share content from your site, they’ll get points they can redeem for cool stuff and you’ll get viral data you can’t get anywhere else online.
					</p>
				</div>
			</div>
		</section>
	
	</div>
	<script>
		(function(i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r;
			i[r] = i[r] ||
			function() {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date();
			a = s.createElement(o), m = s.getElementsByTagName(o)[0];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore(a, m)
		})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
	
		ga('create', 'UA-47573483-1', 'auto');
		ga('send', 'event', 'Widget Settings', 'Page View', 'WP Sharing Button Widget V3')
	</script>
	<?php
	}
	?>
	
	<!-- HTML GOES HERE -->
