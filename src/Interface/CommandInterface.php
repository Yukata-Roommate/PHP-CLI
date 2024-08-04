<?php

namespace YukataRm\Cli\Interface;

use YukataRm\Cli\Interface\ApplicationInterface;
use YukataRm\Cli\Interface\ArgvInputInterface;

/**
 * Command Interface
 * 
 * @package YukataRm\Cli\Interface
 */
interface CommandInterface
{
    /*----------------------------------------*
     * Config
     *----------------------------------------*/

    /**
     * get command name
     * 
     * @return string
     */
    public function commandName(): string;

    /**
     * get command description
     * 
     * @return string
     */
    public function description(): string;

    /*----------------------------------------*
     * Run
     *----------------------------------------*/

    /**
     * run command
     * 
     * @param \YukataRm\Cli\Interface\ApplicationInterface $application
     * @param \YukataRm\Cli\Interface\ArgvInputInterface $input
     * @return void
     */
    public function run(ApplicationInterface $application, ArgvInputInterface $input): void;
}
