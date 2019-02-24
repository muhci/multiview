<?php

namespace Muhci\Multiview;

use Illuminate\View\FileViewFinder as BaseFileViewFinder;
use Mobile_Detect;

class FileViewFinder extends BaseFileViewFinder
{
    public function __construct($files, $config, $extensions = null)
    {
        $paths = $config['paths'];
        $mobile_detect = new Mobile_Detect;

        // if the device is mobile
        if ($mobile_detect->isMobile()) {
            array_unshift($paths, resource_path('views/mobile'));
        }

        // if the device is tablet
        if ($mobile_detect->isTablet()) {
            array_unshift($paths, resource_path('views/tablet'));
        }

        parent::__construct($files, $paths, $extensions);
    }
}
