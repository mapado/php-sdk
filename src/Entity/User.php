<?php 
namespace Mapado\Sdk\Entity;

use Mapado\RestClientSdk\Mapping\Annotations as Rest;

/**
 * @Rest\Entity(key="users", repository="\Mapado\Sdk\Entity\Repository\UserRepository")
 */
class User {
    /**
     * @Rest\id
     * @Rest\Attribute(name="@id", type="string")
     */
    private $id;

    /**
     * @Rest\id
     * @Rest\Attribute(name="id", type="string")
     */
    private $idUser;

    /**
     * @Rest\Attribute(name="uuid", type="string")
     */
    private $uuid;

    /**
     * @Rest\Attribute(name="createdAt", type="string")
     */
    private $createdAt;

    /**
     * @Rest\Attribute(name="savedSearch", type="array")
     */
    private $savedSearch;

    /**
     * @Rest\Attribute(name="savedSearchList", type="array")
     */
    private $savedSearchList;

    /**
     * @Rest\Attribute(name="claimedActivity", type="array")
     */
    private $claimedActivity;

    /**
     * @Rest\Attribute(name="claimedActivityList", type="array")
     */
    private $claimedActivityList;

    /**
     * @Rest\Attribute(name="interactionList", type="array")
     */
    private $interactionList;

    /**
     * @Rest\Attribute(name="firstName", type="string")
     */
    private $firstName;

    /**
     * @Rest\Attribute(name="lastName", type="string")
     */
    private $lastName;

    /**
     * @Rest\Attribute(name="fullName", type="string")
     */
    private $fullName;

    /**
     * @Rest\Attribute(name="facebookId", type="string")
     */
    private $facebookId;

    /**
     * @Rest\Attribute(name="sponsored", type="bool")
     */
    private $sponsored;

    /**
     * @Rest\Attribute(name="FBData", type="array")
     */
    private $FBData;

    /**
     * @Rest\Attribute(name="email", type="string")
     */
    private $email;

    /**
     * @Rest\Attribute(name="gender", type="string")
     */
    private $gender;

    /**
     * @Rest\Attribute(name="avatar", type="string")
     */
    private $avatar;

    /**
     * @Rest\Attribute(name="city", type="string")
     */
    private $city;

    /**
     * @Rest\Attribute(name="address", type="string")
     */
    private $address;

    /**
     * @Rest\Attribute(name="birthday", type="string")
     */
    private $birthday;

    /**
     * @Rest\Attribute(name="token", type="string")
     */
    private $token;

    /**
     * @Rest\Attribute(name="phoneNumber", type="string")
     */
    private $phoneNumber;

    /**
     * @Rest\Attribute(name="userInformation", type="string")
     */
    private $userInformation;

    /**
     * @Rest\Attribute(name="externalCredentials", type="array")
     */
    private $externalCredentials;

    /**
     * @Rest\Attribute(name="teamMemberInformation", type="string")
     */
    private $teamMemberInformation;

    /**
     * @Rest\Attribute(name="emailCore", type="string")
     */
    private $emailCore;

    /**
     * @Rest\Attribute(name="mpdSlug", type="string")
     */
    private $mpdSlug;

    /**
     * @Rest\Attribute(name="impersonationId", type="int")
     */
    private $impersonationId;

    /**
     * @Rest\Attribute(name="accountNonExpired", type="bool")
     */
    private $accountNonExpired;

    /**
     * @Rest\Attribute(name="accountNonLocked", type="bool")
     */
    private $accountNonLocked;

    /**
     * @Rest\Attribute(name="credentialsNonExpired", type="bool")
     */
    private $credentialsNonExpired;

    /**
     * @Rest\Attribute(name="enabled", type="bool")
     */
    private $enabled;

    /**
     * @Rest\Attribute(name="roles", type="array")
     */
    private $roles;

    /**
     * @Rest\Attribute(name="username", type="string")
     */
    private $username;

    /**
     * @Rest\Attribute(name="usernameCanonical", type="string")
     */
    private $usernameCanonical;

    /**
     * @Rest\Attribute(name="salt", type="string")
     */
    private $salt;

    /**
     * @Rest\Attribute(name="emailCanonical", type="string")
     */
    private $emailCanonical;

    /**
     * @Rest\Attribute(name="lastLogin", type="string")
     */
    private $lastLogin;

    /**
     * @Rest\Attribute(name="confirmationToken", type="string")
     */
    private $confirmationToken;

    /**
     * @Rest\Attribute(name="superAdmin", type="bool")
     */
    private $superAdmin;

    /**
     * @Rest\Attribute(name="groups", type="array")
     */
    private $groups;

    /**
     * @Rest\Attribute(name="groupNames", type="string")
     */
    private $groupNames;

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of uuid
     */ 
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * Set the value of uuid
     *
     * @return  self
     */ 
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;

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
     * @return  self
     */ 
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get the value of savedSearch
     */ 
    public function getSavedSearch()
    {
        return $this->savedSearch;
    }

    /**
     * Set the value of savedSearch
     *
     * @return  self
     */ 
    public function setSavedSearch($savedSearch)
    {
        $this->savedSearch = $savedSearch;

        return $this;
    }

    /**
     * Get the value of savedSearchList
     */ 
    public function getSavedSearchList()
    {
        return $this->savedSearchList;
    }

    /**
     * Set the value of savedSearchList
     *
     * @return  self
     */ 
    public function setSavedSearchList($savedSearchList)
    {
        $this->savedSearchList = $savedSearchList;

        return $this;
    }

    /**
     * Get the value of claimedActivity
     */ 
    public function getClaimedActivity()
    {
        return $this->claimedActivity;
    }

