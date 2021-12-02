<?php
require_once 'NewsAgency.php';
require_once __DIR__."/../vendor/autoload.php";
use DiDom\Document;

class Tasnim extends NewsAgency
{
    protected static string $url = "https://www.tasnimnews.com";
    protected static array $categories = [
        'politics' => '/fa/service/1',
        'social' => '/fa/service/2',
        'economy' => '/fa/service/7',
        'sport' => '/fa/service/3'
    ];

    protected static function Parser(string $route): array
    {
        $newsInfo = [];
        $document = new Document($route, true);
        $section = $document->find('section.content')[0];

        foreach ($section->children() as $article)
        {
            $a = $article->firstChild();
            $link = self::$url.$a->attr('href');
            $src = $a->firstChild()->firstChild()->firstChild()->attr('src');
            $title = $a->lastChild()->firstChild()->text();
            $description = $a->lastChild()->child(1)->text();
            $newsInfo[] = [
                'title' =>  $title,
                'src' => $src,
                'link' => $link,
                'description' => $description
            ];
            if (count($newsInfo) === 5)
                break;
        }
        return $newsInfo;
    }
}

//echo '<pre>';
//print_r(Tasnim::politicsParse());
//print_r(Tasnim::economyParse());
//print_r(Tasnim::socialParse());
//echo '</pre>';

