<?php

namespace Programic\Nexudus;

use PHPStan\Analyser\OutOfClassScope;
use PHPStan\Reflection\ClassReflection;
use PHPStan\Reflection\MethodReflection;
use PHPStan\Type\ObjectType;
use Programic\Nexudus\Http\References;

class TestMethodsClassReflectionExtension
{
    public function hasMethod(ClassReflection $classReflection, string $methodName): bool
    {
        if ($classReflection->getName() !== References::class) {
            return false;
        }

        return $this->findMethod($methodName) !== null;
    }

    public function getMethod(ClassReflection $classReflection, string $methodName): MethodReflection
    {
        $method = $this->findMethod($methodName);
        assert($method !== null);

        return $method;
    }

    private function findMethod(string $methodName): ?MethodReflection
    {
        $type = new ObjectType(References::class);
        if (!$type->hasMethod($methodName)->yes()) {
            return null;
        }

        return $type->getMethod($methodName, new OutOfClassScope());
    }
}
