<?php

declare(strict_types=1);

namespace Sinbadxiii\PhalconAuth\Access;

/**
 * Interface for Sinbadxiii\PhalconAuth\Access
 */
interface AccessInterface
{
    public function except(...$actions): void;
    public function getExceptActions(): array;
    public function only(...$actions): void;
    public function getOnlyActions(): array;
    public function isAllowed(string $actionName): bool;
    public function redirectTo();
    public function allowedIf(): bool;
}