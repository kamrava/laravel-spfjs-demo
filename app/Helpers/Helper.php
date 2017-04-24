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
    'title' => view($path.'.sections._title')->render(),
    'head'  => view($path.'.sections._head')->with($data)->render(),
    'body'  => view($path.'.sections._body')->with($data)->render(),
    'foot'  => view($path.'.sections._foot')->with($data)->render()
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
