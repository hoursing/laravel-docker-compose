<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExerciseHistory extends Model
{
    use HasFactory;

    protected $table = 'exercise_history';

    protected $fillable = [
                        'name',
                        'duration',
                        'calories',
                        'user_id',
                        'cat_id'];
}
