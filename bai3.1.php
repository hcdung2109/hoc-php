<h1>include - triệu tập file khác vào trong file hiện tại </h1>
<?php

// Hàm include() sinh ra một cảnh báo (Warning), nhưng script vẫn tiếp tục được thực thi.
// Hàm require() sinh ra một Fatal Error, và script sẽ dừng lại ở đó.

include 'bai3.2.php';
include_once 'bai3.2.php'; // kiểm tra xem file đã được import lần nào chưa. nếu đã dược import thì bỏ qua
// include 'bai3.2.2.php';
require 'bai3.3.php';
require_once 'bai3.3.php'; // kiểm tra xem file đã được import lần nào chưa. nếu đã dược import thì bỏ qua
//require 'bai3.3.3.php';

echo 'cuoi file';