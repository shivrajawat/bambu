<?php
  /**
   * Header
   * Kulacart Online food order 
   */
  
  if (!defined("_VALID_PHP"))
      die('Direct access to this location is not allowed.');
 
?>
<!doctype html>
<head>
<?php header('Content-Type: text/html; charset=ISO-8859-1'); ?>
<?php echo $content->getMeta(); ?>
<script type="text/javascript">
var THEMEURL = "<?php echo THEMEURL; ?>";
var SITEURL = "<?php echo SITEURL; ?>";
</script>
<script type="text/javascript" src="<?php echo SITEURL;?>/assets/jquery.js"></script>
<!--<script type="text/javascript" src="<?php echo SITEURL;?>/assets/jquery-1.7.1.min.js"></script>-->
<link href='https://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo THEMEURL; ?>/css/bootstrap.min.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo THEMEURL; ?>/css/bootstrap-responsive.css" type="text/css" media="all" />

<link rel="stylesheet" href="<?php echo THEMEURL; ?>/css/coustom.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo THEMEURL; ?>/css/g7webs.css" type="text/css" media="all" />

<link rel="stylesheet" href="<?php echo SITEURL; ?>/css/datepicker.css" type="text/css" media="all" />

<link href="http://www.911fonts.com/font/download_LucidaGrandeRegular_6216.htm" rel="stylesheet" type="text/css" />
<link href="<?php echo THEMEURL; ?>/css/base.css" rel="stylesheet" type="text/css" />
<link href="<?php echo THEMEURL; ?>/css/layout.css" rel="stylesheet" type="text/css" />
<link href="<?php echo THEMEURL; ?>/css/menus.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo THEMEURL; ?>/css/g7webs.css" type="text/css" media="all" />
<style>
.wrapper {
	max-width: 1080px;
}
#sidebar-a {
	width: 25%;
}
#sidebar-b {
	width: 28%;
}
#maininner {
	width: 47%;
}
#maininner, #sidebar-a {
	position: relative;
}
#maininner {
	left: 25%;
}
#sidebar-a {
	left: -47%;
}
#menu .dropdown {
	width: 250px;
}
#menu .columns2 {
	width: 500px;
}
#menu .columns3 {
	width: 750px;
}
#menu .columns4 {
	width: 1000px;
}
</style>

<script src="<?php echo THEMEURL; ?>/js/warp.js" type="text/jscript" ></script>
<script src="<?php echo THEMEURL; ?>/js/responsive.js" type="text/jscript" ></script>
<script src="<?php echo THEMEURL; ?>/js/accordionmenu.js" type="text/jscript" ></script>
<script src="<?php echo THEMEURL; ?>/js/dropdownmenu.js" type="text/jscript" ></script>
<script src="<?php echo THEMEURL; ?>/js/template.js" type="text/jscript" ></script>

<script type="text/javascript" src="<?php echo THEMEURL; ?>/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="<?php echo THEMEURL; ?>/js/jquery.history.js"></script>
<link rel="stylesheet" href="<?php echo SITEURL; ?>/css/kulacart.css" type="text/css" media="all" />
</head>
<body>
<?php $url = $_SERVER['REQUEST_URI']; //returns the current URL
	$parts = explode('/',$url);
	$dir = $_SERVER['SERVER_NAME'];
	for ($i = 0; $i < count($parts) - 1; $i++) {
	 $dir .= $parts[$i] . "/";
	}
	$domain = substr($dir, 0, strlen($dir)-1);	
    $websitenmae = preg_replace('#^www\.(.+\.)#i', '$1', $domain);	
	if($url== '/admin.php?pagename=admin')
	{
		header("Location:".SITEURL."/admin/login.php");
	}
	?>
