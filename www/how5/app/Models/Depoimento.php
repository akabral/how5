<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class Depoimento extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */    
    protected $fillable = [
        'descricao',
        'nota',
        'pessoa'
      ];



/**
 * Get the user's full name.
 *
 * @return string
 */
public function getNotas()
{
    return [1,2,3,4,5];
}
    


}
