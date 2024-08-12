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
                                    <h2>Commentaires</h2>
                                    <!-- breacrumb -->
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb mb-0">
                                            <li class=""><a href="{{ url('admin-panel') }}"
                                                                           class="text-inherit">Tableau de bord</a></li>/
                                            <li class="breadcrumb-item active" aria-current="page">Commentaires</li>
                                        </ol>
                                    </nav>
                                </div>
                                <!-- button -->
                                {{--  <div>
                                    <a href="{{ url('livreurs-create') }}" class="btn btn-primary">Ajouter un
                                        Livreur</a>
                                </div>  --}}
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
                                                <th>Image</th>
                                                <th>Article</th>
                                                <th>commentaire</th>


                                                <th>Nom complet</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($comment as $value)
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                   id="categoryOne"/>
                                                            <label class="form-check-label" for="categoryOne"></label>
                                                        </div>
                                                    </td>

                                                    <td><a href="#" class=""><img src="{{asset('assets/uploads/articles_images/'.$value->article->image_path)}}" alt="Ecommerce" class="icon-shape icon-xl" /> </a></td>
                                                    <td><a href="#" class="text-reset">{{ $value->article->nomArticle }} </a>
                                                    </td>
                                                    <td>{{ $value ->commentaire }}</td>

                                                    {{--  <td>
                                                        {{ $value ->phoneNumber }}
                                                    </td>  --}}

                                                    <td>
                                                        
                                                    
                                                        {{ $value->users->nom }}  {{ $value->users->prenoms }} 
                                                   
                                                        {{--  <a class="btn" href="{{url('livreurs/'.$value->id.'/edit')}}">
                                                            <i class="bi bi-pencil-square me-3"></i>

                                                        </a>
                                                                    <a class="btn" href="{{ url('livreurs/'.$value->id.'/destroy') }}">
                                                                        <i class="bi bi-trash me-3"></i>

                                                                    </a>  --}}



                                                    </td>
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
