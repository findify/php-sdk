<?php
/**
 * AutocompleteRequest
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
 * OpenAPI spec version: 3.15.0
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
 * AutocompleteRequest Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AutocompleteRequest implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'AutocompleteRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'q' => 'string',
        'user' => '\Swagger\Client\Model\User',
        't_client' => 'int',
        'suggestion_limit' => 'int',
        'item_limit' => 'int',
        'callback' => 'string',
        'log' => 'bool'
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
        'q' => 'q',
        'user' => 'user',
        't_client' => 't_client',
        'suggestion_limit' => 'suggestion_limit',
        'item_limit' => 'item_limit',
        'callback' => 'callback',
        'log' => 'log'
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
        'q' => 'setQ',
        'user' => 'setUser',
        't_client' => 'setTClient',
        'suggestion_limit' => 'setSuggestionLimit',
        'item_limit' => 'setItemLimit',
        'callback' => 'setCallback',
        'log' => 'setLog'
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
        'q' => 'getQ',
        'user' => 'getUser',
        't_client' => 'getTClient',
        'suggestion_limit' => 'getSuggestionLimit',
        'item_limit' => 'getItemLimit',
        'callback' => 'getCallback',
        'log' => 'getLog'
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
        $this->container['q'] = isset($data['q']) ? $data['q'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['t_client'] = isset($data['t_client']) ? $data['t_client'] : null;
        $this->container['suggestion_limit'] = isset($data['suggestion_limit']) ? $data['suggestion_limit'] : null;
        $this->container['item_limit'] = isset($data['item_limit']) ? $data['item_limit'] : null;
        $this->container['callback'] = isset($data['callback']) ? $data['callback'] : null;
        $this->container['log'] = isset($data['log']) ? $data['log'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['q'] === null) {
            $invalid_properties[] = "'q' can't be null";
        }
        if ($this->container['user'] === null) {
            $invalid_properties[] = "'user' can't be null";
        }
        if ($this->container['t_client'] === null) {
            $invalid_properties[] = "'t_client' can't be null";
        }
        if (($this->container['t_client'] < 0.0)) {
            $invalid_properties[] = "invalid value for 't_client', must be bigger than or equal to 0.0.";
        }

        if (!is_null($this->container['suggestion_limit']) && ($this->container['suggestion_limit'] < 0.0)) {
            $invalid_properties[] = "invalid value for 'suggestion_limit', must be bigger than or equal to 0.0.";
        }

        if (!is_null($this->container['item_limit']) && ($this->container['item_limit'] < 0.0)) {
            $invalid_properties[] = "invalid value for 'item_limit', must be bigger than or equal to 0.0.";
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
        if ($this->container['q'] === null) {
            return false;
        }
        if ($this->container['user'] === null) {
            return false;
        }
        if ($this->container['t_client'] === null) {
            return false;
        }
        if ($this->container['t_client'] < 0.0) {
            return false;
        }
        if ($this->container['suggestion_limit'] < 0.0) {
            return false;
        }
        if ($this->container['item_limit'] < 0.0) {
            return false;
        }
        return true;
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
     * Gets user
     * @return \Swagger\Client\Model\User
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     * @param \Swagger\Client\Model\User $user
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets t_client
     * @return int
     */
    public function getTClient()
    {
        return $this->container['t_client'];
    }

    /**
     * Sets t_client
     * @param int $t_client
     * @return $this
     */
    public function setTClient($t_client)
    {

        if ($t_client < 0.0) {
            throw new \InvalidArgumentException('invalid value for $t_client when calling AutocompleteRequest., must be bigger than or equal to 0.0.');
        }
        $this->container['t_client'] = $t_client;

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

        if ($suggestion_limit < 0.0) {
            throw new \InvalidArgumentException('invalid value for $suggestion_limit when calling AutocompleteRequest., must be bigger than or equal to 0.0.');
        }
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

        if ($item_limit < 0.0) {
            throw new \InvalidArgumentException('invalid value for $item_limit when calling AutocompleteRequest., must be bigger than or equal to 0.0.');
        }
        $this->container['item_limit'] = $item_limit;

        return $this;
    }

    /**
     * Gets callback
     * @return string
     */
    public function getCallback()
    {
        return $this->container['callback'];
    }

    /**
     * Sets callback
     * @param string $callback
     * @return $this
     */
    public function setCallback($callback)
    {
        $this->container['callback'] = $callback;

        return $this;
    }

    /**
     * Gets log
     * @return bool
     */
    public function getLog()
    {
        return $this->container['log'];
    }

    /**
     * Sets log
     * @param bool $log
     * @return $this
     */
    public function setLog($log)
    {
        $this->container['log'] = $log;

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


