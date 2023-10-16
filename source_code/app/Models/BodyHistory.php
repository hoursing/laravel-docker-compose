<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BodyHistory extends Model
{
    use HasFactory;

    protected $table = 'body_history';

    protected $fillable = [
                        'weight',
                        'height',
                        'age',
                        'body_fat_percent',
                        'user_id'];
}