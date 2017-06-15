<?php
/**
 * Feedback
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
 * Feedback Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Feedback implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Feedback';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'user' => '\Swagger\Client\Model\User',
        't_client' => 'int',
        'log' => 'bool',
        'callback' => 'string',
        'event' => 'string',
        'properties' => 'object'
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
        'user' => 'user',
        't_client' => 't_client',
        'log' => 'log',
        'callback' => 'callback',
        'event' => 'event',
        'properties' => 'properties'
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
        'user' => 'setUser',
        't_client' => 'setTClient',
        'log' => 'setLog',
        'callback' => 'setCallback',
        'event' => 'setEvent',
        'properties' => 'setProperties'
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
        'user' => 'getUser',
        't_client' => 'getTClient',
        'log' => 'getLog',
        'callback' => 'getCallback',
        'event' => 'getEvent',
        'properties' => 'getProperties'
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
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['t_client'] = isset($data['t_client']) ? $data['t_client'] : null;
        $this->container['log'] = isset($data['log']) ? $data['log'] : null;
        $this->container['callback'] = isset($data['callback']) ? $data['callback'] : null;
        $this->container['event'] = isset($data['event']) ? $data['event'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['user'] === null) {
            $invalid_properties[] = "'user' can't be null";
        }
        if ($this->container['t_client'] === null) {
            $invalid_properties[] = "'t_client' can't be null";
        }
        if (($this->container['t_client'] < 0.0)) {
            $invalid_properties[] = "invalid value for 't_client', must be bigger than or equal to 0.0.";
        }

        if ($this->container['event'] === null) {
            $invalid_properties[] = "'event' can't be null";
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
        if ($this->container['user'] === null) {
            return false;
        }
        if ($this->container['t_client'] === null) {
            return false;
        }
        if ($this->container['t_client'] < 0.0) {
            return false;
        }
        if ($this->container['event'] === null) {
            return false;
        }
        return true;
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
            throw new \InvalidArgumentException('invalid value for $t_client when calling Feedback., must be bigger than or equal to 0.0.');
        }
        $this->container['t_client'] = $t_client;

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
     * Gets event
     * @return string
     */
    public function getEvent()
    {
        return $this->container['event'];
    }

    /**
     * Sets event
     * @param string $event
     * @return $this
     */
    public function setEvent($event)
    {
        $this->container['event'] = $event;

        return $this;
    }

    /**
     * Gets properties
     * @return object
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     * @param object $properties
     * @return $this
     */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;

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


