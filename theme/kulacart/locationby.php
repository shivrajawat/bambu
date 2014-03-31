<?php

  /**

   * Index

   * Kula cart 

   *  

   */

  

  if (!defined("_VALID_PHP"))

      die('Direct access to this location is not allowed.');

?>



<div class="row-fluid top_links_strip">

  <div class="span12">

    <!--<div class="span4 fit"></div>-->

    <?php include("welcome.php"); ?>

    <div class="span5">

      <div class="row-fluid">

        <div class="span12 fit" style="text-align:right">

          <div id="breadcrumbs"> </div>

        </div>

      </div>

    </div>

    <div class="clr"></div>

  </div>

</div>

<div class="container">

  <div class="row-fluid margin-top ">

    <div class="span12 padding-top-10 padding-bottom-10 relative" id="content-right-bg">

      <!-----MENU CATEGORIES----->

      <!-----MENU CATEGORIES END----->

      <!-----Product Details----->

      <div class="span12 fit">

        <div class="span9">

          <div class="row-fluid">

            <div class="span12 top_heading_strip"> Choose Options From Below </div>

          </div>

        <div class="row-fluid margin-top-50">
            <div class="span12">
            <div class="span4">
                <a href="<?php echo SITEURL;?>/register"><img src="<?php echo THEMEURL;?>/images/img_new_customer.png" alt="Register Here " /></a>
            </div>
            <div class="span4">
            	<a href="<?php echo SITEURL;?>/signin"><img src="<?php echo THEMEURL;?>/images/img_existing_customer.png" alt="Login" /></a>
            </div>
            <?php if(isset($_SESSION['chooseAddress']) && !empty($_SESSION['chooseAddress'])){ ?>
            <div class="span4">
            	<a href="<?php echo SITEURL;?>/?location"><img src="<?php echo THEMEURL;?>/images/img_quick_order.png" alt="Quick Order Here " /></a>
            </div>
            <?php  } else { ?>
            <div class="span4">
            	<a href="<?php echo SITEURL;?>/chooselocation"><img src="<?php echo THEMEURL;?>/images/img_quick_order.png" alt="Quick Order Here " /></a>
            </div>
		  <?php } ?>
          </div>
         </div>

        </div>

        <div class="span3 margin-left-16">

          <div class="span12 box2 fit" id="basketItemsWrap">

            <div class="row-fluid myorder_headings"><span>MY ORDERS</span> </div>

            <div id="meniheading"></div>

            <div id="hidemeniheading">

              <?php if($product->getBasket()){ ?>

              <div class="row-fluid"> <span class="item-name span7 fit">

                <h5>Item Name</h5>

                </span> <span class="qty span2 fit">

                <h5>Qty</h5>

                </span> <span class="Delete span3 fit">

                <h5> Delete</h5>

                </span>

                <div class="clr"></div>

              </div>

              <?php } ?>

            </div>

            <div class="row-fluid">

              <div class="item-delete-a">

                <div id="basketItemsWrap" class="basketItemsWrap">

                  <ul>

                    <li></li>

                    <?php echo  $product->getBasket(); ?>

                  </ul>

                </div>

                <div class="clr"></div>

              </div>

            </div>

            <div class="row-fluid">

              <div class="span11" style="margin:0 auto; float:none">

                <div id="totalprice"></div>

                <div id="hideprice">

                  <?php $style='style="display:none"'; 

				  if(!$product->getBasket()){ $style='style="display:none"'; ?>

                  <div class="total-order-amount span12 acenter"> Awaiting your delicious selections.<br />

                    <a href="javascript:void(0);" class="CancelOrder">Cancel order & Start Over</a> </div>

                  <?php } else { $style='style="display:block"';?>

                  <div class="total-order-amount span12 acenter bold">

                    <?php $baskettotal = $product->getToalpriceinBasket(); ?>

                    <?php echo 'Total Order Amount:  $'.round_to_2dp($product->getToalpriceinBasket()).'';?> </div>

                  <div class="clr"></div>

                  <div class="span12 acenter fit">

                    <div class="span12 fit">

                      <div class="span12" align="center"> 

                      <a href="<?php echo SITEURL;?>/view-cart" class="deleteitem btn-2-2" style="float:left; margin:10px 0 2px 42px;">VIEWCART

                        </a><br />

                        <?php if(isset($_SESSION['chooseAddress'])) { ?>

                        <a href="<?php echo SITEURL;?>/checkout" class="btn-2-2" style="float:left; margin:10px 0 10px 42px">CHECKOUT</a>

                        <?php } else { ?>

                        <a href="<?php echo SITEURL;?>/getorder-type" class="btn-2-2" style="float:left; margin:10px 0 10px 42px" >CHECKOUT</a>

                        <?php } ?>

                        <div class="clr"></div>

                      </div>

                      <a href="javascript:void(0);" class="CancelOrder">Cancel order & Start Over</a> </div></div>

                      <?php }?>

                </div>

              </div>

            </div>

          </div>

          <div class="span12 box2 hours_home margin-top-30">

            <div class="row-fluid myorder_headings"><span>STORE HOURS</span></div>

            <div class="row-fluid">

              <div class="span12">

                <?php
					 echo cleanOut($webrow['hours_notes']);
					 /*$hours = $product->landingpageHours();	
					 if($hours):
							echo cleanOut($hours['restorant_time']);
					 endif;*/

				?>

              </div>

            </div>

          </div>

          <div class="span12 hours_home margin-top-30 box2">
