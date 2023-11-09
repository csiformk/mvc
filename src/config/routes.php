<?php

$routes = array(
    array('home','default','index'),
    array('contact','contact','contactMethode'),
    // Articles
    array('articles','article','listArticle'),
    array('article','article','show',['id']),
    array('delete','article','delete',['id']),
    array('add','article','add'),
    array('edit','article','edit',['id']),
    array('admin','admin','index'),
    // User
    array('users','user','list'),
    array('show_user','user','show',['id']),
    array('delete_user','user','delete',['id']),
    array('add_user','user','add'),
    array('edit_user','user','edit',['id']),
    array('admin_user','user','list'),
);









