@extends('layouts.client')
@section('custom-css')
<link rel="stylesheet" href="{{asset("public/css/category/minimal.css")}}">
@endsection
@section('bootstrap-css')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endsection
@section('extra-meta')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('top-header')
@include('client.includes.shopTopHeader')
@endsection
@section('bottom-header')
@endsection
@section('mobile-header')
@include('client.includes.shopMobileHeader')
@endsection
@section('breadcrumb')
@include('client.includes.breadcrumb',['title'=>$title])
@endsection
@section('notify-js')
<script src="https://cdn.jsdelivr.net/npm/@reliutg/buzz-notify/index.min.js"></script>
@endsection




@section('content')
<div id="notify"></div>

<!--==================== Cart Section Start ====================-->
<div class="full-row">
    <div class="container">
        <div class="row mr-2 ml-2">
        </div>
        <div class="row">
            @if (!Cart::content()->count())
            <div class="flex-container" style="display: grid;place-items:center">
                <img src="{{asset('public/images/empty-cart.png')}}" alt="" srcset="">
                <h2>Votre panier est vide !</h2>
                <p>Explorez nos catégories et découvrez nos meilleures offres!</p>
                <a href="{{route('shop.all-products')}}"
                    class="woocommerce-form-login__submit btn btn-primary rounded-0">Commencez vos achat</a>
            </div>
            @else
            <div class="col-xl-8 col-lg-12 col-md-12 col-12">
                <form class="woocommerce-cart-form" action="#" method="post">
                    <table class="shop_table cart">
                        <tr>
                            <th class="product-thumbnail">&nbsp;</th>
                            <th class="product-name">Produit</th>
                            <th class="product-price">Prix</th>
                            <th class="product-quantity">Quantité</th>
                            <th class="product-subtotal">Sous-total</th>
                            <th class="product-remove">&nbsp;</th>
                        </tr>
                        @foreach (Cart::content() as $product)
                        <tr class="woocommerce-cart-form__cart-item cart_item">
                            <td class="product-thumbnail">
                                <a
                                    href="{{route('shop.productDetails',['name'=>$product->model->name,'id'=>$product->model->id])}}"><img
                                        src="{{$product->model->main_image}}" alt="Product image"></a>
                            </td>
                            <td class="product-name">
                                <a
                                    href="{{route('shop.productDetails',['name'=>$product->model->name,'id'=>$product->model->id])}}">{{$product->model->name}}</a>
                                <dl class="variation">
                                    <dt class="variation-Vendor">Catégorie:</dt>
                                    <dd class="variation-Vendor">{{$product->model->maincategory->libelle}}</dd>
                                </dl>
                            </td>
                            <td class="product-price">
                                <span><bdi id="price">{{$product->model->price}}<span>.00Dh</span></bdi>
                                </span>
                            </td>
                            <td class="product-quantity">
                                {{-- <div class="quantity">
                                            <input type="number" id="quantity" name="quantity" value="{{$product->qty}}"
                                data-id={{$product->rowId}}>
            </div> --}}
            <select class="custom-select" name="quantity" id="quantity" data-id="{{ $product->rowId }}">
                @for ($i = 1; $i <= $product->model->stock; $i++)
                    <option value="{{ $i }}" {{ $product->qty == $i ? 'selected' : ''}}>
                        {{ $i }}
                    </option>
                    @endfor
            </select>
            </td>
            <td class="product-subtotal">
                <span><bdi id="subtotal-cart">12.00<span>DH</span></bdi>
                </span>
            </td>
            <td class="product-remove">
                <a href="{{route('shopping-cart.delete',$product->rowId)}}" class="remove">×</a>
            </td>
            </tr>
            @endforeach
            </table>
            </form>
        </div>
        <div class="col-xl-4 col-lg-12 col-md-12 col-12">
            <div class="cart-collaterals">
                <div class="cart_totals ">
                    <h2>Total du panier</h2>
                    <table>
                        <tr>
                            <th>Sous-total</th>
                            <td>
                                <span><bdi id="subtotal">{{Cart::subtotal()}}<span>&nbsp;DH</span></bdi>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <th>Shipping</th>
                            <td>

                                    <li>

                                        <label for="shipping_method_0_free_shipping1">Livraison gratuit</label>
                                    </li>



                            </td>
                        </tr>

                        <tr>
                            <th>Tax</th>
                            <td>
                                <span><bdi id="tax">{{Cart::tax()}}<span>&nbsp;DH</span></bdi>
                                </span>
                            </td>
                        </tr>
                        <tr class="order-total">
                            <th>Total</th>
                            <td><strong><span
                                        class="woocommerce-Price-amount amount"><bdi id="total">{{Cart::total()}}<span>DH</span></bdi></span></strong>
                            </td>
                        </tr>
                    </table>
                    <div style="display: flex;justify-content:space-around;align-items:center">
                        <div class="wc-proceed-to-checkout">
                           <a href="{{route('shop.all-products')}}" class="checkout-button">Poursuive vos achats</a>
                       </div>
                       <div class="wc-proceed-to-checkout">
                           <a href="{{route('checkout')}}" class="checkout-button">Passer au paiement</a>
                       </div>

                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
</div>
<!--==================== Cart Section End ====================-->


@endsection

@section('extra-js')

<script>
    var qty = document.querySelectorAll('#quantity');
    Array.from(qty).forEach((element) => {
        element.addEventListener('change', function () {
            var rowId = element.getAttribute('data-id');
            var token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            var qty = this.value;



             $.ajax({
            type: "post",
            url: "shopping-cart/update/"+rowId,
            dataType: 'json',
            data: {  qty:qty,
                     _token:token },
            success: function (resp) {
               console.log(resp);
               Notify({
                            title: resp.success,
                            type: 'success',
                            duration:4000,
                            

                      });
                console.log(resp);

                   $('#price').html(resp.price);
                    $('#subtotal').html(resp.subtotal);
                     $('#subtotal-cart').html(resp.subtotal);
                      $('#total').html(resp.total);
                       $('#tax').html(resp.tax);
                        $('#count-items').html(resp.items_count);
                         $('#qty-navbar').html(resp.qty);
                          $('#total-navbar').html(resp.total);

            },
            error: function () {
                alert("error");
            },
             });

        });
    });
</script>
</script>
@endsection
