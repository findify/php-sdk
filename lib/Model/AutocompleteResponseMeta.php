<?php
/**
 * AutocompleteResponseMeta
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Findify API
 *
 * Findify Search, Recommendations and Smart Collection API
 *
 * OpenAPI spec version: 3.10.0
 * Contact: yourfriends@findify.io
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * AutocompleteResponseMeta Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AutocompleteResponseMeta implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'AutocompleteResponse_meta';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'rid' => 'string',
        'q' => 'string',
        'suggestion_limit' => 'int',
        'item_limit' => 'int'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'rid' => 'rid',
        'q' => 'q',
        'suggestion_limit' => 'suggestion_limit',
        'item_limit' => 'item_limit'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'rid' => 'setRid',
        'q' => 'setQ',
        'suggestion_limit' => 'setSuggestionLimit',
        'item_limit' => 'setItemLimit'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'rid' => 'getRid',
        'q' => 'getQ',
        'suggestion_limit' => 'getSuggestionLimit',
        'item_limit' => 'getItemLimit'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['rid'] = isset($data['rid']) ? $data['rid'] : null;
        $this->container['q'] = isset($data['q']) ? $data['q'] : null;
        $this->container['suggestion_limit'] = isset($data['suggestion_limit']) ? $data['suggestion_limit'] : null;
        $this->container['item_limit'] = isset($data['item_limit']) ? $data['item_limit'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['rid'] === null) {
            $invalid_properties[] = "'rid' can't be null";
        }
        if ($this->container['q'] === null) {
            $invalid_properties[] = "'q' can't be null";
        }
        if ($this->container['suggestion_limit'] === null) {
            $invalid_properties[] = "'suggestion_limit' can't be null";
        }
        if ($this->container['item_limit'] === null) {
            $invalid_properties[] = "'item_limit' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['rid'] === null) {
            return false;
        }
        if ($this->container['q'] === null) {
            return false;
        }
        if ($this->container['suggestion_limit'] === null) {
            return false;
        }
        if ($this->container['item_limit'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets rid
     * @return string
     */
    public function getRid()
    {
        return $this->container['rid'];
    }

    /**
     * Sets rid
     * @param string $rid
     * @return $this
     */
    public function setRid($rid)
    {
        $this->container['rid'] = $rid;

        return $this;
    }

    /**
     * Gets q
     * @return string
     */
    public function getQ()
    {
        return $this->container['q'];
    }

    /**
     * Sets q
     * @param string $q
     * @return $this
     */
    public function setQ($q)
    {
        $this->container['q'] = $q;

        return $this;
    }

    /**
     * Gets suggestion_limit
     * @return int
     */
    public function getSuggestionLimit()
    {
        return $this->container['suggestion_limit'];
    }

    /**
     * Sets suggestion_limit
     * @param int $suggestion_limit
     * @return $this
     */
    public function setSuggestionLimit($suggestion_limit)
    {
        $this->container['suggestion_limit'] = $suggestion_limit;

        return $this;
    }

    /**
     * Gets item_limit
     * @return int
     */
    public function getItemLimit()
    {
        return $this->container['item_limit'];
    }

    /**
     * Sets item_limit
     * @param int $item_limit
     * @return $this
     */
    public function setItemLimit($item_limit)
    {
        $this->container['item_limit'] = $item_limit;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


