<?php

namespace DoctrineProxies\__CG__\Concrete\Core\Entity\Statistics\UsageTracker;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class FileUsageRecord extends \Concrete\Core\Entity\Statistics\UsageTracker\FileUsageRecord implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', 'file_id', 'block_id', 'collection_id', 'collection_version_id'];
        }

        return ['__isInitialized__', 'file_id', 'block_id', 'collection_id', 'collection_version_id'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (FileUsageRecord $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getFileId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFileId', []);

        return parent::getFileId();
    }

    /**
     * {@inheritDoc}
     */
    public function setFileId($file_id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFileId', [$file_id]);

        return parent::setFileId($file_id);
    }

    /**
     * {@inheritDoc}
     */
    public function getBlockId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBlockId', []);

        return parent::getBlockId();
    }

    /**
     * {@inheritDoc}
     */
    public function setBlockId($block_id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBlockId', [$block_id]);

        return parent::setBlockId($block_id);
    }

    /**
     * {@inheritDoc}
     */
    public function getCollectionId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCollectionId', []);

        return parent::getCollectionId();
    }

    /**
     * {@inheritDoc}
     */
    public function setCollectionId($collection_id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCollectionId', [$collection_id]);

        return parent::setCollectionId($collection_id);
    }

    /**
     * {@inheritDoc}
     */
    public function getCollectionVersionId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCollectionVersionId', []);

        return parent::getCollectionVersionId();
    }

    /**
     * {@inheritDoc}
     */
    public function setCollectionVersionId($collection_version_id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCollectionVersionId', [$collection_version_id]);

        return parent::setCollectionVersionId($collection_version_id);
    }

}
