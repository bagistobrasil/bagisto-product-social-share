<?php

return [
    [
        'key'    => 'catalog.products.social_share',
        'name'   => 'Social Share',
        'sort'   => 100,
        'fields' => [
            [
                'name'  => 'enabled',
                'title' => 'Enable Social Share?',
                'type'  => 'boolean',
            ], [
                'name'  => 'facebook',
                'title' => 'Enable Share in Facebook?',
                'type'  => 'boolean',
            ], [
                'name'  => 'twitter',
                'title' => 'Enable Share in Twitter?',
                'type'  => 'boolean',
            ], [
                'name'  => 'pinterest',
                'title' => 'Enable Share in Pinterest?',
                'type'  => 'boolean',
            ], [
                'name'  => 'whatsapp',
                'title' => 'Enable Share in What\'s App?',
                'type'  => 'boolean',
                'info'  => 'What\'s App share link just will appear to mobile devices.'
            ], [
                'name'  => 'linkedin',
                'title' => 'Enable Share in Linkedin?',
                'type'  => 'boolean',
            ], [
                'name'  => 'email',
                'title' => 'Enable Share in Email?',
                'type'  => 'boolean',
            ], [
                'name'  => 'share_message',
                'title' => 'Share Message',
                'type'  => 'text',
            ],
        ],
    ]
];