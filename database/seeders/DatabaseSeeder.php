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
            ],
            [
                'nama_ormawa' => 'Himalkom IPB',
                'deskripsi_ormawa' => 'Himpunan yang mewadahi mahasiswa Ilmu Komputer IPB sebagai pengembangan softskill dan hardskill mahasiswa',
            ]
        ];
        foreach ($organization as $key => $value) {
            Organization::create($value);
        }

        $event = [
            [
                'nama_event' => 'IT TODAY 2020',
                'kategori' => 'Kepanitiaan',
                'e_idormawa' => 2,
            ],
            [
                'nama_event' => 'Staff 2020-2021',
                'kategori' => 'Kepengurusan',
                'e_idormawa' => 1,
            ]
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
            ]
        ];
        foreach ($staff as $key => $value) {
            Staff::create($value);
        }

        $recruitment = [
            [
                'judul' => 'Oprec Staff IT TODAY 2020',
                'tahun_akademik' => '2020/2021 Semester Genap',
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
                'tahun_akademik' => '2020/2021 Semester Genap',
                'kriteria_pendaftar' => '1. Mahasiswa IPB angkatan 55-58
                                        2. Berkomitmen tinggi
                                        3. Bertanggung jawab penuh sampai selesai.',
                'start_date' => Carbon::create('2021', '06', '01'),
                'end_date' => Carbon::create('2021', '06', '15'),
                'is_canceled' => false,
                'rec_idormawa' => 1,
                'rec_idevent' => 2,
            ]
        ];
        foreach ($recruitment as $key => $value) {
            Recruitment::create($value);
        }

        $registrant = [
            [
                'divisi_1' => 8,
                'alasan_divisi_1' => 'Saya suka divisi ini',
                'divisi_2' => 9,
                'alasan_divisi_2' => 'Saya berpengalaman pada divisi ini',
                'reg_idrec' => 1,
                'reg_nim' => 'H64180002',
            ],
            [
                'divisi_1' => 1,
                'alasan_divisi_1' => 'Saya suka divisi ini',
                'divisi_2' => 4,
                'alasan_divisi_2' => 'Saya berpengalaman pada divisi ini',
                'reg_idrec' => 2,
                'reg_nim' => 'K64180086',
            ]
        ];
        foreach ($registrant as $key => $value) {
            Registrant::create($value);
        }
    }
}