<div class="wrapper clearfix">
  <header id="header">
    <div id="toolbar" class="clearfix">
      <div class="float-left">
        <time datetime="2014-01-06"></time>
      </div>
    </div>
    <div id="headerbar" class="clearfix"> <a id="logo" href="http://bambuonline.com">
      <p><img style="float: left;" class="size-auto" src="<?php echo THEMEURL; ?>/images/bambu-logo-left.png" alt="logo" height="108" width="270"> <img style="float: left;" class="size-auto" src="<?php echo THEMEURL; ?>/images/logo.png" alt="logo" height="112" width="500"> <img style="float: left;" class="size-auto" src="<?php echo THEMEURL; ?>/images/bambu-logo-right.png" alt="logo" height="108" width="270"></p>
      </a> </div>
    <div class="menu-center">
      <div id="menubar" class="clearfix">
        <nav id="menu">
          <ul class="menu menu-dropdown">
            <li class="level1 item101"><a href="<?php echo SITEURL; ?>" class="level1"><span>Home</span></a></li>
            <li class="level1  parent"><a href="#" class="level1 parent"><span>Menus</span></a>
              <div class="dropdown columns1" style="display: none; overflow: hidden; width: 250px; height: 432px;">
                <div style="overflow: hidden; margin-top: 0px; display: block; width: 250px; height: 432px;">
                  <div style="min-width: 250px;">
                    <div class="dropdown-bg">
                      <div>
                        <div class="width100 column">
                          <ul class="level2" style="min-height: 431px;">
                            <li class="level2 "><a href="http://bambuonline.com/index.php/menus/flavourful-starters" class="level2"><span>Flavourful Starters</span></a></li>
                            <li class="level2 "><a href="http://bambuonline.com/index.php/menus/a-taste-of-china" class="level2"><span>A Taste of China</span></a></li>
                            <li class="level2 "><a href="http://bambuonline.com/index.php/menus/a-taste-of-thailand" class="level2"><span>A Taste of Thailand</span></a></li>
                            <li class="level2 "><a href="http://bambuonline.com/index.php/menus/a-taste-of-vietnam" class="level2"><span>A Taste of Vietnam</span></a></li>
                            <li class="level2 "><a href="http://bambuonline.com/index.php/menus/gluten-free" class="level2"><span>Gluten Free</span></a></li>
                            <li class="level2 "><a href="http://bambuonline.com/index.php/menus/salads-soups" class="level2"><span>Salads &amp; Soups</span></a></li>
                            <li class="level2 "><a href="http://bambuonline.com/index.php/menus/desserts" class="level2"><span>Desserts</span></a></li>
                            <li class="level2 "><a href="http://bambuonline.com/index.php/menus/sides-extras" class="level2"><span>Sides &amp; Extras</span></a></li>
                            <li class="level2 "><a href="http://bambuonline.com/index.php/menus/lunch-specials" class="level2"><span>Bambu Lunch Box</span></a></li>
                            <li class="level2 "><a href="http://bambuonline.com/index.php/menus/drinks-beverages" class="level2"><span>Drinks &amp; Beverages</span></a></li>
                            <li class="level2 "><a href="http://bambuonline.com/index.php/menus/catering-menu" class="level2"><span>Catering Menu</span></a></li>
                            <li class="level2 "><a href="http://bambuonline.com/index.php/menus/chef-s-trio-menu" class="level2"><span>Chef's Trio Menu</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="level1 item102"><a href="http://bambuonline.com/index.php/about-us" class="level1"><span>About Us</span></a></li>
            <li class="level1 item106 parent"><a href="http://bambuonline.com/index.php/catering" class="level1 parent"><span>Catering</span></a>
              <div class="dropdown columns1" style="display: none; overflow: hidden; width: 250px; height: 36px;">
                <div style="overflow: hidden; margin-top: 0px; display: block; width: 250px; height: 36px;">
                  <div style="min-width: 250px;">
                    <div class="dropdown-bg">
                      <div>
                        <div class="width100 column">
                          <ul class="level2" style="min-height: 35px;">
                            <li class="level2 item254"><a href="http://bambuonline.com/index.php/catering/catering-menu" class="level2"><span>Catering Menu</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="level1 item205 active current"><a href="http://bambu.kulacart.net/" class="level1 active current"><span>Online Ordering</span></a></li>
            <li class="level1 item107"><a href="http://bambuonline.com/index.php/shop" class="level1"><span>Shop</span></a></li>
            <li class="level1 item272"><a href="http://bambuonline.com/index.php/gallery" class="level1"><span>PICS</span></a></li>
            <li class="level1 item206 parent"><a href="http://bambuonline.com/index.php/contact" class="level1 parent"><span>Contact Us</span></a>
              <div class="dropdown columns1" style="display: none; overflow: hidden; width: 250px; height: 36px;">
                <div style="overflow: hidden; margin-top: 0px; display: block; width: 250px; height: 36px;">
                  <div style="min-width: 250px;">
                    <div class="dropdown-bg">
                      <div>
                        <div class="width100 column">
                          <ul class="level2" style="min-height: 35px;">
                            <li class="level2 item207"><a href="http://bambuonline.com/index.php/contact/directions" class="level2"><span>Directions</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <div class="clearfix"></div>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <div class="main"> 
  
  
  