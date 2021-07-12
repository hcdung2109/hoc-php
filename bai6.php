<h1>Bai 6 - Tiếp tục OOP</h1>
<?php

class Other
{
    public function example()
    {

    }

}

// lớp cha
class General
{
    public function __construct()
    {
        // - lây thong danh mục
        // - lấy thông tin cơ bản của website (hotlie, email,..)
    }

    public function example()
    {
        echo '<br> ke thua';
    }

    protected function exampleProtected()
    {
        echo '<br> ke thua - hàm proteced';
    }
}

// lớp con
/*
 * Lớp con kế thừa được sử dụng tất cả những thuộc tính hoặc phương thức của lớp cha có phạm vi là protected/public
 */
class Department extends General
{
    public $name;
    private $id;

    public function __construct()
    {

    }

    // hàm - lấy danh sách phòng ban
    function getListDepartment() // public
    {
        echo 'ds phong ban';
    }

    public function getDetailDepartment()
    {
        echo 'chi tiet phong ban';
    }

    protected function getProtectedDepartment()
    {
        echo '<br> lay phong ban - protected';
    }

    public function testProtected()
    {
        $this->getProtectedDepartment();
    }

    private function getPrivateDepartment()
    {
        echo '<br> lay phong ban - private';
    }

    public function testPrivate()
    {
        $this->getPrivateDepartment();
    }

    // kế thừa method
    public function testExtends()
    {
        $this->example();
    }

    public function testExtendsProtected()
    {
        $this->exampleProtected();
    }

}


$pb_kettoan = new Department(); // object
$pb_kettoan->getListDepartment();
$pb_kettoan->getDetailDepartment();

// Public : có thể truy cập được đến biên hoặc phương thức ở phậm vị ngoài Class

//$pb_kettoan->getProtectedDepartment();
/*
 * Protected : hàm hoặc biến được khai báo là protected thì có thể được gọi lớp kế thừa, hoặc trong nội tại lớp
 * nhưng có thể được truy xuất thông qua một hàm public
 *
 */

$pb_kettoan->testProtected();


// $pb_kettoan->getPrivateDepartment();
/*
 * private : hàm hoặc biến được khai báo là protected chỉ được gọi  trong nội tại lớp
 * nhưng có thể được truy xuất thông qua một hàm khác của lớp
 */

$pb_kettoan->testPrivate();

// ví dụ kết thừa
$pb_kettoan->testExtends();

// vi dú kế thừa - protected
$pb_kettoan->testExtendsProtected();


// interface

interface DongVat {
    public function an();

    public function uong();

    public function di();
}

class ConTrau implements DongVat
{
    public function an()
    {
        // TODO: Implement an() method.
    }

    public function uong()
    {
        // TODO: Implement uong() method.
    }

    public function di()
    {
        // TODO: Implement di() method.
    }
}
