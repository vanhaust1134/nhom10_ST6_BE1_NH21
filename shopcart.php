<?php
include "header.php";
?>

<!-- CART -->
<h1 class="shop-cart">Your Cart</h1>

<div class="shopping-cart">

    <div class="column-labels1">
        <label class="product-image1">Image</label>
        <label class="product-details1">Product</label>
        <label class="product-price1">Price</label>
        <label class="product-quantity1">Quantity</label>
        <label class="product-removal1">Remove</label>
        <label class="product-line-price1">Total</label>
    </div>

    <div class="products">
        <div class="product-image1">
            <img src="https://s.cdpn.io/3/dingo-dog-bones.jpg" width="100%">
        </div>
        <div class="product-details1">
            <div class="product-title">Dingo Dog Bones</div>
            <p class="product-description">The best dog bones of all time. Holy crap. Your dog will be begging for
                these things! I got curious once and ate one myself. I'm a fan.</p>
        </div>
        <div class="product-price1">12.99</div>
        <div class="product-quantity1">
            <input type="number" value="2" min="1">
        </div>
        <div class="product-removal1">
            <button class="remove-product">
                Remove
            </button>
        </div>
        <div class="product-line-price1">25.98</div>
    </div>

    <div class="products">
        <div class="product-image1">
            <img src="https://s.cdpn.io/3/large-NutroNaturalChoiceAdultLambMealandRiceDryDogFood.png" width="100%">
        </div>
        <div class="product-details1">
            <div class="product-title">Nutro™ Adult Lamb and Rice Dog Food</div>
            <p class="product-description">Who doesn't like lamb and rice? We've all hit the halal cart at 3am while
                quasi-blackout after a night of binge drinking in Manhattan. Now it's your dog's turn!</p>
        </div>
        <div class="product-price1">45.99</div>
        <div class="product-quantity1">
            <input type="number" value="1" min="1">
        </div>
        <div class="product-removal1">
            <button class="remove-product">
                Remove
            </button>
        </div>
        <div class="product-line-price1">45.99</div>
    </div>

    <div class="totals">
        <div class="totals-item1">
            <label>Subtotal</label>
            <div class="totals-value1" id="cart-subtotal">71.97</div>
        </div>
        <!-- <div class="totals-item1">
            <label>Tax (5%)</label>
            <div class="totals-value1" id="cart-tax">3.60</div>
        </div>
        <div class="totals-item1">
            <label>Shipping</label>
            <div class="totals-value1" id="cart-shipping">15.00</div>
        </div>
        <div class="totals-item1 totals-item-total">
            <label>Grand Total</label>
            <div class="totals-value1" id="cart-total">90.57</div>
        </div> -->
    </div>
    <div class="check">
        <button class="checkout">Checkout</button>
    </div>

</div>
<!-- CART -->

<?php
include "footer.html";
?>