<?php

namespace Programic\Nexudus\Reflection;

use PHPStan\Reflection\ClassReflection;
use PHPStan\Reflection\MethodsClassReflectionExtension;
use Programic\Nexudus\Http\References;

class ReferenceClassReflectionExtension implements MethodsClassReflectionExtension
{
    public function hasMethod(ClassReflection $classReflection, string $methodName): bool
    {
        if ($classReflection->getName() === References::class) {
            return true;
        }

        return false;
    }

    public function getMethod(ClassReflection $classReflection, string $methodName): ReferenceMethodReflection
    {
        return new ReferenceMethodReflection($classReflection, $methodName);
    }
}
