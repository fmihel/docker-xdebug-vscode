# docker-xdebug-vscode
setup docker for xedbug and vscode

### Среда для разработки в vscode, включает:
``php7.4,  mysql5.7, phpmyadmin, xdebug3.1.6``

### Последовательность запуска
1. Собираем образы из папки ``\images``\
```bash 
$ docker build -t php-apache .
```
2. В файле ``config\99-xdebug.ini`` прописываем адрес хоста где находится vscode 
```xdebug.client_host=xxx.xxx.xxx.xxx``` \
адрес можно получить к примеру так
```bash
$ hostname -I | cut -d ' ' -f1
```
3. Запускаем все образы вместе:
```bash
$ docker compose up
```

4. В vscode ставим плагин для xdebug, и настраиваем по образу и подобию ``config\launch.json``




 










