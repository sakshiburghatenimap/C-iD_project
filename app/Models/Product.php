<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $connection = 'mysql2';
    protected $fillable = [
        'pname', 'brand' , 'category' , 'type', 'image','description','year','sprice','cprice','frequency','msheet','isheet','blogo','span','score',
        'energyn','returnable','movable','compatible','demountable','pacel','recycled','biobased','extendable','manufacturer','website','bearing','value',
        'soundi','resistance','length','height','weight','method','system','ctype','ifinish','color','designed','configuration','specification','object',
    ];


}
