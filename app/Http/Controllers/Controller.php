<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
     protected function getMessage($index = null)
    {
      $message = ['insert.success'  => 'Data berhasil disimpan.',
                  'insert.failed'   => 'Data gagal disimpan.',
                  'update.success'  => 'Data berhasil diganti.',
                  'update.failed'   => 'Data gagal diganti.',
                  'delete.success'  => 'Data berhasil dihapus.',
                  'delete.failed'   => 'Data gagal dihapus.',
                  'delete.prevent'  => 'Data tidak dapat dihapus karena memiliki relasi dengan data lain.',
                  'data.notfound'   => 'Data yang dicari tidak ditemukan.',
                  'checkin.success'  => 'Check In berhasil dilakukan. Data Check In disimpan.',
                  'checkin.failed'   => 'Check In gagal dilakukan.',
                  'checkout.success'  => 'Check Out berhasil.',
                  'checkout.failed'   => 'Check Out gagal.',
                  'password.success'   => 'Password yang dimasukkan berhasil diganti.',
                  'password.failed'   => 'Password yang dimasukkan salah.',
                ];
      return ($message[$index])? $message[$index] : 'Pesan belum didefinisikan.';
    }
}
