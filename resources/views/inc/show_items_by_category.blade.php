@foreach ($types as $type)
    <div>
        <div class="card-header" style="background-color: white;border-bottom: 1px solid white; padding-bottom:1px">
            <h4>{{ substr($type[0]->type,0,1) }}</h4>
        </div>
        <div class="card-body" style="padding-top: 1px;">
            @foreach ($type as $item)
                
            <li>
                <a href="{{ route('view_item_by_type',['type_id'=>$item['id']]) }}">{{ $item->type }}</a>
            </li>

            @endforeach
        </div>
    </div>
@endforeach