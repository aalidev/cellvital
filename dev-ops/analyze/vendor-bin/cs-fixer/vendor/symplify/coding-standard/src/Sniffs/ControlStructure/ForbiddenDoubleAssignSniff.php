<?php

declare(strict_types=1);

namespace Symplify\CodingStandard\Sniffs\ControlStructure;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Sniffs\Sniff;

/**
 * @deprecated
 */
final class ForbiddenDoubleAssignSniff implements Sniff
{
    /**
     * @var string
     */
    private const MESSAGE = 'Use per line assign instead of multiple ones.';

    public function __construct()
    {
        trigger_error(sprintf(
            'Sniff "%s" is deprecated and will be removed in Symplify 8 (May 2020). Use "%s" instead',
            self::class,
            'https://github.com/rectorphp/rector/blob/master/rules/coding-style/src/Rector/Assign/SplitDoubleAssignRector.php'
        ));

        sleep(3);
    }

    /**
     * @return int[]|string[]
     */
    public function register(): array
    {
        return [T_EQUAL];
    }

    /**
     * @param int $position
     */
    public function process(File $file, $position): void
    {
        $endPosition = $file->findNext(
            [
                T_OPEN_CURLY_BRACKET,
                T_OPEN_SHORT_ARRAY,
                T_OPEN_SQUARE_BRACKET,
                T_COMMA,
                T_OPEN_PARENTHESIS, T_SEMICOLON,
            ],
            $position
        );

        if (! is_int($endPosition)) {
            return;
        }

        $hasMultipleAssigns = $file->findNext([T_EQUAL], $position + 1, $endPosition);
        if (! $hasMultipleAssigns) {
            return;
        }

        $file->addError(self::MESSAGE, $position, self::class);
    }
}
