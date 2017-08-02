/**
 * Created by root on 7/31/17.
 */
$(function () {

    getCartQty();
    getPreCart();
    getOrder();
    preAudit();

    setInterval(function () {
        getOrder();
    }, 5000);


    $("body").delegate('#btnAddToCart', 'click', function () {
        var id=$(this).attr('idd');
        $.ajax({
           type: 'get',
            url :'../../add-to-cart',
            data: {id:id},
            success:function (msg) {
               getCartQty();
               getPreCart();
                $("#addToCartInfo").html(msg);
            }
        });
    })

    function getCartQty() {
        $.ajax({
           type:'get',
            url : '../../cart-qty',
            success:function (msg) {
               $("#cart-qty").html(msg);
            }

        });
    }
   function getPreCart() {
       $.ajax({
           type: 'get',
           url :'../../pre-cart',
           success:function (msg) {
               $("#cart").html(msg);
           }
       });
   }
   $("body").delegate('#btnDecreaseCart', 'click', function () {
      var id=$(this).attr('idd');
       $.ajax({
           type: 'get',
           url: '../../decrease-cart',
           data : {id:id},
           success:function (msg) {
               getCartQty();
               getPreCart();
               if(msg==='emptyCart'){
                   window.location.reload('../../cart');
               }
           }
       });
   });
    $("body").delegate('#btnIncreaseCart', 'click', function () {
       var id=$(this).attr('idd');
       $.ajax({
           type: 'get',
           url : '../../increase-cart',
           data: {id:id},
           success:function (msg) {
               getCartQty();
               getPreCart();
           }
       })
    });

    function getOrder() {
        $.ajax({
            type: 'get',
            url : 'pre-order',
            success:function (msg) {
                $("#order").html(msg);
            }
        });
    }

    $("body").delegate("#deliver-status","click", function () {

            var id=$(this).attr('idd');
            $.ajax({
                type: 'get',
                url : 'change-deliver-status',
                data: {id:id},
                success:function () {
                    getOrder();
                }
            });

    });

    $("body").delegate("#cash-status","click", function () {

            var id=$(this).attr('idd');
            $.ajax({
                type: 'get',
                url : 'change-cash-status',
                data: {id:id},
                success:function (msg) {
                    getOrder();
                }
            });

    });

    $("#getDate").datepicker();

    $("#btnGetByDate").on('click', function () {
        var getDate=$("#getDate").val();
        if(getDate){
            $.ajax({
                type: 'get',
                url : 'pre-audit',
                data : {getDate:getDate},
                success:function (msg) {
                    $("#audit").html(msg);

                }
            });
        }
    });

    function preAudit() {
        $.ajax({
            type: 'get',
            url : 'pre-audit',
            success:function (msg) {
                $("#audit").html(msg);

            }
        });
    }


});