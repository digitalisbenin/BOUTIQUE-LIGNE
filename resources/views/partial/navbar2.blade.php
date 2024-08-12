@php
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
$cartitems = Cart::where('user_id', Auth::id())->get();
@endphp
<!-- navbar -->
<div class="border-bottom">
    {{--<div class="bg-light py-1">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12 text-center text-md-start">
                    <span>Super Value Deals - Save more with coupons</span></div>
                <div class="col-6 text-end d-none d-md-block">
                    <div class="dropdown selectBox">
                        <a class="dropdown-toggle selectValue text-reset" href="javascript:void(0)"
                           data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="me-2">
                            <svg width="16" height="13" viewBox="0 0 16 13" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#selectedlang)">
                                    <path d="M0 0.5H16V12.5H0V0.5Z" fill="#012169"/>
                                    <path d="M1.875 0.5L7.975 5.025L14.05 0.5H16V2.05L10 6.525L16 10.975V12.5H14L8 8.025L2.025 12.5H0V11L5.975 6.55L0 2.1V0.5H1.875Z"
                                          fill="white"/>
                                    <path
                                        d="M10.6 7.525L16 11.5V12.5L9.225 7.525H10.6ZM6 8.025L6.15 8.9L1.35 12.5H0L6 8.025ZM16 0.5V0.575L9.775 5.275L9.825 4.175L14.75 0.5H16ZM0 0.5L5.975 4.9H4.475L0 1.55V0.5Z"
                                        fill="#C8102E"
                                    />
                                    <path d="M6.025 0.5V12.5H10.025V0.5H6.025ZM0 4.5V8.5H16V4.5H0Z" fill="white"/>
                                    <path d="M0 5.325V7.725H16V5.325H0ZM6.825 0.5V12.5H9.225V0.5H6.825Z"
                                          fill="#C8102E"/>
                                </g>
                                <defs>
                                    <clipPath id="selectedlang">
                                        <rect width="16" height="12" fill="white" transform="translate(0 0.5)"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>
                            English
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="javascript:void(0)">
                                <span class="me-2">
                                    <svg width="16" height="13" viewBox="0 0 16 13" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#selectedlang)">
                                            <path d="M0 0.5H16V12.5H0V0.5Z" fill="#012169"/>
                                            <path d="M1.875 0.5L7.975 5.025L14.05 0.5H16V2.05L10 6.525L16 10.975V12.5H14L8 8.025L2.025 12.5H0V11L5.975 6.55L0 2.1V0.5H1.875Z"
                                                  fill="white"/>
                                            <path
                                                d="M10.6 7.525L16 11.5V12.5L9.225 7.525H10.6ZM6 8.025L6.15 8.9L1.35 12.5H0L6 8.025ZM16 0.5V0.575L9.775 5.275L9.825 4.175L14.75 0.5H16ZM0 0.5L5.975 4.9H4.475L0 1.55V0.5Z"
                                                fill="#C8102E"
                                            />
                                            <path d="M6.025 0.5V12.5H10.025V0.5H6.025ZM0 4.5V8.5H16V4.5H0Z"
                                                  fill="white"/>
                                            <path d="M0 5.325V7.725H16V5.325H0ZM6.825 0.5V12.5H9.225V0.5H6.825Z"
                                                  fill="#C8102E"/>
                                        </g>
                                        <defs>
                                            <clipPath id="selectedlang">
                                                <rect width="16" height="12" fill="white"
                                                      transform="translate(0 0.5)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </span>
                                    English
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="javascript:void(0)">
                                <span class="me-2">
                                    <svg width="16" height="13" viewBox="0 0 16 13" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_5543_19751)">
                                            <path d="M0 8.5H16V12.5H0V8.5Z" fill="#FFCE00"/>
                                            <path d="M0 0.5H16V4.5H0V0.5Z" fill="black"/>
                                            <path d="M0 4.5H16V8.5H0V4.5Z" fill="#DD0000"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_5543_19751">
                                                <rect width="16" height="12" fill="white"
                                                      transform="translate(0 0.5)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </span>
                                    Deutsch
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
    <div class="py-5">
        <div class="container">
            <div class="row w-100 align-items-center gx-lg-2 gx-0">
                <div class="col-xxl-2 col-lg-3 col-md-6 col-5">
                    <a class="navbar-brand d-none d-lg-block" href="{{ url('accueil') }}">
                        {{--  <h3>DIGIT-SHOPPING</h3>  --}}
                        <img class="cover"
                        src=
    "{{asset('assets/images/logo.png')}}"
                        alt=""
                        width="200"
                        height="50">  
                    </a>
                    <div class="d-flex justify-content-between w-100 d-lg-none">
                        <a class="navbar-brand" href="{{ url('accueil') }}">
                            <h3>DIGIT-SHOPPING</h3>
                        </a>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-3 d-none d-lg-block">
                    <form action="#">
                        <div class="input-group">
                            {{--  <input class="form-control rounded" type="search" placeholder="Search for products"/>
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
								</button>  --}}
							</span>
                        </div>
                    </form>
                </div>
                <div class="col-md-1 col-xxl-1 d-none d-lg-block">
                    <!-- Button trigger modal -->
                    {{--  <button type="button" class="btn btn-outline-gray-400 text-muted" data-bs-toggle="modal"
                            data-bs-target="#locationModal">
                        <i class="feather-icon icon-map-pin me-2"></i>
                        Location
                    </button>  --}}
                </div>
                <div class="col-lg-4 col-xxl-5 text-end  col-md-6 col-7">
                    <div class="list-inline">
                        <div class="list-inline-item me-5 ">
                            <a href="{{url('favoris')}}" class="text-muted position-relative">
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
                                    class="feather feather-heart"
                                >
                                    <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                </svg>
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success whishlist-count ">
									0
									<span class="visually-hidden">Messages non lus</span>
								</span>
                            </a>
                        </div>
                        <div class="list-inline-item me-3">
                            <a class="text-muted position-relative" 
                               data-bs-target="#offcanvasRight" href="{{url('mon-panier')}}" role="button"
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
                        <div class="list-inline-item me-1">

                            {{--  <a href="#!" class="text-muted" data-bs-toggle="modal" data-bs-target="#userModal">
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
                            </a>  --}}

                            @guest

                              @if (Route::has('register'))
                                <div class="list-inline-item">
                                    <a href="{{ route('register') }}" class="btn btn-light-primary d-none d-xl-block">S'inscrire</a>
                                </div>
                                {{--  <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>  --}}
                             @endif

                            @if (Route::has('login'))
                                <div class="list-inline-item">
                                    <a href="{{ route('login') }}" class="btn btn-dark">Se Connecter</a>
                                </div>
                                {{--<li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>--}}

                                @endif
                            @else
                            <div class=" list-inline-item me-1 me-lg-0">
                                <a id="navbarDropdown" class=" mt-2" href="#"
                                   data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
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

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#"
                                    >
                                    {{ Auth::user()->nom }}   {{ Auth::user()->prenoms }}
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

                        </div>

                        {{--  <div class="list-inline-item d-inline-block d-lg-none">
                            <!-- Button -->
                            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="offcanvas"
                                    data-bs-target="#navbar-default" aria-controls="navbar-default"
                                    aria-label="Toggle navigation">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                     class="bi bi-text-indent-left text-primary" viewBox="0 0 16 16">
                                    <path
                                        d="M2 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm.646 2.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L4.293 8 2.646 6.354a.5.5 0 0 1 0-.708zM7 6.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"
                                    />
                                </svg>
                            </button>
                        </div>  --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-4">
            <div class="modal-header border-0">
                <h5 class="modal-title fs-3 fw-bold" id="userModalLabel">Sign Up</h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="needs-validation" novalidate>
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="fullName" placeholder="Enter Your Name" required />
                        <div class="invalid-feedback">Please enter name.</div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter Email address" required />
                        <div class="invalid-feedback">Please enter email.</div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter Password" required />
                        <div class="invalid-feedback">Please enter password.</div>
                        <small class="form-text">
                            By Signup, you agree to our
                            <a href="#!">Terms of Service</a>
                            &
                            <a href="#!">Privacy Policy</a>
                        </small>
                    </div>

                    <button type="submit" class="btn btn-primary" type="submit">Sign Up</button>
                </form>
            </div>
            <div class="modal-footer border-0 justify-content-center">
                Already have an account?
                <a href="#">Sign in</a>
            </div>
        </div>
    </div>
</div>

<!-- Shop Cart -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header border-bottom">
        <div class="text-start">
            <h5 id="offcanvasRightLabel" class="mb-0 fs-4">Votre panier</h5>
            {{--  <small>Location in 382480</small>  --}}
        </div>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="">
            <!-- alert -->
            {{--  <div class="alert alert-danger p-2" role="alert">
                You’ve got FREE delivery. Start
                <a href="#!" class="alert-link">checkout now!</a>
            </div>  --}}
            <ul class="list-group list-group-flush">
                <!-- list group -->
                {{--  <li class="list-group-item py-3 ps-0 border-top">
                    <!-- row -->
                    <div class="row align-items-center">
                        <div class="col-6 col-md-6 col-lg-7">
                            <div class="d-flex">
                                <img src="{{ asset('assets/images/products/product-img-1.jpg') }}" alt="Ecommerce" class="icon-shape icon-xxl" />
                                <div class="ms-3">
                                    <!-- title -->
                                    <a href="shop-single.html" class="text-inherit">
                                        <h6 class="mb-0">Haldiram</h6>
                                    </a>
                                    <span><small class="text-muted">.98 / lb</small></span>
                                    <!-- text -->
                                    <div class="mt-2 small lh-1">
                                        <a href="#!" class="text-decoration-none text-inherit">
											<span class="me-1 align-text-bottom">
												<svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="14"
                                                    height="14"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-trash-2 text-success"
                                                >
													<polyline points="3 6 5 6 21 6"></polyline>
													<path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
													<line x1="10" y1="11" x2="10" y2="17"></line>
													<line x1="14" y1="11" x2="14" y2="17"></line>
												</svg>
											</span>
                                            <span class="text-muted">Remove</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- input group -->
                        <div class="col-4 col-md-3 col-lg-3">
                            <!-- input -->
                            <!-- input -->
                            <div class="input-group input-spinner">
                                <input type="button" value="-" class="button-minus btn btn-sm" data-field="quantity" />
                                <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input" />
                                <input type="button" value="+" class="button-plus btn btn-sm" data-field="quantity" />
                            </div>
                        </div>
                        <!-- price -->
                        <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                            <span class="fw-bold">$5.00</span>
                        </div>
                    </div>
                </li>
                <!-- list group -->
                <li class="list-group-item py-3 ps-0">
                    <!-- row -->
                    <div class="row align-items-center">
                        <div class="col-6 col-md-6 col-lg-7">
                            <div class="d-flex">
                                <img src="{{ asset('assets/images/products/product-img-2.jpg') }}" alt="Ecommerce" class="icon-shape icon-xxl" />
                                <div class="ms-3">
                                    <a href="shop-single.html" class="text-inherit">
                                        <h6 class="mb-0">NutriChoice Digestive</h6>
                                    </a>
                                    <span><small class="text-muted">250g</small></span>
                                    <!-- text -->
                                    <div class="mt-2 small lh-1">
                                        <a href="#!" class="text-decoration-none text-inherit">
											<span class="me-1 align-text-bottom">
												<svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="14"
                                                    height="14"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-trash-2 text-success"
                                                >
													<polyline points="3 6 5 6 21 6"></polyline>
													<path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
													<line x1="10" y1="11" x2="10" y2="17"></line>
													<line x1="14" y1="11" x2="14" y2="17"></line>
												</svg>
											</span>
                                            <span class="text-muted">Remove</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- input group -->
                        <div class="col-4 col-md-3 col-lg-3">
                            <!-- input -->
                            <!-- input -->
                            <div class="input-group input-spinner">
                                <input type="button" value="-" class="button-minus btn btn-sm" data-field="quantity" />
                                <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input" />
                                <input type="button" value="+" class="button-plus btn btn-sm" data-field="quantity" />
                            </div>
                        </div>
                        <!-- price -->
                        <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                            <span class="fw-bold text-danger">$20.00</span>
                            <div class="text-decoration-line-through text-muted small">$26.00</div>
                        </div>
                    </div>
                </li>  --}}
                @php
                    $total=0;
                @endphp
                <!-- list group -->
                <li class="list-group-item py-3 ps-0 mb-2">
                    @foreach($cartitems as $value)
                    <!-- row -->

                    <div class="row align-items-center mb-3 cartitems product_data ">

                        <div class="col-6 col-md-6 col-lg-7">

                            <div class="d-flex ">
                                <img src="{{ asset('assets/uploads/articles_images/'.$value->article->image_path ) }}" alt="Ecommerce" class="icon-shape icon-xxl" />
                                <div class="ms-3">
                                    <!-- title -->
                                    <a href="shop-single.html" class="text-inherit">
                                        <input type="hidden" value="{{ $value->article->id }}" class="prod_id">
                                        <h6 class="mb-0">{{$value->article->nomArticle}}</h6>
                                    </a>
                                    <span><small class="text-muted">{{$value->quantite}}</small></span>
                                    <!-- text -->
                                    <div class="mt-2 small lh-1">
                                        <a href="#!" class="text-decoration-none text-inherit delete-cart-item">
											<span class="me-1 align-text-bottom">
												<svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="14"
                                                    height="14"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-trash-2 text-success"
                                                >
													<polyline points="3 6 5 6 21 6"></polyline>
													<path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
													<line x1="10" y1="11" x2="10" y2="17"></line>
													<line x1="14" y1="11" x2="14" y2="17"></line>
												</svg>
											</span>
                                            <span class="text-muted ">Remove</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        @php
                        $total += $value->article->prixVenteArticle*$value->quantite;
                       @endphp
                        <!-- input group -->
                        <div class="col-4 col-md-3 col-lg-3">
                            <!-- input -->
                            <!-- input -->
                            <div class="input-group input-spinner">
                                <input type="button" value="-" class="button-minus  changeQuantity btn btn-sm" data-field="quantity" />
                                <input type="number" step="1" max="10" value="{{ $value->quantite }}" name="quantity" class="quantity-field qty-input form-control-sm form-input" />
                                <input type="button" value="+" class="button-plus changeQuantity btn btn-sm" data-field="quantity" />
                            </div>

                        </div>
                        <!-- price -->
                        <div class="col-2 text-lg-end text-start text-md-end col-md-2">

                            <span class="fw-bold">{{ $value->article->prixVenteArticle }} FCFA</span>
                            {{--  <div class="text-decoration-line-through text-muted small">$20.00</div>  --}}
                        </div>

                    </div>
                    @endforeach
                </li>
                {{--  <!-- list group -->
                <li class="list-group-item py-3 ps-0">
                    <!-- row -->
                    <div class="row align-items-center">
                        <div class="col-6 col-md-6 col-lg-7">
                            <div class="d-flex">
                                <img src="{{ asset('assets/images/products/product-img-4.jpg') }}" alt="Ecommerce" class="icon-shape icon-xxl" />
                                <div class="ms-3">
                                    <!-- title -->
                                    <!-- title -->
                                    <a href="shop-single.html" class="text-inherit">
                                        <h6 class="mb-0">Onion Flavour Potato</h6>
                                    </a>
                                    <span><small class="text-muted">250g</small></span>
                                    <!-- text -->
                                    <div class="mt-2 small lh-1">
                                        <a href="#!" class="text-decoration-none text-inherit">
											<span class="me-1 align-text-bottom">
												<svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="14"
                                                    height="14"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-trash-2 text-success"
                                                >
													<polyline points="3 6 5 6 21 6"></polyline>
													<path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
													<line x1="10" y1="11" x2="10" y2="17"></line>
													<line x1="14" y1="11" x2="14" y2="17"></line>
												</svg>
											</span>
                                            <span class="text-muted">Remove</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- input group -->
                        <div class="col-4 col-md-3 col-lg-3">
                            <!-- input -->
                            <!-- input -->
                            <div class="input-group input-spinner">
                                <input type="button" value="-" class="button-minus btn btn-sm" data-field="quantity" />
                                <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input" />
                                <input type="button" value="+" class="button-plus btn btn-sm" data-field="quantity" />
                            </div>
                        </div>
                        <!-- price -->
                        <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                            <span class="fw-bold">$15.00</span>
                            <div class="text-decoration-line-through text-muted small">$20.00</div>
                        </div>
                    </div>
                </li>
                <!-- list group -->
                <li class="list-group-item py-3 ps-0 border-bottom">
                    <!-- row -->
                    <div class="row align-items-center">
                        <div class="col-6 col-md-6 col-lg-7">
                            <div class="d-flex">
                                <img src="{{ asset('assets/images/products/product-img-5.jpg') }}" alt="Ecommerce" class="icon-shape icon-xxl" />
                                <div class="ms-3">
                                    <!-- title -->
                                    <a href="shop-single.html" class="text-inherit">
                                        <h6 class="mb-0">Salted Instant Popcorn</h6>
                                    </a>
                                    <span><small class="text-muted">100g</small></span>
                                    <!-- text -->
                                    <div class="mt-2 small lh-1">
                                        <a href="#!" class="text-decoration-none text-inherit">
											<span class="me-1 align-text-bottom">
												<svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="14"
                                                    height="14"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-trash-2 text-success"
                                                >
													<polyline points="3 6 5 6 21 6"></polyline>
													<path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
													<line x1="10" y1="11" x2="10" y2="17"></line>
													<line x1="14" y1="11" x2="14" y2="17"></line>
												</svg>
											</span>
                                            <span class="text-muted">Remove</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- input group -->
                        <div class="col-4 col-md-3 col-lg-3">
                            <!-- input -->
                            <!-- input -->
                            <div class="input-group input-spinner">
                                <input type="button" value="-" class="button-minus btn btn-sm" data-field="quantity" />
                                <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input" />
                                <input type="button" value="+" class="button-plus btn btn-sm" data-field="quantity" />
                            </div>
                        </div>
                        <!-- price -->
                        <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                            <span class="fw-bold">$15.00</span>
                            <div class="text-decoration-line-through text-muted small">$25.00</div>
                        </div>
                    </div>
                </li>  --}}
            </ul>
            <!-- btn -->
            <div class=""> Total: {{$total}} FCFA</div>

            <div class="d-flex justify-content-between mt-8">
                <a href="#!" class="btn btn-primary"data-bs-dismiss="offcanvas" aria-label="Close" >Continuer l'achat</a>
                <a href="{{url('checkout')}}" class="btn btn-dark">Details panier</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="locationModal" tabindex="-1" aria-labelledby="locationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-6">
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <h5 class="mb-1" id="locationModalLabel">Choose your Delivery Location</h5>
                        <p class="mb-0 small">Enter your address and we will specify the offer you area.</p>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="my-5">
                    <input type="search" class="form-control" placeholder="Search your area" />
                </div>
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h6 class="mb-0">Select Location</h6>
                    <a href="#" class="btn btn-outline-gray-400 text-muted btn-sm">Clear All</a>
                </div>
                <div>
                    <div data-simplebar style="height: 300px">
                        <div class="list-group list-group-flush">
                            <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action active">
                                <span>Alabama</span>
                                <span>Min:$20</span>
                            </a>
                            <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                                <span>Alaska</span>
                                <span>Min:$30</span>
                            </a>
                            <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                                <span>Arizona</span>
                                <span>Min:$50</span>
                            </a>
                            <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                                <span>California</span>
                                <span>Min:$29</span>
                            </a>
                            <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                                <span>Colorado</span>
                                <span>Min:$80</span>
                            </a>
                            <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                                <span>Florida</span>
                                <span>Min:$90</span>
                            </a>
                            <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                                <span>Arizona</span>
                                <span>Min:$50</span>
                            </a>
                            <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                                <span>California</span>
                                <span>Min:$29</span>
                            </a>
                            <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                                <span>Colorado</span>
                                <span>Min:$80</span>
                            </a>
                            <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                                <span>Florida</span>
                                <span>Min:$90</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('assets/js/vendors/validation.js') }}"></script>

