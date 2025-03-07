<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    protected $hidden = ['created_at','updated_at'];

    public function toArray():array
    {
        return [
            'name'=>$this->name
        ];
    }
}
