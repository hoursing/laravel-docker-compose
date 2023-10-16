<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievements extends Model
{
    use HasFactory;

    protected $table = 'achievements';

    protected $fillable = [
                    'date',
                    'total_goal_completed',
                    'total_goal_set',
                    'user_id'];
}
