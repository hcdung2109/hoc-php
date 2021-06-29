<h1>Bài 4 - Thao tác với tệp tin - file </h1>

<?php
//Bước 1: Mở hoặc tạo mới file nếu chưa tồn tại
$file = fopen('hello.txt','a+');

// Bước 2 : Đọc hoặc ghi nội dung vào file
fwrite($file, 'Noi dung abc');

// Bước 3 : Đóng thao tác với tập tin hiện tại
fclose($file);


/*$file2 = fopen('test2.txt','r+');

while (!feof($file2)) { // kiểm tra chưa đến cuối file : hàm feof
    echo fgets($file2). "<br />"; // đọc từng dòng
    //echo fgetc($file2).'<br>'; // đọc từng ký tự
}

fclose($file2);*/