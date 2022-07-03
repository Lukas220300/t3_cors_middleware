<?php

return [
    'frontend' => [
        'schoenbeck/proxy-cors-middleware' => [
            'target' => SCHOENBECK\CorsMiddleware\Middleware\ProxyCorsMiddleware::class,
            'before' => [
                'typo3/cms-frontend/eid'
            ],
            'after' => [
                'typo3/cms-core/normalized-params-attribute'
            ]
        ]
    ]
];