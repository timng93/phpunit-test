<?php

class UserTest extends \PHPUnit\Framework\TestCase
{
    public function testThatWeCanGetTheFirstName() {
        
        $user = new \App\Models\User;

        $user->setFirstName("Billy");

        $this->assertEquals($user->getFirstName(), "Billy");
    }

    public function testThatWeCanGetTheLasttName() {

        $user = new \App\Models\User;

        $user->setLastName("Garret");
        
        $this->assertEquals($user->getLastName(), "Garret");
    }
    
}
