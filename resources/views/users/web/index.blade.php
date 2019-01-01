@extends('users/layouts/master')

@section('banner_right')
<section class="slider">
	<div class="flexslider">
		<ul class="slides">
			<li>
				<div class="w3l_banner_nav_right_banner">
					<h3>Make your <span>food</span> with Spicy.</h3>
					<div class="more">
						<a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
					</div>
				</div>
			</li>
			<li>
				<div class="w3l_banner_nav_right_banner1">
					<h3>Make your <span>food</span> with Spicy.</h3>
					<div class="more">
						<a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
					</div>
				</div>
			</li>
			<li>
				<div class="w3l_banner_nav_right_banner2">
					<h3>upto <i>50%</i> off.</h3>
					<div class="more">
						<a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
					</div>
				</div>
			</li>
		</ul>
	</div>
</section>
<!-- flexSlider -->
	<link rel="stylesheet" href="{{asset('users/css/flexslider.css')}}" type="text/css" media="screen" property="" />
	<script defer src="{{asset('users/js/jquery.flexslider.js')}}"></script>
	<script type="text/javascript">
	$(window).load(function(){
	  $('.flexslider').flexslider({
		animation: "slide",
		start: function(slider){
		  $('body').removeClass('loading');
		}
	  });
	});
  </script>
<!-- //flexSlider -->
@endsection

@section('hot_product')
<div class="top-brands">
		<div class="container">
			<h3>Sản Phẩm Mới</h3>
			<div class="agile_top_brands_grids">
				@foreach($new_products as $product)
				<div class="col-md-3 top_brand_left">
					<div class="hover14 column">
						<div class="agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid_pos">
								<img src="{{asset('users/images/offer.png')}}" alt=" " class="img-responsive" />
							</div>
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block" >
										<div class="snipcart-thumb">
											<a href="{{route('products.show', $product->id)}}"><img style="width: 100%;" title=" " alt="{{ $product->name }} " src="{{asset($product->images->first()->path)}}" /></a>		
											<p>{{$product->name}}</p>
											<h4>{{ $product->price }} <span>VNĐ</span></h4>
										</div>
										<div class="snipcart-details top_brand_home_details">
											<form action="checkout.html" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="{{$product->name}}" />
													<input type="hidden" name="amount" value="{{$product->price}}" />
													<input type="hidden" name="discount_amount" value="0.00" />
													<input type="hidden" name="currency_code" value="VND" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Add to cart" class="button" />
												</fieldset>	
											</form>
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
				</div>
				@endforeach
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //top-brands -->
@endsection

@section('top_product')
<!-- fresh-vegetables -->
	<div class="fresh-vegetables">
		<div class="container">
			<h3>Top Products</h3>
			<div class="w3l_fresh_vegetables_grids">
				<div class="col-md-3 w3l_fresh_vegetables_grid w3l_fresh_vegetables_grid_left">
					<div class="w3l_fresh_vegetables_grid2">
						<ul>
							<li><i class="fa fa-check" aria-hidden="true"></i><a href="products.html">All Brands</a></li>
							<li><i class="fa fa-check" aria-hidden="true"></i><a href="vegetables.html">Vegetables</a></li>
							<li><i class="fa fa-check" aria-hidden="true"></i><a href="vegetables.html">Fruits</a></li>
							<li><i class="fa fa-check" aria-hidden="true"></i><a href="drinks.html">Juices</a></li>
							<li><i class="fa fa-check" aria-hidden="true"></i><a href="pet.html">Pet Food</a></li>
							<li><i class="fa fa-check" aria-hidden="true"></i><a href="bread.html">Bread & Bakery</a></li>
							<li><i class="fa fa-check" aria-hidden="true"></i><a href="household.html">Cleaning</a></li>
							<li><i class="fa fa-check" aria-hidden="true"></i><a href="products.html">Spices</a></li>
							<li><i class="fa fa-check" aria-hidden="true"></i><a href="products.html">Dry Fruits</a></li>
							<li><i class="fa fa-check" aria-hidden="true"></i><a href="products.html">Dairy Products</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-9 w3l_fresh_vegetables_grid_right">
					<div class="col-md-4 w3l_fresh_vegetables_grid">
						<div class="w3l_fresh_vegetables_grid1">
							<img src="{{asset('users/images/8.jpg')}}" alt=" " class="img-responsive" />
						</div>
					</div>
					<div class="col-md-4 w3l_fresh_vegetables_grid">
						<div class="w3l_fresh_vegetables_grid1">
							<div class="w3l_fresh_vegetables_grid1_rel">
								<img src="{{asset('users/images/7.jpg')}}" alt=" " class="img-responsive" />
								<div class="w3l_fresh_vegetables_grid1_rel_pos">
									<div class="more m1">
										<a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
									</div>
								</div>
							</div>
						</div>
						<div class="w3l_fresh_vegetables_grid1_bottom">
							<img src="{{asset('users/images/10.jpg')}}" alt=" " class="img-responsive" />
							<div class="w3l_fresh_vegetables_grid1_bottom_pos">
								<h5>Special Offers</h5>
							</div>
						</div>
					</div>
					<div class="col-md-4 w3l_fresh_vegetables_grid">
						<div class="w3l_fresh_vegetables_grid1">
							<img src="{{asset('users/images/9.jpg')}}" alt=" " class="img-responsive" />
						</div>
						<div class="w3l_fresh_vegetables_grid1_bottom">
							<img src="{{asset('users/images/11.jpg')}}" alt=" " class="img-responsive" />
						</div>
					</div>
					<div class="clearfix"> </div>
					<div class="agileinfo_move_text">
						<div class="agileinfo_marquee">
							<h4>get <span class="blink_me">25% off</span> on first order and also get gift voucher</h4>
						</div>
						<div class="agileinfo_breaking_news">
							<span> </span>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //fresh-vegetables -->
@endsection

