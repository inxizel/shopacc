<?php

namespace Zent\Member\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Member extends Model
{
    use SoftDeletes;
    /*
     * Tables
     */
    
    protected $table = "members";

    /*
     * Fillables
     */
    
    protected $fillable = ['uid', 'ip', 'cash_lienquan','status'];

    /*
     * Soft Deletes
     */
    
    protected $dates = ['deleted_at'];
}
