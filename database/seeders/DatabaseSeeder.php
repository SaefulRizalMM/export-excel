<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ibprs')->insert([
            'data1'=>1,
             'data2'=>"freetext",
             'data3'=>"1.1",
             'data4'=>"freetext",
             'data5'=>"dropdown",
             'data6'=>"1.1.1",
             'data7'=>"Dropdown multiple selection (Master Data - Bahaya Keselamatan Pertambangan (Form IBPR)) + Freetext",
             'data8'=>"Freetext",
             'data9'=>"Freetext",
             'data10'=>"Integrasi ke Kebijkan kepatuhan peraturan gudang",
             'data11'=>"1",
             'data12'=>"2",
             'data13'=>"3",
             'data14'=>"2",
             'data15'=>"",
             'data16'=>"D",
             'data17'=>"3",
             'data18'=>"M",
             'data19'=>"Tidak",
             'data20'=>"jika nilai column u = tidak > Dropdown multiple selection (Master Data-Hirarki Kendali) + Freetext, else dropdown multiple selection ( pada daftar bowtie analisis [ID, Title resiko utama]",
             'data21'=>"Dropdown",
             'data22'=>"Tidak",
             'data23'=>"Tidak",
             'data24'=>"Tidak",
             'data25'=>"Tidak",
             'data26'=>"Tidak",
             'data27'=>"Tidak",
             'data28'=>"Tidak",
             'data29'=>"Freetext"
        ]);

        DB::table('ibprs')->insert([
            'data1'=>1,
            'data2'=>"freetext",
            'data3'=>"1.2",
            'data4'=>"freetext",
            'data5'=>"dropdown",
            'data6'=>"1.2.1",
            'data7'=>"Dropdown multiple selection (Master Data - Bahaya Keselamatan Pertambangan (Form IBPR)) + Freetext",
            'data8'=>"Freetext",
            'data9'=>"Freetext",
            'data10'=>"Integrasi ke Kebijkan kepatuhan peraturan gudang",
            'data11'=>"1",
            'data12'=>"2",
            'data13'=>"3",
            'data14'=>"2",
            'data15'=>"",
            'data16'=>"D",
            'data17'=>"3",
            'data18'=>"M",
            'data19'=>"Tidak",
            'data20'=>"jika nilai column u = tidak > Dropdown multiple selection (Master Data-Hirarki Kendali) + Freetext, else dropdown multiple selection ( pada daftar bowtie analisis [ID, Title resiko utama]",
            'data21'=>"Dropdown",
            'data22'=>"Tidak",
            'data23'=>"Tidak",
            'data24'=>"Tidak",
            'data25'=>"Tidak",
            'data26'=>"Tidak",
            'data27'=>"Tidak",
            'data28'=>"Tidak",
            'data29'=>"Freetext"
        ]);

        DB::table('ibprs')->insert([
            'data1'=>1,
            'data2'=>"freetext",
            'data3'=>"1.3",
            'data4'=>"freetext",
            'data5'=>"dropdown",
            'data6'=>"1.3.1",
            'data7'=>"Dropdown multiple selection (Master Data - Bahaya Keselamatan Pertambangan (Form IBPR)) + Freetext",
            'data8'=>"Freetext",
            'data9'=>"Freetext",
            'data10'=>"Integrasi ke Kebijkan kepatuhan peraturan gudang",
            'data11'=>"1",
            'data12'=>"2",
            'data13'=>"3",
            'data14'=>"2",
            'data15'=>"",
            'data16'=>"D",
            'data17'=>"3",
            'data18'=>"M",
            'data19'=>"Tidak",
            'data20'=>"jika nilai column u = tidak > Dropdown multiple selection (Master Data-Hirarki Kendali) + Freetext, else dropdown multiple selection ( pada daftar bowtie analisis [ID, Title resiko utama]",
            'data21'=>"Dropdown",
            'data22'=>"Tidak",
            'data23'=>"Tidak",
            'data24'=>"Tidak",
            'data25'=>"Tidak",
            'data26'=>"Tidak",
            'data27'=>"Tidak",
            'data28'=>"Tidak",
            'data29'=>"Freetext"
        ]);

        DB::table('ibprs')->insert([
            'data1'=>2,
            'data2'=>"freetext",
            'data3'=>"2.1",
            'data4'=>"freetext",
            'data5'=>"dropdown",
            'data6'=>"2.1.1",
            'data7'=>"Dropdown multiple selection (Master Data - Bahaya Keselamatan Pertambangan (Form IBPR)) + Freetext",
            'data8'=>"Freetext",
            'data9'=>"Freetext",
            'data10'=>"Integrasi ke Kebijkan kepatuhan peraturan gudang",
            'data11'=>"1",
            'data12'=>"2",
            'data13'=>"3",
            'data14'=>"2",
            'data15'=>"",
            'data16'=>"D",
            'data17'=>"3",
            'data18'=>"M",
            'data19'=>"Tidak",
            'data20'=>"jika nilai column u = tidak > Dropdown multiple selection (Master Data-Hirarki Kendali) + Freetext, else dropdown multiple selection ( pada daftar bowtie analisis [ID, Title resiko utama]",
            'data21'=>"Dropdown",
            'data22'=>"Tidak",
            'data23'=>"Tidak",
            'data24'=>"Tidak",
            'data25'=>"Tidak",
            'data26'=>"Tidak",
            'data27'=>"Tidak",
            'data28'=>"Tidak",
            'data29'=>"Freetext"
        ]);

        DB::table('users')->insert([
            'name' => 'superadmin',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('12345678'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

    }
}