<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/antoinequarroz/Sites/suffrageFeminin/user/themes/expoFemme/blueprints/mediation.yaml',
    'modified' => 1610708400,
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
                                        '.theme' => [
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
                                'header.images' => [
                                    'name' => 'image',
                                    'type' => 'list',
                                    'label' => 'Image',
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
