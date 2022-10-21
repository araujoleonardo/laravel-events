<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'city',
        'private',
        'description',
        'image',
    ];

    protected $casts = [
        'items' => 'array'
    ];

    protected $dates = [
        'date'
    ];

    //salvar alterações do update
    protected $guarded = [];

    //Relação One To Many
    public function user() {
        return $this->belongsTo(User::class);
    }

    //Relação Many To Many
    public function users() {
        return $this->belongsToMany('App\Models\User');
    }
}
