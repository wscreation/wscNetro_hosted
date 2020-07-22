<div class="col-md-3 col-xs-6">
    <a href="{{ route('product',['id'=>$item['id']]) }}">
        <div class="product">
            <div class="product-img">
                <img src="storage/inventory/{{ $item->image }}" alt="">
                <div class="product-label">
                    {{-- <span class="new">NEW</span> --}}
                </div>
            </div>
            <div class="product-body">
                <p class="product-category"></p>
                <h3 class="product-name">{{ $item['display_name'] }}</h3>
                <h4 class="product-price">Rs.{{ $item['sale_price'] }}
                    <span>
                        @if ( $item->sale_price < $item->price)
                            <del class="product-old-price">Rs. {{ $item->price }}</del>
                            @endif
                    </span>
                </h4>
            </div>
        </div>
    </a>
</div>