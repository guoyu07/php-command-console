<?php
namespace App;
use App\Command\DefaultCommand;
use Symfony\Component\Console\Application;

class Kernel extends Application
{
    public function __construct($name = 'UNKNOWN', $version = 'UNKNOWN')
    {
        parent::__construct($name, $version);

        $this->addCommands([
            new DefaultCommand(),
            //添加更多的命令
        ]);
    }
}