# TP2DPBO2425C2

## 📝 Janji
Saya Repa Pitriani dengan NIM 2402499 mengerjakan Tugas Praktikum 1 dalam mata kuliah Desain
dan Pemograman Berorientasi Objek untuk keberkahanNya maka saya tidak melakukan kecurangan 
seperti yang telah dispesifikasikan. Aamiin

---

## Diagram
![](cpp/Dokumentasi/tp2.drawio%20(1).png)

## Desain Program
**Electronic → Appliance → SmartAppliance**

**1. Class Electronic (Class Dasar)**  
- id → ID unik produk  
- name → Nama produk  
- brand → Merek produk  
- year → Tahun rilis produk  

**2. Class Appliance (Turunan Electronic)**  
- type → Tipe alat (TV, Laptop, dll)  
- warranty → Lama garansi (tahun)  
- price → Harga produk  
- stock → Jumlah stok tersedia  

**3. Class SmartAppliance (Turunan Appliance)**  
- network → Jenis jaringan (WiFi/BT)  
- watt → Konsumsi daya (Watt)  
- system → Sistem operasi  
- color → Warna produk  



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
### C++
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

