#include "Appliance.cpp"
// Turunan dari Appliance.
// Tambah atribut buat elektronik pintar:
// jaringan (WiFi/BT), watt, sistem operasi, dan warna.
class SmartAppliance : public Appliance {
private:
    string network;
    int watt;
    string system;
    string color;

public:
    // Constructor lengkap
    SmartAppliance(int id, string name, string brand, int year,
                   string type, int warranty, double price, int stock,
                   string network, int watt, string system, string color)
        : Appliance(id, name, brand, year, type, warranty, price, stock) {
        this->network = network;
        this->watt = watt;
        this->system = system;
        this->color = color;
    }

    // Constructor default
    SmartAppliance() : Appliance() {
        this->network = "";
        this->watt = 0;
        this->system = "";
        this->color = "";
    }

    // Getter
    string getNetwork() { return network; }
    int getWatt() { return watt; }
    string getSystem() { return system; }
    string getColor() { return color; }

    // Setter
    void setNetwork(string n) { network = n; }
    void setWatt(int w) { watt = w; }
    void setSystem(string s) { system = s; }
    void setColor(string c) { color = c; }
};
