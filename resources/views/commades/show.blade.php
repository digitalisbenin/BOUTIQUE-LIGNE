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
                    <div class="row mb-8">
                        <div class="col-md-12">
                            <div
                                class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-4">
                                <!-- pageheader -->
                                <div>
                                    <h2>Liste des détails commandes</h2>
                                    <!-- breacrumb -->
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb mb-0">
                                            <li class="breadcrumb-item"><a href="{{ url('admin-panel') }}"
                                                                           class="text-inherit">Tableau de bord</a></li>  /  
                                            <li class="" aria-current="page"> Détails Commande</li>
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
                                                <th>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                               id="checkAll"/>
                                                        <label class="form-check-label" for="checkAll"></label>
                                                    </div>
                                                </th>
                                                                    <th>N°</th>
                                                    <th> Image</th>
                                                    <th>Articles</th>
                                                    <th>Quantite</th>

                                                    <th>Montant</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($commande as $keys => $value)
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                   id="categoryOne"/>
                                                            <label class="form-check-label" for="categoryOne"></label>
                                                        </div>
                                                    </td>

                                                    <td class="align-middle border-top-0">
                                                        <a href="#" class="text-inherit">{{$keys +1}}</a>
                                                     </td>
                                                   <td class="align-middle border-top-0 ">
                                                      <a href="#"><img src="{{asset('assets/uploads/articles_images/'.$value->article->image_path)}}" alt="Ecommerce" class="icon-shape icon-xl" /></a>
                                                   </td>
                                                   <td class="align-middle border-top-0">
                                                      <a href="#" class="fw-semibold text-inherit">
                                                         <h6 class="mb-0">{{$value->article->nomArticle}}</h6>
                                                      </a>
                                                      <span><small class="text-muted"></small></span>
                                                   </td>
                                                   {{--  <td class="align-middle border-top-0">
                                                      <a href="#" class="text-inherit">#14899</a>
                                                   </td>  --}}
                                                   <td class="align-middle border-top-0">{{$value->quantite}}</td>
                                                  
                                                   <td class="align-middle border-top-0">{{$value->quantite*$value->montantLigneCommande}} FCFA</td>
                                                </tr>
                                                
                                                        
                                                        

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
