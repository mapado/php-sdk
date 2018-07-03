<?php 
namespace Acme\Foo\Bar;

use Mapado\RestClientSdk\Mapping\Annotations as Rest;

/**
 * @Rest\Entity(key="activity")
 */
class Activity {
    /**
     * @Rest\id
     * @Rest\Attribute(name="@id", type="string")
     */
    private $id;

    /**
     * @Rest\Attribute(name="title", type="string")
     */
    private $title;

    /**
     * @Rest\Attribute(name="activityType", type="string")
     */
    private $activityType;

    /**
     * @Rest\Attribute(name="ldType", type="string")
     */
    private $ldType;

    /**
     * @Rest\Attribute(name="description", type="string")
     */
    private $description;

    /**
     * @Rest\Attribute(name="shortDescription", type="string")
     */
    private $shortDescription;

    // Liste d'image (tableau string)
    /**
     * @Rest\Attribute(name="imageList", type="arrayList")
     */
    private $imageList;

    // Liste d'image (tableau string)
    /**
     * @Rest\Attribute(name="audioList", type="arrayList")
     */
    private $audioList;
    
    /**
     * @Rest\Attribute(name="place", type="string")
     */
    private $place;

    /**
     * @Rest\Attribute(name="priceList", type="string")
     */
    private $priceList;
    
    /**
     * @Rest\Attribute(name="simplePrice", type="int")
     */
    private $simplePrice;

    /**
     * @Rest\Attribute(name="urlList", type="arrayList")
     */
    private $urlList;

    /**
     * @Rest\Attribute(name="emailList", type="arrayList")
     */
    private $emailList;

    /**
     * @Rest\Attribute(name="phoneList", type="arrayList")
     */
    private $phoneList;

    /**
     * @Rest\Attribute(name="formattedSchedule", type="string")
     */
    private $formattedSchedule;
    
    /**
     * @Rest\Attribute(name="firstDate", type="dateTime")
     */
    private $firstDate;

    /**
     * @Rest\Attribute(name="lastDate", type="dateTime")
     */
    private $lastDate;

    /**
     * @Rest\Attribute(name="nextDate", type="dateTime")
     */
    private $nextDate;

    /**
     * @Rest\Attribute(name="canceled", type="bool")
     */
    private $canceled;

    /**
     * @Rest\Attribute(name="soldOut", type="bool")
     */
    private $soldOut;

    /**
     * @Rest\Attribute(name="semanticTags", type="arrayList")
     */
    private $semanticTags;

    /**
     * @Rest\Attribute(name="externalMediaList", type="arrayList")
     */
    private $externalMediaList;

    /**
     * @Rest\Attribute(name="ticketingId", type="int")
     */
    private $ticketingId;

    /**
     * @Rest\Attribute(name="apiSlug", type="string")
     */
    private $apiSlug;

    /**
     * @Rest\Attribute(name="image", type="string")
     */
    private $image;

    /**
     * @Rest\Attribute(name="frontPlaceName", type="string")
     */
    private $frontPlaceName;

    /**
     * @Rest\Attribute(name="shortDate", type="string")
     */
    private $shortDate;

    /**
     * @Rest\Attribute(name="address", type="string")
     */
    private $address;

    // getters & setters

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
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of activityType
     */ 
    public function getActivityType()
    {
        return $this->activityType;
    }

    /**
     * Set the value of activityType
     *
     * @return  self
     */ 
    public function setActivityType($activityType)
    {
        $this->activityType = $activityType;

        return $this;
    }

    /**
     * Get the value of ldType
     */ 
    public function getLdType()
    {
        return $this->ldType;
    }

    /**
     * Set the value of ldType
     *
     * @return  self
     */ 
    public function setLdType($ldType)
    {
        $this->ldType = $ldType;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of shortDescription
     */ 
    public function getShortDescription()
    {
        return $this->shortDescription;
    }

    /**
     * Set the value of shortDescription
     *
     * @return  self
     */ 
    public function setShortDescription($shortDescription)
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }

    /**
     * Get the value of imageList
     */ 
    public function getImageList()
    {
        return $this->imageList;
    }

    /**
     * Set the value of imageList
     *
     * @return  self
     */ 
    public function setImageList($imageList)
    {
        $this->imageList = $imageList;

        return $this;
    }

    /**
     * Get the value of audioList
     */ 
    public function getAudioList()
    {
        return $this->audioList;
    }

    /**
     * Set the value of audioList
     *
     * @return  self
     */ 
    public function setAudioList($audioList)
    {
        $this->audioList = $audioList;

        return $this;
    }

    /**
     * Get the value of place
     */ 
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set the value of place
     *
     * @return  self
     */ 
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get the value of priceList
     */ 
    public function getPriceList()
    {
        return $this->priceList;
    }

    /**
     * Set the value of priceList
     *
     * @return  self
     */ 
    public function setPriceList($priceList)
    {
        $this->priceList = $priceList;

        return $this;
    }

    /**
     * Get the value of simplePrice
     */ 
    public function getSimplePrice()
    {
        return $this->simplePrice;
    }

