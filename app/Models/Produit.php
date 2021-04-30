<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'categories_id');
    }

    public function imageproduit()
    {
        return asset('storage/imageproduits/'.$this->photo);
    }

}
