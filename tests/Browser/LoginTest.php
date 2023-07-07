<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('https://accounts.google.com/v3/signin/identifier?dsh=S938677%3A1688717001142761&continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&emr=1&followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&ifkv=AeDOFXiYzOKVYILWicKKICFnrMgtpCSPlubKEP6A1y_gkoafge1OwdB090oEzPJbcwnHKor2poUP&osid=1&passive=1209600&service=mail&flowName=GlifWebSignIn&flowEntry=ServiceLogin')
                ->type('identifier', 'caothuongngan@gmail.com')
//                ->type('password', 'test1234')
                ->press('Next');
            sleep(100);
        });
//        for ($i = 0; $i < 10; $i++) {
//            $this->browse(function (Browser $browser) use ($i) {
//                $browser->visit('https://accounts.google.com/v3/signin/identifier?dsh=S-250611689%3A1688709069015982&continue=https%3A%2F%2Fads.google.com%2Fnav%2Flogin&flowName=GlifWebSignIn&flowEntry=AddSession')
//                    ->type('email', 'admin@gmail.com')
//                    ->type('password', '111111')
//                    ->press('Login');
//
//                sleep(1);
//            });
//            sleep(1);
//        }
    }
}
