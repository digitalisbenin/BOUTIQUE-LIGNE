
@php
use Illuminate\Support\Facades\Auth;
use App\Models\Inscription;
$codeParents = Inscription::where('user_id', Auth::id())->first();
@endphp
<nav class="navbar navbar-expand-lg navbar-default py-0 py-lg-2 fixed-top"style="background-color:white;"  >
    <div class="container px-5">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuprojet" aria-controls="menuprojet" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a class="" href="{{ url('accueil') }}">
              {{--  <h3>DIGIT-SHOPPING</h3>  --}}
              <img class="cover"
                    src=
"{{asset('assets/images/logo.png')}}"
                    alt=""
                    width="200"
                    height="50">
        </a>

        <div class="collapse navbar-collapse" id="menuprojet">
            {{--  <ul class="navbar-nav me-auto mb-2 mb-lg-0 align-items-center">

            </ul>  --}}
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link" href="/accueil" role="button" aria-expanded="false">ACCUEIL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('about') }}">A PROPOS DE NOUS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('partenaire')}}" role="button" aria-expanded="false">NOS PARTENAIRES</a>
                </li>
                @auth
                    @if (\Illuminate\Support\Facades\Auth::user()->role_id == '1')
                        <li class="nav-item">
                            <a href="{{ url('admin-panel') }}" class="btn btn-dark">Tableau de bord</a>
                        </li>
                    @endif
                @endauth

                @guest
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="btn btn-light-primary me-3 mb-1">S'INSCRIRE</a>
                        </li>
                    @endif
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="btn btn-dark me-3 mb-1">SE CONNECTER</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">{{ Auth::user()->nom }} {{ Auth::user()->prenoms }}</a></li>
                            @if($codeParents && $codeParents->codeUser)
                                 <li class="dropdown-item">Code Promo : {{$codeParents->codeUser}}</li>
                            @else
                            @endif


                            <li><a class="dropdown-item" href="#"> Points: {{Auth::user()->points}}</a></li>
                            <li><a class="dropdown-item" href="#"> Bonus: {{ $codeParents ? $codeParents->bonus :0}} FCFA</a></li>
                            <li><a class="dropdown-item" href="#"> Solde: {{ $codeParents ? $codeParents->solde :0}} FCFA</a></li>
                            <li><a class="dropdown-item" href="{{ url('mes-commandes') }}">Mes-Commandes</a></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnexion</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </li>
                @endguest
                <li class="nav-item">
                    {{--  <a class="nav-link text-muted position-relative" href="{{url('checkout')}}" role="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag">
                            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <path d="M16 10a4 4 0 0 1-8 0"></path>
                        </svg>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success cart-count">
                            0

                        </span>
                    </a>  --}}

                </li>
            </ul>

        </div>
         <a class="text-muted position-relative mt-2"  href="{{url('mon-panier')}}" role="button"
                aria-controls="offcanvasRight">
                 <svg
                     xmlns="http://www.w3.org/2000/svg"
                     width="20"
                     height="20"
                     viewBox="0 0 24 24"
                     fill="none"
                     stroke="currentColor"
                     stroke-width="2"
                     stroke-linecap="round"
                     stroke-linejoin="round"
                     class="feather feather-shopping-bag"
                 >
                     <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                     <line x1="3" y1="6" x2="21" y2="6"></line>
                     <path d="M16 10a4 4 0 0 1-8 0"></path>
                 </svg>
                 <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success cart-count">
                     0
                     <span class="visually-hidden">Messages non lus</span>
                 </span>
             </a>
    </div>
</nav>

