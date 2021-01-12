<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/antoinequarroz/Sites/expoFemme/user/config/site.yaml',
    'modified' => 1609772871,
    'data' => [
        'title' => 'Grav',
        'default_lang' => 'fr',
        'author' => [
            'name' => 'Médiathèque Valais-Sion',
            'email' => 'antoine.quarroz@admin.vs.ch'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Grav is an easy to use, yet powerful, open source flat-file CMS'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'redirects' => NULL,
        'routes' => NULL,
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
