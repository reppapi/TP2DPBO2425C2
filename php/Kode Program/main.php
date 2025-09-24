<?php
class Electronic {
    protected $id;
    protected $name;
    protected $brand;
    protected $year;
    protected $imagePath; // Properti untuk menyimpan URL gambar

    public function __construct($id, $name, $brand, $year, $imagePath) {
        $this->id = $id;
        $this->name = $name;
        $this->brand = $brand;
        $this->year = $year;
        $this->imagePath = $imagePath;
    }
    public function getId() { return $this->id; }
    public function getName() { return $this->name; }
    public function getBrand() { return $this->brand; }
    public function getYear() { return $this->year; }
    public function getImagePath() { return $this->imagePath; }
}

class Appliance extends Electronic {
    protected $type;
    protected $warranty;
    protected $price;
    protected $stock;

    public function __construct($id, $name, $brand, $year, $imagePath, $type, $warranty, $price, $stock) {
        parent::__construct($id, $name, $brand, $year, $imagePath);
        $this->type = $type;
        $this->warranty = $warranty;
        $this->price = $price;
        $this->stock = $stock;
    }
    public function getType() { return $this->type; }
    public function getWarranty() { return $this->warranty; }
    public function getPrice() { return $this->price; }
    public function getStock() { return $this->stock; }
}

class SmartAppliance extends Appliance {
    private $network;
    private $watt;
    private $system;
    private $color;

    public function __construct($id, $name, $brand, $year, $imagePath, $type, $warranty, $price, $stock, $network, $watt, $system, $color) {
        parent::__construct($id, $name, $brand, $year, $imagePath, $type, $warranty, $price, $stock);
        $this->network = $network;
        $this->watt = $watt;
        $this->system = $system;
        $this->color = $color;
    }
    public function getNetwork() { return $this->network; }
    public function getWatt() { return $this->watt; }
    public function getSystem() { return $this->system; }
    public function getColor() { return $this->color; }
}

session_start();

// Fungsi untuk mengisi data awal (dengan URL gambar placeholder)
function isiDataAwal() {
    $_SESSION['inventory'] = [
        1 => new SmartAppliance(1, 'Smart TV 55"', 'Samsung', 2023, 'photo/smartTV.jpg', 'Television', 2, 7500000, 10, 'WiFi', 120, 'Tizen', 'Black'),
        2 => new SmartAppliance(2, 'VivoBook 14', 'Asus', 2022, 'https://via.placeholder.com/100x100.png?text=Laptop', 'Laptop', 1, 9800000, 15, 'WiFi', 65, 'Windows 11', 'Silver'),
        3 => new SmartAppliance(3, 'Insta Fridge', 'LG', 2024, 'https://via.placeholder.com/100x100.png?text=Kulkas', 'Refrigerator', 3, 15000000, 5, 'WiFi+BT', 200, 'Linux', 'Gray'),
        4 => new SmartAppliance(4, 'WH-1000XM5', 'Sony', 2023, 'https://via.placeholder.com/100x100.png?text=Headphone', 'Headphone', 1, 4500000, 20, 'Bluetooth', 15, 'AndroidApp', 'Black'),
        5 => new SmartAppliance(5, 'Apple Watch S9', 'Apple', 2023, 'https://via.placeholder.com/100x100.png?text=Watch', 'Smartwatch', 1, 6500000, 25, 'WiFi+BT', 10, 'watchOS', 'White'),
    ];
    $_SESSION['nextId'] = 6; // ID selanjutnya dimulai dari 6
}

// Inisialisasi data di session jika belum ada
if (!isset($_SESSION['inventory'])) {
    isiDataAwal();
}

