<?php

namespace ContainerQEoA9lx;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd2c72 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer0efdd = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties051ed = [
        
    ];

    public function getConnection()
    {
        $this->initializer0efdd && ($this->initializer0efdd->__invoke($valueHolderd2c72, $this, 'getConnection', array(), $this->initializer0efdd) || 1) && $this->valueHolderd2c72 = $valueHolderd2c72;

        return $this->valueHolderd2c72->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer0efdd && ($this->initializer0efdd->__invoke($valueHolderd2c72, $this, 'getMetadataFactory', array(), $this->initializer0efdd) || 1) && $this->valueHolderd2c72 = $valueHolderd2c72;

        return $this->valueHolderd2c72->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer0efdd && ($this->initializer0efdd->__invoke($valueHolderd2c72, $this, 'getExpressionBuilder', array(), $this->initializer0efdd) || 1) && $this->valueHolderd2c72 = $valueHolderd2c72;

        return $this->valueHolderd2c72->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer0efdd && ($this->initializer0efdd->__invoke($valueHolderd2c72, $this, 'beginTransaction', array(), $this->initializer0efdd) || 1) && $this->valueHolderd2c72 = $valueHolderd2c72;

        return $this->valueHolderd2c72->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer0efdd && ($this->initializer0efdd->__invoke($valueHolderd2c72, $this, 'getCache', array(), $this->initializer0efdd) || 1) && $this->valueHolderd2c72 = $valueHolderd2c72;

        return $this->valueHolderd2c72->getCache();
    }

    public function transactional($func)
    {
        $this->initializer0efdd && ($this->initializer0efdd->__invoke($valueHolderd2c72, $this, 'transactional', array('func' => $func), $this->initializer0efdd) || 1) && $this->valueHolderd2c72 = $valueHolderd2c72;

        return $this->valueHolderd2c72->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer0efdd && ($this->initializer0efdd->__invoke($valueHolderd2c72, $this, 'wrapInTransaction', array('func' => $func), $this->initializer0efdd) || 1) && $this->valueHolderd2c72 = $valueHolderd2c72;

        return $this->valueHolderd2c72->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer0efdd && ($this->initializer0efdd->__invoke($valueHolderd2c72, $this, 'commit', array(), $this->initializer0efdd) || 1) && $this->valueHolderd2c72 = $valueHolderd2c72;

        return $this->valueHolderd2c72->commit();
    }

    public function rollback()
    {
        $this->initializer0efdd && ($this->initializer0efdd->__invoke($valueHolderd2c72, $this, 'rollback', array(), $this->initializer0efdd) || 1) && $this->valueHolderd2c72 = $valueHolderd2c72;

        return $this->valueHolderd2c72->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer0efdd && ($this->initializer0efdd->__invoke($valueHolderd2c72, $this, 'getClassMetadata', array('className' => $className), $this->initializer0efdd) || 1) && $this->valueHolderd2c72 = $valueHolderd2c72;

        return $this->valueHolderd2c72->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer0efdd && ($this->initializer0efdd->__invoke($valueHolderd2c72, $this, 'createQuery', array('dql' => $dql), $this->initializer0efdd) || 1) && $this->valueHolderd2c72 = $valueHolderd2c72;

        return $this->valueHolderd2c72->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer0efdd && ($this->initializer0efdd->__invoke($valueHolderd2c72, $this, 'createNamedQuery', array('name' => $name), $this->initializer0efdd) || 1) && $this->valueHolderd2c72 = $valueHolderd2c72;

        return $this->valueHolderd2c72->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer0efdd && ($this->initializer0efdd->__invoke($valueHolderd2c72, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer0efdd) || 1) && $this->valueHolderd2c72 = $valueHolderd2c72;

        return $this->valueHolderd2c72->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer0efdd && ($this->initializer0efdd->__invoke($valueHolderd2c72, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer0efdd) || 1) && $this->valueHolderd2c72 = $valueHolderd2c72;

        return $this->valueHolderd2c72->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer0efdd && ($this->initializer0efdd->__invoke($valueHolderd2c72, $this, 'createQueryBuilder', array(), $this->initializer0efdd) || 1) && $this->valueHolderd2c72 = $valueHolderd2c72;

        return $this->valueHolderd2c72->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer0efdd && ($this->initializer0efdd->__invoke($valueHolderd2c72, $this, 'flush', array('entity' => $entity), $this->initializer0efdd) || 1) && $this->valueHolderd2c72 = $valueHolderd2c72;

        return $this->valueHolderd2c72->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer0efdd && ($this->initializer0efdd->__invoke($valueHolderd2c72, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0efdd) || 1) && $this->valueHolderd2c72 = $valueHolderd2c72;

        return $this->valueHolderd2c72->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer0efdd && ($this->initializer0efdd->__invoke($valueHolderd2c72, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer0efdd) || 1) && $this->valueHolderd2c72 = $valueHolderd2c72;

        return $this->valueHolderd2c72->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer0efdd && ($this->initializer0efdd->__invoke($valueHolderd2c72, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer0efdd) || 1) && $this->valueHolderd2c72 = $valueHolderd2c72;

        return $this->valueHolderd2c72->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer0efdd && ($this->initializer0efdd->__invoke($valueHolderd2c72, $this, 'clear', array('entityName' => $entityName), $this->initializer0efdd) || 1) && $this->valueHolderd2c72 = $valueHolderd2c72;

        return $this->valueHolderd2c72->clear($entityName);
    }

    public function close()
    {
        $this->initializer0efdd && ($this->initializer0efdd->__invoke($valueHolderd2c72, $this, 'close', array(), $this->initializer0efdd) || 1) && $this->valueHolderd2c72 = $valueHolderd2c72;

        return $this->valueHolderd2c72->close();
    }

    public function persist($entity)
    {
        $this->initializer0efdd && ($this->initializer0efdd->__invoke($valueHolderd2c72, $this, 'persist', array('entity' => $entity), $this->initializer0efdd) || 1) && $this->valueHolderd2c72 = $valueHolderd2c72;

        return $this->valueHolderd2c72->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer0efdd && ($this->initializer0efdd->__invoke($valueHolderd2c72, $this, 'remove', array('entity' => $entity), $this->initializer0efdd) || 1) && $this->valueHolderd2c72 = $valueHolderd2c72;

        return $this->valueHolderd2c72->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer0efdd && ($this->initializer0efdd->__invoke($valueHolderd2c72, $this, 'refresh', array('entity' => $entity), $this->initializer0efdd) || 1) && $this->valueHolderd2c72 = $valueHolderd2c72;

        return $this->valueHolderd2c72->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer0efdd && ($this->initializer0efdd->__invoke($valueHolderd2c72, $this, 'detach', array('entity' => $entity), $this->initializer0efdd) || 1) && $this->valueHolderd2c72 = $valueHolderd2c72;

        return $this->valueHolderd2c72->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer0efdd && ($this->initializer0efdd->__invoke($valueHolderd2c72, $this, 'merge', array('entity' => $entity), $this->initializer0efdd) || 1) && $this->valueHolderd2c72 = $valueHolderd2c72;

        return $this->valueHolderd2c72->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer0efdd && ($this->initializer0efdd->__invoke($valueHolderd2c72, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer0efdd) || 1) && $this->valueHolderd2c72 = $valueHolderd2c72;

        return $this->valueHolderd2c72->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer0efdd && ($this->initializer0efdd->__invoke($valueHolderd2c72, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0efdd) || 1) && $this->valueHolderd2c72 = $valueHolderd2c72;

        return $this->valueHolderd2c72->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer0efdd && ($this->initializer0efdd->__invoke($valueHolderd2c72, $this, 'getRepository', array('entityName' => $entityName), $this->initializer0efdd) || 1) && $this->valueHolderd2c72 = $valueHolderd2c72;

        return $this->valueHolderd2c72->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer0efdd && ($this->initializer0efdd->__invoke($valueHolderd2c72, $this, 'contains', array('entity' => $entity), $this->initializer0efdd) || 1) && $this->valueHolderd2c72 = $valueHolderd2c72;

        return $this->valueHolderd2c72->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer0efdd && ($this->initializer0efdd->__invoke($valueHolderd2c72, $this, 'getEventManager', array(), $this->initializer0efdd) || 1) && $this->valueHolderd2c72 = $valueHolderd2c72;

        return $this->valueHolderd2c72->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer0efdd && ($this->initializer0efdd->__invoke($valueHolderd2c72, $this, 'getConfiguration', array(), $this->initializer0efdd) || 1) && $this->valueHolderd2c72 = $valueHolderd2c72;

        return $this->valueHolderd2c72->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer0efdd && ($this->initializer0efdd->__invoke($valueHolderd2c72, $this, 'isOpen', array(), $this->initializer0efdd) || 1) && $this->valueHolderd2c72 = $valueHolderd2c72;

        return $this->valueHolderd2c72->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer0efdd && ($this->initializer0efdd->__invoke($valueHolderd2c72, $this, 'getUnitOfWork', array(), $this->initializer0efdd) || 1) && $this->valueHolderd2c72 = $valueHolderd2c72;

        return $this->valueHolderd2c72->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer0efdd && ($this->initializer0efdd->__invoke($valueHolderd2c72, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0efdd) || 1) && $this->valueHolderd2c72 = $valueHolderd2c72;

        return $this->valueHolderd2c72->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer0efdd && ($this->initializer0efdd->__invoke($valueHolderd2c72, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0efdd) || 1) && $this->valueHolderd2c72 = $valueHolderd2c72;

        return $this->valueHolderd2c72->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer0efdd && ($this->initializer0efdd->__invoke($valueHolderd2c72, $this, 'getProxyFactory', array(), $this->initializer0efdd) || 1) && $this->valueHolderd2c72 = $valueHolderd2c72;

        return $this->valueHolderd2c72->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer0efdd && ($this->initializer0efdd->__invoke($valueHolderd2c72, $this, 'initializeObject', array('obj' => $obj), $this->initializer0efdd) || 1) && $this->valueHolderd2c72 = $valueHolderd2c72;

        return $this->valueHolderd2c72->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer0efdd && ($this->initializer0efdd->__invoke($valueHolderd2c72, $this, 'getFilters', array(), $this->initializer0efdd) || 1) && $this->valueHolderd2c72 = $valueHolderd2c72;

        return $this->valueHolderd2c72->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer0efdd && ($this->initializer0efdd->__invoke($valueHolderd2c72, $this, 'isFiltersStateClean', array(), $this->initializer0efdd) || 1) && $this->valueHolderd2c72 = $valueHolderd2c72;

        return $this->valueHolderd2c72->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer0efdd && ($this->initializer0efdd->__invoke($valueHolderd2c72, $this, 'hasFilters', array(), $this->initializer0efdd) || 1) && $this->valueHolderd2c72 = $valueHolderd2c72;

        return $this->valueHolderd2c72->hasFilters();
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

        $instance->initializer0efdd = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderd2c72) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd2c72 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd2c72->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer0efdd && ($this->initializer0efdd->__invoke($valueHolderd2c72, $this, '__get', ['name' => $name], $this->initializer0efdd) || 1) && $this->valueHolderd2c72 = $valueHolderd2c72;

        if (isset(self::$publicProperties051ed[$name])) {
            return $this->valueHolderd2c72->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd2c72;

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

        $targetObject = $this->valueHolderd2c72;
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
        $this->initializer0efdd && ($this->initializer0efdd->__invoke($valueHolderd2c72, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer0efdd) || 1) && $this->valueHolderd2c72 = $valueHolderd2c72;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd2c72;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd2c72;
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
        $this->initializer0efdd && ($this->initializer0efdd->__invoke($valueHolderd2c72, $this, '__isset', array('name' => $name), $this->initializer0efdd) || 1) && $this->valueHolderd2c72 = $valueHolderd2c72;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd2c72;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd2c72;
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
        $this->initializer0efdd && ($this->initializer0efdd->__invoke($valueHolderd2c72, $this, '__unset', array('name' => $name), $this->initializer0efdd) || 1) && $this->valueHolderd2c72 = $valueHolderd2c72;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd2c72;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd2c72;
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
        $this->initializer0efdd && ($this->initializer0efdd->__invoke($valueHolderd2c72, $this, '__clone', array(), $this->initializer0efdd) || 1) && $this->valueHolderd2c72 = $valueHolderd2c72;

        $this->valueHolderd2c72 = clone $this->valueHolderd2c72;
    }

    public function __sleep()
    {
        $this->initializer0efdd && ($this->initializer0efdd->__invoke($valueHolderd2c72, $this, '__sleep', array(), $this->initializer0efdd) || 1) && $this->valueHolderd2c72 = $valueHolderd2c72;

        return array('valueHolderd2c72');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer0efdd = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer0efdd;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer0efdd && ($this->initializer0efdd->__invoke($valueHolderd2c72, $this, 'initializeProxy', array(), $this->initializer0efdd) || 1) && $this->valueHolderd2c72 = $valueHolderd2c72;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd2c72;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd2c72;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
