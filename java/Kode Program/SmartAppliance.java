public class SmartAppliance extends Appliance {
    private String network;
    private int watt;
    private String system;
    private String color;

    // Constructor lengkap
    public SmartAppliance(int id, String name, String brand, int year,
                          String type, int warranty, double price, int stock,
                          String network, int watt, String system, String color) {
        // super() → manggil constructor Appliance
        super(id, name, brand, year, type, warranty, price, stock);
        this.network = network;
        this.watt = watt;
        this.system = system;
        this.color = color;
    }

    // Constructor default
    public SmartAppliance() {
        super(); // manggil constructor default Appliance
        this.network = "";
        this.watt = 0;
        this.system = "";
        this.color = "";
    }

    // Getter
    public String getNetwork() { return network; }
    public int getWatt() { return watt; }
    public String getSystem() { return system; }
    public String getColor() { return color; }

    // Setter
    public void setNetwork(String n) { this.network = n; }
    public void setWatt(int w) { this.watt = w; }
    public void setSystem(String s) { this.system = s; }
    public void setColor(String c) { this.color = c; }
}
