<?php
require_once 'NewsAgency.php';
require_once __DIR__."/../vendor/autoload.php";
use DiDom\Document;
use DiDom\Element;

class YjcNews extends NewsAgency
{
    protected static string $url = "https://www.yjc.news";
    protected static array $categories = [
        'politics' => 'fa/political',
        'social' => 'fa/social',
        'economy' => 'fa/comercial',
        'sport' => 'fa/sports'
    ];

    private static function prospect(array &$newsInfo, Document &$document, Element &$element, bool $descStatus = true)
    {
        $a = $element->find('a')[0];
        $img = $a->find('img')[0];
        $title = $a->attr('title');
        $src = $img->attr('src');
        $link = $a->attr('href');
        $newsElement = [
            'title' => $title,
            'src' => $src,
            'link' => self::$url.$link
        ];
        if ($descStatus)
        {
            $newsElement['description'] = trim($element->find('div.subtitle-top-news-2')[0]->text());
        }
        $newsInfo[] = $newsElement;
    }

    protected static function Parser(string $route): array
    {
        $newsInfo = [];
        $document = new Document($route, true);
        $news = $document->find('div.main-content-top-news-1')[0];
        self::prospect($newsInfo, $document, $news, false);

        $news = $document->find('article.main-content-top-news-2')[0];
        self::prospect($newsInfo, $document, $news);

        $news = $document->find('article.main-content-top-news-2')[1];
        self::prospect($newsInfo, $document, $news);

        return $newsInfo;
    }
}


echo '<pre>';
print_r(YjcNews::politicsParse());
print_r(YjcNews::socialParse());
print_r(YjcNews::economyParse());
echo '</pre>';
