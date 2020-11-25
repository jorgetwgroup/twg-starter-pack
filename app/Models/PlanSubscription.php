<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlanSubscription extends Model
{
    protected $table = 'plan_subscriptions';    
    protected $primaryKey = 'slug';

    public function plan()
    {
        return $this->belongsTo(Plans::class);
    }
}
