<?php

$json='{
  "product": [
    {
      "name": "Парикмахерское кресло «Норм» гидравлическое",
      "img": "http://dev-wbooster.ru/test_task/img/img-1.png",
      "price": "9900"
    },
    {
      "name": "Парикмахерское кресло «Норм» гидравлическое",
      "img": "http://dev-wbooster.ru/test_task/img/img-1.png",
      "price": "9900"
    },
    {
      "name": "Парикмахерское кресло «Норм» гидравлическое",
      "img": "http://dev-wbooster.ru/test_task/img/img-1.png",
      "price": "9900"
    },
    {
      "name": "Парикмахерское кресло «Норм» гидравлическое",
      "img": "http://dev-wbooster.ru/test_task/img/img-1.png",
      "price": "9900"
    },
    {
      "name": "Парикмахерское кресло «Норм» гидравлическое",
      "img": "http://dev-wbooster.ru/test_task/img/img-1.png",
      "price": "9900"
    },
    {
      "name": "Парикмахерское кресло «Норм» гидравлическое",
      "img": "http://dev-wbooster.ru/test_task/img/img-1.png",
      "price": "9900"
    }
  ]
}';

$products = json_decode($json);
$arrLength = count($products->product);
