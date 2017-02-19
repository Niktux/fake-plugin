<?php

namespace Onyx\Fake;

use Onyx\Plugin;
use Puzzle\Configuration;
use Onyx\Plugins\AbstractPlugin;
use Gaufrette\Adapter\Local;
use Gaufrette\Filesystem;
use Puzzle\Configuration\Yaml;
use Onyx\DeleteMe\Pony;

class Fakir extends AbstractPlugin implements Plugin
{
    public function getName(): string
    {
        return "Onyx/Fakir";
    }

    public function getConfiguration(): ?Configuration
    {
        return new Yaml(
            new Filesystem(
                new Local(__DIR__ . '/../' . 'config/')
        ));
    }

    public function getViewDirectories(): iterable
    {
        return [ __DIR__ . '/../' . 'views/'];
    }
}
