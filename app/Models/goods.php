<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class goods extends Model
{
    use HasFactory;
    protected $table = 'goods'; 

    //untuk mengatasi error  : Add [goods_code] to fillable property to allow mass assignment on [App\Models\goods].
    //protected $fillable = ['goods_code', 'goods_name', 'goods_category', 'price', 'stock_quantity'];

    //cara cepat untuk banyak field untuk di bolehkan permission nya
    protected $guarded = [];
    protected $primaryKey = 'id_goods';

}
