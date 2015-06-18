<?php

namespace Proxies\__CG__\ZectranetBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Notification extends \ZectranetBundle\Entity\Notification implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'ZectranetBundle\\Entity\\Notification' . "\0" . 'id', '' . "\0" . 'ZectranetBundle\\Entity\\Notification' . "\0" . 'userid', '' . "\0" . 'ZectranetBundle\\Entity\\Notification' . "\0" . 'user', '' . "\0" . 'ZectranetBundle\\Entity\\Notification' . "\0" . 'resourceid', '' . "\0" . 'ZectranetBundle\\Entity\\Notification' . "\0" . 'destinationid', '' . "\0" . 'ZectranetBundle\\Entity\\Notification' . "\0" . 'conversation_id', '' . "\0" . 'ZectranetBundle\\Entity\\Notification' . "\0" . 'type', '' . "\0" . 'ZectranetBundle\\Entity\\Notification' . "\0" . 'message', '' . "\0" . 'ZectranetBundle\\Entity\\Notification' . "\0" . 'activated');
        }

        return array('__isInitialized__', '' . "\0" . 'ZectranetBundle\\Entity\\Notification' . "\0" . 'id', '' . "\0" . 'ZectranetBundle\\Entity\\Notification' . "\0" . 'userid', '' . "\0" . 'ZectranetBundle\\Entity\\Notification' . "\0" . 'user', '' . "\0" . 'ZectranetBundle\\Entity\\Notification' . "\0" . 'resourceid', '' . "\0" . 'ZectranetBundle\\Entity\\Notification' . "\0" . 'destinationid', '' . "\0" . 'ZectranetBundle\\Entity\\Notification' . "\0" . 'conversation_id', '' . "\0" . 'ZectranetBundle\\Entity\\Notification' . "\0" . 'type', '' . "\0" . 'ZectranetBundle\\Entity\\Notification' . "\0" . 'message', '' . "\0" . 'ZectranetBundle\\Entity\\Notification' . "\0" . 'activated');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Notification $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserid($userid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserid', array($userid));

        return parent::setUserid($userid);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserid', array());

        return parent::getUserid();
    }

    /**
     * {@inheritDoc}
     */
    public function setResourceid($resourceid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setResourceid', array($resourceid));

        return parent::setResourceid($resourceid);
    }

    /**
     * {@inheritDoc}
     */
    public function getResourceid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResourceid', array());

        return parent::getResourceid();
    }

    /**
     * {@inheritDoc}
     */
    public function setDestinationid($destinationid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDestinationid', array($destinationid));

        return parent::setDestinationid($destinationid);
    }

    /**
     * {@inheritDoc}
     */
    public function getDestinationid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDestinationid', array());

        return parent::getDestinationid();
    }

    /**
     * {@inheritDoc}
     */
    public function setType($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', array($type));

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', array());

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function setMessage($message)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMessage', array($message));

        return parent::setMessage($message);
    }

    /**
     * {@inheritDoc}
     */
    public function getMessage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMessage', array());

        return parent::getMessage();
    }

    /**
     * {@inheritDoc}
     */
    public function setActivated($activated)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActivated', array($activated));

        return parent::setActivated($activated);
    }

    /**
     * {@inheritDoc}
     */
    public function getActivated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActivated', array());

        return parent::getActivated();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(\ZectranetBundle\Entity\User $user = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', array($user));

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', array());

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function getInArray()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInArray', array());

        return parent::getInArray();
    }

    /**
     * {@inheritDoc}
     */
    public function setConversationId($conversationId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setConversationId', array($conversationId));

        return parent::setConversationId($conversationId);
    }

    /**
     * {@inheritDoc}
     */
    public function getConversationId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConversationId', array());

        return parent::getConversationId();
    }

}
