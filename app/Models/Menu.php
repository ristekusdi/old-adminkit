<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'rbac_menu';
    protected $primaryKey = 'id_menu';
    protected $appends = array('id');

    public function getIdAttribute()
    {
        return $this->attributes['id_menu'];
    }
}
