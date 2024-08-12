@extends('layouts.details_article_layout')

@section('detail article content')
    @include('partial.navbar2')
    <main>

        <!-- section -->
        <section class="mb-lg-10 mb-1 mt-1">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-12">
                        <!-- card -->
                        <div class="card py-1 border-0 mb-1">
                            <div>
                                <h1 class="fw-bold">Details Commandes</h1>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->
                <div class="col-lg-12 col-md-12 col-12">
                    <a href="{{url('mes-commandes')}}" class="btn btn-primary float-end" >
                        Retour

                    </a>
                    <div class="py-6 p-md-6 p-lg-10">
                       <!-- heading -->

                       <h2 class="mb-6"></h2>

                       <div class="table-responsive-xxl border-0">
                          <!-- Table -->
                          <table class="table mb-0 text-nowrap table-centered">
                             <!-- Table Head -->
                             <thead class="bg-light">
                                <tr>
                                   <th>N°</th>
                                   <th> Image</th>
                                   <th>Articles</th>
                                   <th>Quantite</th>

                                   <th>Montant</th>


                                </tr>
                             </thead>
                             <tbody>
                                <!-- Table body -->
                               @foreach($commande as $key => $value)
                               <tr>
                                <td class="align-middle border-top-0">
                                    <a href="#" class="text-inherit">{{$key +1}}</a>
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
                 </div>
            </div>
        </section>
    </main>
@endsection
