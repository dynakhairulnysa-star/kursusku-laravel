# AI Usage Log - Pertemuan 11 (Laravel)

| Prompt / pertanyaan | Saran AI | Dipakai? | Alasan |
| :--- | :--- | :--- | :--- |
| Cara membuat halaman detail (Show) | Gunakan route model binding `Course $course` dan kirim ke view `courses.show`. | Ya | Mempermudah pengambilan data berdasarkan ID tanpa query manual. |
| Cara memisahkan validasi dari Controller | Gunakan `php artisan make:request StoreCourseRequest` dan `UpdateCourseRequest`. | Ya | Membuat Controller lebih bersih dan validasi lebih terstruktur. |
| Mengatasi error unique saat update | Gunakan `Rule::unique('courses', 'code')->ignore($course)`. | Ya | Agar sistem mengabaikan pengecekan unique untuk record yang sedang diedit. |
| Cara membuat form delete yang aman | Gunakan method POST dengan `@csrf` dan `@method('DELETE')` serta konfirmasi JavaScript. | Ya | Sesuai standar keamanan Laravel dan mencegah penghapusan tidak sengaja. |

**Catatan Tambahan:** 
AI digunakan sebagai *reviewer* kode dan partner *debugging* untuk memastikan aturan validasi (terutama unique pada update) berjalan dengan benar. Seluruh kode diuji secara manual di browser.