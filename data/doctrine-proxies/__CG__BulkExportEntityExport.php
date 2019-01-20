<?php

namespace DoctrineProxies\__CG__\BulkExport\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Export extends \BulkExport\Entity\Export implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = [];



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
            return ['__isInitialized__', 'id', 'exporter', 'job', 'writerParams', 'filename'];
        }

        return ['__isInitialized__', 'id', 'exporter', 'job', 'writerParams', 'filename'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Export $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setExporter(\BulkExport\Entity\Exporter $exporter)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExporter', [$exporter]);

        return parent::setExporter($exporter);
    }

    /**
     * {@inheritDoc}
     */
    public function getExporter()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExporter', []);

        return parent::getExporter();
    }

    /**
     * {@inheritDoc}
     */
    public function setJob(\Omeka\Entity\Job $job)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setJob', [$job]);

        return parent::setJob($job);
    }

    /**
     * {@inheritDoc}
     */
    public function getJob()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getJob', []);

        return parent::getJob();
    }

    /**
     * {@inheritDoc}
     */
    public function setWriterParams($writerParams)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWriterParams', [$writerParams]);

        return parent::setWriterParams($writerParams);
    }

    /**
     * {@inheritDoc}
     */
    public function getWriterParams()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWriterParams', []);

        return parent::getWriterParams();
    }

    /**
     * {@inheritDoc}
     */
    public function setFilename($filename)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFilename', [$filename]);

        return parent::setFilename($filename);
    }

    /**
     * {@inheritDoc}
     */
    public function getFilename()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFilename', []);

        return parent::getFilename();
    }

    /**
     * {@inheritDoc}
     */
    public function getResourceId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResourceId', []);

        return parent::getResourceId();
    }

}
