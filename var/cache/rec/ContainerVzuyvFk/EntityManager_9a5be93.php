<?php

namespace ContainerVzuyvFk;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0262e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer55bc2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties23b40 = [
        
    ];

    public function getConnection()
    {
        $this->initializer55bc2 && ($this->initializer55bc2->__invoke($valueHolder0262e, $this, 'getConnection', array(), $this->initializer55bc2) || 1) && $this->valueHolder0262e = $valueHolder0262e;

        return $this->valueHolder0262e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer55bc2 && ($this->initializer55bc2->__invoke($valueHolder0262e, $this, 'getMetadataFactory', array(), $this->initializer55bc2) || 1) && $this->valueHolder0262e = $valueHolder0262e;

        return $this->valueHolder0262e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer55bc2 && ($this->initializer55bc2->__invoke($valueHolder0262e, $this, 'getExpressionBuilder', array(), $this->initializer55bc2) || 1) && $this->valueHolder0262e = $valueHolder0262e;

        return $this->valueHolder0262e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer55bc2 && ($this->initializer55bc2->__invoke($valueHolder0262e, $this, 'beginTransaction', array(), $this->initializer55bc2) || 1) && $this->valueHolder0262e = $valueHolder0262e;

        return $this->valueHolder0262e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer55bc2 && ($this->initializer55bc2->__invoke($valueHolder0262e, $this, 'getCache', array(), $this->initializer55bc2) || 1) && $this->valueHolder0262e = $valueHolder0262e;

        return $this->valueHolder0262e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer55bc2 && ($this->initializer55bc2->__invoke($valueHolder0262e, $this, 'transactional', array('func' => $func), $this->initializer55bc2) || 1) && $this->valueHolder0262e = $valueHolder0262e;

        return $this->valueHolder0262e->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer55bc2 && ($this->initializer55bc2->__invoke($valueHolder0262e, $this, 'wrapInTransaction', array('func' => $func), $this->initializer55bc2) || 1) && $this->valueHolder0262e = $valueHolder0262e;

        return $this->valueHolder0262e->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer55bc2 && ($this->initializer55bc2->__invoke($valueHolder0262e, $this, 'commit', array(), $this->initializer55bc2) || 1) && $this->valueHolder0262e = $valueHolder0262e;

        return $this->valueHolder0262e->commit();
    }

    public function rollback()
    {
        $this->initializer55bc2 && ($this->initializer55bc2->__invoke($valueHolder0262e, $this, 'rollback', array(), $this->initializer55bc2) || 1) && $this->valueHolder0262e = $valueHolder0262e;

        return $this->valueHolder0262e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer55bc2 && ($this->initializer55bc2->__invoke($valueHolder0262e, $this, 'getClassMetadata', array('className' => $className), $this->initializer55bc2) || 1) && $this->valueHolder0262e = $valueHolder0262e;

        return $this->valueHolder0262e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer55bc2 && ($this->initializer55bc2->__invoke($valueHolder0262e, $this, 'createQuery', array('dql' => $dql), $this->initializer55bc2) || 1) && $this->valueHolder0262e = $valueHolder0262e;

        return $this->valueHolder0262e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer55bc2 && ($this->initializer55bc2->__invoke($valueHolder0262e, $this, 'createNamedQuery', array('name' => $name), $this->initializer55bc2) || 1) && $this->valueHolder0262e = $valueHolder0262e;

        return $this->valueHolder0262e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer55bc2 && ($this->initializer55bc2->__invoke($valueHolder0262e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer55bc2) || 1) && $this->valueHolder0262e = $valueHolder0262e;

        return $this->valueHolder0262e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer55bc2 && ($this->initializer55bc2->__invoke($valueHolder0262e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer55bc2) || 1) && $this->valueHolder0262e = $valueHolder0262e;

        return $this->valueHolder0262e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer55bc2 && ($this->initializer55bc2->__invoke($valueHolder0262e, $this, 'createQueryBuilder', array(), $this->initializer55bc2) || 1) && $this->valueHolder0262e = $valueHolder0262e;

        return $this->valueHolder0262e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer55bc2 && ($this->initializer55bc2->__invoke($valueHolder0262e, $this, 'flush', array('entity' => $entity), $this->initializer55bc2) || 1) && $this->valueHolder0262e = $valueHolder0262e;

        return $this->valueHolder0262e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer55bc2 && ($this->initializer55bc2->__invoke($valueHolder0262e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer55bc2) || 1) && $this->valueHolder0262e = $valueHolder0262e;

        return $this->valueHolder0262e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer55bc2 && ($this->initializer55bc2->__invoke($valueHolder0262e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer55bc2) || 1) && $this->valueHolder0262e = $valueHolder0262e;

        return $this->valueHolder0262e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer55bc2 && ($this->initializer55bc2->__invoke($valueHolder0262e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer55bc2) || 1) && $this->valueHolder0262e = $valueHolder0262e;

        return $this->valueHolder0262e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer55bc2 && ($this->initializer55bc2->__invoke($valueHolder0262e, $this, 'clear', array('entityName' => $entityName), $this->initializer55bc2) || 1) && $this->valueHolder0262e = $valueHolder0262e;

        return $this->valueHolder0262e->clear($entityName);
    }

    public function close()
    {
        $this->initializer55bc2 && ($this->initializer55bc2->__invoke($valueHolder0262e, $this, 'close', array(), $this->initializer55bc2) || 1) && $this->valueHolder0262e = $valueHolder0262e;

        return $this->valueHolder0262e->close();
    }

    public function persist($entity)
    {
        $this->initializer55bc2 && ($this->initializer55bc2->__invoke($valueHolder0262e, $this, 'persist', array('entity' => $entity), $this->initializer55bc2) || 1) && $this->valueHolder0262e = $valueHolder0262e;

        return $this->valueHolder0262e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer55bc2 && ($this->initializer55bc2->__invoke($valueHolder0262e, $this, 'remove', array('entity' => $entity), $this->initializer55bc2) || 1) && $this->valueHolder0262e = $valueHolder0262e;

        return $this->valueHolder0262e->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer55bc2 && ($this->initializer55bc2->__invoke($valueHolder0262e, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer55bc2) || 1) && $this->valueHolder0262e = $valueHolder0262e;

        return $this->valueHolder0262e->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer55bc2 && ($this->initializer55bc2->__invoke($valueHolder0262e, $this, 'detach', array('entity' => $entity), $this->initializer55bc2) || 1) && $this->valueHolder0262e = $valueHolder0262e;

        return $this->valueHolder0262e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer55bc2 && ($this->initializer55bc2->__invoke($valueHolder0262e, $this, 'merge', array('entity' => $entity), $this->initializer55bc2) || 1) && $this->valueHolder0262e = $valueHolder0262e;

        return $this->valueHolder0262e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer55bc2 && ($this->initializer55bc2->__invoke($valueHolder0262e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer55bc2) || 1) && $this->valueHolder0262e = $valueHolder0262e;

        return $this->valueHolder0262e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer55bc2 && ($this->initializer55bc2->__invoke($valueHolder0262e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer55bc2) || 1) && $this->valueHolder0262e = $valueHolder0262e;

        return $this->valueHolder0262e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer55bc2 && ($this->initializer55bc2->__invoke($valueHolder0262e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer55bc2) || 1) && $this->valueHolder0262e = $valueHolder0262e;

        return $this->valueHolder0262e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer55bc2 && ($this->initializer55bc2->__invoke($valueHolder0262e, $this, 'contains', array('entity' => $entity), $this->initializer55bc2) || 1) && $this->valueHolder0262e = $valueHolder0262e;

        return $this->valueHolder0262e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer55bc2 && ($this->initializer55bc2->__invoke($valueHolder0262e, $this, 'getEventManager', array(), $this->initializer55bc2) || 1) && $this->valueHolder0262e = $valueHolder0262e;

        return $this->valueHolder0262e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer55bc2 && ($this->initializer55bc2->__invoke($valueHolder0262e, $this, 'getConfiguration', array(), $this->initializer55bc2) || 1) && $this->valueHolder0262e = $valueHolder0262e;

        return $this->valueHolder0262e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer55bc2 && ($this->initializer55bc2->__invoke($valueHolder0262e, $this, 'isOpen', array(), $this->initializer55bc2) || 1) && $this->valueHolder0262e = $valueHolder0262e;

        return $this->valueHolder0262e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer55bc2 && ($this->initializer55bc2->__invoke($valueHolder0262e, $this, 'getUnitOfWork', array(), $this->initializer55bc2) || 1) && $this->valueHolder0262e = $valueHolder0262e;

        return $this->valueHolder0262e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer55bc2 && ($this->initializer55bc2->__invoke($valueHolder0262e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer55bc2) || 1) && $this->valueHolder0262e = $valueHolder0262e;

        return $this->valueHolder0262e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer55bc2 && ($this->initializer55bc2->__invoke($valueHolder0262e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer55bc2) || 1) && $this->valueHolder0262e = $valueHolder0262e;

        return $this->valueHolder0262e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer55bc2 && ($this->initializer55bc2->__invoke($valueHolder0262e, $this, 'getProxyFactory', array(), $this->initializer55bc2) || 1) && $this->valueHolder0262e = $valueHolder0262e;

        return $this->valueHolder0262e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer55bc2 && ($this->initializer55bc2->__invoke($valueHolder0262e, $this, 'initializeObject', array('obj' => $obj), $this->initializer55bc2) || 1) && $this->valueHolder0262e = $valueHolder0262e;

        return $this->valueHolder0262e->initializeObject($obj);
    }

    public function isUninitializedObject($obj) : bool
    {
        $this->initializer55bc2 && ($this->initializer55bc2->__invoke($valueHolder0262e, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializer55bc2) || 1) && $this->valueHolder0262e = $valueHolder0262e;

        return $this->valueHolder0262e->isUninitializedObject($obj);
    }

    public function getFilters()
    {
        $this->initializer55bc2 && ($this->initializer55bc2->__invoke($valueHolder0262e, $this, 'getFilters', array(), $this->initializer55bc2) || 1) && $this->valueHolder0262e = $valueHolder0262e;

        return $this->valueHolder0262e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer55bc2 && ($this->initializer55bc2->__invoke($valueHolder0262e, $this, 'isFiltersStateClean', array(), $this->initializer55bc2) || 1) && $this->valueHolder0262e = $valueHolder0262e;

        return $this->valueHolder0262e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer55bc2 && ($this->initializer55bc2->__invoke($valueHolder0262e, $this, 'hasFilters', array(), $this->initializer55bc2) || 1) && $this->valueHolder0262e = $valueHolder0262e;

        return $this->valueHolder0262e->hasFilters();
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

        $instance->initializer55bc2 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder0262e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0262e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0262e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer55bc2 && ($this->initializer55bc2->__invoke($valueHolder0262e, $this, '__get', ['name' => $name], $this->initializer55bc2) || 1) && $this->valueHolder0262e = $valueHolder0262e;

        if (isset(self::$publicProperties23b40[$name])) {
            return $this->valueHolder0262e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0262e;

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

        $targetObject = $this->valueHolder0262e;
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
        $this->initializer55bc2 && ($this->initializer55bc2->__invoke($valueHolder0262e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer55bc2) || 1) && $this->valueHolder0262e = $valueHolder0262e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0262e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0262e;
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
        $this->initializer55bc2 && ($this->initializer55bc2->__invoke($valueHolder0262e, $this, '__isset', array('name' => $name), $this->initializer55bc2) || 1) && $this->valueHolder0262e = $valueHolder0262e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0262e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0262e;
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
        $this->initializer55bc2 && ($this->initializer55bc2->__invoke($valueHolder0262e, $this, '__unset', array('name' => $name), $this->initializer55bc2) || 1) && $this->valueHolder0262e = $valueHolder0262e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0262e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0262e;
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
        $this->initializer55bc2 && ($this->initializer55bc2->__invoke($valueHolder0262e, $this, '__clone', array(), $this->initializer55bc2) || 1) && $this->valueHolder0262e = $valueHolder0262e;

        $this->valueHolder0262e = clone $this->valueHolder0262e;
    }

    public function __sleep()
    {
        $this->initializer55bc2 && ($this->initializer55bc2->__invoke($valueHolder0262e, $this, '__sleep', array(), $this->initializer55bc2) || 1) && $this->valueHolder0262e = $valueHolder0262e;

        return array('valueHolder0262e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(?\Closure $initializer = null) : void
    {
        $this->initializer55bc2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer55bc2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer55bc2 && ($this->initializer55bc2->__invoke($valueHolder0262e, $this, 'initializeProxy', array(), $this->initializer55bc2) || 1) && $this->valueHolder0262e = $valueHolder0262e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0262e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0262e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
