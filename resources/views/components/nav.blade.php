<nav class="navbar navbar-expand-lg navbar-light bgColorThree ColorTwo fixed-top shadowcard">
    <div class="container-fluid">

        {{-- SEZIONE NAV MOBILE --}}
        <div class="row w-100 d-flex d-lg-none">
            <div class="col-4">
                <a class="navbar-brand mt-lg-0" href="{{ route('home') }}">
                    <img src="/img/logogiallo2.png" class="d-block d-lg-none" height="50" alt=""
                        loading="lazy" />
                </a>
            </div>
            @auth
                <div class="dropdown col-4 d-flex justify-content-center align-items-center">
                    <div class="dropdown me-3">
                        <button class="btn bgColorFour ColorThree dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="fa-solid fa-earth-europe fa-xl"></i>
                        </button>
                        <ul class="dropdown-menu menuFlag dropdown-menu-end shadowcard">

                            <li><a class="dropdown-item"><x-_locale lang="it" /></a></li>
                            <li><a class="dropdown-item"><x-_locale lang="en" /></a></li>
                            <li><a class="dropdown-item"><x-_locale lang="es" /></a></li>
                            <li><a class="dropdown-item"><x-_locale lang="fr" /></a></li>
                            <li><a class="dropdown-item"><x-_locale lang="de" /></a></li>
                            <li><a class="dropdown-item"><x-_locale lang="nl" /></a></li>
                            <li><a class="dropdown-item"><x-_locale lang="napoli" /></a></li>


                        </ul>
                    </div>

                    @if (Auth::user()->is_revisor)
                        <div class="dropdown">
                            <a data-mdb-dropdown-init class="text-reset me-4 dropdown-toggle hidden-arrow" href="#"
                                id="navbarDropdownMenuLink" role="button" aria-expanded="false">
                                <i class="fas fa-bell fs-4"></i>
                                <span
                                    class="badge rounded-pill badge-notification bg-danger">{{ \App\Models\Article::count() }}</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <a class="dropdown-item"
                                        href="{{ route('revisor.list') }}">{{ __('ui.dashboardRevisor') }}</a>
                                </li>
                            </ul>
                        </div>
                       
                    @endif
                    <a data-mdb-dropdown-init class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#"
                        id="navbarDropdownMenuAvatar" role="button" aria-expanded="false">
                        <img src="{{ Auth::user()->profile_photo_url }}" class="profile-photo rounded-circle" height="50"
                            alt="Profile Photo" loading="lazy" />
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end bgColorThree " aria-labelledby="navbarDropdownMenuAvatar">
                        <li class="pt-3 pb-1 text-center ">
                            <p class="bgColorTwo py-1">{{ __('ui.hello') }}, {{ Auth::user()->name }}</p>
                        </li>
                        <li>
                            <a class="dropdown-item ColorTwo" href="{{ route('profile') }}">{{ __('ui.myProfile') }}</a>
                        </li>
                        <li>
                            <a class="dropdown-item ColorTwo" href="{{ route('article.create') }}">{{ __('ui.addAd') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('favorites.index') }}"
                                class="dropdown-item ColorTwo">{{ __('ui.preferiti') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('become.revisor') }}"
                                class="dropdown-item ColorTwo">{{ __('ui.workWithUs') }}</a>
                        </li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="dropdown-item text-danger fw-bold"
                                    type="submit">{{ __('ui.logout') }}</button>
                            </form>
                        </li>
                    </ul>
                </div>
            @endauth
            @guest
                <div class="col-4">

                </div>
            @endguest
            <button data-mdb-collapse-init
                class="col-4 d-flex justify-content-end align-items-center navbar-toggler shadow-none" type="button"
                data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars fs-1 ColorFour"></i>
            </button>
        </div>

        <div class="row w-100">
            <div class="collapse navbar-collapse col-4" id="navbarSupportedContent">
                <a class="navbar-brand mt-lg-0" href="{{ route('home') }}">
                    <img src="/img/logogiallo2.png" class="d-none d-lg-block" height="50" alt=""
                        loading="lazy" />
                </a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    {{-- <li class="nav-item">
                        <a class="text-center nav-link ColorTwo fs-5 fw-semibold" href="{{ route('home') }}">{{ __('ui.home') }}</a>
                    </li> --}}
                    <li class="nav-item d-flex align-items-center justify-content-center">
                        <a href="{{ route('home') }}"> <i class="fa-solid fa-house ColorFour fs-3"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="text-center nav-link ColorTwo fs-5 fw-semibold hover"
                            href="{{ route('article.index') }}">{{ __('ui.ads') }}</a>
                    </li>
                    @guest
                        <li class="nav-item">
                            <a class="text-center nav-link ColorTwo fs-5 fw-semibold hover"
                                href="{{ route('register') }}">{{ __('ui.signUp') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="text-center nav-link ColorTwo fs-5 fw-semibold hover"
                                href="{{ route('login') }}">{{ __('ui.login') }}</a>
                        </li>
                    @endguest
                </ul>
                <div class="col-10 d-flex align-items-center justify-content-center d-flex d-lg-none mx-auto">
                    <form action="{{ route('article.search') }}" method="GET" role="search">
                        <div class="position-relative input-group rounded d-flex align-items-center">
                            <input name="query" type="search" class="form-control m-0 border-0 rounded"
                                placeholder="{{ __('ui.searchPlaceholder') }}" aria-label="Search" />
                            <i type="submit" class="fas fa-search position-absolute ColorThree end-0 pe-3"></i>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-4 d-flex align-items-center justify-content-center d-none d-lg-flex mx-auto">
                <form action="{{ route('article.search') }}" method="GET" role="search">
                    <div class="position-relative input-group rounded d-flex align-items-center">
                        <input name="query" type="search" class="form-control m-0 border-0 rounded"
                            placeholder="{{ __('ui.searchPlaceholder') }}" aria-label="Search" />
                        <i type="submit" class="fas fa-search position-absolute ColorThree end-0 pe-3"></i>
                    </div>
                </form>
            </div>



            <div class="d-flex align-items-center d-none d-lg-flex col-4 justify-content-end">
                <div class="dropdown me-3">
                    <button class="btn bgColorFour ColorThree dropdown-toggle" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-earth-europe fa-xl"></i>
                    </button>
                    <ul class="dropdown-menu menuFlag dropdown-menu-end shadowcard">

                        <li><a class="dropdown-item"><x-_locale lang="it" /></a></li>
                        <li><a class="dropdown-item"><x-_locale lang="en" /></a></li>
                        <li><a class="dropdown-item"><x-_locale lang="es" /></a></li>
                        <li><a class="dropdown-item"><x-_locale lang="fr" /></a></li>
                        <li><a class="dropdown-item"><x-_locale lang="de" /></a></li>
                        <li><a class="dropdown-item"><x-_locale lang="nl" /></a></li>
                        <li><a class="dropdown-item"><x-_locale lang="napoli" /></a></li>


                    </ul>
                </div>




                @auth
                    @if (Auth::user()->is_revisor)
                        <div class="dropdown">
                            <a data-mdb-dropdown-init class="text-reset me-4 dropdown-toggle hidden-arrow" href="#"
                                id="navbarDropdownMenuLink" role="button" aria-expanded="false">
                                <i class="fas fa-bell fs-4"></i>
                                <span
                                    class="badge rounded-pill badge-notification bg-danger">{{ \App\Models\Article::count() }}</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <a class="dropdown-item"
                                        href="{{ route('revisor.list') }}">{{ __('ui.dashboardRevisor') }}</a>
                                </li>
                            </ul>
                        </div>
                    @endif
                    <div class="dropdown ">
                        <a data-mdb-dropdown-init class="dropdown-toggle d-flex align-items-center hidden-arrow"
                            href="#" id="navbarDropdownMenuAvatar" role="button" aria-expanded="false">
                            <img src="{{ Auth::user()->profile_photo_url }}" class="profile-photo rounded-circle"
                                height="45px" width="45px" alt="Profile Photo" loading="lazy" />
                        </a>
                        <ul class="dropdown-menu shadowcard dropdown-menu-end bgColorThree border-0 mt-2 rounded-0"
                            aria-labelledby="navbarDropdownMenuAvatar">
                            <li class="pt-3 pb-1 text-center  border-0 rounded-0">
                                <p class="py-1 bgColorFour fst-italic">{{ __('ui.hello') }}, {{ Auth::user()->name }}</p>
                            </li>
                            <li>
                                <a class="dropdown-item ColorTwo"
                                    href="{{ route('profile') }}">{{ __('ui.myProfile') }}</a>
                            </li>
                            <li>
                                <a class="dropdown-item ColorTwo"
                                    href="{{ route('article.create') }}">{{ __('ui.addAd') }}</a>
                            </li>
                            @if (!Auth::user()->is_revisor)
                            <li>
                                <a href="{{ route('lavoraconnoi') }}"
                                    class="dropdown-item ColorTwo">{{ __('ui.workWithUs') }}</a>
                            </li>
                            @endif
                            <li>
                                <a href="{{ route('favorites.index') }}"
                                    class="dropdown-item ColorTwo">{{ __('ui.preferiti') }}</a>
                            </li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button class="dropdown-item text-danger fw-bold"
                                        type="submit">{{ __('ui.logout') }}</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                @endauth
            </div>
        </div>
    </div>
</nav>
