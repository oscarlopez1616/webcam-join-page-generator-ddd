<?php
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder7855e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerff2c2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1ed50 = [
        
    ];

    public function getConnection()
    {
        $this->initializerff2c2 && ($this->initializerff2c2->__invoke($valueHolder7855e, $this, 'getConnection', array(), $this->initializerff2c2) || 1) && $this->valueHolder7855e = $valueHolder7855e;

        return $this->valueHolder7855e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerff2c2 && ($this->initializerff2c2->__invoke($valueHolder7855e, $this, 'getMetadataFactory', array(), $this->initializerff2c2) || 1) && $this->valueHolder7855e = $valueHolder7855e;

        return $this->valueHolder7855e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerff2c2 && ($this->initializerff2c2->__invoke($valueHolder7855e, $this, 'getExpressionBuilder', array(), $this->initializerff2c2) || 1) && $this->valueHolder7855e = $valueHolder7855e;

        return $this->valueHolder7855e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerff2c2 && ($this->initializerff2c2->__invoke($valueHolder7855e, $this, 'beginTransaction', array(), $this->initializerff2c2) || 1) && $this->valueHolder7855e = $valueHolder7855e;

        return $this->valueHolder7855e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerff2c2 && ($this->initializerff2c2->__invoke($valueHolder7855e, $this, 'getCache', array(), $this->initializerff2c2) || 1) && $this->valueHolder7855e = $valueHolder7855e;

        return $this->valueHolder7855e->getCache();
    }

    public function transactional($func)
    {
        $this->initializerff2c2 && ($this->initializerff2c2->__invoke($valueHolder7855e, $this, 'transactional', array('func' => $func), $this->initializerff2c2) || 1) && $this->valueHolder7855e = $valueHolder7855e;

        return $this->valueHolder7855e->transactional($func);
    }

    public function commit()
    {
        $this->initializerff2c2 && ($this->initializerff2c2->__invoke($valueHolder7855e, $this, 'commit', array(), $this->initializerff2c2) || 1) && $this->valueHolder7855e = $valueHolder7855e;

        return $this->valueHolder7855e->commit();
    }

    public function rollback()
    {
        $this->initializerff2c2 && ($this->initializerff2c2->__invoke($valueHolder7855e, $this, 'rollback', array(), $this->initializerff2c2) || 1) && $this->valueHolder7855e = $valueHolder7855e;

        return $this->valueHolder7855e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerff2c2 && ($this->initializerff2c2->__invoke($valueHolder7855e, $this, 'getClassMetadata', array('className' => $className), $this->initializerff2c2) || 1) && $this->valueHolder7855e = $valueHolder7855e;

        return $this->valueHolder7855e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerff2c2 && ($this->initializerff2c2->__invoke($valueHolder7855e, $this, 'createQuery', array('dql' => $dql), $this->initializerff2c2) || 1) && $this->valueHolder7855e = $valueHolder7855e;

        return $this->valueHolder7855e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerff2c2 && ($this->initializerff2c2->__invoke($valueHolder7855e, $this, 'createNamedQuery', array('name' => $name), $this->initializerff2c2) || 1) && $this->valueHolder7855e = $valueHolder7855e;

        return $this->valueHolder7855e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerff2c2 && ($this->initializerff2c2->__invoke($valueHolder7855e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerff2c2) || 1) && $this->valueHolder7855e = $valueHolder7855e;

        return $this->valueHolder7855e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerff2c2 && ($this->initializerff2c2->__invoke($valueHolder7855e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerff2c2) || 1) && $this->valueHolder7855e = $valueHolder7855e;

        return $this->valueHolder7855e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerff2c2 && ($this->initializerff2c2->__invoke($valueHolder7855e, $this, 'createQueryBuilder', array(), $this->initializerff2c2) || 1) && $this->valueHolder7855e = $valueHolder7855e;

        return $this->valueHolder7855e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerff2c2 && ($this->initializerff2c2->__invoke($valueHolder7855e, $this, 'flush', array('entity' => $entity), $this->initializerff2c2) || 1) && $this->valueHolder7855e = $valueHolder7855e;

        return $this->valueHolder7855e->flush($entity);
    }

    public function find($entityName, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerff2c2 && ($this->initializerff2c2->__invoke($valueHolder7855e, $this, 'find', array('entityName' => $entityName, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerff2c2) || 1) && $this->valueHolder7855e = $valueHolder7855e;

        return $this->valueHolder7855e->find($entityName, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerff2c2 && ($this->initializerff2c2->__invoke($valueHolder7855e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerff2c2) || 1) && $this->valueHolder7855e = $valueHolder7855e;

        return $this->valueHolder7855e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerff2c2 && ($this->initializerff2c2->__invoke($valueHolder7855e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerff2c2) || 1) && $this->valueHolder7855e = $valueHolder7855e;

        return $this->valueHolder7855e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerff2c2 && ($this->initializerff2c2->__invoke($valueHolder7855e, $this, 'clear', array('entityName' => $entityName), $this->initializerff2c2) || 1) && $this->valueHolder7855e = $valueHolder7855e;

        return $this->valueHolder7855e->clear($entityName);
    }

    public function close()
    {
        $this->initializerff2c2 && ($this->initializerff2c2->__invoke($valueHolder7855e, $this, 'close', array(), $this->initializerff2c2) || 1) && $this->valueHolder7855e = $valueHolder7855e;

        return $this->valueHolder7855e->close();
    }

    public function persist($entity)
    {
        $this->initializerff2c2 && ($this->initializerff2c2->__invoke($valueHolder7855e, $this, 'persist', array('entity' => $entity), $this->initializerff2c2) || 1) && $this->valueHolder7855e = $valueHolder7855e;

        return $this->valueHolder7855e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerff2c2 && ($this->initializerff2c2->__invoke($valueHolder7855e, $this, 'remove', array('entity' => $entity), $this->initializerff2c2) || 1) && $this->valueHolder7855e = $valueHolder7855e;

        return $this->valueHolder7855e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerff2c2 && ($this->initializerff2c2->__invoke($valueHolder7855e, $this, 'refresh', array('entity' => $entity), $this->initializerff2c2) || 1) && $this->valueHolder7855e = $valueHolder7855e;

        return $this->valueHolder7855e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerff2c2 && ($this->initializerff2c2->__invoke($valueHolder7855e, $this, 'detach', array('entity' => $entity), $this->initializerff2c2) || 1) && $this->valueHolder7855e = $valueHolder7855e;

        return $this->valueHolder7855e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerff2c2 && ($this->initializerff2c2->__invoke($valueHolder7855e, $this, 'merge', array('entity' => $entity), $this->initializerff2c2) || 1) && $this->valueHolder7855e = $valueHolder7855e;

        return $this->valueHolder7855e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerff2c2 && ($this->initializerff2c2->__invoke($valueHolder7855e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerff2c2) || 1) && $this->valueHolder7855e = $valueHolder7855e;

        return $this->valueHolder7855e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerff2c2 && ($this->initializerff2c2->__invoke($valueHolder7855e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerff2c2) || 1) && $this->valueHolder7855e = $valueHolder7855e;

        return $this->valueHolder7855e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerff2c2 && ($this->initializerff2c2->__invoke($valueHolder7855e, $this, 'getRepository', array('entityName' => $entityName), $this->initializerff2c2) || 1) && $this->valueHolder7855e = $valueHolder7855e;

        return $this->valueHolder7855e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerff2c2 && ($this->initializerff2c2->__invoke($valueHolder7855e, $this, 'contains', array('entity' => $entity), $this->initializerff2c2) || 1) && $this->valueHolder7855e = $valueHolder7855e;

        return $this->valueHolder7855e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerff2c2 && ($this->initializerff2c2->__invoke($valueHolder7855e, $this, 'getEventManager', array(), $this->initializerff2c2) || 1) && $this->valueHolder7855e = $valueHolder7855e;

        return $this->valueHolder7855e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerff2c2 && ($this->initializerff2c2->__invoke($valueHolder7855e, $this, 'getConfiguration', array(), $this->initializerff2c2) || 1) && $this->valueHolder7855e = $valueHolder7855e;

        return $this->valueHolder7855e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerff2c2 && ($this->initializerff2c2->__invoke($valueHolder7855e, $this, 'isOpen', array(), $this->initializerff2c2) || 1) && $this->valueHolder7855e = $valueHolder7855e;

        return $this->valueHolder7855e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerff2c2 && ($this->initializerff2c2->__invoke($valueHolder7855e, $this, 'getUnitOfWork', array(), $this->initializerff2c2) || 1) && $this->valueHolder7855e = $valueHolder7855e;

        return $this->valueHolder7855e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerff2c2 && ($this->initializerff2c2->__invoke($valueHolder7855e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerff2c2) || 1) && $this->valueHolder7855e = $valueHolder7855e;

        return $this->valueHolder7855e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerff2c2 && ($this->initializerff2c2->__invoke($valueHolder7855e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerff2c2) || 1) && $this->valueHolder7855e = $valueHolder7855e;

        return $this->valueHolder7855e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerff2c2 && ($this->initializerff2c2->__invoke($valueHolder7855e, $this, 'getProxyFactory', array(), $this->initializerff2c2) || 1) && $this->valueHolder7855e = $valueHolder7855e;

        return $this->valueHolder7855e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerff2c2 && ($this->initializerff2c2->__invoke($valueHolder7855e, $this, 'initializeObject', array('obj' => $obj), $this->initializerff2c2) || 1) && $this->valueHolder7855e = $valueHolder7855e;

        return $this->valueHolder7855e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerff2c2 && ($this->initializerff2c2->__invoke($valueHolder7855e, $this, 'getFilters', array(), $this->initializerff2c2) || 1) && $this->valueHolder7855e = $valueHolder7855e;

        return $this->valueHolder7855e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerff2c2 && ($this->initializerff2c2->__invoke($valueHolder7855e, $this, 'isFiltersStateClean', array(), $this->initializerff2c2) || 1) && $this->valueHolder7855e = $valueHolder7855e;

        return $this->valueHolder7855e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerff2c2 && ($this->initializerff2c2->__invoke($valueHolder7855e, $this, 'hasFilters', array(), $this->initializerff2c2) || 1) && $this->valueHolder7855e = $valueHolder7855e;

        return $this->valueHolder7855e->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerff2c2 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder7855e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7855e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7855e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerff2c2 && ($this->initializerff2c2->__invoke($valueHolder7855e, $this, '__get', ['name' => $name], $this->initializerff2c2) || 1) && $this->valueHolder7855e = $valueHolder7855e;

        if (isset(self::$publicProperties1ed50[$name])) {
            return $this->valueHolder7855e->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7855e;

            $backtrace = debug_backtrace(false);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder7855e;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerff2c2 && ($this->initializerff2c2->__invoke($valueHolder7855e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerff2c2) || 1) && $this->valueHolder7855e = $valueHolder7855e;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7855e;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder7855e;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerff2c2 && ($this->initializerff2c2->__invoke($valueHolder7855e, $this, '__isset', array('name' => $name), $this->initializerff2c2) || 1) && $this->valueHolder7855e = $valueHolder7855e;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7855e;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder7855e;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerff2c2 && ($this->initializerff2c2->__invoke($valueHolder7855e, $this, '__unset', array('name' => $name), $this->initializerff2c2) || 1) && $this->valueHolder7855e = $valueHolder7855e;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7855e;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder7855e;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializerff2c2 && ($this->initializerff2c2->__invoke($valueHolder7855e, $this, '__clone', array(), $this->initializerff2c2) || 1) && $this->valueHolder7855e = $valueHolder7855e;

        $this->valueHolder7855e = clone $this->valueHolder7855e;
    }

    public function __sleep()
    {
        $this->initializerff2c2 && ($this->initializerff2c2->__invoke($valueHolder7855e, $this, '__sleep', array(), $this->initializerff2c2) || 1) && $this->valueHolder7855e = $valueHolder7855e;

        return array('valueHolder7855e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializerff2c2 = $initializer;
    }

    public function getProxyInitializer()
    {
        return $this->initializerff2c2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerff2c2 && ($this->initializerff2c2->__invoke($valueHolder7855e, $this, 'initializeProxy', array(), $this->initializerff2c2) || 1) && $this->valueHolder7855e = $valueHolder7855e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7855e;
    }

    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHolder7855e;
    }


}
