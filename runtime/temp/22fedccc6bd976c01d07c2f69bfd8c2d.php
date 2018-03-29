<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:55:"E:\jiajia\huahua/application/index\view\index\shop.html";i:1522302956;s:55:"E:\jiajia\huahua/application/index\view\index\base.html";i:1522302996;}*/ ?>
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>花卉蔬菜，线上选购</title>
        <link rel="shortcut icon" type="image/x-icon" href="favicon.png" />

        <link href="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/css/master.css" rel="stylesheet">

        <!-- SWITCHER -->
        <link rel="stylesheet" id="switcher-css" type="text/css" href="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/plugins/switcher/css/switcher.css" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/plugins/switcher/css/color1.css" title="color1" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/plugins/switcher/css/color2.css" title="color2" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/plugins/switcher/css/color3.css" title="color3" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/plugins/switcher/css/color4.css" title="color4" media="all" />

        <script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/js/jquery-1.11.2.min.js"></script>  
        <script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/js/bootstrap.min.js"></script>

    </head>
    <body data-scrolling-animations="true">
        <div class="b-page">
            <!-- Start Switcher -->
            <div class="switcher-wrapper">  
                <div class="demo_changer">
                    <div class="demo-icon customBgColor"><span class="ef icon_cog "></span></div>
                    <div class="form_holder">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="predefined_styles">
                                    <div class="skin-theme-switcher">
                                        <h4>Skin</h4>
                                        <a href="#" data-switchcolor="color1" class="styleswitch" style="background-color:#7da500;"> </a>
                                        <a href="#" data-switchcolor="color2" class="styleswitch" style="background-color:#b7ca0d;"> </a>
                                        <a href="#" data-switchcolor="color3" class="styleswitch" style="background-color:#0bdabc;"> </a>
                                        <a href="#" data-switchcolor="color4" class="styleswitch" style="background-color:#01a664;"> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- End Switcher -->
            <header id="header">
                <div class="header-top">
                    <div class="wrapper">
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <div class="header-info">
                                <div class="description-header">
                                    欢迎来到花卉蔬菜选购网
                                </div>
                                <div class="color-primary">
                                    +001 6688724
                                </div>
                                <div class="color-primary">
                                    hello@flower.com
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <a href="." class="btn extra-color text-uppercase pull-right">未知的</a>
                        </div>
                    </div>
                </div>
                <div class="header-nav">
                    <div class="wrapper">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                            <a href="." class="logo"></a>
                        </div>

                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6 cart-block-r">
                            <div class="cart-block pull-right">
                                <i class="flaticon-shopping-bag1"></i>
                                <div class="cart-box">
                                    <div class="cart-price pull-right">
                                        <span class="color-primary text-uppercase">购物车:</span>
                                        <span class="price">￥1000.00</span>
                                        <div class="items-cart">1 ITEMS</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 nav-box">
                            <span id="toggle-nav" class="ef icon_menu mobile-menu-toggle"></span>
                            <nav class="nav-container">
                                <ul>
                                    <li class="search pull-right">
                                        <form class="search-form form-inline" action="#" method="POST">
                                            <div class="form-group">
                                                <label class="sr-only" for="searchQuery">Search...</label>
                                                <input type="search" class="search-field" id="searchQuery" placeholder="Search...">
                                            </div>
                                            <button type="submit" class="hidden"><span class="ef icon_search"></span></button>
                                        </form>
                                        <a class="iconSearch" href="#">
                                            <span class="ef icon_search"></span>                                        </a>                                    </li>
                                    <li><a class="#" href="index.html">Home</a></li>
                                    <li><a class="#" href="about.html">关于</a></li>
                                    <li><a class="#" href="#">服务</a></li>
                                    <li><a class="#" href="<?php echo url('index/index/store'); ?>">产品</a></li>
                                    <li><a class="#" href="shop.html">在线选购</a></li>
                                    <li><a class="#" href="blog.html">新闻</a></li>
                                    <li><a class="#" href="contact.html">联系我们</a></li>

                                </ul>
                            </nav>
                        </div>

                    </div>
                </div>
            </header>



      
			<div class="bg-wrapper">

				<section class="two-columns">
					<div class="wrapper">
						<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 pull-right">

							<div class="settings-block wow bounceInDown center">
								<div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
									<div class="select-block">
										<span class="select-title">Sort By:</span>
										<select name="#" id="sort-product">
											<option value="Default Sorting">Default Sorting</option>
											<option value="Default Sorting">Default Sorting</option>
											<option value="Default Sorting">Default Sorting</option>
										</select>
									</div>
									<div class="select-block">
										<span class="select-title">Show Items:</span>
										<select name="#" id="show-items">
											<option value="Default Sorting">9 Per Page</option>
											<option value="Default Sorting">12 Per Page</option>
											<option value="Default Sorting">24 Per Page</option>
										</select>
									</div>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
									<ul id="type-of-display" class="pull-right">
										<li>
											<button class="toogle-view grid-3 active-view">
												<span class="ef icon_grid-2x2"></span>
											</button>
										</li>
										<li>
											<button class="toogle-view grid-list">
												<span class="ef icon_ul"></span>
											</button>
										</li>
									</ul>
								</div>
							</div>

							<div class="shop-grid">
								<div class="row wow fadeInUp">
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
										<div class="product-box">
											<div class="product-image">
												<a href="shop-2.html">
													<img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/store/12.jpg" alt="product">
												</a>
											</div>
											<div class="product-desc-wrapper">
												<div class="product-title"><span>Vax Pressure Washer</span></div>
												<div class="product-desc">1800W Powerful Motor</div>
												<div class="row-pr">
													<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
														<button class="add-to-cart pull-right"><span>Add to Cart</span></button>
													</div>
													<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
														<div class="price">$59</div>
														<div class="rating pull-right">
															<span class="ef icon_star"></span>
															<span class="ef icon_star"></span>
															<span class="ef icon_star"></span>
															<span class="ef icon_star empty"></span>
															<span class="ef icon_star empty"></span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
										<div class="product-box">
											<div class="sale-product"><span>sale</span></div>
											<div class="product-image">
												<a href="shop-2.html">
													<img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/store/13.jpg" alt="product">
												</a>
											</div>
											<div class="product-desc-wrapper">
												<div class="product-title"><span>Electric Rotary Lawn Mower</span></div>
												<div class="product-desc">Qualcast 1400W - 34cm</div>
												<div class="row-pr">
													<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
														<button class="add-to-cart pull-right"><span>Add to Cart</span></button>
													</div>
													<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
														<div class="price">$165</div>
														<div class="rating pull-right">
															<span class="ef icon_star"></span>
															<span class="ef icon_star"></span>
															<span class="ef icon_star"></span>
															<span class="ef icon_star"></span>
															<span class="ef icon_star empty"></span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
										<div class="product-box">
											<div class="product-image">
												<a href="shop-2.html">
													<img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/store/13.jpg" alt="product">
												</a>
											</div>
											<div class="product-desc-wrapper">
												<div class="product-title"><span>Cylinder Lawn Mower</span></div>
												<div class="product-desc">Sovereign Push - 30cm</div>
												<div class="row-pr">
													<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
														<button class="add-to-cart pull-right"><span>Add to Cart</span></button>
													</div>
													<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
														<div class="price">$43</div>
														<div class="rating pull-right">
															<span class="ef icon_star"></span>
															<span class="ef icon_star"></span>
															<span class="ef icon_star"></span>
															<span class="ef icon_star"></span>
															<span class="ef icon_star empty"></span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="row wow fadeInUp">
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
										<div class="product-box">
											<div class="product-image">
												<a href="shop-2.html">
													<img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/store/13.jpg" alt="product">
												</a>
											</div>
											<div class="product-desc-wrapper">
												<div class="product-title"><span>Home Pressure Washer</span></div>
												<div class="product-desc">Karcher Compact - 1400W</div>
												<div class="row-pr">
													<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
														<button class="add-to-cart pull-right"><span>Add to Cart</span></button>
													</div>
													<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
														<div class="price">$59</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
										<div class="product-box">
											<div class="product-image">
												<a href="shop-2.html">
													<img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/store/13.jpg" alt="product">
												</a>
											</div>
											<div class="product-desc-wrapper">
												<div class="product-title"><span>Easimo Lawn Mower 900W</span></div>
												<div class="product-desc">Flymo Electric 900W</div>
												<div class="row-pr">
													<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
														<button class="add-to-cart pull-right"><span>Add to Cart</span></button>
													</div>
													<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
														<div class="price">$59</div>
														<div class="rating pull-right">
															<span class="ef icon_star"></span>
															<span class="ef icon_star"></span>
															<span class="ef icon_star"></span>
															<span class="ef icon_star"></span>
															<span class="ef icon_star empty"></span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
										<div class="product-box">
											<div class="product-image">
												<a href="shop-2.html">
													<img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/store/13.jpg" alt="product">
												</a>
											</div>
											<div class="product-desc-wrapper">
												<div class="product-title"><span>Electric Hover Lawn Mower</span></div>
												<div class="product-desc">Qualcast 1600W - 350W Trimmer Set </div>
												<div class="row-pr">
													<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
														<button class="add-to-cart pull-right"><span>Add to Cart</span></button>
													</div>
													<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
														<div class="price">$169</div>
														<div class="rating pull-right">
															<span class="ef icon_star"></span>
															<span class="ef icon_star"></span>
															<span class="ef icon_star"></span>
															<span class="ef icon_star empty"></span>
															<span class="ef icon_star empty"></span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="row wow fadeInUp">
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
										<div class="product-box">
											<div class="product-image">
												<a href="shop-2.html">
													<img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/store/13.jpg" alt="product">
												</a>
											</div>
											<div class="product-desc-wrapper">
												<div class="product-title"><span>Electric Knapsack Sprayer</span></div>
												<div class="product-desc">The handy - 16L</div>
												<div class="row-pr">
													<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
														<button class="add-to-cart pull-right"><span>Add to Cart</span></button>
													</div>
													<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
														<div class="price">$559</div>
														<div class="rating pull-right">
															<span class="ef icon_star"></span>
															<span class="ef icon_star"></span>
															<span class="ef icon_star"></span>
															<span class="ef icon_star"></span>
															<span class="ef icon_star empty"></span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
										<div class="product-box">
											<div class="sale-product"><span>sale</span></div>
											<div class="product-image">
												<a href="shop-2.html">
													<img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/store/13.jpg" alt="product">
												</a>
											</div>
											<div class="product-desc-wrapper">
												<div class="product-title"><span>Cordless Grass Trimmer</span></div>
												<div class="product-desc">Qualcast Li-ion - 18V</div>
												<div class="row-pr">
													<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
														<button class="add-to-cart pull-right"><span>Add to Cart</span></button>
													</div>
													<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
														<div class="price"><span class="before-price">$135</span>$105</div>
														<div class="rating pull-right">
															<span class="ef icon_star"></span>
															<span class="ef icon_star"></span>
															<span class="ef icon_star"></span>
															<span class="ef icon_star"></span>
															<span class="ef icon_star"></span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
										<div class="product-box">
											<div class="product-image">
												<a href="shop-2.html">
													<img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/store/product-9.jpg" alt="product">
												</a>
											</div>
											<div class="product-desc-wrapper">
												<div class="product-title"><span>Hand Push Lawn Mower</span></div>
												<div class="product-desc">Webb - Cylinder - H18</div>
												<div class="row-pr">
													<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
														<button class="add-to-cart pull-right"><span>Add to Cart</span></button>
													</div>
													<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
														<div class="price">$169</div>
														<div class="rating pull-right">
															<span class="ef icon_star"></span>
															<span class="ef icon_star"></span>
															<span class="ef icon_star"></span>
															<span class="ef icon_star empty"></span>
															<span class="ef icon_star empty"></span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="pagination-box">
								<ul>
									<!--<li class="arrow-pagin">
									<a href="#">
									<span class="ef arrow_left"></span>
									</a>
									</li>-->
									<li class="active">
										<span class="number-pag">1</span>
									</li>
									<li>
										<a href="#">
											<span class="number-pag">2</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="number-pag">3</span>
										</a>
									</li>
									<li class="arrow-pagin">
										<a href="#">
											<span class="ef arrow_right"></span>
										</a>
									</li>
								</ul>
							</div>

						</div>

						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
							<div class="left-block-wrapper wow fadeInUp">
								<div class="title-left-block">
									<h3 class="text-uppercase">产品分类</h3>
								</div>
								<div class="lb-content lb-content-accordion">
									<div id="accordion" class="accordion-l-box">
										<h3>
											<span class="fi flaticon-plants5"></span>
											<span class="title-accordion-menu-item">室内花卉</span>
											<span class="ef accordion-icon"></span>
										</h3>
										<div>
											<ul>
												<li class="active"><a href="#">Lawn Movers</a></li>
												<li><a href="#">Hedge Cutters</a></li>
												<li><a href="#">Cultivators</a></li>
												<li><a href="#">Ride-On Movers</a></li>
												<li><a href="#">Water Pumps</a></li>
											</ul>
										</div>
										<h3>
											<span class="fi flaticon-plants5"></span>
											<span class="title-accordion-menu-item">室外花卉</span>
											<span class="ef accordion-icon"></span>
										</h3>
										<div>
											<ul>
												<li class="active"><a href="#">Lawn Movers</a></li>
												<li><a href="#">Hedge Cutters</a></li>
												<li><a href="#">Cultivators</a></li>
												<li><a href="#">Ride-On Movers</a></li>
												<li><a href="#">Water Pumps</a></li>
											</ul>
										</div>
										<h3>
											<span class="fi flaticon-plants5"></span>
											<span class="title-accordion-menu-item">蔬菜瓜果</span>
											<span class="ef accordion-icon"></span>
										</h3>
										<div>
											<ul>
												<li class="active"><a href="#">蔬菜瓜果</a></li>
												<li><a href="#">Hedge Cutters</a></li>
												<li><a href="#">Cultivators</a></li>
												<li><a href="#">Ride-On Movers</a></li>
												<li><a href="#">Water Pumps</a></li>
											</ul>
										</div>
										
										<h3>
											<span class="fi flaticon-plants5"></span>
											<span class="title-accordion-menu-item">精选品种</span>
											<span class="ef accordion-icon"></span>
										</h3>
										<div>
											<ul>
												<li class="active"><a href="#">Lawn Movers</a></li>
												<li><a href="#">Hedge Cutters</a></li>
												<li><a href="#">Cultivators</a></li>
												<li><a href="#">Ride-On Movers</a></li>
												<li><a href="#">Water Pumps</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>


							<div class="left-block-wrapper wow fadeInUp">
								<div class="l-banner-block hover-banner">
									<a href="#">
										<img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/270x300/banner-1.jpg" alt="banner">
										<span class="text-banner">
											<span class="title-banner-box">
												<h4>BEST Garden</h4>
												<span>TOOLS</span>
											</span>
											<span class="color-box-banner">50% OFF</span>
											<span class="desc-banner">On Selected Models</span>
										</span>
									</a>
								</div>
							</div>
							<div class="left-block-wrapper">
								<div class="title-left-block">
									<h3 class="text-uppercase">featured product</h3>
								</div>
								<div class="lb-content featured-product">
									<a href="#">
										<span class="f-image">
											<img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/store/product-5-s.jpg" alt="product">
										</span>
										<span class="f-product-descr">
											<span class="product-title">
												<span>Easimo LawnMower</span>
											</span>
											<span class="product-desc">Flymo Electric 900W</span>
											<div class="rating">
												<span class="ef icon_star"></span>
												<span class="ef icon_star"></span>
												<span class="ef icon_star"></span>
												<span class="ef icon_star"></span>
												<span class="ef icon_star"></span>
											</div>
										</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="full-width-box wow fadeInUp">
					<div class="wrapper">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<h1>Our Brands</h1>
							<span class="subtitle">Nam lobortis fringilla felis. Fusce vol utpat mi at urna ras quam vitae</span>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div id="owl-brends">
								<div class="item"><img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/brands/brand-1.jpg" alt="brand"></div>
								<div class="item"><img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/brands/brand-2.jpg" alt="brand"></div>
								<div class="item"><img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/brands/brand-3.jpg" alt="brand"></div>
								<div class="item"><img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/brands/brand-4.jpg" alt="brand"></div>
								<div class="item"><img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/brands/brand-5.jpg" alt="brand"></div>
							</div>
						</div>
					</div>
				</section>










