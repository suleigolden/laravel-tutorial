<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'students';

    protected $fillable = [
        'id','First_Name', 'Last_Name', 'Gender', 'Class', 'mobileNumber','created_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
