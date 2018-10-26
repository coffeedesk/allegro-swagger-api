<?php
/**
 * UserRating
 *
 * PHP version 5
 *
 * @category Class
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Allegro REST API
 *
 * https://developer.allegro.pl
 *
 * OpenAPI spec version: 1.0
 * Contact: api@allegro.pl
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.2-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AllegroApi\Model;

use \ArrayAccess;
use \AllegroApi\ObjectSerializer;

/**
 * UserRating Class Doc Comment
 *
 * @category Class
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class UserRating implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UserRating';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'answer' => '\AllegroApi\Model\Answer',
        'buyer' => '\AllegroApi\Model\User',
        'comment' => 'string',
        'created_at' => '\DateTime',
        'excluded_from_average_rates' => 'bool',
        'id' => 'string',
        'order' => '\AllegroApi\Model\Order',
        'rates' => '\AllegroApi\Model\Rates',
        'recommended' => 'bool',
        'removal' => '\AllegroApi\Model\Removal'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'answer' => null,
        'buyer' => null,
        'comment' => null,
        'created_at' => 'date-time',
        'excluded_from_average_rates' => null,
        'id' => null,
        'order' => null,
        'rates' => null,
        'recommended' => null,
        'removal' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'answer' => 'answer',
        'buyer' => 'buyer',
        'comment' => 'comment',
        'created_at' => 'createdAt',
        'excluded_from_average_rates' => 'excludedFromAverageRates',
        'id' => 'id',
        'order' => 'order',
        'rates' => 'rates',
        'recommended' => 'recommended',
        'removal' => 'removal'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'answer' => 'setAnswer',
        'buyer' => 'setBuyer',
        'comment' => 'setComment',
        'created_at' => 'setCreatedAt',
        'excluded_from_average_rates' => 'setExcludedFromAverageRates',
        'id' => 'setId',
        'order' => 'setOrder',
        'rates' => 'setRates',
        'recommended' => 'setRecommended',
        'removal' => 'setRemoval'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'answer' => 'getAnswer',
        'buyer' => 'getBuyer',
        'comment' => 'getComment',
        'created_at' => 'getCreatedAt',
        'excluded_from_average_rates' => 'getExcludedFromAverageRates',
        'id' => 'getId',
        'order' => 'getOrder',
        'rates' => 'getRates',
        'recommended' => 'getRecommended',
        'removal' => 'getRemoval'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['answer'] = isset($data['answer']) ? $data['answer'] : null;
        $this->container['buyer'] = isset($data['buyer']) ? $data['buyer'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['excluded_from_average_rates'] = isset($data['excluded_from_average_rates']) ? $data['excluded_from_average_rates'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['rates'] = isset($data['rates']) ? $data['rates'] : null;
        $this->container['recommended'] = isset($data['recommended']) ? $data['recommended'] : null;
        $this->container['removal'] = isset($data['removal']) ? $data['removal'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['buyer'] === null) {
            $invalidProperties[] = "'buyer' can't be null";
        }
        if ($this->container['comment'] === null) {
            $invalidProperties[] = "'comment' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['recommended'] === null) {
            $invalidProperties[] = "'recommended' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets answer
     *
     * @return \AllegroApi\Model\Answer|null
     */
    public function getAnswer()
    {
        return $this->container['answer'];
    }

    /**
     * Sets answer
     *
     * @param \AllegroApi\Model\Answer|null $answer answer
     *
     * @return $this
     */
    public function setAnswer($answer)
    {
        $this->container['answer'] = $answer;

        return $this;
    }

    /**
     * Gets buyer
     *
     * @return \AllegroApi\Model\User
     */
    public function getBuyer()
    {
        return $this->container['buyer'];
    }

    /**
     * Sets buyer
     *
     * @param \AllegroApi\Model\User $buyer buyer
     *
     * @return $this
     */
    public function setBuyer($buyer)
    {
        $this->container['buyer'] = $buyer;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment Buyer's text comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at Creation datetime in ISO 8601 format
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets excluded_from_average_rates
     *
     * @return bool|null
     */
    public function getExcludedFromAverageRates()
    {
        return $this->container['excluded_from_average_rates'];
    }

    /**
     * Sets excluded_from_average_rates
     *
     * @param bool|null $excluded_from_average_rates If true this rating was not included in calculating average user rates
     *
     * @return $this
     */
    public function setExcludedFromAverageRates($excluded_from_average_rates)
    {
        $this->container['excluded_from_average_rates'] = $excluded_from_average_rates;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Rating id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets order
     *
     * @return \AllegroApi\Model\Order|null
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param \AllegroApi\Model\Order|null $order order
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets rates
     *
     * @return \AllegroApi\Model\Rates|null
     */
    public function getRates()
    {
        return $this->container['rates'];
    }

    /**
     * Sets rates
     *
     * @param \AllegroApi\Model\Rates|null $rates rates
     *
     * @return $this
     */
    public function setRates($rates)
    {
        $this->container['rates'] = $rates;

        return $this;
    }

    /**
     * Gets recommended
     *
     * @return bool
     */
    public function getRecommended()
    {
        return $this->container['recommended'];
    }

    /**
     * Sets recommended
     *
     * @param bool $recommended Whether buyer recommends the order
     *
     * @return $this
     */
    public function setRecommended($recommended)
    {
        $this->container['recommended'] = $recommended;

        return $this;
    }

    /**
     * Gets removal
     *
     * @return \AllegroApi\Model\Removal|null
     */
    public function getRemoval()
    {
        return $this->container['removal'];
    }

    /**
     * Sets removal
     *
     * @param \AllegroApi\Model\Removal|null $removal removal
     *
     * @return $this
     */
    public function setRemoval($removal)
    {
        $this->container['removal'] = $removal;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


