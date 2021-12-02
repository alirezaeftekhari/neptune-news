<?php

abstract class NewsAgency
{
    protected static string $url;
    protected static array $categories;

    private static function categoryRoute(string $category): string
    {
        return static::$url.'/'.$category;
    }

    //Routes
    protected static function politicsRoute(): string
    {
        return self::categoryRoute(static::$categories['politics']);
    }

    protected static function socialRoute(): string
    {
        return self::categoryRoute(static::$categories['social']);
    }

    protected static function economyRoute(): string
    {
        return self::categoryRoute(static::$categories['economy']);
    }
    
    //Parsers
    protected static function Parser(string $route): array
    {
        return static::Parser($route);
    }

    public static function politicsParse(): array
    {
        return static::Parser(static::politicsRoute());
    }

    public static function socialParse(): array
    {
        return static::Parser(static::socialRoute());
    }

    public static function economyParse(): array
    {
        return static::Parser(static::economyRoute());
    }
}