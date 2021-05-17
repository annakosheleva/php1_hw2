<?php

function renderTemplate($page, $content = 'menu')
{
    ob_start();
    include $page . ".php";
    return ob_get_clean();
}

$about = renderTemplate('about');
$menu = renderTemplate('menu');

echo renderTemplate('layout', $about);
echo renderTemplate('layout', $menu);