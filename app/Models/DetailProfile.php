<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailProfile extends Model
{
    use HasFactory;
    
    protected $table = 'detail_profile';
    protected $guarded = ['id_mhs'];
    protected $primaryKey = 'id_mhs';
    protected $fillable = [
        'nama_mhs', 'alamat', 'ttl', 'status'
    ];
    public $timestamps = false;
}
