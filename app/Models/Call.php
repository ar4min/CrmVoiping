<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Call extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'customer_id',
        'type',
        'status',
        'conversation_duration',
    ];

    const TYPE_ENTRANCE = 'entrance';
    const TYPE_OUTPUT = 'output';
    const TYPES = [self::TYPE_ENTRANCE, self::TYPE_OUTPUT];

    const STATUS_ANSWERED = 'answered';
    const TYPE_UNRESPONSIVE = 'unresponsive';
    const STATUS = [self::STATUS_ANSWERED, self::TYPE_UNRESPONSIVE];

    /**
     * @return HasMany
     */
    public function callUser()
    {
        return $this->hasMany(User::class , 'id' , 'user_id');
    }

    /**
     * @return HasMany
     */
    public function callCustomer()
    {
        return $this->hasMany(User::class , 'id' , 'customer_id');
    }
}
