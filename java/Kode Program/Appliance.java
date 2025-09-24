public class Appliance extends Electronic {
    private String type;
    private int warranty;
    private double price;
    private int stock;

    // Constructor lengkap
    public Appliance(int id, String name, String brand, int year,
                     String type, int warranty, double price, int stock) {
        // super() → manggil constructor Electronic
        super(id, name, brand, year);
        this.type = type;
        this.warranty = warranty;
        this.price = price;
        this.stock = stock;
    }

    // Constructor default
    public Appliance() {
        super(); // manggil constructor default Electronic
        this.type = "";
        this.warranty = 0;
        this.price = 0.0;
        this.stock = 0;
    }

    // Getter
    public String getType() { return type; }
    public int getWarranty() { return warranty; }
    public double getPrice() { return price; }
    public int getStock() { return stock; }

    // Setter
    public void setType(String t) { this.type = t; }
    public void setWarranty(int w) { this.warranty = w; }
    public void setPrice(double p) { this.price = p; }
    public void setStock(int s) { this.stock = s; }
}
