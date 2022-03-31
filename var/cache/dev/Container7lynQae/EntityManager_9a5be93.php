<?php

namespace Container7lynQae;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder69324 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera4f6b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf5f61 = [
        
    ];

    public function getConnection()
    {
        $this->initializera4f6b && ($this->initializera4f6b->__invoke($valueHolder69324, $this, 'getConnection', array(), $this->initializera4f6b) || 1) && $this->valueHolder69324 = $valueHolder69324;

        return $this->valueHolder69324->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera4f6b && ($this->initializera4f6b->__invoke($valueHolder69324, $this, 'getMetadataFactory', array(), $this->initializera4f6b) || 1) && $this->valueHolder69324 = $valueHolder69324;

        return $this->valueHolder69324->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera4f6b && ($this->initializera4f6b->__invoke($valueHolder69324, $this, 'getExpressionBuilder', array(), $this->initializera4f6b) || 1) && $this->valueHolder69324 = $valueHolder69324;

        return $this->valueHolder69324->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera4f6b && ($this->initializera4f6b->__invoke($valueHolder69324, $this, 'beginTransaction', array(), $this->initializera4f6b) || 1) && $this->valueHolder69324 = $valueHolder69324;

        return $this->valueHolder69324->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera4f6b && ($this->initializera4f6b->__invoke($valueHolder69324, $this, 'getCache', array(), $this->initializera4f6b) || 1) && $this->valueHolder69324 = $valueHolder69324;

        return $this->valueHolder69324->getCache();
    }

    public function transactional($func)
    {
        $this->initializera4f6b && ($this->initializera4f6b->__invoke($valueHolder69324, $this, 'transactional', array('func' => $func), $this->initializera4f6b) || 1) && $this->valueHolder69324 = $valueHolder69324;

        return $this->valueHolder69324->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera4f6b && ($this->initializera4f6b->__invoke($valueHolder69324, $this, 'wrapInTransaction', array('func' => $func), $this->initializera4f6b) || 1) && $this->valueHolder69324 = $valueHolder69324;

        return $this->valueHolder69324->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera4f6b && ($this->initializera4f6b->__invoke($valueHolder69324, $this, 'commit', array(), $this->initializera4f6b) || 1) && $this->valueHolder69324 = $valueHolder69324;

        return $this->valueHolder69324->commit();
    }

    public function rollback()
    {
        $this->initializera4f6b && ($this->initializera4f6b->__invoke($valueHolder69324, $this, 'rollback', array(), $this->initializera4f6b) || 1) && $this->valueHolder69324 = $valueHolder69324;

        return $this->valueHolder69324->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera4f6b && ($this->initializera4f6b->__invoke($valueHolder69324, $this, 'getClassMetadata', array('className' => $className), $this->initializera4f6b) || 1) && $this->valueHolder69324 = $valueHolder69324;

        return $this->valueHolder69324->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera4f6b && ($this->initializera4f6b->__invoke($valueHolder69324, $this, 'createQuery', array('dql' => $dql), $this->initializera4f6b) || 1) && $this->valueHolder69324 = $valueHolder69324;

        return $this->valueHolder69324->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera4f6b && ($this->initializera4f6b->__invoke($valueHolder69324, $this, 'createNamedQuery', array('name' => $name), $this->initializera4f6b) || 1) && $this->valueHolder69324 = $valueHolder69324;

        return $this->valueHolder69324->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera4f6b && ($this->initializera4f6b->__invoke($valueHolder69324, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera4f6b) || 1) && $this->valueHolder69324 = $valueHolder69324;

        return $this->valueHolder69324->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera4f6b && ($this->initializera4f6b->__invoke($valueHolder69324, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera4f6b) || 1) && $this->valueHolder69324 = $valueHolder69324;

        return $this->valueHolder69324->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera4f6b && ($this->initializera4f6b->__invoke($valueHolder69324, $this, 'createQueryBuilder', array(), $this->initializera4f6b) || 1) && $this->valueHolder69324 = $valueHolder69324;

        return $this->valueHolder69324->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera4f6b && ($this->initializera4f6b->__invoke($valueHolder69324, $this, 'flush', array('entity' => $entity), $this->initializera4f6b) || 1) && $this->valueHolder69324 = $valueHolder69324;

        return $this->valueHolder69324->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera4f6b && ($this->initializera4f6b->__invoke($valueHolder69324, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera4f6b) || 1) && $this->valueHolder69324 = $valueHolder69324;

        return $this->valueHolder69324->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera4f6b && ($this->initializera4f6b->__invoke($valueHolder69324, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera4f6b) || 1) && $this->valueHolder69324 = $valueHolder69324;

        return $this->valueHolder69324->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera4f6b && ($this->initializera4f6b->__invoke($valueHolder69324, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera4f6b) || 1) && $this->valueHolder69324 = $valueHolder69324;

        return $this->valueHolder69324->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera4f6b && ($this->initializera4f6b->__invoke($valueHolder69324, $this, 'clear', array('entityName' => $entityName), $this->initializera4f6b) || 1) && $this->valueHolder69324 = $valueHolder69324;

        return $this->valueHolder69324->clear($entityName);
    }

    public function close()
    {
        $this->initializera4f6b && ($this->initializera4f6b->__invoke($valueHolder69324, $this, 'close', array(), $this->initializera4f6b) || 1) && $this->valueHolder69324 = $valueHolder69324;

        return $this->valueHolder69324->close();
    }

    public function persist($entity)
    {
        $this->initializera4f6b && ($this->initializera4f6b->__invoke($valueHolder69324, $this, 'persist', array('entity' => $entity), $this->initializera4f6b) || 1) && $this->valueHolder69324 = $valueHolder69324;

        return $this->valueHolder69324->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera4f6b && ($this->initializera4f6b->__invoke($valueHolder69324, $this, 'remove', array('entity' => $entity), $this->initializera4f6b) || 1) && $this->valueHolder69324 = $valueHolder69324;

        return $this->valueHolder69324->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera4f6b && ($this->initializera4f6b->__invoke($valueHolder69324, $this, 'refresh', array('entity' => $entity), $this->initializera4f6b) || 1) && $this->valueHolder69324 = $valueHolder69324;

        return $this->valueHolder69324->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera4f6b && ($this->initializera4f6b->__invoke($valueHolder69324, $this, 'detach', array('entity' => $entity), $this->initializera4f6b) || 1) && $this->valueHolder69324 = $valueHolder69324;

        return $this->valueHolder69324->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera4f6b && ($this->initializera4f6b->__invoke($valueHolder69324, $this, 'merge', array('entity' => $entity), $this->initializera4f6b) || 1) && $this->valueHolder69324 = $valueHolder69324;

        return $this->valueHolder69324->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera4f6b && ($this->initializera4f6b->__invoke($valueHolder69324, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera4f6b) || 1) && $this->valueHolder69324 = $valueHolder69324;

        return $this->valueHolder69324->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera4f6b && ($this->initializera4f6b->__invoke($valueHolder69324, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera4f6b) || 1) && $this->valueHolder69324 = $valueHolder69324;

        return $this->valueHolder69324->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera4f6b && ($this->initializera4f6b->__invoke($valueHolder69324, $this, 'getRepository', array('entityName' => $entityName), $this->initializera4f6b) || 1) && $this->valueHolder69324 = $valueHolder69324;

        return $this->valueHolder69324->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera4f6b && ($this->initializera4f6b->__invoke($valueHolder69324, $this, 'contains', array('entity' => $entity), $this->initializera4f6b) || 1) && $this->valueHolder69324 = $valueHolder69324;

        return $this->valueHolder69324->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera4f6b && ($this->initializera4f6b->__invoke($valueHolder69324, $this, 'getEventManager', array(), $this->initializera4f6b) || 1) && $this->valueHolder69324 = $valueHolder69324;

        return $this->valueHolder69324->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera4f6b && ($this->initializera4f6b->__invoke($valueHolder69324, $this, 'getConfiguration', array(), $this->initializera4f6b) || 1) && $this->valueHolder69324 = $valueHolder69324;

        return $this->valueHolder69324->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera4f6b && ($this->initializera4f6b->__invoke($valueHolder69324, $this, 'isOpen', array(), $this->initializera4f6b) || 1) && $this->valueHolder69324 = $valueHolder69324;

        return $this->valueHolder69324->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera4f6b && ($this->initializera4f6b->__invoke($valueHolder69324, $this, 'getUnitOfWork', array(), $this->initializera4f6b) || 1) && $this->valueHolder69324 = $valueHolder69324;

        return $this->valueHolder69324->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera4f6b && ($this->initializera4f6b->__invoke($valueHolder69324, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera4f6b) || 1) && $this->valueHolder69324 = $valueHolder69324;

        return $this->valueHolder69324->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera4f6b && ($this->initializera4f6b->__invoke($valueHolder69324, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera4f6b) || 1) && $this->valueHolder69324 = $valueHolder69324;

        return $this->valueHolder69324->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera4f6b && ($this->initializera4f6b->__invoke($valueHolder69324, $this, 'getProxyFactory', array(), $this->initializera4f6b) || 1) && $this->valueHolder69324 = $valueHolder69324;

        return $this->valueHolder69324->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera4f6b && ($this->initializera4f6b->__invoke($valueHolder69324, $this, 'initializeObject', array('obj' => $obj), $this->initializera4f6b) || 1) && $this->valueHolder69324 = $valueHolder69324;

        return $this->valueHolder69324->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera4f6b && ($this->initializera4f6b->__invoke($valueHolder69324, $this, 'getFilters', array(), $this->initializera4f6b) || 1) && $this->valueHolder69324 = $valueHolder69324;

        return $this->valueHolder69324->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera4f6b && ($this->initializera4f6b->__invoke($valueHolder69324, $this, 'isFiltersStateClean', array(), $this->initializera4f6b) || 1) && $this->valueHolder69324 = $valueHolder69324;

        return $this->valueHolder69324->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera4f6b && ($this->initializera4f6b->__invoke($valueHolder69324, $this, 'hasFilters', array(), $this->initializera4f6b) || 1) && $this->valueHolder69324 = $valueHolder69324;

        return $this->valueHolder69324->hasFilters();
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
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializera4f6b = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder69324) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder69324 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder69324->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera4f6b && ($this->initializera4f6b->__invoke($valueHolder69324, $this, '__get', ['name' => $name], $this->initializera4f6b) || 1) && $this->valueHolder69324 = $valueHolder69324;

        if (isset(self::$publicPropertiesf5f61[$name])) {
            return $this->valueHolder69324->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder69324;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder69324;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializera4f6b && ($this->initializera4f6b->__invoke($valueHolder69324, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera4f6b) || 1) && $this->valueHolder69324 = $valueHolder69324;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder69324;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder69324;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializera4f6b && ($this->initializera4f6b->__invoke($valueHolder69324, $this, '__isset', array('name' => $name), $this->initializera4f6b) || 1) && $this->valueHolder69324 = $valueHolder69324;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder69324;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder69324;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializera4f6b && ($this->initializera4f6b->__invoke($valueHolder69324, $this, '__unset', array('name' => $name), $this->initializera4f6b) || 1) && $this->valueHolder69324 = $valueHolder69324;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder69324;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder69324;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializera4f6b && ($this->initializera4f6b->__invoke($valueHolder69324, $this, '__clone', array(), $this->initializera4f6b) || 1) && $this->valueHolder69324 = $valueHolder69324;

        $this->valueHolder69324 = clone $this->valueHolder69324;
    }

    public function __sleep()
    {
        $this->initializera4f6b && ($this->initializera4f6b->__invoke($valueHolder69324, $this, '__sleep', array(), $this->initializera4f6b) || 1) && $this->valueHolder69324 = $valueHolder69324;

        return array('valueHolder69324');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera4f6b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera4f6b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera4f6b && ($this->initializera4f6b->__invoke($valueHolder69324, $this, 'initializeProxy', array(), $this->initializera4f6b) || 1) && $this->valueHolder69324 = $valueHolder69324;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder69324;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder69324;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
