<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/antoinequarroz/Sites/suffrageFeminin/user/themes/expoFemme/blueprints/theme.yaml',
    'modified' => 1610698486,
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
                                    'title' => 'Carte des thèmes',
                                    'underline' => true
                                ],
                                'header.paragraphes' => [
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
                                'header.cards' => [
                                    'name' => 'text',
                                    'type' => 'list',
                                    'style' => 'vertical',
                                    'label' => 'Remplire la carte',
                                    'fields' => [
                                        '.title' => [
                                            'type' => 'text',
                                            'label' => 'Titre de la carte'
                                        ],
                                        '.uri' => [
                                            'type' => 'text',
                                            'label' => 'Lien de la carte'
                                        ],
                                        '.text' => [
                                            'type' => 'textarea',
                                            'label' => 'Texte de la carte'
                                        ],
                                        '.image' => [
                                            'type' => 'filepicker',
                                            'folder' => './user/themes/expoFemme/images',
                                            'label' => 'Image',
                                            'preview_images' => true,
                                            'accept' => [
                                                0 => '.png',
                                                1 => '.jpg'
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
    ]
];
