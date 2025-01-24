
@php
use Carbon\Carbon;
@endphp
@extends('layouts.details_article_layout')

@section('detail article content')
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

                    </div>
                </div>
            </div>
        </div>
        <!-- section -->
        <section class="mb-lg-14 mb-1 mt-1">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-12">
                        <!-- card -->
                        <div class="card py-1 border-0 mb-1">
                            <div>
                                <h1 class="fw-bold">Commande</h1>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-8 col-md-7">
                        <div class="py-3">
                            <!-- alert -->
                            {{--  <div class="alert alert-danger p-2" role="alert">

                                <a href="#!" class="alert-link">checkout now!</a>
                            </div>  --}}
                            {{--  <ul class="list-group list-group-flush">
                                <!-- list group -->
                                <li class="list-group-item py-3 ps-0 border-top">
                                    <!-- row -->
                                    <div class="row align-items-center">
                                        <div class="col-6 col-md-6 col-lg-7">
                                            <div class="d-flex">
                                                <img src="../assets/images/products/product-img-1.jpg" alt="Ecommerce" class="icon-shape icon-xxl" />
                                                <div class="ms-3">
                                                    <!-- title -->
                                                    <a href="shop-single.html" class="text-inherit">
                                                        <h6 class="mb-0">Haldiram's Sev Bhujia</h6>
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
                                        <div class="col-4 col-md-4 col-lg-3">
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
                                                <img src="../assets/images/products/product-img-2.jpg" alt="Ecommerce" class="icon-shape icon-xxl" />
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
                                        <div class="col-4 col-md-4 col-lg-3">
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
                                </li>
                                <!-- list group -->
                                <li class="list-group-item py-3 ps-0">
                                    <!-- row -->
                                    <div class="row align-items-center">
                                        <div class="col-6 col-md-6 col-lg-7">
                                            <div class="d-flex">
                                                <img src="../assets/images/products/product-img-3.jpg" alt="Ecommerce" class="icon-shape icon-xxl" />
                                                <div class="ms-3">
                                                    <!-- title -->
                                                    <a href="shop-single.html" class="text-inherit">
                                                        <h6 class="mb-0">Cadbury 5 Star Chocolate</h6>
                                                    </a>
                                                    <span><small class="text-muted">1 kg</small></span>
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
                                        <div class="col-4 col-md-4 col-lg-3">
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
                                <li class="list-group-item py-3 ps-0">
                                    <!-- row -->
                                    <div class="row align-items-center">
                                        <div class="col-6 col-md-6 col-lg-7">
                                            <div class="d-flex">
                                                <img src="../assets/images/products/product-img-4.jpg" alt="Ecommerce" class="icon-shape icon-xxl" />
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
                                        <div class="col-4 col-md-4 col-lg-3">
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
                                                <img src="../assets/images/products/product-img-5.jpg" alt="Ecommerce" class="icon-shape icon-xxl" />
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
                                        <div class="col-4 col-md-4 col-lg-3">
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
                                </li>
                            </ul>  --}}

							<div class="col-md-11 offset-xl-1">
								<div class="mt-4 mt-lg-0">
									<div class="card shadow-sm">
                                        @php
                                        $total=0;
                                    @endphp
										<h5 class="px-6 py-4 bg-transparent mb-0"> Détails Commande</h5>
										<ul class="list-group list-group-flush">
											<!-- list group item -->

											@foreach($cartitems as $value)
                                            <li class="list-group-item px-4 py-3 mb-3">
												<div class="row align-items-center">
													<div class="col-2 col-md-2">
														<img src="{{asset('../assets/uploads/articles_images/'.$value->article->image_path)}}" alt="Ecommerce" class="img-fluid" />
													</div>
													<div class="col-5 col-md-5">
														<h6 class="mb-0">{{$value->article->nomArticle}}</h6>
														<span><small class="text-muted"></small></span>
													</div>
													<div class="col-2 col-md-2 text-center text-muted">
														<span>{{$value->quantite}}</span>
													</div>
													<div class="col-3 text-lg-end text-start text-md-end col-md-3">
														<span class="fw-bold">{{ $value->montant}} FCFA</span>
													</div>
                                                    @php
                                                    $total += $value->montant*$value->quantite;
                                                   @endphp
												</div>
											</li>
                                            @endforeach
											{{--  <!-- list group item -->
											<li class="list-group-item px-4 py-3">
												<div class="row align-items-center">
													<div class="col-2 col-md-2">
														<img src="../assets/images/products/product-img-2.jpg" alt="Ecommerce" class="img-fluid" />
													</div>
													<div class="col-5 col-md-5">
														<h6 class="mb-0">NutriChoice Digestive</h6>
														<span><small class="text-muted">250g</small></span>
													</div>
													<div class="col-2 col-md-2 text-center text-muted">
														<span>1</span>
													</div>
													<div class="col-3 text-lg-end text-start text-md-end col-md-3">
														<span class="fw-bold">$20.00</span>
														<div class="text-decoration-line-through text-muted small">$26.00</div>
													</div>
												</div>
											</li>
											<!-- list group item -->
											<li class="list-group-item px-4 py-3">
												<div class="row align-items-center">
													<div class="col-2 col-md-2">
														<img src="../assets/images/products/product-img-3.jpg" alt="Ecommerce" class="img-fluid" />
													</div>
													<div class="col-5 col-md-5">
														<h6 class="mb-0">Cadbury 5 Star Chocolate</h6>
														<span><small class="text-muted">1 kg</small></span>
													</div>
													<div class="col-2 col-md-2 text-center text-muted">
														<span>1</span>
													</div>
													<div class="col-3 text-lg-end text-start text-md-end col-md-3">
														<span class="fw-bold">$15.00</span>
														<div class="text-decoration-line-through text-muted small">$20.00</div>
													</div>
												</div>
											</li>
											<!-- list group item -->
											<li class="list-group-item px-4 py-3">
												<div class="row align-items-center">
													<div class="col-2 col-md-2">
														<img src="../assets/images/products/product-img-4.jpg" alt="Ecommerce" class="img-fluid" />
													</div>
													<div class="col-5 col-md-5">
														<h6 class="mb-0">Onion Flavour Potato</h6>
														<span><small class="text-muted">250g</small></span>
													</div>
													<div class="col-2 col-md-2 text-center text-muted">
														<span>1</span>
													</div>
													<div class="col-3 text-lg-end text-start text-md-end col-md-3">
														<span class="fw-bold">$15.00</span>
														<div class="text-decoration-line-through text-muted small">$20.00</div>
													</div>
												</div>
											</li>

											<!-- list group item -->
											<li class="list-group-item px-4 py-3">
												<div class="d-flex align-items-center justify-content-between mb-2">
													<div>Item Subtotal</div>
													<div class="fw-bold">$70.00</div>
												</div>
												<div class="d-flex align-items-center justify-content-between">
													<div>
														Service Fee
														<i class="feather-icon icon-info text-muted" data-bs-toggle="tooltip" title="Default tooltip"></i>
													</div>
													<div class="fw-bold">$3.00</div>
												</div>
											</li>  --}}
											<!-- list group item -->
                                            <li class="list-group-item px-4 py-3">
												<div class="d-flex align-items-center justify-content-between fw-bold">
													<div>Total</div>
													<div id="totalDisplay">{{$total}} FCFA</div>

												</div>
											</li>
                                            @php

                                            $totals = session('total', 0);


                                                 @endphp

											@if ($totals)
                                            <li class="list-group-item px-4 py-3">
												<div class="d-flex align-items-center justify-content-between fw-bold">
													<div>Total après retrait bonus</div>
													<div id="totalDisplay">{{$totals}} FCFA</div>

												</div>
											</li>

                                            @endif
										</ul>
									</div>
								</div>
							</div>



                        </div>
                    </div>

                    <!-- sidebar -->
                    <div class="col-12 col-lg-4 col-md-5">
                        <!-- card -->
                        <div class="mb-5 card mt-6">
                            <div class="card-body p-6">
                                <!-- heading -->
                                  <h2 class="h5 mb-4">Autre information</h2>
                                {{--  <div class="card mb-2">
                                    <!-- list group -->
                                    <ul class="list-group list-group-flush">
                                        <!-- list group item -->
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                            <div class="me-auto">
                                                <div>Item Subtotal</div>
                                            </div>
                                            <span>$70.00</span>
                                        </li>

                                        <!-- list group item -->
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                            <div class="me-auto">
                                                <div>Service Fee</div>
                                            </div>
                                            <span>$3.00</span>
                                        </li>
                                        <!-- list group item -->
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                            <div class="me-auto">
                                                <div class="fw-bold">Subtotal</div>
                                            </div>
                                            <span class="fw-bold">$67.00</span>
                                        </li>
                                    </ul>
                                </div>  --}}
                                {{--  <div class="d-grid mb-1 mt-4">
                                    <!-- btn -->
                                    <button class="btn btn-primary btn-lg d-flex justify-content-between align-items-center" type="submit">
                                        Go to Checkout
                                        <span class="fw-bold">$67.00</span>
                                    </button>
                                </div>  --}}
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
                                <div class="mt-8 product_data">
                                    <h2 class="h5 mb-3"></h2>
                                    <form action="{{ url('placer-commande') }}" method="post" enctype="multipart/form-data" id="orderForm" >
                                        @csrf
                                        <div class="mb-2">
                                            <!-- input -->

                                            <input type="hidden" class="transaction" name="transaction_id" value="{{ request()->input('transaction_id') }}">
                                            <label for="giftcard" class="form-label sr-only">Adresse de livraison(*)</label>
                                            <input type="text" name="adresse" class="form-control adresse" id="giftcard" placeholder="Adresse"  required />
                                        </div>
                                        <div class="mb-2">
                                            <!-- input -->
                                            <label for="giftcard" class="form-label sr-only">Téléphone(*)</label>
                                            <input type="number" name="phone" class="form-control phone" id="giftcard" placeholder="Téléphone" required />
                                        </div>
                                        {{-- {{$totalMontant }}<br>
                                        {{ $bonus->bonus }}<br>
                                        {{ $latestCommande->created_at }}<br>
                                        {{ Carbon::now()->subDays(30) }} --}}
                                        {{-- @if ($totalMontant>=5000 && $bonus->bonus>=5000 && $latestCommande->created_at < Carbon::now()->subDays(30))
                                        {{ $bonus->bonus }}
                                        @endif --}}



                                        {{--  <kkiapay-widget amount="{{$total}}"
                                        key="2dad4950979311ebb611b7e676b55ada"
                                        position="center"
                                        sandbox="true"
                                        data=""
                                        callback="{{url('checkout')}}">
                                    </kkiapay-widget>  --}}
                                        <!-- btn -->
                                        {{--  <div class="d-grid mt-3"><button type="submit" class="btn btn-outline-success mb-1">Commander</button></div>  --}}
                                        {{--  <p class="text-muted mb-0"><small>Terms & Conditions apply</small></p>  --}}

                                        {{--  <button class=" btn btn-primary" onclick="paymentCallback()">Payer</button>  --}}

                                        <div class="d-grid mt-3">
                                        <button type="submit" class=" btn btn-outline-success align-items-center">Commander</button>
                                        </div>
                                    </form>
                                    {{-- {{ Carbon::now()}}<br>
                                    {{ Carbon::now()->subDays(30) }}<br>
                                    {{ $latestCommande->created_at }}<br> --}}

                                    @if  ($total >= 5000 && $totalMontant >= 5000 && $bonus !== null && $bonus->bonus >= 5000 && $latestCommande->created_at > Carbon::now()->subDays(30))
                                    {{-- vous avez un bonus de
                                    <h6>{{ $bonus->bonus }} FCFA</h6>
                                     utilisable pour cette commande --}}

                                     {{-- <button class="btn btn-primary" id="bonusButton" data-total="{{ $total }}" data-bonus="{{ $bonus->bonus }}">Bonus</button> --}}

                                     <form  id="update-total-form" action="{{ url('update-total') }}" method="POST">
                                        @csrf


                                            <input type="hidden"  name="totalNew" value="{{ $total }}" >

                                            <input type="hidden" name="bonus" value="{{ $bonus->bonus }}">


                                        {{-- <button class="btn btn-primary"  type="submit">bonus</button> --}}
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="useBonus" name="useBonus"  {{ session('total') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="useBonus">Utiliser le bonus</label>
                                        </div>
                                        
                                    </form>





                                    <input type="hidden" name="bonus" value="{{ $bonus->bonus }}">
                                @endif
                                    <div class="d-grid mt-3">
                                    {{--  <button class="kkiapay-button btn btn-outline-success align-items-center">Commander</button>  --}}
                                    {{--  <button type="submit" class=" btn btn-outline-success align-items-center">Commander</button>  --}}
                                </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script><script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
<script>
    $(document).ready(function () {
        loadcart();

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
                        //window.location.reload();
                        setTimeout(function() {
                            window.location.reload();
                        }, 2000);
                       loadcart();
                       // $('.cartitems').load(location.href +" .cartitems");
                        swal("",response.status,"success")
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
                       //$('.cartitems').load(location.href +" .cartitems");
                    }

                });



        });

         {{--  function commandes (e,transaction) {
            e.preventDefault();


                    var adresses= $(this).closest('.product_data').find('.adresse').val();
                    var phones= $(this).closest('.product_data').find('.phone').val();



                    $.ajaxSetup({
                        headers:{
                            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        method:"Post",
                        url:"/placer-commande",
                        data:{
                            'transaction_id':transaction,
                            'adresse':adresses,
                            'phone':phones,

                        },
                        success:function(response){
                            //window.location.reload();

                           //loadcart();
                           // $('.cartitems').load(location.href +" .cartitems");
                            swal("",response.status,"success")
                        }

                    });






        };  --}}




    });


