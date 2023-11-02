# Пример выполненного мной тестового задания на должность "PHP-разработчик (Laravel) Junior"

![](./dock/images/тестовое%20задание.png)

# Настройка проекта

1.  
```
git clone https://github.com/golubtsov/test-task.git
```

2. на основе ``.env.example`` создать ``.env``, заполнить в ``.env``

```
MAIL_NEW_PRODUCT_TO="кому отправоять уведомления о новом продукте"
MAIL_USERNAME=
MAIL_PASSWORD=
```
3. 
```
composer i
npm i

./vendor/bin/sail up

// из контейнера
php artisan migrate:fresh --seed
php artisan queue:work
```

4. ``npm run dev``

5. Пользователи:
```
Пользователь администратор
Email: test@example.com
Password: password

Обычный пользователь
Email: simple@example.com
Password: password
```
