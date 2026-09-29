<?php

namespace Toast\Blocks\Extensions;

use SilverStripe\Control\Controller;
use SilverStripe\CMS\Controllers\ContentController;
use SilverStripe\Core\Extension;

class FileExtension extends Extension
{
    public function getFileInfo()
    {
        return sprintf("%s %s", strtoupper($this->owner->getExtension()), str_replace(' ', '', strtoupper($this->owner->getSize())));
    }

    public function getDownloadLink()
    {
        return $this->owner->URL();
    }

    public function DownloadLink()
    {
        return $this->getDownloadLink();
    }
}