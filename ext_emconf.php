<?php

$EM_CONF["hio_typo3_connector_uzk"] = [
    'title' => 'hio-typo3-connector-uzk',
    'description' => 'TYPO3 Connector for HISinOne',
    'version' => '0.7.4',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-13.0',
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Wtl\\HioTypo3Connector\\' => 'Classes/',
        ],
    ],
];
