<?php

/**
 * Extension Manager/Repository config file for ext "spgmpack".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'spgmpack',
    'description' => 'Website Configuration',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
            'rte_ckeditor' => '8.7.0-9.5.99',
            'bootstrap_package' => '9.1.0-9.1.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Rsysprivate\\Spgmpack\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'rsysprivate',
    'author_email' => 'spgm@private.r-system.de',
    'author_company' => 'rsysprivate',
    'version' => '1.0.0',
];
