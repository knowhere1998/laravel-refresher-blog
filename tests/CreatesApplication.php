<?php

namespace Tests;

use Illuminate\Contracts\Console\Kernel;
use Illuminate\Support\Facades\Artisan;

trait CreatesApplication {
    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        return $app;
    }

	protected $baseUrl = 'http://192.168.42.16';

    public function setUp() {
		parent::setUp();
		Artisan::call('migrate');
	}
	public function tearDown() {
		Artisan::call('migrate:reset');
		parent::tearDown();
	}
}
