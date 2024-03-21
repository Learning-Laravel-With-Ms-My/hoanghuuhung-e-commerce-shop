@extends('home')
@section('card')

    <hr>
    <div class="d-flex flex-row justify-content-between pe-5">
        <div class="d-flex flex-row">
            <h5>Deals of the Day | </h5>
            <h5 style="padding-left: 20px;color:crimson">20:45:12 Left</h5>
        </div>
        <div class="">
            <strong><p class="flex-end">Views all deal</p></strong>
        </div>
    </div> 
    <div class="pt-3"></div>
    <div class='d-flex'>
        @foreach ($images as $item)
            <div class="card" style="width:15rem;margin-left:1.5rem;border:none">
                <img class="card-img-top" src="{{$item['image']}}" alt="Card image cap" style="width:200px; height:200px; object-fit: cover;border:none">
                <div class="card-body">
                    <strong><h6>{{$item['name']}}</h6></strong>
                    <div class=d-flex>
                        <p class="card-text">{{$item['price']}} | </p>
                        <p class="card-text">{{$item['discount']}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection