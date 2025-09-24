#include "Electronic.cpp"
// Turunan dari Electronic.
// Tambah atribut spesifik buat alat elektronik biasa:
// tipe (TV, Laptop, dll), garansi, harga, dan stok.
class Appliance : public Electronic {
private:
    string type;
    int warranty;
    double price;
    int stock;

public:
    // Constructor lengkap
    Appliance(int id, string name, string brand, int year,
              string type, int warranty, double price, int stock)
        : Electronic(id, name, brand, year) {
        this->type = type;
        this->warranty = warranty;
        this->price = price;
        this->stock = stock;
    }

    // Constructor default
    Appliance() : Electronic() {
        this->type = "";
        this->warranty = 0;
        this->price = 0.0;
        this->stock = 0;
    }

    // Getter
    string getType() { return type; }
    int getWarranty() { return warranty; }
    double getPrice() { return price; }
    int getStock() { return stock; }

    // Setter
    void setType(string t) { type = t; }
    void setWarranty(int w) { warranty = w; }
    void setPrice(double p) { price = p; }
    void setStock(int s) { stock = s; }
};
