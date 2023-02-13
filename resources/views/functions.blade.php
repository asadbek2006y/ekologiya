@include('layouts.header')
{{-- <div class="container text-center">
    <div class="row">
      <div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
      <div class="col-6 col-sm-3">.col-6 .col-sm-3</div>

      <!-- Force next columns to break to new line -->
      <div class="w-100"></div>

      <div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
      <div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
    </div>
  </div> --}}

    <!-- Breaking News Start -->
    <div class="container-fluid mt-5 mb-3 pt-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <div class="section-title border-right-0 mb-0" style="width: 180px;">
                            <h4 class="m-0 text-uppercase font-weight-bold">Tranding</h4>
                        </div>
                        <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center bg-white border border-left-0"
                            style="width: calc(100% - 180px); padding-right: 100px;">
                            @foreach ($func as $f)

                            <div class="text-truncate"><a class="text-secondary text-uppercase font-weight-semi-bold" href="">{{$f->title}}</a></div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breaking News End -->


    <!-- News With Sidebar Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="mb-3">
                        <div class="container text-center">
                            <div class="row">
                              <div class="w-100"></div>
                              @foreach ($func as $f)

                                <div class="card" style="width: 18rem;">
                                    <img src="{{asset('storage/'.$f->img)}}" style="widht:300px; height:200px; " class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <a href="{{url('show/'.$f->id)}}"><h5 class="card-title">{{$f->title}}</h5></a>
                                    </div>
                                </div>
                              @endforeach


                            </div>
                        </div>
                    </div>
                    <!-- Comment Form End -->
                </div>

                <div class="col-lg-4">
                    <!-- Social Follow Start -->
                            <div class="mb-3">
                                <div class="section-title mb-0">
                                    <h4 class="m-0 text-uppercase font-weight-bold">{{__('messages.follow')}}</h4>
                                </div>
                                <div class="bg-white border border-top-0 p-3">
                                    <a href="https://www.facebook.com/Uzecology/" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #39569E;">
                                        <i class="fab fa-facebook-f text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                        <span class="font-weight-medium">12,345 Fans</span>
                                    </a>
                                    <a href="https://t.me/ecogovuz" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #52AAF4;">
                                        <i class="fab fa-telegram text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                        <span class="font-weight-medium">14,444 Followers</span>
                                    </a>

                                    <a href="https://www.instagram.com/ekologiyadavlatqomitasi/" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #C8359D;">
                                        <i class="fab fa-instagram text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                        <span class="font-weight-medium">147 Followers</span>
                                    </a>
                                    <a href="https://www.youtube.com/channel/UCiaUoLECuViPTHW1X72wsrw" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #DC472E;">
                                        <i class="fab fa-youtube text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                        <span class="font-weight-medium">348 Subscribers</span>
                                    </a>

                                </div>
                            </div>
                    <!-- Social Follow End -->





                    <!-- Tags Start -->

                    <!-- Tags End -->
                </div>
            </div>
        </div>
    </div>
    <!-- News With Sidebar End -->
    @include('layouts.footer')

