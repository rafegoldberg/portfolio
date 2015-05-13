<?php if(!defined('KIRBY')) exit ?>

title: Client
pages: false
files:
   sortable: true
fields:
   title:
      label: Title
      type:  text
      width: 1/2
   logo:
      label: Logo
      type:  select
      options: images
      width: 1/2
   text:
      label: Text
      type:  textarea