# Test Matrix - Pertemuan 11 (CRUD Lanjutan)

| No | Skenario | Input Utama | Hasil yang Diharapkan | Status |
| :--- | :--- | :--- | :--- | :--- |
| 1 | Duplicate code saat create | Gunakan code Course yang sudah ada | Ditolak; error dekat field code | ✅ Lulus |
| 2 | Nama kosong | name = "" | Ditolak; name required | ✅ Lulus |
| 3 | Nama terlalu pendek | name = "AI" | Ditolak; minimal 3 karakter | ✅ Lulus |
| 4 | Fee negatif | fee = -1000 | Ditolak; minimal 0 | ✅ Lulus |
| 5 | Fee bukan integer | fee = abc | Ditolak; harus integer | ✅ Lulus |
| 6 | Quota nol | quota = 0 | Ditolak | ✅ Lulus |
| 7 | Quota 501 | quota = 501 | Ditolak | ✅ Lulus |
| 8 | Boundary quota minimum | quota = 1 | Diterima | ✅ Lulus |
| 9 | Boundary quota maksimum | quota = 500 | Diterima | ✅ Lulus |
| 10 | Tanggal invalid | Kirim nilai yang bukan tanggal valid | Ditolak oleh rule date | ✅ Lulus |
| 11 | Status invalid | status = active | Ditolak; hanya draft/open/closed | ✅ Lulus |
| 12 | Update dengan code sendiri | Edit Course tanpa mengubah code | Harus berhasil | ✅ Lulus |
| 13 | Update ke code Course lain | Ganti code menjadi code milik Course lain | Ditolak unique | ✅ Lulus |
| 14 | Update normal | Ubah nama, fee, quota dengan nilai valid | Berhasil; detail menampilkan data baru | ✅ Lulus |
| 15 | Delete | Hapus Course dummy (UI-101) | Data hilang dari index + flash sukses | ✅ Lulus |