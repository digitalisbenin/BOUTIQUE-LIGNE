
    $(document).ready(function () {
        loadcart();
        loadwishlist();

        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
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
        }


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
                        swal("",response.status,"success")
                    }

                });



        });


        $(document).on('click','.increment-btn', function (e) {
            e.preventDefault();

            var inc_value = $(this).closest('.product_data').find('.qty-input').val();
            var value =parseInt(inc_value, 10);
            value = isNaN(value) ? 0 : value;

            if(value < 20)
            {
                value++;
                $(this).closest('.product_data').find('.qty-input').val(value);
            }

        });

        $(document).on('click','.decrement-btn', function (e) {
            e.preventDefault();
            var dec_value = $(this).closest('.product_data').find('.qty-input').val();
            var value =parseInt(dec_value, 10);
            value = isNaN(value) ? 0 : value;
            if(value > 1)
            {
                value--;
                $(this).closest('.product_data').find('.qty-input').val(value);
            }

        });
        loadcart();

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
                        //window.location.reload();
                       loadcart();
                       setTimeout(function() {
                        window.location.reload();
                    }, 3000);
                       // $('.cartitems').load(location.href +" .cartitems");
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
                        window.location.reload();
                        setTimeout(function() {
                            window.location.reload();
                        }, 3000);

                       //$('.cartitems').load(location.href +" .cartitems");
                    }

                });



        });


    });
