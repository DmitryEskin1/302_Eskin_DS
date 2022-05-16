<?php

namespace DEskin\Task05;

function runTest()
{
    $truncater = new Truncater();
    echo $truncater->truncate('Длинный текст', ['length' => 5 ]) . PHP_EOL;
    echo $truncater->truncate('') . PHP_EOL;
    echo $truncater->truncate('Еськин Дмитрий Сергеевич') . PHP_EOL;
    echo $truncater->truncate('Еськин Дмитрий Сергеевич', ['length' => 10]) . PHP_EOL;
    echo $truncater->truncate('Еськин Дмитрий Сергеевич', ['length' => 50]) . PHP_EOL;
    echo $truncater->truncate('Еськин Дмитрий Сергеевич', ['length' => -10]) . PHP_EOL;
    echo $truncater->truncate('Еськин Дмитрий Сергеевич', ['length' => 10, 'separator' => '*']) . PHP_EOL;
    echo $truncater->truncate('Еськин Дмитрий Сергеевич', ['separator' => '*']) . PHP_EOL;
}
