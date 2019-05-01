<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\User;
use App\Person;

class HelloTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    // public function testExample()
    // {
    //     $this->assertTrue(true);

    //     $arr = [];
    //     $this->assertEmpty($arr);

    //     $msg = "Hello";
    //     $this->assertEquals('Hello', $msg);

    //     $n   = random_int(0, 100);
    //     $this->assertLessThan(100, $n);
    // }

    // use DatabaseMigrations;
    use RefreshDatabase;

    public function testHello()
    {

        
        
        // ダミーで用意するデータ
        factory(User::class)->create([
            'name'      => 'AAA',
            'email'     => 'BBB@CCC.COM',
            'password'  => 'ABCABC',
        ]);

        factory(User::class, 10)->create();

        $this->assertDatabaseHas('users', [
            'name'      => 'AAA',
            'email'     => 'BBB@CCC.COM',
            'password'  => 'ABCABC',
        ]);

        // ダミーで用意するデータPerson

        factory(Person::class)->create([
            'name'      => 'XXX',
            'mail'      => 'YYY@ZZZ.COM',
            'age'       => 123,
        ]);

        factory(Person::class, 10)->create();

        $this->assertDatabaseHas('people', [
            'name'      => 'XXX',
            'mail'      => 'YYY@ZZZ.COM',
            'age'       => 123,
        ]);
    }
}
