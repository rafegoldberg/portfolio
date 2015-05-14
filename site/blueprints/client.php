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
            label: Show
            placeholder: Title
            type: text
         Subtext:
            placeholder: Subtext
            type: text
         url:
            label: <hr style="margin-bottom:.45em;"> Go
            type: URL
            placeholder: Paste URL
         page:
            label: <small style="display:block;margin:-1.25rem 0 -.375rem;color:rgb(153, 153, 153);font-size:.75rem;">or choose a page</small>
            type: select
            options: children
            width: 1/2
         file:
            label: <small style="display:block;text-align:right;margin:-1.25rem 0 -.375rem;color:rgb(153, 153, 153);font-size:.75rem;">or a file</small>
            type: select
            options: files
            width: 1/2
   sidebar:
      label: Sidebar
      type:  textarea
   text:
      label: Text
      type:  textarea