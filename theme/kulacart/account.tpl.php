<?php
  /**
   * User Account page 
   * Kula cart 
   *  
   */
    if (!defined("_VALID_PHP"))
      die('Direct access to this location is not allowed.');
?>
<script type="text/javascript" src="<?php echo THEMEURL;?>/js/jquery.validate.min.js"></script>

<div class="row-fluid top_links_strip">
  <div class="span12">
    <!--    <div class="span4 fit"></div>-->
    <?php include("welcome.php");?>
    <div class="span5">
      <div class="row-fluid">
        <div class="span12 fit" style="text-align:right">
          <div id="breadcrumbs"> <a href="<?php echo SITEURL; ?>">Online Ordering Home</a> <span class="raquo">&raquo;</span> My Account </div>
        </div>
      </div>
    </div>
    <div class="clr"></div>
  </div>
</div>
<div class="container">
  <div class="row-fluid margin-top">
 <div class="span12 padding-top-10 padding-bottom-10 relative" id="content-right-bg">
      <div class="span9  fit">
        <div class="span12">
          <div class="row-fluid">
            <div class="span12 top_heading_strip"> Welcome &nbsp;<?php echo ucwords($customers->customername);?> </div>
          </div>
          <div class="row-fluid">
          <div class="span12">
            <div id="response"></div>
            <br />
           <div class="row-fluid margin-top-30">
              <div class="span12">
                <div class="span4"><a href="<?php echo SITEURL;?>/customer-orders"><img src="<?php echo THEMEURL;?>/images/btn_past_order.png" alt="Order History" /></a></div>
                <div class="span4"><a href="<?php echo SITEURL;?>/update-account"><img src="<?php echo THEMEURL;?>/images/btn_update_profile.png" alt="Update Profile" /></a></div>
                <?php 
			
		  if(isset($_SESSION['chooseAddress']) && !empty($_SESSION['chooseAddress']))
		  {
		  ?>
                <div class="span4"><a href="<?php echo SITEURL;?>/?location"><img src="<?php echo THEMEURL;?>/images/img_quick_order.png" alt="Quick Order Here " /></a></div>
                <?php 
		  }
		  else
		  {
		  ?>
                <div class="span4"><a href="<?php echo SITEURL;?>/chooselocation"><img src="<?php echo THEMEURL;?>/images/img_quick_order.png" alt="Quick Order Here " /></a></div>
                <?php 
          }
          ?>
              </div>
            </div>
            <div class="row-fluid margin-top-20">
            <div class="span12 fit btn_back_next">
              <div class="span12 fit taright">
                <div>
                	<a href="javascript:goback()" title="Back" class="btn-2-2">BACK
                    	<!--<img src="<?php echo THEMEURL;?>/images/btn_back.png" alt="Back"/>-->
                    </a>
                </div>
              </div>
              <div class="clr"></div>
            </div>
            </div>
            <br />
          </div>
          </div>
        </div>
      </div>
      <!-----Product Details END----->
      <!-----RIGHT SEACTION----->
      <?php include("rightside.php");?>
      <div id="content-top-shadow"></div>
          <div id="content-bottom-shadow"></div>
          <div id="content-widget-light"></div>
      <!-----RIGHT END----->
      <div class="clr"></div>
    </div>
    <div class="clr"></div>
  </div>
  <div style="display: none;" id="smallLoader">
    <div>
      <div> </div>
    </div>
  </div>
</div>
