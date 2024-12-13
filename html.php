<?php

function html($tag, $content="", $a=array())
{
    $html="<".$tag;
    foreach ($a as $param => $value)
    {
        $html.=" $param='$value'";
    }
    $html.=">";
    if($content!="")
    {
        $html.=$content."</".$tag.">";
    }
    return $html;
}

