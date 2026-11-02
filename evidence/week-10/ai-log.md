# AI Usage Log - Pertemuan 10 (Laravel)

| Masalah/Tujuan | Prompt Singkat | Saran AI | Keputusan Saya | Hasil Uji |
| :--- | :--- | :--- | :--- | :--- |
| Setup Model & Migration | "Cara membuat model dan migration di Laravel" | Jalankan `php artisan make:model Course -m` lalu isi file migration. | Diterima | Tabel courses berhasil dibuat di database MySQL. |
| Error `php is not recognized` | "Kenapa php artisan error di terminal VS Code?" | Panggil path lengkap `C:\laragon\bin\php\...` atau gunakan Cmder. | Diterima | Perintah artisan berjalan normal. |
| Koneksi Database SQLite vs MySQL | "Kenapa database di HeidiSQL kosong padahal sudah migrate?" | Ubah `DB_CONNECTION` di `.env` dari `sqlite` menjadi `mysql`. | Diterima | Database `kursusku` muncul dan data seeder berhasil masuk. |

**Catatan Tambahan:** 
AI digunakan sebagai partner debugging untuk masalah konfigurasi environment (PATH PHP dan koneksi database). Saya secara mandiri membuat form, tabel, dan melakukan pengujian validasi untuk memastikan aplikasi berjalan sesuai standar PDF.