<div class="span7">
        <div class="row-fluid">
          <div class="span12 fit">
                <h4 class="h4 margin-top-10 margin-bottom-10">
                  <?php if($core->showlogin):?>
                  <?php 
	  if($customers->customerlogged_in):?>
                  <strong>Welcome</strong>&nbsp; <?php echo $customers->customername;?>&nbsp;|&nbsp;<a href="<?php echo SITEURL;?>/account" class="top_signin">MY ACCOUNT</a> | <a href="<?php echo SITEURL;?>/logout.php" class="top_signin">Signout</a>
                  <?php else:?>
                  <strong>Welcome Guest</strong>&nbsp;
                  <a href="<?php echo SITEURL;?>/signin" class="top_signin">Sign In</a>&nbsp;|&nbsp;<a href="<?php echo SITEURL;?>/register" class="top_signin">Register Now</a>
                  <?php endif;?>
                  <!--/ Login End -->
                  <?php endif;?>
                </h4>
          </div>
          
        </div>
    </div>