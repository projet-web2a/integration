<?php  session_start(); ?>
<?php
if(empty($_SESSION["username"]))
{
	echo "<script type='text/javascript'>";
echo "alert('please login first!');
window.location.href='index1.php';";
echo "</script>";
//header('Location: index1.php');
	$user="";
}
else
{
$user=$_SESSION["username"];
}?>
<?php 
 
require '../../core/produitC.php';
$produitC=new produitC();
$listeproduit=$produitC->afficherproduit();
$num=$produitC->shop();
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>EyeZone|Shop</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Goggles a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/login_overlay.css" rel='stylesheet' type='text/css' />
	<link href="css/style6.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/shop.css" type="text/css" />
	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
	<link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
</head>

<body>
	<div class="banner-top container-fluid" id="home">
		<!-- header -->
		<header>
			<div class="row">
				<div class="col-md-3 top-info text-left mt-lg-4">
					<h6>Need Help</h6>
					<ul>
						<li>
							<i class="fas fa-phone"></i> Call</li>
						<li class="number-phone mt-3">+21655996989</li>
					</ul>
				</div>
				<div class="col-md-6 logo-w3layouts text-center">
				  <a href="index1.php"><img src="images/logo1.png"></a>
				</div>

				<div class="col-md-3 top-info-cart text-right mt-lg-4">
					<ul class="cart-inner-info">
					
					
					
					
					
					<li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell"></i><span class="badge bg-red badge-corner"><?php  if($num!=0)  {echo "1";} else {echo"0";}?></span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification">
                          <?php if($num!=0){?><div class="notification-content"><i class="fa fa-envelope bg-green"></i> <?php   echo $num; ?> New Product  </div>
                          <div class="notification-time"><small>4 minutes ago</small></div><?php } ?>
                        </div></a></li>
                    
                
                 
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>view all notifications</strong></a></li>
                  </ul>
                </li>
				
				
				
						<li class="galssescart galssescart2 cart cart box_1">
							<form action="3d.php" method="post" class="last">
								
								
								<button class="top_googles_cart" type="submit" name="submit" value="" href="3d.php">
									3D Eyewear
									<i class="fa fa-eye" aria-hidden="true"></i>
								</button>
							</form>
						</li>
					</ul>
					<!---->
				
				</div>
			</div>
		
			<label class="top-log mx-auto"></label>
			<nav class="navbar navbar-expand-lg navbar-light bg-light top-header mb-2">

				<button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						
					</span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav nav-mega mx-auto">
						<li class="nav-item active">
							<a class="nav-link ml-lg-0" href="index1.php">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="afficherpromotion1.php">Sale</a>
						</li>
			
						  <ul class="dropdown-menu mega-menu ">
								<li>
									<div class="row">
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub"> EyeZone </h5>
											<ul>
												<li class="media-mini mt-3">
													<a href="shop.php">Designer Glasses</a>
												</li>
												<li class="">
													<a href="shop.php"> Ray-Ban</a>
												</li>
												<li>
													<a href="shop.php">Prescription Glasses</a>
												</li>
												<li class="mt-3">
													<h5>View more pages</h5>
												</li>
												<li class="mt-2">
													<a href="about.html">About</a>
												</li>
												<li>
													<a href="customer.html">Customers</a>
												</li>
											</ul>
										</div>
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub"> Tittle goes here </h5>
											<div class="media-mini mt-3">
												<a href="shop.php">
													<img src="images/g2.jpg" class="img-fluid" alt="">
												</a>
											</div>
										</div>
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub">Tittle goes here </h5>
											<div class="media-mini mt-3">
												<a href="shop.php">
													<img src="images/g3.jpg" class="img-fluid" alt="">
												</a>
											</div>

										</div>
									</div>
									<hr>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false"  >
								   Shop 
								 
							</a>
							<ul class="dropdown-menu mega-menu ">
								<li>
									<div class="row">
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub"> Tittle goes here </h5>
											<ul>
												<li class="media-mini mt-3">
													<a href="shop.php">Designer Glasses</a>
												</li>
												<li class="">
													<a href="shop.php"> Ray-Ban</a>
												</li>
												<li>
													<a href="shop.php">Prescription Glasses</a>
												</li>
												<li>
													<a href="shop.php">Rx Sunglasses</a>
												</li>
												<li>
													<a href="shop.php">Contact Lenses</a>
												</li>
												<li>
													<a href="shop.php">Multifocal Glasses</a>
												</li>
												<li>
													<a href="shop.php">Kids Glasses</a>
												</li>
												<li>
													<a href="shop.php">Lightweight Glasses</a>
												</li>
												<li>
													<a href="shop.php">Sports Glasses</a>
												</li>
											</ul>
										</div>
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub"> Tittle goes here </h5>
											<ul>
												<li class="media-mini mt-3">

													<a href="shop.php">Brooks Brothers</a>
												</li>
												<li>
													<a href="shop.php">Persol</a>
												</li>
												<li>
													<a href="shop.php">Polo Ralph Lauren</a>
												</li>
												<li>
													<a href="shop.php">Prada</a>
												</li>
												<li>
													<a href="shop.php">Ray-Ban Jr</a>
												</li>
												<li>
													<a href="shop.php">Sferoflex</a>
												</li>
											</ul>
											<ul class="sub-in text-left">

												<li>
													<a href="shop.php">Polo Ralph Lauren</a>
												</li>
												<li>
													<a href="shop.php">Prada</a>
												</li>
												<li>
													<a href="shop.php">Ray-Ban Jr</a>
												</li>
											</ul>

										</div>
										<div class="col-md-4 media-list span4 text-left">

											<h5 class="tittle-w3layouts-sub-nav">Tittle goes here </h5>
											<div class="media-mini mt-3">
												<a href="shop.php">
													<img src="images/g1.jpg" class="img-fluid" alt="">
												</a>
											</div>

										</div>
									</div>
									<hr>
								</li>
							</ul>
						</li>
						 <li class="nav-item">
                            <a class="nav-link" href="modifiernbrvue.php">Events</a>
                        </li>
						<li class="nav-item">
							<a class="nav-link" href="contact.php">Contact</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="avis.php">Avis</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="sendRdv.php?action=yes">rendezvous</a>
						</li>
					</ul>

				</div>
			</nav>
		</header>
    </div>
		<!-- banner -->
		<div class="banner_inner">
			<div class="services-breadcrumb">
				<div class="inner_breadcrumb">

					<ul class="short">
						<li>
							<a href="index1.php">Home</a>
							<i>|</i>
						</li>
						<li>Shop</li>
					</ul>
				</div>
			</div>

		</div>
		<!--//banner -->
		<!--/shop-->
		<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
			<div class="container-fluid">
				<div class="inner-sec-shop px-lg-4 px-3">
					<h3 class="tittle-w3layouts my-lg-4 mt-3">New Arrivals for you </h3>
					<div class="row">
						<!-- product left -->
						<div class="side-bar col-lg-3">
							<div class="search-hotel">
								<h3 class="agileits-sear-head">Search Here..</h3>
								<form  method="post" action="chercher.php">
										<input class="form-control" type="search" name="sea" placeholder="Search here..." required="">
										
									<button class="btn1">
												<i class="fas fa-search"></i>
										
										</button>
										<div class="clearfix"> </div>
									</form>
							</div>
							<!-- price range -->
							<div class="range">
								<h3 class="agileits-sear-head">Price range</h3>
								<ul class="dropdown-menu6">
									<li>

										<div id="slider-range"></div>
										<input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
									</li>
								</ul>
							</div>
							<!-- //price range -->
							<!--preference -->
							<div class="left-side">
								<h3 class="agileits-sear-head">Deal Offer On</h3>
								<ul>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">Backpack</span>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">Phone Pocket</span>
									</li>

								</ul>
							</div>
							<!-- // preference -->
							<!-- discounts -->
							<div class="left-side">
								<h3 class="agileits-sear-head">Discount</h3>
								<ul>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">5% or More</span>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">10% or More</span>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">20% or More</span>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">30% or More</span>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">50% or More</span>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">60% or More</span>
									</li>
								</ul>
							</div>
							<!-- //discounts -->
							<!-- reviews -->
							<div class="customer-rev left-side">
								<h3 class="agileits-sear-head">Customer Review</h3>
								<ul>
									<li>
										<a href="#">
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<span>5.0</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star-o" aria-hidden="true"></i>
											<span>4.0</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star-half-o" aria-hidden="true"></i>
											<i class="fa fa-star-o" aria-hidden="true"></i>
											<span>3.5</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star-o" aria-hidden="true"></i>
											<i class="fa fa-star-o" aria-hidden="true"></i>
											<span>3.0</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star-half-o" aria-hidden="true"></i>
											<i class="fa fa-star-o" aria-hidden="true"></i>
											<i class="fa fa-star-o" aria-hidden="true"></i>
											<span>2.5</span>
										</a>
									</li>
								</ul>
							</div>
							<!-- //reviews -->
							<!-- deals -->
							<div class="deal-leftmk left-side">
								<h3 class="agileits-sear-head">Special Deals</h3>
								<div class="special-sec1">
									<div class="img-deals">
										<img src="images/s1.jpg" alt="">
									</div>
									<div class="img-deal1">
										<h3>Farenheit (Grey)</h3>
										<a href="single.html">$575.00</a>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="special-sec1">
									<div class="col-xs-4 img-deals">
										<img src="images/s2.jpg" alt="">
									</div>
									<div class="col-xs-8 img-deal1">
										<h3>Opium (Grey)</h3>
										<a href="single.html">$325.00</a>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="special-sec1">
										<div class="col-xs-4 img-deals">
											<img src="images/m2.jpg" alt="">
										</div>
										<div class="col-xs-8 img-deal1">
											<h3>Azmani Round</h3>
											<a href="single.html">$725.00</a>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="special-sec1">
											<div class="col-xs-4 img-deals">
												<img src="images/m4.jpg" alt="">
											</div>
											<div class="col-xs-8 img-deal1">
												<h3>Farenheit Oval</h3>
												<a href="single.html">$325.00</a>
											</div>
											<div class="clearfix"></div>
										</div>
							</div>
							<!-- //deals -->
						</div>
						<!-- //product left -->
						<!--/product right-->
						<div class="left-ads-display col-lg-9">
							<div class="wrapper_top_shop">
								<div class="row">
										<div class="col-md-6 shop_left">
												<img src="images/banner7.jpg" alt="">
												<h6>40% off</h6>
											</div>
											<div class="col-md-6 shop_right">
												<img src="images/banner4.jpg" alt="">
												<h6>50% off</h6>
											</div>
						
								</div>
							  <div class="row">
									<!-- /womens -->
					<?php foreach($listeproduit as $produit): ?>				
					<?php $refe=$produit->refe; ?>
								  <div class="col-md-3 product-men women_two shop-gd">
										<div class="product-googles-info googles">
											<div class="men-pro-item">
												<div class="men-thumb-item">
													<img src="images/<?= $produit->url; ?>" class="img-fluid" alt="">
													<div class="men-cart-pro">
														<div class="inner-men-cart-pro">
															<a href="single.php?refe=<?= $refe ?>" class="link-product-add-cart"><?= $produit->dest; ?></a>
														</div>
													</div>
													<span class="product-new-top"><?= $produit->dest; ?></span>
												</div>
												<div class="item-info-product">
													<div class="info-product-price">
														<div class="grid_meta">
															<div class="product_price">
															  <h4> <a href="single.php?refe='$refe'"> <?= $produit->mar ?></a></h4>
															  <div class="grid-price mt-2">
																	<span class="money "><?= $produit->prix; ?> Dt</span>
															  </div>
															</div>
															<ul class="stars">
																<li>
																	<a href="#">
																		<i class="fa fa-star" aria-hidden="true"></i>
																	</a>
																</li>
																<li>
																	<a href="#">
																		<i class="fa fa-star" aria-hidden="true"></i>
																	</a>
																</li>
																<li>
																	<a href="#">
																		<i class="fa fa-star" aria-hidden="true"></i>
																	</a>
																</li>
																<li>
																	<a href="#">
																		<i class="fa fa-star" aria-hidden="true"></i>
																	</a>
																</li>
																<li>
																	<a href="#">
																		<i class="fa fa-star-half-o" aria-hidden="true"></i>
																	</a>
																</li>
															</ul>
														</div>
														<div class="googles single-item hvr-outline-out">
															<form action="#" method="post">
																<input type="hidden" name="cmd" value="_cart">
																<input type="hidden" name="add" value="1">
																<input type="hidden" name="googles_item" value="Farenheit">
																<input type="hidden" name="amount" value="575.00">
																<button type="submit" class="googles-cart pgoogles-cart">
																	<i class="fas fa-cart-plus"></i>
																</button>
															</form>

														</div>
													</div>
													<div class="clearfix"></div>
												</div>
											</div>
										</div>
									</div>
									
					<?php endforeach; ?>

		</div>
								
									
							</div>
						</div>
						<!--//product right-->
					</div>
					<!--/slide-->
				<div class="slider-img mid-sec mt-lg-5 mt-2">
						<!--//banner-sec-->
						<h3 class="tittle-w3layouts text-left my-lg-4 my-3">Featured Products</h3>
						<div class="mid-slider">
							<div class="owl-carousel owl-theme row">
								<div class="item">
									<div class="gd-box-info text-center">
										<div class="product-men women_two bot-gd">
											<div class="product-googles-info slide-img googles">
												<div class="men-pro-item">
													<div class="men-thumb-item">
														<img src="images/s5.jpg" class="img-fluid" alt="">
														<div class="men-cart-pro">
															<div class="inner-men-cart-pro">
																<a href="single.php?refe=<?= $refe ?>" class="link-product-add-cart">Quick View</a>
															</div>
														</div>
														<span class="product-new-top">New</span>
													</div>
													<div class="item-info-product">
	
														<div class="info-product-price">
															<div class="grid_meta">
																<div class="product_price">
																	<h4>
																		<a href="single.php?refe='$refe'">Fastrack Aviator </a>
																	</h4>
																	<div class="grid-price mt-2">
																		<span class="money ">$325.00</span>
																	</div>
																</div>
																<ul class="stars">
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star-half-o" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star-o" aria-hidden="true"></i>
																		</a>
																	</li>
																</ul>
															</div>
															<div class="googles single-item hvr-outline-out">
																<form action="#" method="post">
																	<input type="hidden" name="cmd" value="_cart">
																	<input type="hidden" name="add" value="1">
																	<input type="hidden" name="googles_item" value="Fastrack Aviator">
																	<input type="hidden" name="amount" value="325.00">
																	<button type="submit" class="googles-cart pgoogles-cart">
																		<i class="fas fa-cart-plus"></i>
																	</button>

																</form>
	
															</div>
														</div>
	
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="gd-box-info text-center">
										<div class="product-men women_two bot-gd">
											<div class="product-googles-info slide-img googles">
												<div class="men-pro-item">
													<div class="men-thumb-item">
														<img src="images/s6.jpg" class="img-fluid" alt="">
														<div class="men-cart-pro">
															<div class="inner-men-cart-pro">
																<a href="single.php?refe='$refe'" class="link-product-add-cart">Quick View</a>
															</div>
														</div>
														<span class="product-new-top">New</span>
													</div>
													<div class="item-info-product">
	
														<div class="info-product-price">
															<div class="grid_meta">
																<div class="product_price">
																	<h4>
																		<a href="single.php?refe='$refe'">MARTIN Aviator </a>
																	</h4>
																	<div class="grid-price mt-2">
																		<span class="money ">$425.00</span>
																	</div>
																</div>
																<ul class="stars">
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star-half-o" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star-o" aria-hidden="true"></i>
																		</a>
																	</li>
																</ul>
															</div>
															<div class="googles single-item hvr-outline-out">
																<form action="#" method="post">
																	<input type="hidden" name="cmd" value="_cart">
																	<input type="hidden" name="add" value="1">
																	<input type="hidden" name="googles_item" value="MARTIN Aviator">
																	<input type="hidden" name="amount" value="425.00">
																	<button type="submit" class="googles-cart pgoogles-cart">
																		<i class="fas fa-cart-plus"></i>
																	</button>
																</form>
	
															</div>
														</div>
	
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="gd-box-info text-center">
										<div class="product-men women_two bot-gd">
											<div class="product-googles-info slide-img googles">
												<div class="men-pro-item">
													<div class="men-thumb-item">
														<img src="images/s7.jpg" class="img-fluid" alt="">
														<div class="men-cart-pro">
															<div class="inner-men-cart-pro">
																<a href="single.php?refe='$refe'" class="link-product-add-cart">Quick View</a>
															</div>
														</div>
														<span class="product-new-top">New</span>
													</div>
													<div class="item-info-product">
	
														<div class="info-product-price">
															<div class="grid_meta">
																<div class="product_price">
																	<h4>
																		<a href="single.php?refe='$refe'">Royal Son Aviator </a>
																	</h4>
																	<div class="grid-price mt-2">
																		<span class="money ">$425.00</span>
																	</div>
																</div>
																<ul class="stars">
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star-half-o" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star-o" aria-hidden="true"></i>
																		</a>
																	</li>
																</ul>
															</div>
															<div class="googles single-item hvr-outline-out">
																<form action="#" method="post">
																	<input type="hidden" name="cmd" value="_cart">
																	<input type="hidden" name="add" value="1">
																	<input type="hidden" name="googles_item" value="Royal Son Aviator">
																	<input type="hidden" name="amount" value="425.00">
																	<button type="submit" class="googles-cart pgoogles-cart">
																		<i class="fas fa-cart-plus"></i>
																	</button>
																</form>
	
															</div>
														</div>
	
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="gd-box-info text-center">
										<div class="product-men women_two bot-gd">
											<div class="product-googles-info slide-img googles">
												<div class="men-pro-item">
													<div class="men-thumb-item">
														<img src="images/s8.jpg" class="img-fluid" alt="">
														<div class="men-cart-pro">
															<div class="inner-men-cart-pro">
																<a href="single.php?refe='$refe'" class="link-product-add-cart">Quick View</a>
															</div>
														</div>
														<span class="product-new-top">New</span>
													</div>
													<div class="item-info-product">
	
														<div class="info-product-price">
															<div class="grid_meta">
																<div class="product_price">
																	<h4>
																		<a href="single.php?refe='$refe'">Irayz Butterfly </a>
																	</h4>
																	<div class="grid-price mt-2">
																		<span class="money ">$281.00</span>
																	</div>
																</div>
																<ul class="stars">
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star-half-o" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star-o" aria-hidden="true"></i>
																		</a>
																	</li>
																</ul>
															</div>
															<div class="googles single-item hvr-outline-out">
																<form action="#" method="post">
																	<input type="hidden" name="cmd" value="_cart">
																	<input type="hidden" name="add" value="1">
																	<input type="hidden" name="googles_item" value="Irayz Butterfly">
																	<input type="hidden" name="amount" value="281.00">
																	<button type="submit" class="googles-cart pgoogles-cart">
																		<i class="fas fa-cart-plus"></i>
																	</button>
																</form>
	
															</div>
														</div>
	
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="gd-box-info text-center">
										<div class="product-men women_two bot-gd">
											<div class="product-googles-info slide-img googles">
												<div class="men-pro-item">
													<div class="men-thumb-item">
														<img src="images/s9.jpg" class="img-fluid" alt="">
														<div class="men-cart-pro">
															<div class="inner-men-cart-pro">
																<a href="single.php?refe='$refe'" class="link-product-add-cart">Quick View</a>
															</div>
														</div>
														<span class="product-new-top">New</span>
													</div>
													<div class="item-info-product">
	
														<div class="info-product-price">
															<div class="grid_meta">
																<div class="product_price">
																	<h4>
																		<a href="single.php?refe='$refe'">Jerry Rectangular </a>
																	</h4>
																	<div class="grid-price mt-2">
																		<span class="money ">$525.00</span>
																	</div>
																</div>
																<ul class="stars">
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star-half-o" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star-o" aria-hidden="true"></i>
																		</a>
																	</li>
																</ul>
															</div>
															<div class="googles single-item hvr-outline-out">
																<form action="#" method="post">
																	<input type="hidden" name="cmd" value="_cart">
																	<input type="hidden" name="add" value="1">
																	<input type="hidden" name="googles_item" value="Jerry Rectangular ">
																	<input type="hidden" name="amount" value="525.00">
																	<button type="submit" class="googles-cart pgoogles-cart">
																		<i class="fas fa-cart-plus"></i>
																	</button>
																</form>
	
															</div>
														</div>
	
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="gd-box-info text-center">
										<div class="product-men women_two bot-gd">
											<div class="product-googles-info slide-img googles">
												<div class="men-pro-item">
													<div class="men-thumb-item">
														<img src="images/s10.jpg" class="img-fluid" alt="">
														<div class="men-cart-pro">
															<div class="inner-men-cart-pro">
																<a href="single.php?refe='$refe'" class="link-product-add-cart">Quick View</a>
															</div>
														</div>
														<span class="product-new-top">New</span>
													</div>
													<div class="item-info-product">
	
														<div class="info-product-price">
															<div class="grid_meta">
																<div class="product_price">
																	<h4>
																		<a href="single.php?refe='$refe'">Herdy Wayfarer </a>
																	</h4>
																	<div class="grid-price mt-2">
																		<span class="money ">$325.00</span>
																	</div>
																</div>
																<ul class="stars">
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star-half-o" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star-o" aria-hidden="true"></i>
																		</a>
																	</li>
																</ul>
															</div>
															<div class="googles single-item hvr-outline-out">
																<form action="#" method="post">
																	<input type="hidden" name="cmd" value="_cart">
																	<input type="hidden" name="add" value="1">
																	<input type="hidden" name="googles_item" value="Herdy Wayfarer">
																	<input type="hidden" name="amount" value="325.00">
																	<button type="submit" class="googles-cart pgoogles-cart">
																		<i class="fas fa-cart-plus"></i>
																	</button>
																</form>
	
															</div>
														</div>
	
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--//slider-->
				</div>
			</div>
		</section>
		<!--footer -->
		<footer class="py-lg-5 py-3">
			<div class="container-fluid px-lg-5 px-3">
				<div class="row footer-top-w3layouts">
					<div class="col-lg-3 footer-grid-w3ls">
						<div class="footer-title">
							<h3>About Us</h3>
						</div>
						<div class="footer-text">
							<p>Curabitur non nulla sit amet nislinit tempus convallis quis ac lectus. lac inia eget consectetur sed, convallis at
								tellus. Nulla porttitor accumsana tincidunt.</p>
							<ul class="footer-social text-left mt-lg-4 mt-3">

								<li class="mx-2">
									<a href="#">
										<span class="fab fa-facebook-f"></span>
									</a>
								</li>
								<li class="mx-2">
									<a href="#">
										<span class="fab fa-twitter"></span>
									</a>
								</li>
								<li class="mx-2">
									<a href="#">
										<span class="fab fa-google-plus-g"></span>
									</a>
								</li>
								<li class="mx-2">
									<a href="#">
										<span class="fab fa-linkedin-in"></span>
									</a>
								</li>
								<li class="mx-2">
									<a href="#">
										<span class="fas fa-rss"></span>
									</a>
								</li>
								<li class="mx-2">
									<a href="#">
										<span class="fab fa-vk"></span>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 footer-grid-w3ls">
						<div class="footer-title">
							<h3>Get in touch</h3>
						</div>
						<div class="contact-info">
							<h4>Location :</h4>
							<p>0926k 4th block building, king Avenue, New York City.</p>
							<div class="phone">
								<h4>Contact :</h4>
								<p>Phone : +121 098 8907 9987</p>
								<p>Email :
									<a href="mailto:info@example.com">info@example.com</a>
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 footer-grid-w3ls">
						<div class="footer-title">
							<h3>Quick Links</h3>
						</div>
						<ul class="links">
							<li>
								<a href="index1.php">Home</a>
							</li>
							<li>
								<a href="about.html">About</a>
							</li>
							<li>
								<a href="404.html">Error</a>
							</li>
							<li>
								<a href="shop.php">Shop</a>
							</li>
							<li>
								<a href="contact.html">Contact Us</a>
							</li>
						</ul>
					</div>
					<div class="col-lg-3 footer-grid-w3ls">
						<div class="footer-title">
							<h3>Sign up for your offers</h3>
						</div>
						<div class="footer-text">
							<p>By subscribing to our mailing list you will always get latest news and updates from us.</p>
							<form action="#" method="post">
								<input class="form-control" type="email" name="Email" placeholder="Enter your email..." required="">
								<button class="btn1">
									<i class="far fa-envelope" aria-hidden="true"></i>
								</button>
								<div class="clearfix"> </div>
							</form>
						</div>
					</div>
				</div>
				<div class="copyright-w3layouts mt-4">
					<p class="copy-right text-center ">&copy; 2018 Goggles. All Rights Reserved | Design by
						<a href="http://w3layouts.com/"> W3layouts </a>
					</p>
				</div>
			</div>
		</footer>
		<!-- //footer -->

		<!--jQuery-->
		<script src="js/jquery-2.2.3.min.js"></script>
		<!-- newsletter modal -->
		<!--search jQuery-->
		<script src="js/modernizr-2.6.2.min.js"></script>
		<script src="js/classie-search.js"></script>
		<script src="js/demo1-search.js"></script>
		<!--//search jQuery-->
		<!-- cart-js -->
		<script src="js/minicart.js"></script>
		<script>
			googles.render();

			googles.cart.on('googles_checkout', function (evt) {
				var items, len, i;

				if (this.subtotal() > 0) {
					items = this.items();

					for (i = 0, len = items.length; i < len; i++) {}
				}
			});
		</script>
		<!-- //cart-js -->
		<script>
			$(document).ready(function () {
				$(".button-log a").click(function () {
					$(".overlay-login").fadeToggle(200);
					$(this).toggleClass('btn-open').toggleClass('btn-close');
				});
			});
			$('.overlay-close1').on('click', function () {
				$(".overlay-login").fadeToggle(200);
				$(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
				open = false;
			});
		</script>
		<!-- carousel -->
		<!-- price range (top products) -->
		<script src="js/jquery-ui.js"></script>
		<script>
			//<![CDATA[ 
			$(window).load(function () {
				$("#slider-range").slider({
					range: true,
					min: 0,
					max: 9000,
					values: [50, 6000],
					slide: function (event, ui) {
						$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
					}
				});
				$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

			}); //]]>
		</script>
		<!-- //price range (top products) -->

		<script src="js/owl.carousel.js"></script>
		<script>
			$(document).ready(function () {
				$('.owl-carousel').owlCarousel({
					loop: true,
					margin: 10,
					responsiveClass: true,
					responsive: {
						0: {
							items: 1,
							nav: true
						},
						600: {
							items: 2,
							nav: false
						},
						900: {
							items: 3,
							nav: false
						},
						1000: {
							items: 4,
							nav: true,
							loop: false,
							margin: 20
						}
					}
				})
			})
		</script>

		<!-- //end-smooth-scrolling -->


		<!-- dropdown nav -->
		<script>
			$(document).ready(function () {
				$(".dropdown").hover(
					function () {
						$('.dropdown-menu', this).stop(true, true).slideDown("fast");
						$(this).toggleClass('open');
					},
					function () {
						$('.dropdown-menu', this).stop(true, true).slideUp("fast");
						$(this).toggleClass('open');
					}
				);
			});
		</script>
		<!-- //dropdown nav -->
		<script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->

		<script src="js/bootstrap.js"></script>
		<!-- js file -->
		
		
</body>

</html>