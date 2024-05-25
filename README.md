# Sistem Informasi Pemuda Baptis Papua

## Important CLI Commands

### Composer Install
Install package laravel dari composer
```
composer install
```

### Setup .env

Config file .env
```
cp .env.example .env
```

### Git Comands

Cara mendownload project melalui GitHub ke local repository.
```
git clone https://github.com/nokensoft/sipp-dlhk-kotajayapura.git
```
cara hapus branch di local

```
git branch -d branch-name
```

cara hapus branch di remote

```
git push origin -d branch-name
```

### Artisan Commands
```
php artisan migrate:fresh --seed
```

Generate APP key 
```
php artisan key:generate
```

### bugs and sollutions

Ketika file dari storage tidak bisa akses
`cd storage/app/public/` kemudian `chmod 777 files`. "files" merupakan nama folder


