<?php
/**
 * @package UP Share
 */
/*
Plugin Name: Viral Sharing Buttons by UP
Version: 1.0.3
Author: UP
Author URI: http://www.upshare.co
Description: The Viral Sharing Buttons from UP change the way sites go viral. Users share content from your site and earn points they can cash in for cool stuff.
License: GPLv2 or later
*/

function setup_theme_admin_menus() {
	
    add_menu_page(__('UP','menu-test'), __('UP','menu-test'), 'manage_options', 'upshare-settings-page', 'upshare_settings' , plugins_url( 'viral-sharing-buttons-by-up/images/menu-icon2.png' ) );
   
   $partner_id = get_option("partner_id");   
    
	if($partner_id=="") {
    add_submenu_page('upshare-settings-page',
        'UPshare', 'Signup for UP', 'manage_options',
        'signup_upshare_page', 'upshare_sub_settings');
	}
	
		
}
add_action("admin_menu", "setup_theme_admin_menus");

function upshare_sub_settings(){

wp_redirect( "http://www.upshare.co/partners/plugin/sign_up" ); 
exit;	

}

function upshare_settings() {

?>
<?php
$partnerValue = false;

// Check that the user is allowed to update options
if (!current_user_can('manage_options')) {
wp_die('You do not have sufficient permissions to access this page.');
}

if (isset($_POST["update_settings"]))
{
// Do the saving

$partner_id = esc_attr($_POST["partner_id"]);
update_option("partner_id", $partner_id);
update_option('upshare_notice',1);

?>
<div id="message" class="updated">
	Settings saved
</div>
<?php
$partnerValue = true;

}
else
{
//in case form not submitted

$partner_id = get_option("partner_id");

}
?>

<!-- HTML GOES HERE -->

<?php if( $partner_id!="") { ?>

<style>
	#upshare_notice {
		display: none;
	}
</style>

<div class="wrap">

	<section id="upheader">

		<div id="upwrapper">
			<div class="logo"><img src="<?php echo plugins_url('images/logo.png', __FILE__); ?>">for Wordpress
			</div>
			<div class="text-right pull-right" style="display:none;">
				Need an account?<a href="http://www.upshare.co/partners/wp/sign_up/" target="_blank"><b> Sign Up</b></a>
			</div>
			<div class="border-image"><img src="<?php echo plugins_url('images/border-img.png', __FILE__); ?>">
			</div>
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
				<h1>UP is currently configured on your site</h1>
				<div align="center" style="padding-top: 10px;">
					<a class="partner-botton" href="http://www.upshare.co/partners/sign_in?" target="_blank">My Dashboard</a>
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
					<img src="<?php echo plugins_url('images/yes-icon.png', __FILE__); ?>">
					<h1>Install the Widget</h1>
					<p>
						UP;s cloud-based responsive sharing widget combines lightening-fast load time with one-of-a-kind value for your users
					</p>

				</div>

				<div class="widget-first">
					<img src="<?php echo plugins_url('images/yes-icon.png', __FILE__); ?>">
					<h1>Sync your Free Account</h1>
					<p>
						Sign up as an UP partner for free, then enter your partner ID above to give your users points for sharing your content, and get access to the UP Partner Dashboard
					</p>

				</div>

				<div class="widget-second1">
					<h1>Go Viral</h1>
					<p>
						The formula for going viral is simple: produce good content, and give users a good reason to share it. You take care of the content. UP takes care of the rest.
					</p>

				</div>
			</div>

			<div align="center">

				<iframe src="//player.vimeo.com/video/105724953?byline=0" width="600" height="338" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
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

</div>

<?php } else { ?>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<div class="wrap">

	<section id="upheader">
		<div id="upwrapper">
			<div class="logo"><img src="<?php echo plugins_url('images/logo.png', __FILE__); ?>">for Wordpress
			</div>
			<div class="text-right pull-right">
				Need an account?<a href="https://www.upshare.co/partners/sign_up?origin=wp#signupForm" target="_blank" onClick="ga('send', 'event', 'Widget Settings', 'Signup Click 1', 'WP Sharing Button Widget V2')"><b> Sign Up</b></a>
			</div>
			<div class="border-image"><img src="<?php echo plugins_url('images/border-img.png', __FILE__); ?>">
			</div>
		</div>
	</section>

	<section id="syncfree">
		<div id="upwrapper">
			<div class="widget-main-content">
				<h1>Sync Your Free UP Partner Account</h1>
				<p>
					<a href="https://www.upshare.co/partners/sign_up?origin=wp#signupForm" target="_blank" onClick="ga('send', 'event', 'Widget Settings', 'Signup Click 2', 'WP Sharing Button Widget V2') ">Create a free account</a> and then enter your partner ID below.  Now every time users share content from your site, they’ll get points they can redeem for cool stuff and you’ll get viral data you can’t get anywhere else online.
				</p>
			</div>
		</div>
	</section>

	<section id="partner-id">
		<div id="upwrapper">
			<div class="partner-id-main-contant">
				<h1>SYNC YOUR ACCOUNT BY PastING your FREE partner id:</h1>
				<form method="POST" action="">
					<input type="text" class="partner-input numbersOnly" name="partner_id" placeholder="ex. 12345" value="<?php echo $partner_id; ?>">
					<input type="hidden" name="update_settings" value="Y" />
					<input  class="partner-botton"  type="submit" value="Sync UP Account">
				</form>
			</div>
			<div class="widget-main-content pull-right" style="margin-top:20px;margin-bottom:0px;"><p>Need a partner ID? <a href="https://www.upshare.co/partners/sign_up?origin=wp#signupForm" target="_blank" onClick="ga('send', 'event', 'Widget Settings', 'Signup Click 3', 'WP Sharing Button Widget V2')">Create a free account.</a></p></div>
			
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
            <div style="padding-top:20px;"><a class="small-button"  href="https://www.upshare.co/partners/sign_up?origin=wp#signupForm" target="_blank" onClick="ga('send', 'event', 'Widget Settings', 'Signup Click 4', 'WP Sharing Button Widget V2')">Get Your Free Partner ID</a></div>
        </div>
        <div class="col-md-7 video">
          <iframe style="width: 565px; height: 346px;" src="//fast.wistia.net/embed/iframe/5xojp2qqt1?videoFoam=true" allowtransparency="true" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen="allowfullscreen" mozallowfullscreen="mozallowfullscreen" webkitallowfullscreen="webkitallowfullscreen" oallowfullscreen="oallowfullscreen" msallowfullscreen="msallowfullscreen" frameborder="0" height="346" width="565"></iframe><script src="//fast.wistia.net/assets/external/iframe-api-v1.js"></script>
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
						<img class="img-responsive text-center center-block" src="<?php echo plugins_url('images/partner-slider-1.png', __FILE__); ?>">
					</div>
					<div class="item">
						<img class="img-responsive text-center center-block" src="<?php echo plugins_url('images/partner-slider-2.png', __FILE__); ?>">
					</div>
					<div class="item">
						<img class="img-responsive text-center center-block" src="<?php echo plugins_url('images/partner-slider-3.png', __FILE__); ?>">
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="content" style="margin-top:-70px;">
		<div id="upwrapper">

			<div class="main-widgets-box">
				<div class="widget-first">
					<img src="<?php echo plugins_url('images/yes-icon.png', __FILE__); ?>">
					<h1>Install the Widget</h1>
					<p>
						UP;s cloud-based responsive sharing widget combines lightening-fast load time with one-of-a-kind value for your users
					</p>

				</div>
				<div class="widget-second">
					<h1>Sync your Free Account</h1>
					<p>
						Sign up as an UP partner for free, then enter your partner ID above to give your users points for sharing your content, and get access to the UP Partner Dashboard
					</p>

				</div>
				<div class="widget-third">
					<h1>Go Viral</h1>
					<p>
						The formula for going viral is simple: produce good content, and give users a good reason to share it. You take care of the content. UP takes care of the rest.
					</p>
				</div>
			</div>
			
			<div class="text-center" style="padding-top:40px;clear:both">
			<a class="large-button" href="https://www.upshare.co/partners/sign_up?origin=wp#signupForm" target="_blank" onClick="ga('send', 'event', 'Widget Settings', 'Signup Click 5', 'WP Sharing Button Widget V2')">Get Your Free Partner ID</a>
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
								<img class="img-responsive text-center center-block" src="<?php echo plugins_url('images/partner-metrics-slider-1.png', __FILE__); ?>">
							</div>
							<div class="item">
								<img class="img-responsive text-center center-block" src="<?php echo plugins_url('images/partner-metrics-slider-2.png', __FILE__); ?>">
							</div>
							<div class="item">
								<img class="img-responsive text-center center-block" src="<?php echo plugins_url('images/partner-metrics-slider-3.png', __FILE__); ?>">
							</div>
							<div class="item">
								<img class="img-responsive text-center center-block" src="<?php echo plugins_url('images/partner-metrics-slider-4.png', __FILE__); ?>">
							</div>
							<div class="item">
								<img class="img-responsive text-center center-block" src="<?php echo plugins_url('images/partner-metrics-slider-5.png', __FILE__); ?>">
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
					<img src="<?php echo plugins_url('images/partner-widget.png', __FILE__); ?>">

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
			<a class="large-button" href="https://www.upshare.co/partners/sign_up?origin=wp#signupForm" target="_blank"  onClick="ga('send', 'event', 'Widget Settings', 'Signup Click 6', 'WP Sharing Button Widget V2')">Get Your Free Partner ID</a>
			</div>
			
		</div>
	</section>
	<!-- end block 4 -->
	<!-- begin block 5 -->

	<!-- end block 5 -->

<section id="syncfree" style="margin-top:0px;">
		<div id="upwrapper">
			<div class="widget-main-content">
				<h1>Got Your Partner ID? Sync Your Account.</h1>
				<p>
					<a href="https://www.upshare.co/partners/sign_up?origin=wp#signupForm" target="_blank" onClick="ga('send', 'event', 'Widget Settings', 'Signup Click 7', 'WP Sharing Button Widget V2') ">Create a free account</a> and then enter your partner ID below.  Now every time users share content from your site, they’ll get points they can redeem for cool stuff and you’ll get viral data you can’t get anywhere else online.
				</p>
			</div>
		</div>
	</section>

	<section id="partner-id">
		<div id="upwrapper">
			<div class="partner-id-main-contant">
				<h1>SYNC YOUR ACCOUNT BY PastING your FREE partner id:</h1>
				<form method="POST" action="">
					<input type="text" class="partner-input numbersOnly" name="partner_id" placeholder="ex. 12345" value="<?php echo $partner_id; ?>">
					<input type="hidden" name="update_settings" value="Y" />
					<input  class="partner-botton"  type="submit" value="Sync UP Account">
				</form>
			</div>
			<div class="widget-main-content pull-right" style="margin-top:20px;margin-bottom:0px;"><p>Need a partner ID? <a href="https://www.upshare.co/partners/sign_up?origin=wp#signupForm" target="_blank" onClick="ga('send', 'event', 'Widget Settings', 'Signup Click 8', 'WP Sharing Button Widget V2')">Create a free account.</a></p></div>
			
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
	ga('send', 'event', 'Widget Settings', 'Page View', 'WP Sharing Button Widget V2')

</script>

<?php

}
?>

