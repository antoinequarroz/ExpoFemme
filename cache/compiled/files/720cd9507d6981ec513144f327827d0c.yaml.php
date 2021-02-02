<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/antoinequarroz/Sites/suffrageFeminin/user/themes/expoFemme/blueprints.yaml',
    'modified' => 1610531697,
    'data' => [
        'name' => 'Expo Femme',
        'slug' => 'expoFemme',
        'type' => 'theme',
        'version' => '0.1.0',
        'description' => 'Suffrage féminin',
        'icon' => 'rebel',
        'author' => [
            'name' => 'Antoine Quarroz',
            'email' => 'antoine.quarroz@admin.vs.ch'
        ],
        'homepage' => 'https://github.com/antoine-quarroz/grav-theme-expoFemme',
        'demo' => 'http://demo.yoursite.com',
        'keywords' => 'grav, theme, etc',
        'bugs' => 'https://github.com/antoine-quarroz/grav-theme-expoFemme/issues',
        'readme' => 'https://github.com/antoine-quarroz/grav-theme-expoFemme/blob/develop/README.md',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.6.0'
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in Menu',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
