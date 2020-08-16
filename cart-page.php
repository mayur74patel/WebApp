<?php include 'header.php'?>        <!-- Shop Cart Page Section start here -->		            
	    <div class="shop-cart padding-tb">
            <div class="container">
                <div class="section-wrapper">
                    <div class="cart-top">
                        <table>
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="product-item">
                                        <div class="p-thumb">
                                            <a href="#"><img src="assets/images/product/10.jpg" alt="product"></a>
                                        </div>
                                        <div class="p-content">
                                            <a href="#">Product Text Here</a>
                                        </div>
                                    </td>
                                    <td>$250</td>
                                    <td>
                                        <div class="cart-plus-minus">
                                            <div class="dec qtybutton">-</div>
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="3">
                                            <div class="inc qtybutton">+</div>
                                        </div>
                                    </td>
                                    <td>$750</td>
                                    <td>
                                        <a href="#"><img src="assets/images/del.png" alt="product"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product-item">
                                        <div class="p-thumb">
                                            <a href="#"><img src="assets/images/product/11.jpg" alt="product"></a>
                                        </div>
                                        <div class="p-content">
                                            <a href="#">Product Text Here</a>
                                        </div>
                                    </td>
                                    <td>$250</td>
                                    <td>
                                        <div class="cart-plus-minus">
                                            <div class="dec qtybutton">-</div>
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                            <div class="inc qtybutton">+</div>
                                        </div>
                                    </td>
                                    <td>$500</td>
                                    <td>
                                        <a href="#"><img src="assets/images/del.png" alt="product"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product-item">
                                        <div class="p-thumb">
                                            <a href="#"><img src="assets/images/product/12.jpg" alt="product"></a>
                                        </div>
                                        <div class="p-content">
                                            <a href="#">Product Text Here</a>
                                        </div>
                                    </td>
                                    <td>$50</td>
                                    <td>
                                        <div class="cart-plus-minus">
                                            <div class="dec qtybutton">-</div>
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                            <div class="inc qtybutton">+</div>
                                        </div>
                                    </td>
                                    <td>$100</td>
                                    <td>
                                        <a href="#"><img src="assets/images/del.png" alt="product"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product-item">
                                        <div class="p-thumb">
                                            <a href="#"><img src="assets/images/product/13.jpg" alt="product"></a>
                                        </div>
                                        <div class="p-content">
                                            <a href="#">Product Text Here</a>
                                        </div>
                                    </td>
                                    <td>$100</td>
                                    <td>
                                        <div class="cart-plus-minus">
                                            <div class="dec qtybutton">-</div>
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                            <div class="inc qtybutton">+</div>
                                        </div>
                                    </td>
                                    <td>$200</td>
                                    <td>
                                        <a href="#"><img src="assets/images/del.png" alt="product"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product-item">
                                        <div class="p-thumb">
                                            <a href="#"><img src="assets/images/product/14.jpg" alt="product"></a>
                                        </div>
                                        <div class="p-content">
                                            <a href="#">Product Text Here</a>
                                        </div>
                                    </td>
                                    <td>$200</td>
                                    <td>
                                        <div class="cart-plus-minus">
                                            <div class="dec qtybutton">-</div>
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                            <div class="inc qtybutton">+</div>
                                        </div>
                                    </td>
                                    <td>$400</td>
                                    <td>
                                        <a href="#"><img src="assets/images/del.png" alt="product"></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="cart-bottom">
                        <div class="cart-checkout-box">
                            <form action="http://labartisan.net/" class="coupon">
                                <input type="text" name="coupon" placeholder="Coupon Code..." class="cart-page-input-text">
                                <input type="submit" value="Apply Coupon">
                            </form>
                            <form action="http://labartisan.net/" class="cart-checkout">
                                <input type="submit" value="Update Cart">
                                <input type="submit" value="Proceed to Checkout">
                            </form>
                        </div>
                        <div class="shiping-box">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="calculate-shiping">
                                        <h4>Calculate Shipping</h4>
                                        <div class="outline-select">
                                            <select>
                                                <option value="volvo">United Kingdom (UK)</option>
                                                <option value="saab">Bangladesh</option>
                                                <option value="saab">Pakisthan</option>
                                                <option value="saab">India</option>
                                                <option value="saab">Nepal</option>
                                            </select>
                                            <span class="select-icon"><i class="icofont-caret-down"></i></span>
                                        </div>
                                        <div class="outline-select shipping-select">
                                            <select>
                                                <option value="volvo">State/Country</option>
                                                <option value="saab">Dhaka</option>
                                                <option value="saab">Benkok</option>
                                                <option value="saab">Kolkata</option>
                                                <option value="saab">Kapasia</option>
                                            </select>
                                            <span class="select-icon"><i class="icofont-caret-down"></i></span>
                                        </div>
                                        <input type="text" name="coupon" placeholder="Postcode/ZIP" class="cart-page-input-text"/>	
                                        <button type="submit" class="lab-btn"><span>Update Total</span></button>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="cart-overview">
                                        <h4>Cart Totals</h4>
                                        <ul>
                                            <li>
                                                <span class="pull-left">Cart Subtotal</span>
                                                <p class="pull-right">$ 0.00</p>
                                            </li>
                                            <li>
                                                <span class="pull-left">Shipping and Handling</span>
                                                <p class="pull-right">Free Shipping</p>
                                            </li>
                                            <li>
                                                <span class="pull-left">Order Total</span>
                                                <p class="pull-right">$ 2940.00</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shop Cart Page Section ending here -->
        
        <!-- newsletters section start here -->
		<div class="newsletter-section">
			<div class="container">
				<div class="row justify-content-lg-between justify-content-center align-items-center">
					<div class="col-lg-6 col-12">
						<div class="newsletter-title">
							<h4>Subscribe Our Newsletter</h4>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="newsletter-form">
							<form action="http://labartisan.net/" class="d-flex flex-wrap">
								<input type="text" placeholder="Enter Your Email" class="input-email">
								<input type="submit" value="Subscribe" class="subscribe-btn">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- newsletters section ending here -->
        
		<!-- footer section start here -->
		<footer class="footer-section padding-tb pb-0">
			<div class="container">
				<div class="footer-top">
					<div class="row">
						<div class="col-xl-3 col-md-6 col-12">
							<div class="footer-item">
								<div class="footer-inner">
									<div class="footer-logo">
										<img src="assets/images/logo/01.png" alt="footer-logo">
									</div>
									<div class="footer-desc">
										<p>Conveniently customizec web services aggregate frictionle internet withouevs Conveniently customizec.</p>
										<p>aggregate frictionle without aggregate Conveniently customizec efrictionle.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6 col-12">
							<div class="footer-item footer-addtess">
								<div class="footer-inner">
									<div class="footer-title">
										<h5>Keep In Touch</h5>
									</div>
									<div class="footer-body">
										<ul class="agri-ul">
											<li>
												<div class="icon">
													<i class="icofont-google-map"></i>
												</div>
												<div class="detalis">
													<p>Sector # 48,123 Vokte Street, Melborn city, Australia</p>
												</div>
											</li>
											<li>
												<div class="icon">
													<i class="icofont-phone"></i>
												</div>
												<div class="detalis">
													<p>+88978-658-125, 0078-98-954, +1655-456-523</p>
												</div>
											</li>
											<li>
												<div class="icon">
													<i class="icofont-envelope"></i>
												</div>
												<div class="detalis">
													<p>Chashi@gmail.com</p>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6 col-12">
							<div class="footer-item footer-blog">
								<div class="footer-inner">
									<div class="footer-title">
										<h5>Chashi Product</h5>
									</div>
									<div class="footer-body">
										<ul class="agri-ul">
											<li>
												<div class="thumb">
													<a href="blog-single.php"><img src="assets/images/blog/01.jpg" alt="footer-blog"></a>
												</div>
												<div class="detalis">
													<a href="blog-single.php"><h5>Fruits &Vegetable</h5></a>
													<h6>$24.99</h6>
												</div>
											</li>
											<li>
												<div class="thumb">
													<a href="blog-single.php"><img src="assets/images/blog/02.jpg" alt="footer-blog"></a>
												</div>
												<div class="detalis">
													<a href="blog-single.php"><h5>Natural &Honey</h5></a>
													<h6>$25.99</h6>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6 col-12">
							<div class="footer-item footer-gallery">
								<div class="footer-inner">
									<div class="footer-title">
										<h5>Chashi Product</h5>
									</div>
									<div class="footer-body">
										<ul class="agri-ul">
											<li><a href="#"><img src="assets/images/gallery/01.jpg" alt="footer-gallery"></a></li>
											<li><a href="#"><img src="assets/images/gallery/02.jpg" alt="footer-gallery"></a></li>
											<li><a href="#"><img src="assets/images/gallery/03.jpg" alt="footer-gallery"></a></li>
											<li><a href="#"><img src="assets/images/gallery/04.jpg" alt="footer-gallery"></a></li>
											<li><a href="#"><img src="assets/images/gallery/05.jpg" alt="footer-gallery"></a></li>
											<li><a href="#"><img src="assets/images/gallery/06.jpg" alt="footer-gallery"></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-bottom">
					<p>&copy; 2020<a href="index.php" target="_blank"><span>Chashi</span></a>All Rights Reserved By<a href="https://themeforest.net/user/labartisan" target="_blank"><span>LabArtisan</span></a></p>
				</div>
			</div>
		</footer>
		<!-- footer section ending here -->

		<!-- scrollToTop start here -->
		<a href="#" class="scrollToTop"><i class="icofont-swoosh-up"></i><span class="pluse_1"></span><span class="pluse_2"></span></a>
		<!-- scrollToTop ending here -->

		
		<script src="assets/js/jquery.js"></script>
		<script src="assets/js/fontawesome.min.js"></script>
		<script src="assets/js/waypoints.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/wow.min.js"></script>
		<script src="assets/js/swiper.min.js"></script>
		<script src="assets/js/jquery.countdown.min.js"></script>
		<script src="assets/js/jquery.counterup.min.js"></script>
		<script src="assets/js/isotope.pkgd.min.js"></script>
		<script src="assets/js/lightcase.js"></script>
        <script src="assets/js/functions.js"></script>
	</body>

<!-- Mirrored from labartisan.net/demo/chashi/cart-page.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Aug 2020 05:29:21 GMT -->
</html>