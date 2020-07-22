@extends('layouts.admin_layout')

@section('content')


<div class="alert alert-success  fade show" role="alert">
    <strong>Welcome back {{ Auth::user()->name }} | <small>{{ $date }}</small></strong>
</div>
<div class="col-lg-12 col-md-12">
    @if (is_null($hot_deal))
    <div class="col">
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
            <strong>No HOT DEAL!</strong>
        </div>
    </div>
    @else
    <div class="col">
        <div class="alert alert-info">
            <h5>Hot Deal</h5>
            <hr>
            <div class="col">
                <div class="single-product-description">
                    <div class="card">
                        <img class="card-img-top" src="storage/inventory/{{ $hot_deal['image'] }}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#id{{ $hot_deal['id'] }}" data-toggle="collapse">{{ $hot_deal['item'] }} | {{ $hot_deal['id'] }}</a>
                            </h4> 
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">{{ $hot_deal->getCondition() }}</li>
                            <li class="list-group-item d-flex justify-content-between align-items-center ">
                                Rs.{{ $hot_deal->getPrice() }}
                                <div style="color: gray;">
                                    <del>
                                        @if ( $hot_deal->calDiscount() > 0 )
                                        Rs. {{ number_format((float)$hot_deal['price'],2,'.',',') }}
                                        {{-- {{ $hot_deal->calDiscount() }} --}}
                                        @endif
                                    </del>
                                </div>
                                @if ( $hot_deal->calDiscount() >0 )
                                <span class="badge badge-info badge-pill">-{{ $hot_deal->calDiscount() }}%</span>
                                @endif
                            </li>
                            <li class="list-group-item">{!! $hot_deal['desc'] !!}</li>
                        </ul>
                        <div class="col-md-12">
                            {{-- <p class="card-text">{{ $hot_deal->avilable() }}</p> --}}
                        </div>
                        <div class="card card-footer">
                            <form action="{{ route('delete_hotdeal',['id'=>$hot_deal['id']]) }}" method="post">
                                <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>



        </div>


    </div>
    @endif
</div>


<div class="col-lg-12 col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="alert alert-primary" role="alert">
                <center><strong>New Arrivals. Select the hotdeal form followings</strong></center>
            </div>
        </div>
        <div class="card-body">
            <div class="stat-widget-five">
                <div class="stat-content">
                    <div class="text-left dib">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Display_name</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Sale_price(Rs.)</th>
                                    <th scope="col">Arrived At</th>
                                    <th scope="col">Brand</th>
                                    <th scope="col">HOT DEAL</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @php
                                $i = 1;
                                @endphp

                                @foreach($items as $item)
                                @php
                                $diff = $item->calDiff();
                                @endphp

                                @if ($diff<14) <tr>
                                    <th scope="row">{{ $i++ }}</th>
                                    <td>{{ $item['item'] }}</td>
                                    <td>{{ $item->type['type'] }}</td>
                                    <td>{{ $item->getPrice()}}</td>
                                    <td>{{ \Carbon\Carbon::parse($item['created_at'])->format('d-M-Y') }}</td>
                                    <td>{{ $item['brand'] }}</td>
                                    <td>
                                        @if ($item->check_hotDeal())
                                            <form action="{{ route('delete_hotdeal',['id'=>$item]) }}" method="post">
                                                <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fa fa-check" aria-hidden="true"></i></button>
                                            </form>
                                            @else
                                            <form action="{{ route('add_hotDeal',['id'=>$item]) }}" method="post">
                                                @csrf
                                                <button type="submit" class="btn btn-outline-primary btn-sm"><i class="fa fa-send" aria-hidden="true"></i></button>
                                            </form>
                                            @endif
                                    </td>
                                </tr>
                                @endif
                                
                                @endforeach

                            </tbody>
                        </table>
                        {{ $items->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection