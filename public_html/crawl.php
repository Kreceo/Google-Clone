<?php 

include('classes/DomDocumentParser.php');

$alreadyCrawled = array();
$crawling = array();

function createLinks($src, $url)
{
    $scheme = parse_url($url)["scheme"];
    $host = parse_url($url)["host"];

    if(substr($src, 0, 2) == '//')  {
            $src = $scheme . ':' . $src;
    } else if (substr($src, 0, 1) == '/'){
        $src = $scheme . '://' . $host . $src;
    }  else if (substr($src, 0, 2) == './'){
        $src = $scheme . '://' . $host . dirname(parse_url($url)['path']) . substr($url, 1);
    } else if (substr($src, 0, 3) == '../'){
        $src = $scheme . '://' . $host . '/' . $src;
    } else if (substr($src, 0, 5) != 'https' && substr($src, 0, 4) != 'http'){
        $src = $scheme . '://' . $host . '/' . $src;
    }
    
    return $src;
} 

function getDetails($url) {
    $parser = new DomDocumentParser($url);

    $titleArray = $parser->getTitleTags();

    // If the title array is empty, return nothing. This will help avoid errors
    if(sizeof($titleArray) == 0 || $titleArray->item(0) == NULL) {
        return;
    }

    $title = $titleArray->item(0)->nodeValue;
    $title = str_replace('\n', '', $title);

    // If there is no title, don't return the url
    if($title == '') {
        return;
    }

    $metaDesciption = '';
    $metaKeywords = '';

    $metaArray = $parser->getMetaTags();

    foreach($metaArray as $meta) {
        if($meta->getAttribute('name') == 'description') {
            $metaDesciption = $meta->getAttribute('content');
        }

        if ($meta->getAttribute('name') == 'keywords') {
            $metaKeywords = $meta->getAttribute('content');
        }
    }

    $metaDesciption = str_replace('\n', '', $metaDesciption);
    $metaKeywords= str_replace('\n', '', $metaKeywords);

    // If there is no title, don't return the url
    // if($title == '') {
    //     return;
    // }

    echo 'URL: ' . $url . '<br>' . 'Title: ' . $title . '<br>' . 'Description: ' . $metaDesciption . '<br>' . 'Keywords: ' .$metaKeywords . '<br>';
}

function followLinks($url) 
{
    global $alreadyCrawled;
    global $crawling;
    
    $parser = new DomDocumentParser($url);
    $linksList = $parser->getLinks();

    foreach($linksList as $link) {
        $href = $link->getAttribute('href');

        if(strpos($href, '#') !== false) {
            continue;
        } else if (substr($href, 0, 11) == 'javascript:') {
            continue;
        }

        $href = createLinks($href, $url);

        if(!in_array($href, $alreadyCrawled)) {
            $alreadyCrawled[] = $href;
            $crawling[] = $href;

            getDetails($href);
        } else {
            return;
        }
        // echo $href . '<br>';
    }

    array_shift($crawling);

    foreach($crawling as $site) {
        followLinks($site);
    }
}

$startUrl = 'http://www.naturalhealthwoman.com';

followLinks($startUrl);

?>