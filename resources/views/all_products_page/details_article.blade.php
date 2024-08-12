@extends('layouts.details_article_layout')

@section('detail article content')
    @include('partial.navbar2')
    <main>
        <div class="mt-4">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- col -->
                    <div class="col-12">
                        <!-- breadcrumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class=""><a href="{{url('/dashboard')}}">Home</a></li>/
                                <li class=""><a href="{{ url('categorie-details/'.$articles->categorie->slug) }}">Catégorie</a></li>/

                                <li class="breadcrumb-item active" aria-current="page">Détails article</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <section class="mt-8">
            <div class="container">
                <div class="row cartitems product_data">
                    <div class="col-md-5 col-xl-6">
                        <!-- img slide -->
                        <div class="product" id="product">
                            <div
                                <!-- img -->
                                <img src="{{ asset('assets/uploads/articles_images/'.$articles->image_path) }}" alt="" class="img-thumbnail"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-xl-6">
                        <div class="ps-lg-10 mt-6 mt-md-0">
                            <!-- content -->
                            <a href="#!" class="mb-4 d-block">{{ $articles->categorie -> nomCategorie }}</a>
                            <!-- heading -->
                            <h1 class="mb-1">{{ $articles -> nomArticle }}</h1>

                            <div class="fs-4">
                                <!-- price -->
                                <span class="fw-bold text-dark">{{ $articles -> prixVenteArticle }} FCFA</span>
                            </div>
                            <!-- hr -->
                            <hr class="my-6"/>

                            <div>
                                <input type="hidden" value="{{ $articles->id }}" class="prod_id">
                                <input type="hidden" value="{{ $articles->prixVenteArticle }}" class="prix">
                                <!-- input -->
                                <div class="input-group input-spinner">
                                    <input type="button" value="-" class="button-minus btn btn-sm"
                                           data-field="quantity"/>
                                    <input type="number" step="1" max="10" value="1" name="quantity"
                                           class="quantity-field qty-input form-control-sm form-input"/>
                                    <input type="button" value="+" class="button-plus btn btn-sm"
                                           data-field="quantity"/>
                                </div>
                            </div>
                            <div class="mt-3 row justify-content-start g-2 align-items-center">
                                @if ($articles->stock > 0)
                                <div class="col-xxl-4 col-lg-4 col-md-5 col-5 d-grid">
                                    <!-- button -->
                                    <!-- btn -->

                                    <button type="button" class="btn btn-primary addToCartBtn">
                                        <i class="feather-icon  icon-shopping-bag me-2"></i>
                                        Ajouter
                                    </button>
                                </div>
                                 @endif
                                <div class="col-md-4 col-4">
                                    <!-- btn -->
                                    <a class="btn btn-light addToWishlist " href="#" data-bs-toggle="tooltip"
                                       data-bs-html="true" aria-label="Wishlist"><i class="feather-icon icon-heart"></i></a>
                                       <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="bi bi-chat"></i>
                                    </button>
                                </div>


                            </div>
                            <!-- hr -->
                            <hr class="my-6"/>
                            <div>
                                <!-- table -->
                                <table class="table table-borderless mb-0">
                                    <tbody>
                                    <tr>
                                        <td>Product Code:</td>
                                        <td>{{ $articles -> codeArticle }}</td>
                                    </tr>
                                    <tr>
                                        <td>Disponibilité:</td>
                                        @if ($articles->stock > 0)
                                            <td class="text-success">En stock</td>
                                        @else
                                            <td class="text-danger">Rupture de stock</td>
                                        @endif
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                            <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Laissé votre commentaire</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ url('/create-commentaire') }}" method="post">
        @csrf
      <div class="modal-body">

            <div>
                <input type="hidden" class="form-control" name="article_id" value="{{ $articles->id}}"/>
            </div>
            <div>
                <input type="text" class="form-control" name="commentaire"/>
            </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
        <button type="submit" class="btn btn-primary">Envoyer</button>
      </div>
    </form>
    </div>
  </div>
