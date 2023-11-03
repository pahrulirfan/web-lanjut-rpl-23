<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Cara Clone / Download

- Pastikan versi PHP yang terinstall di komputer anda minimum 8.1
- Copy url
- Buka terminal, masuk ke root folder project, jika menggunakan terminal laragon, maka default root folder di laravel/www. sesuaikan dengan environtment komputer masing - masing
- Ketikkan perintah di terminal -> ```git clone https://github.com/pahrulirfan/web-lanjut-rpl-23```
- Setelah proses selesai, masuk ke folder web-lanjut-rpl-23 dengan menggunakan perintah -> ```cd web-lanjut-rpl-23```
- Install depedency dengan perintah ->  ```composer install```
- Buat environtment file dengan cara copy file environtment -> ```cp .env.example .env```
- Buat database baru dengan nama `dbWebLanjut`
- Masukkan nama database kedalam file .env pada variable `DB_DATABASE`
- Buat environtment key -> `php artisan serve`
- Lakukan proses migrate -> `php artisan migrate`
- Jalankan server `php artisan serve`
