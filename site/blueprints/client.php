<?php if(!defined('KIRBY')) exit ?>

title: Client
pages: true
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
   links:
      label: &nbsp;
      type: structure
      entry: >
         <div>
            <strong>{{title}}</strong><br />
            <small>{{sub}}</small>
         </div>
         <hr style="margin: .5em 0; height: 1px;">
         <small style="display: block; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{url}}</small>
      fields:
         title:
            label: Title
            type: text
         Subtext:
            label: Subtext
            type: text
         url:
            label: URL
            type: URL
            placeholder: paste link
         page:
            label: <small style="display:block;margin:-1.25rem 0 -.375rem;color:rgb(153, 153, 153);font-size:.75rem;">or choose a page:</small>
            type: select
            options: documents
   sidebar:
      label: Sidebar
      type:  textarea
   text:
      label: Text
      type:  textarea