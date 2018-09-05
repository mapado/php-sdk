<?php
namespace Mapado\Sdk\Entity;

use DateTime;
use Mapado\RestClientSdk\Mapping\Annotations as Rest;

/**
 * @Rest\Entity(key="activities", repository="\Mapado\Sdk\Entity\Repository\ActivityRepository")
 */
class Activity
{
    /**
     * @var string
     * @Rest\Id
     * @Rest\Attribute(name="@id", type="string")
     */
    private $id;

    /**
     * @var string
     * @Rest\Attribute(name="title", type="string")
     */
    private $title;

    /**
     * @var string
     * @Rest\Attribute(name="activityType", type="string")
     */
    private $activityType;

    /**
     * @var string
     * @Rest\Attribute(name="ldType", type="string")
     */
    private $ldType;

    /**
     * @var string
     * @Rest\Attribute(name="description", type="string")
     */
    private $description;

    /**
     * @var string
     * @Rest\Attribute(name="shortDescription", type="string")
     */
    private $shortDescription;

    /**
     * @var array
     * @Rest\Attribute(name="imageList", type="array")
     */
    private $imageList;

    /**
     * @var array
     * @Rest\Attribute(name="imageSizes", type="array")
     */
    private $imageSizes;

    /**
     * @var array
     * @Rest\Attribute(name="audioList", type="array")
     */
    private $audioList;

    /**
     * @var Activity
     * @Rest\ManyToOne(name="place", targetEntity="Activity")
     */
    private $place;

    /**
     * @var string
     * @Rest\Attribute(name="priceList", type="string")
     */
    private $priceList;

    /**
     * @var int
     * @Rest\Attribute(name="simplePrice", type="int")
     */
    private $simplePrice;

    /**
     * @var array
     * @Rest\Attribute(name="urlList", type="array")
     */
    private $urlList;

    /**
     * @var array
     * @Rest\Attribute(name="emailList", type="array")
     */
    private $emailList;

    /**
     * @var array
     * @Rest\Attribute(name="phoneList", type="array")
     */
    private $phoneList;

    /**
     * @var string
     * @Rest\Attribute(name="formattedSchedule", type="string")
     */
    private $formattedSchedule;

    /**
     * @var DateTime
     * @Rest\Attribute(name="firstDate", type="datetime")
     */
    private $firstDate;

    /**
     * @var DateTime
     * @Rest\Attribute(name="lastDate", type="datetime")
     */
    private $lastDate;

    /**
     * @var DateTime
     * @Rest\Attribute(name="nextDate", type="datetime")
     */
    private $nextDate;

    /**
     * @var bool
     * @Rest\Attribute(name="canceled", type="bool")
     */
    private $canceled;

    /**
     * @var bool
     * @Rest\Attribute(name="soldOut", type="bool")
     */
    private $soldOut;

    /**
     * @var array
     * @Rest\Attribute(name="semanticTags", type="array")
     */
    private $semanticTags;

    /**
     * @var array
     * @Rest\Attribute(name="externalMediaList", type="array")
     */
    private $externalMediaList;

    /**
     * @var int
     * @Rest\Attribute(name="ticketingId", type="int")
     */
    private $ticketingId;

    /**
     * @var string
     * @Rest\Attribute(name="apiSlug", type="string")
     */
    private $apiSlug;

    /**
     * @var string
     * @Rest\Attribute(name="image", type="string")
     */
    private $image;

    /**
     * @var string
     * @Rest\Attribute(name="frontPlaceName", type="string")
     */
    private $frontPlaceName;

    /**
     * @var string
     * @Rest\Attribute(name="shortDate", type="string")
     */
    private $shortDate;

    /**
     * @var string
     * @Rest\Attribute(name="address", type="string")
     */
    private $address;

    /**
     * @var string
     * @Rest\Attribute(name="slug", type="string")
     */
    private $slug;

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
     */
    public function setId($id): self
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
     */
    public function setTitle($title): self
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
     */
    public function setActivityType($activityType): self
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
     */
    public function setLdType($ldType): self
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
     */
    public function setDescription($description): self
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
     */
    public function setShortDescription($shortDescription): self
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
     */
    public function setImageList($imageList): self
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
     */
    public function setAudioList($audioList): self
    {
        $this->audioList = $audioList;

        return $this;
    }

    /**
     * Get the value of place
     *
     * @return ?Activity
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set the value of place
     *
     */
    public function setPlace($place): self
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
     */
    public function setPriceList($priceList): self
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
     */
    public function setSimplePrice($simplePrice): self
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
     */
    public function setUrlList($urlList): self
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
     */
    public function setEmailList($emailList): self
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
     */
    public function setPhoneList($phoneList): self
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
     */
    public function setFormattedSchedule($formattedSchedule): self
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
     */
    public function setFirstDate($firstDate): self
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
     */
    public function setLastDate($lastDate): self
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
     */
    public function setNextDate($nextDate): self
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
     */
    public function setCanceled($canceled): self
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
     */
    public function setSoldOut($soldOut): self
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
     */
    public function setSemanticTags($semanticTags): self
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
     */
    public function setExternalMediaList($externalMediaList): self
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
     */
    public function setTicketingId($ticketingId): self
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
     */
    public function setApiSlug($apiSlug): self
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
     */
    public function setImage($image): self
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
     */
    public function setFrontPlaceName($frontPlaceName): self
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
     */
    public function setShortDate($shortDate): self
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
     */
    public function setAddress($address): self
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get the value of imageSizes
     */
    public function getImageSizes()
    {
        return $this->imageSizes;
    }

    /**
     * Set the value of imageSizes
     *
     */
    public function setImageSizes($imageSizes): self
    {
        $this->imageSizes = $imageSizes;

        return $this;
    }

    /**
     * Get the value of slug
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set the value of slug
     *
     */
    public function setSlug($slug): self
    {
        $this->slug = $slug;

        return $this;
    }
}
