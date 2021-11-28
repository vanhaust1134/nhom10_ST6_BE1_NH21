<?php
session_start();
if(isset($_SESSION['cart'])){
	//echo "<pre />";
	//var_dump($_SESSION['cart']);
}
?>
<?php
        if(isset($_SESSION['cart']))
        {
            if(isset($_SESSION['cart'][$id])){
                $_SESSION['cart'][$id]['qty']+=1;
            }
            else
            {
                $_SESSION['cart'][$id]['qty']=1;
            }
            $_SESSION['success']='Thêm thành công';

        }
        else
        {
            $_SESSION['cart'][$id]['qty'] = 1;
            $_SESSION['success']='Tạo mới thành công';
        }
        $getProductsById = $product->getProductsById($id);
        foreach ($getProductsById as $value):
?>