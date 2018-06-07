<?php

class Cart {
    public $items = array();
    function __construct() {
        if (isset($_SESSION['cart'])) { $this->items = $_SESSION['cart']; } else { $_SESSION['cart'] = ""; }
    }
    
    private function update() {
        $_SESSION['cart'] = $this->items;
    }   

    public function add($product,$quantity) {
        $this->items[] = array(
            'product' => $product,
            'quantity' => $quantity
        );
        $this->update();
    }
    public function emptyCart() {
        global $_SESSION;
        unset($_SESSION['cart']);
    }
}

?>