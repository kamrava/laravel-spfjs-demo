<?php

function addSlashesAndClearLines($sections)
{
   if (is_array($sections))
      {
      foreach($sections as $key => $var)
         {
           $result[$key] = addcslashes($var, '"');
           $result[$key] = str_replace(["\r","\n"],"", $result[$key]);
         }

      return $result;
      }
}

function renderPartials($path, $data = null)
{
  $sections = [
    'title' => view($path.'.partials._title')->render(),
    'head'  => view($path.'.partials._head')->with($data)->render(),
    'body'  => view($path.'.partials._body')->with($data)->render(),
    'foot'  => view($path.'.partials._foot')->with($data)->render()
  ];
   if (is_array($sections))
      {
      foreach($sections as $key => $var)
         {
           $result[$key] = addcslashes($var, '"');
           $result[$key] = str_replace(["\r","\n"],"", $result[$key]);
         }

      return $result;
      }
}
