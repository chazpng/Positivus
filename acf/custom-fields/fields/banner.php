<?php

$banner = new StoutLogic\AcfBuilder\FieldsBuilder('banner');
$banner
  ->addText('title')
  ->addWysiwyg('content')
  ->addImage('background_image')
  ->setLocation('block', '==', 'acf/banner');

return $banner;
