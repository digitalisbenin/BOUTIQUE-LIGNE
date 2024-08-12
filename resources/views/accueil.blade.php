@extends('layouts.front')

@section('content')


    @include('partial.navbar')


    <main>
        <!-- section -->
        <section class=""
                 style="background: url({{ asset('assets/images/banner/banner-2.jpg') }}) no-repeat center; height:400px;">
            {{--  <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-7">
                        <div class="card border-0 shadow">

                        </div>

                    </div>
                </div>
            </div>  --}}
        </section>

        <!-- section category -->
        <section class="my-lg-6 my-6">
            <div class="container">
                <div class="row align-items-center mb-6">
                    <div class="col-10">
                        <div>
                            <!-- heading    -->
                            <h3 class="align-items-center d-flex mb-0 h4">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-layers text-primary"
                                >
                                    <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                    <polyline points="2 17 12 22 22 17"></polyline>
                                    <polyline points="2 12 12 17 22 12"></polyline>
                                </svg>
                                <span class="ms-3">Achats par catégories</span>
                            </h3>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="slider-arrow slider-8-columns-arrow" id="slider-8-columns-arrows"></div>
                    </div>
                </div>
                <div class="row g-6">
                    <div class="col-12">
                        <div class="position-relative">
                            <div class="slider-8-columns" id="slider-8-columns">
                                <!-- item -->
                                @foreach($categorie as $value)
                                <div class="item">
                                    <!-- item -->
                                    <a href="{{ url('categorie-details/'.$value->slug) }}" class="text-decoration-none text-inherit">
                                        <!-- card -->
                                        <div class="card mb-3 card-lift">
                                            <div class="card-body text-center py-6 text-center">
                                                <div class="my-5">
                                                    <img width="100" height="100" src="{{ asset('assets/uploads/category_images/'.$value->image_path) }}"
                                                         alt="" class="mb-3"/>
                                                    {{--<svg width="56" height="56" fill="#3d4f58" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M39.615 1.482c-2.408.689-5.92 3.244-11.615 8.45-2.166 1.98-11.172 10.99-13.38 13.386C8.679 29.765 5.119 34.379 3.338 37.94c-1.308 2.616-1.407 3.949-.369 4.983.266.264.589.48.822.55 2.419.718 6.677-1.78 13.242-7.77 3.539-3.228 13.946-13.993 18.728-19.372 6.081-6.838 8.485-10.74 8.015-13.006-.172-.825-.85-1.597-1.659-1.885-.492-.176-1.82-.154-2.502.042M41.95 3.09c.305.268.33.329.33.823 0 .687-.174 1.258-.693 2.275-1.41 2.762-4.569 6.675-10.641 13.179C19.811 31.295 13.759 37.073 9.241 40.089c-3.039 2.029-5.195 2.564-5.46 1.354-.144-.656.72-2.735 1.964-4.725 1.147-1.835 1.162-1.851 2.853-2.9 3.103-1.926 5.079-2.913 7.362-3.677.967-.324 1.034-.36.671-.364-1.579-.016-4.415.816-6.564 1.926-.58.299-1.094.56-1.142.58-.123.05 1.938-2.486 3.252-4.003 1.047-1.208 1.136-1.285 2.134-1.856 2.704-1.546 6.071-2.998 8.501-3.664.595-.164 1.071-.306 1.058-.317-.013-.011-.524.018-1.137.063-2.117.157-4.114.668-6.119 1.566-.99.443-1.047.458-.83.218.127-.141.893-.956 1.701-1.811 1.603-1.698 1.606-1.699 4.164-3.063 3.621-1.929 6.062-2.922 9.058-3.683l.513-.13-.887.046c-1.256.065-3.035.369-4.323.74-1.132.326-2.913.989-3.609 1.344-.216.11-.411.182-.433.159-.023-.022.916-.962 2.085-2.088l2.127-2.048 1.68-.896c3.259-1.738 4.995-2.521 7.747-3.496l1.68-.594-.84.058c-1.726.121-4.457.823-6.324 1.626-.449.193-.816.341-.816.329 0-.05 2.445-2.216 3.546-3.141 3.918-3.293 6.511-4.835 8.14-4.84.57-.002.657.025.957.288m9.6 8.104c-3.248.878-8.229 4.84-17.159 13.651-10.108 9.974-16.547 17.56-19.17 22.584-.611 1.171-1.088 2.441-1.182 3.148-.137 1.034.376 2.074 1.23 2.492.475.232.572.246 1.417.201 1.455-.077 2.921-.706 5.197-2.232 4.091-2.741 8.783-7.083 17.162-15.882 8.679-9.114 11.932-12.829 14.239-16.259 1.075-1.6 1.613-2.603 1.974-3.682.263-.786.292-.973.256-1.68-.044-.881-.177-1.218-.672-1.714-.752-.751-1.972-.984-3.292-.627m1.879 1.445c1.063.444.789 1.993-.81 4.58-2.201 3.562-7.288 9.321-18.131 20.524-5.979 6.177-11.058 10.673-14.201 12.572-1.739 1.05-3.38 1.654-4.126 1.518-.359-.066-.667-.482-.667-.903-.001-.697.922-2.758 2.034-4.543.791-1.269.895-1.399 1.307-1.638.19-.111.864-.506 1.498-.88 1.963-1.156 4.975-2.407 7.34-3.05.668-.181 1.235-.351 1.26-.377.056-.057-1.169.039-2.146.167-1.751.23-3.687.806-5.625 1.674-.569.254-1.045.452-1.058.439-.041-.041 2.068-2.648 3.34-4.129l1.202-1.4 1.187-.638c2.708-1.456 5.552-2.652 7.814-3.284.974-.273 1.065-.314.7-.318-1.759-.02-4.605.637-6.649 1.535-.668.294-.877.354-.79.23.065-.093.915-1.011 1.888-2.041 1.744-1.844 1.786-1.88 2.797-2.43 3.14-1.707 7.404-3.449 9.707-3.966l.653-.146-.98.052c-1.309.07-2.657.273-3.719.561-.909.246-2.802.9-3.607 1.247-.44.189-.344.077 1.629-1.9l2.096-2.101 1.217-.647c.67-.356 1.701-.867 2.291-1.135.59-.269 1.42-.652 1.844-.852 1.079-.508 1.958-.854 3.896-1.535 1.625-.571 1.66-.588 1.073-.54-1.922.157-4.072.666-6.206 1.468l-1.12.42.7-.662c.995-.942 3.428-3.067 4.526-3.953 3.944-3.182 6.518-4.47 7.836-3.919"
                                                            fill-rule="evenodd"
                                                        />
                                                    </svg>--}}
                                                </div>
                                                <!-- text -->
                                                <p class="d-flex text-truncate  ">{{ $value -> nomCategorie }}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--<section class="my-lg-14 my-8">
            <div class="container">
                <div class="w-100 ms-4 mb-8 d-none d-lg-block">
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
                </div>
                <div class="row align-items-center mb-6">
                    <div class="col-10">
                        <div>
                            <!-- heading    -->
                            <h3 class="align-items-center d-flex mb-0 h4">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-layers text-primary"
                                >
                                    <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                    <polyline points="2 17 12 22 22 17"></polyline>
                                    <polyline points="2 12 12 17 22 12"></polyline>
                                </svg>
                                <span class="ms-3">Shop by Categories</span>
                            </h3>
                        </div>
                    </div>
                    @foreach($categorie as $value)
                        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xxl-6 g-6">
                            <!-- col -->
                            <div class="col">
                                <a href="shop-grid.html" class="text-decoration-none text-inherit">
                                    <!-- card -->
                                    <div class="card card-product">
                                        <div class="card-body text-center py-8">
                                            <!-- img -->
                                            <img src="{{ asset('assets/uploads/category_images/'.$value->image_path) }}"
                                                 alt="Grocery Ecommerce Template" class="mb-3"/>
                                            <!-- text -->
                                            <div class="text-truncate">{{ $value -> nomCategorie }}</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>--}}

        <!-- section -->
        <section class="my-lg-14 my-8">
            <div class="container">
                <!-- row -->
                <div class="row align-items-center mb-6">
                    <div class="col-lg-10 col-10">
                        <!-- heading -->
                        <h3 class="align-items-center d-flex mb-0 h4">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="feather feather-star text-primary"
                            >
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                            </svg>
                            <span class="ms-3">Articles populaire</span>
                        </h3>
                    </div>
                    <div class="col-lg-2 col-2">
                        <div class="slider-arrow" id="slider-second-arrows"></div>
                    </div>
                </div>
                <!-- slider -->
                <div class="product-slider-second" id="slider-second">
                    <!-- item -->
                    @foreach($article as $value)
                        <div class="item product_data">
                            <!-- item -->
                            <div class="card card-product mb-lg-4">
                                <div class="card-body">
                                    <!-- badge -->
                                    <div class="text-center position-relative">
                                        {{--<div class="position-absolute top-0 start-0">
                                            <span class="badge bg-danger">Sale</span>
                                        </div>--}}
                                        <!-- img -->
                                        <!-- img -->
                                        <a href="#!"><img src="{{ asset('assets/uploads/articles_images/'.$value->image_path) }}"
                                                          alt="Grocery Ecommerce Template" class="mb-3 img-fluid"/></a>
                                        <!-- action btn -->
                                        <!-- action btn -->
                                        <div class="card-product-action">
                                            {{--  <a href="#!" class="btn-action" data-bs-toggle="modal"
                                               data-bs-target="#quickViewModal">
                                                <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true"
                                                   title="Quick View"></i>
                                            </a>
                                            <a href="shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip"
                                               data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                            <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                               title="Compare"><i class="bi bi-arrow-left-right"></i></a>  --}}
                                        </div>
                                    </div>
                                    <!-- title -->
                                    <div class="text-small mb-1">
                                        <a href="#!" class="text-decoration-none text-muted"><small>{{ $value -> categorie -> nomCategorie }}</small></a>
                                    </div>
                                    <h2 class="fs-6"><a href="#!" class="text-inherit text-decoration-none">{{ $value -> nomArticle }}</a></h2>
                                    <div>
                                        <!-- rating -->
                                        {{--  <small class="text-warning">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-half"></i>
                                        </small>
                                        <span class="text-muted small">4.5(149)</span>  --}}
                                    </div>
                                    <!-- price -->
                                    <input type="hidden" value="{{ $value->id }}" class="prod_id">
                                    <input type="hidden" value="1" class="qty-input">
                                        <input type="hidden" value="{{ $value->prixVenteArticle }}" class="prix">
                                    <div class="d-flex justify-content-between align-items-center mt-3">

                                        <div>
                                            <span class="text-dark">{{ $value -> prixVenteArticle }} FCFA</span>
                                            {{--<span class="text-decoration-line-through text-muted">$24</span>--}}
                                        </div>
                                        <!-- btn -->
                                        <div>
                                            <a href="" class="btn btn-primary btn-sm addToCartBtn">
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
                                                    class="feather feather-plus"
                                                >
                                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                                </svg>
                                                Ajouter
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- item -->
                    {{--<div class="item">
                        <!-- item -->
                        <div class="card card-product mb-lg-4">
                            <div class="card-body">
                                <div class="text-center position-relative">
                                    <!-- badge -->
                                    <div class="position-absolute top-0 start-0">
                                        <span class="badge bg-success">14%</span>
                                    </div>
                                    <!-- img -->
                                    <a href="#!"><img src="{{ asset('assets/images/products/product-img-16.jpg') }}"
                                                      alt="Grocery Ecommerce Template" class="mb-3 img-fluid"/></a>
                                    <!-- action btn -->
                                    <!-- action btn -->
                                    <div class="card-product-action">
                                        <a href="#!" class="btn-action" data-bs-toggle="modal"
                                           data-bs-target="#quickViewModal">
                                            <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true"
                                               title="Quick View"></i>
                                        </a>
                                        <a href="shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip"
                                           data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                        <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                           title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                    </div>
                                </div>
                                <!-- title -->
                                <div class="text-small mb-1">
                                    <a href="#!" class="text-decoration-none text-muted"><small>Fruits & Vegetables</small></a>
                                </div>
                                <!-- title -->
                                <h2 class="fs-6"><a href="#!" class="text-inherit text-decoration-none">Golden Pineapple</a>
                                </h2>
                                <!-- rating -->
                                <div class="text-warning">
                                    <!-- rating -->
                                    <small>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                    </small>
                                    <span class="text-muted small">4.5 (25)</span>
                                </div>
                                <!-- price -->
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div><span class="text-dark">$24</span></div>
                                    <!-- btn -->
                                    <div>
                                        <a href="#!" class="btn btn-primary btn-sm">
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
                                                class="feather feather-plus"
                                            >
                                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                            </svg>
                                            Add
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="item">
                        <!-- item -->
                        <div class="card card-product mb-lg-4">
                            <div class="card-body">
                                <div class="text-center position-relative">
                                    <!-- img -->
                                    <a href="#!"><img src="{{ asset('assets/images/products/product-img-17.jpg') }}"
                                                      alt="Grocery Ecommerce Template" class="mb-3 img-fluid"/></a>
                                    <!-- action btn -->
                                    <div class="card-product-action">
                                        <a href="#!" class="btn-action" data-bs-toggle="modal"
                                           data-bs-target="#quickViewModal">
                                            <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true"
                                               title="Quick View"></i>
                                        </a>
                                        <a href="shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip"
                                           data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                        <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                           title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                    </div>
                                </div>
                                <!-- title -->
                                <div class="text-small mb-1">
                                    <a href="#!" class="text-decoration-none text-muted"><small>Fruits & Vegetables</small></a>
                                </div>
                                <h2 class="fs-6"><a href="#!" class="text-inherit text-decoration-none">Fresh Kiwi</a></h2>
                                <!-- rating -->
                                <div class="text-warning">
                                    <!-- rating -->
                                    <small>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </small>
                                    <span class="text-muted small">5 (469)</span>
                                </div>
                                <!-- rating -->
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div>
                                        <span class="text-dark">$32</span>
                                        <span class="text-decoration-line-through text-muted">$35</span>
                                    </div>
                                    <!-- btn -->
                                    <div>
                                        <a href="#!" class="btn btn-primary btn-sm">
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
                                                class="feather feather-plus"
                                            >
                                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                            </svg>
                                            Add
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="item">
                        <!-- item -->
                        <div class="card card-product mb-lg-4">
                            <div class="card-body">
                                <div class="text-center position-relative">
                                    <!-- badge -->
                                    <div class="position-absolute top-0 start-0">
                                        <span class="badge bg-danger">Hot</span>
                                    </div>
                                    <!-- img -->
                                    <a href="#!"><img src="{{ asset('assets/images/products/product-img-18.jpg') }}"
                                                      alt="Grocery Ecommerce Template" class="mb-3 img-fluid"/></a>
                                    <!-- action btn -->
                                    <div class="card-product-action">
                                        <a href="#!" class="btn-action" data-bs-toggle="modal"
                                           data-bs-target="#quickViewModal">
                                            <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true"
                                               title="Quick View"></i>
                                        </a>
                                        <a href="shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip"
                                           data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                        <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                           title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                    </div>
                                </div>
                                <!-- action btn -->
                                <div class="text-small mb-1">
                                    <a href="#!" class="text-decoration-none text-muted"><small>Fruits & Vegetables</small></a>
                                </div>
                                <h2 class="fs-6"><a href="#!" class="text-inherit text-decoration-none">Fresh Banana</a>
                                </h2>
                                <!-- rating -->
                                <div class="text-warning">
                                    <!-- rating -->
                                    <small>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                        <i class="bi bi-star"></i>
                                    </small>
                                    <span class="text-muted small">3.5 (456)</span>
                                </div>
                                <!-- price -->
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div>
                                        <span class="text-dark">$3</span>
                                        <span class="text-decoration-line-through text-muted">$5</span>
                                    </div>
                                    <!-- btn -->
                                    <div>
                                        <a href="#!" class="btn btn-primary btn-sm">
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
                                                class="feather feather-plus"
                                            >
                                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                            </svg>
                                            Add
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="item">
                        <!-- item -->
                        <div class="card card-product mb-lg-4">
                            <div class="card-body">
                                <div class="text-center position-relative">
                                    <!-- img -->
                                    <a href="#!"><img src="{{ asset('assets/images/products/product-img-19.jpg') }}"
                                                      alt="Grocery Ecommerce Template" class="mb-3 img-fluid"/></a>
                                    <!-- action btn -->
                                    <div class="card-product-action">
                                        <a href="#!" class="btn-action" data-bs-toggle="modal"
                                           data-bs-target="#quickViewModal">
                                            <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true"
                                               title="Quick View"></i>
                                        </a>
                                        <a href="shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip"
                                           data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                        <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                           title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                    </div>
                                </div>
                                <!-- title -->
                                <div class="text-small mb-1">
                                    <a href="#!" class="text-decoration-none text-muted"><small>Fruits & Vegetables</small></a>
                                </div>
                                <h2 class="fs-6"><a href="#!" class="text-inherit text-decoration-none">Beatroot</a></h2>
                                <!-- rating -->
                                <div class="text-warning">
                                    <!-- rating -->
                                    <small>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                    </small>
                                    <span class="text-muted small">4.5 (39)</span>
                                </div>
                                <!-- price -->
                                <div class="d-flex justify-content-between mt-4">
                                    <div>
                                        <span class="text-dark">$13</span>
                                        <span class="text-decoration-line-through text-muted">$18</span>
                                    </div>
                                    <!--  btn -->
                                    <div>
                                        <a href="#!" class="btn btn-primary btn-sm">
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
                                                class="feather feather-plus"
                                            >
                                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                            </svg>
                                            Add
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="item">
                        <!-- item -->
                        <div class="card card-product mb-lg-4">
                            <div class="card-body">
                                <div class="text-center position-relative">
                                    <!-- badge -->
                                    <div class="position-absolute top-0 start-0">
                                        <span class="badge bg-danger">Sale</span>
                                    </div>
                                    <!-- img -->
                                    <a href="#!"><img src="{{ asset('assets/images/products/product-img-15.jpg') }}"
                                                      alt="Grocery Ecommerce Template" class="mb-3 img-fluid"/></a>
                                    <!-- action btn -->
                                    <div class="card-product-action">
                                        <a href="#!" class="btn-action" data-bs-toggle="modal"
                                           data-bs-target="#quickViewModal">
                                            <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true"
                                               title="Quick View"></i>
                                        </a>
                                        <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                           title="Wishlist"><i class="bi bi-heart"></i></a>
                                        <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                           title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                    </div>
                                </div>
                                <!-- title -->
                                <div class="text-small mb-1">
                                    <a href="#!" class="text-decoration-none text-muted"><small>Fruits & Vegetables</small></a>
                                </div>
                                <h2 class="fs-6"><a href="#!" class="text-inherit text-decoration-none">Fresh Apple</a></h2>
                                <div>
                                    <!-- rating -->
                                    <small class="text-warning">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                    </small>
                                    <span class="text-muted small">4.5(149)</span>
                                </div>
                                <!-- price -->
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div>
                                        <span class="text-dark">$18</span>
                                        <span class="text-decoration-line-through text-muted">$24</span>
                                    </div>
                                    <!-- btn -->
                                    <div>
                                        <a href="#!" class="btn btn-primary btn-sm">
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
                                                class="feather feather-plus"
                                            >
                                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                            </svg>
                                            Add
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="item">
                        <!-- item -->
                        <div class="card card-product mb-lg-4">
                            <div class="card-body">
                                <div class="text-center position-relative">
                                    <!-- badge -->
                                    <div class="position-absolute top-0 start-0">
                                        <span class="badge bg-success">14%</span>
                                    </div>
                                    <!-- img -->
                                    <a href="#!"><img src="{{ asset('assets/images/products/product-img-16.jpg') }}"
                                                      alt="Grocery Ecommerce Template" class="mb-3 img-fluid"/></a>
                                    <!-- action btn -->
                                    <div class="card-product-action">
                                        <a href="#!" class="btn-action" data-bs-toggle="modal"
                                           data-bs-target="#quickViewModal">
                                            <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true"
                                               title="Quick View"></i>
                                        </a>
                                        <a href="shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip"
                                           data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                        <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                           title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                    </div>
                                </div>
                                <!-- title -->
                                <div class="text-small mb-1">
                                    <a href="#!" class="text-decoration-none text-muted"><small>Fruits & Vegetables</small></a>
                                </div>
                                <h2 class="fs-6"><a href="#!" class="text-inherit text-decoration-none">Golden Pineapple</a>
                                </h2>
                                <div class="text-warning">
                                    <!-- rating -->
                                    <small>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                    </small>
                                    <span class="text-muted small">4.5 (25)</span>
                                </div>
                                <!-- price -->
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div><span class="text-dark">$24</span></div>
                                    <!-- btn -->
                                    <div>
                                        <a href="#!" class="btn btn-primary btn-sm">
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
                                                class="feather feather-plus"
                                            >
                                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                            </svg>
                                            Add
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="item">
                        <!-- item -->
                        <div class="card card-product mb-lg-4">
                            <div class="card-body">
                                <div class="text-center position-relative">
                                    <!-- img -->
                                    <a href="#!"><img src="{{ asset('assets/images/products/product-img-17.jpg') }}"
                                                      alt="Grocery Ecommerce Template" class="mb-3 img-fluid"/></a>
                                    <!-- action btn -->
                                    <div class="card-product-action">
                                        <a href="#!" class="btn-action" data-bs-toggle="modal"
                                           data-bs-target="#quickViewModal">
                                            <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true"
                                               title="Quick View"></i>
                                        </a>
                                        <a href="shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip"
                                           data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                        <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                           title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                    </div>
                                </div>
                                <!-- title -->
                                <div class="text-small mb-1">
                                    <a href="#!" class="text-decoration-none text-muted"><small>Fruits & Vegetables</small></a>
                                </div>
                                <h2 class="fs-6"><a href="#!" class="text-inherit text-decoration-none">Fresh Kiwi</a></h2>
                                <!-- rating-->
                                <div class="text-warning">
                                    <!-- rating -->
                                    <small>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </small>
                                    <span class="text-muted small">5 (469)</span>
                                </div>
                                <!-- price -->
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div>
                                        <span class="text-dark">$32</span>
                                        <span class="text-decoration-line-through text-muted">$35</span>
                                    </div>
                                    <!--  btn -->
                                    <div>
                                        <a href="#!" class="btn btn-primary btn-sm">
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
                                                class="feather feather-plus"
                                            >
                                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                            </svg>
                                            Add
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="item">
                        <!-- item -->
                        <div class="card card-product mb-lg-4">
                            <div class="card-body">
                                <div class="text-center position-relative">
                                    <!-- badge -->
                                    <div class="position-absolute top-0 start-0">
                                        <span class="badge bg-danger">Hot</span>
                                    </div>
                                    <!-- img -->
                                    <a href="#!"><img src="{{ asset('assets/images/products/product-img-18.jpg') }}"
                                                      alt="Grocery Ecommerce Template" class="mb-3 img-fluid"/></a>
                                    <!-- action btn -->
                                    <div class="card-product-action">
                                        <a href="#!" class="btn-action" data-bs-toggle="modal"
                                           data-bs-target="#quickViewModal">
                                            <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true"
                                               title="Quick View"></i>
                                        </a>
                                        <a href="shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip"
                                           data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                        <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                           title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                    </div>
                                </div>
                                <!-- title -->
                                <div class="text-small mb-1">
                                    <a href="#!" class="text-decoration-none text-muted"><small>Fruits & Vegetables</small></a>
                                </div>
                                <h2 class="fs-6"><a href="#!" class="text-inherit text-decoration-none">Fresh Banana</a>
                                </h2>
                                <div class="text-warning">
                                    <!-- rating -->
                                    <small>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                        <i class="bi bi-star"></i>
                                    </small>
                                    <span class="text-muted small">3.5 (456)</span>
                                </div>
                                <!-- price -->
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div>
                                        <span class="text-dark">$3</span>
                                        <span class="text-decoration-line-through text-muted">$5</span>
                                    </div>
                                    <!-- btn -->
                                    <div>
                                        <a href="#!" class="btn btn-primary btn-sm">
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
                                                class="feather feather-plus"
                                            >
                                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                            </svg>
                                            Add
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="item">
                        <!-- item -->
                        <div class="card card-product mb-lg-4">
                            <div class="card-body">
                                <div class="text-center position-relative">
                                    <!-- img -->
                                    <a href="#!"><img src="{{ asset('assets/images/products/product-img-19.jpg') }}"
                                                      alt="Grocery Ecommerce Template" class="mb-3 img-fluid"/></a>
                                    <!-- action btn -->
                                    <div class="card-product-action">
                                        <a href="#!" class="btn-action" data-bs-toggle="modal"
                                           data-bs-target="#quickViewModal">
                                            <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true"
                                               title="Quick View"></i>
                                        </a>
                                        <a href="shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip"
                                           data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                        <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                           title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                    </div>
                                </div>
                                <!-- title -->
                                <div class="text-small mb-1">
                                    <a href="#!" class="text-decoration-none text-muted"><small>Fruits & Vegetables</small></a>
                                </div>
                                <h2 class="fs-6"><a href="#!" class="text-inherit text-decoration-none">Beatroot</a></h2>
                                <div class="text-warning">
                                    <!-- rating -->
                                    <small>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                    </small>
                                    <span class="text-muted small">4.5 (39)</span>
                                </div>
                                <!-- price -->
                                <div class="d-flex justify-content-between mt-4">
                                    <div>
                                        <span class="text-dark">$13</span>
                                        <span class="text-decoration-line-through text-muted">$18</span>
                                    </div>
                                    <!-- btn -->
                                    <div>
                                        <a href="#!" class="btn btn-primary btn-sm">
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
                                                class="feather feather-plus"
                                            >
                                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                            </svg>
                                            Add
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>--}}
                </div>
            </div>
        </section>

        <!-- section -->
        <section class="mb-lg-14 my-8">
            <div class="container">
                <!-- row -->
                <div class="row align-items-center mb-6">
                    <div class="col-lg-10 col-9">
                        <div class="d-xl-flex justify-content-between align-items-center">
                            <!-- heading -->
                            <div class="d-flex">
                                <div class="mt-1">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-shopping-bag text-primary"
                                    >
                                        <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                        <line x1="3" y1="6" x2="21" y2="6"></line>
                                        <path d="M16 10a4 4 0 0 1-8 0"></path>
                                    </svg>
                                </div>
                                <div class="ms-3">
                                    <h3 class="mb-0">Produits les plus vendus</h3>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-3">
                        <div class="slider-arrow" id="slider-third-arrows"></div>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-12">
                        <div class="product-slider-second" id="slider-third">
                            <!-- item -->
                            {{--  <div class="item">
                                <!-- card -->
                                <div class="card card-product h-100 mb-4">
                                    <div class="card-body position-relative">
                                        <!-- badge -->
                                        <div class="text-center position-relative">
                                            <div class="position-absolute top-0 start-0">
                                                  <span class="badge bg-danger">Sale</span>
                                            </div>
                                            <!-- img -->
                                            <a href="#!"><img src="{{ asset('assets/images/products/product-img-1.jpg') }}"
                                                              alt="" class="mb-3 img-fluid"/></a>
                                            <!-- action btn -->
                                            <div class="product-action-btn">
                                                  <a href="#!" class="btn-action mb-1" data-bs-toggle="modal"
                                                   data-bs-target="#quickViewModal"><i class="bi bi-eye"></i></a>
                                                <a href="shop-wishlist.html" class="btn-action mb-1"
                                                   data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i
                                                        class="bi bi-heart"></i></a>
                                                <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                                   title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                            </div>
                                        </div>
                                        <!-- title -->
                                        <h2 class="fs-6"><a href="#!" class="text-inherit text-decoration-none">Haldiram
                                                Sev Bhujia</a></h2>
                                        <div>
                                            <!-- rating -->
                                              <small class="text-warning">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-half"></i>
                                            </small>
                                            <span class="text-muted small">4.5(149)</span>
                                        </div>
                                        <!-- price -->
                                          <div class="d-flex justify-content-between align-items-center mt-3">
                                            <div>
                                                <span class="text-danger">$18</span>
                                                <span class="text-decoration-line-through text-muted">$24</span>
                                            </div>
                                            <div><span class="text-uppercase small text-primary">In Stock</span></div>
                                        </div>
                                        <div class="d-grid mt-4">
                                            <a href="#" class="btn btn-primary rounded-pill">Ajouter au panier</a>
                                        </div>
                                    </div>
                                </div>
                            </div>  --}}
                            @foreach($articlee as $value)
                            <div class="item">
                                <!-- card -->
                                <div class="card card-product h-100 mb-4">
                                    <div class="card-body position-relative">
                                        <!-- badge -->
                                        <div class="text-center position-relative">
                                            <!-- img -->
                                            <a href="#!"><img src="{{ asset('assets/uploads/articles_images/'.$value->image_path) }}"
                                                              alt="Grocery Ecommerce Template" class="mb-3 img-fluid"/></a>
                                            <!-- action btn -->

                                        </div>
                                        <!-- title -->
                                        <h2 class="fs-6"><a href="#!" class="text-inherit text-decoration-none text-normap ">{{$value->nomArticle}}
                                                 </a></h2>
                                        <div>
                                            <!-- rating -->

                                        </div>
                                        <!-- price -->
                                         <div class="d-flex justify-content-between align-items-center ">
                                            <div><span class="text-dark">{{$value->prixVenteArticle}} FCFA</span></div>
                                            {{--  <div><span class="text-uppercase small text-primary">In Stock</span></div>  --}}
                                        </div>
                                        {{--  <div class="d-grid mt-4">
                                            <a href="#" class="btn btn-primary rounded-pill">Ajouter au panier</a>
                                        </div>    --}}
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--<!-- button -->
        <div class="container mb-10">
            <div class="row">
                <div class="col-12 d-grid">
                    <a href="#!" class="btn btn-soft-warning btn-lg ls-xl text-uppercase rounded-pill">Save an extra 15% on
                        Authorship order</a>
                </div>
            </div>
        </div>--}}
        <!-- section -->
        {{--<section class="my-lg-14 my-8">
            <div class="container">
                <div class="row align-items-center mb-8">
                    <!-- store -->
                    <div class="col-md-8 col-12">
                        <div class="d-flex">
                            <div class="mt-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                     class="bi bi-shop text-primary" viewBox="0 0 16 16">
                                    <path
                                        d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"
                                    />
                                </svg>
                            </div>
                            <div class="ms-3">
                                <h3 class="mb-0">Best stores in Locations</h3>
                                <p class="mb-0">Find the best store products in your area with discount.</p>
                            </div>
                            <div></div>
                        </div>
                    </div>
                    <!-- all store -->
                    <div class="col-md-4 text-end col-12 d-none d-md-block">
                        <a href="#">
                            All stores
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="18"
                                height="18"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="feather feather-chevron-right"
                            >
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- row -->
                <div class="row row-cols-1 row-cols-lg-3 row-cols-md-3 g-4 g-lg-4">
                    <!-- col -->
                    <div class="col">
                        <!-- card -->
                        <div class="card p-6 card-product">
                            <div>
                                <!-- img -->
                                <img src="https://freshcart.codescandy.com/assets/images/stores-logo/stores-logo-1.svg"
                                     alt="" class="rounded-circle icon-shape icon-xl"/>
                            </div>
                            <div class="mt-4">
                                <!-- content -->
                                <h2 class="mb-1 h5"><a href="#!" class="text-inherit">E-Grocery Super Market</a></h2>
                                <div class="small text-muted">
                                    <span class="me-2">Organic</span>
                                    <span class="me-2">Groceries</span>
                                    <span>Butcher Shop</span>
                                </div>
                                <div class="py-3">
                                    <ul class="list-unstyled mb-0 small">
                                        <li>Delivery</li>
                                        <li>Pickup available</li>
                                    </ul>
                                </div>
                                <div>
                                    <!-- badge -->
                                    <div class="badge text-bg-light border">7.5 mi away</div>
                                    <!-- badge -->
                                    <div class="badge text-bg-light border">In-store prices</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <!-- card -->
                        <div class="card p-6 card-product">
                            <div>
                                <!-- img -->
                                <img src="https://freshcart.codescandy.com/assets/images/stores-logo/stores-logo-2.svg"
                                     alt="" class="rounded-circle icon-shape icon-xl"/>
                            </div>
                            <div class="mt-4">
                                <!-- content -->
                                <h2 class="mb-1 h5"><a href="#!" class="text-inherit">DealShare Mart</a></h2>
                                <div class="small text-muted">
                                    <span class="me-2">Alcohol</span>
                                    <span class="me-2">Groceries</span>
                                </div>
                                <div class="py-3">
                                    <ul class="list-unstyled mb-0 small">
                                        <li>Delivery</li>
                                        <li>Pickup available</li>
                                    </ul>
                                </div>
                                <div>
                                    <!-- badge -->
                                    <div class="badge text-bg-light border">7.2 mi away</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <!-- card -->
                        <div class="card p-6 card-product">
                            <div>
                                <!-- img -->
                                <img src="https://freshcart.codescandy.com/assets/images/stores-logo/stores-logo-3.svg"
                                     alt="" class="rounded-circle icon-shape icon-xl"/>
                            </div>
                            <div class="mt-4">
                                <!-- content -->
                                <h2 class="mb-1 h5"><a href="#!" class="text-inherit">DMart</a></h2>
                                <div class="small text-muted">
                                    <span class="me-2">Groceries</span>
                                    <span class="me-2">Bakery</span>
                                    <span>Deli</span>
                                </div>
                                <div class="py-3">
                                    <ul class="list-unstyled mb-0 small">
                                        <li><span class="text-primary">Delivery by 10:30pm</span></li>
                                        <li>Pickup available</li>
                                    </ul>
                                </div>
                                <div>
                                    <!-- badge -->
                                    <div class="badge text-bg-light border">9.3 mi away</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>--}}
        <!-- section -->
        {{--<section class="my-lg-14 my-8">
            <div class="container">
                <div class="row align-items-center mb-8">
                    <div class="col-md-8 col-12">
                        <!-- heading -->
                        <div class="d-flex">
                            <div class="mt-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                     class="bi bi-journal text-primary" viewBox="0 0 16 16">
                                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                                    <path
                                        d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"
                                    />
                                </svg>
                            </div>
                            <div class="ms-3">
                                <h3 class="mb-0">Our most popular recipes</h3>
                                <p class="mb-0">Check out most popular recipes of all time.</p>
                            </div>
                            <div></div>
                        </div>
                    </div>
                    <!-- button -->
                    <div class="col-md-4 text-end d-none d-md-block">
                        <a href="#" class="btn btn-primary">View all recipes</a>
                    </div>
                </div>
                <div class="row">
                    <!-- col -->
                    <div class="col-12 col-md-6 col-lg-3 mb-8">
                        <div class="mb-4">
                            <a href="#!">
                                <!-- img -->
                                <div class="img-zoom">
                                    <img src="{{ asset('assets/images/blog/blog-img-1.jpg') }}" alt="" class="img-fluid rounded w-100"/>
                                </div>
                            </a>
                        </div>
                        <!-- text -->
                        <div>
                            <h4 class="h5"><a href="#!" class="text-inherit">Spaghetti with Crispy Zucchini</a></h4>
                            <p>Praesent vestibulum magna lacinia augue mollisvel aliquet massa posuere. Duis et mauris
                                tortor.</p>
                            <div class="d-flex align-items-center lh-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"
                                     class="bi bi-clock text-dark" viewBox="0 0 16 16">
                                    <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                </svg>
                                <small class="ms-1">
                                    <span class="text-dark fw-bold">15</span>
                                    min
                                </small>
                            </div>
                        </div>
                    </div>
                    <!-- col -->
                    <div class="col-12 col-md-6 col-lg-3 mb-8">
                        <div class="mb-4">
                            <a href="#!">
                                <div class="img-zoom">
                                    <!-- img -->
                                    <img src="{{ asset('assets/images/blog/blog-img-2.jpg') }}" alt="" class="img-fluid rounded w-100"/>
                                </div>
                            </a>
                        </div>
                        <!-- text -->
                        <div>
                            <h4 class="h5"><a href="#!" class="text-inherit">Almond Butter Chocolate Chip Zucchini Bars</a>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur sit amet tincidunt ellentesque aliquet ligula in
                                ultrices congue.</p>
                            <div class="d-flex align-items-center lh-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"
                                     class="bi bi-clock text-dark" viewBox="0 0 16 16">
                                    <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                </svg>
                                <small class="ms-1">
                                    <span class="text-dark fw-bold">18</span>
                                    min
                                </small>
                            </div>
                        </div>
                    </div>
                    <!-- col -->
                    <div class="col-12 col-md-6 col-lg-3 mb-8">
                        <div class="mb-4">
                            <a href="#!">
                                <!-- img -->
                                <div class="img-zoom">
                                    <img src="{{ asset('assets/images/blog/blog-img-3.jpg') }}" alt="" class="img-fluid rounded w-100"/>
                                </div>
                            </a>
                        </div>
                        <!-- text -->
                        <div>
                            <h4 class="h5"><a href="#!" class="text-inherit">Spicy Shrimp Tacos Garlic Cilantro Lime
                                    Slaw</a></h4>
                            <p>Praesent vestibulum magna lacinia augue mollisvel aliquet massa posuere. Duis et mauris
                                tortor.</p>
                            <div class="d-flex align-items-center lh-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"
                                     class="bi bi-clock text-dark" viewBox="0 0 16 16">
                                    <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                </svg>
                                <small class="ms-1">
                                    <span class="text-dark fw-bold">20</span>
                                    min
                                </small>
                            </div>
                        </div>
                    </div>
                    <!-- col -->
                    <div class="col-12 col-md-6 col-lg-3 mb-8">
                        <div class="mb-4">
                            <a href="#!">
                                <!-- img -->
                                <div class="img-zoom">
                                    <img src="{{ asset('assets/images/blog/blog-img-4.jpg') }}" alt="" class="img-fluid rounded w-100"/>
                                </div>
                            </a>
                        </div>
                        <div>
                            <h4 class="h5"><a href="#!" class="text-inherit">Simple Homemade Tomato Soup</a></h4>
                            <p>Aliquam tempus velit augue, sodales tincidunt augue ipsum primis in faucibus orci luctus et
                                ultrices posuere cubilia</p>
                            <div class="d-flex align-items-center lh-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"
                                     class="bi bi-clock text-dark" viewBox="0 0 16 16">
                                    <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                </svg>
                                <small class="ms-1">
                                    <span class="text-dark fw-bold">9</span>
                                    min
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>--}}
        <!-- section -->
        <section class="my-lg-14 my-8">
            <div class="container">
                <div class="row align-items-center">
                    <!-- col -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="mb-6 border-end-lg p-md-4 px-xl-12 text-center">
                            <div>
                                <!-- text -->
                                <div class="mb-8">
                                    <!-- svg -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="currentColor"
                                         class="bi bi-clock text-primary" viewBox="0 0 16 16">
                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                    </svg>
                                </div>
                                <!-- text -->
                                <h3 class="fs-5 mb-3">Nombres Total de catégories</h3>
                                @if($categorie->count()>0)

                                <h3 class="fs-5 mb-3">{{$categorie->count()}}</h3>
                                @else
                                <h3 class="fs-5 mb-3">0</h3>
                                @endif
                                <p class="mb-0"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="mb-6 border-end-lg p-md-4 px-xl-12 text-center">
                            <div>
                                <div class="mb-8">
                                    <!-- svg -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="currentColor"
                                         class="bi bi-gift text-primary" viewBox="0 0 16 16">
                                        <path
                                            d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 14.5V7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zM1 4v2h6V4H1zm8 0v2h6V4H9zm5 3H9v8h4.5a.5.5 0 0 0 .5-.5V7zm-7 8V7H2v7.5a.5.5 0 0 0 .5.5H7z"
                                        />
                                    </svg>
                                </div>
                                <!-- text -->
                                <h3 class="fs-5 mb-3">Nombres Total d'Articles</h3>
                                @if( $article->count()>0)

                                <h3 class="fs-5 mb-3">{{$article->count()}}</h3>
                                @else
                                <h3 class="fs-5 mb-3">0</h3>

                                @endif
                                <p class="mb-0"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="mb-6 p-md-4 px-xl-12 text-center">
                            <div>
                                <div class="mb-8">
                                    <!-- svg -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="currentColor"
                                         class="bi bi-box-seam text-primary" viewBox="0 0 16 16">
                                        <path
                                            d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"
                                        />
                                    </svg>
                                </div>
                                <!-- text -->
                                <h3 class="fs-5 mb-3">Nombres total de Commandes</h3>
                                @if($commande->count()>0)
                                <h3 class="fs-5 mb-3">{{$commande->count()}}</h3>
                                @else
                                <h3 class="fs-5 mb-3">0</h3>
                                @endif
                                <p class="mb-0"></p>
                            </div>
                        </div>
                    </div>
                    {{--  <div class="col-12 d-md-none d-lg-block">
                        <!-- hr -->
                        <hr class="mt-8 mb-10"/>
                    </div>  --}}
                    {{--  <div class="col-lg-4 col-md-6 col-12">
                        <!-- text -->
                        <div class="mb-6 border-end-lg p-md-4 px-xl-12 text-center">
                            <div>
                                <div class="mb-8">
                                    <!-- svg -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="currentColor"
                                         class="bi bi-tablet text-primary" viewBox="0 0 16 16">
                                        <path d="M12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
                                        <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                    </svg>
                                </div>
                                <!-- text -->
                                <h3 class="fs-5 mb-3">Shop with our app</h3>
                                <p class="mb-0">
                                    Shop on the go with our app for
                                    <a href="#">tablet and mobile</a>
                                    . Get live order tracking. Get latest feature updates
                                </p>
                            </div>
                        </div>
                    </div>  --}}
                    {{--  <div class="col-lg-4 col-md-6 col-12">
                        <div class="mb-6 border-end-lg p-md-4 px-xl-12 text-center">
                            <div>
                                <div class="mb-8">
                                    <!-- svg -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="currentColor"
                                         class="bi bi-truck text-primary" viewBox="0 0 16 16">
                                        <path
                                            d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"
                                        />
                                    </svg>
                                </div>
                                <!-- text -->
                                <h3 class="fs-5 mb-3">Want your shopping today?</h3>
                                <p class="mb-0">
                                    Choose from our award winning
                                    <a href="#">Express delivery</a>
                                    or collection options.
                                </p>
                            </div>
                        </div>
                    </div>  --}}
                    {{--  <div class="col-lg-4 col-md-6 col-12">
                        <div class="mb-6 p-md-4 px-xl-12 text-center">
                            <div>
                                <div class="mb-8">
                                    <!-- svg -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="currentColor"
                                         class="bi bi-arrow-repeat text-primary" viewBox="0 0 16 16">
                                        <path
                                            d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"
                                        />
                                        <path
                                            fill-rule="evenodd"
                                            d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"
                                        />
                                    </svg>
                                </div>
                                <!-- text -->
                                <h3 class="fs-5 mb-3">Easy Returns/Refund</h3>
                                <p class="mb-0">
                                    Not satisfied with a product? Return it at the doorstep & get a refund within hours. No
                                    questions asked
                                    <a href="#">policy</a>
                                    .
                                </p>
                            </div>
                        </div>
                    </div>  --}}
                </div>
            </div>
        </section>
    
        <section style="color: #000; background-color: #FFFFFF;">
            <div class="container py-5">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-10 col-xl-8 text-center">
                        <h3 class="fw-bold mb-4">Témoignages</h3>
                        <p class="mb-4 pb-2 mb-md-5 pb-md-0">
                            Quelques témoignages de nos clients
                        </p>
                    </div>
                </div>

                <div class="row text-center">

                   

                    <div class="col-md-4 mb-4 mb-md-0">
                        <div class="card">
                            <div class="card-body py-4 mt-2">
                                 <?php if (isset($temoignage[0])): ?>
                                <div class="d-flex justify-content-center mb-4">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp"
                                         class="rounded-circle shadow-1-strong" width="100" height="100" />
                                </div>
                                <h5 class="font-weight-bold">Teresa May</h5>
                                <h6 class="font-weight-bold my-3">Founder at ET Company</h6>
                                <ul class="list-unstyled d-flex justify-content-center">
                                    <li>
                                        <i class="fas fa-star fa-sm text-info"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star fa-sm text-info"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star fa-sm text-info"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star fa-sm text-info"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star-half-alt fa-sm text-info"></i>
                                    </li>
                                </ul>
                                 
                                <p class="mb-2">
                                    <i class="fas fa-quote-left pe-2"></i><?php echo htmlspecialchars($temoignage[0]->message); ?>
                                </p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-0">
                        <div class="card">
                            <div class="card-body py-4 mt-2">
                                 <?php if (isset($temoignage[1])): ?>
                                <div class="d-flex justify-content-center mb-4">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(15).webp"
                                         class="rounded-circle shadow-1-strong" width="100" height="100" />
                                </div>
                                <h5 class="font-weight-bold">Maggie McLoan</h5>
                                <h6 class="font-weight-bold my-3">Photographer at Studio LA</h6>
                                <ul class="list-unstyled d-flex justify-content-center">
                                    <li>
                                        <i class="fas fa-star fa-sm text-info"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star fa-sm text-info"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star fa-sm text-info"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star fa-sm text-info"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star fa-sm text-info"></i>
                                    </li>
                                </ul>
                                <p class="mb-2">
                                    <i class="fas fa-quote-left pe-2"></i><?php echo htmlspecialchars($temoignage[1]->message); ?>
                                </p>
                                 <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-0">
                        <div class="card">
                            <div class="card-body py-4 mt-2">
                                 <?php if (isset($temoignage[2])): ?>
                                <div class="d-flex justify-content-center mb-4">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(17).webp"
                                         class="rounded-circle shadow-1-strong" width="100" height="100" />
                                </div>
                                <h5 class="font-weight-bold">Alexa Horwitz</h5>
                                <h6 class="font-weight-bold my-3">Front-end Developer in NY</h6>
                                <ul class="list-unstyled d-flex justify-content-center">
                                    <li>
                                        <i class="fas fa-star fa-sm text-info"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star fa-sm text-info"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star fa-sm text-info"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star fa-sm text-info"></i>
                                    </li>
                                    <li>
                                        <i class="far fa-star fa-sm text-info"></i>
                                    </li>
                                </ul>
                                <p class="mb-2">
                                    <i class="fas fa-quote-left pe-2"></i><?php echo htmlspecialchars($temoignage[2]->message); ?>
                                </p>
                                 <?php endif; ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- section -->
        {{--  <section class="py-lg-14 py-8 bg-light">
            <div class="container">
                <div class="row align-items-center mb-10">
                    <div class="col-md-8">
                        <div class="d-flex">
                            <!-- svg -->
                            <div class="mt-1">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-map-pin text-primary"
                                >
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                            </div>
                            <!-- text -->
                            <div class="ms-3">
                                <h3 class="mb-0">Areas we deliver to</h3>
                                <p class="mb-0">Find the best store products in your area with discount.</p>
                            </div>
                            <div></div>
                        </div>
                    </div>
                    <!-- btn -->
                    <div class="col-md-4 text-end d-none d-md-block">
                        <a href="#" class="btn btn-primary">View All City</a>
                    </div>
                </div>
                <!-- row -->
                <div class="row row-cols-lg-5 row-cols-md-3 row-cols-2">
                    <div class="col">
                        <div>
                            <!-- list -->
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <a href="#" class="text-reset">
                                        <i class="feather-icon icon-arrow-right me-1"></i>
                                        Adlaj
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-reset">
                                        <i class="feather-icon icon-arrow-right me-1"></i>
                                        Ambawadi
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-reset">
                                        <i class="feather-icon icon-arrow-right me-1"></i>
                                        Ambli
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-reset">
                                        <i class="feather-icon icon-arrow-right me-1"></i>
                                        Amraiwadi
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-reset">
                                        <i class="feather-icon icon-arrow-right me-1"></i>
                                        Asarwa
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-reset">
                                        <i class="feather-icon icon-arrow-right me-1"></i>
                                        Badarkha
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-reset">
                                        <i class="feather-icon icon-arrow-right me-1"></i>
                                        Bapunagar
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-reset">
                                        <i class="feather-icon icon-arrow-right me-1"></i>
                                        Barejadi
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-reset">
                                        <i class="feather-icon icon-arrow-right me-1"></i>
                                        Bhat
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- col -->
                    <div class="col">
                        <div>
                            <!-- list -->
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <a href="#" class="text-reset">
                                        <i class="feather-icon icon-arrow-right me-1"></i>
                                        Chanakyapuri
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-reset">
                                        <i class="feather-icon icon-arrow-right me-1"></i>
                                        Chandkheda
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-reset">
                                        <i class="feather-icon icon-arrow-right me-1"></i>
                                        Chandlodiya
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-reset">
                                        <i class="feather-icon icon-arrow-right me-1"></i>
                                        Changodar
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-reset">
                                        <i class="feather-icon icon-arrow-right me-1"></i>
                                        Chharodi
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-reset">
                                        <i class="feather-icon icon-arrow-right me-1"></i>
                                        Dabhoda
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-reset">
                                        <i class="feather-icon icon-arrow-right me-1"></i>
                                        Dahegam
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-reset">
                                        <i class="feather-icon icon-arrow-right me-1"></i>
                                        Dariapur
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-reset">
                                        <i class="feather-icon icon-arrow-right me-1"></i>
                                        Dholera
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- col -->
                    <div class="col">
                        <!-- list -->
                        <div>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <a href="#" class="text-reset">
                                        <i class="feather-icon icon-arrow-right me-1"></i>
                                        Ellis Bridge
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-reset">
                                        <i class="feather-icon icon-arrow-right me-1"></i>
                                        Gandhi Ashram
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-reset">
                                        <i class="feather-icon icon-arrow-right me-1"></i>
                                        Gandhinagar
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-reset">
                                        <i class="feather-icon icon-arrow-right me-1"></i>
                                        Ghatlodiya
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-reset">
                                        <i class="feather-icon icon-arrow-right me-1"></i>
                                        Ghodasar
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-reset">
                                        <i class="feather-icon icon-arrow-right me-1"></i>
                                        Ghuma
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-reset">
                                        <i class="feather-icon icon-arrow-right me-1"></i>
                                        Gift City
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-reset">
                                        <i class="feather-icon icon-arrow-right me-1"></i>
                                        Girdhar Nagar
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-reset">
                                        <i class="feather-icon icon-arrow-right me-1"></i>
                                        Gita Mandir
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- col -->
                    <div class="col">
                        <!-- list -->
                        <div>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <a href="#" class="text-reset">
                                        <i class="feather-icon icon-arrow-right me-1"></i>
                                        Gota
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-reset">
                                        <i class="feather-icon icon-arrow-right me-1"></i>
                                        Gurukul
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-reset">
                                        <i class="feather-icon icon-arrow-right me-1"></i>
                                        Hansol
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-reset">
                                        <i class="feather-icon icon-arrow-right me-1"></i>
                                        Hathijan
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-reset">
                                        <i class="feather-icon icon-arrow-right me-1"></i>
                                        Hatkeshwar
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-reset">
                                        <i class="feather-icon icon-arrow-right me-1"></i>
                                        Janta Nagar
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-reset">
                                        <i class="feather-icon icon-arrow-right me-1"></i>
                                        Jagatpur
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-reset">
                                        <i class="feather-icon icon-arrow-right me-1"></i>
                                        Janta Nagar
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-reset">
                                        <i class="feather-icon icon-arrow-right me-1"></i>
                                        Jashoda Nagar
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- col -->
                    <div class="col">
                        <!-- list -->
                        <div>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <a href="#" class="text-reset">
                                        <i class="feather-icon icon-arrow-right me-1"></i>
                                        Jetalpur
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-reset">
                                        <i class="feather-icon icon-arrow-right me-1"></i>
                                        Jivraj Park
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-reset">
                                        <i class="feather-icon icon-arrow-right me-1"></i>
                                        Juna Wadaj
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-reset">
                                        <i class="feather-icon icon-arrow-right me-1"></i>
                                        Kalapi Nagar
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-reset">
                                        <i class="feather-icon icon-arrow-right me-1"></i>
                                        Kalol
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-reset">
                                        <i class="feather-icon icon-arrow-right me-1"></i>
                                        Madhupura
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-reset">
                                        <i class="feather-icon icon-arrow-right me-1"></i>
                                        Manek Chowk
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-reset">
                                        <i class="feather-icon icon-arrow-right me-1"></i>
                                        Meghani Nagar
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-reset">
                                        <i class="feather-icon icon-arrow-right me-1"></i>
                                        Motera
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>  --}}
    </main>
    <!-- modal -->
    <!-- Modal -->
    <div class="modal fade" id="quickViewModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body p-8">
                    <div class="position-absolute top-0 end-0 me-3 mt-3">
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- img slide -->
                            <div class="product productModal" id="productModal">
                                <div
                                    class="zoom"
                                    onmousemove="zoom(event)"
                                    style="
                  background-image: url({{ asset('assets/images/products/product-single-img-1.jpg') }});
                "
                                >
                                    <!-- img -->
                                    <img
                                        src="{{ asset('assets/images/products/product-single-img-1.jpg') }}"
                                        alt=""
                                    >
                                </div>
                                <div>
                                    <div
                                        class="zoom"
                                        onmousemove="zoom(event)"
                                        style="
                    background-image: url({{ asset('assets/images/products/product-single-img-2.jpg') }});
                  "
                                    >
                                        <!-- img -->
                                        <img
                                            src="{{ asset('assets/images/products/product-single-img-2.jpg') }}"
                                            alt=""
                                        >
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class="zoom"
                                        onmousemove="zoom(event)"
                                        style="
                    background-image: url({{ asset('assets/images/products/product-single-img-3.jpg') }});
                  "
                                    >
                                        <!-- img -->
                                        <img
                                            src="{{ asset('assets/images/products/product-single-img-3.jpg') }}"
                                            alt=""
                                        >
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class="zoom"
                                        onmousemove="zoom(event)"
                                        style="
                    background-image: url({{ asset('assets/images/products/product-single-img-4.jpg') }});
                  "
                                    >
                                        <!-- img -->
                                        <img
                                            src="{{ asset('assets/images/products/product-single-img-4.jpg') }}"
                                            alt=""
                                        >
                                    </div>
                                </div>
                            </div>
                            <!-- product tools -->
                            <div class="product-tools">
                                <div class="thumbnails row g-3" id="productModalThumbnails">
                                    <div class="col-3" class="tns-nav-active">
                                        <div class="thumbnails-img">
                                            <!-- img -->
                                            <img
                                                src="{{ asset('assets/images/products/product-single-img-1.jpg') }}"
                                                alt=""
                                            >
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="thumbnails-img">
                                            <!-- img -->
                                            <img
                                                src="{{ asset('assets/images/products/product-single-img-2.jpg') }}"
                                                alt=""
                                            >
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="thumbnails-img">
                                            <!-- img -->
                                            <img
                                                src="{{ asset('assets/images/products/product-single-img-3.jpg') }}"
                                                alt=""
                                            >
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="thumbnails-img">
                                            <!-- img -->
                                            <img
                                                src="{{ asset('assets/images/products/product-single-img-4.jpg') }}"
                                                alt=""
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="ps-lg-8 mt-6 mt-lg-0">
                                <a href="#!" class="mb-4 d-block">Bakery Biscuits</a>
                                <h2 class="mb-1 h1">Napolitanke Ljesnjak</h2>
                                <div class="mb-4">
                                    <small class="text-warning">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i></small
                                    ><a href="#" class="ms-2">(30 reviews)</a>
                                </div>
                                <div class="fs-4">
                                    <span class="fw-bold text-dark">$32</span>
                                    <span class="text-decoration-line-through text-muted">$35</span
                                    ><span
                                    ><small class="fs-6 ms-2 text-danger">26% Off</small></span
                                    >
                                </div>
                                <hr class="my-6">
                                <div class="mb-4">
                                    <button type="button" class="btn btn-outline-secondary">
                                        250g
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary">
                                        500g
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary">
                                        1kg
                                    </button>
                                </div>
                                <div>
                                    <!-- input -->
                                    <!-- input -->
                                    <div class="input-group input-spinner  ">
                                        <input type="button" value="-" class="button-minus  btn  btn-sm "
                                               data-field="quantity">
                                        <input type="number" step="1" max="10" value="1" name="quantity"
                                               class="quantity-field form-control-sm form-input   ">
                                        <input type="button" value="+" class="button-plus btn btn-sm "
                                               data-field="quantity">
                                    </div>
                                </div>
                                <div
                                    class="mt-3 row justify-content-start g-2 align-items-center"
                                >

                                    <div class="col-lg-4 col-md-5 col-6 d-grid">
                                        <!-- button -->
                                        <!-- btn -->
                                        <button type="button" class="btn btn-primary">
                                            <i class="feather-icon icon-shopping-bag me-2"></i>Add to
                                            cart
                                        </button>
                                    </div>
                                    <div class="col-md-4 col-5">
                                        <!-- btn -->
                                        <a
                                            class="btn btn-light"
                                            href="#"
                                            data-bs-toggle="tooltip"
                                            data-bs-html="true"
                                            aria-label="Compare"
                                        ><i class="bi bi-arrow-left-right"></i
                                            ></a>
                                        <a
                                            class="btn btn-light"
                                            href="#!"
                                            data-bs-toggle="tooltip"
                                            data-bs-html="true"
                                            aria-label="Wishlist"
                                        ><i class="feather-icon icon-heart"></i
                                            ></a>
                                    </div>
                                </div>
                                <hr class="my-6">
                                <div>
                                    <table class="table table-borderless">
                                        <tbody>
                                        <tr>
                                            <td>Product Code:</td>
                                            <td>FBB00255</td>
                                        </tr>
                                        <tr>
                                            <td>Availability:</td>
                                            <td>In Stock</td>
                                        </tr>
                                        <tr>
                                            <td>Type:</td>
                                            <td>Fruits</td>
                                        </tr>
                                        <tr>
                                            <td>Shipping:</td>
                                            <td>
                                                <small
                                                >01 day shipping.<span class="text-muted"
                                                    >( Free pickup today)</span
                                                    ></small
                                                >
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


