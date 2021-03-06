<?php

class User 
{
    protected $loggedIn = false;
    protected $data = [];


    public function getData()
    {
        $this->loggedIn;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function isLoggedIn() 
    {
        return $this->loggedIn;
    }
}

$rc = new ReflectionClass('User');

var_dump($rc->getMethods());
var_dump($rc->getProperties());
echo $rc->getName() . PHP_EOL;
echo $rc->getFileName() . PHP_EOL;
echo $rc->getStartLine() . PHP_EOL;

// Reflection Api // all the methods
echo  print_r(get_class_methods($rc), true); 


// All the methods of reflection api

/* 

Array
(
    [0] => export
    [1] => __construct
    [2] => __toString
    [3] => getName
    [4] => isInternal
    [5] => isUserDefined
    [6] => isAnonymous
    [7] => isInstantiable
    [8] => isCloneable
    [9] => getFileName
    [10] => getStartLine
    [11] => getEndLine
    [12] => getDocComment
    [13] => getConstructor
    [14] => hasMethod
    [15] => getMethod
    [16] => getMethods
    [17] => hasProperty
    [18] => getProperty
    [19] => getProperties
    [20] => hasConstant
    [21] => getConstants
    [22] => getReflectionConstants
    [23] => getConstant
    [24] => getReflectionConstant
    [25] => getInterfaces
    [26] => getInterfaceNames
    [27] => isInterface
    [28] => getTraits
    [29] => getTraitNames
    [30] => getTraitAliases
    [31] => isTrait
    [32] => isAbstract
    [33] => isFinal
    [34] => getModifiers
    [35] => isInstance
    [36] => newInstance
    [37] => newInstanceWithoutConstructor
    [38] => newInstanceArgs
    [39] => getParentClass
    [40] => isSubclassOf
    [41] => getStaticProperties
    [42] => getStaticPropertyValue
    [43] => setStaticPropertyValue
    [44] => getDefaultProperties
    [45] => isIterable
    [46] => isIterateable
    [47] => implementsInterface
    [48] => getExtension
    [49] => getExtensionName
    [50] => inNamespace
    [51] => getNamespaceName
    [52] => getShortName
)



*/