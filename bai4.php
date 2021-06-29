<h1>Bài 4 - Thao tác với tệp tin - file </h1>

<?php

// Ví dụ : Mở và ghi nội dung vào file
//Bước 1: Mở hoặc tạo mới file nếu chưa tồn tại
$file = fopen('hello.txt','a+');

// Bước 2 : Đọc hoặc ghi nội dung vào file
fwrite($file, 'Noi dung abc');

// Bước 3 : Đóng thao tác với tập tin hiện tại
fclose($file);


// Ví dụ 2: Mở và đọc nội dung của từng dòng
// Bước 1: Mở để đọc/ ghi
$file2 = fopen('hello2.txt','r+');

// Bước 2 : Đọc nội dung của file
while (!feof($file2)) { // kiểm tra chưa đến cuối file : hàm feof()
    echo fgets($file2). "<br />"; // đọc từng dòng
}

fclose($file2);


// Ví dụ 3: Mở và đọc nội dung của từng ký tự
// Bước 1: Mở để đọc/ ghi
$file3 = fopen('hello2.txt','r+');

// Bước 2 : Đọc nội dung của file
while (!feof($file3)) { // kiểm tra chưa đến cuối file : hàm feof()
    echo fgetc($file3).'<br>'; // đọc từng ký tự
}

fclose($file3);