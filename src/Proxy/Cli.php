<?php

namespace YukataRm\Cli\Proxy;

use YukataRm\StaticProxy\StaticProxy;

use YukataRm\Cli\Proxy\Manager;

/**
 * CLI Proxy
 * 
 * @package YukataRm\Cli\Proxy
 * 
 * @method static \YukataRm\Cli\Interface\ApplicationInterface application()
 * 
 * @method static void runCommand(\YukataRm\Cli\Interface\CommandInterface $command, array<string|int, string|int> $argv)
 * 
 * @see \YukataRm\Cli\Proxy\Manager
 */
class Cli extends StaticProxy
{
    /** 
     * get class name calling dynamic method
     * 
     * @return string 
     */
    protected static function getCallableClassName(): string
    {
        return Manager::class;
    }
}
