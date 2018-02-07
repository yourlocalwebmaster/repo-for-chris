<?php

# Requires the composer autoloader so we can use our dependencies without needing to include them..
require_once('./vendor/autoload.php');

class MyUnitTests extends PHPUnit\Framework\TestCase
{

    protected $User;

    /**
     * Test the email stuff
     */
    public function testEmail()
    {
        
        // Set the users email to John1234@
        $this->User->setEmail( 'John1234@' );

        // If the email is invalid, it will still be null because it won't pass validation in the setEmail() method.
        $this->assertNull( $this->User->getProperty( 'email' ) );

        // Set the users email to John1234@
        $this->User->setEmail( 'John1234@gmail.com' );

        // If the email is invalid, it will still be null because it won't pass validation in the setEmail() method.
        $this->assertNotNull( $this->User->getProperty( 'email' ) );

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




