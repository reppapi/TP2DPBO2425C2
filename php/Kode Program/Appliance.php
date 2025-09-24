<?php
require_once 'Electronic.php';

class Appliance extends Electronic {
    protected $type;
    protected $warranty;
    protected $price;
    protected $stock;

    public function __construct($id, $name, $brand, $year, $type, $warranty, $price, $stock) {
        // Panggil constructor induk
        parent::__construct($id, $name, $brand, $year);
        $this->type = $type;
        $this->warranty = $warranty;
        $this->price = $price;
        $this->stock = $stock;
    }

    // Getter
    public function getType() { return $this->type; }
    public function getWarranty() { return $this->warranty; }
    public function getPrice() { return $this->price; }
    public function getStock() { return $this->stock; }
}
?>