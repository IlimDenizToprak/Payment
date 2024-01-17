<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class FailedTransactions extends Model
{
    use HasFactory;

    public function Users(){
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
