<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Str;

/**
 * 创建枚举类
 * Class MakeEnumCommand
 * @package App\Console\Commands
 */
class MakeEnumCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:enum {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '创建枚举文件';

    protected string $namespace = 'App\Enums';

    /**
     * Create a new command instance.
     *
     * @param Filesystem $files
     */
    public function __construct(Filesystem $files)

    {
        parent::__construct( $files);
    }

    /**
     * Execute the console command.
     *
     * @return int
     */

    protected function getStub()
    {
        return __DIR__ . "/stubs/DummyEnum.stub";
    }

    protected function getPath($name)
    {
        $name = Str::replaceFirst($this->rootNamespace(), '', $name);
        $this->type = $name;
        return $this->laravel['path'].'/'.str_replace('\\', '/', $name).'.php';
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Enums';
    }
}
