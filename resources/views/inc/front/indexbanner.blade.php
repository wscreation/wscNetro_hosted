<div class="banner">
	<div class="banner_background"><img src="images/banner_background.jpg" alt=""></div>
		<div class="container fill_height">
		
			@if (is_null($hot_deal))
			
			
				<div class="row fill_height" >
					
					<div class="banner_product_image ">
						<img src="images/banner_product.png" alt="default_image" class="img-fluid" height="100%" width="100%" style="width:75% ; height:75%">
					</div>
				
				</div>
		@else
			
			<div class="row fill_height">
				
				<div class="banner_product_image offset-lg-8">
						<img src="storage/inventory/{{ $hot_deal['image'] }}" alt="{{ $hot_deal['image'] }}" height="100%" width="100%" class="img-fluid" style="height:100% ; width:100%">
				</div>
				
			<div class="col-lg-5 offset-lg-4 fill_height">
				<div class="banner_content">
					<h1 class="banner_text">Hot Deal Of The Week</h1>
					<div class="banner_price">
						<span>
							@if ( $hot_deal->calDiscount() > 0)
								Rs. {{ $hot_deal->price }}
							@endif
						</span>
						Rs.{{ $hot_deal->getPrice() }}</div>
					<div class="banner_product_name">{{ $hot_deal['item'] }}</div>
					<div class="button banner_button"><a href="{{ route('product',['id'=>$hot_deal['id']]) }}">Get Info</a></div>

				</div>
			</div>

			
			</div>
		@endif
		
	</div>
</div>