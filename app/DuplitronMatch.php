<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DuplitronMatch extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'duplitron_version', 'input_program', 'corpus_program', 'start', 'duration', 'consecutive_hashes', 'totalhashes'
    ];
}
