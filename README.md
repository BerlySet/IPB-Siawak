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



