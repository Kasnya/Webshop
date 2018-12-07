# Webshop

Ez a projekt egy egyszerű webshop megvalósítására indult az AFP tantárgyhoz, a Laravel keretrendszer alkalmazásával.

A következő funkciók vannak tervben:
- Bejelentkezés és regisztráció
- Kategóriák
- Kosár
- Rendelés leadása

### Beüzemelés:
1.     composer install
2.     copy .env.example .env
3.     php artisan key:generate 
4. Hozz létre egy **webshop** nevezetű adatbázist
5. Add meg a .env fájlban az adatbázis adatait (felhasználónév, jelszó, adatbázis név(**DB_DATABASE=webshop**))
6.     php artisan migrate --seed