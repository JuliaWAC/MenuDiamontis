<?php

namespace ContainerQEoA9lx;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
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

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer0efdd && ($this->initializer0efdd->__invoke($valueHolderd2c72, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer0efdd) || 1) && $this->valueHolderd2c72 = $valueHolderd2c72;

        if ($this->valueHolderd2c72 === $returnValue = $this->valueHolderd2c72->paginate($target, $page, $limit, $options)) {
            return $this;
        }

        return $returnValue;
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

        $instance->initializer0efdd = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolderd2c72) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolderd2c72 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer0efdd && ($this->initializer0efdd->__invoke($valueHolderd2c72, $this, '__get', ['name' => $name], $this->initializer0efdd) || 1) && $this->valueHolderd2c72 = $valueHolderd2c72;

        if (isset(self::$publicProperties051ed[$name])) {
            return $this->valueHolderd2c72->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
