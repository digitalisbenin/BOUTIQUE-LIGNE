@extends('layouts.categorie_layout')

@section('all categories section')
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
                    <!-- row -->
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div
                                class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-4">
                                <!-- pageheader -->
                                <div>
                                    <h2>Historique des commandes</h2>
                                    <!-- breacrumb -->
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb mb-0">
                                            <li class="breadcrumb-item"><a href="{{ url('admin-panel') }}"
                                                                           class="text-inherit">Tableau de bord</a></li>  /
                                            <li class="" aria-current="page">Historique des commandes</li>
                                        </ol>
                                    </nav>
                                </div>
                                <!-- button -->
                                <div>
                                    <a href="{{ url('commande') }}" class="btn btn-primary">Retour
                                        </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-12 mb-5">
                            <!-- card -->
                            <div class="card h-100 card-lg">
                                {{--  <div class="px-6 py-6">
                                    <div class="row justify-content-between">
                                        <div class="col-lg-4 col-md-6 col-12 mb-2 mb-md-0">
                                            <!-- form -->
                                            <form class="d-flex" role="search">
                                                <input class="form-control" type="search" placeholder="Search Category"
                                                       aria-label="Search"/>
                                            </form>
                                        </div>
                                        <!-- select option -->
                                        <div class="col-xl-2 col-md-4 col-12">
                                            <select class="form-select">
                                                <option selected>Status</option>
                                                <option value="Published">Published</option>
                                                <option value="Unpublished">Unpublished</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>  --}}
                                <!-- card body -->
                                <div class="card-body p-0">
                                    <!-- table -->
                                    <div class="table-responsive">
                                        <table
                                            class="table table-centered table-hover mb-0 text-nowrap table-borderless table-with-checkbox">
                                            <thead class="bg-light">
                                            <tr>
                                                {{--  <th>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                               id="checkAll"/>
                                                        <label class="form-check-label" for="checkAll"></label>
                                                    </div>
                                                </th>  --}}
                                                <th>N°</th>

                                                 <th>Date</th>
                                                 <th>Adresse Livraison</th>
                                             <th>Montant</th>
                                             <th>bonus</th>
                                                <th>Téléphone</th>
                                                <th>Status</th>
                                                <th>Livreurs</th>


                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($commande as $value)
                                                <tr>
                                                    {{--  <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                   id="categoryOne"/>
                                                            <label class="form-check-label" for="categoryOne"></label>
                                                        </div>
                                                    </td>  --}}

                                                    <td><a href="#" class="text-reset">{{ $value-> numeroCommande }} </a>
                                                    </td>

                                                    {{--  <td>{{ $value ->created_at }}</td>  --}}
                                                    <td>{{ $value->created_at->format('d-m-Y') }}</td>
                                                    <td>{{ $value ->adresseLivraison }}</td>
                                                    <td>{{ $value ->montantTotal }} FCFA</td>
                                                    <td>{{ $value ->bonus ?? 0 }} FCFA</td>
                                                    <td>{{ $value ->livraisonPhoneNumber }}</td>

                                                    <td>
                                                        <span class="badge
                                                        @switch($value->status)
                                                            @case('En Attente')
                                                            bg-light-info text-dark-info
                                                                @break
                                                            @case('En cours')
                                                            bg-light-warning text-dark-warning
                                                                @break
                                                            @case('Livré')
                                                            bg-light-primary text-dark-primary
                                                                @break
                                                            @case('Non Livré')
                                                            bg-light-danger text-dark-danger
                                                                @break
                                                            @default
                                                                bg-secondary
                                                        @endswitch
                                                    ">
                                                        {{ $value->status }}
                                                    </span>
                                                    </td>
                                                    <td>
                                                        {{ $value->livreurs->nom  ?? 'N/'}}   {{ $value->livreurs->prenoms  ?? 'A'}}
                                                    </td>

                                                    <td>
                                                        <a href="{{url('voir-commande/'.$value->id)}}" class="text-inherit me-3"  ><i class="feather-icon icon-eye" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Voir"></i></a>

