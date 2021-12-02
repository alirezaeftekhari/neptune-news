<?php
require_once 'NewsAgency.php';
require_once __DIR__."/../vendor/autoload.php";
use DiDom\Document;

class FarsNews extends NewsAgency
{
    protected static string $url = "https://www.farsnews.ir";
    protected static array $categories = [
        'politics' => 'politics',
        'social' => 'social',
        'economy' => 'economy',
        'sport' => 'sports'
    ];

    protected static function Parser(string $route): array
    {
        $newsInfo = [];
        $document = new Document($route, true);

        $importantNews = $document->find('div.float-right')[0];
        $imgImportant = $importantNews->find('img')[0];
        $srcImportant = $imgImportant->attr('src');
        $titleImportant = $imgImportant->attr('alt');
        $linkImportant = self::$url.$importantNews->find('a')[0]->attr('href');
        $newsInfo[] = [
            'title' =>  $titleImportant,
            'src' => $srcImportant,
            'link' => $linkImportant
        ];

        $newsList = $document->find('div.news-list.float-right');
        foreach($newsList as $news) {
            $img = $news->find('img.w-100')[0];

            $title = $img->attr('alt');
            $src = $img->attr('src');
            $link = self::$url.$news->find('a.w-100')[1]->attr('href');

            $newsInfo[] = [
                'title' =>  $title,
                'src' => $src,
                'link' => $link
            ];
        }

        return $newsInfo;
    }
}
//echo '<pre>';
//print_r(FarsNews::politicsParse());
//print_r(FarsNews::socialParse());
//print_r(FarsNews::economyParse());
//echo '</pre>';
