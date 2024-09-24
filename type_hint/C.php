<?php
declare(strict_types=1);

require_once 'I.php';

class C implements I {
    public function f(): void {
        // Hiện thực phương thức f từ interface I
        echo "This is function f from class C.\n";
    }
}
