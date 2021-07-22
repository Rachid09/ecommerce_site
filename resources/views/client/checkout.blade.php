@extends('layouts.client')
@section('custom-css')
<link rel="stylesheet" href="{{asset("public/css/category/minimal.css")}}">
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

  <!--==================== Checkout Section Start ====================-->
  <div id="main-content" class="full-row site-content">
      <div class="container">
          <div class="row ">
              <div id="primary" class="content-area col-md-12">
                  <article id="post-19" class="post-19 page type-page status-publish hentry">
                      <div class="entry-content">
                          <div class="woocommerce">
                              <div class="woocommerce-notices-wrapper"></div>
                              <div class="woocommerce-form-login-toggle">
                                  <div class="woocommerce-info">
                                      Devenir un client? <a href="{{route('client.login')}}" class="showlogin">Cliquer ici pour se connecter </a> </div>
                              </div>

                              <div class="woocommerce-form-coupon-toggle">
                                  <div class="woocommerce-info">
                                      possède un coupon? <a href="#" class="showcoupon">Cliquer ici pour entrer le code</a> </div>
                              </div>
                              <form name="checkout" method="post" class="checkout woocommerce-checkout" action="{{route('checkout')}}" enctype="multipart/form-data" novalidate="novalidate">
                                @csrf

                                <div class="row">
                                      <div class="col-lg-7">
                                          <div class="col2-set" id="customer_details">
                                              <div class="woocommerce-billing-fields">
                                                  <h3>Details de la livraison</h3>
                                                  <div class="woocommerce-billing-fields__field-wrapper">
                                                      {{-- @error('first_name')
                                                           <span class="text-danger" style="display: hidden">{{$message}}</span>
                                                      @enderror</div> --}}
                                                      <p class="form-row form-row-first validate-required" id="first_name_field" data-priority="10">
                                                          <label for="first_name" class="">Prénom&nbsp;<abbr class="required" title="required">*</abbr></label>
                                                          <span class="woocommerce-input-wrapper">
                                                              <input type="text" class="input-text " name="first_name" id="first_name" placeholder="" value="" autocomplete="given-name">
                                                          </span>

                                                      </p>
                                                      <p class="form-row form-row-last validate-required" id="last_name_field" data-priority="20">
                                                          <label for="last_name" class="">Nom&nbsp;<abbr class="required" title="required">*</abbr></label>
                                                          <span class="woocommerce-input-wrapper">
                                                              <input type="text" class="input-text " name="last_name" id="last_name" placeholder="" value="" autocomplete="family-name">
                                                          </span>
                                                      </p>

                                                    <p class="form-row form-row-wide address-field update_totals_on_change validate-required" id="country_field" data-priority="40">
                                                                <label for="country" class="">Pays <abbr class="required" title="required">*</abbr></label>
                                                                <span class="woocommerce-input-wrapper">
                                                                    <select name="city" id="country" class="country_to_state country_select" autocomplete="country" tabindex="-1" aria-hidden="true">
                                                                        <option value="default">choisissez une pays / region…</option>
                                                                         <option value="maroc">Maroc</option>
                                                                        <option value="AF">Afghanistan</option>
                                                                        <option value="AX">Åland Islands</option>
                                                                        <option value="AL">Albania</option>
                                                                        <option value="DZ">Algeria</option>
                                                                        <option value="AS">American Samoa</option>
                                                                        <option value="AD">Andorra</option>
                                                                        <option value="AO">Angola</option>
                                                                    </select>
                                                                </span>
                                                            </p>
                                                            <p class="form-row form-row-wide address-field update_totals_on_change validate-required" id="country_field" data-priority="40">
                                                                <label for="country" class="">Ville<abbr class="required" title="required">*</abbr></label>
                                                                <span class="woocommerce-input-wrapper">
                                                                    <select name="country" id="country" class="country_to_state country_select" autocomplete="country" tabindex="-1" aria-hidden="true">
                                                                        <option value="default">choisissez une ville / region…</option>
                                                                         <option value="casablanca">Casablanca</option>
                                                                        <option value="AF">Afghanistan</option>
                                                                        <option value="AX">Åland Islands</option>
                                                                        <option value="AL">Albania</option>
                                                                        <option value="DZ">Algeria</option>
                                                                        <option value="AS">American Samoa</option>
                                                                        <option value="AD">Andorra</option>
                                                                        <option value="AO">Angola</option>
                                                                    </select>
                                                                </span>
                                                            </p>
                                                      <p class="form-row address-field validate-required form-row-wide" id="address_1_field" data-priority="50">
                                                          <label for="address_1" class="">Adresse&nbsp;<abbr class="required" title="required">*</abbr></label>
                                                          <span class="woocommerce-input-wrapper">
                                                              <input type="text" class="input-text " name="address" id="address_1" placeholder="" value="" autocomplete="address-line1" data-placeholder="House number and street name">
                                                          </span>
                                                      </p>

                                                      <p class="form-row form-row-wide validate-required validate-phone" id="phone_field" data-priority="100">
                                                          <label for="phone" class="">Téléphone&nbsp;<abbr class="required" title="required">*</abbr></label>
                                                          <span class="woocommerce-input-wrapper">
                                                              <input type="tel" class="input-text " name="phone" id="phone" placeholder="" value="" autocomplete="tel">
                                                          </span>
                                                      </p>
                                                      <p class="form-row form-row-wide validate-required validate-email" id="email_field" data-priority="110">
                                                          <label for="email" class="">Email&nbsp;<abbr class="required" title="required">*</abbr></label>
                                                          <span class="woocommerce-input-wrapper">
                                                              <input type="email" class="input-text " name="email" id="email" placeholder="" value="" autocomplete="email">
                                                          </span>
                                                      </p>
                                                  </div>
                                              </div>

                                               <div class="woocommerce-additional-fields">
                                                  <div class="woocommerce-additional-fields__field-wrapper">
                                                      <p class="form-row notes" id="order_comments_field" data-priority=""><label for="order_comments" class="">Order notes&nbsp;<span class="optional">(optional)</span></label><span class="woocommerce-input-wrapper"><textarea name="order_comments" class="input-text " id="order_comments" placeholder="Notes about your order, e.g. special notes for delivery." rows="2" cols="5"></textarea></span></p>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-lg-5">
                                          <div class="order-review-inner">
                                              <h3 id="order_review_heading">Votre commande</h3>
                                              <div id="order_review" class="woocommerce-checkout-review-order">
                                                  <table class="shop_table woocommerce-checkout-review-order-table">
                                                      <thead>
                                                          <tr>
                                                              <th class="product-name">Produit</th>
                                                              <th class="product-total">Subtotal</th>
                                                          </tr>
                                                      </thead>
                                                      <tbody>
                                                          @foreach (Cart::content() as $item)
                                                          <tr class="cart_item">
                                                              <td class="product-name">
                                                                  {{$item->model->name}}&nbsp; <strong class="product-quantity">×&nbsp;{{$item->qty}}</strong> </td>
                                                              <td class="product-total">
                                                                  <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>{{$item->subtotal()}}</bdi>
                                                                  </span>
                                                              </td>
                                                          </tr>

                                                          @endforeach

                                                      </tbody>
                                                      <tfoot>
                                                          <tr class="cart-subtotal">
                                                              <th>Subtotal</th>
                                                              <td><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>{{Cart::subtotal()}}</bdi>
                                                                  </span>
                                                              </td>
                                                          </tr>
                                                          {{-- <tr class="woocommerce-shipping-totals shipping">
                                                              <th>Shipping</th>
                                                              <td data-title="Shipping">
                                                                  <ul id="shipping_method" class="woocommerce-shipping-methods">
                                                                      <li>
                                                                          <input type="radio" name="shipping_method[0]" data-index="0" id="shipping_method_0_free_shipping1" value="free_shipping:1" class="shipping_method" checked="checked">
                                                                          <label for="shipping_method_0_free_shipping1">Free shipping</label>
                                                                      </li>
                                                                      <li>
                                                                          <input type="radio" name="shipping_method[0]" data-index="0" id="shipping_method_0_flat_rate2" value="flat_rate:2" class="shipping_method">
                                                                          <label for="shipping_method_0_flat_rate2">Flat rate</label>
                                                                      </li>
                                                                  </ul>
                                                              </td>
                                                          </tr> --}}
                                                          <tr class="order-total">
                                                              <th>Total</th>
                                                              <td><strong><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>{{Cart::total()}}</bdi></span></strong> </td>
                                                          </tr>
                                                      </tfoot>
                                                  </table>
                                                  <div id="payment" class="woocommerce-checkout-payment">
                                                      <ul class="wc_payment_methods payment_methods methods">
                                                          <li class="wc_payment_method payment_method_cod">
                                                              <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="cod" data-order_button_text="">

                                                              <label for="payment_method_cod">
                                                  COD 	</label>
                                                              <div class="payment_box payment_method_cod">
                                                                  <p>Payez en espèces à la livraison.</p>
                                                              </div>
                                                          </li>
                                                          <li class="wc_payment_method payment_method_paypal">
                                                              <input id="payment_method_paypal" type="radio" class="input-radio" name="payment_method" value="paypal" data-order_button_text="Proceed to PayPal">

                                                              <label for="payment_method_paypal">
                                                  PayPal <img src="https://www.paypalobjects.com/webstatic/mktg/Logo/AM_mc_vs_ms_ae_UK.png" alt="PayPal acceptance mark"><a href="https://www.paypal.com/gb/webapps/mpp/paypal-popup" class="about_paypal" onclick="javascript:window.open('https://www.paypal.com/gb/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;">What is PayPal?</a>	</label>
                                                              <div class="payment_box payment_method_paypal">
                                                                  <p>Payer via PayPal; vous pouvez payer avec votre carte de crédit si vous n'avez pas de compte PayPal.</p>
                                                              </div>
                                                          </li>
                                                      </ul>
                                                      <div class="form-row place-order">
                                                          <noscript>
                                                      Since your browser does not support JavaScript, or it is disabled, please ensure you click the <em>Update Totals</em> button before placing your order. You may be charged more than the amount stated above if you fail to do so.			<br/><button type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="Update totals">Update totals</button>
                                                  </noscript>

                                                          <div class="" style="display:flex;justify-content:space-around; align-items: center">
                                                               <button type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="Place order" data-value="Place order">Valider la commande</button>
                                                               <a href="{{route('shopping-cart')}}" class="button btn-alert alt" name="woocommerce_checkout_place_order" id="place_order" value="Place order" data-value="Place order">Retour au panier</a>
                                                          </div>


                                                          <input type="hidden" id="woocommerce-process-checkout-nonce" name="woocommerce-process-checkout-nonce" value="a44d43c9ca"><input type="hidden" name="_wp_http_referer" value="/wordpress/foden/?wc-ajax=update_order_review">                                                                </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                      <!-- .entry-content -->
                  </article>
                  <!-- #post-## -->
              </div>
              <!-- .entry-content-wrapper -->
          </div>
          <!-- .row -->
      </div>
      <!-- .container -->
  </div>
  <!--==================== Checkout Section End ====================-->


  @endsection
