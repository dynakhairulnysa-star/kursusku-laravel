TEST MATRIX - PERTEMUAN 11 (CRUD LANJUTAN)

| No | Skenario | Input Utama | Hasil yang Diharapkan | Status |
| :--- | :--- | :--- | :--- | :--- |
| 1 | Duplicate code saat create | Gunakan code Course yang sudah ada | Ditolak; error dekat field code | Lulus |
| 2 | Nama kosong | name = "" | Ditolak; name required | Lulus |
| 3 | Nama terlalu pendek | name = "AI" | Ditolak; minimal 3 karakter | Lulus |
| 4 | Fee negatif | fee = -1000 | Ditolak; minimal 0 | Lulus |
| 5 | Fee bukan integer | fee = abc | Ditolak; harus integer | Lulus |
| 6 | Quota nol | quota = 0 | Ditolak | Lulus |
| 7 | Quota 501 (melebihi batas) | quota = 501 | Ditolak | Lulus |
| 8 | Boundary quota minimum | quota = 1 | Diterima | Lulus |
| 9 | Boundary quota maksimum | quota = 500 | Diterima | Lulus |
| 10 | Tanggal invalid | Kirim nilai yang bukan tanggal valid | Ditolak oleh rule date | Lulus |
| 11 | Status invalid | status = active | Ditolak; hanya draft/open/closed | Lulus |
| 12 | Update dengan code sendiri | Edit Course tanpa mengubah code | Harus berhasil | Lulus |
| 13 | Update ke code Course lain | Ganti code menjadi code milik Course lain | Ditolak unique | Lulus |
| 14 | Update normal | Ubah nama, fee, quota dengan nilai valid | Berhasil; detail menampilkan data baru | Lulus |
| 15 | Delete | Hapus Course dummy (DEL-001) | Data hilang dari index + flash sukses | Lulus |

## Kesimpulan dan Catatan Penting:

1. **Pemisahan Validasi (Form Request):** Pemindahan aturan validasi dari `CourseController` ke `StoreCourseRequest` dan `UpdateCourseRequest` membuat kode Controller jauh lebih bersih, terstruktur, dan mudah dibaca. Controller kini hanya fokus pada alur data (Create, Read, Update, Delete).
2. **Tantangan Unique pada Update:** Tantangan terbesar pada praktikum ini adalah menangani aturan `unique` saat mengedit data. Penggunaan `Rule::unique('courses', 'code')->ignore($course)` berhasil menyelesaikan masalah ini sehingga pengguna dapat menyimpan perubahan data tanpa harus mengganti kode kursus yang sudah ada.
3. **Keamanan Server-Side:** Pengujian yang sengaja memasukkan data salah (seperti kuota 501, kode duplikat, dan manipulasi status melalui inspect element) membuktikan bahwa validasi di sisi server (Laravel) tidak bisa ditembus hanya dengan memanipulasi tampilan browser.
4. **Pentingnya Method Spoofing:** Untuk menjalankan aksi Update (`PUT`) dan Delete (`DELETE`), HTML form tidak mendukung method tersebut secara langsung, sehingga penggunaan directive `@method('PUT')` dan `@method('DELETE')` pada Blade sangat krusial agar route resource Laravel bekerja dengan semestinya.