<!-- HTML GOES HERE -->

<?php

}

function addScriptCodeToHead()
{

$partner_id = get_option("partner_id");

if($partner_id)
{
echo '<script src="//widget.upshare.co/up-load.js?partnerid='.$partner_id.'" id="UPWidget"></script>';
}
else{
echo '<script src="//widget.upshare.co/up-load.js?" id="UPWidget"></script>';
}

}

add_action('wp_head' , 'addScriptCodeToHead' );

function addStyleScripts()
{
wp_register_script( 'upshare-script', plugins_url( '/js/script.js', __FILE__ ) );
wp_enqueue_script( 'upshare-script' );

wp_register_style( 'upshare-style', plugins_url( '/css/style.css', __FILE__ ) );
wp_enqueue_style( 'upshare-style' );

}
add_action( 'admin_enqueue_scripts', 'addStyleScripts' ,15 );

function admin_notice_message(){

$partner_id = get_option("partner_id");
$upshare_notice =  get_option("upshare_notice");

if($partner_id==""){
if($upshare_notice==""){
echo '<div class="updated" id="upshare_notice"><p>
Note - Users will only get rewarded for sharing your content if you sign up as a UP Partner.<br/>
<a href="https://www.upshare.co/partners/wp/sign_up/" target="_blank"> Sign up here </a>  |  <a href="" id="closeNotice" onclick="return removeNotice();">Ignore this notice</a>
</p></div>';
}
}

}

