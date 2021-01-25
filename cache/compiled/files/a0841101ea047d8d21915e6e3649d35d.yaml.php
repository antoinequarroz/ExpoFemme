<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/antoinequarroz/Sites/suffrageFeminin/user/themes/expoFemme/blueprints/scolaire.yaml',
    'modified' => 1611572604,
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
                                    'label' => 'Titre de la page',
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
                                    'label' => 'Texte du paragraphe',
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
                                    'label' => 'Texte email',
                                    'fields' => [
                                        '.mail' => [
                                            'type' => 'text',
                                            'label' => 'lien pour contact'
                                        ]
                                    ]
                                ],
                                'header.fichier' => [
                                    'name' => 'description',
                                    'type' => 'list',
                                    'label' => 'Texte PDF',
                                    'fields' => [
                                        '.pdf' => [
                                            'type' => 'filepicker',
                                            'folder' => './user/themes/expoFemme/pdf',
                                            'label' => 'PDF'
                                        ],
                                        '.text' => [
                                            'type' => 'text',
                                            'label' => 'Titre du PDF'
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
