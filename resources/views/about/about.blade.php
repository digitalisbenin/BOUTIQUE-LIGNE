@extends('layouts.about_layout')

@section('about content')
    <!-- navbar-->
    {{--  @include('partial.navbar2')  --}}
    @include('partial.navbar')
    <main style="background-color: #ededed;">
        <!-- section -->
        <section class=" mt-8 ">
            <!-- container -->
            <div class="container-fluid ">
                <!-- row -->
                <div class="row">
                    <!-- col -->
                    <div class=" col-lg-12 col-12 mt-8">
                        <div class="row align-items-center mt-8 mb-14">

                            <!-- col -->
                            <div class="col-md-4">
                                <div>
                                    <!-- img -->
                                    <img src="{{ asset('assets/images/about/abouts-img.jpg') }}" alt="" class="img-fluid rounded" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <!-- text -->
                                <div class="ms-xxl-1 me-xxl-1 mb-8  text-md-start">
                                    <h2 class="mb-6"> A propos de  "DIGIT-SHOPPING"</h2>
                                    <p class="mb-0 lead">DIGIT-SHOPPING est une boutique en ligne qui a pour objectif de simplifier l'achat et la livraison des produits alimentaires à un coût abordable et de manière efficace au utilisateur

                                       .</p>

                                       <p class="mb-0 lead">
                                        Les utilisateurs peuvent créer un compte, ajouter les articles de leur choix au panier et au favoris, passer leur commande, suivre la commandes et voir les détails de la commande.
                                       </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <!-- text -->
                                <div class="ms-xxl-1 me-xxl-1 mb-8  text-md-start">
                                    <h2 class="mb-6">Vos avis sur nos services</h2>

                                      <form action="{{ url('temoignages') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-5">
                                            <!-- input -->
                                            {{--  <label for="giftcard" class="form-label sr-only">Adresse de livraison</label>  --}}
                                            <input type="text" name="nom" class="form-control form-control-lg" id="giftcard" placeholder="nom"  required />
                                        </div>
                                        <div class="mb-2">
                                            <!-- input -->
                                            {{--  <label for="giftcard" class="form-label sr-only">Téléphone</label>  --}}

                                            <textarea class="form-control form-control-lg" name="message" id="exampleFormControlTextarea1" placeholder="message" rows="5" required></textarea>
                                        </div>

                                        <!-- btn -->
                                        <div class="float-end"><button type="submit" class="btn btn-outline-success mb-1">Envoyer</button></div>
                                        {{--  <p class="text-muted mb-0"><small>Terms & Conditions apply</small></p>  --}}

                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- row -->
                        {{--  <div class="row mb-12">
                            <div class="col-12">
                                <div class="mb-8">
                                    <!-- heading -->
                                    <h2>Ready to get started?</h2>
                                </div>
                            </div>  --}}
                            {{--  <div class="col-md-4">
                                <!-- card -->
                                <div class="card bg-light mb-6 border-0">
                                    <!-- card body -->
                                    <div class="card-body p-8">
                                        <div class="mb-4">
                                            <!-- img -->
                                            <img src="https://freshcart.codescandy.com/assets/images/about/about-icons-1.svg" alt="" />
                                        </div>
                                        <h4>Grow my business with Freshcart</h4>
                                        <p>Duis placerat, urna ut dictum lobortis, erat libero feugiat nulla, ullamcorper fermentum lectus dolor ut tortor.</p>
                                        <!-- btn -->
                                        <a href="#" class="btn btn-dark mt-2">FreshCart Platform</a>
                                    </div>
                                </div>
                            </div>  --}}
                            {{--  <div class="col-md-4">
                                <!-- card -->
                                <div class="card bg-light mb-6 border-0">
                                    <!-- card body -->
                                    <div class="card-body p-8">
                                        <div class="mb-4">
                                            <!-- img -->
                                            <img src="https://freshcart.codescandy.com/assets/images/about/about-icons-2.svg" alt="" />
                                        </div>
                                        <h4>Advertise my brand on Freshcart</h4>
                                        <p>Duis placerat, urna ut dictum lobortis, erat libero feugiat nulla, ullamcorper fermentum lectus dolor ut tortor.</p>
                                        <!-- btn -->
                                        <a href="#" class="btn btn-dark mt-2">FreshCart ads</a>
                                    </div>
                                </div>
                            </div>  --}}
                            {{--  <div class="col-md-4">
                                <!-- card -->
                                <div class="card bg-light mb-6 border-0">
                                    <!-- card body -->
                                    <div class="card-body p-8">
                                        <div class="mb-4">
                                            <!-- img -->
                                            <img src="https://freshcart.codescandy.com/assets/images/about/about-icons-3.svg" alt="" />
                                        </div>
                                        <h4>Learn more about Freshcart</h4>
                                        <p>Vivamus non risus id sapien egestas tempus id sed lla mus justo metus, suscipit non hendrerit.</p>
                                        <!-- btn -->
                                        <a href="#" class="btn btn-dark mt-2">Learn More</a>
                                    </div>
                                </div>
                            </div>  --}}
                            {{--  <div class="col">
                                <!-- text -->
                                <p>
                                    For assistance using Freshcart services, please visit our
                                    <a href="#">Help Center</a>
                                </p>
                            </div>  --}}
                        {{--  </div>  --}}
                    </div>
                </div>
                <div class="text-center">
                    <h1 class="mb-6">DIGITALIS</h1>
                    <p class="mb-0 lead"> Vous avez besoin de nos prestations ou formations, n'hésitez pas à nous joindre.</p>
                       <p class="mb-0 lead">Email : contact01.digitalis@gmail.com</p>
                        <p class="mb-0 lead">Téléphone : +229 97825820</p>






                </div>
            </div>
        </section>
        <!-- section -->
        {{--  <section class="bg-success py-14">
            <div class="container">
                <div class="row">
                    <!-- col -->
                    <div class="offset-lg-1 col-lg-10">
                        <div class="row">
                            <!-- col -->
                            <div class="col-xl-4 col-md-6">
                                <div class="text-white me-8 mb-12">
                                    <!-- text -->
                                    <h2 class="text-white mb-4">Trusted by retailers. Loved by customers.</h2>
                                    <p>We give everyone access to the food they love and more time to enjoy it together.</p>
                                </div>
                            </div>
                            <div class="row row-cols-2 row-cols-md-4">
                                <!-- col -->
                                <div class="col mb-4 mb-md-0">
                                    <h3 class="display-5 fw-bold text-white mb-0">500k</h3>
                                    <span class="fs-6 text-white">Shoppers</span>
                                </div>
                                <!-- col -->
                                <div class="col mb-4 mb-md-0">
                                    <h3 class="display-5 fw-bold text-white mb-0">4,500+</h3>
                                    <span class="fs-6 text-white">Cities</span>
                                </div>
                                <!-- col -->
                                <div class="col mb-4 mb-md-0">
                                    <h3 class="display-5 fw-bold text-white mb-0">40k+</h3>
                                    <span class="fs-6 text-white">Stores</span>
                                </div>
                                <!-- col -->
                                <div class="col mb-4 mb-md-0">
                                    <h3 class="display-5 fw-bold text-white mb-0">650+</h3>
                                    <span class="fs-6 text-white">Retail Brands</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>  --}}
        <!-- section -->
        {{--  <section class="mt-14">
            <!-- container -->
            <div class="container">
                <div class="row">
                    <!-- col -->
                    <div class="offset-md-1 col-md-10">
                        <div class="mb-11">
                            <!-- heading -->
                            <h2>Our Leadership</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>  --}}
        <!-- section -->
        {{--  <section class="mb-14">
            <!-- slider -->
            <div class="team-slider mx-4">
                <!-- item -->
                <div class="item">
                    <div class="bg-light rounded">
                        <!-- text -->
                        <div class="p-6">
                            <h5 class="h6 mb-0">Chris Rogers</h5>
                            <small>Vice President, Retail</small>
                        </div>
                        <!-- img -->
                        <img src="{{ asset('assets/images/about/team-1.png') }}" alt="" class="img-fluid" />
                    </div>
                </div>
                <!-- item -->
                <div class="item">
                    <div class="bg-light rounded">
                        <!-- text -->
                        <div class="p-6">
                            <h5 class="h6 mb-0">Donna J. Shelton</h5>
                            <small>Chief Financial Officer</small>
                        </div>
                        <!-- img -->
                        <img src="{{ asset('assets/images/about/team-2.png') }}" alt="" class="img-fluid" />
                    </div>
                </div>
                <!-- item -->
                <div class="item">
                    <div class="bg-light rounded">
                        <!-- text -->
                        <div class="p-6">
                            <h5 class="h6 mb-0">Daniel Leedom</h5>
                            <small>Chief Communications Officer</small>
                        </div>
                        <!-- img -->
                        <img src="{{ asset('assets/images/about/team-3.png') }}" alt="" class="img-fluid" />
                    </div>
                </div>
                <!-- item -->
                <div class="item">
                    <div class="bg-light rounded">
                        <!-- text -->
                        <div class="p-6">
                            <h5 class="h6 mb-0">Martha White</h5>
                            <small>Chief Technology Officer</small>
                        </div>
                        <!-- img -->
                        <img src="{{ asset('assets/images/about/team-4.png') }}" alt="" class="img-fluid" />
                    </div>
                </div>
                <!-- item -->
                <div class="item">
                    <div class="bg-light rounded">
                        <!-- text -->
                        <div class="p-6">
                            <h5 class="h6 mb-0">Victor Pugliese</h5>
                            <small>Chief Human Resources Officer</small>
                        </div>
                        <!-- img -->
                        <img src="{{ asset('assets/images/about/team-5.png') }}" alt="" class="img-fluid" />
                    </div>
                </div>
                <!-- item -->
                <div class="item">
                    <div class="bg-light rounded">
                        <!-- text -->
                        <div class="p-6">
                            <h5 class="h6 mb-0">Donna J. Shelton</h5>
                            <small>Chief Financial Officer</small>
                        </div>
                        <!-- img -->
                        <img src="{{ asset('assets/images/about/team-2.png') }}" alt="" class="img-fluid" />
                    </div>
                </div>
                <!-- item -->
                <div class="item">
                    <div class="bg-light rounded">
                        <div class="p-6">
                            <!-- text -->
                            <h5 class="h6 mb-0">Daniel Leedom</h5>
                            <small>Chief Communications Officer</small>
                        </div>
                        <!-- img -->
                        <img src="{{ asset('assets/images/about/team-3.png') }}" alt="" class="img-fluid" />
                    </div>
                </div>
                <!-- item -->
                <div class="item">
                    <div class="bg-light rounded">
                        <!-- text -->
                        <div class="p-6">
                            <h5 class="h6 mb-0">Martha White</h5>
                            <small>Chief Technology Officer</small>
                        </div>
                        <!-- img -->
                        <img src="{{ asset('assets/images/about/team-4.png') }}" alt="" class="img-fluid" />
                    </div>
                </div>
            </div>
        </section>  --}}
    </main>
@endsection
