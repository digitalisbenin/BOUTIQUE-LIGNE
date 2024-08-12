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
                                <h1 class="fw-bold">Mes Favoris</h1>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->
                <div class=" col-12">

                    <div class="py-1 p-md-6 p-lg-1">
                       <!-- heading -->
                       <h2 class="mb-0"></h2>

                       {{--  <div class="table-responsive-xxl border-0">
                          <!-- Table -->
                          <table class="table mb-0 text-nowrap table-centered">
                             <!-- Table Head -->
                             <thead class="bg-light">
                                <tr>
                                   {{--  <th>&nbsp;</th>
                                   <th>Product</th>  --}}
                                  {{-- <th>N°</th>
                                   <th>Date Commande</th>
                                   <th>Adresse Livraison</th>
                                   <th>Status</th>
                                   <th>Montant</th>

                                   <th></th>
                                </tr>
                             </thead>
                             <tbody>
                                <!-- Table body -->
                               @foreach($favoris as $value)
                               <tr>

                                <td class="align-middle border-top-0">
                                   <a href="#" class="text-inherit">{{$value->numeroCommande}}</a>
                                </td>
                                <td class="align-middle border-top-0">{{$value->created_at }}</td>
                                <td class="align-middle border-top-0">{{$value->adresseLivraison}}</td>

                                <td class="align-middle border-top-0">
                                   {{--  <span class="badge bg-warning">{{$value->status}}</span>  --}}
                                  {{-- <span class="badge
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
                                <td class="align-middle border-top-0">{{$value->montantTotal}} FCFA</td>
                                <td class="text-muted align-middle border-top-0">
                                   <a href="{{ url('details-commande/'.$value->id) }}" class="text-inherit" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View"><i class="feather-icon icon-eye"></i></a>
                                </td>
                             </tr>
                               @endforeach

                             </tbody>
                          </table>
                       </div>  --}}
                       @if($favoris->count() >0)
                       <!-- table -->
                       <div class="table-responsive wishlistitems">
                          <table class="table text-nowrap table-with-checkbox">
                             <thead class="table-light">
                                <tr>
                                   <th>
                                      <!-- form check -->
                                      <div class="form-check">
                                         <!-- input -->
                                         <input class="form-check-input" type="checkbox" value="" id="checkAll" />
                                         <!-- label -->
                                         <label class="form-check-label" for="checkAll"></label>
                                      </div>
                                   </th>
                                   <th></th>
                                   <th>Article</th>
                                   {{--  <th>Amount</th>
                                   <th>Status</th>  --}}
                                   <th>Actions</th>
                                   <th>Supprimer</th>
                                </tr>
                             </thead>
                             <tbody>

                              @foreach($favoris as $value)
                              <tr class="  product_data">
                               <td class="align-middle">
                                  <!-- form check -->
                                  <div class="form-check">
                                     <!-- input -->
                                     <input class="form-check-input" type="checkbox" value="" id="chechboxTwo" />
                                     <!-- label -->
                                     <label class="form-check-label" for="chechboxTwo"></label>
                                  </div>
                               </td>
                               <td class="align-middle">
                                  <a href="#"><img src="{{asset('assets/uploads/articles_images/'.$value->article->image_path)}}" class="icon-shape icon-xxl" alt="" /></a>
                               </td>
                               <td class="align-middle">
                                  <div>
                                     <h5 class="fs-6 mb-0"><a href="#" class="text-inherit">{{$value->article->nomArticle}}</a></h5>
                                     {{--  <small>$.98 / lb</small>  --}}
                                  </div>
                               </td>
                               {{--  <td class="align-middle">$35.00</td>
                               <td class="align-middle"><span class="badge bg-success">In Stock</span></td>  --}}
                               <td class="align-middle">
                                   <input type="hidden" value="{{ $value->article_id }}" class="prod_id">
                                                       <input type="hidden" value="1" class="qty-input">
                                                       <input type="hidden" value="{{ $value->article->prixVenteArticle }}" class="prix">
                                  <div class="btn btn-primary btn-sm addToCartBtn">Ajouter au panier</div>
                               </td>
                               <td class="align-middle">
                                   <input type="hidden" value="{{ $value->article_id }}" class="prod_id">
                                  <a href="#" class="text-muted remove-wishlist-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                     <i class="feather-icon icon-trash-2"></i>
                                  </a>
                               </td>
                            </tr>
                              @endforeach
                              @else
                              <h4 class="text-center"> Votre favoris est vide !</h4>
                              @endif
                                {{--  <tr>
                                   <td class="align-middle">
                                      <!-- form check -->
                                      <div class="form-check">
                                         <!-- input -->
                                         <input class="form-check-input" type="checkbox" value="" id="chechboxThree" />
                                         <!-- label -->
                                         <label class="form-check-label" for="chechboxThree"></label>
                                      </div>
                                   </td>
                                   <td class="align-middle">
                                      <a href="#"><img src="../assets/images/products/product-img-17.jpg" class="icon-shape icon-xxl" alt="" /></a>
                                   </td>
                                   <td class="align-middle">
                                      <div>
                                         <h5 class="fs-6 mb-0"><a href="#" class="text-inherit">Fresh Kiwi</a></h5>
                                         <small>4 no</small>
                                      </div>
                                   </td>
                                   <td class="align-middle">$20.97</td>
                                   <td class="align-middle"><span class="badge bg-danger">Out of Stock</span></td>
                                   <td class="align-middle">
                                      <div class="btn btn-dark btn-sm">Contact us</div>
                                   </td>
                                   <td class="align-middle">
                                      <a href="#" class="text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                         <i class="feather-icon icon-trash-2"></i>
                                      </a>
                                   </td>
                                </tr>  --}}



                             </tbody>
                          </table>
                       </div>
                    </div>
                 </div>
            </div>
        </section>
    </main>
@endsection
{{--
@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script><script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
<script>
    $(document).ready(function () {
        loadcart();
        loadwishlist();

        $('.addToCartBtn').click( function (e) {
            e.preventDefault();

                var product_id= $(this).closest('.product_data').find('.prod_id').val();
                var product_qty= $(this).closest('.product_data').find('.qty-input').val();
                var prixe= $(this).closest('.product_data').find('.prix').val();


                $.ajaxSetup({
                    headers:{
                        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    method:"Post",
                    url:"/add-to-cart",
                    data:{
                        'article_id':product_id,
                        'quantite':product_qty,
                        'montantLigneCommande':prixe,
                    },

                    success:function(response){
                        console.log(response);
                        swal(response.status);
                        loadcart();
                        //$('.wishlistitems').load(location.href +" .wishlistitems");
                        //window.location.reload();

                    }

                });

        });
        function loadcart()
        {
            $.ajax({
                method:"GET",
                url:"/load-cart-data",
                success:function(response){
                     $('.cart-count').html('');
                     $('.cart-count').html(response.count);
                    //alert(response.count)
                }

            });
        };
        $(document).on('click','.delete-cart-item', function (e) {
            e.preventDefault();

                var prod_id= $(this).closest('.product_data').find('.prod_id').val();

                //alert(prod_id)
                $.ajaxSetup({
                    headers:{
                        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    method:"Post",
                    url:"/delete-cart-item",
                    data:{
                        'article_id':prod_id,

                    },
                    success:function(response){
                        window.location.reload();
                       loadcart();
                        $('.cartitems').load(location.href +" .cartitems");
                        swal("",response.status,"success")
                    }

                });



        });

        $(document).on('click','.changeQuantity', function (e) {
            e.preventDefault();

                var product_id= $(this).closest('.product_data').find('.prod_id').val();
                var qty= $(this).closest('.product_data').find('.qty-input').val();
               // alert(product_id)
               // alert(qty)
                data={
                    'article_id':product_id,
                    'quantite':qty,

                },

                $.ajaxSetup({
                    headers:{
                        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    method:"Post",
                    url:"/update-cart",
                    data:data,
                    success:function(response){
                        loadcart();

                         swal("",response.status,"success")
                        //window.location.reload();
                        {{--  setTimeout(function() {
                            window.location.reload();
                        }, 2000);  
                       //$('.cartitems').load(location.href +" .cartitems");
                    }

                });



        });
        function loadwishlist()
        {
            $.ajax({
                method:"GET",
                url:"/load-wishlist-data",
                success:function(response){
                     $('.whishlist-count').html('');
                     $('.whishlist-count').html(response.count);
                    //alert(response.count)
                }

            });
        }




        $('.addToWishlist').click( function (e) {
            e.preventDefault();

                var product_id= $(this).closest('.product_data').find('.prod_id').val();


                $.ajaxSetup({
                    headers:{
                        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    method:"Post",
                    url:"/add-to-wishlist",
                    data:{
                        'product_id':product_id,

                    },
                    success:function(response){
                        swal(response.status)
                        loadwishlist();
                    }

                });

        });

        $(document).on('click','.remove-wishlist-item', function (e) {
            e.preventDefault();

                var prod_id= $(this).closest('.product_data').find('.prod_id').val();


                $.ajaxSetup({
                    headers:{
                        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    method:"Post",
                    url:"/remove-wishlist-item",
                    data:{
                        'prod_id':prod_id,

                    },
                    success:function(response){
                       // window.location.reload();
                       loadwishlist();
                       $('.wishlistitems').load(location.href +" .wishlistitems");
                      setTimeout(function() {
                        window.location.reload();
                    }, 2000);
                        swal("",response.status,"success")
                    }

                });



        });

    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@if (Session::has('status'))
<script>

        swal( "{!!Session::get('status')!!}","", 'success', {
            button: true,
            button:"OK",
            timer: 5000,
        });



</script>
@endif  --}}
