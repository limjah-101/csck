<?php

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Acceuil', route('home'));
});

// About
Breadcrumbs::for('presentation', function ($trail) {
    $trail->parent('home');
    $trail->push('Le club / Présentation', route('presentation'));
});
Breadcrumbs::for('staff', function ($trail) {
    $trail->parent('home');
    $trail->push('Le club / L\'équipe', route('staff'));
});

// Home > Activities
Breadcrumbs::for('loan', function ($trail) {
    $trail->parent('home');
    $trail->push('Nos préstations', route('loan'));
});
Breadcrumbs::for('planning', function ($trail) {
    $trail->parent('home');
    $trail->push('Planning', route('planning'));
});
Breadcrumbs::for('join', function ($trail) {
    $trail->parent('home');
    $trail->push('Adhérer au club', route('join'));
});


// Home > News
Breadcrumbs::for('news', function ($trail) {
    $trail->parent('home');
    $trail->push('Actualités', route('news'));
});


// Home > Dragon Ladies
Breadcrumbs::for('dragon_ladies', function ($trail) {
    $trail->parent('home');
    $trail->push('Pagaie santé', route('dragon_ladies'));
});

// Home > Contacts
Breadcrumbs::for('contact', function ($trail) {
    $trail->parent('home');
    $trail->push('Nous contacter', route('contact'));
});