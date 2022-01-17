$(document).ready(function () { 
    $('.cartItem__addRemoveBtn').click(function () {

        var quantityInput = $(this).parent().find('.item__quantity input[name=quantity]');
        var quantity = quantityInput.val();
        var product_id = quantityInput.attr('id');
        var sellingPrice = $(this).parent().parent().find('.product__sellingPrice span');
        var actualPrice = $(this).parent().parent().find('.product__actualPrice span');
        var increase = $(this).text().indexOf('+') !== -1;

        var cartProducts = JSON.parse($('input[name=cartproducts]').val());
        if(increase){
            cartProducts[product_id]++;
        } else{
            cartProducts[product_id]--;
        }
        $('input[name=cartproducts]').attr('value',JSON.stringify(cartProducts));

       $.ajax({
            url: window.location.origin+"/cart/update/"+ product_id,
            type: "GET",
            dataType: "JSON",
            data: {quantity: quantity, increase: increase},
            success: function (data) {

                quantityInput.attr('value', data.quantity);
                sellingPrice.text( data.selling_price )
                actualPrice.text( data.actual_price )
                $('.cart__totalActualPrice span').text(data.total_actual_price)
                $('.cart__totalDiscount span').text(data.total_discount)
                $('.cart__totalSellingPrice span').text(data.total_selling_price)
                $('.cart__payBtn input[name=amount]').attr('value', data.total_selling_price)
                $('.cart__payBtn button').text("PAY ₹"+data.total_selling_price)
            },
            error: function(xhr, status, error){
                var errorMessage = xhr.status + ': ' + xhr.statusText
                 alert('Error - ' + errorMessage);
            }
        })
    })
})