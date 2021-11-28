<?php
session_start();
?>
<?php
include "header.php";
?>

<!-- CART -->
<h1 class="shop-cart">Your Wishlist</h1>

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
    if(isset($_GET['id'])):
        $id = $_GET['id'];
        $getProductsById = $product->getProductsById($id);
            foreach ($getProductsById as $value):
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
            <input type="number" value="2" min="1">
        </div>
        <div class="product-removal">
            <button class="remove-product">
                Remove
            </button>
        </div>
        <div class="product-line-price"><?php echo number_format($value['price']) ?></div>
    </div>
    <?php endforeach; endif;
    ?>

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