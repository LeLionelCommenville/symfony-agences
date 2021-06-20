<?php
namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Contact {

	/**
	 * @var string|null
	 * @Assert\NotBlank()
	 * @Assert\Length(min=2, max=100)
	 */

	private $firstname;

	/**
	 * @var string|null
	 * @Assert\NotBlank()
	 * @Assert\Length(min=2, max=100)
	 */

	private $lastname;

	/**
	 * @var string|null
	 * @Assert\NotBlank()
	 * @Assert\Regex(
	 *	pattern="/[0-9]{10}/")
	 */
	
	private $phone;

	/**
	 * @var string|null
	 * @Assert\NotBlank()
	 * @Assert\Email()
	 */
	
	private $email;

	/**
	 * @var string|null
	 * @Assert\NotBlank()
	 * @Assert\Length(min=20)
	 */
	
	private $message;

	/**
	 * @var Property|null
	 * 
	 */
	
	private $property;



    /**
     * @return string|null
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param string|null $firstname
     *
     * @return self
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param string|null $lastname
     *
     * @return self
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string|null $phone
     *
     * @return self
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string|null $message
     *
     * @return self
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return Property|null
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * @param Property|null $property
     *
     * @return self
     */
    public function setProperty($property)
    {
        $this->property = $property;

        return $this;
    }
}