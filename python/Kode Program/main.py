from SmartAppliance import SmartAppliance

barang = []
id_berikutnya = 1

# Tambah barang baru
def tambah_barang():
    global id_berikutnya
    print("Nama produk      : ", end=""); nama = input()
    print("Brand            : ", end=""); brand = input()
    print("Tahun rilis      : ", end=""); tahun = int(input())

    print("Tipe produk      : ", end=""); tipe = input()
    print("Garansi (tahun)  : ", end=""); garansi = int(input())
    print("Harga            : ", end=""); harga = float(input())
    print("Stok             : ", end=""); stok = int(input())

    print("Jaringan         : ", end=""); network = input()
    print("Daya (Watt)      : ", end=""); watt = int(input())
    print("Sistem operasi   : ", end=""); system = input()
    print("Warna            : ", end=""); color = input()

    barang.append(SmartAppliance(
        id_berikutnya, nama, brand, tahun,
        tipe, garansi, harga, stok,
        network, watt, system, color
    ))
    id_berikutnya += 1
    print("Data berhasil ditambahkan!")

# Lihat semua barang
def lihat_semua():
    if not barang:
        print("Belum ada data.")
        return

    header = f"{'ID':<4} {'Nama':<25} {'Brand':<15} {'Year':<6} {'Tipe':<15} {'Garansi':<10} {'Harga':<12} {'Stok':<8} {'Network':<12} {'Watt':<6} {'System':<15} {'Color':<10}"
    print(header)
    print("-" * len(header))

    for s in barang:
        print(f"{s.get_id():<4} {s.get_name():<25} {s.get_brand():<15} {s.get_year():<6} "
              f"{s.get_type():<15} {s.get_warranty():<10} {s.get_price():<12.0f} {s.get_stock():<8} "
              f"{s.get_network():<12} {s.get_watt():<6} {s.get_system():<15} {s.get_color():<10}")

# Isi data awal
def isi_data_awal():
    global id_berikutnya
    barang.extend([
        SmartAppliance(1, "Smart TV 55\"", "Samsung", 2023, "Television", 2, 7500000, 10, "WiFi", 120, "Tizen", "Black"),
        SmartAppliance(2, "VivoBook 14", "Asus", 2022, "Laptop", 1, 9800000, 15, "WiFi", 65, "Windows 11", "Silver"),
        SmartAppliance(3, "Insta Fridge", "LG", 2024, "Refrigerator", 3, 15000000, 5, "WiFi+BT", 200, "Linux", "Gray"),
        SmartAppliance(4, "WH-1000XM5", "Sony", 2023, "Headphone", 1, 4500000, 20, "Bluetooth", 15, "AndroidApp", "Black"),
        SmartAppliance(5, "Apple Watch S9", "Apple", 2023, "Smartwatch", 1, 6500000, 25, "WiFi+BT", 10, "watchOS", "White")
    ])
    id_berikutnya = 6

# Main loop
def main():
    isi_data_awal()
    pilihan = -1
    while pilihan != 0:
        print("\n=== TOKO ELEKTRONIK ===")
        print("1. Tambah Barang")
        print("2. Lihat Semua Barang")
        print("0. Keluar")
        print("Pilih: ", end="")
        pilihan = int(input())

        if pilihan == 1:
            tambah_barang()
        elif pilihan == 2:
            lihat_semua()
        elif pilihan == 0:
            print("Program selesai.")
        else:
            print("Pilihan salah!")

if __name__ == "__main__":
    main()
