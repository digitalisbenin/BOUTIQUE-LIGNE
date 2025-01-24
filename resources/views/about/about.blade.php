@extends('layouts.about_layout')

@section('about content')
    <!-- navbar-->
   
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
                        <div class="row align-items-center mt-8 mb-1">

                            <!-- col -->
                            <div class="col-md-4">
                                <div>
                                    <!-- img -->
                                    <img src="{{ asset('assets/images/about/about.jpg') }}" alt="" class="img-fluid rounded" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <!-- text -->
                                <div class="ms-xxl-1 me-xxl-1 mb-8  text-md-start">
                                    <h2 class="mb-6"> A propos de  "DI-SHOP"</h2>
                                    <p class="mb-0 lead">DI-SHOP est une boutique en ligne qui a pour objectif de simplifier l'achat et la livraison des produits alimentaires à un coût abordable et de manière efficace au utilisateur. Elle à une version d'application web et une version d'application mobile

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
                       
                    </div>
                </div>
                <div class="text-center">
                    <h1 class="mb-6">DIGITALIS</h1>
                    <p class="mb-0 lead"> Vous avez besoin de nos prestations ou formations, n'hésitez pas à nous joindre.</p>
                       <p class="mb-0 lead">Email : contact01.digitalis@gmail.com</p>
                        <p class="mb-0 lead">Téléphone : +229 0197825820</p>
                </div>
            </div>
        </section>
           </main>
@endsection
