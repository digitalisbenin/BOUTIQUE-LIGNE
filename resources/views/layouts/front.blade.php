<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from freshcart.codescandy.com/pages/index-4.html by HTTrack Website Copier/ Tue, 16 Apr 2024 11:43:50 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Codescandy" name="author">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DIGIT-SHOPPING</title>
    <link href="{{ asset('assets/libs/tiny-slider/dist/tiny-slider.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/libs/slick-carousel/slick/slick.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/libs/slick-carousel/slick/slick-theme.css') }}" rel="stylesheet"/>
    <link href="{{ asset('public/assets/css/testimonial.css') }}" rel="stylesheet"/>
    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon"
          href="{{ asset('assets/images/favicon.ico') }}">
          {{--  href="https://freshcart.codescandy.com/assets/images/favicon/favicon.ico">  --}}


    <!-- Libs CSS -->
    <link href="{{ asset('assets/libs/bootstrap-icons/font/bootstrap-icons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/feather-webfont/dist/feather-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/simplebar/dist/simplebar.min.css') }}" rel="stylesheet">


    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-M8S4MT3EYG"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag("js", new Date());

        gtag("config", "G-M8S4MT3EYG");
    </script>
    <script type="text/javascript">
        (function (c, l, a, r, i, t, y) {
            c[a] =
                c[a] ||
                function () {
                    (c[a].q = c[a].q || []).push(arguments);
                };
            t = l.createElement(r);
            t.async = 1;
            t.src = "https://www.clarity.ms/tag/" + i;
            y = l.getElementsByTagName(r)[0];
            y.parentNode.insertBefore(t, y);
        })(window, document, "clarity", "script", "kuc8w5o9nt");
    </script>

</head>

<body>

@yield('content')

<!-- Footer -->
<!-- footer -->
<footer class="footer bg-dark pb-6 pt-4 pt-md-12">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-8 col-md-12 col-lg-4">
                <a href="#">
                    <img class="cover"
                    src=
