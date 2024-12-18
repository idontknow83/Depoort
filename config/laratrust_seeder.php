<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'root' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u,d',
            'consults' => 'rq-p,gv-p' 
        ],
        'admin' => [
            'users' => 'r,u,d',
            'profile' => 'r,u',
            'consults' => 'rq-p'
        ],
        'arts' => [
            'users' => 'r',
            'consults' => 'c,r,u,d,gvp',

        ],
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete',
        'rqp' => 'request-permission',
        'gvp' => 'give-permission',
    ],
];
