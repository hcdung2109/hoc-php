<h1>OOP - Lập trình hướng đối tượng</h1>

<?php
/*
 nhóm đối tương Sinh Viên:
--- Thông tin cá nhân
 + mã sinh viên
 + tên
 + tuổi
 + ngày sinh
 + quê quán
--- Hành động
 + dangkyhocphan
 + thihocky - môn
 + thilai

=>  Trừu tượng hóa đối tượng SV vào => lập trình
 */

// Cách tên dăt class = ClassName
// Lóp Class = property + method
class Home
{


    function getDetailProduct()
    {

        // - lấy thông tin chi tiêt sản phẩm
    }

    function getThongTinSimThe()
    {

        // -- lấy thông tin sim thẻ
    }
}

class Student // đại diên đối tượng
{
    // hàm khởi tạo : hàm + có thể có tham số/không
    // Hàm khởi tạo luôn được tự động gọi khi lớp được được sử dụng và luôn chạy trước các hàm khác
    public function __construct()
    {
        echo 'hàm khởi tạo đã chạy';
    }


    // property - Thuộc tính <==> Thông tin cá nhân
    public $id; // mã sv
    public $name; // tên sv
    public $age; // tuổi sv
    public $date; // tuổi
    public $address; // địa chỉ

    // Phương thức <==> hành động
    function dang_ky_hoc_phan()
    {
        echo 'đăng ký học phần';
    }

    function thi_hoc_ky()
    {
        echo 'thi hoc ky';
    }

    function show_name()
    {
        //echo 'sinh vien a';
        echo $this->name;
    }

    function show_address()
    {
        echo 'test';
    }
}

// Sử dụng Class

// tạo ra 1 đối tượng cụ thể từ lớp
//$sinh_vien_a = new Student(); // khởi tạo đối tượng mới từ lớp
//$sinh_vien_a->name = 'Nguyen Van A'; // gọi đến thuộc tính của lớp
//$sinh_vien_a->show_name(); // gọi đến phương thức của lớp
//
//
//$sinh_vien_b = new Student();
//$sinh_vien_b->name = 'Nguyen Van B';
//$sinh_vien_b->show_name();

$sinh_vien_c = new Student(); // __construct()
$sinh_vien_c->show_address();

