<?php
// Mảng
$name = 'Dung';
$name2 = 'Dung2';
$name3 = 'Dung3';

// khai bảo mảng
// c1 : [ ]
$arrNames = [];
$arrNames2 = array();

// Khởi tạo mảng có giá trị mặc định
$arrNames = [1,2,3];
$arrNames2 = array(1,2,3);

echo '<pre>';

print_r($arrNames);
// Lấy phần phần tử trong mảng = $ten_mang[chi_so]
echo 'Phần tử : '.$arrNames[1];

echo '<br>';
var_dump($arrNames2);

// Hàm Count
echo '<br>';
echo count($arrNames); // 3

echo '<br>';
echo count($arrNames2); // 3

echo '<br>';
// Hàm is_array() : kiểm tra 1 biến có phải là mảng hay không
var_dump(is_array($name)); // false
var_dump(is_array($arrNames)); // true

/*
 * Biểu thức điều kiện
 */
if (3 > 5) {
    echo 'sai';
}

if (3 > 5) {
    echo 'đúng';
} else {
    echo 'sai';
}

echo '<br>';
// dạng ngắn gọn của if ... else
// (điều_kiện) ? (biểu_thức_1 : sau if ) : (biểu_thức_2 : else)
$giatri = (4 > 5) ? 'lớn hơn' : 'nhỏ hơn';
echo $giatri;


echo '<br>';
$x = 4 ;
if ($x > 5) {
    echo '> 5';
} elseif ($x == 4) {
    echo ' == 4';
} elseif ($x >= 5) {
    echo ' >= 5';
} else {
    echo 'cuoi cung';
}

function so_sanh($x)
{
    if ($x == 1) {
        echo '1';
    } elseif ($x == 2) {
        echo 2;
    } elseif ($x == 3) {
        echo 3;
    } else {
        echo 'không khớp với bất kỳ giá trị nào';
    }
}

echo '<br>';
$ket_qua = so_sanh(1);
echo $ket_qua;

echo '<br>';
$ket_qua2 = so_sanh(99);
echo $ket_qua2;

echo '<br>';
// isset - kiểm tra một biến có tồn tại/định nghĩa chưa && khác null
if (isset($xyz)) {
    echo 'xyz tồn tại';
} else {
    echo 'xyz không tồn tại';
}

echo '<br>';

$y = '';
// empty - hàm kiểm tra biến có bằng  : 0 0.0 "0" "" NULL FALSE array()
if (empty($y)) {
    echo 'bằng rỗng';
} else {
    echo 'khác rỗng';
}

// !empty (isset && empty) - kiểm tra một biến có tồn tại và khác : 0 0.0 "0" "" NULL FALSE array()
if (!empty($z)) {
    echo 'tồn tại và khác rỗng';
} else {
    echo 'khác';
}

if (isset($z) && empty($z)) { // !empty($z)

}

// Foreach : Thường được sử dụng để duyệt các phần tử của một mảng
$arrNames3 = ['DEV1','DEV2','DEV3','DEV4'];

foreach ($arrNames3 as $index => $item) {
    echo '<br>'.$item;
}

// For
$so_luong = count($arrNames3);

for ($i = 0; $i < $so_luong; $i++) {
    echo '<br>'.$arrNames3[$i];
}







