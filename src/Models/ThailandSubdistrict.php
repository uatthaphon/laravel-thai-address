<?php

namespace Uatthaphon\ThaiAddress\Models;

use Illuminate\Database\Eloquent\Model;

class ThailandSubDistrict extends Model
{
    protected $fillable = [
        'code', 'name_in_thai', 'name_in_english',
        'latitude', 'longitude', 'district_id',
        'zip_code',
    ];

    public function district()
    {
        return $this->belongsTo(ThailandDistrict::class, 'district_id', 'id');
    }

    public function getProvinceAttribute()
    {
        return $this->district->province;
    }
}
