<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
 
    use HasFactory;

    // protected $table = 'orders';
    // protected $primarykey = 'id';
    // protected $guared =[];
    protected $fillable = ['full_name','street_address','zip','city','district','email','phone','payment_type'];


    public function orderDetails(){
        return $this->hasMany(OrderDetail::class, 'order_id', 'id');
    }
    
}
