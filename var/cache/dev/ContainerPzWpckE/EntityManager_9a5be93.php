<?php
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder8986c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer85e5d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesaa00e = [
        
    ];

    public function getConnection()
    {
        $this->initializer85e5d && ($this->initializer85e5d->__invoke($valueHolder8986c, $this, 'getConnection', array(), $this->initializer85e5d) || 1) && $this->valueHolder8986c = $valueHolder8986c;

        return $this->valueHolder8986c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer85e5d && ($this->initializer85e5d->__invoke($valueHolder8986c, $this, 'getMetadataFactory', array(), $this->initializer85e5d) || 1) && $this->valueHolder8986c = $valueHolder8986c;

        return $this->valueHolder8986c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer85e5d && ($this->initializer85e5d->__invoke($valueHolder8986c, $this, 'getExpressionBuilder', array(), $this->initializer85e5d) || 1) && $this->valueHolder8986c = $valueHolder8986c;

        return $this->valueHolder8986c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer85e5d && ($this->initializer85e5d->__invoke($valueHolder8986c, $this, 'beginTransaction', array(), $this->initializer85e5d) || 1) && $this->valueHolder8986c = $valueHolder8986c;

        return $this->valueHolder8986c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer85e5d && ($this->initializer85e5d->__invoke($valueHolder8986c, $this, 'getCache', array(), $this->initializer85e5d) || 1) && $this->valueHolder8986c = $valueHolder8986c;

        return $this->valueHolder8986c->getCache();
    }

    public function transactional($func)
    {
        $this->initializer85e5d && ($this->initializer85e5d->__invoke($valueHolder8986c, $this, 'transactional', array('func' => $func), $this->initializer85e5d) || 1) && $this->valueHolder8986c = $valueHolder8986c;

        return $this->valueHolder8986c->transactional($func);
    }

    public function commit()
    {
        $this->initializer85e5d && ($this->initializer85e5d->__invoke($valueHolder8986c, $this, 'commit', array(), $this->initializer85e5d) || 1) && $this->valueHolder8986c = $valueHolder8986c;

        return $this->valueHolder8986c->commit();
    }

    public function rollback()
    {
        $this->initializer85e5d && ($this->initializer85e5d->__invoke($valueHolder8986c, $this, 'rollback', array(), $this->initializer85e5d) || 1) && $this->valueHolder8986c = $valueHolder8986c;

        return $this->valueHolder8986c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer85e5d && ($this->initializer85e5d->__invoke($valueHolder8986c, $this, 'getClassMetadata', array('className' => $className), $this->initializer85e5d) || 1) && $this->valueHolder8986c = $valueHolder8986c;

        return $this->valueHolder8986c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer85e5d && ($this->initializer85e5d->__invoke($valueHolder8986c, $this, 'createQuery', array('dql' => $dql), $this->initializer85e5d) || 1) && $this->valueHolder8986c = $valueHolder8986c;

        return $this->valueHolder8986c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer85e5d && ($this->initializer85e5d->__invoke($valueHolder8986c, $this, 'createNamedQuery', array('name' => $name), $this->initializer85e5d) || 1) && $this->valueHolder8986c = $valueHolder8986c;

        return $this->valueHolder8986c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer85e5d && ($this->initializer85e5d->__invoke($valueHolder8986c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer85e5d) || 1) && $this->valueHolder8986c = $valueHolder8986c;

        return $this->valueHolder8986c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer85e5d && ($this->initializer85e5d->__invoke($valueHolder8986c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer85e5d) || 1) && $this->valueHolder8986c = $valueHolder8986c;

        return $this->valueHolder8986c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer85e5d && ($this->initializer85e5d->__invoke($valueHolder8986c, $this, 'createQueryBuilder', array(), $this->initializer85e5d) || 1) && $this->valueHolder8986c = $valueHolder8986c;

        return $this->valueHolder8986c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer85e5d && ($this->initializer85e5d->__invoke($valueHolder8986c, $this, 'flush', array('entity' => $entity), $this->initializer85e5d) || 1) && $this->valueHolder8986c = $valueHolder8986c;

        return $this->valueHolder8986c->flush($entity);
    }

    public function find($entityName, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer85e5d && ($this->initializer85e5d->__invoke($valueHolder8986c, $this, 'find', array('entityName' => $entityName, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer85e5d) || 1) && $this->valueHolder8986c = $valueHolder8986c;

        return $this->valueHolder8986c->find($entityName, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer85e5d && ($this->initializer85e5d->__invoke($valueHolder8986c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer85e5d) || 1) && $this->valueHolder8986c = $valueHolder8986c;

        return $this->valueHolder8986c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer85e5d && ($this->initializer85e5d->__invoke($valueHolder8986c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer85e5d) || 1) && $this->valueHolder8986c = $valueHolder8986c;

        return $this->valueHolder8986c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer85e5d && ($this->initializer85e5d->__invoke($valueHolder8986c, $this, 'clear', array('entityName' => $entityName), $this->initializer85e5d) || 1) && $this->valueHolder8986c = $valueHolder8986c;

        return $this->valueHolder8986c->clear($entityName);
    }

    public function close()
    {
        $this->initializer85e5d && ($this->initializer85e5d->__invoke($valueHolder8986c, $this, 'close', array(), $this->initializer85e5d) || 1) && $this->valueHolder8986c = $valueHolder8986c;

        return $this->valueHolder8986c->close();
    }

    public function persist($entity)
    {
        $this->initializer85e5d && ($this->initializer85e5d->__invoke($valueHolder8986c, $this, 'persist', array('entity' => $entity), $this->initializer85e5d) || 1) && $this->valueHolder8986c = $valueHolder8986c;

        return $this->valueHolder8986c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer85e5d && ($this->initializer85e5d->__invoke($valueHolder8986c, $this, 'remove', array('entity' => $entity), $this->initializer85e5d) || 1) && $this->valueHolder8986c = $valueHolder8986c;

        return $this->valueHolder8986c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer85e5d && ($this->initializer85e5d->__invoke($valueHolder8986c, $this, 'refresh', array('entity' => $entity), $this->initializer85e5d) || 1) && $this->valueHolder8986c = $valueHolder8986c;

        return $this->valueHolder8986c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer85e5d && ($this->initializer85e5d->__invoke($valueHolder8986c, $this, 'detach', array('entity' => $entity), $this->initializer85e5d) || 1) && $this->valueHolder8986c = $valueHolder8986c;

        return $this->valueHolder8986c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer85e5d && ($this->initializer85e5d->__invoke($valueHolder8986c, $this, 'merge', array('entity' => $entity), $this->initializer85e5d) || 1) && $this->valueHolder8986c = $valueHolder8986c;

        return $this->valueHolder8986c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer85e5d && ($this->initializer85e5d->__invoke($valueHolder8986c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer85e5d) || 1) && $this->valueHolder8986c = $valueHolder8986c;

        return $this->valueHolder8986c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer85e5d && ($this->initializer85e5d->__invoke($valueHolder8986c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer85e5d) || 1) && $this->valueHolder8986c = $valueHolder8986c;

        return $this->valueHolder8986c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer85e5d && ($this->initializer85e5d->__invoke($valueHolder8986c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer85e5d) || 1) && $this->valueHolder8986c = $valueHolder8986c;

        return $this->valueHolder8986c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer85e5d && ($this->initializer85e5d->__invoke($valueHolder8986c, $this, 'contains', array('entity' => $entity), $this->initializer85e5d) || 1) && $this->valueHolder8986c = $valueHolder8986c;

        return $this->valueHolder8986c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer85e5d && ($this->initializer85e5d->__invoke($valueHolder8986c, $this, 'getEventManager', array(), $this->initializer85e5d) || 1) && $this->valueHolder8986c = $valueHolder8986c;

        return $this->valueHolder8986c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer85e5d && ($this->initializer85e5d->__invoke($valueHolder8986c, $this, 'getConfiguration', array(), $this->initializer85e5d) || 1) && $this->valueHolder8986c = $valueHolder8986c;

        return $this->valueHolder8986c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer85e5d && ($this->initializer85e5d->__invoke($valueHolder8986c, $this, 'isOpen', array(), $this->initializer85e5d) || 1) && $this->valueHolder8986c = $valueHolder8986c;

        return $this->valueHolder8986c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer85e5d && ($this->initializer85e5d->__invoke($valueHolder8986c, $this, 'getUnitOfWork', array(), $this->initializer85e5d) || 1) && $this->valueHolder8986c = $valueHolder8986c;

        return $this->valueHolder8986c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer85e5d && ($this->initializer85e5d->__invoke($valueHolder8986c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer85e5d) || 1) && $this->valueHolder8986c = $valueHolder8986c;

        return $this->valueHolder8986c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer85e5d && ($this->initializer85e5d->__invoke($valueHolder8986c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer85e5d) || 1) && $this->valueHolder8986c = $valueHolder8986c;

        return $this->valueHolder8986c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer85e5d && ($this->initializer85e5d->__invoke($valueHolder8986c, $this, 'getProxyFactory', array(), $this->initializer85e5d) || 1) && $this->valueHolder8986c = $valueHolder8986c;

        return $this->valueHolder8986c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer85e5d && ($this->initializer85e5d->__invoke($valueHolder8986c, $this, 'initializeObject', array('obj' => $obj), $this->initializer85e5d) || 1) && $this->valueHolder8986c = $valueHolder8986c;

        return $this->valueHolder8986c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer85e5d && ($this->initializer85e5d->__invoke($valueHolder8986c, $this, 'getFilters', array(), $this->initializer85e5d) || 1) && $this->valueHolder8986c = $valueHolder8986c;

        return $this->valueHolder8986c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer85e5d && ($this->initializer85e5d->__invoke($valueHolder8986c, $this, 'isFiltersStateClean', array(), $this->initializer85e5d) || 1) && $this->valueHolder8986c = $valueHolder8986c;

        return $this->valueHolder8986c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer85e5d && ($this->initializer85e5d->__invoke($valueHolder8986c, $this, 'hasFilters', array(), $this->initializer85e5d) || 1) && $this->valueHolder8986c = $valueHolder8986c;

        return $this->valueHolder8986c->hasFilters();
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

        $instance->initializer85e5d = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder8986c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8986c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8986c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer85e5d && ($this->initializer85e5d->__invoke($valueHolder8986c, $this, '__get', ['name' => $name], $this->initializer85e5d) || 1) && $this->valueHolder8986c = $valueHolder8986c;

        if (isset(self::$publicPropertiesaa00e[$name])) {
            return $this->valueHolder8986c->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8986c;

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

        $targetObject = $this->valueHolder8986c;
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
        $this->initializer85e5d && ($this->initializer85e5d->__invoke($valueHolder8986c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer85e5d) || 1) && $this->valueHolder8986c = $valueHolder8986c;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8986c;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder8986c;
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
        $this->initializer85e5d && ($this->initializer85e5d->__invoke($valueHolder8986c, $this, '__isset', array('name' => $name), $this->initializer85e5d) || 1) && $this->valueHolder8986c = $valueHolder8986c;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8986c;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder8986c;
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
        $this->initializer85e5d && ($this->initializer85e5d->__invoke($valueHolder8986c, $this, '__unset', array('name' => $name), $this->initializer85e5d) || 1) && $this->valueHolder8986c = $valueHolder8986c;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8986c;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder8986c;
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
        $this->initializer85e5d && ($this->initializer85e5d->__invoke($valueHolder8986c, $this, '__clone', array(), $this->initializer85e5d) || 1) && $this->valueHolder8986c = $valueHolder8986c;

        $this->valueHolder8986c = clone $this->valueHolder8986c;
    }

    public function __sleep()
    {
        $this->initializer85e5d && ($this->initializer85e5d->__invoke($valueHolder8986c, $this, '__sleep', array(), $this->initializer85e5d) || 1) && $this->valueHolder8986c = $valueHolder8986c;

        return array('valueHolder8986c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer85e5d = $initializer;
    }

    public function getProxyInitializer()
    {
        return $this->initializer85e5d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer85e5d && ($this->initializer85e5d->__invoke($valueHolder8986c, $this, 'initializeProxy', array(), $this->initializer85e5d) || 1) && $this->valueHolder8986c = $valueHolder8986c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8986c;
    }

    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHolder8986c;
    }


}
