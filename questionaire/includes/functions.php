<?php
/**
 * Displays site name.
 */
function site_name()
{
    echo config('name');
}
/**
 * Displays site url provided in conig.
 */
function site_url()
{
    echo config('site_url');
}
/**
 * Displays site version.
 */
function site_version()
{
    echo config('version');
}

/**
 * Displays page title. It takes the data from
 * URL, it replaces the hyphens with spaces and
 * it capitalizes the words.
 */
function page_title()
{
    $page = isset($GET['page']) ? htmlspecialchars($GET['page']) : 'index';
    echo ucwords(str_replace('-', ' ', $page));
}
/**
 * Displays page content. It takes the data from
 * the static pages inside the pages/ directory.
 * When not found, display the 404 error page.
 */
function page_content()
{
    $page = isset($GET['page']) ? $GET['page'] : 'index';
    $path = getcwd() . '/' . config('content_path') . '/' . $page . '.html';
    echo file_get_contents($path);
}

?>
