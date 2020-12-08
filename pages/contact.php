<?php 
use App\Base\Component;
use App\Base\Portal;

 Portal::send('title', 'Contact') ?>

<?=Component::render('hero', [
    'title'=> 'Contato',
    'subtitle'=> 'Entre em contato'
]) ?>

<?=Component::render('contactform') ?>