</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <br>
        <br>
        {{--<section class="mt-lg-14 mt-8">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav nav-pills nav-lb-tab" id="myTab" role="tablist">
                            <!-- nav item -->
                            <li class="nav-item" role="presentation">
                                <!-- btn -->
                                <button
                                    class="nav-link active"
                                    id="product-tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#product-tab-pane"
                                    type="button"
                                    role="tab"
                                    aria-controls="product-tab-pane"
                                    aria-selected="true"
                                >
                                    Product Details
                                </button>
                            </li>
                            <!-- nav item -->
                            <li class="nav-item" role="presentation">
                                <!-- btn -->
                                <button class="nav-link" id="details-tab" data-bs-toggle="tab" data-bs-target="#details-tab-pane" type="button" role="tab" aria-controls="details-tab-pane" aria-selected="false">
                                    Information
                                </button>
                            </li>
                            <!-- nav item -->
                            <li class="nav-item" role="presentation">
                                <!-- btn -->
                                <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews-tab-pane" type="button" role="tab" aria-controls="reviews-tab-pane" aria-selected="false">
                                    Reviews
                                </button>
                            </li>
                            <!-- nav item -->
                            <li class="nav-item" role="presentation">
                                <!-- btn -->
                                <button
                                    class="nav-link"
                                    id="sellerInfo-tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#sellerInfo-tab-pane"
                                    type="button"
                                    role="tab"
                                    aria-controls="sellerInfo-tab-pane"
                                    aria-selected="false"
                                    disabled
                                >
                                    Seller Info
                                </button>
                            </li>
                        </ul>
                        <!-- tab content -->
                        <div class="tab-content" id="myTabContent">
                            <!-- tab pane -->
                            <div class="tab-pane fade show active" id="product-tab-pane" role="tabpanel" aria-labelledby="product-tab" tabindex="0">
                                <div class="my-8">
                                    <div class="mb-5">
                                        <!-- text -->
                                        <h4 class="mb-1">Nutrient Value & Benefits</h4>
                                        <p class="mb-0">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisi, tellus iaculis urna bibendum in lacus, integer. Id imperdiet vitae varius sed magnis eu nisi nunc sit. Vel,
                                            varius habitant ornare ac rhoncus. Consequat risus facilisis ante ipsum netus risus adipiscing sagittis sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        </p>
                                    </div>
                                    <div class="mb-5">
                                        <h5 class="mb-1">Storage Tips</h5>
                                        <p class="mb-0">
                                            Nisi, tellus iaculis urna bibendum in lacus, integer. Id imperdiet vitae varius sed magnis eu nisi nunc sit. Vel, varius habitant ornare ac rhoncus. Consequat risus facilisis
                                            ante ipsum netus risus adipiscing sagittis sed.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        </p>
                                    </div>
                                    <!-- content -->
                                    <div class="mb-5">
                                        <h5 class="mb-1">Unit</h5>
                                        <p class="mb-0">3 units</p>
                                    </div>
                                    <div class="mb-5">
                                        <h5 class="mb-1">Seller</h5>
                                        <p class="mb-0">DMart Pvt. LTD</p>
                                    </div>
                                    <div>
                                        <h5 class="mb-1">Disclaimer</h5>
                                        <p class="mb-0">Image shown is a representation and may slightly vary from the actual product. Every effort is made to maintain accuracy of all information displayed.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- tab pane -->
                            <div class="tab-pane fade" id="details-tab-pane" role="tabpanel" aria-labelledby="details-tab" tabindex="0">
                                <div class="my-8">
                                    <div class="row">
                                        <div class="col-12">
                                            <h4 class="mb-4">Details</h4>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <table class="table table-striped">
                                                <!-- table -->
                                                <tbody>
                                                <tr>
                                                    <th>Weight</th>
                                                    <td>1000 Grams</td>
                                                </tr>
                                                <tr>
                                                    <th>Ingredient Type</th>
                                                    <td>Vegetarian</td>
                                                </tr>
                                                <tr>
                                                    <th>Brand</th>
                                                    <td>Dmart</td>
                                                </tr>
                                                <tr>
                                                    <th>Item Package Quantity</th>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <th>Form</th>
                                                    <td>Larry the Bird</td>
                                                </tr>
                                                <tr>
                                                    <th>Manufacturer</th>
                                                    <td>Dmart</td>
                                                </tr>
                                                <tr>
                                                    <th>Net Quantity</th>
                                                    <td>340.0 Gram</td>
                                                </tr>
                                                <tr>
                                                    <th>Product Dimensions</th>
                                                    <td>9.6 x 7.49 x 18.49 cm</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <table class="table table-striped">
                                                <!-- table -->
                                                <tbody>
                                                <tr>
                                                    <th>ASIN</th>
                                                    <td>SB0025UJ75W</td>
                                                </tr>
                                                <tr>
                                                    <th>Best Sellers Rank</th>
                                                    <td>#2 in Fruits</td>
                                                </tr>
                                                <tr>
                                                    <th>Date First Available</th>
                                                    <td>30 April 2022</td>
                                                </tr>
                                                <tr>
                                                    <th>Item Weight</th>
                                                    <td>500g</td>
                                                </tr>
                                                <tr>
                                                    <th>Generic Name</th>
                                                    <td>Banana Robusta</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- tab pane -->
                            <div class="tab-pane fade" id="reviews-tab-pane" role="tabpanel" aria-labelledby="reviews-tab" tabindex="0">
                                <div class="my-8">
                                    <!-- row -->
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="me-lg-12 mb-6 mb-md-0">
                                                <div class="mb-5">
                                                    <!-- title -->
                                                    <h4 class="mb-3">Customer reviews</h4>
                                                    <span>
															<!-- rating -->
															<small class="text-warning">
																<i class="bi bi-star-fill"></i>
																<i class="bi bi-star-fill"></i>
																<i class="bi bi-star-fill"></i>
																<i class="bi bi-star-fill"></i>
																<i class="bi bi-star-half"></i>
															</small>
															<span class="ms-3">4.1 out of 5</span>
															<small class="ms-3">11,130 global ratings</small>
														</span>
                                                </div>
                                                <div class="mb-8">
                                                    <!-- progress -->
                                                    <div class="d-flex align-items-center mb-2">
                                                        <div class="text-nowrap me-3 text-muted">
                                                            <span class="d-inline-block align-middle text-muted">5</span>
                                                            <i class="bi bi-star-fill ms-1 small text-warning"></i>
                                                        </div>
                                                        <div class="w-100">
                                                            <div class="progress" style="height: 6px">
                                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                        <span class="text-muted ms-3">53%</span>
                                                    </div>
                                                    <!-- progress -->
                                                    <div class="d-flex align-items-center mb-2">
                                                        <div class="text-nowrap me-3 text-muted">
                                                            <span class="d-inline-block align-middle text-muted">4</span>
                                                            <i class="bi bi-star-fill ms-1 small text-warning"></i>
                                                        </div>
                                                        <div class="w-100">
                                                            <div class="progress" style="height: 6px">
                                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="50"></div>
                                                            </div>
                                                        </div>
                                                        <span class="text-muted ms-3">22%</span>
                                                    </div>
                                                    <!-- progress -->
                                                    <div class="d-flex align-items-center mb-2">
                                                        <div class="text-nowrap me-3 text-muted">
                                                            <span class="d-inline-block align-middle text-muted">3</span>
                                                            <i class="bi bi-star-fill ms-1 small text-warning"></i>
                                                        </div>
                                                        <div class="w-100">
                                                            <div class="progress" style="height: 6px">
                                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="35"></div>
                                                            </div>
                                                        </div>
                                                        <span class="text-muted ms-3">14%</span>
                                                    </div>
                                                    <!-- progress -->
                                                    <div class="d-flex align-items-center mb-2">
                                                        <div class="text-nowrap me-3 text-muted">
                                                            <span class="d-inline-block align-middle text-muted">2</span>
                                                            <i class="bi bi-star-fill ms-1 small text-warning"></i>
                                                        </div>
                                                        <div class="w-100">
                                                            <div class="progress" style="height: 6px">
                                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="22"></div>
                                                            </div>
                                                        </div>
                                                        <span class="text-muted ms-3">5%</span>
                                                    </div>
                                                    <!-- progress -->
                                                    <div class="d-flex align-items-center mb-2">
                                                        <div class="text-nowrap me-3 text-muted">
                                                            <span class="d-inline-block align-middle text-muted">1</span>
                                                            <i class="bi bi-star-fill ms-1 small text-warning"></i>
                                                        </div>
                                                        <div class="w-100">
                                                            <div class="progress" style="height: 6px">
                                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 14%" aria-valuenow="14" aria-valuemin="0" aria-valuemax="14"></div>
                                                            </div>
                                                        </div>
                                                        <span class="text-muted ms-3">7%</span>
                                                    </div>
                                                </div>
                                                <div class="d-grid">
                                                    <h4>Review this product</h4>
                                                    <p class="mb-0">Share your thoughts with other customers.</p>
                                                    <a href="#" class="btn btn-outline-gray-400 mt-4 text-muted">Write the Review</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- col -->
                                        <div class="col-md-8">
                                            <div class="mb-10">
                                                <div class="d-flex justify-content-between align-items-center mb-8">
                                                    <div>
                                                        <!-- heading -->
                                                        <h4>Reviews</h4>
                                                    </div>
                                                    <div>
                                                        <select class="form-select">
                                                            <option selected>Top Reviews</option>
                                                            <option value="Most Recent">Most Recent</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="d-flex border-bottom pb-6 mb-6">
                                                    <!-- img -->
                                                    <!-- img -->
                                                    <img src="{{ asset('assets/images/avatar/avatar-10.jpg') }}" alt="" class="rounded-circle avatar-lg" />
                                                    <div class="ms-5">
                                                        <h6 class="mb-1">Shankar Subbaraman</h6>
                                                        <!-- select option -->
                                                        <!-- content -->
                                                        <p class="small">
                                                            <span class="text-muted">30 December 2022</span>
                                                            <span class="text-primary ms-3 fw-bold">Verified Purchase</span>
                                                        </p>
                                                        <!-- rating -->
                                                        <div class="mb-2">
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                            <span class="ms-3 text-dark fw-bold">Need to recheck the weight at delivery point</span>
                                                        </div>
                                                        <!-- text-->
                                                        <p>
                                                            Product quality is good. But, weight seemed less than 1kg. Since it is being sent in open package, there is a possibility of pilferage in between. FreshCart sends the
                                                            veggies and fruits through sealed plastic covers and Barcode on the weight etc. .
                                                        </p>
                                                        <div>
                                                            <div class="border icon-shape icon-lg border-2">
                                                                <!-- img -->
                                                                <img src="{{ asset('assets/images/products/product-img-1.jpg') }}" alt="" class="img-fluid" />
                                                            </div>
                                                            <div class="border icon-shape icon-lg border-2 ms-1">
                                                                <!-- img -->
                                                                <img src="{{ asset('assets/images/products/product-img-2.jpg') }}" alt="" class="img-fluid" />
                                                            </div>
                                                            <div class="border icon-shape icon-lg border-2 ms-1">
                                                                <!-- img -->
                                                                <img src="{{ asset('assets/images/products/product-img-3.jpg') }}" alt="" class="img-fluid" />
                                                            </div>
                                                        </div>
                                                        <!-- icon -->
                                                        <div class="d-flex justify-content-end mt-4">
                                                            <a href="#" class="text-muted">
                                                                <i class="feather-icon icon-thumbs-up me-1"></i>
                                                                Helpful
                                                            </a>
                                                            <a href="#" class="text-muted ms-4">
                                                                <i class="feather-icon icon-flag me-2"></i>
                                                                Report abuse
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex border-bottom pb-6 mb-6 pt-4">
                                                    <!-- img -->
                                                    <img src="{{ asset('assets/images/avatar/avatar-12.jpg') }}" alt="" class="rounded-circle avatar-lg" />
                                                    <div class="ms-5">
                                                        <h6 class="mb-1">Robert Thomas</h6>
                                                        <!-- content -->
                                                        <p class="small">
                                                            <span class="text-muted">29 December 2022</span>
                                                            <span class="text-primary ms-3 fw-bold">Verified Purchase</span>
                                                        </p>
                                                        <!-- rating -->
                                                        <div class="mb-2">
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                            <i class="bi bi-star text-warning"></i>
                                                            <span class="ms-3 text-dark fw-bold">Need to recheck the weight at delivery point</span>
                                                        </div>

                                                        <p>
                                                            Product quality is good. But, weight seemed less than 1kg. Since it is being sent in open package, there is a possibility of pilferage in between. FreshCart sends the
                                                            veggies and fruits through sealed plastic covers and Barcode on the weight etc. .
                                                        </p>

                                                        <!-- icon -->
                                                        <div class="d-flex justify-content-end mt-4">
                                                            <a href="#" class="text-muted">
                                                                <i class="feather-icon icon-thumbs-up me-1"></i>
                                                                Helpful
                                                            </a>
                                                            <a href="#" class="text-muted ms-4">
                                                                <i class="feather-icon icon-flag me-2"></i>
                                                                Report abuse
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex border-bottom pb-6 mb-6 pt-4">
                                                    <!-- img -->
                                                    <img src="{{ asset('assets/images/avatar/avatar-9.jpg') }}" alt="" class="rounded-circle avatar-lg" />
                                                    <div class="ms-5">
                                                        <h6 class="mb-1">Barbara Tay</h6>
                                                        <!-- content -->
                                                        <p class="small">
                                                            <span class="text-muted">28 December 2022</span>
                                                            <span class="text-danger ms-3 fw-bold">Unverified Purchase</span>
                                                        </p>
                                                        <!-- rating -->
                                                        <div class="mb-2">
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                            <i class="bi bi-star text-warning"></i>
                                                            <span class="ms-3 text-dark fw-bold">Need to recheck the weight at delivery point</span>
                                                        </div>

                                                        <p>Everytime i ordered from fresh i got greenish yellow bananas just like i wanted so go for it , its happens very rare that u get over riped ones.</p>

                                                        <!-- icon -->
                                                        <div class="d-flex justify-content-end mt-4">
                                                            <a href="#" class="text-muted">
                                                                <i class="feather-icon icon-thumbs-up me-1"></i>
                                                                Helpful
                                                            </a>
                                                            <a href="#" class="text-muted ms-4">
                                                                <i class="feather-icon icon-flag me-2"></i>
                                                                Report abuse
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex border-bottom pb-6 mb-6 pt-4">
                                                    <!-- img -->
                                                    <img src="{{ asset('assets/images/avatar/avatar-8.jpg') }}" alt="" class="rounded-circle avatar-lg" />
                                                    <div class="ms-5 flex-grow-1">
                                                        <h6 class="mb-1">Sandra Langevin</h6>
                                                        <!-- content -->
                                                        <p class="small">
                                                            <span class="text-muted">8 December 2022</span>
                                                            <span class="text-danger ms-3 fw-bold">Unverified Purchase</span>
                                                        </p>
                                                        <!-- rating -->
                                                        <div class="mb-2">
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                            <i class="bi bi-star text-warning"></i>
                                                            <span class="ms-3 text-dark fw-bold">Great product</span>
                                                        </div>

                                                        <p>Great product & package. Delivery can be expedited.</p>

                                                        <!-- icon -->
                                                        <div class="d-flex justify-content-end mt-4">
                                                            <a href="#" class="text-muted">
                                                                <i class="feather-icon icon-thumbs-up me-1"></i>
                                                                Helpful
                                                            </a>
                                                            <a href="#" class="text-muted ms-4">
                                                                <i class="feather-icon icon-flag me-2"></i>
                                                                Report abuse
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn btn-outline-gray-400 text-muted">Read More Reviews</a>
                                                </div>
                                            </div>
                                            <div>
                                                <!-- rating -->
                                                <h3 class="mb-5">Create Review</h3>
                                                <div class="border-bottom py-4 mb-4">
                                                    <h4 class="mb-3">Overall rating</h4>
                                                    <div class="rater"></div>
                                                </div>
                                                <div class="border-bottom py-4 mb-4">
                                                    <h4 class="mb-0">Rate Features</h4>
                                                    <div class="my-5">
                                                        <h5>Flavor</h5>
                                                        <div class="rater"></div>
                                                    </div>
                                                    <div class="my-5">
                                                        <h5>Value for money</h5>
                                                        <div class="rater"></div>
                                                    </div>
                                                    <div class="my-5">
                                                        <h5>Scent</h5>
                                                        <div class="rater"></div>
                                                    </div>
                                                </div>
                                                <!-- form control -->
                                                <div class="border-bottom py-4 mb-4">
                                                    <h5>Add a headline</h5>
                                                    <input type="text" class="form-control" placeholder="What’s most important to know" />
                                                </div>
                                                <div class="border-bottom py-4 mb-4">
                                                    <h5>Add a photo or video</h5>
                                                    <p>Shoppers find images and videos more helpful than text alone.</p>

                                                    <div id="my-dropzone" class="dropzone mt-4 border-dashed rounded-2 min-h-0"></div>
                                                </div>
                                                <div class="py-4 mb-4">
                                                    <!-- heading -->
                                                    <h5>Add a written review</h5>
                                                    <textarea class="form-control" rows="3" placeholder="What did you like or dislike? What did you use this product for?"></textarea>
                                                </div>
                                                <!-- button -->
                                                <div class="d-flex justify-content-end">
                                                    <a href="#" class="btn btn-primary">Submit Review</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- tab pane -->
                            <div class="tab-pane fade" id="sellerInfo-tab-pane" role="tabpanel" aria-labelledby="sellerInfo-tab" tabindex="0">...</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>--}}
    </main>
@endsection
{{--
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
                        window.location.reload();
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
                        {{--  setTimeout(function() {
                            window.location.reload();
                        }, 2000);
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
@endif  --}}
