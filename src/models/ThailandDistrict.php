<?php

namespace Uatthaphon\Models;

use Illuminate\Database\Eloquent\Model;

class ThailandDistrict extends Model
{
    protected $fillable = [
        'code', 'name_in_thai', 'name_in_english',
        'province_id',
    ];

    public function province()
    {
        return $this->belongsTo(ThailandProvince::class, 'province_id', 'id');
    }

    public function subdistricts()
    {
        return $this->hasMany(ThailandSubdistrict::class, 'district_id', 'id');
    }
}



