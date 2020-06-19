<?php

// Home
Breadcrumbs::for('main', function ($trail) {
    $trail->push('Главная', route('index'));
});

// Models
Breadcrumbs::for('model', function ($trail, $city, $car_model, $car_type) {
    $trail->parent('main');
    $trail->push($car_model->title . ' ' . $car_type->title_ru,
        route('model', [$city, $car_model->slug, $car_type->slug]));
});

// Models details
Breadcrumbs::for('model_details', function ($trail, $city, $car_model, $car_type) {
    $trail->parent('main');
    $trail->push($car_model->title . ' ' . $car_type->title_ru,
        route('model', [$city, $car_model->slug, $car_type->slug]));
    $trail->push('Условия покупки',
        route('model_details', [$city, $car_model->slug, $car_type->slug]));
});
