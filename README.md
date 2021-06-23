# Utah Laravel Meetup

Here, you'll find source code and presentations from past meetups.

Can't find something? Email [utahlaravel@diglactic.com](mailto:utahlaravel@diglactic.com).

Join us at [utahlaravel.com](https://utahlaravel.com).

## Snippets

```shell
# Serve Laravel project from within a VM on port 8000
php -S "$(hostname -I | tr -d ' '):8000" -t public

# Create new MySQL database and user over mysql CLI
mysql
  CREATE DATABASE utah_laravel;
  CREATE USER 'utah_laravel' IDENTIFIED BY 'utah_laravel';
  GRANT ALL ON utah_laravel.* TO utah_laravel;
```
