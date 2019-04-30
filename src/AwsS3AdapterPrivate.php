<?php

namespace League\Flysystem\AwsS3Private;

use League\Flysystem\AwsS3v3\AwsS3Adapter;
use League\Flysystem\Config;

class AwsS3AdapterPrivate extends AwsS3Adapter
{
    /**
     * Upload an object.
     *
     * @param        $path
     * @param        $body
     * @param Config $config
     *
     * @return array|bool
     */
    protected function upload($path, $body, Config $config)
    {
        $config->set('visibility', 'private');
        return parent::upload($path, $body, $config);
    }
}
