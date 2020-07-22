@extends('layouts.frontend_layout2')
@section('title')
{{ $type }}
@endsection
@section('category')
{{ $type }}
@endsection
@section('content')

<div class="section">
    <div class="container">
        @if (($items->count() == 0))
        <br>
        <div class="alert alert-danger">
            NO ITEMS AILABLE AT THAT MOMENT. PLEASE CALL US...
        </div>
        @else
        <div class="row">

            {{-- new product --}}
            @foreach ($items as $item)
                @if ($item->calDiff() < 15) 
                    @include('inc.front.new_product') 
                @endif 
            @endforeach 
            
            {{-- view product  --}}
            
            @foreach ($items as $item) 
                @if ($item->calDiff() > 14)
                @include('inc.front.view_product')
                @endif
            @endforeach

        </div>

        @endif
    </div>
</div>


@include('inc.front.ourteam')

@endsection