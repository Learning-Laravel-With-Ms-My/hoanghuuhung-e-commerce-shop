@section('container_left')
<div class="col-3 nav-left">
    @foreach ($items as $item)
        <h5 class="p-1" >{{$item['name']}} <i class="fa fa-caret-down" aria-hidden="true" id="icon"></i></h5>
        
        <hr>
    @endforeach
</div>   
@endsection