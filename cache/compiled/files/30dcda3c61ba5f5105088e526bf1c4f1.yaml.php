<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/antoinequarroz/Sites/expoFemme/user/config/plugins/git-sync.yaml',
    'modified' => 1609836956,
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
        'user' => 'antoinequarroz',
        'password' => 'gitsync-def50200b381361a73fca17dd7993e4a8f7d9f3f207804580ae19175dfef1f115f4d36ccdad5d28fcb5c814ff81ee10caff2fc10b118d351221064d3d551ce81715a9ddce2028cd6e951a65b2477798ffd99c8f2190760579f324c81cf2baa58fd',
        'webhook' => '/_git-sync-1d2146f383a2',
        'webhook_enabled' => '0',
        'webhook_secret' => 'fb02757e37e099f382540b268c887d6c8cb8d09f17de7600',
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
