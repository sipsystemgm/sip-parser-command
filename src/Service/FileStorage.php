<?php

namespace App\Service;

use Sip\ReaderManager\FileStorage as SipFileStorage;

class FileStorage extends SipFileStorage
{
    public function getStorageDirectory(): string
    {
        return __DIR__.'/../../var/';
    }
}
