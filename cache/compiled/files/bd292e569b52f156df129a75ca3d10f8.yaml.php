<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/antoinequarroz/Sites/suffrageFeminin/user/config/plugins/git-sync.yaml',
    'modified' => 1610989084,
    'data' => [
        'enabled' => true,
        'folders' => [
            0 => 'pages'
        ],
        'sync' => [
            'on_save' => true,
            'on_delete' => true,
            'on_media' => true,
            'cron_enable' => false,
            'cron_at' => '0 12,23 * * *'
        ],
        'local_repository' => NULL,
        'repository' => 'https://github.com/antoinequarroz/ExpoFemme.git',
        'no_user' => '0',
        'user' => 'antoinequarroz.mediam@gmail.com',
        'password' => 'gitsync-def5020001cac64822d811b17ab33a944f9c05883b03ed691f3286c44c38d495bbb06ac8466d14b28a1023a6b58951549674b5aaeeaa8607617152d259afa14675aec6ceecab4d1662979f2bb3c4257ac976e35d3407ad1143576e07e56a432bc8',
        'webhook' => '/_git-sync-4c1692f09cb1',
        'webhook_enabled' => '1',
        'webhook_secret' => 'c1878125e84fb3ddf474d02607eb29082bf4980e5e8bc967',
        'branch' => 'master',
        'remote' => [
            'name' => 'origin',
            'branch' => 'master'
        ],
        'git' => [
            'author' => 'gituser',
            'message' => '(Grav GitSync) Automatic Commit',
            'name' => 'GitSync',
            'email' => 'git-sync@trilby.media',
            'bin' => 'git'
        ],
        'logging' => false
    ]
];
