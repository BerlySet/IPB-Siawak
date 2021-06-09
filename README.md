<div align="center">
 <h1>IPB SIAWAK (Sistem Informasi Anggota Ormawa dan Kepanitiaan)</h1>
 <img src="https://upload.wikimedia.org/wikipedia/commons/1/15/Bogor_Agricultural_University_%28IPB%29_symbol.svg" width=200px>
 <br>
 <b>Pengembangan Sistem Berorientasi Objek (KOM334)<br>
 Kelompok 6 Praktikum 2</b>
 <br><br>
 <b> Asisten Praktikum: </b> <br>
 1. Kak Indah Puspita <br>
 <br><br>
 <b> Anggota Kelompok: </b>
 <table>
    <tr>
      <th></th>
      <th>Nama</th>
      <th>NIM</th>
      <th>Role</th>
    </tr>
    <tr>
      <td>1</td>
      <td>Berly Setiawan</td>
      <td>G64180044</td>
      <td>Back-End Developer</td>
    </tr>
    <tr>
      <td>2</td>
      <td>Cristmas Anggario</td>
      <td>G64180058</td>
      <td>Back-End Developer</td>
    </tr>
    <tr>
      <td>3</td>
      <td>Arrazzaq Adrian</td>
      <td>G64180109</td>
      <td>Project Manager</td>
    </tr>
    <tr>
      <td>4</td>
      <td>Yudha Berliandi</td>
      <td>G64180110</td>
      <td>Frontend Developer</td>
    </tr>
    <tr>
      <td>4</td>
      <td>Denny LIndawati Sinurat</td>
      <td>G64180103</td>
      <td>UI/UX Designer</td>
    </tr>
  </table>
</div>


## Deskripsi singkat aplikasi
[`^ Kembali Keatas ^`](#)

IPB Siawak (Sistem Informasi Anggota Ormawa dan Kepanitiaan) adalah sebuah sistem informasi perekrutan anggota ormawa atau kepanitiaan yang terintegrasi dengan Simak, Simawa dan Simormawa.

## User analysis
[`^ Kembali Keatas ^`](#)
   #### User story
 * Saya sebagai ketua ormawa/kepanitiaan, saya membutuhkan sistem yang bisa diakses mahasiswa lain untuk penerimaan keanggotaan ormawa agar saya tidak menginput anggota satu persatu.
 * Saya sebagai ketua ormawa/kepanitiaan bisa memposting open recruitment mereka dan mengatur kriteria mahasiswa yang dapat melamar.
 * Saya sebagai ketua ormawa/kepanitiaan bisa melihat siapa saja pendaftar dan kemudian dapat memilih menerima atau menolak calon pendaftar tersebut.
 * Saya sebagai mahasiswa bisa melihat ormawa/kepanitiaan mana yang sedang membuka open recruitment dan mereka cocok dengan kriteria saya.
 * Saya sebagai mahasiswa, saya ingin mengetahui jadwal pendaftaran ormawa/kepanitiaan yang ada di IPB supaya bisa saya ikuti, sehingga saya bisa mengikuti timeline pendaftaran ormawa secara cepat dan aktual. 
 * Saya sebagai mahasiswa yang ingin melamar tidak perlu lagi data data umum lagi, jadi tinggal mengisi data dan syarat” tambahan saja.
 * Saya sebagai mahasiswa, ketika saya mengikuti ormawa/kepanitiaan saya ingin keanggotaan saya terverifikasi, sehingga di akhir saya tidak perlu mengajukannya lagi untuk SKPI.
   
## Spesifikasi teknis lingkungan pengembangan
[`^ Kembali Keatas ^`](#)
  * Software
  * Hardware
  * Tech Stack
 
## Konsep OOP yang digunakan
[`^ Kembali Keatas ^`](#)   


## Tipe desain pengembangan yang digunakan (Pattern/Anti Pattern)
[`^ Kembali Keatas ^`](#)      


## Hasil dan pembahasan
[`^ Kembali Keatas ^`](#)
  * Use case diagram 
  * Activity diagram 
  * Class diagram 
  * Entity Relationship Diagram 
  * Arsitektur sistem 
  * Fungsi utama yang dikembangkan
  * Fungsi CRUD

## Hasil implementasi
[`^ Kembali Keatas ^`](#)
  * Screenshot sistem 
  * Link aplikasi (jika sudah di deploy)

## Saran untuk pengembangan selanjutnya
[`^ Kembali Keatas ^`](#)   

## Developer dan job desc
[`^ Kembali Keatas ^`](#)



<br><br><br>

# Akun Dummy
`Akun Ketua`
Email : arraz@apps.ipb.ac.id / rapi@apps.ipb.ac.id
Pass : 12345

`Akun Mahasiswa`
Email : berly@apps.ipb.ac.id / ebuy@apps.ipb.ac.id
Pass : 12345

# KOM334 - Pengembangan Sistem Berorientasi Objek
Projek Akhir PSBO
Kelompok 6 - P2

## Step Before Coding
- Clone your project `git clone https://github.com/BerlySet/PSBO.git`
- Go to the folder application using `cd` command on your cmd or terminal
- Run `composer install` on your cmd or terminal
- Copy .env.example file to .env on the root folder. You can type `copy .env.example .env` if using command prompt Windows or `cp .env.example .env` if using terminal, Ubuntu
- Open `phpMyAdmin` and create database name `ipb-siawak`
- Open your .env file and change the database name `(DB_DATABASE)` to `ipb-siawak`, username `(DB_USERNAME)` and password `(DB_PASSWORD)` field correspond to your configuration. By default, the username is root and you can leave the password field empty. (This is for Xampp) By default, the username is root and password is also root. (This is for Lamp or Mamp)
- Run `php artisan key:generate`
- Run `php artisan migrate`
- Run `php artisan db:seed`
- Run `php artisan serve`

## Step If Database or Migration or Seeder Changed
- Make sure XAMPP apache and MySQL active
- Run `php artisan migrate:fresh`, Your table in database will be regenerated
- Run `php artisan db:seed`

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
