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

                                        </div>

                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- section -->
       
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
                                <h5 class="font-weight-bold">Raissa</h5>
                                {{--  <h6 class="font-weight-bold my-3">Founder at ET Company</h6>  --}}
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
                                <h5 class="font-weight-bold">Laure</h5>
                                {{--  <h6 class="font-weight-bold my-3">Photographer at Studio LA</h6>  --}}
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
                                <h5 class="font-weight-bold">Esther</h5>
                                {{--  <h6 class="font-weight-bold my-3">Front-end Developer in NY</h6>  --}}
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


