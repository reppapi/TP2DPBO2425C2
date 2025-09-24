<?php
require_once 'Appliance.php';

// Class SmartAppliance (Turunan dari Appliance)
class SmartAppliance extends Appliance {
    private $network;
    private $watt;
    private $system;
    private $color;

    public function __construct($id, $name, $brand, $year, $type, $warranty, $price, $stock, $network, $watt, $system, $color) {
        // Panggil constructor induk
        parent::__construct($id, $name, $brand, $year, $type, $warranty, $price, $stock);
        $this->network = $network;
        $this->watt = $watt;
        $this->system = $system;
        $this->color = $color;
    }

    // Getter
    public function getNetwork() { return $this->network; }
    public function getWatt() { return $this->watt; }
    public function getSystem() { return $this->system; }
    public function getColor() { return $this->color; }
}
?>