{{--
                                                        <a class="text-inherit" href="#" data-bs-toggle="modal" data-bs-target="#userModal{{$value->id}}" >
                                                            <i class="bi bi-pencil-square me-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Affecter"></i>


                                                        </a>
                                                        <a class="text-inherit" href="#"  data-bs-toggle="modal" data-bs-target="#exampleModal{{$value->id}}" >
                                                            <i class="bi bi-cart4" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Livré"></i>


                                                        </a>  --}}
                                                    </td>
                                                </tr>
                                                <div class="modal fade" id="exampleModal{{$value->id}}" tabindex="-1" aria-labelledby="exampleModalLabel{{$value->id}}" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel{{$value->id}}">Status livraison</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form class="" action="{{ url('update-commande/'.$value->id)}}" method="POST">
                                                                    @method('PUT')
                                                                    @csrf
                                                                    <div class="input-group ">

                                                                        {{--  <div class="form-check form-check-inline">
                                                                            <input class="form-check-input " type="radio" value="En Attente"
                                                                                name="status" id="nonRadio" checked>
                                                                            <label class="form-check-label text-lg" for="nonRadio">
                                                                                En Attente
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" type="radio" name="status"
                                                                                id="ouiRadio" value="En cours">
                                                                            <label class="form-check-label" for="ouiRadio">
                                                                                En cours
                                                                            </label>
                                                                        </div>  --}}
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" type="radio" name="status"
                                                                                id="ouiRadio" value="Livré">
                                                                            <label class="form-check-label" for="ouiRadio">
                                                                                Livré
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" type="radio" name="status"
                                                                                id="ouiRadio" value="Non Livré">
                                                                            <label class="form-check-label" for="ouiRadio">
                                                                                Non Livré
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                {{--  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>  --}}
                                                                <button type="submit" class="btn btn-success">Envoyer</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{--  data-bs-toggle="modal" data-bs-target="#userModal"  --}}
                                                <!-- Modal -->
                                                        {{--  <div class="modal fade" id="userModal{{$value->id}}" tabindex="-1" aria-labelledby="userModalLabel{{$value->id}}" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content p-2">
                                                                    <div class="modal-header border-0">
                                                                        <h5 class="modal-title fs-3 fw-bold" id="userModalLabel">Affecter à un livreur</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form class="" action="{{ url('update-commande/'.$value->id)}}" method="POST">
                                                                            @method('PUT')
                                                                            @csrf
                                                                            <div class="mb-2">
                                                                                {{--  <label for="fullName" class="form-label">Name</label>  --}}
                                                                                {{--  <input type="text" class="form-control" id="fullName" placeholder="Enter Your Name" required="" />
                                                                                <select class="form-select" aria-label="" required name="livreur_id">
                                                                                    <option selected> sélectionner un livreur</option>
                                                                                    @foreach($livreur as $value)
                                                                                    <option value="{{$value->id }}">{{$value->nom}}   {{$value->prenoms}}</option>
                                                                                    @endforeach

                                                                                  </select>
                                                                            </div>
                                                                            {{--  <div class="mb-3">
                                                                                <label for="email" class="form-label">Email address</label>
                                                                                <input type="email" class="form-control" id="email" placeholder="Enter Email address" required="" />
                                                                            </div>
                                                                            <div class="mb-5">
                                                                                <label for="password" class="form-label">Password</label>
                                                                                <input type="password" class="form-control" id="password" placeholder="Enter Password" required="" />
                                                                                <small class="form-text">
                                                                                    By Signup, you agree to our
                                                                                    <a href="#!">Terms of Service</a>
                                                                                    &
                                                                                    <a href="#!">Privacy Policy</a>
                                                                                </small>
                                                                            </div>
                                                                            <button type="submit" class="btn btn-primary float-end">Affecter</button>
                                                                        </form>
                                                                    </div>
                                                                    {{--  <div class="modal-footer border-0 justify-content-center">
                                                                        Already have an account?
                                                                        <a href="#">Sign in</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>  --}}
                                                        <div class="modal fade" id="userModal{{$value->id}}" tabindex="-1" aria-labelledby="userModalLabel{{$value->id}}" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content p-2">
                                                                    <div class="modal-header border-0">
                                                                        <h5 class="modal-title fs-3 fw-bold" id="userModalLabel">Affecter à un livreur</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form id="livreurForm{{$value->id}}" action="{{ url('update-commande/'.$value->id) }}" method="POST">
                                                                            @method('PUT')
                                                                            @csrf
                                                                            <div class="mb-2">
                                                                                <input type="text" class="form-control" id="searchLivreur{{$value->id}}" placeholder="Rechercher un livreur" onkeyup="searchLivreur({{$value->id}})" />
                                                                            </div>
                                                                            <div class="mb-2">
                                                                                <select class="form-select" id="livreurSelect{{$value->id}}" required name="livreur_id">
                                                                                    <option selected>sélectionner un livreur</option>
                                                                                    @foreach($livreur as $livreu)
                                                                                        <option value="{{$livreu->id}}">{{$livreu->nom}} {{$livreu->prenoms}}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                            <button type="submit" class="btn btn-primary float-end">Affecter</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>



                                            @endforeach


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div
                                    class="border-top d-flex justify-content-between align-items-md-center px-6 py-6 flex-md-row flex-column gap-4">
                                    {{--<span>Showing 1 to 8 of 12 entries</span>--}}
                                    <nav>
                                        {{--<ul class="pagination mb-0">
                                            <li class="page-item disabled"><a class="page-link" href="#!">Previous</a>
                                            </li>
                                            <li class="page-item"><a class="page-link active" href="#!">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#!">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#!">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#!">Next</a></li>
                                        </ul>--}}
                                        <p></p>
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


