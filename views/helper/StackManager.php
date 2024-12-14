<?php
// StackManager.php
class StackManager
{
    private static $stacks = [];

    // Push content into a specific stack
    public static function push($stack, $content)
    {
        if (!isset(self::$stacks[$stack])) {
            self::$stacks[$stack] = [];
        }
        self::$stacks[$stack][] = $content;
    }

    // Render all content of a specific stack
    public static function render($stack)
    {
        if (!isset(self::$stacks[$stack])) {
            return '';
        }
        return implode("\n", self::$stacks[$stack]);
    }
}
