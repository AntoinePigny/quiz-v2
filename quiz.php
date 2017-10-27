<?php

function openForm($action = "#", $class)
{
  return "<form action='" . $action . "' class='" . $class . "'>";

}

function closeTag($tag)
{
  return "</" . $tag . ">";
}

function questionTitle($question)
{
  $html = "<h3>" . $question . "</h3>";
  return $html;
}


function createInput($inputSpecs)
{ $html = "";
//   $inputSpecs = [
//   'id' => '',
//   'type' => '',
//   'name' => '',
//   'value' => '',
//   'checked' => '',
//   'label' => '',
//   'position' => '',
// ]
  if ($inputSpecs['position'] ==  true) {
    $html .= "<label for='" . $inputSpecs['id'] . "'>" . $inputSpecs['label'] . "</label>";
  }

    $html .= "<input id='" . $inputSpecs['id'] . "' type='" . $inputSpecs['type'] . "' name='" . $inputSpecs['name'] . "' value='" . $inputSpecs['value'] . "' " . $inputSpecs['checked'] . ">";


  if (!$inputSpecs['position']) {
    $html .= "<label for='" . $inputSpecs['id'] . "'>" . $inputSpecs['label'] . "</label>";
  }
  return $html;
}


function createSubmit($value)
{
  return '<input type="submit" value="' . $value . '">';
}
