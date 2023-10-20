<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;
    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }
    public function image()
    {
        return $this->belongsTo(Image::class);
    }
    public function getOwner()
    {
        $ownerFName = $this->owner->first_name;
        $ownerLName = $this->owner->surname;
        return "$ownerFName $ownerLName";
    }
    public function visits()
    {
        return $this->hasMany(Visit::class);
    }
}
