<?php
  /**
   * Controller
   *
   * @package CMS Pro
   * @author wojoscripts.com
   * @copyright 2010
   * @version $Id: controller.php, v2.00 2011-04-20 10:12:05 gewa Exp $
   */
  define("_VALID_PHP", true);
  
  require_once("../../init.php");
  if (!$user->is_Admin())
      redirect_to("../../login.php");
  
  require_once("lang/" . $core->language . ".lang.php");
  require_once("admin_class.php");
  
  $slider = new jQuerySlider();
?>
<?php
  /* Update Configuration */
  if (isset($_POST['updateConfig'])):
  $slider->updateConfiguration();
  endif;
?>
<?php
  /* Proccess Image */
  if (isset($_POST['processSliderImage'])): 
      $slider->sliderid = (isset($_POST['sliderid'])) ? $_POST['sliderid'] : 0; 
	  $slider->processSliderImage();
  endif;
?>
<?php
  /* Update Images Order */
  if (isset($_GET['sortslides'])) :
      $slider->updateOrder();
 endif;
?>
<?php
  /* Delete slider images*/
  if (isset($_POST['deleteSlide'])):
	$temp = sanitize($_POST['deleteSlide']);
	list($id,$filename) = explode(":",$temp);
									  
	@unlink(WOJOLITE . 'plugins/jqueryslider/slides/'.$filename);
	$db->delete("plug_slider", "id='" . $id . "'");
	
	$title = sanitize($_POST['title']);
	print ($db->affected()) ? $wojosec->writeLog(PLG_JQ_SLIDE .' <strong>'.$title.'</strong> '._DELETED, "", "no", "plugin") . $core->msgOk(PLG_JQ_SLIDE .' <strong>'.$title.'</strong> '._DELETED) : $core->msgAlert(_SYSTEM_PROCCESS);
  endif;
?>