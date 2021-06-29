<h1>Session - Cookie</h1>

<?php
// khởi tạo session bắt đầu làm việc
session_start();

$_SESSION['name'] = 'DEV'; // khai báo 1 session có tên là name

$_SESSION['gio_hang'] = ['sp1' => 'dieu hoa','sp2' => 'may-giat']; // 0,1

$_SESSION['dang_nhap'] = ['name' => 'Hoang Dung', 'email' => 'hcdung@gmail.com'];


// Lấy giá trị lưu trong session
$gio_hang = $_SESSION['gio_hang'];
print_r($gio_hang);

$dang_nhap = $_SESSION['dang_nhap'];
print_r($dang_nhap);

// COOKIE

echo time();

setcookie('user', 'Bkap', time() + 60*60); // thiết lập sống cho cookie  = 1h = 3600 = 60*60

//in ra giá trị của một cookie
echo '<br>'.$_COOKIE["user"];

// in ra giá trị của tất cả các cookie
print_r($_SESSION);
print_r($_COOKIE);

// Thiết lập cookie đã hết hạn từ 1 giờ cách đây
setcookie("user", "", time() - 1);
