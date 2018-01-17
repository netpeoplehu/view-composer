<?php

namespace Netpeople\ViewComposer\Console\Commands;

use Illuminate\Console\GeneratorCommand;
use Symfony\Component\Console\Input\InputArgument;

use Illuminate\Support\Facades\File;

class ComposerMakeCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:composer {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make view composer class';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Composer';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__ . '/../../../resources/stubs/composer.stub';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Http\ViewComposers';
    }

    /**
     * Get the composer name arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['name', InputArgument::REQUIRED, 'The name of the composer.'],
        ];
    }
}
