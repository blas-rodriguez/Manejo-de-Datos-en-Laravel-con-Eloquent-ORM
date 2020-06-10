<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companie extends Model
{
    protected $table = 'companies';
    protected $primaryKey = 'company_id';
    public $timestamps = false;
}
