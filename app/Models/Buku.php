<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Buku extends Model
{
    use HasFactory, HasRoles;
   
    public function handle($request, Closure $next)
    {
       
    if (Auth::check() && Auth::user()->role == 'admin') {
        return redirect('/buku');
      }
     return redirect('/');
    }
   
    protected $table = 'bukus';
    protected $fillable = ['judul', 'isbn', 'penerbit', 'pengarang', 'tahun_terbit', 'jumlah_buku', 'lokasi', 'deskripsi', 'cover'];

    /**
     * Method One To Many 
     */
    public function transaksi()
    {
    	return $this->hasMany(Transaksi::class);
    }
}
