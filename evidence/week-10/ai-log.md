# AI Usage Log - Pertemuan 10 (Laravel)

Dokumen ini mencatat penggunaan AI (Large Language Model) selama proses pengerjaan Praktikum Pemrograman Web III Pertemuan 10.

| Prompt/tujuan | Saran AI | Diterima/ditolak | Alasan | Test |
| :--- | :--- | :--- | :--- | :--- |
| Membuat Model dan Migration untuk tabel `courses`. | Jalankan `php artisan make:model Course -m` lalu isi file migration sesuai blueprint. | Diterima | Mempercepat pembuatan kerangka tabel dan sesuai dengan struktur MVC. | Tabel `courses` berhasil terbentuk di database MySQL. |
| Mengatasi error `php is not recognized` di terminal VS Code. | Panggil path lengkap `C:\laragon\bin\php\...` atau gunakan Cmder. | Diterima | Terminal VS Code tidak mengenali PATH PHP secara global. | Perintah artisan berjalan normal dan migrasi berhasil. |
| Database di HeidiSQL kosong padahal sudah di-migrate. | Ubah `DB_CONNECTION` di file `.env` dari `sqlite` menjadi `mysql`. | Diterima | Laravel secara default menggunakan SQLite jika tidak diatur manual. | Database `kursusku` muncul dan data seeder berhasil masuk. |
| Membuat tampilan form tambah kursus dan validasi error. | Gunakan class Bootstrap (`form-control`, `card`) dan directive `@error` di Blade. | Diterima | Tampilan form menjadi responsif dan pesan error validasi muncul dengan rapi. | Form berhasil menyimpan data dan menolak input duplikat. |

## Catatan Penting
- Seluruh kode yang disarankan AI telah diuji secara manual di browser dan terminal sebelum diterima.
- Saya dapat menjelaskan alur logika dari setiap kode yang diterapkan (misalnya alur Route -> Controller -> View, atau cara kerja validasi `unique` di database).
- AI digunakan sebagai tutor untuk membantu *debugging* dan memberikan referensi sintaks, bukan untuk membuat seluruh aplikasi secara otomatis.