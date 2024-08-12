@extends('layouts.details_article_layout')

@section('detail article content')
    @include('partial.navbar2')
    <main>

        <section class="mb-lg-14 mb-2 mt-2">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-12">
                        <!-- card -->
                        <div class="card py-1 border-0 mb-2">
                            <div>
                                <h1 class="fw-bold">Mon Panier</h1>
                                <p class="mb-0"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-8 col-md-7">
                        <div class="py-3">
                            @php
                            $total=0;
                        @endphp
                            <ul class="list-group list-group-flush">
                                <!-- list group -->
                                @foreach($cartitems as $value)
                                <li class="list-group-item py-3 ps-0 border-top">

                                    <!-- row -->
                                    <div class="row align-items-center  cartitems product_data ">
                                        <div class="col-6 col-md-6 col-lg-7">
                                            <div class="d-flex">
                                                <img src="{{ asset('assets/uploads/articles_images/'.$value->article->image_path ) }}" alt="Ecommerce" class="icon-shape icon-xxl" />
                                                <div class="ms-3">
                                                    <!-- title -->
                                                    <a href="" class="text-inherit">
                                                        <input type="hidden" value="{{ $value->article->id }}" class="prod_id">
                                                        <h6 class="mb-0">{{$value->article->nomArticle}}</h6>
                                                    </a>
                                                    <span><small class="text-muted">{{$value->quantite}}</small></span>
                                                    <!-- text -->
                                                    <div class="mt-2 small lh-1">
                                                        <a href="#!" class="text-decoration-none text-inherit delete-cart-item ">
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
                                                            <span class="text-muted">Supprimer</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @php
                                        $total += $value->article->prixVenteArticle*$value->quantite;
                                       @endphp
                                        <!-- input group -->
                                        <div class="col-4 col-md-4 col-lg-3">
                                            <!-- input -->
                                            <!-- input -->
                                            <div class="input-group input-spinner">
                                                <input type="button" value="-" class="button-minus changeQuantity btn btn-sm" data-field="quantity" />
                                                <input type="number" step="1" max="10" value="{{ $value->quantite }}" name="quantity" class="quantity-field qty-input form-control-sm form-input" />
                                                <input type="button" value="+" class="button-plus changeQuantity btn btn-sm" data-field="quantity" />
                                            </div>
                                        </div>
                                        <!-- price -->
                                        <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                                            <span class="fw-bold">{{ $value->article->prixVenteArticle }} FCFA</span>
                                        </div>
                                    </div>

                                </li>
                                @endforeach
                            </ul>
                            <!-- btn -->
                            <div class="d-flex justify-content-between mt-4">
                                <a href="{{ url('accueil') }}" class="btn btn-dark">Continuer l'achat</a>
                                <a href="#!" class=""></a>
                            </div>
                        </div>
                    </div>

                    <!-- sidebar -->
                    <div class="col-12 col-lg-4 col-md-5">
                        <!-- card -->
                        <div class="mb-5 card mt-6">
                            <div class="card-body p-6">
                                <!-- heading -->
                                <h2 class="h5 mb-4">Total</h2>
                                <div class="card mb-2">
                                    <!-- list group -->
                                    <ul class="list-group list-group-flush">

                                        <!-- list group item -->
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                            <div class="me-auto">
                                                <div class="fw-bold">Total Achat</div>
                                            </div>
                                            <span class="fw-bold">{{$total}} FCFA</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="d-grid mb-1 mt-4">
                                    <!-- btn -->

                                        <a href="{{url('checkout')}}"  class="btn btn-primary btn-lg d-flex justify-content-between align-items-center" type="">
                                    Détails panier
                                        <span class="fw-bold">{{$total}} FCFA</span>

                                        </a>

                                </div>
                                <!-- text -->
                                {{--  <p>
                                    <small>
                                        By placing your order, you agree to be bound by the Freshcart
                                        <a href="#!">Terms of Service</a>
                                        and
                                        <a href="#!">Privacy Policy.</a>
                                    </small>
                                </p>  --}}

                                <!-- heading -->
                                {{--  <div class="mt-8">
                                    <h2 class="h5 mb-3">Add Promo or Gift Card</h2>
                                    <form>
                                        <div class="mb-2">
                                            <!-- input -->
                                            <label for="giftcard" class="form-label sr-only">Email address</label>
                                            <input type="text" class="form-control" id="giftcard" placeholder="Promo or Gift Card" />
                                        </div>
                                        <!-- btn -->
                                        <div class="d-grid"><button type="submit" class="btn btn-outline-dark mb-1">Redeem</button></div>
                                        <p class="text-muted mb-0"><small>Terms & Conditions apply</small></p>
                                    </form>
                                </div>  --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
