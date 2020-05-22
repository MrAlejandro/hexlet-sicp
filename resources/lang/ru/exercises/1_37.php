<?php

return [
    'title' => 'Конечная цепная дробь',
    'description' => [
        '1' =>
        "а. Бесконечная цепная дробь (continued fraction) есть выражение вида",
        '2' =>
        "В качестве примера можно показать, что расширение бесконечной цепной дроби при всех Ni и Di, равных 1, дает 1/φ, " .
        "где φ — золотое сечение (описанное в разделе 1.2.2). Один из способов вычислить цепную дробь состоит в том, " .
        "чтобы после заданного количества термов оборвать вычисление. " .
        "Такой обрыв — так называемая конечная цепная дробь (finite continued fraction) из k элементов, — имеет вид",
        '3' =>
        "Предположим, что n и d — процедуры одного аргумента (номера элемента i), возвращающие Ni и Di элементов цепной дроби. " .
        "Определите процедуру cont-frac так, чтобы вычисление (cont-frac n d k) давало значение k-элементной конечной цепной дроби. " .
        "Проверьте свою процедуру, вычисляя приближения к1/φ с помощью",
        '4' =>
        "для последовательных значений k. Насколько большим пришлось сделать k, чтобы получить приближение, верное с точностью 4 цифры после запятой?",
        '5' =>
        "б. Если Ваша процедура cont-frac порождает рекурсивный процесс, напишите вариант, который порождает итеративный процесс. " .
        "Если она порождает итеративный процесс, напишите вариант, порождающий рекурсивный процесс."
    ]
];
