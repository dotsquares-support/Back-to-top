<?php
/**
 * DS Back To Top plugin for Craft CMS 3.x
 *
 * DS BacktoTop
 * 
 * @link      https://www.dotsquares.com/
 * @copyright Copyright (c) 2021 Dotsquares
 */


namespace ds\dsbacktotop\services;
use Craft;
use craft\base\Component;
use ds\dsbacktotop\dsbacktotop;

/**
 * DS BacktoTop Service
 *
 * All of your plugin’s business logic should go in services, including saving data,
 * retrieving data, etc. They provide APIs that your controllers, template variables,
 * and other plugins can interact with.
 *
 * https://craftcms.com/docs/plugins/services
 *
 * @author    Dotsquares
 */


class dsbacktotopService extends  Component

{
  
    // Public Methods
    // =========================================================================

    public function dsbacktotop(){
       
      
      // get setting main file
      $settings = dsbacktotop::getInstance()->getSettings();

      $enbledsites  = $settings->getonsite();
      $backgroundcolor  = $settings->getfavcolor();
     

      echo "<link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
        integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>";
      echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>';
?>

<?php 
if($enbledsites=='1'){ ?>
<a href="#" class="scrollup waves-effect waves-dark" style="<?php if($backgroundcolor){ ?>background:<?php echo $backgroundcolor; }?>;">
<i class="fa fa-angle-up DS"></i>
</a>
 <?php } ?>

<style>

.scrollup{
    position:fixed;
    width:32px;
    height:32px;
    bottom:0px;
    right:20px;
    display:none;
    background-color:#ff9800;
    z-index: 99999;
}

a.scrollup {
	outline:0;
	text-align: center;
}

a.scrollup:hover,a.scrollup:active,a.scrollup:focus {
	opacity:0.5;
	text-decoration:none;
}
a.scrollup i {
	margin-top: 10px;
	color: #fff;
}
a.scrollup i:hover {
	text-decoration:none;
}
</style>
  
<script>

$(window).scroll(function(){
  
			if ($(this).scrollTop() > 100) {
				$('.scrollup').fadeIn();
				} else {
				$('.scrollup').fadeOut();
			}
		});
		$('.scrollup').click(function(){
			$("html, body").animate({ scrollTop: 0 }, 1000);
				return false;
		});

  </script>
  

<?php     
}

}