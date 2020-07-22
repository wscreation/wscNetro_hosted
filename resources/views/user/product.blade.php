@extends('layouts.frontend_layout2')

@section('title')
    NETRO COMPUTERS | Single Product
@endsection
@section('category')
    {{ $item['item'] }}
@endsection
@section('content')


<div class="single-product-description">
	<div class="card">
		<div class="row">
			<div class="col-md-6 card-header">
				<img class="card-img-top" src="/storage/inventory/{{ $item['image'] }}" alt="Card image cap">
			</div>
			<div class="col-md-6">
				<div class="card-title">
					<h4 class="card-header">{{ $item['item'] }}</h4>
				</div>
				<div class="card-body">
					<ul class="list-group list-group-flush">
						<li><li class="list-group-item">{{ $item->getCondition() }}</li>
						<li><li class="list-group-item d-flex justify-content-between align-items-center ">
							Rs.{{ $item->getPrice() }}
							<div style="color: gray;">
								<del>
									@if ( $item->calDiscount() > 0 )
									 Rs. {{ number_format((float)$item['price'],2,'.',',') }}
									@endif
								</del>
							</div>
							@if ( $item->calDiscount() >0 )
							<span class="badge badge-info badge-pill">-{{ $item->calDiscount() }}%</span>
							@endif
						</li>
						<li><li class="list-group-item">{!! $item['desc'] !!}</li>
					</ul>
				</div>
				
			</div>
		</div>
	</div>
</div>
<hr>

@include('inc.front.ourteam')

@endsection