</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    var checkbox = document.getElementById('useBonus');
    var form = document.getElementById('update-total-form');

    checkbox.addEventListener('change', function() {
        form.submit();
    });

});

</script>
<script>
    $(document).ready(function() {
      $('#bonusButton').click(function() {
        // Récupère les valeurs des attributs data
        var total = parseFloat($(this).data('total'));
        var bonus = parseFloat($(this).data('bonus'));

        // Calcule le nouveau total
        var totalNew = total - bonus;
        $('#totalDisplay').text('Nouveau total: ' + totalNew);
        // Fais quelque chose avec le nouveau total, par exemple, l'afficher dans la console
        console.log('Nouveau total:', totalNew);
        this.disabled = true;
        $.ajaxSetup({
                        headers:{
                            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                        }
                    });
        $.ajax({
        url: '/update-total',  // Remplace ceci par l'URL de ton endpoint
        type: 'POST',
        data: {
          total_new: totalNew,
          _token: '{{ csrf_token() }}'  // CSRF token pour la sécurité si tu utilises Laravel
        },
        success: function(response) {
          // Traite la réponse du serveur si nécessaire
          console.log('Total mis à jour avec succès', response);

        },
        error: function(xhr, status, error) {
          // Gère les erreurs de la requête
          console.error('Erreur lors de la mise à jour du total', status, error);
        }
      });

      });
    });
  </script>
{{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('bonusButton').addEventListener('click', function() {
            console.log('testttt');
            // Obtenez les valeurs des attributs de données
            let total = parseFloat(this.getAttribute('data-total'));
            let bonus = parseFloat(this.getAttribute('data-bonus'));
            console.log(total);
            console.log(bonus);

            // Soustraire le bonus du total
            total -= bonus;

            // Afficher le nouveau total (ou faire autre chose avec cette valeur)
            document.getElementById('totalDisplay').textContent = 'Total: ' + total + ' FCFA';

            // Mettre à jour l'attribut de données pour refléter le nouveau total
            this.setAttribute('data-total', total);

            totalNew = total;

            console.log('Total mis à jour:', total);
            console.log('totalNew:', totalNew);

            console.log(total)
            this.disabled = true;
        });
    });
    </script> --}}

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


  <script
   amount="{{ $totals ? $totals : $total }}"
    callback=""
    data=""
    position="center"
    theme="#0095ff"
    sandbox="true"
    key="2dad4950979311ebb611b7e676b55ada"
    src="https://cdn.kkiapay.me/k.js"
    >

</script>
<script>


    console.log('test')
    addSuccessListener(response => {
        console.log('test');
        console.log(response);
        console.log(response.transactionId);
        transactionId = response.transactionId;
        commandes(transactionId);

    });

   function commandes (transaction) {



                    var adresses = $('input[name="adresse"]').val();
                    var phones = $('input[name="phone"]').val();
                    var bonuse = $('input[name="bonus"]').val();
                   // alert(adresses)
                   // alert(bonuse)


                    $.ajaxSetup({
                        headers:{
                            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        method:"Post",
                        url:"/placer-commande",
                        data:{
                            'transaction_id':transaction,
                            'adresse':adresses,
                            'phone':phones,
                            'bonus':bonuse,

                        },
                        success:function(response){
                            //window.location.reload();
                            setTimeout(function() {
                                window.location.href = "{{ url('dashboard') }}" ;
                            }, 9000);

                           //loads();
                           // $('.cartitems').load(location.href +" .cartitems");
                            swal(response.status,"","success")
                        }

                    });






        };

   addFailedListener(error => {
        console.log(error);
    });
</script>


