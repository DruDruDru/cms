{% extends 'base.php' %}

{% block title %}| Регистрация{% endblock %}

{% block content %}
<form enctype="multipart/form-data" method="post" class="flex flex-col gap-5 items-center p-10 border-8 w-96 rounded-xl border-sky-500">
    <h2 class="text-center text-xl w-full">Регистрация</h2>
    <label>Логин:<br>
        <input type="text" name="login" required class="border-4 rounded-xl border-indigo-500 py-1 px-2" />
    </label>
    <label>Почта:<br>
        <input type="email" name="email" required class="border-4 rounded-xl border-indigo-500 py-1 px-2" />
    </label>
    <label>Пароль:<br>
        <input type="password" name="password" required class="border-4 rounded-xl border-indigo-500 py-1 px-2" />
    </label>
    <label>Потдверждение пароля:<br>
        <input type="password" name="password_confirm" required class="border-4 rounded-xl border-indigo-500 py-1 px-2" />
    </label>
    <label>Аватар:<br>
        <input type="file" name="avatar" />
    </label>
    <input type="submit" value="Зарегистрироваться" class="p-5 mt-2 bg-indigo-500 text-white rounded-xl w-52" />
</form>
{% endblock %}