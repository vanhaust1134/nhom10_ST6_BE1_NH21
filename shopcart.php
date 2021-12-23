<?php
session_start();
//session_destroy();
if(isset($_SESSION['cart'])){
	//echo "<pre />";
	var_dump($_SESSION['cart']);
}
?>
<?php
include "header.php";
?>

<!-- CART -->
<h1 class="shop-cart">Your Cart</h1>

<div class="shopping-cart1">

    <div class="column-labels1">
        <label class="product-image1">Image</label>
        <label class="product-details1">Product</label>
        <label class="product-price1">Price</label>
        <label class="product-quantity1">Quantity</label>
        <label class="product-removal1">Remove</label>
        <label class="product-line-price1">Total</label>
    </div>

    <?php
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        if(isset($_SESSION['cart']))
        {
            if(isset($_SESSION['cart'][$id])){
                $_SESSION['cart'][$id]['qty']++;
            }
            else
            {
                $_SESSION['cart'][$id]['qty'] = 1;
            }
            $_SESSION['success']='Thêm thành công';

        }
        else
        {
            $_SESSION['cart'][$id] = 1;
            $_SESSION['success']='Tạo mới thành công';
        }
        $getProductsById = $product->getProductsById($id);
        $_SESSION['cart'][$id] = $getProductsById;
        foreach($_SESSION['cart'][$id] as $value):
?>
    <div class="products">
        <div class="product-image1">
            <img src="./img/<?php echo $value['image'] ?>" width="100%">
        </div>
        <div class="product-detail1s">
            <div class="product-title1"><?php echo $value['name'] ?></div>
            <p class="product-description1"><?php echo $value['description'] ?></p>
        </div>
<<<<<<< HEAD
        <div class="product-price1"><?php echo $value['price'] ?></div>
        <div class="product-quantity1">
            <input type="number" value="2" min="1">
=======
        <div class="product-price"><?php echo $value['price'] ?></div>
        <div class="product-quantity">
            <input type="number" value=<?php echo $_SESSION['cart'][$id]['qty'] ?> min="1">
>>>>>>> bb423c1ac9d843fbd33483c2cc2b4f7d9d1e7a52
        </div>
        <div class="product-removal1">
            <button class="remove-product1">
                Remove
            </button>
        </div>
        <div class="product-line-price1"><?php echo number_format($value['price']) ?></div>
    </div>
    <?php endforeach;
    ?>

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
        <a href="index.php">
        <button class="checkout">Back</button>
        </a>
        <button class="checkout">Checkout</button>
    </div>

</div>
<!-- CART -->

<?php
include "footer.html";
?>