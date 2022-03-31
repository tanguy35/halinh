<?php

namespace ContainerXFQQX2m;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder98159 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2ff06 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd638c = [
        
    ];

    public function getConnection()
    {
        $this->initializer2ff06 && ($this->initializer2ff06->__invoke($valueHolder98159, $this, 'getConnection', array(), $this->initializer2ff06) || 1) && $this->valueHolder98159 = $valueHolder98159;

        return $this->valueHolder98159->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer2ff06 && ($this->initializer2ff06->__invoke($valueHolder98159, $this, 'getMetadataFactory', array(), $this->initializer2ff06) || 1) && $this->valueHolder98159 = $valueHolder98159;

        return $this->valueHolder98159->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer2ff06 && ($this->initializer2ff06->__invoke($valueHolder98159, $this, 'getExpressionBuilder', array(), $this->initializer2ff06) || 1) && $this->valueHolder98159 = $valueHolder98159;

        return $this->valueHolder98159->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer2ff06 && ($this->initializer2ff06->__invoke($valueHolder98159, $this, 'beginTransaction', array(), $this->initializer2ff06) || 1) && $this->valueHolder98159 = $valueHolder98159;

        return $this->valueHolder98159->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer2ff06 && ($this->initializer2ff06->__invoke($valueHolder98159, $this, 'getCache', array(), $this->initializer2ff06) || 1) && $this->valueHolder98159 = $valueHolder98159;

        return $this->valueHolder98159->getCache();
    }

    public function transactional($func)
    {
        $this->initializer2ff06 && ($this->initializer2ff06->__invoke($valueHolder98159, $this, 'transactional', array('func' => $func), $this->initializer2ff06) || 1) && $this->valueHolder98159 = $valueHolder98159;

        return $this->valueHolder98159->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer2ff06 && ($this->initializer2ff06->__invoke($valueHolder98159, $this, 'wrapInTransaction', array('func' => $func), $this->initializer2ff06) || 1) && $this->valueHolder98159 = $valueHolder98159;

        return $this->valueHolder98159->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer2ff06 && ($this->initializer2ff06->__invoke($valueHolder98159, $this, 'commit', array(), $this->initializer2ff06) || 1) && $this->valueHolder98159 = $valueHolder98159;

        return $this->valueHolder98159->commit();
    }

    public function rollback()
    {
        $this->initializer2ff06 && ($this->initializer2ff06->__invoke($valueHolder98159, $this, 'rollback', array(), $this->initializer2ff06) || 1) && $this->valueHolder98159 = $valueHolder98159;

        return $this->valueHolder98159->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer2ff06 && ($this->initializer2ff06->__invoke($valueHolder98159, $this, 'getClassMetadata', array('className' => $className), $this->initializer2ff06) || 1) && $this->valueHolder98159 = $valueHolder98159;

        return $this->valueHolder98159->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer2ff06 && ($this->initializer2ff06->__invoke($valueHolder98159, $this, 'createQuery', array('dql' => $dql), $this->initializer2ff06) || 1) && $this->valueHolder98159 = $valueHolder98159;

        return $this->valueHolder98159->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer2ff06 && ($this->initializer2ff06->__invoke($valueHolder98159, $this, 'createNamedQuery', array('name' => $name), $this->initializer2ff06) || 1) && $this->valueHolder98159 = $valueHolder98159;

        return $this->valueHolder98159->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer2ff06 && ($this->initializer2ff06->__invoke($valueHolder98159, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer2ff06) || 1) && $this->valueHolder98159 = $valueHolder98159;

        return $this->valueHolder98159->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer2ff06 && ($this->initializer2ff06->__invoke($valueHolder98159, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer2ff06) || 1) && $this->valueHolder98159 = $valueHolder98159;

        return $this->valueHolder98159->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer2ff06 && ($this->initializer2ff06->__invoke($valueHolder98159, $this, 'createQueryBuilder', array(), $this->initializer2ff06) || 1) && $this->valueHolder98159 = $valueHolder98159;

        return $this->valueHolder98159->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer2ff06 && ($this->initializer2ff06->__invoke($valueHolder98159, $this, 'flush', array('entity' => $entity), $this->initializer2ff06) || 1) && $this->valueHolder98159 = $valueHolder98159;

        return $this->valueHolder98159->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer2ff06 && ($this->initializer2ff06->__invoke($valueHolder98159, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2ff06) || 1) && $this->valueHolder98159 = $valueHolder98159;

        return $this->valueHolder98159->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer2ff06 && ($this->initializer2ff06->__invoke($valueHolder98159, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer2ff06) || 1) && $this->valueHolder98159 = $valueHolder98159;

        return $this->valueHolder98159->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer2ff06 && ($this->initializer2ff06->__invoke($valueHolder98159, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer2ff06) || 1) && $this->valueHolder98159 = $valueHolder98159;

        return $this->valueHolder98159->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer2ff06 && ($this->initializer2ff06->__invoke($valueHolder98159, $this, 'clear', array('entityName' => $entityName), $this->initializer2ff06) || 1) && $this->valueHolder98159 = $valueHolder98159;

        return $this->valueHolder98159->clear($entityName);
    }

    public function close()
    {
        $this->initializer2ff06 && ($this->initializer2ff06->__invoke($valueHolder98159, $this, 'close', array(), $this->initializer2ff06) || 1) && $this->valueHolder98159 = $valueHolder98159;

        return $this->valueHolder98159->close();
    }

    public function persist($entity)
    {
        $this->initializer2ff06 && ($this->initializer2ff06->__invoke($valueHolder98159, $this, 'persist', array('entity' => $entity), $this->initializer2ff06) || 1) && $this->valueHolder98159 = $valueHolder98159;

        return $this->valueHolder98159->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer2ff06 && ($this->initializer2ff06->__invoke($valueHolder98159, $this, 'remove', array('entity' => $entity), $this->initializer2ff06) || 1) && $this->valueHolder98159 = $valueHolder98159;

        return $this->valueHolder98159->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer2ff06 && ($this->initializer2ff06->__invoke($valueHolder98159, $this, 'refresh', array('entity' => $entity), $this->initializer2ff06) || 1) && $this->valueHolder98159 = $valueHolder98159;

        return $this->valueHolder98159->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer2ff06 && ($this->initializer2ff06->__invoke($valueHolder98159, $this, 'detach', array('entity' => $entity), $this->initializer2ff06) || 1) && $this->valueHolder98159 = $valueHolder98159;

        return $this->valueHolder98159->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer2ff06 && ($this->initializer2ff06->__invoke($valueHolder98159, $this, 'merge', array('entity' => $entity), $this->initializer2ff06) || 1) && $this->valueHolder98159 = $valueHolder98159;

        return $this->valueHolder98159->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer2ff06 && ($this->initializer2ff06->__invoke($valueHolder98159, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer2ff06) || 1) && $this->valueHolder98159 = $valueHolder98159;

        return $this->valueHolder98159->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer2ff06 && ($this->initializer2ff06->__invoke($valueHolder98159, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2ff06) || 1) && $this->valueHolder98159 = $valueHolder98159;

        return $this->valueHolder98159->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer2ff06 && ($this->initializer2ff06->__invoke($valueHolder98159, $this, 'getRepository', array('entityName' => $entityName), $this->initializer2ff06) || 1) && $this->valueHolder98159 = $valueHolder98159;

        return $this->valueHolder98159->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer2ff06 && ($this->initializer2ff06->__invoke($valueHolder98159, $this, 'contains', array('entity' => $entity), $this->initializer2ff06) || 1) && $this->valueHolder98159 = $valueHolder98159;

        return $this->valueHolder98159->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer2ff06 && ($this->initializer2ff06->__invoke($valueHolder98159, $this, 'getEventManager', array(), $this->initializer2ff06) || 1) && $this->valueHolder98159 = $valueHolder98159;

        return $this->valueHolder98159->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer2ff06 && ($this->initializer2ff06->__invoke($valueHolder98159, $this, 'getConfiguration', array(), $this->initializer2ff06) || 1) && $this->valueHolder98159 = $valueHolder98159;

        return $this->valueHolder98159->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer2ff06 && ($this->initializer2ff06->__invoke($valueHolder98159, $this, 'isOpen', array(), $this->initializer2ff06) || 1) && $this->valueHolder98159 = $valueHolder98159;

        return $this->valueHolder98159->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer2ff06 && ($this->initializer2ff06->__invoke($valueHolder98159, $this, 'getUnitOfWork', array(), $this->initializer2ff06) || 1) && $this->valueHolder98159 = $valueHolder98159;

        return $this->valueHolder98159->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer2ff06 && ($this->initializer2ff06->__invoke($valueHolder98159, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2ff06) || 1) && $this->valueHolder98159 = $valueHolder98159;

        return $this->valueHolder98159->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer2ff06 && ($this->initializer2ff06->__invoke($valueHolder98159, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2ff06) || 1) && $this->valueHolder98159 = $valueHolder98159;

        return $this->valueHolder98159->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer2ff06 && ($this->initializer2ff06->__invoke($valueHolder98159, $this, 'getProxyFactory', array(), $this->initializer2ff06) || 1) && $this->valueHolder98159 = $valueHolder98159;

        return $this->valueHolder98159->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer2ff06 && ($this->initializer2ff06->__invoke($valueHolder98159, $this, 'initializeObject', array('obj' => $obj), $this->initializer2ff06) || 1) && $this->valueHolder98159 = $valueHolder98159;

        return $this->valueHolder98159->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer2ff06 && ($this->initializer2ff06->__invoke($valueHolder98159, $this, 'getFilters', array(), $this->initializer2ff06) || 1) && $this->valueHolder98159 = $valueHolder98159;

        return $this->valueHolder98159->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer2ff06 && ($this->initializer2ff06->__invoke($valueHolder98159, $this, 'isFiltersStateClean', array(), $this->initializer2ff06) || 1) && $this->valueHolder98159 = $valueHolder98159;

        return $this->valueHolder98159->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer2ff06 && ($this->initializer2ff06->__invoke($valueHolder98159, $this, 'hasFilters', array(), $this->initializer2ff06) || 1) && $this->valueHolder98159 = $valueHolder98159;

        return $this->valueHolder98159->hasFilters();
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

        $instance->initializer2ff06 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder98159) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder98159 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder98159->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer2ff06 && ($this->initializer2ff06->__invoke($valueHolder98159, $this, '__get', ['name' => $name], $this->initializer2ff06) || 1) && $this->valueHolder98159 = $valueHolder98159;

        if (isset(self::$publicPropertiesd638c[$name])) {
            return $this->valueHolder98159->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder98159;

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

        $targetObject = $this->valueHolder98159;
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
        $this->initializer2ff06 && ($this->initializer2ff06->__invoke($valueHolder98159, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2ff06) || 1) && $this->valueHolder98159 = $valueHolder98159;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder98159;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder98159;
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
        $this->initializer2ff06 && ($this->initializer2ff06->__invoke($valueHolder98159, $this, '__isset', array('name' => $name), $this->initializer2ff06) || 1) && $this->valueHolder98159 = $valueHolder98159;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder98159;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder98159;
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
        $this->initializer2ff06 && ($this->initializer2ff06->__invoke($valueHolder98159, $this, '__unset', array('name' => $name), $this->initializer2ff06) || 1) && $this->valueHolder98159 = $valueHolder98159;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder98159;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder98159;
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
        $this->initializer2ff06 && ($this->initializer2ff06->__invoke($valueHolder98159, $this, '__clone', array(), $this->initializer2ff06) || 1) && $this->valueHolder98159 = $valueHolder98159;

        $this->valueHolder98159 = clone $this->valueHolder98159;
    }

    public function __sleep()
    {
        $this->initializer2ff06 && ($this->initializer2ff06->__invoke($valueHolder98159, $this, '__sleep', array(), $this->initializer2ff06) || 1) && $this->valueHolder98159 = $valueHolder98159;

        return array('valueHolder98159');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2ff06 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2ff06;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer2ff06 && ($this->initializer2ff06->__invoke($valueHolder98159, $this, 'initializeProxy', array(), $this->initializer2ff06) || 1) && $this->valueHolder98159 = $valueHolder98159;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder98159;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder98159;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
