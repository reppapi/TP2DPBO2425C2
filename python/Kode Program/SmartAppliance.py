from Appliance import Appliance

# Class SmartAppliance
# Turunan dari Appliance.
class SmartAppliance(Appliance):
    def __init__(self, id=0, name="", brand="", year=0,
                 type_="", warranty=0, price=0.0, stock=0,
                 network="", watt=0, system="", color=""):
        super().__init__(id, name, brand, year, type_, warranty, price, stock)
        self.network = network
        self.watt = watt
        self.system = system
        self.color = color

    # Getter
    def get_network(self): return self.network
    def get_watt(self): return self.watt
    def get_system(self): return self.system
    def get_color(self): return self.color

    # Setter
    def set_network(self, n): self.network = n
    def set_watt(self, w): self.watt = w
    def set_system(self, s): self.system = s
    def set_color(self, c): self.color = c
