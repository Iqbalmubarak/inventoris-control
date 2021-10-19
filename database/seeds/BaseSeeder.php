<?php

use Illuminate\Database\Seeder;

class BaseSeeder extends Seeder
{

    public function run()
    {
        $admins = [
            ['REINALDO', 'SHANDEV PRATAMA', 'admin01@gmail.com','reshap0318','root',1],
            ['Iqbal', 'Mubaroq', 'admin02@gmail.com','iqbal','root',1]
        ];

        DB::table('roles')->insert([
           [
               'id'=>'1',
               'slug' 		    => 'S-Admins',
               'name' 			  => 'Super Admin',
               'permissions' => '{"log-viewer::logs.dashboard":true,"log-viewer::logs.list":true,"log-viewer::logs.delete":true,"log-viewer::logs.show":true,"log-viewer::logs.download":true,"log-viewer::logs.filter":true,"log-viewer::logs.search":true,"password.request":true,"password.email":true,"password.reset":true,"home.dashboard":true,"home.all-data":true,"users.index":true,"users.create":true,"users.store":true,"users.show":true,"users.edit":true,"users.update":true,"users.destroy":true,"users.activate":true,"users.deactivate":true,"users.permissions":true,"users.simpan":true,"users.all-data":true,"roles.index":true,"roles.add":true,"roles.updt":true,"roles.destroy":true,"roles.permissions":true,"roles.simpan":true,"roles.all-data":true,"satker.index":true,"satker.add":true,"satker.updt":true,"satker.destroy":true,"satker.all-data":true,"barang.index":true,"barang.add":true,"barang.updt":true,"barang.destroy":true,"barang.all-data":true,"satbar.index":true,"satbar.add":true,"satbar.updt":true,"satbar.destroy":true,"satbar.all-data":true,"sumber.index":true,"sumber.add":true,"sumber.updt":true,"sumber.destroy":true,"sumber.all-data":true,"inreq.index":true,"inreq.create":true,"inreq.store":true,"inreq.show":true,"inreq.destroy":true,"inreq.acc":true,"inreq.acc_one":true,"inreq.reject_one":true,"inreq.reject":true,"inreq.all-data":true,"inreqde.add":true,"inreqde.updt":true,"inreqde.destroy":true,"inventoris.index":true,"inventoris.create":true,"inventoris.store":true,"inventoris.cetak":true,"inventoris.show":true,"inventoris.updt":true,"inventoris.destroy":true,"inventoris.all-data":true,"inventorisDetail.add":true,"inventorisDetail.updt":true,"inventorisDetail.destroy":true,"inventorisKeluar.add":true,"inventorisKeluar.updt":true,"inventorisKeluar.destroy":true,"laporan.filter":true,"laporan.mingguan":true}',
           ],
           [
               'id'=>'2',
               'slug' 		    => 'DinKes',
               'name' 			  => 'Dinas Kesehatan',
               'permissions'  => '{"password.request":true,"password.email":true,"password.reset":true,"home.dashboard":true,"home.part-data":true,"users.index":true,"users.create":true,"users.store":true,"users.show":true,"users.edit":true,"users.update":true,"users.destroy":true,"users.activate":true,"users.deactivate":true,"users.part-data":true,"satker.index":true,"satker.add":true,"satker.updt":true,"satker.destroy":true,"satker.all-data":true,"barang.index":true,"barang.add":true,"barang.updt":true,"barang.destroy":true,"barang.all-data":true,"satbar.index":true,"satbar.add":true,"satbar.updt":true,"satbar.destroy":true,"satbar.all-data":true,"sumber.index":true,"sumber.add":true,"sumber.updt":true,"sumber.destroy":true,"sumber.all-data":true,"inreq.index":true,"inreq.show":true,"inreq.acc_one":true,"inreq.reject_one":true,"inreq.all-data":true,"inreqde.updt":true,"inventoris.index":true,"inventoris.create":true,"inventoris.store":true,"inventoris.show":true,"inventoris.updt":true,"inventoris.destroy":true,"inventoris.all-data":true,"inventorisDetail.add":true,"inventorisDetail.updt":true,"inventorisDetail.destroy":true,"laporan.filter":true,"laporan.mingguan":true}'
           ],
           [
               'id'=>'3',
               'slug' 		    => 'PusKesMas',
               'name' 			  => 'Pusat Kesehatan Masyarakat',
               'permissions' => '{"password.request":true,"password.email":true,"password.reset":true,"home.dashboard":true,"home.self-data":true,"inreq.index":true,"inreq.create":true,"inreq.store":true,"inreq.show":true,"inreq.destroy":true,"inreq.self-data":true,"inreqde.add":true,"inreqde.updt":true,"inreqde.destroy":true,"inventoris.index":true,"inventoris.create":true,"inventoris.store":true,"inventoris.show":true,"inventoris.updt":true,"inventoris.destroy":true,"inventoris.self-data":true,"inventorisDetail.add":true,"inventorisDetail.updt":true,"inventorisDetail.destroy":true,"inventorisKeluar.add":true,"inventorisKeluar.updt":true,"inventorisKeluar.destroy":true}',
           ]
        ]);

        DB::table('satuan_kerja')->insert([
          [
            'id' => '1',
            'name' => 'Dinas Kesehatan',
            'status' => '0'
          ],
          [
            'id' => '2',
            'name' => 'Puskesmas Pauh',
            'status' => '1'
          ],
          [
            'id' => '3',
            'name' => 'Puskesmas Padang Utara',
            'status' => '1'
          ],
          [
            'id' => '4',
            'name' => 'Puskesmas Padang Selatan',
            'status' => '1'
          ],
          [
            'id' => '5',
            'name' => 'Puskesmas Naggalo',
            'status' => '1'
          ]
        ]);

        foreach ($admins as $admin) {
            DB::table('users')->insert([
               [
                   'first_name'		 => $admin[0],
                   'last_name'     => $admin[1],
                   'email' 		     => $admin[2],
                   'username'      => $admin[3],
                   'password' 		 => bcrypt($admin[4]),
                   'permissions'   => '{"password.request":true,"password.email":true,"password.reset":true,"home.dashboard":true,"users.index":true,"users.create":true,"users.store":true,"users.show":true,"users.edit":true,"users.update":true,"users.destroy":true,"users.activate":true,"users.deactivate":true,"users.permissions":true,"users.simpan":true,"roles.index":true,"roles.create":true,"roles.store":true,"roles.show":true,"roles.edit":true,"roles.update":true,"roles.destroy":true,"roles.permissions":true,"roles.simpan":true,"roles.all-data":true}',
                   'satker_id'     => 1
               ]
            ]);

            $id = DB::getPdo()->lastInsertId();

            DB::table('activations')->insert([
                [
                    'user_id' 		=> $id,
                    'code' 			  => str_random(40),
                    'completed' 	=> '1',
                ]
            ]);

            DB::table('role_users')->insert([
                [
                    'user_id' 		=> $id,
                    'role_id' 			  => '1'
                ]
            ]);
        }
    }
}
