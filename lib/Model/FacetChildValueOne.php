<?php
/**
 * FacetChildValueOne
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
 * FacetChildValueOne Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class FacetChildValueOne implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'FacetChildValueOne';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'selected' => 'bool',
        'value' => 'string',
        'count' => 'int',
        'name' => 'string',
        'has_children' => 'bool',
        'from' => 'int',
        'to' => 'int',
        'children' => '\Swagger\Client\Model\FacetChildValueTwo[]'
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
        'selected' => 'selected',
        'value' => 'value',
        'count' => 'count',
        'name' => 'name',
        'has_children' => 'has_children',
        'from' => 'from',
        'to' => 'to',
        'children' => 'children'
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
        'selected' => 'setSelected',
        'value' => 'setValue',
        'count' => 'setCount',
        'name' => 'setName',
        'has_children' => 'setHasChildren',
        'from' => 'setFrom',
        'to' => 'setTo',
        'children' => 'setChildren'
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
        'selected' => 'getSelected',
        'value' => 'getValue',
        'count' => 'getCount',
        'name' => 'getName',
        'has_children' => 'getHasChildren',
        'from' => 'getFrom',
        'to' => 'getTo',
        'children' => 'getChildren'
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
        $this->container['selected'] = isset($data['selected']) ? $data['selected'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['has_children'] = isset($data['has_children']) ? $data['has_children'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['selected'] === null) {
            $invalid_properties[] = "'selected' can't be null";
        }
        if ($this->container['value'] === null) {
            $invalid_properties[] = "'value' can't be null";
        }
        if ($this->container['count'] === null) {
            $invalid_properties[] = "'count' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['has_children'] === null) {
            $invalid_properties[] = "'has_children' can't be null";
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
        if ($this->container['selected'] === null) {
            return false;
        }
        if ($this->container['value'] === null) {
            return false;
        }
        if ($this->container['count'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['has_children'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets selected
     * @return bool
     */
    public function getSelected()
    {
        return $this->container['selected'];
    }

    /**
     * Sets selected
     * @param bool $selected
     * @return $this
     */
    public function setSelected($selected)
    {
        $this->container['selected'] = $selected;

        return $this;
    }

    /**
     * Gets value
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     * @param string $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets count
     * @return int
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     * @param int $count
     * @return $this
     */
    public function setCount($count)
    {
        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets has_children
     * @return bool
     */
    public function getHasChildren()
    {
        return $this->container['has_children'];
    }

    /**
     * Sets has_children
     * @param bool $has_children
     * @return $this
     */
    public function setHasChildren($has_children)
    {
        $this->container['has_children'] = $has_children;

        return $this;
    }

    /**
     * Gets from
     * @return int
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     * @param int $from
     * @return $this
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets to
     * @return int
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     * @param int $to
     * @return $this
     */
    public function setTo($to)
    {
        $this->container['to'] = $to;

        return $this;
    }

    /**
     * Gets children
     * @return \Swagger\Client\Model\FacetChildValueTwo[]
     */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
     * Sets children
     * @param \Swagger\Client\Model\FacetChildValueTwo[] $children
     * @return $this
     */
    public function setChildren($children)
    {
        $this->container['children'] = $children;

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


