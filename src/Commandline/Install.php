<?php

namespace Tualo\Office\PugPrintablePage\Commandline;

use Tualo\Office\Basic\ICommandline;
use Tualo\Office\Basic\CommandLineInstallSQL;

class Install extends CommandLineInstallSQL  implements ICommandline
{
    public static function getDir(): string
    {
        return dirname(__DIR__, 1);
    }
    public static $shortName  = 'pug-printable-page';
    public static $files = [
        'install/printable_page_css_page_numbers.pug' => 'setup printable_page_css_page_numbers.pug',
        'install/printable_page.pug' => 'setup printable_page',
        'install/printable_page_css.pug' => 'setup printable_page_css',

    ];
}
