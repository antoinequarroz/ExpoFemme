<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/antoinequarroz/Sites/suffrageFeminin/user/themes/expoFemme/blueprints/dates.yaml',
    'modified' => 1611307586,
    'data' => [
        'title' => 'Content item',
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'blog' => [
                            'type' => 'tab',
                            'title' => 'Configuration',
                            'fields' => [
                                'header_options' => [
                                    'type' => 'section',
                                    'title' => 'Page des dates',
                                    'underline' => true
                                ],
                                'header.titres' => [
                                    'name' => 'titre',
                                    'type' => 'list',
                                    'label' => 'Titre',
                                    'fields' => [
                                        '.titre' => [
                                            'type' => 'text',
                                            'label' => 'Votre titre'
                                        ]
                                    ]
                                ],
                                'header.dates' => [
                                    'name' => 'description',
                                    'type' => 'list',
                                    'label' => 'Texte',
                                    'fields' => [
                                        '.description' => [
                                            'type' => 'textarea',
                                            'label' => 'Rentrer le texte'
                                        ],
                                        '.date' => [
                                            'type' => 'text',
                                            'label' => 'Date'
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
