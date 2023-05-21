<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Cashier\Billable;
use Illuminate\Http\Request;


class Booking extends Model
{
    protected $primaryKey = 'book_id';
    use HasFactory;
}
