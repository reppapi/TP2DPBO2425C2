#include <iostream>
#include <iomanip>
#include "SmartAppliance.cpp" // otomatis masukin Appliance & Electronic juga
using namespace std;

// Array buat nyimpen barang.
// Maksimal 1000 item biar aman.
SmartAppliance barang[1000];
int jumlahData = 0;   // hitung berapa data yang udah masuk
int idBerikutnya = 1; // id unik, auto increment

// Minta input dari user
void tambahBarang() {
    if (jumlahData >= 1000) {
        cout << "Data sudah penuh!\n";
        return;
    }

    string nama, brand, tipe, network, system, color;
    int tahun, garansi, stok, watt;
    double harga;

    cin.ignore();
    cout << "Nama produk      : "; getline(cin, nama);
    cout << "Brand            : "; getline(cin, brand);
    cout << "Tahun rilis      : "; cin >> tahun; cin.ignore();

    cout << "Tipe produk      : "; getline(cin, tipe);
    cout << "Garansi (tahun)  : "; cin >> garansi;
    cout << "Harga            : "; cin >> harga;
    cout << "Stok             : "; cin >> stok; cin.ignore();

    cout << "Jaringan         : "; getline(cin, network);
    cout << "Daya (Watt)      : "; cin >> watt; cin.ignore();
    cout << "Sistem operasi   : "; getline(cin, system);
    cout << "Warna            : "; getline(cin, color);

    // Simpan ke array di index sekarang
    barang[jumlahData] = SmartAppliance(
        idBerikutnya, nama, brand, tahun,
        tipe, garansi, harga, stok,
        network, watt, system, color
    );

    jumlahData++;
    idBerikutnya++;
    cout << "Data berhasil ditambahkan!\n";
}

// Tampilkan semua barang yang
// sudah ada di array ke layar.
void lihatSemua() {
    if (jumlahData == 0) {
        cout << "Belum ada data.\n";
        return;
    }

    // Header tabel
    cout << left
         << setw(4)  << "ID"
         << setw(25) << "Nama"
         << setw(15) << "Brand"
         << setw(6)  << "Year"
         << setw(15) << "Tipe"
         << setw(10) << "Garansi"
         << setw(12) << "Harga"
         << setw(8)  << "Stok"
         << setw(12) << "Network"
         << setw(6)  << "Watt"
         << setw(15) << "System"
         << setw(10) << "Color"
         << endl;

    cout << string(138, '-') << endl;

    // Loop cetak data satu per satu
    for (int i = 0; i < jumlahData; i++) {
        cout << left
             << setw(4)  << barang[i].getId()
             << setw(25) << barang[i].getName()
             << setw(15) << barang[i].getBrand()
             << setw(6)  << barang[i].getYear()
             << setw(15) << barang[i].getType()
             << setw(10) << barang[i].getWarranty()
             << setw(12) << fixed << setprecision(0) << barang[i].getPrice()
             << setw(8)  << barang[i].getStock()
             << setw(12) << barang[i].getNetwork()
             << setw(6)  << barang[i].getWatt()
             << setw(15) << barang[i].getSystem()
             << setw(10) << barang[i].getColor()
             << endl;
    }
}


// isiDataAwal
void isiDataAwal() {
    barang[jumlahData++] = SmartAppliance(1, "Smart TV 55\"", "Samsung", 2023,
                                          "Television", 2, 7500000, 10,
                                          "WiFi", 120, "Tizen", "Black");
    barang[jumlahData++] = SmartAppliance(2, "VivoBook 14", "Asus", 2022,
                                          "Laptop", 1, 9800000, 15,
                                          "WiFi", 65, "Windows 11", "Silver");
    barang[jumlahData++] = SmartAppliance(3, "Insta Fridge", "LG", 2024,
                                          "Refrigerator", 3, 15000000, 5,
                                          "WiFi+BT", 200, "Linux", "Gray");
    barang[jumlahData++] = SmartAppliance(4, "WH-1000XM5", "Sony", 2023,
                                          "Headphone", 1, 4500000, 20,
                                          "Bluetooth", 15, "AndroidApp", "Black");
    barang[jumlahData++] = SmartAppliance(5, "Apple Watch S9", "Apple", 2023,
                                          "Smartwatch", 1, 6500000, 25,
                                          "WiFi+BT", 10, "watchOS", "White");

    idBerikutnya = 6;
}

int main() {
    int pilihan = -1; // awalnya bukan 0 biar loop masuk dulu
    isiDataAwal();    // langsung isi data contoh

    while (pilihan != 0) {
        cout << "\n=== TOKO ELEKTRONIK ===\n";
        cout << "1. Tambah Barang\n";
        cout << "2. Lihat Semua Barang\n";
        cout << "0. Keluar\n";
        cout << "Pilih: ";
        cin >> pilihan;

        if (pilihan == 1) tambahBarang();
        else if (pilihan == 2) lihatSemua();
        else if (pilihan == 0) {
            cout << "Program selesai.\n";
        }
        else {
            cout << "Pilihan salah!\n";
        }
    }

    return 0; // keluar normal
}