<div class="row-fluid myorder_headings"><span>CARDS ACCEPTED</span></div>

            <div class="row-fluid">
           <div class="span3 fit"><a href="#"><img alt="" src="<?php echo THEMEURL;?>/images/discover.png"></a></div>

            <div class="span3 fit"><a href="#"><img alt="" src="<?php echo THEMEURL;?>/images/visa.png"></a></div>

            <div class="span3 fit"><a href="#"><img alt="" src="<?php echo THEMEURL;?>/images/am-card.png"></a></div>

            <div class="span3 fit"><a href="#"><img alt="" src="<?php echo THEMEURL;?>/images/mastercard.png"></a></div>
</div>
          </div>

        </div>

        <div id="content-top-shadow"></div>

        <div id="content-bottom-shadow"></div>

        <div id="content-widget-light"></div>

      </div>

    </div>

    <div class="clr"></div>

  </div>

</div>
<script type="text/javascript">

// <![CDATA[

  $(document).ready(function() {

	  	  

	$("#basketItemsWrap li img").live("click", function(event) { 

																

		var productIDValSplitter 	= (this.id).split("_");

		var productIDVal 			= productIDValSplitter[1];			

							

		$("#smallLoader").css({display: "block"});	

		$.ajax({  

			type: "POST",  

			url: "<?php echo SITEURL;?>/ajax/basket.php",  

			data: { productID: productIDVal, action: "deleteFromBasket"},  

			success: function(theResponse) {			

				$("#productID_" + productIDVal).hide("slow",  function() {$(this).remove();});

				$("#smallLoader").css({display: "none"});

				window.location.reload();

			

			}  

		});		

	});

	

	var delay = (function(){

		

		var timer = 0;

		

		return function(callback, ms){

			clearTimeout (timer);

			timer = setTimeout(callback, ms);

        };

	})();

		

	$("a.deleteitem img").click(function(){		

		delay(function(){			

			$.ajax({

			   type: "POST",  

				url: "<?php echo SITEURL; ?>/ajax/basket.php",  

				data: { action: "addViewCart"},  

				success: function(theResponse){			

					$("#totalprice").html(theResponse).show();	

					$("#hideprice").hide();	

					$("#hidemeniheading").hide();					

				}

			});

		}, 2000);

	});	

	

	$("a.CancelOrder").click(function(){

		$.ajax({

			type: "POST",  

			url: "<?php echo SITEURL; ?>/ajax/user.php",  

			data: { CancelOder: "1"},  

			success: function(theResponse){	

				window.location.reload();

			}

		});

	});

	

	

	$("a.ChanegeLocation").click(function(){

		$.ajax({

			type:"POST",

			url:"<?php echo SITEURL;?>/ajax/user.php",

			data:{ChangeLocation:"1"},

			success: function(theResponse){

				window.location.href= SITEURL+"/chooselocation";

			}

		});

       });	

   });

  

  function RepeatOrderExit(){

				

		alert("You already added items of last order into cart.");

  }

  function locationNotMatch(){

				

		alert("Last placed order location does not match with the current chosen location.");

  }

  function customeFirstOrderNotExists(){

	  

	    alert("You didn't place any order yet.");

  }

  

// ]]>

</script>