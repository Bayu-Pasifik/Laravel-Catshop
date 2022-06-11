<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'tb_transaction';
    protected $primaryKey = 'id_transaction';
    public $incrementing = true;
    protected $fillable = ['nama', 'jenis', 'harga', 'tgl'];
    public $timestamps = false;


}
