<?php

declare(strict_types=1);

namespace BaseCodeOy\BladeIcons\CssIcons;

use BaseCodeOy\BladeIcons\Facades\IconFamilyRegistry;
use BaseCodeOy\BladeIcons\IconFamily;
use BaseCodeOy\PackagePowerPack\Package\AbstractServiceProvider;

final class ServiceProvider extends AbstractServiceProvider
{
    public function packageRegistered(): void
    {
        IconFamilyRegistry::push(
            IconFamily::fromDirectory('css', __DIR__.'/../resources/svg'),
        );
    }
}
