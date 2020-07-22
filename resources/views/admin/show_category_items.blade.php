@extends('layouts.admin_layout')
@section('content')
@include('inc.flash_messages')
<h5>{{ $category->category }} | <small>{{ $category->item_count }} items </small></h5>
<div class="card">
    <div class="card-header">New Arrivals</div>
    <div class="card-body">
        <form action="{{ route('out_of_stock_arrivals') }}" method="POST" enctype="multipart/form-data" class="mx-auto">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                      <label for="category">Category</label>
                      <input type="text" name="cat" id="" readonly  class="form-control" placeholder="" aria-describedby="helpId" value="{{ $category->category }}">
                      {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                    </div>
                </div>
                <div class="col">
                    <label for="display_name">Display Name</label>
                    <input type="text" name="display_name" id="display_name" class="form-control" placeholder="" value="{{ old('display_name') }}" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="condition">Condition</label>
                    <div class="form-group">
                        <select name="condition" id="condition" class="form-control">
                            <option value="brand_new">Brand New</option>
                            <option value="used">Used</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <label for="qty">Qty</label>
                    <input type="text" name="qty" id="qty" class="form-control" placeholder="Enter Qty" value="{{ old('qty') }}" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="supplier">Supplier</label>
                    <input type="supplier" name="supplier" class="form-control" placeholder="Any identification" value="{{ old('supplier') }}">
                </div>
                <div class="col">
                    <label for="contact_no">Contact Details</label>
                    <input type="contact_no" name="contact_no" class="form-control" placeholder="Telephone, Email, Facebook..." value="{{ old('contact_no') }}">
                </div>
            </div>
        
            <div class="form-group">
                <label for="desc">Description</label>
                <textarea name="desc" id="desc" class="form-control" cols="30" rows="10" required></textarea>
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
            
            <div class="form-group">
                <div class="form-group">
                  <label for="image">Image</label>
                  <input type="file" class="form-control-file" name="image" id="image" placeholder="" value="{{ old('image') }}" aria-describedby="fileHelpId">
                  <small id="fileHelpId" class="form-text text-muted">Select the image. Otherwise it will add default no cover image</small>
                </div>
            </div>
        
            <div class="row">
                <div class="col">
                    <label for="brand">Brand</label>
                    <input type="brand" name="brand" class="form-control" placeholder="" value="{{ old('brand') }}">
                </div>
                {{-- <div class="col">
                    <label for="visibality">Visibality</label>
                    <div class="form-group">
                        <select name="visibality" id="visibality" class="form-control">
                            <option value=1>Show</option>
                            <option value=0>Hide</option>
                        </select>
                    </div>
                </div> --}}
            </div><hr>
            <div class="row">
                <div class="">
                    <button type="submit" class="btn btn-outline-info btn-sm"><i class="fa fa-check" aria-hidden="true">&nbsp Add Item</i></button>
                </div>
            </div>
            @csrf
        </form>
    </div>
</div>


@endsection