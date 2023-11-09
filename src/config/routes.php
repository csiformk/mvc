<?php

$routes = array(
    array('home','default','index'),
    array('contact','contact','contactMethode'),
    array('articles','article','listArticle'),
    array('article','article','show',['id']),
    array('delete','article','delete',['id']),
    array('add','article','add'),
    array('edit','article','edit',['id']),
    array('admin','admin','index'),
);









