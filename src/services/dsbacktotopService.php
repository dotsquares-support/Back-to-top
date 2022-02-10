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
use ds\dsbacktotop\resources\dsbacktotopAsset;

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
      $bgwidth  = $settings->getbgwidth();
      $bgheight  = $settings->getbgheight();
      $fontsizes  = $settings->getfontsize();
      $hovercolor  = $settings->gethovercolor();
      $scrollduration  = $settings->getscrollduration();
      $position  = $settings->getposition();
      $select  = $settings->getselect();

      echo "<link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'/>";
      
?>

<?php 
if($enbledsites=='1'){ ?>
<a href="#" class="scrollup waves-effect waves-dark" style="<?php if($backgroundcolor){ ?>background:<?php echo $backgroundcolor; }?>;
<?php if($bgwidth){ ?>width:<?php echo $bgwidth.'px'; } ?>;<?php if($bgheight){ ?>height:<?php echo $bgheight.'px'; } ?>;
<?php if($position){ ?><?php echo $position ?>:20px;<?php }?>">


<?php if($select=='labeltype1'){?>
  <i <?php if($fontsizes){ ?> style="font-size:<?php echo $fontsizes.'px'; ?>; margin-top:20px;" <?php } ?> class="fa fa-arrow-up fa-lg">
 <?php } elseif($select=='labeltype2'){?>
  <i <?php if($fontsizes){ ?> style="font-size:<?php echo $fontsizes.'px'; ?>" <?php } ?> class="fa fa-level-up fa-2x">
 <?php } elseif($select=='labeltype3'){?>
  <i <?php if($fontsizes){ ?> style="font-size:<?php echo $fontsizes.'px'; ?>" <?php } ?> class="fa fa-angle-double-up fa-2x">
 <?php } elseif($select=='labeltype4'){?>
  <i <?php if($fontsizes){ ?> style="font-size:<?php echo $fontsizes.'px'; ?>" <?php } ?>class="fa fa-reply fa-rotate-90 fa-2x">
 <?php }else{?>
  <i <?php if($fontsizes){ ?> style="font-size:<?php echo $fontsizes.'px'; ?>" <?php } ?>class="fa fa-angle-up ds">
  <?php }?>
 </i>
</a>

 <?php } ?>

<style>

.scrollup{
    position:fixed;
    width:32px;
    height:auto;
    bottom:6px;
    right:20px;
    display:none;
    background-color:#ff9800;
    z-index: 99999;
    padding-bottom: 6px;
}

a.scrollup {
	outline:0;
	text-align: center;
}

a.scrollup:hover,a.scrollup:active,a.scrollup:focus {
	opacity:0.5;
	text-decoration:none;
  background:<?php if($hovercolor){  echo $hovercolor.'!important'; } ?>
  
}
a.scrollup i {
	margin-top: 10px;
	color: #fff;
}
a.scrollup i:hover {
	text-decoration:none;
}
</style>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script> 
<script>
$(window).scroll(function(){
  
			if ($(this).scrollTop() > 100) {
				$('.scrollup').fadeIn();
				} else {
				$('.scrollup').fadeOut();
			}
		});
		$('.scrollup').click(function(){
			$("html, body").animate({ scrollTop: 0 }, <?php if($scrollduration){echo $scrollduration;}else{ echo '1500';}?>);
				return false;
		});

  </script>
  

<?php     
}

}