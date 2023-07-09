<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    public function testExample()
    {
        $jsonFilePath = storage_path('app/cookies.json');
        $cookies = json_decode(file_get_contents($jsonFilePath), true);
        $this->browse(function (Browser $browser) use ($cookies) {
            $browser->visit('https://mail.google.com/mail/u/0/#inbox');
            foreach ($cookies as $cookie) {
                $browser->driver->manage()->addCookie($cookie);
            }
            $browser->driver->navigate()->refresh();
            sleep(10);
        });
    }
}
