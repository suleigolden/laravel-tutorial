<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class InsertRecord extends Model
{
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'students';

    protected $fillable = [
        'First_Name', 'Last_Name', 'Gender', 'Class', 'mobileNumber',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
