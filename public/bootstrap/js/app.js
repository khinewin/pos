$(function () {
    $('#products').DataTable();
    $('#product-cat').DataTable();
    $("#sales").DataTable();

    cartInfo();
    preCart();
    function cartInfo() {
        $.ajax({
           type: 'get',
            url : 'cart-info',
            success:function (msg) {
                $("#cart-info").html(msg);
            }
        });
    }

    $("body").delegate('#btnAddToCart', 'click', function () {
       var p_slug=$(this).attr('slug');
       $.ajax({
           type: 'get',
           url :'add-to-cart',
           data: {p_slug:p_slug},
           success:function (msg) {
                cartInfo();
                preCart();
           }
       });
    });

    function preCart() {
        $.ajax({
            type: 'get',
            url : 'pre-cart',
            success:function (msg) {
                $("#cart").html(msg);
            }
        });
    }

    $("body").delegate('#btnReduce','click', function () {
       var id=$(this).attr('idd');
       $.ajax({
          type:'get',
           url : 'reduce-cart',
           data: {id: id},
           success:function (msg) {
            cartInfo();
            preCart();

           }
       });
    });
    $("body").delegate('#btnIncrease','click', function () {
        var id=$(this).attr('idd');
        $.ajax({
            type:'get',
            url : 'increase-cart',
            data: {id: id},
            success:function (msg) {
                cartInfo();
                preCart();

            }
        });
    });
    $("#clearCart").on('click', function () {
        $.ajax({
            type: 'get',
            url :'clear-cart',
            success:function (msg) {
               if(msg==='clear'){
                   window.location.reload('/cart');
               }
            }
        });
    });
});