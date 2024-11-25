<?php
$row_sanpham = null;
$sanpham=0;
if (isset($_GET['id'])) {
    $sanpham = $_GET['id'];
    $query_sanpham = mysqli_query($con, "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.sanpham_id='$sanpham' ");
    $row_sanpham = mysqli_fetch_array($query_sanpham);
}

if (!$row_sanpham) {
    echo "Sản phẩm không tồn tại. " . $sanpham;
    exit;
}
?>

<?php
$quantity = 1;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $quantity = $_POST['quantity'];
    if (isset($_POST['increment'])) {
        $quantity++;
    } elseif (isset($_POST['decrement']) && $quantity > 1) {
        $quantity--;
    }
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm</title>
    <link rel="stylesheet" href="category/sanpham.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="product-container">
            <div class="product-image">
                <img src="../uploads/<?php echo $row_sanpham['sanpham_image'] ?>" alt="<?php echo $row_sanpham['sanpham_name']; ?>">
            </div>
            <div class="product-details">
                <h1 class="product-title"><?php echo $row_sanpham['sanpham_name']; ?></h1>
                <p class="product-description"><?php echo $row_sanpham['sanpham_mota']; ?></p>
                <div class="product-price">
                    <span class="price-value"><?php echo number_format($row_sanpham['sanpham_giakhuyenmai'], 3, '.', '.'); ?> đ</span>
                </div>
                <p class="price-nodiscount">
                    <span class="price-old"><?php echo number_format($row_sanpham['sanpham_gia'], 3, '.', '.') ?> đ</span>
                </p>
                <form method="post" class="product-form">
                    <div class="quantity-selector">
                        <button type="submit" name="decrement" class="quantity-btn">-</button>
                        <input type="number" name="quantity" value="<?php echo $quantity; ?>" readonly class="quantity-input">
                        <button type="submit" name="increment" class="quantity-btn">+</button>
                    </div>
                    <button type="submit" name="add-to-cart" class="add-to-cart">
                        Thêm vào giỏ hàng
                    </button>
                </form>
            </div>
        </div>
    </div>
    <?php
    // PHP code for adding to cart (unchanged)
    ?>
</body>
</html>
    <?php
if (isset($_POST['add-to-cart'])) {
    $id =(int)$_GET['id'];
    $soluong = (int)$_POST['quantity']; // Lấy số lượng từ form
    if (isset($_SESSION['giohang']) && !empty($_SESSION['giohang'])) {
        $found = 0;
        // Duyệt qua các sản phẩm trong giỏ hàng
        foreach ($_SESSION['giohang'] as &$cart_item) {
            if ($cart_item['id'] ==$id) {
                $cart_item['soluong'] += $soluong;
                $found = 1;
                break;
            }
        }
        unset($cart_item);
        // Nếu sản phẩm chưa có trong giỏ hàng, thêm mới
        if ($found==0) {
            $_SESSION['giohang'][] = array('id' => $id, 'soluong' => $soluong);
        }
    } else {
        // Nếu giỏ hàng chưa tồn tại, khởi tạo giỏ hàng với sản phẩm đầu tiên
        $_SESSION['giohang'] = array(array('id' => $id, 'soluong' => $soluong));
    }
}
    ?>
</body>
</html>
