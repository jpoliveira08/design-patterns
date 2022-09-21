<?php

declare(strict_types=1);

/**
 *
 */
class Singleton
{
    private static ?Singleton $instance;

    /** It should not be allowed New instances */
    private function __construct()
    {
    }

    /** It should not be cloneable */
    private function __clone()
    {
    }

    /** It should not be unserialized */
    public function __wakeup(): void
    {
    }

    public static function getInstance(): Singleton
    {
        // Lazy initialization
        if (!isset(self::$instance)) {
            self::$instance = new static();
        }

        return self::$instance;
    }
}
