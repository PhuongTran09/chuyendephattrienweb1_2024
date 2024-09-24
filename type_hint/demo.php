<?php
declare(strict_types=1);

require_once 'A.php';
require_once 'B.php';
require_once 'C.php';
require_once 'I.php';

class Demo {
    public function typeAReturnA(): A {
        echo __FUNCTION__ . "<br>";
        return new A();
    }

    public function typeAReturnB(): A {
        echo __FUNCTION__ . "<br>";
        return new B();
    }

    public function typeAReturnC(): ?C {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    public function typeAReturnI(): ?I {
        echo __FUNCTION__ . "<br>";
        return null; // Không thể trả về interface I trực tiếp
    }

    public function typeAReturnNull(): ?C {
        echo __FUNCTION__ . "<br>";
        return null;
    }

    // Các phương thức cho typeB
    public function typeBReturnA(): ?A {
        echo __FUNCTION__ . "<br>";
        return new A();
    }

    public function typeBReturnB(): ?B {
        echo __FUNCTION__ . "<br>";
        return new B();
    }

    public function typeBReturnC(): ?C {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    public function typeBReturnI(): ?I {
        echo __FUNCTION__ . "<br>";
        return null;
    }

    public function typeBReturnNull(): ?B {
        echo __FUNCTION__ . "<br>";
        return null;
    }

    // Các phương thức cho typeC
    public function typeCReturnA(): ?A {
        echo __FUNCTION__ . "<br>";
        return new A();
    }

    public function typeCReturnB(): ?B {
        echo __FUNCTION__ . "<br>";
        return new B();
    }

    public function typeCReturnC(): C {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    public function typeCReturnI(): ?I {
        echo __FUNCTION__ . "<br>";
        return null;
    }

    public function typeCReturnNull(): ?C {
        echo __FUNCTION__ . "<br>";
        return null;
    }

    // Các phương thức cho typeI
    public function typeIReturnA(): ?A {
        echo __FUNCTION__ . "<br>";
        return new A();
    }

    public function typeIReturnB(): ?B {
        echo __FUNCTION__ . "<br>";
        return new B();
    }

    public function typeIReturnC(): ?C {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    public function typeIReturnI(): ?I {
        echo __FUNCTION__ . "<br>";
        return null;
    }

    public function typeIReturnNull(): ?C {
        echo __FUNCTION__ . "<br>";
        return null;
    }

    // Các phương thức cho typeNull
    public function typeNullReturnA(): ?A {
        echo __FUNCTION__ . "<br>";
        return null;
    }

    public function typeNullReturnB(): ?B {
        echo __FUNCTION__ . "<br>";
        return null;
    }

    public function typeNullReturnC(): ?C {
        echo __FUNCTION__ . "<br>";
        return null;
    }

    public function typeNullReturnI(): ?I {
        echo __FUNCTION__ . "<br>";
        return null;
    }

    public function typeNullReturnNull(): ?C {
        echo __FUNCTION__ . "<br>";
        return null;
    }
}

// Tạo đối tượng demo và gọi tất cả phương thức để kiểm tra
$demo = new Demo();
$demo->typeAReturnA();
$demo->typeAReturnB();
$demo->typeAReturnC();
$demo->typeAReturnI();
$demo->typeAReturnNull();

$demo->typeBReturnA();
$demo->typeBReturnB();
$demo->typeBReturnC();
$demo->typeBReturnI();
$demo->typeBReturnNull();

$demo->typeCReturnA();
$demo->typeCReturnB();
$demo->typeCReturnC();
$demo->typeCReturnI();
$demo->typeCReturnNull();

$demo->typeIReturnA();
$demo->typeIReturnB();
$demo->typeIReturnC();
$demo->typeIReturnI();
$demo->typeIReturnNull();

$demo->typeNullReturnA();
$demo->typeNullReturnB();
$demo->typeNullReturnC();
$demo->typeNullReturnI();
$demo->typeNullReturnNull();
?>
