## Junior Programmer Yayasan Vitka (Backend)
Ini merupakan Test Untuk Backend Junior Programmer Yayasan Vitka,

Silahkan Fork Repositori ini,
Lakukan <strong>Pull Request </strong> untuk challange di bawah ini:
1. Buat Migrasi, Model dan CRUD untuk address_types
2. Merelasikan address_types dengan customer (database relation & CRUD)
3. Filtering customer berdasarkan address_types
4. Buat API untuk data customers dengan format API {“data”:[…], “count”:X}

### Detail Tentang Aplikasi
Aplikasi ini adalah aplikasi untuk listing data customer

### Challenge Detail

1. Buat relasi **many to many** antara tabel `customers` dan `address_types`
2. Update CRUD `customers`, tambahkan opsi untuk menambahkan alamat sesuai dengan tipe yang ada pada `address_types`
3. Pada list customers, silahkan tambahkan filtering untuk `customers` sesuai dengan tipe yang ada pada `address_types`
4. Buat API pada `/api/customers` untuk listing data `customers` dengan format: `{“data”:[…], “count”:X}`

Referensi:
- <img src="https://avatars3.githubusercontent.com/u/958072?s=200&v=4" width="12px"></img> [Laravel](https://laravel.com/docs/7.x)
- <img src="https://avatars0.githubusercontent.com/u/15017015?s=200&v=4" width="12px"></img> [BackPack](https://backpackforlaravel.com/docs)
