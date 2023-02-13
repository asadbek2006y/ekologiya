@include('layouts.header')


    <!-- Main News Slider Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 px-0">
                <div class="owl-carousel main-carousel position-relative">
                    @foreach($new as $n)
                    <div class="position-relative overflow-hidden" style="height: 500px;">
                        <img class="img-fluid h-100" src="{{asset('storage/'.$n->post_image)}}" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-2">
                                <a href="{{url('single/'.$n->id)}}" class="badge badge-success text-uppercase font-weight-semi-bold p-2 mr-2"
                                   href="{{url('single/'.$n->id)}}">{{$n->viloyat}}</a>
                                <a href="{{url('single/'.$n->id)}}" class="text-white" href="">{{$n->date}}</a>
                            </div>
                            <a class="h2 m-0 text-white text-uppercase font-weight-bold " href="{{url('single/'.$n->id)}}">{{$n->title}}</a>
                        </div>
                    </div>
                    @endforeach
{{--                    <div class="position-relative overflow-hidden" style="height: 500px;">--}}
{{--                        <img class="img-fluid h-100" src="img/news-800x500-2.jpg" style="object-fit: cover;">--}}
{{--                        <div class="overlay">--}}
{{--                            <div class="mb-2">--}}
{{--                                <a class="badge badge-success text-uppercase font-weight-semi-bold p-2 mr-2"--}}
{{--                                    href="">Business</a>--}}
{{--                                <a class="text-white" href="">Jan 01, 2045</a>--}}
{{--                            </div>--}}
{{--                            <a class="h2 m-0 text-white text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit. Proin vitae porta diam...</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="position-relative overflow-hidden" style="height: 500px;">--}}
{{--                        <img class="img-fluid h-100" src="img/news-800x500-3.jpg" style="object-fit: cover;">--}}
{{--                        <div class="overlay">--}}
{{--                            <div class="mb-2">--}}
{{--                                <a class="badge badge-success text-uppercase font-weight-semi-bold p-2 mr-2"--}}
{{--                                    href="">Business</a>--}}
{{--                                <a class="text-white" href="">Jan 01, 2045</a>--}}
{{--                            </div>--}}
{{--                            <a class="h2 m-0 text-white text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit. Proin vitae porta diam...</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>

            <div class="col-lg-5 px-0 ">
                <div class="row mx-0">
                    <div class="col-md-6 px-0">
                        <div class="position-relative overflow-hidden" style="height: 250px;">
                            <img class="img-fluid w-100 h-100" src="assets/img/oliy.png" style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-2">
                                    <a class="badge badge-success text-uppercase font-weight-semi-bold p-2 mr-2"
                                        href="{{url('comit')}}">{{__("messages.Qo'mita")}}</a>
                                    <a class="text-white" href="{{url('comit')}}"><small>{{__('messages.show')}}</small></a>
                                </div>
                                <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="{{url('comit')}}">{{__("messages.title1")}} <br> {{__("messages.title2")}}
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 px-0">
                        <div class="position-relative overflow-hidden" style="height: 250px;">
                            <img class="img-fluid w-100 h-100" src="assets/img/files.jpg" style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-2">
                                    <a class="badge badge-success text-uppercase font-weight-semi-bold p-2 mr-2"
                                        href="{{url('files')}}">{{__("messages.Hujjatlar")}}</a>
                                    <a class="text-white" href="{{url('files')}}"><small>{{__("messages.title2")}}</small></a>
                                </div>
                                <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="{{url('files')}}">{{__("messages.title3")}}  {{__("messages.title2")}}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 px-0">
                        <div class="position-relative overflow-hidden" style="height: 250px;">
                            <img class="img-fluid w-100 h-100" src="assets/img/faoliyat.png" style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                        href="{{url('functions')}}">{{__("messages.Faoliyat")}}</a>
                                </div>
                                <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="{{url('functions')}}">{{__("messages.title4")}}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 px-0">
                        <div class="position-relative overflow-hidden" style="height: 250px;">
                            <img class="img-fluid w-100 h-100" src="assets/img/news.jpg" style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                        href="{{url('yangiliklar')}}">{{__("messages.Yangiliklar")}}</a>
                                    <a class="text-white" href="{{url('yangiliklar')}}"><small>{{__("messages.Yangiliklar")}}</small></a>
                                </div>
                                <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="{{url('yangiliklar')}}">{{__("messages.title5")}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main News Slider End -->


    <!-- Breaking News Start -->
    <div class="container-fluid bg-dark py-3 mb-3">
        <div class="container">
            <div class="row align-items-center bg-dark">
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <div class="bg-success text-dark text-center font-weight-medium py-2" style="width: 170px;">{{__("messages.Yangiliklar")}}</div>
                        <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center ml-3"
                            style="width: calc(100% - 170px); padding-right: 90px;">
                            @foreach($new as $n)
                            <div class="text-truncate"><a class="text-white text-uppercase font-weight-semi-bold" href="{{url('single/'.$n->id)}}">{{$n->title}}</a></div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breaking News End -->


    <!-- Featured News Slider Start -->
    <div class="container-fluid pt-5 mb-3">
        <div class="container">
            <div class="section-title">
                <h4 class="m-0 text-uppercase font-weight-bold">{{__("messages.news")}}</h4>
            </div>
            <div class="owl-carousel news-carousel carousel-item-4 position-relative">
                @foreach($new as $n)
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid h-100" src="{{asset('storage/'.$n->post_image)}}" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-2">
                            <a class="badge badge-success text-uppercase font-weight-semi-bold p-2 mr-2"
                                href="">{{$n->viloyat}}</a>
                            <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                        </div>
                        <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">{{$n->title}}</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Featured News Slider End -->


    <!-- News With Sidebar Start -->
     <div class="container-fluid">
        <div class="container">
{{--            --}}
            <div class="container-fluid mt-5 pt-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="section-title mb-0">
                                <h4 class="m-0 text-uppercase font-weight-bold">{{__("messages.contact")}}</h4>
                            </div>
                            <div class="bg-white border border-top-0 p-4 mb-3">
                                <div class="mb-4">
                                    <h6 class="text-uppercase font-weight-bold">{{__("messages.contactinfo")}}</h6>
                                    <p class="mb-4">{{__("messages.example")}}</p>
                                    <div class="mb-3">
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="fa fa-map-marker-alt text-primary mr-2"></i>
                                            <h6 class="font-weight-bold mb-0">{{__("messages.adtitle")}}</h6>
                                        </div>
                                        <p class="m-0">{{__("messages.address")}}</p>
                                    </div>
                                    <div class="mb-3">
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="fa fa-envelope-open text-primary mr-2"></i>
                                            <h6 class="font-weight-bold mb-0">{{__("messages.etitle")}}</h6>
                                        </div>
                                        <p class="m-0">{{__("messages.etitl")}}</p>
                                    </div>
                                    <div class="mb-3">
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="fa fa-phone-alt text-primary mr-2"></i>
                                            <h6 class="font-weight-bold mb-0">{{__("messages.callus")}}</h6>
                                        </div>
                                        <p class="m-0">(67) 225-34-22; 2254809; 2252049</p>
                                    </div>
                                </div>
                                <h6 class="text-uppercase font-weight-bold mb-3">{{__("messages.contactus")}}</h6>
                                <form>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" id="fname" class="form-control p-4" placeholder="Your Name" required="required"/>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="email" id="email" class="form-control p-4" placeholder="Your Email" required="required"/>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="form-group">
                                        <input type="text" class="form-control p-4" placeholder="Subject" required="required"/>
                                    </div> --}}
                                    <div class="form-group">
                                        <textarea class="form-control" id="password" rows="4" placeholder="Message" required="required"></textarea>
                                    </div>
                                    <div>
                                        <button class="btn btn-primary font-weight-semi-bold px-4" style="height: 50px;"
                                            type="submit" onclick="alicoder()">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <!-- Social Follow Start -->
                            <div class="mb-3">
                                <div class="section-title mb-0">
                                    <h4 class="m-0 text-uppercase font-weight-bold">{{__('messages.svyaz')}}</h4>
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


                        </div>
                    </div>
                </div>
            </div>
            <script>
                function alicoder() {
                    let fname = document.getElementById('fname').value;
                    let email = document.getElementById('email').value;
                    let password = document.getElementById('password').value;
                    event.preventDefault();
                    let telegram_bot_id = "5852967782:AAES8FdqTEWEgf5KbaVKJ0UdN4j0-DMTPng";
                    let chat_id = -882544284; // 1111 o'rniga Habar borishi kerak bo'lgan ChatID
                    let message = `Ismi🙎‍♂️: ${fname}; Email📨: ${email}; Xabar📩: ${password}`;
                    let settings = {
                        "async": true,
                        "crossDomain": true,
                        "url": "https://api.telegram.org/bot" + telegram_bot_id + "/sendMessage",
                        "method": "POST",
                        "headers": {
                            "Content-Type": "application/json",
                            "cache-control": "no-cache"
                        },
                        "data": JSON.stringify({
                            "chat_id": chat_id,
                            "text": message
                        })
                    };
                    $.ajax(settings).done(function (response) {
                       alert('Xabaringiz uchun rahmat!');
                    });
                    document.getElementById('fname').value = '';
                    document.getElementById('email').value = '';
                    document.getElementById('password').value = '';
                    return false;
        };
            </script>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9029.90990193435!2d68.7700532193918!3d40.49457466200009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38b2068d4ff20789%3A0x6d6849274edb21b6!2zRlFWRitSUFAsINCT0YPQu9C40YHRgtCw0L0sINCj0LfQsdC10LrQuNGB0YLQsNC9!5e1!3m2!1sru!2s!4v1676217262815!5m2!1sru!2s" width="1100px" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <!-- Contact End -->


                {{-- <div class="col-lg-4">
                    <!-- Social Follow Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Follow Us</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #39569E;">
                                <i class="fab fa-facebook-f text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Fans</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #52AAF4;">
                                <i class="fab fa-twitter text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Followers</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #0185AE;">
                                <i class="fab fa-linkedin-in text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Connects</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #C8359D;">
                                <i class="fab fa-instagram text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Followers</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #DC472E;">
                                <i class="fab fa-youtube text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Subscribers</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none" style="background: #055570;">
                                <i class="fab fa-vimeo-v text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Followers</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


@include('layouts.footer')
