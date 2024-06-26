<?php

namespace Yadahan\AuthenticationLog;

use Illuminate\Database\Eloquent\Model;

class AuthenticationLog extends Model
{
    public function __construct(array $attributes = [])
    {
        if (! isset($this->connection)) {
            $this->setConnection(config('authentication-log.database_connection'));
        }
        
        parent::__construct($attributes);
    }
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'authentication_log';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['authenticatable_id', 'authenticatable_type'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'login_at' => 'datetime',
        'logout_at' => 'datetime',
    ];

    /**
     * Get the authenticatable entity that the authentication log belongs to.
     */
    public function authenticatable()
    {
        return $this->morphTo();
    }
}
