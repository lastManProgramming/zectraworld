<?php

namespace Proxies\__CG__\ZectranetBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class UserInfo extends \ZectranetBundle\Entity\UserInfo implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'ZectranetBundle\\Entity\\UserInfo' . "\0" . 'id', '' . "\0" . 'ZectranetBundle\\Entity\\UserInfo' . "\0" . 'userID', '' . "\0" . 'ZectranetBundle\\Entity\\UserInfo' . "\0" . 'user', '' . "\0" . 'ZectranetBundle\\Entity\\UserInfo' . "\0" . 'residenceCountry', '' . "\0" . 'ZectranetBundle\\Entity\\UserInfo' . "\0" . 'residenceCountryVisible', '' . "\0" . 'ZectranetBundle\\Entity\\UserInfo' . "\0" . 'workExpirience', '' . "\0" . 'ZectranetBundle\\Entity\\UserInfo' . "\0" . 'workExpirienceVisible', '' . "\0" . 'ZectranetBundle\\Entity\\UserInfo' . "\0" . 'skills', '' . "\0" . 'ZectranetBundle\\Entity\\UserInfo' . "\0" . 'skillsVisible', '' . "\0" . 'ZectranetBundle\\Entity\\UserInfo' . "\0" . 'interests', '' . "\0" . 'ZectranetBundle\\Entity\\UserInfo' . "\0" . 'interestsVisible', '' . "\0" . 'ZectranetBundle\\Entity\\UserInfo' . "\0" . 'volunteerWork', '' . "\0" . 'ZectranetBundle\\Entity\\UserInfo' . "\0" . 'volunteerWorkVisible', '' . "\0" . 'ZectranetBundle\\Entity\\UserInfo' . "\0" . 'societies', '' . "\0" . 'ZectranetBundle\\Entity\\UserInfo' . "\0" . 'societiesVisible', '' . "\0" . 'ZectranetBundle\\Entity\\UserInfo' . "\0" . 'facebook', '' . "\0" . 'ZectranetBundle\\Entity\\UserInfo' . "\0" . 'facebookVisible', '' . "\0" . 'ZectranetBundle\\Entity\\UserInfo' . "\0" . 'twitter', '' . "\0" . 'ZectranetBundle\\Entity\\UserInfo' . "\0" . 'twitterVisible', '' . "\0" . 'ZectranetBundle\\Entity\\UserInfo' . "\0" . 'linkedIn', '' . "\0" . 'ZectranetBundle\\Entity\\UserInfo' . "\0" . 'linkedInVisible', '' . "\0" . 'ZectranetBundle\\Entity\\UserInfo' . "\0" . 'googlePlus', '' . "\0" . 'ZectranetBundle\\Entity\\UserInfo' . "\0" . 'googlePlusVisible');
        }

        return array('__isInitialized__', '' . "\0" . 'ZectranetBundle\\Entity\\UserInfo' . "\0" . 'id', '' . "\0" . 'ZectranetBundle\\Entity\\UserInfo' . "\0" . 'userID', '' . "\0" . 'ZectranetBundle\\Entity\\UserInfo' . "\0" . 'user', '' . "\0" . 'ZectranetBundle\\Entity\\UserInfo' . "\0" . 'residenceCountry', '' . "\0" . 'ZectranetBundle\\Entity\\UserInfo' . "\0" . 'residenceCountryVisible', '' . "\0" . 'ZectranetBundle\\Entity\\UserInfo' . "\0" . 'workExpirience', '' . "\0" . 'ZectranetBundle\\Entity\\UserInfo' . "\0" . 'workExpirienceVisible', '' . "\0" . 'ZectranetBundle\\Entity\\UserInfo' . "\0" . 'skills', '' . "\0" . 'ZectranetBundle\\Entity\\UserInfo' . "\0" . 'skillsVisible', '' . "\0" . 'ZectranetBundle\\Entity\\UserInfo' . "\0" . 'interests', '' . "\0" . 'ZectranetBundle\\Entity\\UserInfo' . "\0" . 'interestsVisible', '' . "\0" . 'ZectranetBundle\\Entity\\UserInfo' . "\0" . 'volunteerWork', '' . "\0" . 'ZectranetBundle\\Entity\\UserInfo' . "\0" . 'volunteerWorkVisible', '' . "\0" . 'ZectranetBundle\\Entity\\UserInfo' . "\0" . 'societies', '' . "\0" . 'ZectranetBundle\\Entity\\UserInfo' . "\0" . 'societiesVisible', '' . "\0" . 'ZectranetBundle\\Entity\\UserInfo' . "\0" . 'facebook', '' . "\0" . 'ZectranetBundle\\Entity\\UserInfo' . "\0" . 'facebookVisible', '' . "\0" . 'ZectranetBundle\\Entity\\UserInfo' . "\0" . 'twitter', '' . "\0" . 'ZectranetBundle\\Entity\\UserInfo' . "\0" . 'twitterVisible', '' . "\0" . 'ZectranetBundle\\Entity\\UserInfo' . "\0" . 'linkedIn', '' . "\0" . 'ZectranetBundle\\Entity\\UserInfo' . "\0" . 'linkedInVisible', '' . "\0" . 'ZectranetBundle\\Entity\\UserInfo' . "\0" . 'googlePlus', '' . "\0" . 'ZectranetBundle\\Entity\\UserInfo' . "\0" . 'googlePlusVisible');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (UserInfo $proxy) {
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
    public function getInArray()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInArray', array());

        return parent::getInArray();
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
    public function setUserID($userID)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserID', array($userID));

        return parent::setUserID($userID);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserID()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserID', array());

        return parent::getUserID();
    }

    /**
     * {@inheritDoc}
     */
    public function setResidenceCountry($residenceCountry)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setResidenceCountry', array($residenceCountry));

        return parent::setResidenceCountry($residenceCountry);
    }

    /**
     * {@inheritDoc}
     */
    public function getResidenceCountry()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResidenceCountry', array());

        return parent::getResidenceCountry();
    }

    /**
     * {@inheritDoc}
     */
    public function setResidenceCountryVisible($residenceCountryVisible)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setResidenceCountryVisible', array($residenceCountryVisible));

        return parent::setResidenceCountryVisible($residenceCountryVisible);
    }

    /**
     * {@inheritDoc}
     */
    public function getResidenceCountryVisible()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResidenceCountryVisible', array());

        return parent::getResidenceCountryVisible();
    }

    /**
     * {@inheritDoc}
     */
    public function setWorkExpirience($workExpirience)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWorkExpirience', array($workExpirience));

        return parent::setWorkExpirience($workExpirience);
    }

    /**
     * {@inheritDoc}
     */
    public function getWorkExpirience()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWorkExpirience', array());

        return parent::getWorkExpirience();
    }

    /**
     * {@inheritDoc}
     */
    public function setWorkExpirienceVisible($workExpirienceVisible)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWorkExpirienceVisible', array($workExpirienceVisible));

        return parent::setWorkExpirienceVisible($workExpirienceVisible);
    }

    /**
     * {@inheritDoc}
     */
    public function getWorkExpirienceVisible()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWorkExpirienceVisible', array());

        return parent::getWorkExpirienceVisible();
    }

    /**
     * {@inheritDoc}
     */
    public function setSkills($skills)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSkills', array($skills));

        return parent::setSkills($skills);
    }

    /**
     * {@inheritDoc}
     */
    public function getSkills()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSkills', array());

        return parent::getSkills();
    }

    /**
     * {@inheritDoc}
     */
    public function setSkillsVisible($skillsVisible)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSkillsVisible', array($skillsVisible));

        return parent::setSkillsVisible($skillsVisible);
    }

    /**
     * {@inheritDoc}
     */
    public function getSkillsVisible()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSkillsVisible', array());

        return parent::getSkillsVisible();
    }

    /**
     * {@inheritDoc}
     */
    public function setInterests($interests)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInterests', array($interests));

        return parent::setInterests($interests);
    }

    /**
     * {@inheritDoc}
     */
    public function getInterests()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInterests', array());

        return parent::getInterests();
    }

    /**
     * {@inheritDoc}
     */
    public function setInterestsVisible($interestsVisible)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInterestsVisible', array($interestsVisible));

        return parent::setInterestsVisible($interestsVisible);
    }

    /**
     * {@inheritDoc}
     */
    public function getInterestsVisible()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInterestsVisible', array());

        return parent::getInterestsVisible();
    }

    /**
     * {@inheritDoc}
     */
    public function setVolunteerWork($volunteerWork)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVolunteerWork', array($volunteerWork));

        return parent::setVolunteerWork($volunteerWork);
    }

    /**
     * {@inheritDoc}
     */
    public function getVolunteerWork()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVolunteerWork', array());

        return parent::getVolunteerWork();
    }

    /**
     * {@inheritDoc}
     */
    public function setVolunteerWorkVisible($volunteerWorkVisible)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVolunteerWorkVisible', array($volunteerWorkVisible));

        return parent::setVolunteerWorkVisible($volunteerWorkVisible);
    }

    /**
     * {@inheritDoc}
     */
    public function getVolunteerWorkVisible()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVolunteerWorkVisible', array());

        return parent::getVolunteerWorkVisible();
    }

    /**
     * {@inheritDoc}
     */
    public function setSocieties($societies)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSocieties', array($societies));

        return parent::setSocieties($societies);
    }

    /**
     * {@inheritDoc}
     */
    public function getSocieties()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSocieties', array());

        return parent::getSocieties();
    }

    /**
     * {@inheritDoc}
     */
    public function setSocietiesVisible($societiesVisible)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSocietiesVisible', array($societiesVisible));

        return parent::setSocietiesVisible($societiesVisible);
    }

    /**
     * {@inheritDoc}
     */
    public function getSocietiesVisible()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSocietiesVisible', array());

        return parent::getSocietiesVisible();
    }

    /**
     * {@inheritDoc}
     */
    public function setFacebook($facebook)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFacebook', array($facebook));

        return parent::setFacebook($facebook);
    }

    /**
     * {@inheritDoc}
     */
    public function getFacebook()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFacebook', array());

        return parent::getFacebook();
    }

    /**
     * {@inheritDoc}
     */
    public function setFacebookVisible($facebookVisible)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFacebookVisible', array($facebookVisible));

        return parent::setFacebookVisible($facebookVisible);
    }

    /**
     * {@inheritDoc}
     */
    public function getFacebookVisible()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFacebookVisible', array());

        return parent::getFacebookVisible();
    }

    /**
     * {@inheritDoc}
     */
    public function setTwitter($twitter)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTwitter', array($twitter));

        return parent::setTwitter($twitter);
    }

    /**
     * {@inheritDoc}
     */
    public function getTwitter()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTwitter', array());

        return parent::getTwitter();
    }

    /**
     * {@inheritDoc}
     */
    public function setTwitterVisible($twitterVisible)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTwitterVisible', array($twitterVisible));

        return parent::setTwitterVisible($twitterVisible);
    }

    /**
     * {@inheritDoc}
     */
    public function getTwitterVisible()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTwitterVisible', array());

        return parent::getTwitterVisible();
    }

    /**
     * {@inheritDoc}
     */
    public function setLinkedIn($linkedIn)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLinkedIn', array($linkedIn));

        return parent::setLinkedIn($linkedIn);
    }

    /**
     * {@inheritDoc}
     */
    public function getLinkedIn()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLinkedIn', array());

        return parent::getLinkedIn();
    }

    /**
     * {@inheritDoc}
     */
    public function setLinkedInVisible($linkedInVisible)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLinkedInVisible', array($linkedInVisible));

        return parent::setLinkedInVisible($linkedInVisible);
    }

    /**
     * {@inheritDoc}
     */
    public function getLinkedInVisible()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLinkedInVisible', array());

        return parent::getLinkedInVisible();
    }

    /**
     * {@inheritDoc}
     */
    public function setGooglePlus($googlePlus)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGooglePlus', array($googlePlus));

        return parent::setGooglePlus($googlePlus);
    }

    /**
     * {@inheritDoc}
     */
    public function getGooglePlus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGooglePlus', array());

        return parent::getGooglePlus();
    }

    /**
     * {@inheritDoc}
     */
    public function setGooglePlusVisible($googlePlusVisible)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGooglePlusVisible', array($googlePlusVisible));

        return parent::setGooglePlusVisible($googlePlusVisible);
    }

    /**
     * {@inheritDoc}
     */
    public function getGooglePlusVisible()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGooglePlusVisible', array());

        return parent::getGooglePlusVisible();
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

}
