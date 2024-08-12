@extends('layouts.add_product_layout')

@section('add product section')
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
                                    <h2>Ajouter un nouvel article</h2>
                                    <!-- breacrumb -->
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb mb-0">
                                            <li class=""><a href="{{ url('admin-panel') }}"
                                                                           class="text-inherit">Tableau de bord</a></li>/
                                            <li class=""><a href="{{ url('articles') }}"
                                                                           class="text-inherit">Articles</a></li>/
                                            <li class="breadcrumb-item active" aria-current="page">Ajouter un nouvel
                                                article
                                            </li>
                                        </ol>
                                    </nav>
                                </div>
                                <!-- button -->
                                <div>
                                    <a href="{{ url('articles') }}"
                                       class="btn btn-light">Retour {{--vers les articles--}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row -->
                    <form action="{{ url('create-new-article') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-8 col-12">
                                <!-- card -->
                                <div class="card mb-6 card-lg">
                                    <!-- card body -->
                                    <div class="card-body p-6">
                                        <h4 class="mb-4 h5">Informations sur l'article</h4>
                                        <div class="row">
                                            <!-- input -->
                                            <div class="mb-3 col-lg-6">
                                                <label class="form-label">Nom de l'article</label>
                                                <input type="text" name="nomArticle" class="form-control"
                                                       placeholder="Nom de l'article" required/>
                                            </div>
                                            <!-- input -->
                                            <div class="mb-3 col-lg-6">
                                                <label class="form-label">Catégorie de l'article</label>
                                                <select class="form-select"
                                                        name="categorie_id" {{--id="categorie_id"--}} required>
                                                    <option selected>Catégorie de l'article</option>
                                                    @foreach($categorie as $value)
                                                        <option
                                                            value="{{ $value -> id }}">{{ $value -> nomCategorie }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <!-- input -->
                                            {{-- <div class="mb-3 col-lg-6">
                                                 <label class="form-label">Weight</label>
                                                 <input type="text" class="form-control" placeholder="Weight" required />
                                             </div>
                                             <!-- input -->
                                             <div class="mb-3 col-lg-6">
                                                 <label class="form-label">Units</label>
                                                 <select class="form-select">
                                                     <option selected>Select Units</option>
                                                     <option value="1">1</option>
                                                     <option value="2">2</option>
                                                     <option value="3">3</option>
                                                 </select>
                                             </div>--}}
                                            <div>
                                                <div class="mb-3 col-lg-12 mt-5">
                                                    <!-- heading -->
                                                    <h4 class="mb-3 h5">Images de l'article</h4>

                                                    <!-- input -->
                                                    <div class="mb-4 d-flex">
                                                        <div class="position-relative">
                                                            <img class="image icon-shape icon-xxxl bg-light rounded-4"
                                                                 src="https://freshcart.codescandy.com/assets/images/icons/bakery.svg"
                                                                 alt="Image"/>

                                                            <div class="file-upload position-absolute end-0 top-0 mt-n2 me-n1">
                                                                <input name="image" type="file" class="file-input" required/>
                                                                <span class="icon-shape icon-sm rounded-circle bg-white">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                            fill="currentColor" class="bi bi-pencil-fill text-muted"
                                            viewBox="0 0 16 16">
                                          <path
                                              d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                       </svg>
                                    </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- input -->
                                            <div class="mb-3 col-lg-12 mt-5">
                                                <h4 class="mb-3 h5">Description de l'article</h4>
                                                <div class="form-floating">
                                                <textarea class="form-control"
                                                          name="description" style="height: 130px" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <!-- card -->
                                <div class="card mb-6 card-lg">
                                    <!-- card body -->
                                    <div class="card-body p-6">
                                        <!-- input -->
                                        <div class="mb-3">
                                            <label class="form-check-label">En stock</label>
                                            <input type="number" name="stock" class="form-control"
                                                   placeholder="Entrez la quantité en stock" required/>

                                        </div>
                                        <!-- input -->
                                        <div>
                                            <div class="mb-3">
                                                <label class="form-label">Code de l'article</label>
                                                <input type="text" name="codeArticle" class="form-control"
                                                       placeholder="Entrez le code de l'article" required/>
                                            </div>
                                            <!-- input -->
                                        {{--<div class="mb-3">
                                            <label class="form-label">Product SKU</label>
                                            <input type="text" class="form-control" placeholder="Enter Product Title" />
                                        </div>--}}
                                        <!-- input -->
                                            <div class="mb-3">
                                                <label class="form-label" id="productSKU">Status</label>
                                                <br/>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="status"
                                                           id="inlineRadio1" value="option1" checked/>
                                                    <label class="form-check-label" for="inlineRadio1">Publié</label>
                                                </div>
                                                <!-- input -->
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="status"
                                                           id="inlineRadio2" value="option2"/>
                                                    <label class="form-check-label" for="inlineRadio2">Non
                                                        publié</label>
                                                </div>
                                                <!-- input -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- card -->
                                <div class="card mb-6 card-lg">
                                    <!-- card body -->
                                    <div class="card-body p-6">
                                        <h4 class="mb-4 h5">Prix de l'article</h4>
                                        <!-- input -->
                                        <div class="mb-3">
                                            <label class="form-label">Prix d'achat</label>
                                            <input type="number" name="prixAchatArticle" class="form-control"
                                                   placeholder="$0.00" required/>
                                        </div>
                                        <!-- input -->
                                        <div class="mb-3">
                                            <label class="form-label">Prix de vente</label>
                                            <input type="number" name="prixVenteArticle" class="form-control"
                                                   placeholder="$0.00" required/>
                                        </div>
                                    </div>
                                </div>
                                <!-- card -->
                            {{--<div class="card mb-6 card-lg">
                                <!-- card body -->
                                <div class="card-body p-6">
                                    <h4 class="mb-4 h5">Meta Data</h4>
                                    <!-- input -->
                                    <div class="mb-3">
                                        <label class="form-label">Meta Title</label>
                                        <input type="text" class="form-control" placeholder="Title" />
                                    </div>

                                    <!-- input -->
                                    <div class="mb-3">
                                        <label class="form-label">Meta Description</label>
                                        <textarea class="form-control" rows="3" placeholder="Meta Description"></textarea>
                                    </div>
                                </div>
                            </div>--}}
                            <!-- button -->
                                <div class="d-grid">
                                    <button class="btn btn-primary" type="submit">Créer l'article</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </div>
@endsection
