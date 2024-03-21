@section('container_right')
<div class="col-2 pt-2">
    <h5>Recently Viewed</h5>
    <div class="img d-flex flex-column justify-content-center align-items-center pt-2" style="background-color: antiquewhite">
        <img src="{{asset('assets/images/bag1.png')}}" alt="ảnh" style="width:17rem">
        <h6><strong>See your browsing history</strong></h6>
    </div>
    <h5 class="pt-5">Suggesions for you</h5>
    <div class="img d-flex flex-column justify-content-center align-items-center pt-2" style="background-color: antiquewhite">
        <img src="{{asset('assets/images/bag2.png')}}" alt="ảnh" style="width:17rem">
        <h6><strong>See your browsing history</strong></h6>
    </div>

</div>
@endsection