    /**
     * Set the value of claimedActivity
     *
     * @return  self
     */ 
    public function setClaimedActivity($claimedActivity)
    {
        $this->claimedActivity = $claimedActivity;

        return $this;
    }

    /**
     * Get the value of claimedActivityList
     */ 
    public function getClaimedActivityList()
    {
        return $this->claimedActivityList;
    }

    /**
     * Set the value of claimedActivityList
     *
     * @return  self
     */ 
    public function setClaimedActivityList($claimedActivityList)
    {
        $this->claimedActivityList = $claimedActivityList;

        return $this;
    }

    /**
     * Get the value of interactionList
     */ 
    public function getInteractionList()
    {
        return $this->interactionList;
    }

    /**
     * Set the value of interactionList
     *
     * @return  self
     */ 
    public function setInteractionList($interactionList)
    {
        $this->interactionList = $interactionList;

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
     * @return  self
     */ 
    public function setFirstName($firstName)
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
     * @return  self
     */ 
    public function setLastName($lastName)
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
     * @return  self
     */ 
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;

        return $this;
    }

    /**
     * Get the value of facebookId
     */ 
    public function getFacebookId()
    {
        return $this->facebookId;
    }

    /**
     * Set the value of facebookId
     *
     * @return  self
     */ 
    public function setFacebookId($facebookId)
    {
        $this->facebookId = $facebookId;

        return $this;
    }

    /**
     * Get the value of sponsored
     */ 
    public function getSponsored()
    {
        return $this->sponsored;
    }

    /**
     * Set the value of sponsored
     *
     * @return  self
     */ 
    public function setSponsored($sponsored)
    {
        $this->sponsored = $sponsored;

        return $this;
    }

    /**
     * Get the value of FBData
     */ 
    public function getFBData()
    {
        return $this->FBData;
    }

    /**
     * Set the value of FBData
     *
     * @return  self
     */ 
    public function setFBData($FBData)
    {
        $this->FBData = $FBData;

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
     * @return  self
     */ 
    public function setEmail($email)
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
     * @return  self
     */ 
    public function setGender($gender)
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
     * @return  self
     */ 
    public function setAvatar($avatar)
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
     * @return  self
     */ 
    public function setCity($city)
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
     * @return  self
     */ 
    public function setAddress($address)
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
     * @return  self
     */ 
    public function setBirthday($birthday)
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
     * @return  self
     */ 
    public function setToken($token)
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
     * @return  self
     */ 
    public function setPhoneNumber($phoneNumber)
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
     * @return  self
     */ 
    public function setUserInformation($userInformation)
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
     * @return  self
     */ 
    public function setExternalCredentials($externalCredentials)
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
     * @return  self
     */ 
    public function setTeamMemberInformation($teamMemberInformation)
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
     * @return  self
     */ 
    public function setEmailCore($emailCore)
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
     * @return  self
     */ 
    public function setMpdSlug($mpdSlug)
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
     * @return  self
     */ 
    public function setImpersonationId($impersonationId)
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
     * @return  self
     */ 
    public function setAccountNonExpired($accountNonExpired)
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
     * @return  self
     */ 
    public function setAccountNonLocked($accountNonLocked)
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
     * @return  self
     */ 
    public function setCredentialsNonExpired($credentialsNonExpired)
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
     * @return  self
     */ 
    public function setEnabled($enabled)
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
     * @return  self
     */ 
    public function setRoles($roles)
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
     * @return  self
     */ 
    public function setUsername($username)
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
     * @return  self
     */ 
    public function setUsernameCanonical($usernameCanonical)
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
     * @return  self
     */ 
    public function setSalt($salt)
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
     * @return  self
     */ 
    public function setEmailCanonical($emailCanonical)
    {
        $this->emailCanonical = $emailCanonical;

        return $this;
    }

    /**
     * Get the value of lastLogin
     */ 
    public function getLastLogin()
    {
        return $this->lastLogin;
    }

    /**
     * Set the value of lastLogin
     *
     * @return  self
     */ 
    public function setLastLogin($lastLogin)
    {
        $this->lastLogin = $lastLogin;

        return $this;
    }

    /**
     * Get the value of confirmationToken
     */ 
    public function getConfirmationToken()
    {
        return $this->confirmationToken;
    }

    /**
     * Set the value of confirmationToken
     *
     * @return  self
     */ 
    public function setConfirmationToken($confirmationToken)
    {
        $this->confirmationToken = $confirmationToken;

        return $this;
    }

    /**
     * Get the value of superAdmin
     */ 
    public function getSuperAdmin()
    {
        return $this->superAdmin;
    }

    /**
     * Set the value of superAdmin
     *
     * @return  self
     */ 
    public function setSuperAdmin($superAdmin)
    {
        $this->superAdmin = $superAdmin;

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
     * @return  self
     */ 
    public function setPasswordRequestedAt($passwordRequestedAt)
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
     * @return  self
     */ 
    public function setPasswordRequestNonExpired($passwordRequestNonExpired)
    {
        $this->passwordRequestNonExpired = $passwordRequestNonExpired;

        return $this;
    }

    /**
     * Get the value of groups
     */ 
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * Set the value of groups
     *
     * @return  self
     */ 
    public function setGroups($groups)
    {
        $this->groups = $groups;

        return $this;
    }

    /**
     * Get the value of groupNames
     */ 
    public function getGroupNames()
    {
        return $this->groupNames;
    }

    /**
     * Set the value of groupNames
     *
     * @return  self
     */ 
    public function setGroupNames($groupNames)
    {
        $this->groupNames = $groupNames;

        return $this;
    }

    /**
     * Get the value of idUser
     */ 
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set the value of idUser
     *
     * @return  self
     */ 
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }
}