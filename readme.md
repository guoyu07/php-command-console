## PHP命令行工具
基于symfony/console 简单包装
方便快速开始编写一些php的crontab之类的脚本工具

## 下载

$ git clone https://github.com/hookover/php-command-console.git


## 安装依赖

$ cd php-command-console

$ composer install

## 使用

$ php app

```angular2html
Console Tool

Usage:
  command [options] [arguments]

Options:
  -h, --help            Display this help message
  -q, --quiet           Do not output any message
  -V, --version         Display this application version
      --ansi            Force ANSI output
      --no-ansi         Disable ANSI output
  -n, --no-interaction  Do not ask any interactive question
  -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

Available commands:
  help          Displays help for a command
  list          Lists commands
 command
  command:name  一个测试命令

```

### 测试使用默认命令
$ php app command:name world
```angular2html
Hello： world
```

默认脚本所在位置
application\Command\DefaultCommand.php


### 使用
1. 在application\Command目录中添加新的Command类，并写相应代码
2. 在application\Kernel.php文件的$this->addCommands([])参数数组中添加你的命令对象

### 命令类的编写请参考下面连接
http://symfony.com/doc/current/console.html
