{% extends 'base.php' %}

{% block title %}| Пользователи{% endblock %}

{% block content %}
    <h1 class="text-3xl mb-5">Пользователи</h1>
    <div class="flex flex-col gap-5">
        {% for user in users %}
            <a href="#">
            <div class="flex gap-2 items-center justify-start p-6 border-4 rounded-xl border-sky-800 bg-sky-100 hover:bg-sky-200 w-96">
                <img src="{{ user.avatar }}" alt="avatar" class="rounded-full border-4 border-sky-500 w-24 h-24" />
                <div class="flex flex-col">
                    <span class="text-2xl">{{ user.login }}</span>
                    <span class="text-xl">{{ user.email }}</span>
                </div>
            </div>
            </a>
        {% endfor %}
    </div>
{% endblock %}