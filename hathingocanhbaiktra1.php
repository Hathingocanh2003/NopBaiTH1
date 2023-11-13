
/*Bai kiem tra 
Trac nghiem : 
Cau 1 : 10
Cau 2 : b-20
Cau 3 : d
Cau 4 : a
Cau 5 : a*/

<?php
// Bài 1:
// Hàm kiểm tra số nguyên tố
function isPrime($number) {
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}
// Kiểm tra xem số 5 có phải là số nguyên tố hay không
$numberToCheck = 5;
if (isPrime($numberToCheck)) {
    echo $numberToCheck . " là số nguyên tố. <br>";
} else {
    echo $numberToCheck . " không là số nguyên tố. <br>";
}

// Hiển thị danh sách các số nguyên tố từ 1 đến 100
echo "Các số nguyên tố từ 1 đến 100 là: <br>";
for ($i = 1; $i <= 100; $i++) {
    if (isPrime($i)) {
        echo $i . " ";
    }
}

?>
<?php // Bài 2: 
echo "Bài 2: <br>";
// Khai báo mảng
$products = [
    [
        "name" => "Bánh mì ",
        "price" => 15000,
        "quantity" => 20
    ],
    [
        "name" => "Sữa",
        "price" => 8000,
        "quantity" => 10
    ],
    [
        "name" => "Nước ngọt",
        "price" => 20000,
        "quantity" => 20
    ],
    [
      "name" => "Bim bim",
      "price" => 24000,
      "quantity" => 15
    ],

];
// Hiển thị thông tin sản phẩm
foreach ($products as $product) {
    echo "Tên sản phẩm: " . $product['name'] . "<br>";
    echo "Giá: " . $product['price'] . "<br>";
    echo "Số lượng: " . $product['quantity'] . "<br>";
  
}

// Hàm tính tổng giá trị sản phẩm
function tinhTongGiaTri($products) {
    $tongGiaTri = 0;

    foreach ($products as $product) {
        $tongGiaTri += $product['price'] * $product['quantity'];
    }

    return $tongGiaTri;
}

$tongGiaTri = tinhTongGiaTri($products);
echo "Tổng giá trị của tất cả sản phẩm là: " . $tongGiaTri . "<br>";

?>

