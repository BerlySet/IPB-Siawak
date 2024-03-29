<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;

use App\Models\SSO;
use App\Models\User;
use App\Models\Organization;
use App\Models\Event;
use App\Models\Division;
use App\Models\Chairman;
use App\Models\Staff;
use App\Models\Recruitment;
use App\Models\Registrant;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'nim' => 'G64180072',
                'nama' => 'Rafiandi Ammar Putra',
                'jenis_kelamin' => 0,
                'tempat_lahir' => 'Bekasi',
                'tanggal_lahir' => Carbon::create('2000', '10', '01'),
                'tahun_masuk' => 2018,
                'agama' => 'Islam',
                'departemen' => 'Ilmu Komputer',
                'fakultas' => 'Matematika dan Ilmu Pengetahuan Alam',
                'no_handphone' => '089599998888',
                'email' => 'rapi@apps.ipb.ac.id',
                'password' => bcrypt('12345'),
            ],
            [
                'nim' => 'H64180072',
                'nama' => 'Arrazaq Adrian',
                'jenis_kelamin' => 0,
                'tempat_lahir' => 'Surabaya',
                'tanggal_lahir' => Carbon::create('2000', '01', '01'),
                'tahun_masuk' => 2018,
                'agama' => 'Islam',
                'departemen' => 'SKPM',
                'fakultas' => 'Ekologi Manusia',
                'no_handphone' => '081212341234',
                'email' => 'arraz@apps.ipb.ac.id',
                'password' => bcrypt('12345'),
            ],
            [
                'nim' => 'H64180002',
                'nama' => 'Berly Setiawan',
                'jenis_kelamin' => 0,
                'tempat_lahir' => 'Bogor',
                'tanggal_lahir' => Carbon::create('2000', '10', '22'),
                'tahun_masuk' => 2018,
                'agama' => 'Buddha',
                'departemen' => 'Ekonomi',
                'fakultas' => 'Ekonomi dan Manajemen',
                'no_handphone' => '081299997755',
                'email' => 'berly@apps.ipb.ac.id',
                'password' => bcrypt('12345'),
            ],
            [
                'nim' => 'K64180086',
                'nama' => 'Yudha Berliandi',
                'jenis_kelamin' => 0,
                'tempat_lahir' => 'Malang',
                'tanggal_lahir' => Carbon::create('1999', '04', '13'),
                'tahun_masuk' => 2018,
                'agama' => 'Islam',
                'departemen' => 'Fisika',
                'fakultas' => 'Matematika dan Ilmu Pengetahuan Alam',
                'no_handphone' => '087755443322',
                'email' => 'ebuy@apps.ipb.ac.id',
                'password' => bcrypt('12345'),
            ]
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }

        $organization = [
            [
                'nama_ormawa' => 'BEM Keluarga Mahasiswa IPB',
                'deskripsi_ormawa' => 'BEM KM IPB adalah badan eksekutif setingkat IPB yang bertujuan untuk mengawal aspirasi seluruh keluarga mahasiswa Institut Pertanian Bogor',
                'email_ormawa' => 'bemkm@apps.ipb.ac.id'
            ],
            [
                'nama_ormawa' => 'Himalkom IPB',
                'deskripsi_ormawa' => 'Himpunan yang mewadahi mahasiswa Ilmu Komputer IPB sebagai pengembangan softskill dan hardskill mahasiswa',
                'email_ormawa' => 'himalkom@apps.ipb.ac.id'
            ]
        ];
        foreach ($organization as $key => $value) {
            Organization::create($value);
        }

        $event = [
            [
                'nama_event' => 'IT TODAY 2020',
                'kategori' => 'Kepanitiaan',
                'tahun_akademik' => '2020/2021 Semester Ganjil',
                'e_idormawa' => 2,
            ],
            [
                'nama_event' => 'Staff 2020-2021',
                'kategori' => 'Kepengurusan',
                'tahun_akademik' => '2020/2021 Semester Genap',
                'e_idormawa' => 1,
            ],
            [
                'nama_event' => 'Vision 2020',
                'kategori' => 'Kepanitiaan',
                'tahun_akademik' => '2020/2021 Semester Ganjil',
                'e_idormawa' => 1,
            ],
            [
                'nama_event' => 'Vision 2021',
                'kategori' => 'Kepanitiaan',
                'tahun_akademik' => '2021/2022 Semester Ganjil',
                'e_idormawa' => 1,
            ],
            [
                'nama_event' => 'Beyond 2021',
                'kategori' => 'Kepanitiaan',
                'tahun_akademik' => '2020/2021 Semester Genap',
                'e_idormawa' => 1,
            ],
            [
                'nama_event' => 'Staff 2021-2022',
                'kategori' => 'Kepengurusan',
                'tahun_akademik' => '2021/2022 Semester Genap',
                'e_idormawa' => 1,
            ],
            [
                'nama_event' => 'Staff 2019-2020',
                'kategori' => 'Kepengurusan',
                'tahun_akademik' => '2019/2020 Semester Genap',
                'e_idormawa' => 1,
            ],
        ];
        foreach ($event as $key => $value) {
            Event::create($value);
        }

        $division = [
            [
                'nama_divisi' => 'Sekretaris',
                'd_idevent' => 2,
            ],
            [
                'nama_divisi' => 'Bendahara',
                'd_idevent' => 2,
            ],
            [
                'nama_divisi' => 'Kebijakan Kampus',
                'd_idevent' => 2,
            ],
            [
                'nama_divisi' => 'Desain Komunikasi Visual',
                'd_idevent' => 2,
            ],
            [
                'nama_divisi' => 'Media Branding',
                'd_idevent' => 2,
            ],
            [
                'nama_divisi' => 'Riset dan Pengembangan',
                'd_idevent' => 2,
            ],
            [
                'nama_divisi' => 'Sekretaris',
                'd_idevent' => 1,
            ],
            [
                'nama_divisi' => 'Bendahara',
                'd_idevent' => 1,
            ],
            [
                'nama_divisi' => 'Hubungan Masyarakat',
                'd_idevent' => 1,
            ],
            [
                'nama_divisi' => 'Kestari',
                'd_idevent' => 1,
            ],
        ];
        foreach ($division as $key => $value) {
            Division::create($value);
        }

        $chairman = [
            [
                'tahun_jabatan' => 2020,
                'c_idormawa' => 1,
                'c_nim' => 'H64180072',
            ],
            [
                'tahun_jabatan' => 2020,
                'c_idormawa' => 2,
                'c_nim' => 'G64180072',
            ]
        ];
        foreach ($chairman as $key => $value) {
            Chairman::create($value);
        }

        $staff = [
            [
                'jabatan' => 'Ketua Divisi',
                'tahun_jabatan' => 2020,
                'status' => 1,
                's_idevent' => 1,
                's_iddivisi' => 9,
                's_nim' => 'H64180002',
            ],
            [
                'jabatan' => 'Staff',
                'tahun_jabatan' => 2020,
                'status' => 0,
                's_idevent' => 2,
                's_iddivisi' => 4,
                's_nim' => 'K64180086',
            ],
            [
                'jabatan' => 'Ketua Divisi',
                'tahun_jabatan' => 2020,
                'status' => 1,
                's_idevent' => 7,
                's_iddivisi' => 9,
                's_nim' => 'H64180002',
            ],
            [
                'jabatan' => 'Staff',
                'tahun_jabatan' => 2020,
                'status' => 0,
                's_idevent' => 7,
                's_iddivisi' => 4,
                's_nim' => 'K64180086',
            ],
            [
                'jabatan' => 'Staff',
                'tahun_jabatan' => 2020,
                'status' => 1,
                's_idevent' => 7,
                's_iddivisi' => 4,
                's_nim' => 'K64180086',
            ],
            [
                'jabatan' => 'Staff',
                'tahun_jabatan' => 2020,
                'status' => 1,
                's_idevent' => 2,
                's_iddivisi' => 6,
                's_nim' => 'H64180002',
            ],
            [
                'jabatan' => 'Staff',
                'tahun_jabatan' => 2020,
                'status' => 1,
                's_idevent' => 2,
                's_iddivisi' => 3,
                's_nim' => 'K64180086',
            ],
            [
                'jabatan' => 'Sekretaris',
                'tahun_jabatan' => 2020,
                'status' => 1,
                's_idevent' => 2,
                's_iddivisi' => 4,
                's_nim' => 'G64180072',
            ],
        ];
        foreach ($staff as $key => $value) {
            Staff::create($value);
        }

        $recruitment = [
            [
                'judul' => 'Oprec Staff IT TODAY 2020',
                'kriteria_pendaftar' => '1. Mahasiswa IPB angkatan 56-57
                2. Departemen Ilmu Komputer
                3. Bertanggung jawab penuh sampai selesai.',
                'start_date' => Carbon::create('2021', '05', '25'),
                'end_date' => Carbon::create('2021', '06', '15'),
                'is_canceled' => false,
                'rec_idormawa' => 2,
                'rec_idevent' => 1,
            ],
            [
                'judul' => 'Staff Recruitment 2020-2021',
                'kriteria_pendaftar' => '1. Mahasiswa IPB angkatan 56-57
                2. Departemen Ilmu Komputer
                3. Bertanggung jawab penuh sampai selesai.',
                'start_date' => Carbon::create('2021', '05', '01'),
                'end_date' => Carbon::create('2021', '06', '15'),
                'is_canceled' => false,
                'rec_idormawa' => 1,
                'rec_idevent' => 2,
            ],
            [
                'judul' => 'Oprec Vision 2020',
                'kriteria_pendaftar' => '1. Mahasiswa IPB angkatan 56-57
                2. Departemen Ilmu Komputer
                3. Bertanggung jawab penuh sampai selesai.',
                'start_date' => Carbon::create('2020', '07', '01'),
                'end_date' => Carbon::create('2020', '07', '15'),
                'is_canceled' => false,
                'rec_idormawa' => 1,
                'rec_idevent' => 3,
            ],
            [
                'judul' => 'Oprec Vision 2021',
                'kriteria_pendaftar' => '1. Mahasiswa IPB angkatan 56-57
                2. Departemen Ilmu Komputer
                3. Bertanggung jawab penuh sampai selesai.',
                'start_date' => Carbon::create('2021', '05', '01'),
                'end_date' => Carbon::create('2021', '05', '15'),
                'is_canceled' => false,
                'rec_idormawa' => 1,
                'rec_idevent' => 4,
            ],
            [
                'judul' => 'Oprec Vision 2021',
                'kriteria_pendaftar' => '1. Mahasiswa IPB angkatan 56-57
                2. Departemen Ilmu Komputer
                3. Bertanggung jawab penuh sampai selesai.',
                'start_date' => Carbon::create('2021', '04', '01'),
                'end_date' => Carbon::create('2021', '04', '15'),
                'is_canceled' => true,
                'rec_idormawa' => 1,
                'rec_idevent' => 4,
            ],
            [
                'judul' => 'Oprec Beyond 2021',
                'kriteria_pendaftar' => '1. Mahasiswa IPB angkatan 56-57
                2. Departemen Ilmu Komputer
                3. Bertanggung jawab penuh sampai selesai.',
                'start_date' => Carbon::create('2021', '05', '20'),
                'end_date' => Carbon::create('2021', '06', '31'),
                'is_canceled' => false,
                'rec_idormawa' => 1,
                'rec_idevent' => 5,
            ],
            [
                'judul' => 'Staff Recruitment 2019-2020',
                'kriteria_pendaftar' => '1. Mahasiswa IPB angkatan 56-57
                2. Departemen Ilmu Komputer
                3. Bertanggung jawab penuh sampai selesai.',
                'start_date' => Carbon::create('2020', '11', '01'),
                'end_date' => Carbon::create('2020', '11', '15'),
                'is_canceled' => false,
                'rec_idormawa' => 1,
                'rec_idevent' => 7,
            ],
            [
                'judul' => 'Staff Recruitment 2021-2022',
                'kriteria_pendaftar' => '1. Mahasiswa IPB angkatan 56-57
                2. Departemen Ilmu Komputer
                3. Bertanggung jawab penuh sampai selesai.',
                'start_date' => Carbon::create('2021', '11', '01'),
                'end_date' => Carbon::create('2021', '11', '15'),
                'is_canceled' => false,
                'rec_idormawa' => 1,
                'rec_idevent' => 6,
            ],
            [
                'judul' => 'Oprec Vision 2021 Part 2',
                'kriteria_pendaftar' => '1. Mahasiswa IPB angkatan 56-57
                2. Departemen Ilmu Komputer
                3. Bertanggung jawab penuh sampai selesai.',
                'start_date' => Carbon::create('2021', '11', '01'),
                'end_date' => Carbon::create('2021', '11', '15'),
                'is_canceled' => false,
                'rec_idormawa' => 1,
                'rec_idevent' => 4,
            ]
        ];
        foreach ($recruitment as $key => $value) {
            Recruitment::create($value);
        }

        $registrant = [
            [
                'divisi_1' => 8,
                'divisi_2' => 9,
                'reg_idrec' => 1,
                'reg_nim' => 'H64180002',
            ],
            [
                'divisi_1' => 1,
                'divisi_2' => 4,
                'reg_idrec' => 2,
                'reg_nim' => 'K64180086',
            ],
            [
                'divisi_1' => 1,
                'divisi_2' => 6,
                'reg_idrec' => 1,
                'status' => 1,
                'reg_nim' => 'H64180002',
            ],
            [
                'divisi_1' => 5,
                'divisi_2' => 3,
                'reg_idrec' => 5,
                'status' => 0,
                'reg_nim' => 'H64180002',
            ],
        ];
        foreach ($registrant as $key => $value) {
            Registrant::create($value);
        }
    }
}
