<?php

namespace Uatthaphon\ThaiAddress\Models;

use Illuminate\Database\Eloquent\Model;

class ThailandProvince extends Model
{
    protected $fillable = [
        'code', 'name_in_thai', 'name_in_english',
    ];

    public function districts()
    {
        return $this->hasMany(ThailandDistrict::class, 'province_id', 'id');
    }
}
