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

<div class="shopping-cart">

    <div class="column-labels">
        <label class="product-image">Image</label>
        <label class="product-details">Product</label>
        <label class="product-price">Price</label>
        <label class="product-quantity">Quantity</label>
        <label class="product-removal">Remove</label>
        <label class="product-line-price">Total</label>
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
        <div class="product-image">
            <img src="./img/<?php echo $value['image'] ?>" width="100%">
        </div>
        <div class="product-details">
            <div class="product-title"><?php echo $value['name'] ?></div>
            <p class="product-description"><?php echo $value['description'] ?></p>
        </div>
        <div class="product-price"><?php echo $value['price'] ?></div>
        <div class="product-quantity">
            <input type="number" value=<?php echo $_SESSION['cart'][$id]['qty'] ?> min="1">
        </div>
        <div class="product-removal">
            <button class="remove-product">
                Remove
            </button>
        </div>
        <div class="product-line-price"><?php echo number_format($value['price']) ?></div>
    </div>
    <?php endforeach;
    ?>

    <div class="totals">
        <div class="totals-item">
            <label>Subtotal</label>
            <div class="totals-value" id="cart-subtotal">71.97</div>
        </div>
        <div class="totals-item">
            <label>Tax (5%)</label>
            <div class="totals-value" id="cart-tax">3.60</div>
        </div>
        <div class="totals-item">
            <label>Shipping</label>
            <div class="totals-value" id="cart-shipping">15.00</div>
        </div>
        <div class="totals-item totals-item-total">
            <label>Grand Total</label>
            <div class="totals-value" id="cart-total">90.57</div>
        </div>
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