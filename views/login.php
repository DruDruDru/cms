{% extends 'base.php' %}

{% block title %}| Вход{% endblock %}

{% block content %}
<form enctype="multipart/form-data" method="post" class="flex flex-col gap-5 items-center p-10 border-8 rounded-xl border-sky-500 w-96">
    <h2 class="text-center w-full">Логин</h2>
    <label>Логин:<br>
        <input type="text" name="login" required class="border-4 rounded-xl border-indigo-500 py-1 px-2" />
    </label>
    <label>Пароль:<br>
        <input type="password" name="password" required class="border-4 rounded-xl border-indigo-500 py-1 px-2" />
    </label>
    <input type="submit" value="Вход" class="p-5 mt-2 bg-indigo-500 text-white rounded-xl w-52" />
</form>
{% endblock %}