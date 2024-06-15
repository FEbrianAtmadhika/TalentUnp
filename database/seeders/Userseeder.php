<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name'=> 'Fauzul Fikri Zafia',
                'password'=> Hash::make('1234'),
                'email'=> 'fauzulfikri021@gmail.com',
                'Professi'=> 'Mahasiswa'
            ],
            [
                'name'=> 'Frika Afifah Ramadhani',
                'password'=> Hash::make('1234'),
                'email'=> 'frikaafifah@gmail.com',
                'Professi'=> 'Mahasiswa'
            ],
            [
                'name'=> 'Gino Esa Yazzani',
                'password'=> Hash::make('1234'),
                'email'=> 'ginooesy18@gmail.com',
                'Professi'=> 'Mahasiswa'
            ],
            [
                'name'=> 'Ariel Teguh Pratama',
                'password'=> Hash::make('1234'),
                'email'=> 'arielteguh@gmail.com',
                'Professi'=> 'Mahasiswa'
            ],
            [
                'name'=> 'Gian Akhiru Ramadhan',
                'password'=> Hash::make('1234'),
                'email'=> 'gianakhiruramadhan14@gmail.com',
                'Professi'=> 'Mahasiswa'
            ],
            [
                'name'=> 'Husnul Dzikri Hidayatullah',
                'password'=> Hash::make('1234'),
                'email'=> 'husnul.dzikri.hidayatullah@gmail.com',
                'Professi'=> 'Mahasiswa'
            ],
            [
                'name'=> 'Frizi Abyan Ahmad Daffa',
                'password'=> Hash::make('1234'),
                'email'=> 'friziabyanad@gmail.com',
                'Professi'=> 'Mahasiswa'
            ],
            [
                'name'=> 'Khoirul Huda',
                'password'=> Hash::make('1234'),
                'email'=> 'khoirul22@gmail.com',
                'Professi'=> 'Mahasiswa'
            ],
            [
                'name'=> 'Florentina',
                'password'=> Hash::make('1234'),
                'email'=> 'florentinatina40@gmail.com',
                'Professi'=> 'Mahasiswa'
            ],
            [
                'name'=> 'Annur Wahid Muriyanto',
                'password'=> Hash::make('1234'),
                'email'=> 'annurwhd@gmail.com',
                'Professi'=> 'Mahasiswa'
            ],
            [
                'name'=> 'Aisyah Fitri',
                'password'=> Hash::make('1234'),
                'email'=> 'aisyahfitri16123@gmail.com',
                'Professi'=> 'Mahasiswa'
            ],
            [
                'name'=> 'Hilmy Muhammad',
                'password'=> Hash::make('1234'),
                'email'=> 'hlmyymhd29@gmail.com',
                'Professi'=> 'Mahasiswa'
            ],
            [
                'name'=> 'Selvi Rahmadani',
                'password'=> Hash::make('1234'),
                'email'=> 'slviirmdn0811@gmail.com',
                'Professi'=> 'Mahasiswa'
            ],
            [
                'name'=> 'Rafi Kurnia Ilahi',
                'password'=> Hash::make('1234'),
                'email'=> 'rafikurniailahi00@gmail.com',
                'Professi'=> 'Mahasiswa'
            ],
            [
                'name'=> 'Ariyandra Putera Caisar',
                'password'=> Hash::make('1234'),
                'email'=> 'ariyandraputera13@gmail.com',
                'Professi'=> 'Mahasiswa'
            ],
            [
                'name'=> 'Muhammad Fakhri Irnanda',
                'password'=> Hash::make('1234'),
                'email'=> 'fakhri.irnanda11@gmail.com',
                'Professi'=> 'Mahasiswa'
            ],
            [
                'name'=> 'Noris Dwi Saputra',
                'password'=> Hash::make('1234'),
                'email'=> 'noris2saputra@gmail.com',
                'Professi'=> 'Mahasiswa'
            ],
            [
                'name'=> 'Dendi Sulistiawan',
                'password'=> Hash::make('1234'),
                'email'=> 'dendi001@gmail.com',
                'Professi'=> 'Mahasiswa'
            ],
            [
                'name'=> 'Syahrul Nizam',
                'password'=> Hash::make('1234'),
                'email'=> 'syhrlnizam54@gmail.com',
                'Professi'=> 'Mahasiswa'
            ],
            [
                'name'=> 'Fera Nur Fadhillah',
                'password'=> Hash::make('1234'),
                'email'=> 'feranur86@gmail.com',
                'Professi'=> 'Mahasiswa'
            ],
            [
                'name'=> 'Salsabila Effendi',
                'password'=> Hash::make('1234'),
                'email'=> 'salsabilaefendi2708@gmail.com',
                'Professi'=> 'Mahasiswa'
            ],
            [
                'name'=> 'Alfi Salimah Siregar',
                'password'=> Hash::make('1234'),
                'email'=> 'alfisalimah21@gmail.com',
                'Professi'=> 'Mahasiswa'
            ],
            [
                'name'=> 'Anisa Hafizah',
                'password'=> Hash::make('1234'),
                'email'=> 'anisahafizah13@gmail.com',
                'Professi'=> 'Mahasiswa'
            ],
            [
                'name'=> 'Elsy Maharani Putri',
                'password'=> Hash::make('1234'),
                'email'=> 'elsymaharani80@gmail.com',
                'Professi'=> 'Mahasiswa'
            ],
            [
                'name'=> 'Fadhilla Salsabiela',
                'password'=> Hash::make('1234'),
                'email'=> 'fadhillasalsabiela@gmail.com',
                'Professi'=> 'Mahasiswa'
            ],
            [
                'name'=> 'Lauta Febriani Gusra',
                'password'=> Hash::make('1234'),
                'email'=> 'febrianilaura03@gmail.com',
                'Professi'=> 'Mahasiswa'
            ],
            [
                'name'=> 'Fadjar Dwitama Ginting',
                'password'=> Hash::make('1234'),
                'email'=> 'fdwitama37@gmail.com',
                'Professi'=> 'Mahasiswa'
            ],
            [
                'name'=> 'Husen Hamid',
                'password'=> Hash::make('1234'),
                'email'=> 'husenhamid066@gmail.com',
                'Professi'=> 'Mahasiswa'
            ],
            [
                'name'=> 'Dinda Aulia Putri',
                'password'=> Hash::make('1234'),
                'email'=> 'auliad2008@gmail.com',
                'Professi'=> 'Mahasiswa'
            ],
            [
                'name'=> 'Muhammad Zikri Rizaldi',
                'password'=> Hash::make('1234'),
                'email'=> 'zikririzaldi111@gmail.com',
                'Professi'=> 'Mahasiswa'
            ],
            [
                'name'=> 'Luhur Budi Rahman',
                'password'=> Hash::make('1234'),
                'email'=> 'luhurbrm72@gmail.com',
                'Professi'=> 'Mahasiswa'
            ],
            [
                'name'=> 'Arif Munandar',
                'password'=> Hash::make('1234'),
                'email'=> 'arifmunandar19@gmail.com',
                'Professi'=> 'Mahasiswa'
            ],
            [
                'name'=> 'Maulana Tegar Ardiyanto',
                'password'=> Hash::make('1234'),
                'email'=> 'maulanategar99@gmail.com',
                'Professi'=> 'Mahasiswa'
            ]
            ];
            foreach ($data as $item) {
                User::create($data);
            }
    }
}
