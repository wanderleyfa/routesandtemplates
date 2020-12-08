<?php 
use App\Base\Component;
use App\Base\Portal;

Portal::send('title', 'Homepage') ?>

<?=Component::render('hero', [
    'title'=> 'Exemplo',
    'subtitle'=> 'Basic concepts for low level PHP page building'
]) ?>

<?=Component::render('text', [
    'title'=> 'Lorem ipsum',
    'text'=> 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.'
]) ?>
