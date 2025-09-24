<?php
class Electronic {
    protected $id;
    protected $name;
    protected $brand;
    protected $year;

    public function __construct($id, $name, $brand, $year) {
        $this->id = $id;
        $this->name = $name;
        $this->brand = $brand;
        $this->year = $year;
    }

    // Getter
    public function getId() { return $this->id; }
    public function getName() { return $this->name; }
    public function getBrand() { return $this->brand; }
    public function getYear() { return $this->year; }
}
?>