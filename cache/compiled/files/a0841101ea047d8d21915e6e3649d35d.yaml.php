<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/antoinequarroz/Sites/suffrageFeminin/user/themes/expoFemme/blueprints/scolaire.yaml',
    'modified' => 1611309221,
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
                                    'title' => 'Page du thème',
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
                                'header.pages' => [
                                    'name' => 'description',
                                    'type' => 'list',
                                    'label' => 'Texte',
                                    'fields' => [
                                        '.description' => [
                                            'type' => 'textarea',
                                            'label' => 'Rentrer le texte'
                                        ]
                                    ]
                                ],
                                'header.liens' => [
                                    'name' => 'description',
                                    'type' => 'list',
                                    'label' => 'Texte',
                                    'fields' => [
                                        '.mail' => [
                                            'type' => 'text',
                                            'label' => 'lien pour contact'
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
