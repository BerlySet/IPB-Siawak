<div align="center">
 <h1><img src="public/images/git/logo.png"/></h1>
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
    </tr>
    <tr>
      <td>1</td>
      <td>Berly Setiawan</td>
      <td>G64180044</td>
    </tr>
    <tr>
      <td>2</td>
      <td>Cristmas Anggario</td>
      <td>G64180058</td>
    </tr>
    <tr>
      <td>3</td>
      <td>Arrazzaq Adrian</td>
      <td>G64180109</td>
    </tr>
    <tr>
      <td>4</td>
      <td>Yudha Berliandi</td>
      <td>G64180110</td>
    </tr>
    <tr>
      <td>5</td>
      <td>Denny LIndawati Sinurat</td>
      <td>G64180103</td>
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
   
## Ruang Lingkup Pengembangan
[`^ Kembali Keatas ^`](#)

Aplikasi yang dirancang adalah sistem aplikasi berbasis web. Web IPB Siawak memiliki  fitur pencatatan anggota ormawa, menampilkan ormawa dan kepanitiaan yang sedang  oprec. Web IPB SIAWAK (Sistem Informasi Anggota Ormawa dan Kepanitiaan) disimpan dalam database dengan operasi insert, delete, dan view data yang ditampilkan dalam web. Data yang di input berdasarkan mahasiswa yang melakukan pendaftaran sehingga datanya pun tersimpan di dalam database.

## Spesifikasi teknis lingkungan pengembangan
[`^ Kembali Keatas ^`](#)

  ### Software
   - Visual Studio Code 1.56.2
   - Github
   - Git Bash 2.32.0
   - Trello
   - Composer 2.1.3
   - Figma
   - XAMPP 8.0.6
   - MAMP 8.0.7
   - Draw.io
  
  ### Hardware
   - AMD Ryzen 5 3500U with Radeon Vega Mobile Gfx (8 CPUs), ~2.1GHz
   - 8 GB RAM
   
  ### Tech Stack
   - Laravel 8.16.1
   - Bootstrap v5.0.1
   - MySQL 8.0.25
  
## Konsep OOP yang digunakan
[`^ Kembali Keatas ^`](#) 
#### 1.	Abstrak Class
  * Kelas merupakan deskripsi abstrak informasi dan tingkah laku dari sekumpulan data.
  * Kelas dapat diilustrasikan sebagai suatu cetak biru(blueprint) atau prototipe yang digunakan untuk menciptakan objek.
  * Kelas merupakan tipe data bagi objek yang mengenkapsulasi data dan operasi pada data dalam suatu unit tunggal.
  * Kelas mendefinisikan suatu struktur yang terdiri atas data kelas (data field), prosedur atau fungsi (method), dan sifat kelas (property).
  
#### 2.	Encapsulation
  * Encapsulation memungkinkan sebuah atribut yang hanya dapat diakses oleh sebuah class untuk diakses oleh class lain menggunakan sebuah method
  * Encapsulation merupakan kombinasi data dan fungsionalitas dalam sebuah unit tunggal sebagai bentuk untuk menyembunyikan detail informasi.
  * Enkapsulation menekankan pada antarmuka suatu kelas, atau dengan kata lain bagaimana menggunakan objek kelas tertentu.
  * Proses enkapsulation memudahkan kita untuk menggunakan sebuah objek dari suatu kelas karena kita tidak perlu mengetahui segala hal secara rinci.
```text
...
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $user = Auth::user();
        $chairman = Chairman::where('c_nim', $user->nim)->get(); //NIM diambil dari session auth pas login
        $organization = Organization::where('id', $chairman[0]->c_idormawa)->get(); 

        return view('profile', compact('user','organization','chairman'));
    }
...
```

## Tipe desain pengembangan yang digunakan (Pattern/Anti Pattern)
[`^ Kembali Keatas ^`](#)  

Dalam mengembangkan IPB SIAWAK (Sistem Informasi Anggota Ormawa dan Kepanitiaan), kelompok kami menggunakan design pattern MVC (Model View Controller) yang dimana design pattern ini membagi suatu aplikasi menjadi tiga bagian yang saling terhubung yaitu model (database), view (tampilan/ui) dan controller (interaksi model dan view). 

#### Model
   Model bertanggung jawab untuk mengambil data dan mengubahnya menjadi data yang lebih bermakna yang dapat dikelola oleh lapisan aplikasi yang lain dan mengirimkannya kembali ke lapisan yang sesuai.

Penerapan pada sistem :

1.	Model Ketua Ormawa : Pada model ketua ormawa terdapat informasi mengenai nama, nim ketua ormawa serta data lainnya di IPB University yang akan dibutuhkan ketika ketua ormawa tersebut akan membuka open recruitment dan hal lainnya di IPB Siawak
2.	Model Mahasiswa : Pada model mahasiswa terdapat informasi mengenai nama, nim, hingga email mahasiswa pendaftar yang dibutuhkan ketika mahasiswa akan melakukan pendaftaran
3.	Model Penerimaan Anggota : Pada model penerimaan anggota terdapat informasi mengenai penerimaan anggota yang dilakukan oleh ketua ormawa dan informasi pelamar
4.	Model Jenis Pendaftaran (Kepanitiaan dan Ormawa) : Pada model jenis Pendaftaran terdapat format informasi yang akan diiisi oleh pendaftar/pelamar


#### View
   View mendefinisikan dengan tepat apa yang disajikan kepada pengguna. Biasanya, Controller meneruskan data ke setiap Tampilan. Tampilan juga mengumpulkan data dari pengguna. Di sini kami menggunakan bahasa pemrograman PHP (blade) untuk tampilan.

Penerapan di sistem : 

1. Landing Page
    View landing page merupakan tampilan awal dari web IPB Siawak, view ini menampilkan kata mulai sekarang, logo IPB Siawak, serta pilihan untuk login.
2. Login Page
    View login page menampilkan format yang harus diisi oleh pengguna (ketua ormawa dan mahasiswa) yaitu email IPB pengguna dan kata sandi.
3. Pendaftaran Ormawa/Kepanitiaan 
    View pendaftaran ormawa/kepanitiaan menampilkan informasi terkait ormawa/kepanitiaan yang sedang oprec. 
5.	Penerimaan anggota   
    View penerimaan anggota menampilkan informasi pendaftar yang akan diseleksi


#### Controller 
   Controller merupakan bagian yang menjembatani model dan view. Controller berisi perintah-perintah yang berfungsi untuk memproses suatu data dan mengirimkannya ke halaman web.
Penerapan pada sistem :
1.	Auth Controller Auth controller digunakan untuk mengatur autentikasi saat login sehingga hanya yang menjadi admin yang bisa mengakses sistem perpustakaan
2.	Controller untuk setiap model


## Hasil dan pembahasan
[`^ Kembali Keatas ^`](#)
  #### Use case diagram
   <br>
   <img src="public/images/git/Use Case.png"/>
   
  #### Activity diagram
   <br>
   <img src="public/images/git/Activity Diagram.png"/>
   
  #### Class diagram 
   <br>
   <img src="public/images/git/Class Diagram New.png"/>
   
  #### Entity Relationship Diagram 
   <br>
   <img src="public/images/git/ERD New.png"/>
   
  #### Arsitektur sistem 
   <br>
   <img src="public/images/git/Arsitektur.png"/>
    
  #### Fungsi utama yang dikembangkan
   1. Fungsi Open Recruitment
      Ketua acara dapat membuka open recruitment baru dengan menekan tombol open recruitment dan mengisi ketentuan pendaftaran dari acara yang akan dibuat, lalu ketua juga         dapat langsung menerima atau menolak pendaftar agar dapat disimpan kedalam sistem, ketua juga dapat menekan tombol inspect untuk melihat informasi dari pendaftar. 
      Pendaftar dapat melakukan daftar dengan cara menekan tombol Daftar pada oprec yang sedang berlangsung.
   2. Fungsi Members
      Ketua acara dapat mengedit Status , divisi , dan posisi dari anggota acara tersebut.
   3. Fungsi SKPI
      Ketua acara dapat mengisi SKPI dari suatu acara agar anggota tidak perlu mengisi SKPI secara manual.
       
  #### Fungsi CRUD
  1. CREATE
        - Mahasiswa (User) dapat mendaftar Open Recruitment yang sedang dibuka dengan memasukan kedua divisi pilihannya.
        - Ketua Ormawa (Admin) dapat membuat Recruitment baru dengan memasukan judul, event, tahun akademik, kategori, kriteria pendaftar serta divisi tersedia.
        - Ketua Ormawa (Admin) dapat menerima seorang pendaftar yang mendaftar pada perekrutan yang telah ia buat.
        - Ketua Ormawa (Admin) dapat mengisi data untuk SKPI dengan atribut learning hour, level kegiatan, tanggal kegiatan, soft skills, nama pembimbing, serta dokumen SK.
 
  2. READ
        - Mahasiswa (User) dapat melihat riwayat pendaftaran kepanitiaan / kepengurusan yang telah dilakukan sebelumnya
        - Mahasiswa (User) dapat melihat data diri dan status keanggotaan aktifnya
        - Ketua Ormawa (Admin) dapat melihat pendaftar dari Recruitment yang telah ia buat sebelumnya.
        - Ketua Ormawa (Admin) dapat melihat anggota dari Event yang telah selesai perekrutannya.

  3. UPDATE
        - Ketua Ormawa (Admin) dapat memindahkan seorang pengurus dari divisi lamanya ke divisi yang lain serta memindahkan jabatannya.
        - Ketua Ormawa (Admin) dapat menonaktifkan keanggotaan seorang pengurus.

  4. DELETE
        - Ketua Ormawa (Admin) dapat menolak seorang pendaftar yang mendaftar pada perekrutan yang telah ia buat.


## Hasil implementasi
[`^ Kembali Keatas ^`](#)
 
 ### Screenshot sistem
  #### Landing Page
   <br>
   <img src="public/images/SS Sistem/1.png"/>
   
  #### Login Page
   <br>
   <img src="public/images/SS Sistem/2.png"/>
   
  #### Dashboard 
   <br>
   <img src="public/images/SS Sistem/3.png"/>
   
  #### Anggota
   <br>
   <img src="public/images/SS Sistem/5.png"/>
   
  #### SKPI
   <br>
   <img src="public/images/SS Sistem/6.png"/>
   
 #### Profile
   <br>
   <img src="public/images/SS Sistem/7.png"/>
   
  #### Dashboard User
   <br>
   <img src="public/images/SS Sistem/8.png"/>
   
  #### Open Recruitments User
   <br>
   <img src="public/images/SS Sistem/9.png"/>
   
  #### History
   <br>
   <img src="public/images/SS Sistem/10.png"/>
   
  #### Profile User
   <br>
   <img src="public/images/SS Sistem/11.png"/>
  
## Link aplikasi (jika sudah di deploy)
https://ipb-siawak.herokuapp.com/ dengan data dummy sebagai berikut:

`Akun Ketua`
- Email : arraz@apps.ipb.ac.id / rapi@apps.ipb.ac.id
- Pass : 12345

`Akun Mahasiswa`
- Email : berly@apps.ipb.ac.id / ebuy@apps.ipb.ac.id
- Pass : 12345


## Saran untuk pengembangan selanjutnya
[`^ Kembali Keatas ^`](#)      
Pengembangan sistem SIAWAK ini bertujuan untuk memenuhi tugas akhir mata kuliah Pengembangan Sistem Berorientasi Objek dan merancang sistem pendaftaran serta keanggotaan Ormawa/kepanitiaan di IPB. Keterbatasan waktu dan keahlain pengembangan sistem yang berbeda antar anggota menjadi tantangan dalam perjalanan proyek ini. Pemilihan divisi yang belum bisa sesuai keingininan pengguna, tampilan pengguna yang masih sederhana, dan kurang responsivnya website merupakan beberapa hal yang bisa menjadi pengembangan tahap selanjutnya.


## Developer dan job desc
[`^ Kembali Keatas ^`](#)
### Project Manager 

| Nama                 | NIM           |
| -------------------- |:-------------:| 
| Berly Setiawan       | G64180044     |

### Frontend Developer

| Nama                    | NIM           | Job Desk                     |
| ----------------------- |:-------------:| :----------------------------|
| Berly Setiawan          | G64180044     |    Sertifikat dan Profil  |
| Cristmas Anggario       | G64180058     |    Landing page, Keanggotaan dan Dashboard           |
| Arrazzaq Adrian         | G64180109     |    Open Recruitment       |
| Yudha Berliandi         | G64180110     |    Dashboard dan Login     |
| Denny Lindawati Sinurat | G64180103     |   UI/UX, Laporan dan Dokumentasi    |

### Backend Developer

| Nama                    | NIM           | Job Desk                     |
| ----------------------- |:-------------:| :----------------------------|
| Berly Setiawan          | G64180044     |  Sistem dan Desain Database  |

<br>
