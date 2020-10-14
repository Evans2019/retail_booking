<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'booking';

   protected $fillable = [
       'pickUpAddress',
        'Name',
        'PhoneNumber',
        'pickUpDate',
        'pickUpTime',
        'NumberOFLabour',
        'DropoffAddress',
        'VehicleType',
        'Price',
        'comment'];
   
}