"{{asset('assets/images/logo.png')}}"
                    alt=""
                    width="300"
                    height="50">
                    {{--  <h1 class="text-white">DIGIT-SHOPPING</h1>  --}}
            </div>
            <div class="col-4 col-md-12 col-lg-12 text-end">
                <ul class="list-inline text-md-end mb-0 small">
                    <li class="list-inline-item me-2">
                        <a href="#!" class="social-links">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-facebook" viewBox="0 0 16 16">
                                <path
                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"
                                />
                            </svg>
                        </a>
                    </li>
                    <li class="list-inline-item me-2">
                        <a href="#!" class="social-links">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-twitter" viewBox="0 0 16 16">
                                <path
                                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"
                                />
                            </svg>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#!" class="social-links">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-instagram" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"
                                />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        {{--  <hr class="my-lg-8 opacity-25"/>
        <div class="row g-4">  --}}
            {{--  <div class="col-12 col-md-12 col-lg-4">
                <h6 class="mb-4 text-white">Categories</h6>
                <div class="row">
                    <div class="col-6">
                        <!-- list -->
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">Vegetables & Fruits</a></li>
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">Breakfast & instant food</a></li>
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">Bakery & Biscuits</a></li>
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">Atta, rice & dal</a></li>
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">Sauces & spreads</a></li>
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">Organic & gourmet</a></li>
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">Baby care</a></li>
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">Cleaning essentials</a></li>
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">Personal care</a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <!-- list -->
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">Dairy, bread & eggs</a></li>
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">Cold drinks & juices</a></li>
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">Tea, coffee & drinks</a></li>
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">Masala, oil & more</a></li>
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">Chicken, meat & fish</a></li>
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">Paan corner</a></li>
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">Pharma & wellness</a></li>
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">Home & office</a></li>
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">Pet care</a></li>
                        </ul>
                    </div>
                </div>
            </div>  --}}
            {{--  <div class="col-12 col-md-12 col-lg-8">
                <div class="row g-4">
                    <div class="col-6 col-sm-6 col-md-3">
                        <h6 class="mb-4 text-white">Get to know us</h6>
                        <!-- list -->
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">Company</a></li>
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">About</a></li>
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">Blog</a></li>
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">Help Center</a></li>
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">Our Value</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-sm-6 col-md-3">
                        <h6 class="mb-4 text-white">For Consumers</h6>
                        <ul class="nav flex-column">
                            <!-- list -->
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">Payments</a></li>
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">Shipping</a></li>
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">Product Returns</a></li>
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">FAQ</a></li>
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">Shop Checkout</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-sm-6 col-md-3">
                        <h6 class="mb-4 text-white">Become a Shopper</h6>
                        <ul class="nav flex-column">
                            <!-- list -->
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">Shopper Opportunities</a></li>
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">Become a Shopper</a></li>
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">Earnings</a></li>
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">Ideas & Guides</a></li>
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">New Retailers</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-sm-6 col-md-3">
                        <h6 class="mb-4 text-white">Freshcart programs</h6>
                        <ul class="nav flex-column">
                            <!-- list -->
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">Freshcart programs</a></li>
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">Gift Cards</a></li>
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">Promos & Coupons</a></li>
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">Freshcart Ads</a></li>
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">Careers</a></li>
                        </ul>
                    </div>
                </div>
            </div>  --}}
        {{--  </div>  --}}
        <hr class="mt-8 opacity-25"/>
        <div>
            <div class="row gy-4 align-items-center">
                <div class="col-md-12 text-center">
					<span class="text-lg text-white text-center">
						Copyright ©
						<span id="copyright">

							<script>
								document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()));
							</script>
						</span>
						DIGIT-SHOPPING eCommerce.Tous droit réservées. Designer Par
						<a href="#">Digitalis</a>
					</span>
                </div>
                <div class="col-lg-6 text-end mb-2 mb-lg-0">
                    {{--  <ul class="list-inline mb-0">
                        <li class="list-inline-item text-light">Payment Partners</li>
                        <li class="list-inline-item">
                            <a href="#!"><img src="https://freshcart.codescandy.com/assets/images/payment/amazonpay.svg"
                                              alt=""/></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#!"><img
                                    src="https://freshcart.codescandy.com/assets/images/payment/american-express.svg"
                                    alt=""/></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#!"><img
                                    src="https://freshcart.codescandy.com/assets/images/payment//mastercard.svg"
                                    alt=""/></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#!"><img src="https://freshcart.codescandy.com/assets/images/payment/paypal.svg"
                                              alt=""/></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#!"><img src="https://freshcart.codescandy.com/assets/images/payment/visa.svg"
                                              alt=""/></a>
                        </li>
                    </ul>  --}}
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Javascript-->
<!-- Libs JS -->
<!-- <script src="public/assets/libs/jquery/dist/jquery.min.js"></script> -->
<script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/libs/simplebar/dist/simplebar.min.js') }}"></script>

<!-- Theme JS -->
<script src="{{ asset('assets/js/theme.min.js') }}"></script>

<script src="{{ asset('assets/js/vendors/jquery.min.js') }}"></script>
<script src="{{ asset('assets/libs/slick-carousel/slick/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/vendors/slick-slider.js') }}"></script>
<script src="{{ asset('assets/libs/tiny-slider/dist/min/tiny-slider.js') }}"></script>
<script src="{{ asset('assets/js/vendors/tns-slider.js') }}"></script>
<script src="{{ asset('assets/js/vendors/zoom.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@if (Session::has('success'))
<script>

        swal( "{!!Session::get('success')!!}","", 'success', {
            button: true,
            button:"OK",
            timer: 5000,
        });



</script>
@endif
<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/custumer.js') }}"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    @if(session('status'))
        <script>
            {{--  swal("{{ session('status') }}");  --}}
            swal( "{!!Session::get('status')!!}","", 'success', {
                button: true,
                button:"OK",
                timer: 5000,
            });
        </script>
    @endif


</body>

<!-- Mirrored from freshcart.codescandy.com/pages/index-4.html by HTTrack Website Copier/3.x  Tue, 16 Apr 2024 11:44:14 GMT -->
</html>
