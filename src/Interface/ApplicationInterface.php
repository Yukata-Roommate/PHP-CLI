<?php

namespace YukataRm\Cli\Interface;

/**
 * Application Interface
 * 
 * @package YukataRm\Cli\Interface
 */
interface ApplicationInterface
{
    /*----------------------------------------*
     * Command
     *----------------------------------------*/

    /**
     * add command
     * 
     * @param \YukataRm\Cli\Interface\CommandInterface|string $command
     * @return static
     */
    public function add(CommandInterface|string $command): static;

    /**
     * get command list
     * 
     * @return array<string, \YukataRm\Cli\Interface\CommandInterface>
     */
    public function commands(): array;

    /**
     * run command
     * 
     * @return void
     */
    public function run(): void;
}
