# TP2DPBO2425C2

## 📝 Janji
Saya Repa Pitriani dengan NIM 2402499 mengerjakan Tugas Praktikum 2 dalam mata kuliah Desain
dan Pemograman Berorientasi Objek untuk keberkahanNya maka saya tidak melakukan kecurangan 
seperti yang telah dispesifikasikan. Aamiin

---

## Diagram
![](cpp/Dokumentasi/tp2.drawio%20(1).png)

## Desain Program
### 1. Electronic (Class Dasar / Parent)
- Dibuat sebagai **class dasar** karena semua produk elektronik punya atribut umum.  
- Tujuannya supaya **tidak perlu menulis ulang kode** di class lain.  
- Memiliki:  
  - **Constructor lengkap & default**  
  - **Getter / Setter** untuk semua atribut   

**Atribut:**  
- Nama produk      : Nama produk elektronik  
- Brand            : Merek produk  
- Tahun rilis      : Tahun rilis produk  

### 2. Appliance (Turunan Electronic)
- **Turunan dari Electronic** karena alat elektronik biasa juga punya atribut umum.  
- Menambahkan atribut **spesifik alat elektronik biasa**:  
- Dengan inheritance, **tidak perlu menduplikasi atribut** dari Electronic.  
- Mempermudah manipulasi data karena semua alat elektronik bisa dianggap **Electronic** jika diperlukan.  

**Atribut tambahan:**  
- Tipe produk      : Tipe alat (TV, Laptop, dll)  
- Garansi (tahun)  : Lama garansi  
- Harga            : Harga produk  
- Stok             : Jumlah stok tersedia  

### 3. SmartAppliance (Turunan Appliance)
- **Turunan dari Appliance** karena elektronik pintar juga punya atribut Appliance.  
- Menambahkan atribut **khusus elektronik pintar**:  
- Tujuannya supaya bisa menyimpan semua data produk pintar tanpa menulis ulang semua atribut.  

**Atribut tambahan:**  
- Jaringan         : Jenis jaringan (WiFi/BT)  
- Daya (Watt)      : Konsumsi daya  
- Sistem operasi   : Sistem operasi alat  
- Warna            : Warna produk  


## Alur Program
1. Program membuat **[jumlah] objek awal** untuk setiap class.  
2. Objek awal disimpan dalam **array / vector / list** sesuai class.  
3. Program menerima **input user** untuk menambahkan objek baru:  
   - User memasukkan semua atribut sesuai class.  
4. Setelah input selesai, program menampilkan **semua data** dalam **tabel rapi**:  
   - Kolom menyesuaikan panjang data otomatis.  
   - Semua atribut, termasuk inherited, ditampilkan.  
5. Proses ini bisa diulang hingga user selesai menambahkan data.  


## Dokumentasi
### CPP
<img src="cpp/Dokumentasi/Screenshot%202025-09-24%20222450.png" width="400">

### Java
<img src="java/Dokumentasi/Screenshot%202025-09-24%20222723.png" width="400">

### Python
<img src="python/Dokumentasi/Screenshot%202025-09-24%20222855.png" width="400">

### PHP
<table>
<tr>
<td><img src="php/Dokumentasi/Screenshot%202025-09-24%20230616.png" width="300"></td>
<td><img src="php/Dokumentasi/Screenshot%202025-09-24%20231802.png" width="300"></td>
</tr>
<tr>
<td><img src="php/Dokumentasi/Screenshot%202025-09-24%20232049.png" width="300"></td>
<td><img src="php/Dokumentasi/Screenshot%202025-09-24%20232101.png" width="300"></td>
</tr>
</table>

