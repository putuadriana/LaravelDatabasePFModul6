<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\Employee;
use App\Models\Position;
class Employee extends Model
{
    use HasFactory;
    public function position()
    {
        return $this->belongsTo(Position::class);
    }

}
