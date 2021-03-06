<?php
/**
 * CollectionResponseMeta
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
 * CollectionResponseMeta Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CollectionResponseMeta implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CollectionResponse_meta';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'rid' => 'string',
        'filters' => '\Swagger\Client\Model\Filter[]',
        'sort' => '\Swagger\Client\Model\Sort[]',
        'limit' => 'int',
        'offset' => 'int',
        'total' => 'int'
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
        'filters' => 'filters',
        'sort' => 'sort',
        'limit' => 'limit',
        'offset' => 'offset',
        'total' => 'total'
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
        'filters' => 'setFilters',
        'sort' => 'setSort',
        'limit' => 'setLimit',
        'offset' => 'setOffset',
        'total' => 'setTotal'
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
        'filters' => 'getFilters',
        'sort' => 'getSort',
        'limit' => 'getLimit',
        'offset' => 'getOffset',
        'total' => 'getTotal'
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
        $this->container['filters'] = isset($data['filters']) ? $data['filters'] : null;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
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
        if ($this->container['sort'] === null) {
            $invalid_properties[] = "'sort' can't be null";
        }
        if ($this->container['limit'] === null) {
            $invalid_properties[] = "'limit' can't be null";
        }
        if ($this->container['offset'] === null) {
            $invalid_properties[] = "'offset' can't be null";
        }
        if ($this->container['total'] === null) {
            $invalid_properties[] = "'total' can't be null";
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
        if ($this->container['sort'] === null) {
            return false;
        }
        if ($this->container['limit'] === null) {
            return false;
        }
        if ($this->container['offset'] === null) {
            return false;
        }
        if ($this->container['total'] === null) {
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
     * Gets filters
     * @return \Swagger\Client\Model\Filter[]
     */
    public function getFilters()
    {
        return $this->container['filters'];
    }

    /**
     * Sets filters
     * @param \Swagger\Client\Model\Filter[] $filters
     * @return $this
     */
    public function setFilters($filters)
    {
        $this->container['filters'] = $filters;

        return $this;
    }

    /**
     * Gets sort
     * @return \Swagger\Client\Model\Sort[]
     */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
     * Sets sort
     * @param \Swagger\Client\Model\Sort[] $sort
     * @return $this
     */
    public function setSort($sort)
    {
        $this->container['sort'] = $sort;

        return $this;
    }

    /**
     * Gets limit
     * @return int
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     * @param int $limit
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;

        return $this;
    }

    /**
     * Gets offset
     * @return int
     */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
     * Sets offset
     * @param int $offset
     * @return $this
     */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;

        return $this;
    }

    /**
     * Gets total
     * @return int
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     * @param int $total
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

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


