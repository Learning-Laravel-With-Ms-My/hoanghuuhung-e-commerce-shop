 @section('container')
     <div class="col-7" id="container">
         <div class="container">
            <div class="container-fluid">

                <img class="poster" src="{{ asset('assets/images/banner.png') }}" alt="ảnh">
            </div>

             <div class="container-fluid d-flex flex-row justify-content-center align-items-center gap-2 pt-2">
                 <div class="poster-item ">
                     <img src="{{ asset('assets/images/banner1.png') }}" alt="ảnh">
                 </div>
                 <div class="poster-item">
                     <img src="{{ asset('assets/images/banner1.png') }}" alt="ảnh">
                 </div>
                 <div class="poster-item">
                     <img src="{{ asset('assets/images/banner1.png') }}" alt="ảnh">
                 </div>
             </div>
         </div>
     </div>
 @endsection
