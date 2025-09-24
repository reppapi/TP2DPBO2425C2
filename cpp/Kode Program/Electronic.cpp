#include <iostream>
#include <string>
using namespace std;
// Ini kelas dasar / parent.
// Nyimpen data umum semua elektronik:
// id, nama, brand, dan tahun rilis.
class Electronic {
private:
    int id;
    string name;
    string brand;
    int year;

public:
    // Constructor lengkap (langsung isi semua atribut)
    Electronic(int id, string name, string brand, int year) {
        this->id = id;
        this->name = name;
        this->brand = brand;
        this->year = year;
    }

    // Constructor default (kalau gak dikasih nilai)
    Electronic() {
        this->id = 0;
        this->name = "";
        this->brand = "";
        this->year = 0;
    }

    // Getter → buat ngambil data
    int getId() { return id; }
    string getName() { return name; }
    string getBrand() { return brand; }
    int getYear() { return year; }

    // Setter → buat ubah data
    void setName(string n) { name = n; }
    void setBrand(string b) { brand = b; }
    void setYear(int y) { year = y; }

    // Destructor virtual (biar aman kalau diwarisin)
    virtual ~Electronic() {}
};
