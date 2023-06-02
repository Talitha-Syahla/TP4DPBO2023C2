## Janji

Saya Talitha Syahla NIM 2101330 mengerjakan Soal TP4
dalam mata kuliah Desain Pemrograman Berorientasi Objek untuk keberkahanNya 
maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

# TUGAS PRAKTIKUM 4 DPBO 2023

  - Buatlah database berdasarkan kode tersebut
  - Ubah arsitektur project tersebut menggunakan MVC
  - Tambahkan tabel baru (1 - 2) yang berelasi dengan tabel yang sudah ada (Tabel dan Relasinya bebas ya)
  - Buat CRUD dari tabel  baru tersebut

File README ini berisikan design program, penjelasan alur program, dan dokumentasi saat program dirun/dijalankan.

# Design 

## Design Database

![db](https://github.com/Talitha-Syahla/TP4DPBO2023C2/assets/119799623/fdcb363a-606f-480e-a57c-eb72840aceb7)

Database yang digunakan pada program ini ada 2 tabel, yaitu tabel member dan tabel naungan. 
Database ini memiliki relasi `one to one` yang dimana satu member hanya memiliki satu naungan. 
Relasi tersebut dihubungkan oleh _foreign key_ pada tabel naungan yaitu `id_naungan` yang tertuju pada tabel member yaitu `id_member`.

# Alur Program
1. Saat user pertama kali membuka program ini, halaman yang akan ditampilkan adalah halaman home. 
Yang mana halaman ini akan menampilkan daftar-daftar member yang ada di Company Hybe Labels beserta dengan data-datanya. 
Data-data tersebut dapat di edit dan di delete, apabila user menekan tombol edit maka halaman akan berubah ke form yang sudah berisikan data tersebut
yang siap untuk di edit. Selain itu, user juga dapat menambahkan data member yang baru pada tombol add new.
Bagian navbar terdapat navigasi yang dapat user pilih untuk pindah ke halaman naungan.

2. Jika user menekan tombol add new pada halaman home, maka tampilan akan berganti ke form untuk tambah data member.

3. Jika user menekan tombol naungan pada navigasi, maka tampilan akan berganti ke halaman naungan. Pada halaman ini menampilkan data-data nama naungan, 
terdapat button untuk edit dan delete. Selain itu disamping tabel data nama naungan juga terdapat tabel kecil berisikan form untuk menambahkan nama naungan 
dan juga dapat berubah secara otomatis menjadi form update apabila user menekan tombol edit pada tabel nama naungan. Terdapat juga button cancel untuk mengembalikan 
kata yang terdapat di form.

# Dokumentasi

    - Halaman Home
![home](https://github.com/Talitha-Syahla/TP4DPBO2023C2/assets/119799623/8e0797db-fd5e-45b6-8367-37688bd82a08)
    
    - Halaman Add New Member
![add new](https://github.com/Talitha-Syahla/TP4DPBO2023C2/assets/119799623/cb2e6f89-9051-494b-836b-5fe817dc4be7)

    - Halaman Edit Member
![edit member](https://github.com/Talitha-Syahla/TP4DPBO2023C2/assets/119799623/29b23afd-1778-4eeb-83d3-a066437b7a1c)

    - Halaman Naungan
![naungan](https://github.com/Talitha-Syahla/TP4DPBO2023C2/assets/119799623/a3242ceb-fe0f-49de-9fc4-c5c37d3e47ff)

    - Halaman Edit Naungan
![edit naungan](https://github.com/Talitha-Syahla/TP4DPBO2023C2/assets/119799623/b4018c02-f20e-4810-a9ee-e40309b31c85)

# Simulasi

https://github.com/Talitha-Syahla/TP4DPBO2023C2/assets/119799623/98198cee-d416-41a6-bc0c-70f323961cf5
