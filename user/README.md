# User plugin

##USAGE
1. Download this project into the directory of plugins in OctoberCMS:
git clone https://github.com/kevinlyh/kevinlyh.git 
2. Initialize the database: 
    php artisan plugin:refresh kevinlyh.user 
    Note: Check the table conflict. The table name used in this plugin is 'kusers'.
3. Add '[Kevinlyh\User\Components\Account account]' to layout file.
4. Add following content into navigation bar:
    ```
    {% if user %}
        <li class="{% if this.page.id == 'account' %}active{% endif %}"><a href="{{ 'account'|page }}">My profile</a></li>
        <li class=""><a data-request="onLogout">Logout</a></li>
    {% else %}
        <li class="{% if this.page.id == 'account' %}active{% endif %}"><a href="{{ 'account'|page }}">User account</a></li>
    {% endif %}
    ```
 5. New a page:
     ```
     title = "account"
     url = "/account"
     layout = "default"
     is_hidden = 0
     
     [Kevinlyh\User\Components\Account account]
     ==
     {% component 'account' %}
    ```
