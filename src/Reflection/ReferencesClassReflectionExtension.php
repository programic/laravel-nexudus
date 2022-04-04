<?php

namespace Programic\Nexudus\Reflection;

use PHPStan\Reflection\ClassReflection;
use PHPStan\Reflection\MethodsClassReflectionExtension;

class ReferencesClassReflectionExtension implements MethodsClassReflectionExtension
{
    public function hasMethod(ClassReflection $classReflection, string $methodName): bool
    {
//        dd($classReflection->getName());
//        if ($classReflection->getName() === References::class) {
            return true;
//        }

//        return false;
    }

    public function getMethod(ClassReflection $classReflection, string $methodName): ReferencesMethodReflection
    {
        return new ReferencesMethodReflection($classReflection, $methodName);
    }
}
