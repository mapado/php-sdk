<?php
namespace Mapado\Sdk\Entity;

use Mapado\RestClientSdk\Mapping\Annotations as Rest;

/**
 * @Rest\Entity(key="users", repository="\Mapado\Sdk\Entity\Repository\UserRepository")
 */
class User
{
    /**
     * @var string
     * @Rest\Id
     * @Rest\Attribute(name="@id", type="string")
     */
    private $Id;

    /**
     * @var string
     * @Rest\Attribute(name="firstName", type="string")
     */
    private $firstName;

    /**
     * @var string
     * @Rest\Attribute(name="lastName", type="string")
     */
    private $lastName;

    /**
     * @var string
     * @Rest\Attribute(name="fullName", type="string")
     */
    private $fullName;

    /**
     * @var string
     * @Rest\Attribute(name="email", type="string")
     */
    private $email;

    /**
     * @var string
     * @Rest\Attribute(name="gender", type="string")
     */
    private $gender;

    /**
     * @var string
     * @Rest\Attribute(name="avatar", type="string")
     */
    private $avatar;

    /**
     * @var string
     * @Rest\Attribute(name="city", type="string")
     */
    private $city;

    /**
     * @var string
     * @Rest\Attribute(name="address", type="string")
     */
    private $address;

    /**
     * @var string
     * @Rest\Attribute(name="birthday", type="string")
     */
    private $birthday;

    /**
     * @var string
     * @Rest\Attribute(name="phoneNumber", type="string")
     */
    private $phoneNumber;

    /**
     * @var string
     * @Rest\Attribute(name="roles", type="array")
     */
    private $roles;

    /**
     * @var string
     * @Rest\Attribute(name="username", type="string")
     */
    private $username;

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Set the value of id
     *
     */
    public function setId($Id): self
    {
        $this->Id = $Id;

        return $this;
    }

    /**
     * Get the value of firstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     *
     */
    public function setFirstName($firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the value of lastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     *
     */
    public function setLastName($lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get the value of fullName
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * Set the value of fullName
     *
     */
    public function setFullName($fullName): self
    {
        $this->fullName = $fullName;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     */
    public function setEmail($email): self
    {
        $this->email = $email;

        return $this;
    }


    /**
     * Get the value of gender
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set the value of gender
     *
     */
    public function setGender($gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get the value of avatar
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set the value of avatar
     *
     */
    public function setAvatar($avatar): self
    {
        $this->avatar = $avatar;

        return $this;
    }



    /**
     * Get the value of city
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set the value of city
     *
     */
    public function setCity($city): self
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get the value of address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of address
     *
     */
    public function setAddress($address): self
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get the value of birthday
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set the value of birthday
     *
     */
    public function setBirthday($birthday): self
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get the value of phoneNumber
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set the value of phoneNumber
     *
     */
    public function setPhoneNumber($phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get the value of username
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of username
     *
     */
    public function setUsername($username): self
    {
        $this->username = $username;

        return $this;
    }
}
