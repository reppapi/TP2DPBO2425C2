public class Electronic {
    private int id;
    private String name;
    private String brand;
    private int year;

    // Constructor lengkap (langsung isi semua atribut)
    public Electronic(int id, String name, String brand, int year) {
        this.id = id;
        this.name = name;
        this.brand = brand;
        this.year = year;
    }

    // Constructor default (nilai awal kosong)
    public Electronic() {
        this.id = 0;
        this.name = "";
        this.brand = "";
        this.year = 0;
    }

    // Getter → buat ambil data
    public int getId() { return id; }
    public String getName() { return name; }
    public String getBrand() { return brand; }
    public int getYear() { return year; }

    // Setter → buat ubah data
    public void setName(String n) { this.name = n; }
    public void setBrand(String b) { this.brand = b; }
    public void setYear(int y) { this.year = y; }
}
