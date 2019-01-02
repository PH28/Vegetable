@extends('users/layouts/master')

@section('page', 'Products')

@section('banner_right')
<div class="w3l_banner_nav_right_banner3">
	<h3>Best Deals For New Products<span class="blink_me"></span></h3>
</div>
<div class="w3l_banner_nav_right_banner3_btm">
	<div class="col-md-4 w3l_banner_nav_right_banner3_btml">
		<div class="view view-tenth">
			<img src="images/13.jpg" alt=" " class="img-responsive" />
			<div class="mask">
				<h4>Grocery Store</h4>
				<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.</p>
			</div>
		</div>
		<h4>Utensils</h4>
		<ol>
			<li>sunt in culpa qui officia</li>
			<li>commodo consequat</li>
			<li>sed do eiusmod tempor incididunt</li>
		</ol>
	</div>
	<div class="col-md-4 w3l_banner_nav_right_banner3_btml">
		<div class="view view-tenth">
			<img src="images/14.jpg" alt=" " class="img-responsive" />
			<div class="mask">
				<h4>Grocery Store</h4>
				<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.</p>
			</div>
		</div>
		<h4>Hair Care</h4>
		<ol>
			<li>enim ipsam voluptatem officia</li>
			<li>tempora incidunt ut labore et</li>
			<li>vel eum iure reprehenderit</li>
		</ol>
	</div>
	<div class="col-md-4 w3l_banner_nav_right_banner3_btml">
		<div class="view view-tenth">
			<img src="images/15.jpg" alt=" " class="img-responsive" />
			<div class="mask">
				<h4>Grocery Store</h4>
				<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.</p>
			</div>
		</div>
		<h4>Cookies</h4>
		<ol>
			<li>dolorem eum fugiat voluptas</li>
			<li>ut aliquid ex ea commodi</li>
			<li>magnam aliquam quaerat</li>
		</ol>
	</div>
	<div class="clearfix"> </div>
</div>
@endsection


@section('product1')

<div class="w3ls_w3l_banner_nav_right_grid">
	<div class="container">
	<h3>Popular Brands</h3>
	<div class="w3ls_w3l_banner_nav_right_grid1">
		<h6>food</h6>
		@foreach($products as $product)
		<div class="col-md-3 w3ls_w3l_banner_left">
			<div class="hover14 column">
			<div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
				<div class="agile_top_brand_left_grid_pos">
					<img src="{{asset('users/images/offer.png')}}" alt=" " class="img-responsive" />
				</div>
				<div class="agile_top_brand_left_grid1">
					<figure>
						<div class="snipcart-item block">
							<div class="snipcart-thumb">
								<a href="{{route('products.show', $product->id)}}"><img style="width: 100%" src="{{ asset($product->images->first()->path) }}" alt=" " class="img-responsive" /></a>
								<p>{{ $product->name }}</p>
								<h4>{{ $product->price }} <span>$5.00</span></h4>
							</div>
							<div class="snipcart-details">
								<form action="#" method="post">
									<fieldset>
										<input type="hidden" name="cmd" value="_cart" />
										<input type="hidden" name="add" value="1" />
										<input type="hidden" name="business" value=" " />
										<input type="hidden" name="item_name" value="{{ $product->name }}" />
										<input type="hidden" name="amount" value="{{ $product->price }}" />
										<input type="hidden" name="discount_amount" value="0" />
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
		<div class="row">
			<div class="col-sm-6">
				{{ $products->links() }}
			</div>
		</div>
	</div>
	</div>
	
</div>

@endsection