<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'TYPO3 CORS Middleware',
    'description' => 'Middleware for CORS',
    'category' => 'plugin',
    'author' => 'Lukas Schönbeck',
    'author_company' => 'HDNET',
    'author_email' => 'lukas.schoenbeck@hdnet.de',
    'state' => 'alpha',
    'clearCacheOnLoad' => true,
    'version' => '11.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.0.0-11.99.99',
        ]
    ],
];