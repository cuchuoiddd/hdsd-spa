<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    protected $guarded = [];
    use SoftDeletes;

    public static function search($search){
        $docs = self::when(isset($search['name']), function ($q) use ($search) {
            return $q->where('name', 'like', '%'.$search['name'].'%');
        })->when(isset($search['phone']), function ($q) use ($search) {
            return $q->where('phone', $search['phone']);
        })->orderBy('id', 'desc');
        return $docs;
    }
}
