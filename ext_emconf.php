<?php

$EM_CONF['ccm19'] = [
    'title' => 'CCM19',
    'description' => 'CCM19 Cookie-Banner with Data-Protection Plugin. Requires an CCM19 subscription.',
    'category' => 'plugin',
    'author' => 'Jona Stephan',
    'author_email' => 'info@ccm19.de',
    'author_company' => 'Papoo Software & Media GmbH',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '12.0.0-13.1.99',
            'php' => '7.4.0-8.1.99'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
