<header id="site-header" role="banner" itemscope itemtype="http://schema.org/WPHeader" class="header-3">
    <div class="ad-navigation clearfix">
      <div class="container">
        <div id="secondary-navigation" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
          <nav class="navigation clearfix">
            <ul id="menu-secondary-menu" class="menu clearfix">
              <li id="menu-item-1204" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1204"><a href="#">My account</a></li>
              <li id="menu-item-1203" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1203"><a href="#">Blog</a></li>
              <li id="menu-item-1205" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1205"><a href="#">About Us</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <div id="header">
      <div class="container">
        <div class="logo-wrap">
          <h1 id="logo" class="image-logo" itemprop="headline"> <a href="<?php echo site_url('');?>"><img src="<?php echo base_url('uploads/' .$basicList->image);?>" alt="SeraBazar.com"></a> </h1>
          <!-- END #logo -->
        </div>
        <div class="header-right">
          <div class="header-right-below">
            <div class="widget widget_search">
              <form method="get" id="searchform" class="search-form" action="#" _lpchecked="1">
                <fieldset>
                <input type="text" name="s" id="s" value="" placeholder="Search Products..."  autocomplete="off" />
                <input type="hidden" name="post_type" value="product" class="post-type-input"/>
                <button id="search-image" class="sbutton" type="submit" value=""><i class="fa fa-search"></i></button>
                </fieldset>
              </form>
            </div>
            <span class="mts-wishlist"> <a href="#" class="mts-wishlist-link"> <span class="mts-wishlist-icon"><i class="fa fa-heart"></i></span>Wish List <span class="mts-wishlist-link-count count">0</span> </a> </span>
            <div class="mts-cart-button-wrap"> <a href="#" class="mts-cart-button cart-contents"> <span class="mts-cart-icon"><i class="fa fa-shopping-cart"></i></span>Cart<span class="count">0</span><i class="fa fa-angle-down"></i> </a>
              <div class="mts-cart-content">
                <div class="mts-cart-content-footer clearfix">
                  <div class="mts-items">0 Items</div>
                  <span class="mts-cart-total">Subtotal: <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#2547;&nbsp;</span>0</span></span> <a href="https://serabazar.com/shop/" class="button mts-cart-button">Go to Shop</a> </div>
              </div>
            </div>
          </div>
          <!--.header-right-below-->
        </div>
        <!--.header-right-->
      </div>
      <!--.container-->
    </div>
    <!--#header-->
    <div id="primary-navigation" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
      <div class="container clearfix"> <a href="#" id="pull" class="toggle-mobile-menu">Menu</a>
        <nav class="navigation clearfix mobile-menu-wrapper">
          <ul id="menu-menu-1" class="menu clearfix">
            <li id="menu-item-1179" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-1179"><a href="<?php echo site_url('Home');?>"><i class="fa fa-home"></i> Home</a></li>

            <?php
              foreach($menuitems as $mv){
              $submenuitems = $this->M_cloud->tbWhObyResult('sub_menu_manage', array('menu_id' => $mv->menu_id), 'sub_menu_id DESC');
            ?>
              <li id="menu-item-1210" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1210"><a href="#"><?php echo $mv->menu_name; ?></a>
              <ul class="sub-menu" style="width:190px;">
            <?php
              foreach($submenuitems as $smv){
              $subsubmenuitems = $this->M_cloud->tbWhObyResult('sub_to_sub_menu_manage', array('sub_menu_id' => $smv->sub_menu_id), 'sub_menu_id DESC');
            ?>
              <li id="menu-item-1250" style="width:216px; background:#5AAF4C; color:#FFFFFF;" class="menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1250"><a href="#"><?php echo $smv->sub_menu_name; ?></a>
              <ul class="sub-menu" style="width:190px;">
				    <?php foreach($subsubmenuitems as $ssmv){ ?>
               <li id="menu-item-1251" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1251"><a href="#"><?php echo $ssmv->sub_to_sub_menu_name; ?></a></li>
            <?php } ?>
                  </ul>
                </li>
				<?php } ?>
              </ul>
            </li>
			<?php } ?>
          </ul>
        </nav>
      </div>
    </div>
  </header>
