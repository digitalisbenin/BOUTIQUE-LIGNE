@extends('layouts.details_article_layout')

@section('detail article content')
    @include('partial.navbar2')
    <main>

        <!-- section -->
        <section class="mb-lg-14 mb-1 mt-1">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-12">
                        <!-- card -->
                        <div class="card py-1 border-0 mb-1">
                            <div>
                                <h1 class="fw-bold">Mes Commandes</h1>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->
                <div class=" col-12">

                    <div class="py-1 p-md-6 p-lg-1">
                       <!-- heading -->
                       <h2 class="mb-0"></h2>

                       <div class="table-responsive-xxl border-0">
                          <!-- Table -->
                          <table class="table mb-0 text-nowrap table-centered">
                             <!-- Table Head -->
                             <thead class="bg-light">
                                <tr>
                                   {{--  <th>&nbsp;</th>
                                   <th>Product</th>  --}}
                                   <th>N°</th>
                                   <th>Date Commande</th>
                                   <th>Adresse Livraison</th>
                                   <th>Status Livraison</th>
                                   <th>Status Commande</th>
                                   <th>Montant</th>
                                   <th>bonus</th>

                                   <th></th>
                                </tr>
                             </thead>
                             <tbody>
                                <!-- Table body -->
                               @foreach($commande as $value)
                               <tr>

                                <td class="align-middle border-top-0">
                                   <a href="#" class="text-inherit">{{$value->numeroCommande}}</a>
                                </td>
                                <td class="align-middle border-top-0">{{$value->created_at }}</td>
                                <td class="align-middle border-top-0">{{$value->adresseLivraison}}</td>

                                <td class="align-middle border-top-0">
                                   {{--  <span class="badge bg-warning">{{$value->status}}</span>  --}}
                                   <span class="badge
                                        @switch($value->status)
                                            @case('En Attente')
                                                bg-secondary
                                                @break
                                            @case('En cours')
                                                bg-warning
                                                @break
                                            @case('Livré')
                                                bg-primary
                                                @break
                                            @case('Non Livré')
                                                bg-danger
                                                @break
                                            @default
                                                bg-secondary
                                        @endswitch
                                    ">
                                        {{ $value->status }}
                                    </span>

                                </td>
                                <td class="align-middle border-top-0">
                                    {{--  <span class="badge bg-warning">{{$value->status}}</span>  --}}
                                    <span class="badge
                                         @switch($value->status_commande)
                                             @case('En Attente')
                                                 bg-secondary
                                                 @break
                                             @case('En cours')
                                                 bg-warning
                                                 @break
                                             @case('Validé')
                                                 bg-primary
                                                 @break
                                             @case('Non Validé')
                                                 bg-danger
                                                 @break
                                             @default
                                                 bg-secondary
                                         @endswitch
                                     ">
                                         {{ $value->status_commande }}
                                     </span>

                                 </td>
                                <td class="align-middle border-top-0">{{$value->montantTotal}} FCFA</td>
                                <td class="align-middle border-top-0">{{$value->bonus}} FCFA</td>
                                <td class="text-muted align-middle border-top-0">
                                   <a href="{{ url('details-commande/'.$value->id) }}" class="text-inherit" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View"><i class="feather-icon icon-eye"></i></a>
                                   @if($value->status==="En cours")
                                   <a class="text-inherit" href="#"  data-bs-toggle="modal" data-bs-target="#exampleModal{{$value->id}}" >
                                       <i class="bi bi-cart4" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Livré"></i>


                                   </a>
                                   @endif
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
                                     <form class="" action="{{ url('updates-commande/'.$value->id)}}" method="POST">
                                         @method('PUT')
                                         @csrf
                                         <div class="input-group ">

                                             
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
