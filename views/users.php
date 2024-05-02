{% extends 'base.php' %}

{% block title %}| Пользователи{% endblock %}

{% block content %}
    {% for user in users %}
        <div class="flex gap-2 items-center">
            <img src="{{ user.avatar }}" alt="avatar" />
            <div class="flex flex-col">
                <span class="text-2xl">{{ user.login }}</span>
                <span class="text-xl">{{ user.email }}</span>
            </div>
        </div>
    {% endfor %}
{% endblock %}