// Logika untuk menangani aksi dari form (tambah atau reset)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    // Aksi untuk menambah data baru
    if ($_POST['action'] === 'tambah') {
        $new_id = $_SESSION['nextId']++;
        $newItem = new SmartAppliance(
            $new_id,
            $_POST['nama'],
            $_POST['brand'],
            (int)$_POST['tahun'],
            $_POST['gambar'],
            $_POST['tipe'],
            (int)$_POST['garansi'],
            (float)$_POST['harga'],
            (int)$_POST['stok'],
            $_POST['jaringan'],
            (int)$_POST['daya'],
            $_POST['sistem'],
            $_POST['warna']
        );
        $_SESSION['inventory'][$new_id] = $newItem;
    } 
    // Aksi untuk mereset data ke kondisi awal
    elseif ($_POST['action'] === 'reset') {
        isiDataAwal();
    }

    // Redirect untuk refresh halaman dan mencegah submit ulang
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Manajemen Toko Elektronik</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, sans-serif; background-color: #f4f7f6; margin: 20px; color: #333; }
        .container { max-width: 1400px; margin: auto; background: white; padding: 25px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.08); }
        h1, h2 { color: #0056b3; border-bottom: 2px solid #eee; padding-bottom: 10px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; font-size: 14px; }
        th, td { padding: 12px 10px; text-align: left; border-bottom: 1px solid #ddd; vertical-align: middle; }
        th { background-color: #007bff; color: white; text-transform: uppercase; font-size: 12px; }
        tr:hover { background-color: #f1f1f1; }
        img.product-photo { max-width: 80px; height: auto; border-radius: 5px; }
        .form-container { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; }
        .form-group { margin-bottom: 10px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; font-size: 13px; }
        input[type="text"], input[type="number"] { width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        .btn { padding: 10px 20px; border: none; border-radius: 4px; color: white; cursor: pointer; text-decoration: none; font-size: 14px; }
        .btn-submit { background-color: #28a745; grid-column: 1 / -1; width: 100%; font-size: 16px; margin-top: 10px; }
        .header-controls { display: flex; justify-content: space-between; align-items: center; }
        .btn-reset { background-color: #dc3545; }
    </style>
</head>
<body>

<div class="container">
    <h1>Tambah Barang Baru</h1>
    
    <form action="" method="POST">
        <input type="hidden" name="action" value="tambah">
        
        <div class="form-container">
            <div class="form-group"><label>Nama produk:</label><input type="text" name="nama" required></div>
            <div class="form-group"><label>Brand:</label><input type="text" name="brand" required></div>
            <div class="form-group"><label>Tahun rilis:</label><input type="number" name="tahun" value="2024" required></div>
            <div class="form-group"><label>Tipe produk:</label><input type="text" name="tipe" required></div>
            <div class="form-group"><label>Garansi (tahun):</label><input type="number" name="garansi" required></div>
            <div class="form-group"><label>Harga:</label><input type="number" name="harga" required></div>
            <div class="form-group"><label>Stok:</label><input type="number" name="stok" required></div>
            <div class="form-group"><label>Jaringan:</label><input type="text" name="jaringan" required></div>
            <div class="form-group"><label>Daya (Watt):</label><input type="number" name="daya" required></div>
            <div class="form-group"><label>Sistem operasi:</label><input type="text" name="sistem" required></div>
            <div class="form-group"><label>Warna:</label><input type="text" name="warna" required></div>
            <div class="form-group"><label>URL Gambar:</label><input type="text" name="gambar" placeholder="https://example.com/image.png" required></div>
        </div>
        <button type="submit" class="btn btn-submit">Tambah Data</button>
    </form>
    
    <div class="header-controls" style="margin-top: 40px;">
        <h2>Daftar Barang Elektronik</h2>
        <form action="" method="POST" style="margin: 0;">
            <input type="hidden" name="action" value="reset">
            <button type="submit" class="btn btn-reset">Reset Data Awal</button>
        </form>
    </div>
    
    <table>
        <thead>
            <tr>
                <th>Foto</th> <th>ID</th> <th>Nama</th> <th>Brand</th> <th>Tahun</th> <th>Tipe</th> <th>Garansi</th>
                <th>Harga</th> <th>Stok</th> <th>Network</th> <th>Watt</th> <th>Sistem</th> <th>Warna</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($_SESSION['inventory'] as $item): ?>
            <tr>
                <td><img src="<?php echo htmlspecialchars($item->getImagePath()); ?>" alt="Foto Produk" class="product-photo"></td>
                <td><?php echo htmlspecialchars($item->getId()); ?></td>
                <td><?php echo htmlspecialchars($item->getName()); ?></td>
                <td><?php echo htmlspecialchars($item->getBrand()); ?></td>
                <td><?php echo htmlspecialchars($item->getYear()); ?></td>
                <td><?php echo htmlspecialchars($item->getType()); ?></td>
                <td><?php echo htmlspecialchars($item->getWarranty()); ?> thn</td>
                <td>Rp<?php echo number_format($item->getPrice()); ?></td>
                <td><?php echo htmlspecialchars($item->getStock()); ?></td>
                <td><?php echo htmlspecialchars($item->getNetwork()); ?></td>
                <td><?php echo htmlspecialchars($item->getWatt()); ?> W</td>
                <td><?php echo htmlspecialchars($item->getSystem()); ?></td>
                <td><?php echo htmlspecialchars($item->getColor()); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>