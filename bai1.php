<?php
    // Quy tắc để đặt tên biến - hàm
    // $ten_chuc_nang
    // $tenChucNang

    // Chú Thích 1

    /*
     * Chú thích 2
     */

    // định nghĩa biến : $tên_biên ,
    $tuoi = 32; // number
    $ten = "Dung Hoang"; // String

    echo $tuoi;

    echo '<br>';

    echo $ten; // không được dùng để hiển kiểu dữ liệu mảng + Không hỗ hiển thị kiểu dữ kiệu

    echo '<br>';

    print_r($ten); // hỗ trợ hiển tất cả các loại kiểu dữ liệu + Không hỗ hiển thị kiểu dữ kiệu

    echo '<br>';
    var_dump($tuoi); // hỗ trợ hiển tất cả các loại kiểu dữ liệu + hiển thị cả kiểu dữ liệu của  biêns

    echo '<br>';
    var_dump($ten);

    // Phân biệt sử dụng dấu ' và "

    $name = 'Dung';
    $age = "32";

    // VD:
    // Khi khai báo biến sử dụng dấu nháy " , thì chúng ta có thể truyền giá của biến khác vào trong chuỗi
    $abc = "Xin chào ";
    echo $abc; // Xin chào Dung

    $txt2 = 'Xin chào';
    echo $txt2; // Xin chào $name


    echo '<br>';

    // ép kiểu dữ liệu , chuyển đổi kiểu dữ liệu
    $a = 3.2; // số thực
    var_dump($a); // 3.2

    echo '<br>';

    $b = (int) $a; // 3
    var_dump($b);

    // Kiểu dữ liệu boolean
    $c = true; // boolean
    $d = false; // boolean

    echo '<br>';
    echo $c;

    echo '<br>';
    echo $d;

    print_r($d);
    var_dump($d);

    // Hàm - function || phương thức - method
    // hàm có nhiệm vụ thực hiện một chức nào đó do người dùng tự quy định , đóng gói trong biểu thức có cú pháp
    function hello()
    {
        echo 'function : xin chao';
    }

    // cách gọi / sử dụng hàm : ten_ham();
    hello();

    // Hàm có tham có tham số : có thể nhận vào giá trị biến
    function hello2($name)
    {
        echo 'xin chao '.$name;
    }

    hello2('DEV');

    $name = 'test';

    // Đ/N hàm có nhiều thamso
    function hello3($name, $age, $address)
    {
        echo "Xin chào : $name, Tuổi : $age, Đ/c : $address";
    }

    hello3('Dung', 32, 'HN'); // Xin chào : Dung, Tuổi : 32 , Đ/C : hn
    hello3('DEV', 10, 'HN'); // Xin chào : Dung, Tuổi : 32 , Đ/C : hn



?>