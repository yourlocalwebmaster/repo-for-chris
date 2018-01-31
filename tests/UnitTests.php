<?php

# Requires the composer autoloader so we can use our dependencies without needing to include them..
require_once('./vendor/autoload.php');

class MyUnitTests extends PHPUnit\Framework\TestCase
{

    protected $User;
    
    /**
    * My First Unit Test in PHP
    */
    public function testName()
    {

        // Set the users name to John123
        $this->User->setName( 'John1234' );

        // MAke sure the 1234 get's stripped out so just John is returned.
        $this->assertEquals( 'John' , $this->User->getProperty('name') );

    }


    /**
     * Test the email stuff
     */
    public function testEmail()
    {
        
        // Set the users email to John1234@
        $this->User->setEmail( 'John1234@' );

        // If the email is invalid, it will still be null because it won't pass validation in the setEmail() method.
        $this->assertNull( $this->User->getProperty( 'email' ) );

    }

 
    ## DONT WORRY ABOUT THIS STUFF... ############

    /**
    * This reserved method is run at the start of every unit test so we can define some stuff..
    */
    public function setUp()
    {
        $this->User = new App\User();
    }

}




