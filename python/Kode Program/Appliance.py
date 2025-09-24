from Electronic import Electronic

# Class Appliance
# Turunan dari Electronic.
class Appliance(Electronic):
    def __init__(self, id=0, name="", brand="", year=0,
                 type_="", warranty=0, price=0.0, stock=0):
        super().__init__(id, name, brand, year)
        self.type = type_
        self.warranty = warranty
        self.price = price
        self.stock = stock

    # Getter
    def get_type(self): return self.type
    def get_warranty(self): return self.warranty
    def get_price(self): return self.price
    def get_stock(self): return self.stock

    # Setter
    def set_type(self, t): self.type = t
    def set_warranty(self, w): self.warranty = w
    def set_price(self, p): self.price = p
    def set_stock(self, s): self.stock = s
