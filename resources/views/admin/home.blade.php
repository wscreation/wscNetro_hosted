@extends('layouts.admin_layout')

{{-- @php
    $limit = 15;
    $exist = DB::table('categories')->where('item_count', '<=', $limit)->exists();
@endphp --}}

@section('content')

@if ( $exist )
<div class="card border-danger mb-12">
    <div class="card-header">
        {{ $categories->links() }}
    </div>
    <div class="card-body text-danger">
        <h5 class="card-title"><center>Out of stock | <small>less than {{$limit}}</small> </center></h5>
        <p class="card-text">
              <table class="table table-striped">
                  <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Item</th>
                        <th scope="col">Remaining</th>
                        {{-- <th scope="col">Last_ordered</th> --}}
                        <th scope="col" colspan="2">Order</th>
                    </tr>
                </thead>
                <tbody>

                    @php
                    $i = 1;
                    @endphp
                    
                    @foreach($categories as $item)
                    @if ($item->item_count <= $limit )
                    <tr>
                        <th scope="row">{{ $i++ }} </th>
                        <td>{{ $item['category'] }}</td>
                                <td>{{ $item['item_count'] }}</td>
                                {{-- <td>{{ $item['updated_at'] }}</td> --}}
                                <td>
                                    <a href="{{ route('show_category_items',['id'=>$item['id']]) }}">
                                        <button type="submit" class="btn btn-outline-danger btn-sm">New arrivals</button>
                                    </a>
                                </td>
                                                        
                    </tr>
                    @endif
                    @endforeach
                            
                </tbody>
                </table>
            </p>
        </div>
    </div>
@else
        
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
            <strong>There are enough items!!!</strong>
        </div>
        
        @endif
        <hr>    
<div class="col-lg-12 col-md-12">
    <div class="card">
        <div class="card-header"><center><strong>New Arrivals</strong></center></div>
        <div class="card-body">
            <div class="stat-widget-five">
                <div class="stat-content">
                    <div class="text-left dib">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">display_name</th>
                                    <th scope="col">category</th>
                                    <th scope="col">sale_price</th>
                                    <th scope="col">HOTDEAL</th>
                                    <th scope="col">brand</th>
                                    <th scope="col">updated_at</th>
                                </tr>
                            </thead>
                            <tbody>
            
                                @php
                                    $i = 1;
                                @endphp

                                @foreach($inventories as $item)
                                    @php
                                        $diff = $item->calDiff();
                                    @endphp    
                                
                                    @if ($diff<14)
                                        <tr>
                                            <th scope="row">{{ $i++ }}</th>
                                            <td>{{ $item['display_name'] }}</td>
                                            <td>{{ $item['category'] }}</td>
                                            <td>{{ $item['sale_price'] }}</td>
                                            <td>
                                                <form action="{{ route('change_visibality',['id'=>$item['id']]) }}" method="POST">
                                                    @if ($item->visibality == 1)
                                                        <button type="submit" class="btn btn-outline-info btn-sm" name="id" value="{{$item['id']}}">
                                                            <i class="fa fa-check" aria-hidden="true"></i>
                                                        </button>    
                                                        @else 
                                                        <button type="submit" class="btn btn-outline-primary btn-sm" name="id" value="{{$item['id']}}">
                                                            <i class="fa fa-times" aria-hidden="true"></i>
                                                        </button>
                                                    @endif
                                                    @csrf
                                                </form>
                                            </td>
                                            <td>{{ $item['brand'] }}</td>
                                            <td>{{ $item['updated_at'] }}</td>              
                                        </tr>
                                    @endif

                                @endforeach
            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

