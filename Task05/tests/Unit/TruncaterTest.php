<?php

namespace DEskin\Tests;
use \PHPUnit\Framework\TestCase;
use DEskin\Task05\Truncater;

class TruncaterTest extends TestCasep
{
    /** @test */
    public function Reduction()
    {
        $truncater = new Truncater();
        $this->assertSame('Длинн...', $truncater->truncate('Длинный текст', ['length' => 5 ]));
        $this->assertSame('...', $truncater->truncate(''));
        $this->assertSame('Еськин Дмитрий Сергеевич...', $truncater->truncate('Еськин Дмитрий Сергеевич'));
        $this->assertSame('Еськин Дм...', $truncater->truncate('Еськин Дмитрий Сергеевич', ['length' => 10]));
        $this->assertSame('Еськин Дмитрий Сергеевич...', $truncater->truncate('Еськин Дмитрий Сергеевич', ['length' => 50]));
        $this->assertSame('Еськин Дмитрий Сергеевич...', $truncater->truncate('Еськин Дмитрий Сергеевич', ['length' => -10]));
        $this->assertSame('Еськин Дм*', $truncater->truncate('Еськин Дмитрий Сергеевич', ['length' => 10, 'separator' => '*']));
        $this->assertSame('Еськин Дмитрий Сергеевич*', $truncater->truncate('Еськин Дмитрий Сергеевич', ['separator' => '*']));
    }
}
