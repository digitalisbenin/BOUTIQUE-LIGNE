@extends('layouts.products_layout')

@section('all products section')

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
                <div class="container">
                    <div class="row mb-8">
                        <div class="col-md-12">
                            <!-- page header -->
                            <div class="d-md-flex justify-content-between align-items-center">
                                <div>
                                    <h2>Articles</h2>
                                    <!-- breacrumb -->
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb mb-0">
                                            <li class="breadcrumb-item"><a href="{{ url('admin-panel') }}" class="text-inherit">Tableau de bord</a></li>
                                            <li aria-current="page">/Articles</li>
                                        </ol>
                                    </nav>
                                </div>
                                <!-- button -->
                                <div>
                                    <a href="{{ url('create-article') }}" class="btn btn-primary">Ajouter un article</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row -->
                    <div class="row">
                        <div class="col-xl-12 col-12 mb-5">
                            <!-- card -->
                            <div class="card h-100 card-lg">
                                {{--  <div class="px-6 py-6">
                                    <div class="row justify-content-between">
                                        <!-- form -->
                                        <div class="col-lg-4 col-md-6 col-12 mb-2 mb-lg-0">
                                            <form class="d-flex" role="search">
                                                <input class="form-control" type="search" placeholder="Rechercher un article" aria-label="Search" />
                                            </form>
                                        </div>
                                        <!-- select option -->
                                        <div class="col-lg-2 col-md-4 col-12">
                                            <select class="form-select">
                                                <option selected>Status</option>
                                                <option value="1">Publié</option>
                                                <option value="2">Non publié</option>
                                                <option value="3">Brouillon</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>  --}}
                                <!-- card body -->
                                <div class="card-body p-0">
                                    <!-- table -->
                                    <div class="table-responsive">
                                        <table class="table table-centered table-hover text-nowrap table-borderless mb-0 table-with-checkbox">
                                            <thead class="bg-light">
                                            <tr>
                                                {{--  <th>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="checkAll" />
                                                        <label class="form-check-label" for="checkAll"></label>
                                                    </div>
                                                </th>  --}}
                                                <th>Image</th>
                                                <th>Nom de l'article</th>
                                                <th>Catégorie</th>
                                                <th>Status</th>
                                                <th>Prix d'achat</th>
                                                <th>Prix de vente</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($article as $value)
                                                <tr>
                                                    {{--  <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                   id="categoryOne"/>
                                                            <label class="form-check-label" for="categoryOne"></label>
                                                        </div>
                                                    </td>  --}}
                                                    <td>
                                                        <a href="#!"><img
                                                                src="{{ asset('assets/uploads/articles_images/'.$value->image_path) }}"
                                                                alt="" class="icon-shape icon-sm"/></a>
                                                    </td>
                                                    <td><a href="#" class="text-reset">{{ $value -> nomArticle }}</a>
                                                    </td>
                                                    <td>{{ $value -> categorie -> nomCategorie }}</td>

                                                    <td>
                                                        @if($value -> status == 1)
                                                            <span class="badge bg-light-primary text-dark-primary">Publié</span>
                                                        @else
                                                            <span class="badge bg-light-danger text-dark-danger">Non Publié</span>
                                                        @endif
                                                    </td>

                                                    <td>{{ $value -> prixAchatArticle }} FCFA</td>
                                                    <td>{{ $value -> prixVenteArticle }} FCFA</td>



                                                    <td>
                                                        
                                                                
                                                            
                                                                <a class=" btn" href="{{url('articles/'.$value->id.'/edit')}}">
                                                                    <i class="bi bi-pencil-square me-0"></i>
                                                                    
                                                                </a>
                                                                <a class="btn" href="{{url('articles/'.$value->id.'/destroy')}}">
                                                                    <i class="bi bi-trash me-1"></i>
                                                                    
                                                                </a>
                                                           
                                                        {{--  <div class="dropdown">
                                                            <a href="#" class="text-reset" data-bs-toggle="dropdown"
                                                               aria-expanded="false">
                                                                <i class="feather-icon icon-more-vertical fs-5"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="#">
                                                                        <i class="bi bi-trash me-3"></i>
                                                                        Delete
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#">
                                                                        <i class="bi bi-pencil-square me-3"></i>
                                                                        Edit
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>  --}}
                                                    </td>
                                                </tr>
                                            @endforeach
                                            {{--<tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="productOne" />
                                                        <label class="form-check-label" for="productOne"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#!"><img src="{{ asset('assets/images/products/product-img-1.jpg') }}" alt="" class="icon-shape icon-md" /></a>
                                                </td>
                                                <td><a href="#" class="text-reset">Haldiram's Sev Bhujia</a></td>
                                                <td>Snack & Munchies</td>

                                                <td>
                                                    <span class="badge bg-light-primary text-dark-primary">Publié</span>
                                                </td>
                                                <td>$18.00</td>
                                                <td>24 Nov 2022</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="feather-icon icon-more-vertical fs-5"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a class="dropdown-item" href="#">
                                                                    <i class="bi bi-trash me-3"></i>
                                                                    Supprimer l'article
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#">
                                                                    <i class="bi bi-pencil-square me-3"></i>
                                                                    Modifier l'article
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>--}}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="border-top d-md-flex justify-content-between align-items-center px-6 py-6">
                                    {{--<span>Affichage de 1 à 8 sur 12 entrées</span>--}}
                                    <nav class="mt-2 mt-md-0">
                                        {{--<ul class="pagination mb-0">
                                            <li class="page-item disabled"><a class="page-link" href="#!">Précédent</a></li>
                                            <li class="page-item"><a class="page-link Publié" href="#!">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#!">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#!">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#!">Suivant</a></li>
                                        </ul>--}}
                                        <p>{{ $article -> links() }}</p>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
