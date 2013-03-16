<?php

// GET index route
$app->get('/', function () use ($app, $controller) {

    $app->render($controller.'header.phtml');
    $app->render($controller.'index.phtml');
    $app->render($controller.'footer.phtml');
});
