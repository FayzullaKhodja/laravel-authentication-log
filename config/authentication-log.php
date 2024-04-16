<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Notify New Device
    |--------------------------------------------------------------------------
    |
    | Here you define whether to receive notifications when logging from a new device.
    |
    */

    'notify' => env('AUTHENTICATION_LOG_NOTIFY', true),

    /*
    |--------------------------------------------------------------------------
    | Old Logs Clear
    |--------------------------------------------------------------------------
    |
    | When the clean-command is executed, all authentication logs older than
    | the number of days specified here will be deleted.
    |
    */

    'older' => 365,


    /*
     * This is the database connection that will be used by the migration and
     * the Activity model shipped with this package. In case it's not set
     * Laravel database.default will be used instead.
     */
    'database_connection' => env('AUTHENTICATION_LOG_CONNECTION'),

];
