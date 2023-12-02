<?php

function pagina()
{
    return 'ola mundo';
}
function head()
{
    return '<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>primeira criação</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">';
};
function bodyBackground($url = 'https://i.pinimg.com/originals/fd/fe/94/fdfe94c7bdd0bf4afdd830e0b2c515e9.gif')
{
    return 'body {background-image: url(' . $url . ');
        background: cover auto;
        background-position: center auto;
        width: 90vw;
        height: 250vh;}';
}