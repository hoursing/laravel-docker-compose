<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiaryHistory extends Model
{
    use HasFactory;

    protected $table = 'diary_history';
    protected $fillable = [
                        'title',
                        'content',
                        'user_id'];
}
