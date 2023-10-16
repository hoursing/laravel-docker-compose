<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MealHistory extends Model
{
    use HasFactory;

    protected $table = 'meal_history';
    protected $fillable = [
                        'date',
                        'image_url',
                        'summary',
                        'calories',
                        'user_id',
                        'cat_id'];
}
