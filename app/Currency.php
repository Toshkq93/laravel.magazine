<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
/**
 * Class Category
 * @package App
 * @mixin Builder
 */
class Currency extends Model
{
    protected $fillable = ['title', 'code', 'value', 'base'];
}
