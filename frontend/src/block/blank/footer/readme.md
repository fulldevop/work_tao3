**Это черновой пример подвала.** В  последующих версиях будет реализованна более продуманная версия.

Параметры блока:
* `logo` -- строка с вёрсткой изображения логотипа.
* `contacts` -- строка с вёрсткой контактных данных.
* `menus[]`  -- список строк, каждая из которых представляет вёрстку очередного столбца меню.
* `socials[]` -- список ссылок на соц. сети, ключём списка является модикатор, проставляемый этой ссылке (для стилизации иконок).
* `techart` -- строка с вёрсткой копирайта текарта.


**Замечение**: не забудьте при использовании включить этот блок в сборку, для этого в файл `src/entry/index.js` нужно добавить строчку `import 'block/blank/footer';` 