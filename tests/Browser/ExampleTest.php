<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    public function testImport()
{
    $this->browse(function (Browser $browser) {
        $browser->visit('/import')
                ->attach('file', storage_path('app/test_import.xlsx'))
                ->press('Import')
                ->assertPathIs('/');
    });
}

    public function testBasicExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Laravel');
        });
    }
}
