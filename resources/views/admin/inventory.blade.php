@extends('layouts.admin_layout')
@section('content')
<div class="row">
<div class="col-md-8">
    <div class="row">
        {{-- strat category group --}}
        @foreach ($grouped_items as $set)
            @php
                $set = $set->sortByDesc('created_at');
            @endphp
        <div class="">
            <div class="" 
            {{-- style="background-color: white;border-bottom: 1px solid white; padding-bottom:1px" --}}
            >
                {{ App\Type::find($set[0]['type_id'])->type }} | ({{ $set->count() }})
            </div>
            <div class="card-body" style="padding-top: 1px;">
               {{-- start item showing --}}
                @foreach ($set as $item)
                    
            <div class="card">
                {{--  header  --}}
                <div class="card-header">
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h6 class="panel-title"></h6>
                                <a href="#id{{ $item['id'] }}" data-toggle="collapse">{{ $item['item'] }}</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                {{--  end of header  --}}

                <div class="panel-collapse collapse" id="id{{ $item['id'] }}">
                    <div class="panel-body">
                        <div class="card-body">
                            <form action="{{  route('update_item',['id'=>$item['id']])  }}" method="POST"
                                enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col">
                                        <label for="categary">Category</label>
                                        <input type="text" name="type" class="form-control" value="{{ App\Type::find($item['type_id'])->type }}"
                                            readonly>
                                    </div>
                                    <div class="col">
                                        <label for="display_name">Display Name</label>
                                        <input type="text" name="item" id="{{ $item['item'] }}" class="form-control"
                                            value="{{ $item['item'] }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="desc">Description</label>
                                    <textarea name="desc" id="desc" class="ckeditor" cols="30"
                                        rows="10">{{$item['desc']}}</textarea>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <label for="price">price</label>
                                        <input type="price" name="price" class="form-control" value="{{ $item['price'] }}">
                                    </div>
                                    <div class="col">
                                        <label for="sale_price">Sale Price</label>
                                        <input type="sale_price" name="sale_price" class="form-control"
                                            value="{{ $item['sale_price'] }}">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <label for="image_show">Image</label>
                                        <div class="card mr-2" style="width: 18rem;">
                                            <img class="card-img-top" src="storage/inventory/{{ $item['image'] }}"
                                                alt="{{ $item['image'] }}">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label for="image">Image</label>
                                        <input type="file" class="form-control-file" name="image" id="image"
                                            aria-describedby="fileHelpId">
                                        <small id="fileHelpId" class="form-text text-muted">If you want to change the image.
                                            Select the new one</small>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <label for="brand">Brand</label>
                                        <input type="brand" name="brand" class="form-control" value="{{ $item['brand'] }}" readonly>
                                    </div>
                                </div>
                                <hr>
                                <div class="row pull-right">
                                    <button type="submit" class="btn btn-outline-info btn-sm"><i class="fa fa-book"
                                            aria-hidden="true">&nbsp Update</i></button>
                                </div>
                                @csrf
                            </form>
                            <form action="{{ route('delete_item',['id'=>$item['id']]) }}" method="POST">
                                <button type="submit" class="btn btn-outline-danger btn-sm delete-confirm"
                                    onclick="return confirm('Are you sure?')"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp
                                    Delete</i></button>
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>


                @endforeach
                {{-- end of items showing --}}
            </div>
        </div>
        @endforeach
        {{-- end of category group --}}
    </div>
</div>




{{-- ------------------------------hot deal-------------------------------------------------- --}}



{{-- <div class="col-md-4"> --}}

    @if (is_null($hot_deal))
        <div class="col col-md-4">
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <strong>NO HOT DEAL!</strong>
            </div>
        </div>
    @else
        <div class="col col-md-4">
            <div class="alert alert-info">
                <h5>Hot Deal</h5>
                <hr>
                <div class="col">
                    <div class="single-product-description">
                        <div class="card">
                            <img class="card-img-top" src="storage/inventory/{{ $hot_deal['image'] }}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#id{{ $hot_deal['id'] }}" data-toggle="collapse">{{ $hot_deal['item'] }}</a>
                                </h4>
                                        <label for="{{ $hot_deal['item'] }}">Click Here on focus<label>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">{{ $hot_deal->getCondition() }}</li>
                                <li class="list-group-item d-flex justify-content-between align-items-center ">
                                    Rs.{{ $hot_deal->getPrice() }}
                                    <div style="color: gray;">
                                        <del>
                                            @if ( $hot_deal->calDiscount() > 0 )
                                            Rs. {{ $hot_deal['price'] }}
                                            @endif
                                        </del>
                                    </div>
                                    @if ( $hot_deal->calDiscount() >0 )
                                    <span class="badge badge-info badge-pill">-{{ $hot_deal->calDiscount() }}%</span>
                                    @endif
                                </li>
                                <li class="list-group-item">{!! $hot_deal['desc'] !!}</li>
                            </ul>
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
</div>


<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>

@endsection
