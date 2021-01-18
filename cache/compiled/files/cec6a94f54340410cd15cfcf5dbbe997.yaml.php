<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/antoinequarroz/Sites/suffrageFeminin/user/themes/expoFemme/blueprints/theme.yaml',
    'modified' => 1610980223,
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
                                'header.titres' => [
                                    'name' => 'Titre',
                                    'type' => 'list',
                                    'Label' => 'Titre',
                                    'fields' => [
                                        '.firsttitle' => [
                                            'type' => 'text',
                                            'label' => 'titre de l\'expo'
                                        ],
                                        '.secondtitle' => [
                                            'type' => 'text',
                                            'label' => 'titre de l\'expo 2'
                                        ],
                                        '.thirdtitle' => [
                                            'type' => 'text',
                                            'label' => 'titre 3'
                                        ]
                                    ]
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
                                        ],
                                        '.copyright' => [
                                            'type' => 'text',
                                            'label' => 'copyright'
                                        ],
                                        '.color' => [
                                            'type' => 'text',
                                            'label' => 'Couleur des thèmes'
                                        ]
                                    ]
                                ],
                                'header.entreprises' => [
                                    'name' => 'entreprise',
                                    'type' => 'list',
                                    'style' => 'vertical',
                                    'label' => 'Logo d\'entreprise',
                                    'fields' => [
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
