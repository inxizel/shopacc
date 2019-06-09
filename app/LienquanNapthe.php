<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LienquanNapthe extends Model
{
    protected $fillable = ['uid', 'loaithe', 'serial', 'mathe', 'menhgia', 'trangthai', 'user_id'];
}
