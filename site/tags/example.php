<?
kirbytext::$tags['downloads'] = array(
  'html' => function($tag) {

    $html  = '<h2>' . $tag->attr('downloads') . '</h2>';
    $html .= '<ul>';

    foreach($tag->page()->documents() as $doc) {
      $html .= '<li>';
      $html .= '<a href="' . $doc->url() . '">' . $doc->filename() . '</a>';
      $html .= '</li>';
    }

    $html .= '</ul>';

    return $html;

  }
);