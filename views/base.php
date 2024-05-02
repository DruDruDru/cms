<!DOCTYPE HTML>
<html lang="ru">
<head>
    <title>Чат {% block title %}{% endblock %}</title>
    <meta charset="UTF-8" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav class="flex gap-5">
        <a href="{{root}}">Главная</a>
        <a href="{{root}}signup/">Регистрация</a>
        <a href="{{root}}login/">Вход</a>
    </nav>
    <div class="flex justify-center items-center flex-col">
        {% block content %}{% endblock %}
    </div>
</body>
</html>