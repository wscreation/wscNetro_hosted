@extends('layouts.frontend_layout2')
@section('title')
NETRO COMPUTERS | Tabs
@endsection
@section('category')
Tabs & Phones
@endsection
@section('content')

<div class="row row-cols-4">

</div>

<div class="row row-cols-4">
    @include('inc.show_items_by_category')
</div>
</div>

@include('inc.front.ourteam')

@endsection