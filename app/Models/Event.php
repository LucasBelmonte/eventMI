<?php

namespace App\Models;
use Eloquent;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = 'events';
    protected $casts = [

        'items'=> 'array',
    ];

    protected $dates = [
        'date'
    ];
    protected $guarded = [];
    protected $fillable = [
        'id',
        'title',
        'city',
        'private',
        'description',
        'image',
        'user_id',
        'created_at'
    ];

    // protected function user()
    // {
    //     return $this->belongsTo('App\Models\User');
    // }

    public function user() {
        return $this->belongsTo(User::class);
    }
    public function users() {
        return $this->belongsToMany('App\Models\User');
    }

}