<!-- 

            <section class="color-bg box-tools-bg percent-blocks">
                <div class="wrapper">
                    <div class="row-1">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <ul class="our-info h1">
                                <li class="chart" data-percent="1500">
                                    <span class="ef icon_like_alt"></span>
                                    <div class="number percent"></div>
                                    <div class="text">Completed Projects</div>
                                </li>
                                <li class="chart" data-percent="358">
                                    <span class="ef icon_group"></span>
                                    <div class="number percent"></div>
                                    <div class="text">Satisfied Customers</div>
                                </li>
                                <li class="chart" data-percent="26">
                                    <span class="ef icon_house"></span>
                                    <div class="number percent"></div>
                                    <div class="text">Nationwide Branches</div>
                                </li>
                                <li class="chart" data-percent="2641">
                                    <span class="ef icon_tools"></span>
                                    <div class="number percent"></div>
                                    <div class="text">Free Quotes Sent</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tooth-color-d"></div>
            </section> -->
<!--             <section class="content-foooter-2 no-line">
                <div class="wrapper">
                    <div class="row-1">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow rollIn">
                            <div class="footer-2-title-box">
                                <div class="fot-2-title">Follow Us</div>
                                <div class="fot-2-title">On Social Media</div>
                            </div>
                            <div class="soc-box">
                                <ul class="social-circle">
                                    <li><a href="#"><span class="ef social_facebook_circle"></span></a></li>
                                    <li><a href="#"><span class="ef social_twitter_circle"></span></a></li>
                                    <li><a href="#"><span class="ef social_pinterest_circle"></span></a></li>
                                    <li><a href="#"><span class="ef social_youtube_circle"></span></a></li>
                                    <li><a href="#"><span class="ef social_instagram_circle"></span></a></li>
                                    <li><a href="#"><span class="ef social_googleplus_circle"></span></a></li>
                                </ul>
                                <div class="followers">5k Followers</div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow lightSpeedIn">
                            <div class="attractive-box">
                                <div class="attractive">
                                    Hire Us For Any Service & Get 25% Off Now &bull; Ends 10 April<div class="attractive-text left"><span class="att-text">Limited Time offer</span><span class="ef arrow_triangle-down"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>        --> 

            <footer id="footer">
                <div class="footer-blocks">
                    <div class="wrapper">
                        <div class="row-footer">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 wow fadeInLeft">
                                <div class="footer-logo">
                                    <a href="#" class="logo-footer"></a>
                                </div>
                                <div class="f-b-box">
                                    <p>花花花卉，是一家线上线下同步运营的大型花卉市场，我们以真诚的服务为你效劳！！！</p>
                                    <a class="btn btn-border dark" href="."><span>Read More</span></a>
                                    <div class="f-subscribe">
                                        <h4>Subscribe Newsletter</h4>
                                        <div id="mc_embed_signup">
                                            <form action="/templines.us9.list-manage.com/subscribe/post?u=fe9a9cfcf8d73763bcc53f206&amp;id=319cafcc43" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                                <div id="mc_embed_signup_scroll">
                                                    <div class="mc-field-group">
                                                        <input type="email" value="#" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Enter your email">
                                                    </div>
                                                    <div id="mce-responses" class="clear">
                                                        <div class="response" id="mce-error-response" style="display:none"></div>
                                                        <div class="response" id="mce-success-response" style="display:none"></div>
                                                    </div>
                                                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                                    <div style="position: absolute; left: -5000px;">
                                                        <input type="text" name="b_fe9a9cfcf8d73763bcc53f206_319cafcc43" tabindex="-1" value="#">
                                                    </div>
                                                    <div class="clear">
                                                        <button type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe"   class="btn btn-primary btn-icon-right"><span class="btn-icon"><i class="fa icon_mail_alt "></i></span> </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 wow fadeInUp">
                                <h4 class="border">Latest Tweets</h4>
                                <div class="f-b-box">
                                    <ul class="lat-tw">
                                        <li>
                                            <span class="ef social_twitter_circle"></span>
                                            <div class="tw-message">
                                                买花卉，就来xx网 <a href="."></a>
                                            </div>
                                            <div class="tw-time">1 minute ago</div>
                                        </li>
                                        <li>
                                            <span class="ef social_twitter_circle"></span>
                                            <div class="tw-message">
                                                我们荣获河南省花卉协会xx <a href="."></a>
                                            </div>
                                            <div class="tw-time">35 minute ago</div>
                                        </li>
                                        <li>
                                            <span class="ef social_twitter_circle"></span>
                                            <div class="tw-message">
                                               新推出花卉，新西兰品<a href="."></a>
                                            </div>
                                            <div class="tw-time">2 hours ago</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 wow fadeInUp">
                                <h4 class="border">instagram Feed</h4>
                                <div class="f-b-box">
                                    <div class="i-row">
                                        <div class="box-i-image">
                                            <a href="." class="i-image">
                                                <img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/80x80/in1.jpg" alt="instagramm">
                                            </a>
                                        </div>
                                        <div class="box-i-image">
                                            <a href="." class="i-image">
                                                <img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/80x80/in2.jpg" alt="instagramm">
                                            </a>
                                        </div>
                                        <div class="box-i-image">
                                            <a href="." class="i-image">
                                                <img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/80x80/in3.jpg" alt="instagramm">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="i-row">
                                        <div class="box-i-image">
                                            <a href="." class="i-image">
                                                <img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/80x80/in4.jpg" alt="instagramm">
                                            </a>
                                        </div>
                                        <div class="box-i-image">
                                            <a href="." class="i-image">
                                                <img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/80x80/in5.jpg" alt="instagramm">
                                            </a>
                                        </div>
                                        <div class="box-i-image">
                                            <a href="." class="i-image">
                                                <img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/80x80/in6.jpg" alt="instagramm">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="i-row">
                                        <div class="box-i-image">
                                            <a href="." class="i-image">
                                                <img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/80x80/in7.jpg" alt="instagramm">
                                            </a>
                                        </div>
                                        <div class="box-i-image">
                                            <a href="." class="i-image">
                                                <img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/80x80/in8.jpg" alt="instagramm">
                                            </a>
                                        </div>
                                        <div class="box-i-image">
                                            <a href="." class="i-image">
                                                <img src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/media/80x80/in9.jpg" alt="instagramm">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 wow fadeInRight">
                                <h4 class="border">Contact Info</h4>
                                <div class="f-b-box">
                                    <div class="contact-f-wrapper">
                                        <div class="f-contact-box">
                                            <span class="contact-name">
                                                Address:
                                            </span>
                                            <span class="contact-info">
                                                焦作市，河南理工大学
                                            </span>
                                        </div>
                                        <div class="f-contact-box">
                                            <span class="contact-name">
                                                焦作办公室:
                                            </span>
                                            <span class="contact-info">
                                                +12 3456 7890 / +12 3456 0987
                                            </span>
                                        </div>
                                        <div class="f-contact-box">
                                            <span class="contact-name">
                                                郑州办公室:
                                            </span>
                                            <span class="contact-info">
                                                +12 3456 7890 / +12 3456 0987
                                            </span>
                                        </div>
                                        <div class="f-contact-box">
                                            <span class="contact-name">
                                                传真:
                                            </span>
                                            <span class="contact-info">
                                                +0542 000 594
                                            </span>
                                        </div>
                                        <div class="f-contact-box">
                                            <span class="contact-name">
                                                Email:
                                            </span>
                                            <span class="contact-info">
                                                info@domain.com
                                            </span>
                                        </div>
                                    </div>

                                 
                                </div>
                            </div>



                        </div>



                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="wrapper">
                        <div class="row-footer">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeInLeft">
                                <span class="copiright">
                                    Copyright &copy; 2018.huaFlower All rights reserved.More Templates
                                </span>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 nav-footer wow fadeInRight">
                                <ul>
                                    <li class="active">
                                        <a href="#">home</a>
                                    </li>
                                    <li>
                                        <a href="#">about</a>
                                    </li>
                                    <li>
                                        <a href="#">services</a>
                                    </li>
                                    <li>
                                        <a href="#">our works</a>
                                    </li>
                                    <li>
                                        <a href="#">store</a>
                                    </li>
                                    <li>
                                        <a href="#">blog</a>
                                    </li>
                                    <li>
                                        <a href="#">contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>    
        </div>

        <script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/plugins/switcher/js/bootstrap-select.js"></script> 
        <script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/plugins/switcher/js/evol.colorpicker.min.js" type="text/javascript"></script> 
        <script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/plugins/switcher/js/dmss.js"></script>
        
        <script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/js/jquery-ui.min.js"></script>
        <script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/js/modernizr.custom.js"></script>
        <script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/js/smoothscroll.min.js"></script>
        <script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/js/wow.min.js"></script>

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->    

        <!--Owl Carousel-->
        <script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/plugins/owl-carousel/owl.carousel.min.js"></script>
        <script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
        <script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/js/waypoints.min.js"></script>
        <script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/js/jquery.easypiechart.min.js"></script>
        <script src="<?php echo \think\Config::get('WEBSERVER'); ?>/public/hua/js/func.js"></script>
    </body>
</html>

