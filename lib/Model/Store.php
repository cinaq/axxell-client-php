<?php
/**
 * Store
 *
 * PHP version 5
 *
 * @category Class
 * @package  Axxell
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * axxell-api
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Axxell\Model;

use \ArrayAccess;

/**
 * Store Class Doc Comment
 *
 * @category    Class */
 // @description A store is equivalent to an user account
/** 
 * @package     Axxell
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Store implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Store';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'email' => 'string',
        'api_key' => 'string',
        'password' => 'string',
        'salt' => 'string',
        'store_id' => 'string'
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
        'email' => 'email',
        'api_key' => 'apiKey',
        'password' => 'password',
        'salt' => 'salt',
        'store_id' => 'storeId'
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
        'email' => 'setEmail',
        'api_key' => 'setApiKey',
        'password' => 'setPassword',
        'salt' => 'setSalt',
        'store_id' => 'setStoreId'
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
        'email' => 'getEmail',
        'api_key' => 'getApiKey',
        'password' => 'getPassword',
        'salt' => 'getSalt',
        'store_id' => 'getStoreId'
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
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['api_key'] = isset($data['api_key']) ? $data['api_key'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['salt'] = isset($data['salt']) ? $data['salt'] : null;
        $this->container['store_id'] = isset($data['store_id']) ? $data['store_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['email'] === null) {
            $invalid_properties[] = "'email' can't be null";
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
        if ($this->container['email'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email Username/email used to login. Set this during registration.
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets api_key
     * @return string
     */
    public function getApiKey()
    {
        return $this->container['api_key'];
    }

    /**
     * Sets api_key
     * @param string $api_key Also known as secret key. Read-only
     * @return $this
     */
    public function setApiKey($api_key)
    {
        $this->container['api_key'] = $api_key;

        return $this;
    }

    /**
     * Gets password
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     * @param string $password The password required to login. Set this during registration.
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets salt
     * @return string
     */
    public function getSalt()
    {
        return $this->container['salt'];
    }

    /**
     * Sets salt
     * @param string $salt Internal use
     * @return $this
     */
    public function setSalt($salt)
    {
        $this->container['salt'] = $salt;

        return $this;
    }

    /**
     * Gets store_id
     * @return string
     */
    public function getStoreId()
    {
        return $this->container['store_id'];
    }

    /**
     * Sets store_id
     * @param string $store_id Also known as access key. Read-only
     * @return $this
     */
    public function setStoreId($store_id)
    {
        $this->container['store_id'] = $store_id;

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
            return json_encode(\Axxell\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Axxell\ObjectSerializer::sanitizeForSerialization($this));
    }
}

