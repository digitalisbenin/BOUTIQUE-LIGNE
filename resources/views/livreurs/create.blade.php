@extends('layouts.add_categorie_layout')

@section('add category section')
    <div>
        <!-- navbar -->
        @include('partial.dashbord_navbars.navbar1')


        <div class="main-wrapper">
            <!-- navbar vertical -->
            <!-- navbar -->
        @include('partial.dashbord_navbars.navbar2')

        @include('partial.dashbord_navbars.navbar3')

        <!-- main -->
            <main class="main-content-wrapper">
                <!-- container -->
                <div class="container">
                    <!-- row -->
                    <div class="row mb-8">
                        <div class="col-md-12">
                            <div class="d-md-flex justify-content-between align-items-center">
                                <!-- page header -->
                                <div>
                                    <h2>Ajouter un nouveau livreur</h2>
                                    <!-- breacrumb -->
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb mb-0">
                                            <li class=""><a href="{{ url('admin-panel') }}"
                                                                           class="text-inherit">Tableau de bord</a></li>/
                                            <li class=""><a href="{{ url('livreurs') }}"
                                                                           class="text-inherit">Livreurs</a></li>/
                                            <li class="breadcrumb-item active" aria-current="page">Ajouter un nouveau livreurs</li>
                                        </ol>
                                    </nav>
                                </div>
                                <div>
                                    <a href="{{ url('livreurs') }}" class="btn btn-light">Retour {{--vers les catégories--}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form action="{{ url('/add-livreurs') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <!-- card -->
                                <div class="card mb-6 shadow border-0">
                                    <!-- card body -->
                                    <div class="card-body p-6">
                                        
                                        <h4 class="mb-4 h5 mt-5">Informations sur le livreur</h4>
                                        <div class="row">
                                            <!-- input -->
                                            <div class="mb-3 col-lg-6">
                                                <label class="form-label">Nom </label>
                                                <input type="text" name="nom" class="form-control" placeholder="Nom du livreur"
                                                       required/>
                                            </div>
                                            <!-- input -->
                                            <div class="mb-3 col-lg-6">
                                                <label class="form-label">Prénoms</label>
                                                <input type="text" name="prenoms" class="form-control" placeholder="Prénoms du livreur" required/>
                                            </div>
                                            <div class="mb-3 col-lg-6">
                                                <label class="form-label">Adresse</label>
                                                <input type="text" name="adresse" class="form-control" placeholder="Adresse" required/>
                                            </div>
                                            <div class="mb-3 col-lg-6">
                                                <label class="form-label">Téléphone</label>
                                                <input type="number" name="phone" class="form-control" placeholder="Téléphone" required/>
                                            </div>
                                            
                                          
                                            <div class="col-lg-12 ">
                                                <a href="{{url('livreurs')}}" class="btn btn-secondary ms-2 float-end">Annuler</a>
                                                <button class="btn btn-primary float-end ml-4" type="submit">Créer le livreur</button>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </main>
        </div>
    </div>
@endsection


