<?php
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder43081 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd222d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7efef = [
        
    ];

    public function getConnection()
    {
        $this->initializerd222d && ($this->initializerd222d->__invoke($valueHolder43081, $this, 'getConnection', array(), $this->initializerd222d) || 1) && $this->valueHolder43081 = $valueHolder43081;

        return $this->valueHolder43081->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd222d && ($this->initializerd222d->__invoke($valueHolder43081, $this, 'getMetadataFactory', array(), $this->initializerd222d) || 1) && $this->valueHolder43081 = $valueHolder43081;

        return $this->valueHolder43081->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd222d && ($this->initializerd222d->__invoke($valueHolder43081, $this, 'getExpressionBuilder', array(), $this->initializerd222d) || 1) && $this->valueHolder43081 = $valueHolder43081;

        return $this->valueHolder43081->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd222d && ($this->initializerd222d->__invoke($valueHolder43081, $this, 'beginTransaction', array(), $this->initializerd222d) || 1) && $this->valueHolder43081 = $valueHolder43081;

        return $this->valueHolder43081->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd222d && ($this->initializerd222d->__invoke($valueHolder43081, $this, 'getCache', array(), $this->initializerd222d) || 1) && $this->valueHolder43081 = $valueHolder43081;

        return $this->valueHolder43081->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd222d && ($this->initializerd222d->__invoke($valueHolder43081, $this, 'transactional', array('func' => $func), $this->initializerd222d) || 1) && $this->valueHolder43081 = $valueHolder43081;

        return $this->valueHolder43081->transactional($func);
    }

    public function commit()
    {
        $this->initializerd222d && ($this->initializerd222d->__invoke($valueHolder43081, $this, 'commit', array(), $this->initializerd222d) || 1) && $this->valueHolder43081 = $valueHolder43081;

        return $this->valueHolder43081->commit();
    }

    public function rollback()
    {
        $this->initializerd222d && ($this->initializerd222d->__invoke($valueHolder43081, $this, 'rollback', array(), $this->initializerd222d) || 1) && $this->valueHolder43081 = $valueHolder43081;

        return $this->valueHolder43081->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd222d && ($this->initializerd222d->__invoke($valueHolder43081, $this, 'getClassMetadata', array('className' => $className), $this->initializerd222d) || 1) && $this->valueHolder43081 = $valueHolder43081;

        return $this->valueHolder43081->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd222d && ($this->initializerd222d->__invoke($valueHolder43081, $this, 'createQuery', array('dql' => $dql), $this->initializerd222d) || 1) && $this->valueHolder43081 = $valueHolder43081;

        return $this->valueHolder43081->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd222d && ($this->initializerd222d->__invoke($valueHolder43081, $this, 'createNamedQuery', array('name' => $name), $this->initializerd222d) || 1) && $this->valueHolder43081 = $valueHolder43081;

        return $this->valueHolder43081->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd222d && ($this->initializerd222d->__invoke($valueHolder43081, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd222d) || 1) && $this->valueHolder43081 = $valueHolder43081;

        return $this->valueHolder43081->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd222d && ($this->initializerd222d->__invoke($valueHolder43081, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd222d) || 1) && $this->valueHolder43081 = $valueHolder43081;

        return $this->valueHolder43081->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd222d && ($this->initializerd222d->__invoke($valueHolder43081, $this, 'createQueryBuilder', array(), $this->initializerd222d) || 1) && $this->valueHolder43081 = $valueHolder43081;

        return $this->valueHolder43081->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd222d && ($this->initializerd222d->__invoke($valueHolder43081, $this, 'flush', array('entity' => $entity), $this->initializerd222d) || 1) && $this->valueHolder43081 = $valueHolder43081;

        return $this->valueHolder43081->flush($entity);
    }

    public function find($entityName, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd222d && ($this->initializerd222d->__invoke($valueHolder43081, $this, 'find', array('entityName' => $entityName, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd222d) || 1) && $this->valueHolder43081 = $valueHolder43081;

        return $this->valueHolder43081->find($entityName, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd222d && ($this->initializerd222d->__invoke($valueHolder43081, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd222d) || 1) && $this->valueHolder43081 = $valueHolder43081;

        return $this->valueHolder43081->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd222d && ($this->initializerd222d->__invoke($valueHolder43081, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd222d) || 1) && $this->valueHolder43081 = $valueHolder43081;

        return $this->valueHolder43081->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd222d && ($this->initializerd222d->__invoke($valueHolder43081, $this, 'clear', array('entityName' => $entityName), $this->initializerd222d) || 1) && $this->valueHolder43081 = $valueHolder43081;

        return $this->valueHolder43081->clear($entityName);
    }

    public function close()
    {
        $this->initializerd222d && ($this->initializerd222d->__invoke($valueHolder43081, $this, 'close', array(), $this->initializerd222d) || 1) && $this->valueHolder43081 = $valueHolder43081;

        return $this->valueHolder43081->close();
    }

    public function persist($entity)
    {
        $this->initializerd222d && ($this->initializerd222d->__invoke($valueHolder43081, $this, 'persist', array('entity' => $entity), $this->initializerd222d) || 1) && $this->valueHolder43081 = $valueHolder43081;

        return $this->valueHolder43081->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd222d && ($this->initializerd222d->__invoke($valueHolder43081, $this, 'remove', array('entity' => $entity), $this->initializerd222d) || 1) && $this->valueHolder43081 = $valueHolder43081;

        return $this->valueHolder43081->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd222d && ($this->initializerd222d->__invoke($valueHolder43081, $this, 'refresh', array('entity' => $entity), $this->initializerd222d) || 1) && $this->valueHolder43081 = $valueHolder43081;

        return $this->valueHolder43081->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd222d && ($this->initializerd222d->__invoke($valueHolder43081, $this, 'detach', array('entity' => $entity), $this->initializerd222d) || 1) && $this->valueHolder43081 = $valueHolder43081;

        return $this->valueHolder43081->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd222d && ($this->initializerd222d->__invoke($valueHolder43081, $this, 'merge', array('entity' => $entity), $this->initializerd222d) || 1) && $this->valueHolder43081 = $valueHolder43081;

        return $this->valueHolder43081->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd222d && ($this->initializerd222d->__invoke($valueHolder43081, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd222d) || 1) && $this->valueHolder43081 = $valueHolder43081;

        return $this->valueHolder43081->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd222d && ($this->initializerd222d->__invoke($valueHolder43081, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd222d) || 1) && $this->valueHolder43081 = $valueHolder43081;

        return $this->valueHolder43081->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd222d && ($this->initializerd222d->__invoke($valueHolder43081, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd222d) || 1) && $this->valueHolder43081 = $valueHolder43081;

        return $this->valueHolder43081->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd222d && ($this->initializerd222d->__invoke($valueHolder43081, $this, 'contains', array('entity' => $entity), $this->initializerd222d) || 1) && $this->valueHolder43081 = $valueHolder43081;

        return $this->valueHolder43081->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd222d && ($this->initializerd222d->__invoke($valueHolder43081, $this, 'getEventManager', array(), $this->initializerd222d) || 1) && $this->valueHolder43081 = $valueHolder43081;

        return $this->valueHolder43081->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd222d && ($this->initializerd222d->__invoke($valueHolder43081, $this, 'getConfiguration', array(), $this->initializerd222d) || 1) && $this->valueHolder43081 = $valueHolder43081;

        return $this->valueHolder43081->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd222d && ($this->initializerd222d->__invoke($valueHolder43081, $this, 'isOpen', array(), $this->initializerd222d) || 1) && $this->valueHolder43081 = $valueHolder43081;

        return $this->valueHolder43081->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd222d && ($this->initializerd222d->__invoke($valueHolder43081, $this, 'getUnitOfWork', array(), $this->initializerd222d) || 1) && $this->valueHolder43081 = $valueHolder43081;

        return $this->valueHolder43081->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd222d && ($this->initializerd222d->__invoke($valueHolder43081, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd222d) || 1) && $this->valueHolder43081 = $valueHolder43081;

        return $this->valueHolder43081->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd222d && ($this->initializerd222d->__invoke($valueHolder43081, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd222d) || 1) && $this->valueHolder43081 = $valueHolder43081;

        return $this->valueHolder43081->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd222d && ($this->initializerd222d->__invoke($valueHolder43081, $this, 'getProxyFactory', array(), $this->initializerd222d) || 1) && $this->valueHolder43081 = $valueHolder43081;

        return $this->valueHolder43081->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd222d && ($this->initializerd222d->__invoke($valueHolder43081, $this, 'initializeObject', array('obj' => $obj), $this->initializerd222d) || 1) && $this->valueHolder43081 = $valueHolder43081;

        return $this->valueHolder43081->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd222d && ($this->initializerd222d->__invoke($valueHolder43081, $this, 'getFilters', array(), $this->initializerd222d) || 1) && $this->valueHolder43081 = $valueHolder43081;

        return $this->valueHolder43081->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd222d && ($this->initializerd222d->__invoke($valueHolder43081, $this, 'isFiltersStateClean', array(), $this->initializerd222d) || 1) && $this->valueHolder43081 = $valueHolder43081;

        return $this->valueHolder43081->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd222d && ($this->initializerd222d->__invoke($valueHolder43081, $this, 'hasFilters', array(), $this->initializerd222d) || 1) && $this->valueHolder43081 = $valueHolder43081;

        return $this->valueHolder43081->hasFilters();
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

        $instance->initializerd222d = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder43081) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder43081 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder43081->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd222d && ($this->initializerd222d->__invoke($valueHolder43081, $this, '__get', ['name' => $name], $this->initializerd222d) || 1) && $this->valueHolder43081 = $valueHolder43081;

        if (isset(self::$publicProperties7efef[$name])) {
            return $this->valueHolder43081->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder43081;

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

        $targetObject = $this->valueHolder43081;
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
        $this->initializerd222d && ($this->initializerd222d->__invoke($valueHolder43081, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd222d) || 1) && $this->valueHolder43081 = $valueHolder43081;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder43081;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder43081;
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
        $this->initializerd222d && ($this->initializerd222d->__invoke($valueHolder43081, $this, '__isset', array('name' => $name), $this->initializerd222d) || 1) && $this->valueHolder43081 = $valueHolder43081;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder43081;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder43081;
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
        $this->initializerd222d && ($this->initializerd222d->__invoke($valueHolder43081, $this, '__unset', array('name' => $name), $this->initializerd222d) || 1) && $this->valueHolder43081 = $valueHolder43081;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder43081;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder43081;
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
        $this->initializerd222d && ($this->initializerd222d->__invoke($valueHolder43081, $this, '__clone', array(), $this->initializerd222d) || 1) && $this->valueHolder43081 = $valueHolder43081;

        $this->valueHolder43081 = clone $this->valueHolder43081;
    }

    public function __sleep()
    {
        $this->initializerd222d && ($this->initializerd222d->__invoke($valueHolder43081, $this, '__sleep', array(), $this->initializerd222d) || 1) && $this->valueHolder43081 = $valueHolder43081;

        return array('valueHolder43081');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializerd222d = $initializer;
    }

    public function getProxyInitializer()
    {
        return $this->initializerd222d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd222d && ($this->initializerd222d->__invoke($valueHolder43081, $this, 'initializeProxy', array(), $this->initializerd222d) || 1) && $this->valueHolder43081 = $valueHolder43081;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder43081;
    }

    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHolder43081;
    }


}
