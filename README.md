В проекте "Плагин к Яндекс.Вебмастер" представлен интерфейс для пользователя, который может добовлять один или несколько доменов сразу через "Enter", удалять, подтвердить домен и загрузить SiteMap.

user
логин-vadim123
пароль-123

Как использовать.
Создать Приложение:
1. Нужно перейти по ссылке - https://oauth.yandex.ru/
2. Нажать на кнопку создать приложение.
3. В  "Название сервиса *" - любое название.
3. В вопросе "Для какой платформы нужно приложение? *" -  Веб-сервисы и вставить ссылку http://adddomens/auth.php.
4. Найти вкладку Яндекс.Вебмастер, выбрать ВСЕ пункты.

Вставить токен в проект:
1. Скопировать идентификатор ClientID, заменить его в файлах  в самом вверху (WebmasterApi.php, ../php/auth.php, login.php)
2. Скопировать секретный ключ Client secret, заменить его в файле (WebmasterApi.php)
