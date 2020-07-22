@extends('layouts.admin_layout')
@section('content')
@include('inc.flash_messages')

<center><h5>Add Item</h5></center>
<div class="alert alert-info">
{{--  <h5>Add new Items</h5>  --}}
<form action="{{ route('add_inventory') }}" method="POST" enctype="multipart/form-data" class="mx-auto">
    <div class="row">
        <div class="col">
            <label for="categary">Category</label>
            <div class="form-group">
                <select id="category" name="type_id" class="form-control">
                        <option value="">Select one</option>
                    @foreach ($types as $item)
                        <option value= "{{ $item['id'] }}" > {{$item['type']}}</a>
                    @endforeach
                </select> 
              </div>

        </div>
        <div class="col">
            <label for="display_name">Display Name</label>
            <input type="text" name="item" id="item" class="form-control" placeholder="" value="{{ old('item') }}" required>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="condition">Condition</label>
            <div class="form-group">
                <select name="condition" id="condition" class="form-control">
                    <option value=1>Brand New</option>
                    <option value=0>Used</option>
                </select>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="desc">Description</label>
        <textarea name="desc" id="desc" class="ckeditor" cols="30" rows="10" required></textarea>
    </div>

    <div class="row">
        <div class="col">
            <label for="price">price</label>
            <input type="price" name="price" class="form-control" placeholder="Price without discount" value="{{ old('price') }}" required>
        </div>
        <div class="col">
            <label for="sale_price">Sale Price</label>
            <input type="sale_price" name="sale_price" class="form-control" placeholder="Price with discount" value="{{ old('sale_price') }}">
        </div>
    </div>
    
    <div class="row">
        <div class="col">
            <div class="form-group">
                <div class="form-group">
                  <label for="image">Image</label>
                  <input type="file" class="form-control-file" name="image" id="image" placeholder="" value="{{ old('image') }}" aria-describedby="fileHelpId">
                  <small id="fileHelpId" class="form-text text-muted">Select the image. Otherwise it will add default no cover image</small>
                </div>
            </div>
        </div>
        <div class="col">
            <label for="brand">Brand</label>
            <input type="brand" name="brand" class="form-control" placeholder="" value="{{ old('brand') }}">
        </div>
    </div>
    
    <div class="row pull-right">
            <button type="submit" class="btn btn-outline-info btn-sm"><i class="fa fa-send" aria-hidden="true">&nbsp Add Item</i></button>
    </div>
    <br>
    @csrf
</form>
</div>

<hr>
<center><h5>Add Category</h5></center>
<div class="alert alert-info">
    <form action="{{ route('add_type') }}" method="POST" enctype="multipart/form-data" class="mx-auto">
        <div class="row">
            <div class="col">
                <label for="category">Category</label>
                <input type="text" name="type" style="text-transform: uppercase" class="form-control" placeholder="" value="{{ old('category') }}" required>
                
            </div>
            <div class="col">
                <div class="form-group">
                  <label for="">Select which type of category</label>
                  <select class="form-control" name="type_id" id="">
                    @foreach ($catoftypes as $item)
                        <option value="{{ $item['id'] }}">{{ $item['category'] }}</option>
                    @endforeach
                </select>
                </div>
                <div class="row pull-right">
                <button type="submit" class="btn btn-outline-info btn-sm"><i class="fa fa-check" aria-hidden="true">&nbsp Add Category</i></button>
                </div>
            </div>
        </div>
        @csrf
        
    </form>
</div>

<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>

</html>


@endsection