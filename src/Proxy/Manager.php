<?php

namespace YukataRm\Cli\Proxy;

use YukataRm\Cli\Interface\ApplicationInterface;
use YukataRm\Cli\Interface\CommandInterface;
use YukataRm\Cli\Application;
use YukataRm\Cli\ArgvInput;

/**
 * Proxy Manager
 * 
 * @package YukataRm\Cli\Proxy
 */
class Manager
{
    /**
     * make Application instance
     *
     * @return \YukataRm\Cli\Interface\ApplicationInterface
     */
    public function application(): ApplicationInterface
    {
        return new Application();
    }

    /*----------------------------------------*
     * Command
     *----------------------------------------*/

    /**
     * run command
     *
     * @param \YukataRm\Cli\Interface\CommandInterface $command
     * @param array<string|int, string|int> $argv
     * @return void
     */
    public function runCommand(CommandInterface $command, array $argv): void
    {
        $input = new ArgvInput($this->parseArgv($command, $argv));

        $application = $this->application();

        $application->add($command);

        $command->run($application, $input);
    }

    /**
     * parse argv input
     * 
     * @param \YukataRm\Cli\Interface\CommandInterface $command
     * @param array<string|int, string|int> $argv
     * @return array<string>
     */
    protected function parseArgv(CommandInterface $command, array $argv): array
    {
        $parsedArgv = [
            basename($this::class),
            $command->commandName()
        ];

        foreach ($argv as $key => $value) {
            if (is_string($key)) $parsedArgv[] = "--{$key}";

            $parsedArgv[] = $value;
        }

        return $parsedArgv;
    }
}