{{--  <nav class="navbar navbar-expand-lg navbar-light navbar-default py-0 py-lg-2 border-top navbar-offcanvas-color"
     aria-label="Offcanvas navbar large">
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuprojet" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <div class="container align-items-center">

         <div class="offcanvas offcanvas-start" tabindex="-1" id="navbar-default" aria-labelledby="navbar-defaultLabel">
            <div class="offcanvas-header pb-1">
                <a href="#"><h1>DIGIT-SHOPPING</h1></a>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="d-block d-lg-none mb-4">
                    <form action="#">
                        <div class="input-group">
                            <input class="form-control rounded" type="search" placeholder="Search for products"/>
                            <span class="input-group-append">
								<button class="btn bg-white border border-start-0 ms-n10 rounded-0 rounded-end"
                                        type="button">
									<svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="16"
                                        height="16"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-search"
                                    >
										<circle cx="11" cy="11" r="8"></circle>
										<line x1="21" y1="21" x2="16.65" y2="16.65"></line>
									</svg>
								</button>
							</span>
                        </div>
                    </form>
                    <div class="mt-2">
                        <button type="button" class="btn btn-outline-gray-400 text-muted w-100" data-bs-toggle="modal"
                                data-bs-target="#locationModal">
                            <i class="feather-icon icon-map-pin me-2"></i>
                            Pick Location
                        </button>
                    </div>
                </div>



            </div>

        </div>
        <div>
            <ul class="navbar-nav align-items-center">
                <li class="me-3 d-none d-lg-block">
                    <div class="d-flex align-items-center">
                        <a class="navbar-brand d-none d-lg-block mt-1" href="{{ url('accueil') }}">
                            <h3>DIGIT-SHOPPING</h3>
                        </a>

                    </div>
                </li>




            </ul>
        </div>
        <div class="d-flex justify-content-end " id="menuprojet">
            <ul class="navbar-nav align-items-center">

                <li class="nav-item">
                    <a class="nav-link " href="/accueil" role="button"
                       aria-expanded="false">Accueil</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="https://freshcart.codescandy.com/index.html">Home
                                1</a></li>
                        <li><a class="dropdown-item" href="index-2.html">Home 2</a></li>
                        <li><a class="dropdown-item" href="index-3.html">Home 3</a></li>
                        <li><a class="dropdown-item" href="index-4.html">Home 4</a></li>
                        <li>
                            <a class="dropdown-item" href="index-5.html">Home 5</a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="{{ url('about') }}">A propos de nous</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('partenaire')}}" role="button"
                       aria-expanded="false">Nos partenaires</a>
                </li>
            </ul>
            @auth
                @if(\Illuminate\Support\Facades\Auth::user()->role_id == '2')
                      <div class="list-inline-item mt-3 ml-4">
                        <a class="nav-link" href="{{ url('shop') }}" role="button"
                           aria-expanded="false">Achats</a>
                    </div>
                @endif

            @endauth

            @auth
                @if(\Illuminate\Support\Facades\Auth::user()->role_id == '2')
                      <div class="list-inline-item mt-3 ml-4">
                        <div class="dropdown d-none d-xl-block">
                            <a href="#" class="dropdown-toggle text-reset" data-bs-toggle="dropdown"
                               aria-expanded="false">
								<span>
									<svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="16"
                                        height="16"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-shopping-cart align-text-bottom"
                                    >
										<circle cx="9" cy="21" r="1"></circle>
										<circle cx="20" cy="21" r="1"></circle>
										<path
                                            d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
									</svg>
								</span>

                                <span>0.00 FCFA</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg p-5">
                                <div class="d-flex justify-content-between align-items-center border-bottom pb-5">
                                    <div>
                                        <span><i class="feather-icon icon-shopping-cart"></i></span>
                                        <span class="text-success">3</span>
                                    </div>
                                    <div>
                                        <span>Total:</span>
                                        <span class="text-success">10500.00 FCFA</span>
                                    </div>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item px-0 py-3">
                                        <div class="row align-items-center g-0">
                                            <div class="col-lg-3 text-center">
                                                <!-- img -->
                                                <img src="{{ asset('assets/images/products/product-img-1.jpg') }}"
                                                     alt="Ecommerce"
                                                     class="icon-xxl"/>
                                            </div>
                                            <div class="col-lg-7">
                                                <!-- title -->
                                                <a href="shop-single.html" class="text-inherit">
                                                    <h6 class="mb-0">Haldiram's Sev Bhujia</h6>
                                                </a>
                                                <small class="text-muted">1 x $35.00</small>
                                            </div>

                                            <!-- price -->
                                            <div class="text-end col-lg-2">
                                                <a href="#" class="text-inherit" aria-label="Close"><i
                                                        class="bi bi-x fs-4"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item px-0 py-3">
                                        <div class="row align-items-center g-0">
                                            <div class="col-lg-3 text-center">
                                                <!-- img -->
                                                <img src="{{ asset('assets/images/products/product-img-2.jpg') }}"
                                                     alt="Ecommerce"
                                                     class="icon-xxl"/>
                                            </div>
                                            <div class="col-lg-7">
                                                <!-- title -->
                                                <a href="shop-single.html" class="text-inherit">
                                                    <h6 class="mb-0">NutriChoice Digestive</h6>
                                                </a>
                                                <small class="text-muted">1 x $29.00</small>
                                            </div>

                                            <!-- price -->
                                            <div class="text-end col-lg-2">
                                                <a href="#" class="text-inherit" aria-label="Close"><i
                                                        class="bi bi-x fs-4"></i></a>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="list-group-item px-0 py-3">
                                        <div class="row align-items-center g-0">
                                            <div class="col-lg-3 text-center">
                                                <!-- img -->
                                                <img src="{{ asset('assets/images/products/product-img-3.jpg') }}"
                                                     alt="Ecommerce"
                                                     class="icon-xxl"/>
                                            </div>
                                            <div class="col-lg-7">
                                                <!-- title -->
                                                <a href="shop-single.html" class="text-inherit">
                                                    <h6 class="mb-0">Cadbury 5 Star Chocolate</h6>
                                                </a>
                                                <small class="text-muted">1 x $29.00</small>
                                            </div>

                                            <!-- price -->
                                            <div class="text-end col-lg-2">
                                                <a href="#" class="text-inherit" aria-label="Close"><i
                                                        class="bi bi-x fs-4"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="mt-2 d-grid">
                                    <a href="#" class="btn btn-primary">Checkout</a>
                                    <a href="#" class="btn btn-light mt-2">View Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

            @endauth



            @auth
                @if (\Illuminate\Support\Facades\Auth::user()->role_id == '1')
                    <div class="list-inline-item">
                        <a href="{{ url('admin-panel') }}" class="btn btn-dark d-none d-xl-block">Tableau de bord</a>
                    </div>
                  @else
                    <div class="list-inline-item">
                        <a href="{{ route('register') }}" class="btn btn-light-primary d-none d-xl-block">S'inscrire</a>
                    </div>

                    <div class="list-inline-item">
                        <a href="{{ route('login') }}" class="btn btn-dark d-none d-xl-block">Se Connecter</a>
                    </div>
                @endif
            @endauth

        <!-- Authentication Links -->
            @guest

                @if (Route::has('register'))
                    <div class="list-inline-item">
                        <a href="{{ route('register') }}" class="btn btn-light-primary d-none d-xl-block">S'inscrire</a>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif

                @if (Route::has('login'))
                    <div class="list-inline-item">
                        <a href="{{ route('login') }}" class="btn btn-dark d-none d-xl-block">Se Connecter</a>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

            @else
                <div class="nav-item dropdown mt-2">


                        <div class="list-inline-item me-5">
							<a href="#!" class="text-muted" data-bs-toggle="modal" data-bs-target="#userModal">
								<svg
									xmlns="http://www.w3.org/2000/svg"
									width="20"
									height="20"
									viewBox="0 0 24 24"
									fill="none"
									stroke="currentColor"
									stroke-width="2"
									stroke-linecap="round"
									stroke-linejoin="round"
									class="feather feather-user"
								>
									<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
									<circle cx="12" cy="7" r="4"></circle>
								</svg>
							</a>
						</div>


                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#"
                                    >
                                    {{ Auth::user()->nom }} {{ Auth::user()->prenoms }}
                                  </a>


                        <a class="dropdown-item" href="{{ url('mes-commandes') }}"
                                    >
                                      {{ __('Mes-Commandes') }}
                                  </a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Déconnexion') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
                       @endguest
                <a class="text-muted position-relative mt-2"  href="{{url('checkout')}}" role="button"
                aria-controls="offcanvasRight">
                 <svg
                     xmlns="http://www.w3.org/2000/svg"
                     width="20"
                     height="20"
                     viewBox="0 0 24 24"
                     fill="none"
                     stroke="currentColor"
                     stroke-width="2"
                     stroke-linecap="round"
                     stroke-linejoin="round"
                     class="feather feather-shopping-bag"
                 >
                     <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                     <line x1="3" y1="6" x2="21" y2="6"></line>
                     <path d="M16 10a4 4 0 0 1-8 0"></path>
                 </svg>
                 <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success cart-count">
                     0
                     <span class="visually-hidden">Messages non lus</span>
                 </span>
             </a>
        </div>
    </div>

</nav>











  --}}
