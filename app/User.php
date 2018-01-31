<?php
/**
 * @author Grant Kimball
 */

namespace App; // tells the autoloader where to find this.. defined in composer.json

/**
 * Main user class for testing temporary storage CRUD stuff..
 */
class User
{
    
    private $name, $email;
    
    /**
     * Setter for name prop.. could use some validation like... no integers...
     * @param string $name The name of the user.
     * @return string Let's return the name as well...
     */
    public function setName(string $name)
    {

        // TODO: make sure the $name is ONLY characters and no integers..

        $this->$name = $name;

        return $name;

    }

    /**
     * Setter for email prop.. Could use some validation
     * @param string $email The users email.
     * @return string Let's return the parsed email as well.
     */
    public function setEmail(string $email)
    {
       
        // TODO: Validate the EMAIL address..

        $this->email = $email;

        return $email;

    }

    /**
     * Get the property $property of this class. Useful for ensuring it is saved and returning valid string.
     * @param string $property Name of the property you are wishing to return.
     * 
     */
    public function getProperty(string $property)
    {

        // TODO: EXTRA CREDIT 
        // Only return properties that are DEFINED.. 
        // Don't want to return something that doesn't exist or it will throw an error.

        return $this->{$property};

    }


}