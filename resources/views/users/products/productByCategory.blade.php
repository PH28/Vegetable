@extends('users/layouts/master')

@section('page', 'Products')

@section('banner_right')
<div class="w3l_banner_nav_right_banner3">
	<h3>Best Deals For New Products<span class="blink_me"></span></h3>
</div>

@endsection


@section('product1')

<div class="w3ls_w3l_banner_nav_right_grid">
	<div class="container">
	<h3>Sản Phẩm</h3>
	<div class="w3ls_w3l_banner_nav_right_grid1">
		<h6>{{$category->name}}</h6>
		@foreach($productsByCategory as $product)
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
								<h4>{{ $product->price }} <span>VNĐ</span></h4>
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
	</div>
	<div class="row">
		<div class="col-sm-6">
			{{ $productsByCategory->links() }}
		</div>
	</div>
	</div>
</div>

<div class="w3ls_w3l_banner_nav_right_grid">
	<div class="container">
	<h3>Sản Phẩm cùng nhóm</h3>
	@foreach($otherCategories as $category)
	<div class="w3ls_w3l_banner_nav_right_grid1">
		<h6>{{$category->name}}</h6>
		@foreach($category->products as $product)
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
								<h4>{{ $product->price }} <span>VNĐ</span></h4>
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
	</div>
	
	<!-- paginate -->
	<div class="row">
		<div class="col-sm-6">   
		</div>
	</div>
	@endforeach

	</div>
</div>

@endsection