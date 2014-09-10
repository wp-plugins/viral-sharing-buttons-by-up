<?php
/**
 * @package UP Share
 */
/*
Plugin Name: UP Viral Sharing Buttons
Version: 1.0.2
Author: UP
Author URI: http://www.upshare.co
License: GPLv2 or later
*/

//When Plugin is  Activated


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
            <div id="message" class="updated">Settings saved</div>
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
#upshare_notice { display:none;}
</style>
    
    <div class="wrap">
    
<section id="header">

	<div class="wrapper">
            	<div class="logo"><a href="http://www.upshare.co"><img src="<?php echo plugins_url( 'images/logo.png' , __FILE__ ); ?>">for Wordpress</a></div>
                    <div class="text-right pull-right" style="display:none;">
                    	Need an account?<a href="http://www.upshare.co/partners/wp/sign_up/" target="_blank"><b> Sign Up</b></a>
			       </div>
                   <div class="border-image"><img src="<?php echo plugins_url( 'images/border-img.png' , __FILE__ ); ?>"></div>
        		</div> 
</section>

<section id="got-widget">
	<div class="wrapper">
            	<div class="widget-main-contant">
               		<h1>You've got the widget - now go viral with<span> UP </span></h1>
<p style="padding-left:40px;padding-right:40px;">Every time users share content from your site, they'll get points they can redeem for cool stuff and you'll get viral data you can't get anywhere else.</p>
         		</div>
     </div> 
</section>

<section id="partner-id">
	<div class="wrapper">
            	<div class="partner-id-main-contant1">
               		<h1>UP is currently configured on your site</h1>
                     <div align="center" style="padding-top: 10px;"><a class="partner-botton" href="http://www.upshare.co/partners/sign_in?" target="_blank">My Dashboard</a></div>
                 </div>
			</div>
</section>

<!--<section id="partner-id">
	<div class="wrapper">
             <div class="partner-bottom"><p>Where can I get my Partner ID?</p></div>
        </div> 
</section>-->

<section id="main-widgets">
	<div class="wrapper">
    
    <div class="main-widgets-box">
             <div class="widget-first">
             <img src="<?php echo plugins_url( 'images/yes-icon.png' , __FILE__ ); ?>">
             <h1>Install the Widget</h1>
<p>UP;s cloud-based responsive sharing widget combines lightening-fast load time with one-of-a-kind value for your users</p>
             
             
             
             
        	 </div>
             
             <div class="widget-first">
             <img src="<?php echo plugins_url( 'images/yes-icon.png' , __FILE__ ); ?>">
             <h1>Sync your Free Account</h1>
<p>Sign up as an UP partner for free, then enter your partner ID above to give your users points for sharing your content, and get access to the UP Partner Dashboard</p>
             
             
             

             
        	 </div>
             
             
             <div class="widget-second1">
             <h1>Go Viral</h1>
<p>The formula for going viral is simple: produce good content, and give users a good reason to share it. You take care of the content. UP takes care of the rest.</p>
             
        	 </div>
        	 </div> 
     </div> 
</section>

<section id="footer" class="upshare_footer">
	<div class="wrapper">
        <div class="row">
        <div class="footer-text">
            <p><a href="https://www.upshare.co/partners/sign_up" target="_blank">Learn More About <b>UP</b></a></p>
         </div>
         </div>
     </div> 
</section>
 
    </div>
    
        <?php } else { ?>

   
    <div class="wrap">

<section id="header">
	<div class="wrapper">
            	<div class="logo"><a href="http://www.upshare.co"><img src="<?php echo plugins_url( 'images/logo.png' , __FILE__ ); ?>">for Wordpress</a></div>
                    <div class="text-right pull-right">
                    	Need an account?<a href="http://www.upshare.co/partners/wp/sign_up/" target="_blank"><b> Sign Up</b></a>
			       </div>
                   <div class="border-image"><img src="<?php echo plugins_url( 'images/border-img.png' , __FILE__ ); ?>"></div>
        		</div> 
</section>
<section id="got-widget">
	<div class="wrapper">
        <div class="row">
        	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            	<div class="widget-main-contant">
               		<h1>You've got the widget - now go viral with<span> UP </span></h1>
<p><a href="http://www.upshare.co/partners/wp/sign_up/" target="_blank">Create a free account</a> and then enter your partner ID below.  Now every time users share content from your site, they'll get points they can redeem for cool stuff and you'll get viral data you can't get anywhere else.</p>
                </div>
			</div>
                  
        </div> 
     </div> 
</section>

<section id="partner-id">
	<div class="wrapper">
            	<div class="partner-id-main-contant">
               		<h1>Paste your partner id here:</h1>
                    <form method="POST" action="">
                        <input type="text" class="partner-input numbersOnly" name="partner_id" placeholder="ex. 12345" value="<?php echo $partner_id; ?>">
                        <input type="hidden" name="update_settings" value="Y" />
                        <input  class="partner-botton"  type="submit" value="Sync UP Account">
                    </form>
                </div>
			</div>
                  
</section>

<section id="partner-id">
	<!--<div class="wrapper">
             <div class="partner-bottom"><p>Where can I get my Partner ID?</p></div>
     </div> -->
</section>

<section id="main-widgets">
	<div class="wrapper">
    
    <div class="main-widgets-box">
             <div class="widget-first">
             <img src="<?php echo plugins_url( 'images/yes-icon.png' , __FILE__ ); ?>">
             <h1>Install the Widget</h1>
<p>UP;s cloud-based responsive sharing widget combines lightening-fast load time with one-of-a-kind value for your users</p>
             
             
             
             
        	 </div>
             <div class="widget-second">
             <h1>Sync your Free Account</h1>
<p>Sign up as an UP partner for free, then enter your partner ID above to give your users points for sharing your content, and get access to the UP Partner Dashboard</p>
             
             
        	 </div>
             <div class="widget-third">
             <h1>Go Viral</h1>
<p>The formula for going viral is simple: produce good content, and give users a good reason to share it. You take care of the content. UP takes care of the rest.</p>
             </div>
        	 </div> 
     </div> 
</section>


<section id="footer" class="upshare_footer">
	<div class="wrapper">
        <div class="row">
        <div class="footer-text">
            <p><a href="http://www.upshare.co/partners/sign_up/" target="_blank">Learn More About <b>UP</b></a></p>
         </div>
         </div>
     </div> 
</section> 


</div>
      
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
	 echo '<script src="http://widget.upshare.co/v1/app/public/js/up-load.js?partnerid='.$partner_id.'" id="UPWidget"></script>';
  }
  else{
	 echo '<script src="http://widget.upshare.co/v1/app/public/js/up-load.js" id="UPWidget"></script>'; 
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
		   Sign up for UP and every time users share content from your site they will get points they can redeem for cool stuff.<br/>
		 <a href="'.get_site_url().'/wp-admin/admin.php?page=upshare-settings-page">Enter Partner Id </a>  | <a href="https://www.upshare.co/partners/wp/sign_up/" target="_blank"> Sign Up </a>  |  <a href="" id="closeNotice" onclick="return removeNotice();">Ignore this notice</a>
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
	var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
     
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