add_action('admin_notices', 'admin_notice_message');

function route() {
$uri = $_SERVER['REQUEST_URI'];
$uri_parse = parse_url( $uri );
$protocol = isset( $_SERVER['HTTPS'] ) ? 'https' : 'http';
$hostname = $_SERVER['HTTP_HOST'];
$url = "{$protocol}://{$hostname}{$uri}";
$method = $_SERVER['REQUEST_METHOD'];
$is_post = !!( $method == "POST" );
parse_str( $_SERVER['QUERY_STRING'], $params );

if( basename( $uri_parse['path'] ) == 'admin.php' && isset( $params['page'] ) && $params['page'] == 'signup_upshare_page' ) {
wp_redirect( "http://www.upshare.co/partners/wp/sign_up/", 301 ); exit;
}

if( $is_post && isset( $_REQUEST['_wpnonce'] ) ) {
if( wp_verify_nonce( $_REQUEST['_wpnonce'], 'UP Share Settings Page' . '_admin_options' ) ) {
//$this->_submit_admin_options();
}
}
}

add_action('init','route');
?>
<?php
add_action( 'admin_head', 'my_action_javascript' );

function my_action_javascript() {
?>
<script type="text/javascript" >
		function removeNotice()
	{
	var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>
		';

		// This does the ajax request
		jQuery.ajax({
		url: ajaxurl,
		data: {
		'action':'my_action',
		},
		success:function(data) {
		// This outputs the result of the ajax request
		jQuery('#upshare_notice').hide();
		// alert("ajax works");
		},
		error: function(errorThrown){
		console.log(errorThrown);
		}
		});

		return false;
		}
</script>
<?php
}

add_action( 'wp_ajax_my_action', 'my_action_callback' );

function my_action_callback() {

update_option('upshare_notice',1);

die(); // this is required to return a proper result
}

function myplugin_deactivation()
{
delete_option('upshare_notice');
delete_option('partner_id');
}

register_deactivation_hook(__FILE__, 'myplugin_deactivation');

function myplugin_activation()
{
add_option('upshare_notice',"");
add_option('partner_id',"");

}

register_activation_hook(__FILE__, 'myplugin_activation');
?>
