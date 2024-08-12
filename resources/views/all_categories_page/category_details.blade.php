@extends('layouts.category_details_layout')

@section('categories details content')
    
    @include('partial.navbar2')

    <main>
        <!-- section-->
        <div class="mt-4">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- col -->
                    <div class="col-12">
                        <!-- breadcrumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class=""><a href="{{url('/')}}">Accueil</a></li>/
                               
                                <li class=""><a href="{{ url('categorie-details/'.$categorie->slug) }}">Categorie par articles</a></li>/
                             
                               
                                <li class="breadcrumb-item active" aria-current="page">Details catégories</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- section -->
        <div class="mt-8 mb-lg-14 mb-8">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row gx-10">
                    <!-- col -->
                    <aside class="col-lg-3 col-md-4 mb-6 mb-md-0">
                        <div class="offcanvas offcanvas-start offcanvas-collapse w-md-50" tabindex="-1"
                             id="offcanvasCategory" aria-labelledby="offcanvasCategoryLabel">
                            <div class="offcanvas-header d-lg-none">
                                <h5 class="offcanvas-title" id="offcanvasCategoryLabel">Filter</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body ps-lg-2 pt-lg-0">
                                <div class="mb-8">
                                    <!-- title -->
                                    <h5 class="mb-3">Categories</h5>
                                    <!-- nav -->
                                    <ul class="nav nav-category" id="categoryCollapseMenu">
                                        @foreach($allcategorie as $value)
                                            <li class="nav-item border-bottom w-100">
                                                <a href="{{ url('categorie-details/'.$value->slug) }}" class="nav-link collapsed"
                                                   aria-controls="categoryFlushOne">
                                                    {{ $value->nomCategorie }}
                                                    <i class="feather-icon icon-chevron-right"></i>
                                                </a>
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <section class="col-lg-9 col-md-12">
                        <!-- card -->
                        <div class="card mb-4 bg-light border-0">
                            <!-- card body -->
                            <div class="card-body p-9">
                                <h2 class="mb-0 fs-1">{{ $categorie -> nomCategorie }}</h2>
                            </div>
                        </div>
                        @if($articles->count() > 0)

                            <div class="row g-4 row-cols-xl-4 row-cols-lg-3 row-cols-2 row-cols-md-2 mt-2">
                                <!-- col -->
                                @foreach($articles as $article)
                                    <div class="col">
                                        <!-- card -->
                                        <div class="card card-product cartitems product_data">
                                            <div class="card-body">
                                                <!-- badge -->
                                                <div class="text-center position-relative">
                                                    {{--<div class="position-absolute top-0 start-0">
                                                        <span class="badge bg-danger">Sale</span>
                                                    </div>--}}
                                                    <a href="{{ url('details-article/'.$categorie->slug.'/'.$article->codeArticle) }}">
                                                        <!-- img -->
                                                        <img
                                                            src="{{ asset('assets/uploads/articles_images/'.$article->image_path) }}"
                                                            alt="articles" class="mb-3 img-fluid"/>
                                                    </a>
                                                    <!-- action btn -->
                                                    {{--<div class="card-product-action">
                                                        <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                            <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                                                        </a>
                                                        <a href="shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                                        <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                                    </div>--}}
                                                </div>
                                                <!-- heading -->
                                                <div class="text-small mb-1">
                                                    <a href="{{ url('details-article/'.$categorie->slug.'/'.$article->codeArticle) }}"
                                                       class="text-decoration-none text-muted"><small>{{ $categorie -> nomCategorie }}</small></a>
                                                </div>
                                                <h2 class="fs-6"><a href="{{ url('details-article/'.$categorie->slug.'/'.$article->codeArticle) }}"
                                                                    class="text-inherit text-decoration-none">{{ $article->nomArticle }}</a>
                                                </h2>
                                                <div>
                                                    {{--<!-- rating -->
                                                    <small class="text-warning">
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-half"></i>
                                                    </small>
                                                    <span class="text-muted small">4.5(149)</span>--}}
                                                </div>
                                                <!-- price -->
                                                <div class="d-flex justify-content-between align-items-center mt-3">
                                                    <div>
                                                        <input type="hidden" value="{{ $article->id }}" class="prod_id">
                                                        <input type="hidden" value="1" class="qty-input">
                                                        <input type="hidden" value="{{ $article->prixVenteArticle }}" class="prix">
                                                        <span
                                                        
                                                            class="text-dark">{{ $article->prixVenteArticle }} FCFA</span>
                                                        {{--<span class="text-decoration-line-through text-muted">$24</span>--}}
                                                    </div>
                                                    <!-- btn -->
                                                    <div>
                                                        <button class="btn btn-primary btn-sm addToCartBtn ">
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
                                                                class="feather feather-plus">
                                                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                                            </svg>
                                                            Ajouter
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        @else
                            <div class="justify-content-end">
                                <p class="text-center">Aucun articles n'est disponible pour cette catégorie</p>
                            </div>
                        @endif
                    <!-- row' -->

                        {{--<div class="row mt-8">
                            <div class="col">
                                <!-- nav -->
                                <nav>
                                    <ul class="pagination">
                                        <li class="page-item disabled">
                                            <a class="page-link mx-1" href="#" aria-label="Previous">
                                                <i class="feather-icon icon-chevron-left"></i>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link mx-1 active" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link mx-1" href="#">2</a></li>

                                        <li class="page-item"><a class="page-link mx-1" href="#">...</a></li>
                                        <li class="page-item"><a class="page-link mx-1" href="#">12</a></li>
                                        <li class="page-item">
                                            <a class="page-link mx-1" href="#" aria-label="Next">
                                                <i class="feather-icon icon-chevron-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>--}}
                    </section>
                </div>
            </div>
        </div>
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
@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script><script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
<script>
    $(document).ready(function () {
        loadcart();
        loadwishlist();

        $('.addToCartBtn').click( function (e) {
            e.preventDefault();

                var product_id= $(this).closest('.product_data').find('.prod_id').val();
                var product_qty= $(this).closest('.product_data').find('.qty-input').val();
                var prixe= $(this).closest('.product_data').find('.prix').val();


                $.ajaxSetup({
                    headers:{
                        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    method:"Post",
                    url:"/add-to-cart",
                    data:{
                        'article_id':product_id,
                        'quantite':product_qty,
                        'montantLigneCommande':prixe,
                    },

                    success:function(response){
                        console.log(response);
                        swal(response.status);
                        loadcart();
                        //window.location.reload();

                    }

                });

        });
        function loadcart()
        {
            $.ajax({
                method:"GET",
                url:"/load-cart-data",
                success:function(response){
                     $('.cart-count').html('');
                     $('.cart-count').html(response.count);
                    //alert(response.count)
                }

            });
        };
        $(document).on('click','.delete-cart-item', function (e) {
            e.preventDefault();

                var prod_id= $(this).closest('.product_data').find('.prod_id').val();
                
                //alert(prod_id)
                $.ajaxSetup({
                    headers:{
                        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    method:"Post",
                    url:"/delete-cart-item",
                    data:{
                        'article_id':prod_id,

                    },
                    success:function(response){
                       // window.location.reload();

                       loadcart();
                       // $('.cartitems').load(location.href +" .cartitems");
                        swal("",response.status,"success")
                        setTimeout(function() {
                            window.location.reload();
                        }, 2000);
                    }

                });



        });

        
        $(document).on('click','.changeQuantity', function (e) {
            e.preventDefault();

                var product_id= $(this).closest('.product_data').find('.prod_id').val();
                var qty= $(this).closest('.product_data').find('.qty-input').val();
               // alert(product_id)
               // alert(qty)
                data={
                    'article_id':product_id,
                    'quantite':qty,

                },

                $.ajaxSetup({
                    headers:{
                        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    method:"Post",
                    url:"/update-cart",
                    data:data,
                    success:function(response){
                        loadcart();
                        
                         swal("",response.status,"success")
                        //window.location.reload();
                          {{--  setTimeout(function() {
                            window.location.reload();
                        }, 2000);    --}}
                       //$('.cartitems').load(location.href +" .cartitems");
                    }

                });



        });
        function loadwishlist()
        {
            $.ajax({
                method:"GET",
                url:"/load-wishlist-data",
                success:function(response){
                     $('.whishlist-count').html('');
                     $('.whishlist-count').html(response.count);
                    //alert(response.count)
                }

            });
        }




        $('.addToWishlist').click( function (e) {
            e.preventDefault();

                var product_id= $(this).closest('.product_data').find('.prod_id').val();


                $.ajaxSetup({
                    headers:{
                        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    method:"Post",
                    url:"/add-to-wishlist",
                    data:{
                        'product_id':product_id,

                    },
                    success:function(response){
                        swal(response.status)
                        loadwishlist();
                    }

                });

        });

        $(document).on('click','.remove-wishlist-item', function (e) {
            e.preventDefault();

                var prod_id= $(this).closest('.product_data').find('.prod_id').val();


                $.ajaxSetup({
                    headers:{
                        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    method:"Post",
                    url:"/remove-wishlist-item",
                    data:{
                        'prod_id':prod_id,

                    },
                    success:function(response){
                       // window.location.reload();
                       loadwishlist();
                      // $('.wishlistitems').load(location.href +" .wishlistitems");
                        swal("",response.status,"success")
                    }

                });



        });

    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@if (Session::has('status'))
<script>

        swal( "{!!Session::get('status')!!}","", 'success', {
            button: true,
            button:"OK",
            timer: 5000,
        });



</script>
@endif
