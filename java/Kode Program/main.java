import java.util.Scanner;

public class main {
    // Array buat nyimpen barang
    static SmartAppliance[] barang = new SmartAppliance[1000];
    static int jumlahData = 0;
    static int idBerikutnya = 1;
    static Scanner sc = new Scanner(System.in);

    // Tambah barang baru ke array
    static void tambahBarang() {
        if (jumlahData >= 1000) {
            System.out.println("Sudah penuh!");
            return;
        }

        sc.nextLine(); // buang newline sisa input angka
        System.out.print("Nama produk      : ");
        String nama = sc.nextLine();
        System.out.print("Brand            : ");
        String brand = sc.nextLine();
        System.out.print("Tahun rilis      : ");
        int tahun = sc.nextInt(); sc.nextLine();

        System.out.print("Tipe produk      : ");
        String tipe = sc.nextLine();
        System.out.print("Garansi (tahun)  : ");
        int garansi = sc.nextInt();
        System.out.print("Harga            : ");
        double harga = sc.nextDouble();
        System.out.print("Stok             : ");
        int stok = sc.nextInt(); sc.nextLine();

        System.out.print("Jaringan         : ");
        String network = sc.nextLine();
        System.out.print("Daya (Watt)      : ");
        int watt = sc.nextInt(); sc.nextLine();
        System.out.print("Sistem operasi   : ");
        String system = sc.nextLine();
        System.out.print("Warna            : ");
        String color = sc.nextLine();

        // Buat objek baru dan simpan ke array
        barang[jumlahData] = new SmartAppliance(
                idBerikutnya, nama, brand, tahun,
                tipe, garansi, harga, stok,
                network, watt, system, color
        );

        jumlahData++;
        idBerikutnya++;
        System.out.println("Data berhasil ditambahkan!");
    }

    // Tampilkan semua barang di array
    static void lihatSemua() {
        if (jumlahData == 0) {
            System.out.println("Belum ada data.");
            return;
        }

        // Header tabel (width disesuaikan biar rata)
        String header = String.format("%-4s %-25s %-15s %-6s %-15s %-10s %-12s %-8s %-12s %-6s %-15s %-10s",
                "ID", "Nama", "Brand", "Year", "Tipe", "Garansi", "Harga",
                "Stok", "Network", "Watt", "System", "Color");
        System.out.println(header);

        // Garis pemisah otomatis ngikutin panjang header
        System.out.println("-".repeat(header.length()));

        // Isi tabel
        for (int i = 0; i < jumlahData; i++) {
            SmartAppliance s = barang[i];
            System.out.printf("%-4d %-25s %-15s %-6d %-15s %-10d %-12.0f %-8d %-12s %-6d %-15s %-10s\n",
                    s.getId(), s.getName(), s.getBrand(), s.getYear(),
                    s.getType(), s.getWarranty(), s.getPrice(),
                    s.getStock(), s.getNetwork(), s.getWatt(),
                    s.getSystem(), s.getColor());
        }
    }



    // Isi data awal (biar gak kosong)
    static void isiDataAwal() {
        barang[jumlahData++] = new SmartAppliance(1, "Smart TV 55\"", "Samsung", 2023,
                "Television", 2, 7500000, 10,
                "WiFi", 120, "Tizen", "Black");
        barang[jumlahData++] = new SmartAppliance(2, "VivoBook 14", "Asus", 2022,
                "Laptop", 1, 9800000, 15,
                "WiFi", 65, "Windows 11", "Silver");
        barang[jumlahData++] = new SmartAppliance(3, "Insta Fridge", "LG", 2024,
                "Refrigerator", 3, 15000000, 5,
                "WiFi+BT", 200, "Linux", "Gray");
        barang[jumlahData++] = new SmartAppliance(4, "WH-1000XM5", "Sony", 2023,
                "Headphone", 1, 4500000, 20,
                "Bluetooth", 15, "AndroidApp", "Black");
        barang[jumlahData++] = new SmartAppliance(5, "Apple Watch S9", "Apple", 2023,
                "Smartwatch", 1, 6500000, 25,
                "WiFi+BT", 10, "watchOS", "White");

        idBerikutnya = 6;
    }

    // Main function → program mulai dari sini
    public static void main(String[] args) {
        int pilihan = -1;
        isiDataAwal(); // isi data contoh dulu

        // Menu utama jalan terus sampai user pilih 0
        while (pilihan != 0) {
            System.out.println("\n=== TOKO ELEKTRONIK ===");
            System.out.println("1. Tambah Barang");
            System.out.println("2. Lihat Semua Barang");
            System.out.println("0. Keluar");
            System.out.print("Pilih: ");
            pilihan = sc.nextInt();

            if (pilihan == 1) tambahBarang();
            else if (pilihan == 2) lihatSemua();
            else if (pilihan == 0) {
                System.out.println("Program selesai.");
            }
            else {
                System.out.println("Pilihan salah!");
            }
        }
    }
}
