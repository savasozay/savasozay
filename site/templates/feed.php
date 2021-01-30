<?php

echo page('journal')->children()->visible()->flip()->limit(5)->feed(array(
  'title'       => $page->title(),
  'description' => $page->description(),
  'link'        => 'journal',
));

?>