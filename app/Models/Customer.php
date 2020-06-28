<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Customer extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'customers';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $fillable = [
        'uuid',
        'code',
        'type_id',
        'name',
        'phone',
        'email',
    ];
    // protected $hidden = [];
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if (is_null($model->uuid)) {
                $model->uuid = Str::orderedUuid()->toString();
            }

            if (is_null($model->code)) {
                $model->code = (int) substr(mt_rand(), 0, 9);
            }
        });
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id', 'id');
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
