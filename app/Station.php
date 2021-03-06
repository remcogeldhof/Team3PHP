<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    protected $table = 'Station';

    protected $primaryKey = 'StationID';
    public $timestamps = false;

    protected $guarded = ['StationID'];
    protected $fillable = ['AddressID', 'Name'];

}
