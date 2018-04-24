<?php
/**
 * Created by PhpStorm.
 * User: dev05
 * Date: 24/04/2018
 * Time: 14:20
 */

$dom = new DOMDocument();

$xml = simplexml_load_file("XMLGerados/contatos.xml");
echo $xml->getName() . "<br />";
foreach($xml->children() as $child)
{
    echo $child->getName() . ": " . $child . "<br />";
}




?>