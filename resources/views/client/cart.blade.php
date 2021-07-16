@extends('layouts.client')
@section('custom-css')
<link rel="stylesheet" href="{{asset("public/css/category/minimal.css")}}">
@endsection
@section('bootstrap-css')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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

@section('content')

        <!--==================== Cart Section Start ====================-->
        <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-12 col-md-12 col-12">
                        <form class="woocommerce-cart-form" action="#" method="post">
                            <table class="shop_table cart">
                                <tr>
                                    <th class="product-thumbnail">&nbsp;</th>
                                    <th class="product-name">Produit</th>
                                    <th class="product-price">Prix</th>
                                    <th class="product-quantity">Quantité</th>
                                    <th class="product-subtotal">Subtotal</th>
                                    <th class="product-remove">&nbsp;</th>
                                </tr>
                                @foreach (Cart::content() as $product)
                                <tr class="woocommerce-cart-form__cart-item cart_item">
                                    <td class="product-thumbnail">
                                        <a href="{{route('shop.productDetails',['name'=>$product->model->name,'id'=>$product->model->id])}}"><img src="{{$product->model->main_image}}" alt="Product image"></a>
                                    </td>
                                    <td class="product-name">
                                        <a href="{{route('shop.productDetails',['name'=>$product->model->name,'id'=>$product->model->id])}}">{{$product->model->name}}</a>
                                        <dl class="variation">
                                            <dt class="variation-Vendor">Catégorie:</dt>
                                            <dd class="variation-Vendor">{{$product->model->maincategory->libelle}}</dd>
                                        </dl>
                                    </td>
                                    <td class="product-price">
                                        <span><bdi>{{$product->model->price}}<span>.00Dh</span></bdi>
                                        </span>
                                    </td>
                                    <td class="product-quantity">
                                        {{-- <div class="quantity">
                                            <input type="number" id="quantity" name="quantity" value="{{$product->qty}}" data-id={{$product->rowId}}>
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
                                        <span><bdi><span>$</span>12.00</bdi>
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
                                <h2>Cart totals</h2>
                                <table>
                                    <tr>
                                        <th>Sous-total</th>
                                        <td>
                                            <span><bdi>{{Cart::subtotal()}}<span>&nbsp;DH</span></bdi>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Shipping</th>
                                        <td>
                                            <ul>
                                                <li>
                                                    <input type="radio" name="shipping_method" class="shipping_method" id="shipping_method_0_free_shipping1" checked="checked">
                                                    <label for="shipping_method_0_free_shipping1">Free shipping</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="shipping_method" class="shipping_method" id="shipping_method_0_flat_rate2">
                                                    <label for="shipping_method_0_flat_rate2">Flat rate</label>
                                                </li>
                                            </ul>

                                        </td>
                                    </tr>

                                     <tr>
                                        <th>Tax</th>
                                        <td>
                                            <span><bdi>{{Cart::tax()}}<span>&nbsp;DH</span></bdi>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Total</th>
                                        <td><strong><span class="woocommerce-Price-amount amount"><bdi>{{Cart::total()}}<span>DH</span></bdi></span></strong> </td>
                                    </tr>
                                </table>
                                <div class="wc-proceed-to-checkout">
                                    <a href="#" class="checkout-button">Passer au paiement</a>
                                </div>
                            </div>
                        </div>
                    </div>
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
            fetch(`shopping-cart/update/${rowId}`,
                {
                    headers: {
                        "Content-Type": "application/json",
                        "Accept": "application/json, text-plain, */*",
                        "X-Requested-With": "XMLHttpRequest",
                        "X-CSRF-TOKEN": token
                    },
                    method: 'post',
                    body: JSON.stringify({
                        qty: this.value
                    })
            }).then((data) => {
                console.log(data);
                location.reload();
            }).catch((error) => {
                console.log(error);
            });
        });
    });
</script>


  </script>
@endsection
