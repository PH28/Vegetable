@extends('users/layouts/master')

@section('page', 'Products')

@section('banner_right')

<div class="w3l_banner_nav_right_banner3">
	<h3>Best Deals For New Products<span class="blink_me"></span></h3>
</div>
<div class="agileinfo_single">
	<h5>{{$product->name}}</h5>
	<div class="col-md-4 agileinfo_single_left">
		@foreach($product->images as $image)
		<img id="example" src="{{ asset($image->path ? $image->path : 'http://via.placeholder.com/300x300')}}" style="width: 100%;" alt=" " class="img-responsive" />
		@endforeach
	</div>
	<div class="col-md-8 agileinfo_single_right">
		<div class="rating1">
			<span class="starRating">
				<input id="rating5" type="radio" name="rating" value="5" {{ $rating ==5 ? 'checked' : '' }}>
				<label for="rating5">5</label>
				<input id="rating4" type="radio" name="rating" value="4" {{ $rating ==4 ? 'checked' : '' }}>
				<label for="rating4">4</label>
				<input id="rating3" type="radio" name="rating" value="3" {{ $rating ==3 ? 'checked' : '' }}>
				<label for="rating3">3</label>
				<input id="rating2" type="radio" name="rating" value="2" {{ $rating ==2 ? 'checked' : '' }}>
				<label for="rating2">2</label>
				<input id="rating1" type="radio" name="rating" value="1" {{ $rating ==1 ? 'checked' : '' }}>
				<label for="rating1">1</label>
			</span>
		</div>
		<div class="w3agile_description">
			<h4>Description :</h4>
			<p>{{ $product->description }}</p>
		</div>
		<div class="snipcart-item block">
			<div class="snipcart-thumb agileinfo_single_right_snipcart">
				<h4>{{$product->price}}<span>VNĐ</span></h4>
			</div>
			<div class="snipcart-details agileinfo_single_right_details">
				<form action="#" method="post">
					<fieldset>
						<input type="hidden" name="cmd" value="_cart" />
						<input type="hidden" name="add" value="1" />
						<input type="hidden" name="business" value=" " />
						<input type="hidden" name="item_name" value="{{ $product->name }}" />
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
	</div>
	<div class="clearfix"> </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-10">
            <form action="" method="POST" role="form">
                <legend>Không gian Comment Test</legend>
            
                <div class="form-group">
                    <label for="">Tiêu Đề</label>
                    <input type="text" class="form-control" id="" placeholder="Input field">
                </div>
                <div class="form-group">
                    <label for="comment">Comment:</label>
                    <textarea class="form-control" rows="5" id="comment"></textarea>
                </div> 
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8">
            <h2 class="page-header">Comments</h2>
            <section class="comment-list">
                <!-- Comment -->
            @foreach($comments as $comment)
              <article class="row">
                <div class="col-md-2 col-sm-2 hidden-xs">
                  <figure class="thumbnail">
                    <img class="img-responsive" width="100%" src="{{ asset($comment->user->avatar ? $comment->user->avatar : 'http://www.tangoflooring.ca/wp-content/uploads/2015/07/user-avatar-placeholder.png')}}" />
                    <figcaption class="text-center font-weight-bold text-capitalize">{{ $comment->user->username }}</figcaption>
                  </figure>
                </div>
                <div class="col-md-10 col-sm-10">
                  <div class="panel panel-default arrow left">
                    <div class="panel-body">
                      <header class="text-left">
                        <div class="comment-user font-weight-bold text-capitalize"><i class="fa fa-user"></i> {{ $comment->title }}</div>
                        <div>
                            @for($i=1; $i<=$comment->rating; $i++)
                            <i class="fa fa-star"></i>
                            @endfor
                            @for($i=1; $i<=(5-$comment->rating); $i++)
                            <i class="fa fa-star-o"></i>
                            @endfor
                        </div>
                        <time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i> {{ $comment->created_at }} </time>
                      </header>
                      <div class="comment-post">
                        <p>
                          {{ $comment->content }}
                        </p>
                      </div>
                      <!-- <p class="text-right"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-reply"></i> reply</a></p> -->
                    </div>
                  </div>
                </div>
              </article>
            @endforeach
            </section>
        </div>
    </div>
</div>

@endsection

@section('product1')
<!-- brands -->
<div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_popular">
	<div class="container">
		<h3>Sản Phẩm Cùng Loại</h3>
		<div class="w3ls_w3l_banner_nav_right_grid1">
			<h6>{{ $category->name }}</h6>
			@foreach($other_products as $product)
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
									<a href="{{route('products.show', $product->id)}}"><img src="{{asset($product->images->first()->path)}}" alt=" " class="img-responsive" /></a>
									<p>{{$product->name}}</p>
									<h4>{{$product->price}} <span>VNĐ</span></h4>
								</div>
								<div class="snipcart-details">
									<form action="#" method="post">
										<fieldset>
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" />
											<input type="hidden" name="business" value=" " />
											<input type="hidden" name="item_name" value="{{$product->name}}" />
											<input type="hidden" name="amount" value="{{$product->price}}" />
											<input type="hidden" name="discount_amount" value="0.00" />
											<input type="hidden" name="currency_code" value="USD" />
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



<!-- //brands -->
@endsection