    /**
     * Set the value of simplePrice
     *
     * @return  self
     */ 
    public function setSimplePrice($simplePrice)
    {
        $this->simplePrice = $simplePrice;

        return $this;
    }

    /**
     * Get the value of urlList
     */ 
    public function getUrlList()
    {
        return $this->urlList;
    }

    /**
     * Set the value of urlList
     *
     * @return  self
     */ 
    public function setUrlList($urlList)
    {
        $this->urlList = $urlList;

        return $this;
    }

    /**
     * Get the value of emailList
     */ 
    public function getEmailList()
    {
        return $this->emailList;
    }

    /**
     * Set the value of emailList
     *
     * @return  self
     */ 
    public function setEmailList($emailList)
    {
        $this->emailList = $emailList;

        return $this;
    }

    /**
     * Get the value of phoneList
     */ 
    public function getPhoneList()
    {
        return $this->phoneList;
    }

    /**
     * Set the value of phoneList
     *
     * @return  self
     */ 
    public function setPhoneList($phoneList)
    {
        $this->phoneList = $phoneList;

        return $this;
    }

    /**
     * Get the value of formattedSchedule
     */ 
    public function getFormattedSchedule()
    {
        return $this->formattedSchedule;
    }

    /**
     * Set the value of formattedSchedule
     *
     * @return  self
     */ 
    public function setFormattedSchedule($formattedSchedule)
    {
        $this->formattedSchedule = $formattedSchedule;

        return $this;
    }

    /**
     * Get the value of firstDate
     */ 
    public function getFirstDate()
    {
        return $this->firstDate;
    }

    /**
     * Set the value of firstDate
     *
     * @return  self
     */ 
    public function setFirstDate($firstDate)
    {
        $this->firstDate = $firstDate;

        return $this;
    }

    /**
     * Get the value of lastDate
     */ 
    public function getLastDate()
    {
        return $this->lastDate;
    }

    /**
     * Set the value of lastDate
     *
     * @return  self
     */ 
    public function setLastDate($lastDate)
    {
        $this->lastDate = $lastDate;

        return $this;
    }

    /**
     * Get the value of nextDate
     */ 
    public function getNextDate()
    {
        return $this->nextDate;
    }

    /**
     * Set the value of nextDate
     *
     * @return  self
     */ 
    public function setNextDate($nextDate)
    {
        $this->nextDate = $nextDate;

        return $this;
    }

    /**
     * Get the value of canceled
     */ 
    public function getCanceled()
    {
        return $this->canceled;
    }

    /**
     * Set the value of canceled
     *
     * @return  self
     */ 
    public function setCanceled($canceled)
    {
        $this->canceled = $canceled;

        return $this;
    }

    /**
     * Get the value of soldOut
     */ 
    public function getSoldOut()
    {
        return $this->soldOut;
    }

    /**
     * Set the value of soldOut
     *
     * @return  self
     */ 
    public function setSoldOut($soldOut)
    {
        $this->soldOut = $soldOut;

        return $this;
    }

    /**
     * Get the value of semanticTags
     */ 
    public function getSemanticTags()
    {
        return $this->semanticTags;
    }

    /**
     * Set the value of semanticTags
     *
     * @return  self
     */ 
    public function setSemanticTags($semanticTags)
    {
        $this->semanticTags = $semanticTags;

        return $this;
    }

    /**
     * Get the value of externalMediaList
     */ 
    public function getExternalMediaList()
    {
        return $this->externalMediaList;
    }

    /**
     * Set the value of externalMediaList
     *
     * @return  self
     */ 
    public function setExternalMediaList($externalMediaList)
    {
        $this->externalMediaList = $externalMediaList;

        return $this;
    }

    /**
     * Get the value of ticketingId
     */ 
    public function getTicketingId()
    {
        return $this->ticketingId;
    }

    /**
     * Set the value of ticketingId
     *
     * @return  self
     */ 
    public function setTicketingId($ticketingId)
    {
        $this->ticketingId = $ticketingId;

        return $this;
    }

    /**
     * Get the value of apiSlug
     */ 
    public function getApiSlug()
    {
        return $this->apiSlug;
    }

    /**
     * Set the value of apiSlug
     *
     * @return  self
     */ 
    public function setApiSlug($apiSlug)
    {
        $this->apiSlug = $apiSlug;

        return $this;
    }

    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of frontPlaceName
     */ 
    public function getFrontPlaceName()
    {
        return $this->frontPlaceName;
    }

    /**
     * Set the value of frontPlaceName
     *
     * @return  self
     */ 
    public function setFrontPlaceName($frontPlaceName)
    {
        $this->frontPlaceName = $frontPlaceName;

        return $this;
    }

    /**
     * Get the value of shortDate
     */ 
    public function getShortDate()
    {
        return $this->shortDate;
    }

    /**
     * Set the value of shortDate
     *
     * @return  self
     */ 
    public function setShortDate($shortDate)
    {
        $this->shortDate = $shortDate;

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
}