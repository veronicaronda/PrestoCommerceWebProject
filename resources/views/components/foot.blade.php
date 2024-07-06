<footer style="background-image: url('/img/cart_home.jpg')" class="text-center text-lg-start text-muted bgHomeImage position-relative">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center mt-5 justify-content-lg-end p-4 borderfooter ColorThree z-2 position-relative">
        {{-- Scritta sinistra footer --}}
        <div class="me-5 d-none d-lg-block">
            <span>{{ __('ui.stayConnected') }}</span>
        </div>
        
        {{-- icone social --}}
        <div>
            <a href="https://www.facebook.com/profile.php?id=61561639625735" class="mx-4  text-reset text-decoration-none">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://www.instagram.com/bytebuster144/" class="mx-4 text-reset text-decoration-none">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://github.com/ByteBuster144?tab=repositories" class="mx-4 text-reset">
                <i class="fab fa-github"></i>
            </a>
        </div>
    </section>
    
    <!-- Section: Links  -->
    <section class="ColorThree z-2 position-relative">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3 justify-content-between">
                <!-- Grid column -->
                <div class="col-6 col-xl-2 col-md-4 col-lg-3 me-auto mb-4 text-center">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4 varela">
                        <i class="fas fa-gem me-3"></i>Byte-Buster
                    </h6>
                    <p class="varela">
                        {{ __('ui.webDevelopmentTeam') }}
                    </p>
                    <img class="img-fluid" src="/img/logoblu-trasparente.png" alt="logo presto blu">
                    
                    <div class="my-3 text-center  ">
                        @Auth
                        @if (!Auth::user()->is_revisor)
                        <span class="varela">{{ __('ui.becomeRevisor') }}</span>
                        <a class="btn btn-outline " href="{{ route('become.revisore') }}">
                            <span class="me-2 fs-6 "><i class="fa-solid fa-plus"></i></span>{{ __('ui.sendRequest') }}
                        </a>
                       @endif
                       @endauth
                    </div>
                </div>
                <!-- Grid column -->
                
                <div class="col-3 d-none d-lg-block mx-auto mb-4">
                    <!-- Empty column for spacing -->
                </div>
                
                <!-- Team column -->
                <div class="col-6 col-md-4 col-lg-3 col-xl-2 mb-md-0 mb-4 p-0 ColorThree ">
                    <h6 class="text-uppercase fw-bold mb-4 text-center">{{ __('ui.team') }}</h6>
                    <a class="text-decoration-none ColorThree" href="https://github.com/Pakos97">
                    
                    <div class="d-flex p-0 align-items-center mb-3">
                            <div class="col-6 mx-auto">
                                
                                <img src="/img/profilePasquale.jpg" class="rounded-circle borderImgProfile"
                                alt="foto profilo">
                                
                            </div>                         
                        <p class=" col-6 me-auto varela">Pakòs</p>
                    
                    </div>
                </a>
                    <a class="text-decoration-none ColorThree" href="https://github.com/veronicaronda">

                    <div class="d-flex p-0 align-items-center mb-3">
                            <div class="col-6 mx-auto">
                                <img src="/img/profileVeronica.jpeg" class="rounded-circle borderImgProfile"
                                alt="foto profilo">                            
                        </div>
                        <p class=" col-6   me-auto varela">Veronica</p>
                </div>
            </a>

                <a class="text-decoration-none ColorThree" href=https://github.com/giuliano-deangelo">
                <div class="d-flex p-0 align-items-center mb-3">
                    
                        <div class="col-6 mx-auto">
                            <img src="/img/profileGiuliano.jpg" class="rounded-circle borderImgProfile"
                            alt="foto profilo">
                        </div>
                        <p class=" col-6  me-auto varela">Giuliano</p>
                    
                </div>
            </a>
                <a  class="text-decoration-none ColorThree" href="https://github.com/Matteo-Trotta">
                <div class="d-flex p-0 align-items-center mb-3">
                    
                        <div class="col-6 mx-auto">
                                <img src="/img/profileMatteo.jpg" class="rounded-circle borderImgProfile"
                                alt="foto profilo">
                        </div>
                        <p class=" col-6  me-auto varela">Matteo</p>
                    
                </div>
            </a>
                <a class="text-decoration-none ColorThree" href="https://github.com/MirkoPampanini">

                <div class="d-flex  p-0 align-items-center mb-3">
                    <div class="col-6 mx-auto">
                        
                            <img src="/img/profile-mirko.jpg" class="rounded-circle borderImgProfile"
                            alt="foto profilo">
                    </div>
                    <p class=" col-6  me-auto varela">Mirko</p>
               

                </div>
            </a>
            </div>
            <!-- Grid column -->
        </div>
        <!-- Grid row -->
    </div>
</section>
<!-- Section: Links  -->

<!-- Copyright -->
<div class="text-center p-4 z-2 position-relative" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2024 Copyright:
    <a class="text-reset fw-bold"
    href="https://s2.pictoa.com/media/galleries/300/170/3001706021c5f7c8431/39046876021c5f9b9890.gif">Byte-Busters</a>
</div>
<!-- Copyright -->
</footer>
<!-- Footer -->
