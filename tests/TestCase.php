<?php

namespace Spectator\Tests;

use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    const NULLABLE_MISSING = 0;

    const NULLABLE_EMPTY_STRING = 1;

    const NULLABLE_VALID = 2;

    const NULLABLE_INVALID = 3;

    const NULLABLE_NULL = 4;

    protected function getPackageProviders($app)
    {
        return ['Spectator\SpectatorServiceProvider'];
    }

    protected function setUp(): void
    {
        parent::setUp();

        config()->set('spectator.sources.local.base_path', __DIR__.'/Fixtures');

        $this->withoutExceptionHandling();
    }
}
