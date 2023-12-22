<?php
#ddev-generated
$ddevProject = \craft\App::env('DDEV_PROJECT');

return [
    '*' => [
    ],
    'bref' => \craft\cloud\Config::create()->s3ClientOptions([
        'use_path_style_endpoint' => true,
        'endpoint' => "http://minio.ddev-$ddevProject.orb.local:10101"
    ]),
];
