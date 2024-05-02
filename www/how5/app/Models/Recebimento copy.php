<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class Recebimento extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */    
    protected $fillable = [
        'itemdesc',
        'qtd',
        'valor',
        'datavenc',
        'datapag',
        'situacao',
        'obs'
      ];



/**
 * Get the user's full name.
 *
 * @return string
 */
public function getSituacoes()
{
    return ["Pago","Nao_pago",];
}
    

/**
 * Get the user's full name.
 *
 * @return string
 */
public function showDateVenc()
{
    if($this->datavenc){
        return \Carbon\Carbon::createFromFormat('Y-m-d h:i:s', $this->datavenc)->format('d/m/Y');
    }
    
}


/**
 * Get the user's full name.
 *
 * @return string
 */
public function showDatePag()
{
    if ($this->datapag){
        return \Carbon\Carbon::createFromFormat('Y-m-d h:i:s', $this->datapag)->format('d/m/Y');

    }
}

}
