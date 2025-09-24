# Class Electronic
# Kelas dasar untuk semua produk elektronik.
class Electronic:
    def __init__(self, id=0, name="", brand="", year=0):
        self.id = id
        self.name = name
        self.brand = brand
        self.year = year

    # Getter
    def get_id(self): return self.id
    def get_name(self): return self.name
    def get_brand(self): return self.brand
    def get_year(self): return self.year

    # Setter
    def set_name(self, n): self.name = n
    def set_brand(self, b): self.brand = b
    def set_year(self, y): self.year = y
