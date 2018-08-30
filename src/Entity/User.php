<?php 
namespace Mapado\Sdk\Entity;

use Mapado\RestClientSdk\Mapping\Annotations as Rest;

/**
 * @Rest\Entity(key="users", repository="\Mapado\Sdk\Entity\Repository\UserRepository")
 */
class User {
    /**
     * @var string
     * @Rest\Id
     * @Rest\Attribute(name="@id", type="string")
     */
    private $Id;

    /**
     * @var string
     * @Rest\Attribute(name="createdAt", type="string")
     */
    private $createdAt;

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
     * @Rest\Attribute(name="token", type="string")
     */
    private $token;

    /**
     * @var string
     * @Rest\Attribute(name="phoneNumber", type="string")
     */
    private $phoneNumber;

    /**
     * @var string
     * @Rest\Attribute(name="userInformation", type="string")
     */
    private $userInformation;

    /**
     * @var array
     * @Rest\Attribute(name="externalCredentials", type="array")
     */
    private $externalCredentials;

    /**
     * @var string
     * @Rest\Attribute(name="teamMemberInformation", type="string")
     */
    private $teamMemberInformation;

    /**
     * @var string
     * @Rest\Attribute(name="emailCore", type="string")
     */
    private $emailCore;

    /**
     * @var string
     * @Rest\Attribute(name="mpdSlug", type="string")
     */
    private $mpdSlug;

    /**
     * @var int
     * @Rest\Attribute(name="impersonationId", type="int")
     */
    private $impersonationId;

    /**
     * @var bool
     * @Rest\Attribute(name="accountNonExpired", type="bool")
     */
    private $accountNonExpired;

    /**
     * @var bool
     * @Rest\Attribute(name="accountNonLocked", type="bool")
     */
    private $accountNonLocked;

    /**
     * @var bool
     * @Rest\Attribute(name="credentialsNonExpired", type="bool")
     */
    private $credentialsNonExpired;

    /**
     * @var bool
     * @Rest\Attribute(name="enabled", type="bool")
     */
    private $enabled;

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
     * @var string
     * @Rest\Attribute(name="usernameCanonical", type="string")
     */
    private $usernameCanonical;

    /**
     * @var string
     * @Rest\Attribute(name="salt", type="string")
     */
    private $salt;

    /**
     * @var string
     * @Rest\Attribute(name="emailCanonical", type="string")
     */
    private $emailCanonical;

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
     * Get the value of createdAt
     */ 
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set the value of createdAt
     *
     */ 
    public function setCreatedAt($createdAt): self
    {
        $this->createdAt = $createdAt;

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
     * Get the value of token
     */ 
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set the value of token
     *
     */ 
    public function setToken($token): self
    {
        $this->token = $token;

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
     * Get the value of userInformation
     */ 
    public function getUserInformation()
    {
        return $this->userInformation;
    }

    /**
     * Set the value of userInformation
     *
     */ 
    public function setUserInformation($userInformation): self
    {
        $this->userInformation = $userInformation;

        return $this;
    }

    /**
     * Get the value of externalCredentials
     */ 
    public function getExternalCredentials()
    {
        return $this->externalCredentials;
    }

    /**
     * Set the value of externalCredentials
     *
     */ 
    public function setExternalCredentials($externalCredentials): self
    {
        $this->externalCredentials = $externalCredentials;

        return $this;
    }

    /**
     * Get the value of teamMemberInformation
     */ 
    public function getTeamMemberInformation()
    {
        return $this->teamMemberInformation;
    }

    /**
     * Set the value of teamMemberInformation
     *
     */ 
    public function setTeamMemberInformation($teamMemberInformation): self
    {
        $this->teamMemberInformation = $teamMemberInformation;

        return $this;
    }

    /**
     * Get the value of emailCore
     */ 
    public function getEmailCore()
    {
        return $this->emailCore;
    }

    /**
     * Set the value of emailCore
     *
     */ 
    public function setEmailCore($emailCore): self
    {
        $this->emailCore = $emailCore;

        return $this;
    }

    /**
     * Get the value of mpdSlug
     */ 
    public function getMpdSlug()
    {
        return $this->mpdSlug;
    }

    /**
     * Set the value of mpdSlug
     *
     */ 
    public function setMpdSlug($mpdSlug): self
    {
        $this->mpdSlug = $mpdSlug;

        return $this;
    }

    /**
     * Get the value of impersonationId
     */ 
    public function getImpersonationId()
    {
        return $this->impersonationId;
    }

    /**
     * Set the value of impersonationId
     *
     */ 
    public function setImpersonationId($impersonationId): self
    {
        $this->impersonationId = $impersonationId;

        return $this;
    }

    /**
     * Get the value of accountNonExpired
     */ 
    public function getAccountNonExpired()
    {
        return $this->accountNonExpired;
    }

    /**
     * Set the value of accountNonExpired
     *
     */ 
    public function setAccountNonExpired($accountNonExpired): self
    {
        $this->accountNonExpired = $accountNonExpired;

        return $this;
    }

    /**
     * Get the value of accountNonLocked
     */ 
    public function getAccountNonLocked()
    {
        return $this->accountNonLocked;
    }

    /**
     * Set the value of accountNonLocked
     *
     */ 
    public function setAccountNonLocked($accountNonLocked): self
    {
        $this->accountNonLocked = $accountNonLocked;

        return $this;
    }

    /**
     * Get the value of credentialsNonExpired
     */ 
    public function getCredentialsNonExpired()
    {
        return $this->credentialsNonExpired;
    }

    /**
     * Set the value of credentialsNonExpired
     *
     */ 
    public function setCredentialsNonExpired($credentialsNonExpired): self
    {
        $this->credentialsNonExpired = $credentialsNonExpired;

        return $this;
    }

    /**
     * Get the value of enabled
     */ 
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set the value of enabled
     *
     */ 
    public function setEnabled($enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get the value of roles
     */ 
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * Set the value of roles
     *
     */ 
    public function setRoles($roles): self
    {
        $this->roles = $roles;

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

    /**
     * Get the value of usernameCanonical
     */ 
    public function getUsernameCanonical()
    {
        return $this->usernameCanonical;
    }

    /**
     * Set the value of usernameCanonical
     *
     */ 
    public function setUsernameCanonical($usernameCanonical): self
    {
        $this->usernameCanonical = $usernameCanonical;

        return $this;
    }

    /**
     * Get the value of salt
     */ 
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set the value of salt
     *
     */ 
    public function setSalt($salt): self
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get the value of emailCanonical
     */ 
    public function getEmailCanonical()
    {
        return $this->emailCanonical;
    }

    /**
     * Set the value of emailCanonical
     *
     */ 
    public function setEmailCanonical($emailCanonical): self
    {
        $this->emailCanonical = $emailCanonical;

        return $this;
    }

    /**
     * Get the value of passwordRequestedAt
     */ 
    public function getPasswordRequestedAt()
    {
        return $this->passwordRequestedAt;
    }

    /**
     * Set the value of passwordRequestedAt
     *
     */ 
    public function setPasswordRequestedAt($passwordRequestedAt): self
    {
        $this->passwordRequestedAt = $passwordRequestedAt;

        return $this;
    }

    /**
     * Get the value of passwordRequestNonExpired
     */ 
    public function getPasswordRequestNonExpired()
    {
        return $this->passwordRequestNonExpired;
    }

    /**
     * Set the value of passwordRequestNonExpired
     *
     */ 
    public function setPasswordRequestNonExpired($passwordRequestNonExpired): self
    {
        $this->passwordRequestNonExpired = $passwordRequestNonExpired;

        return $this;
    }
}