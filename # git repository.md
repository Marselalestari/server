# git repository
git clone https://github.com/Marselalestari/server.git

# install libraries laravel
composer instal
npm install && npm run build

# copy .env dari .env.example
cp .env.example .env

# migrate dulu kalau ada, baru jalanin
php artisan key:generate
php artisan migrate
php artisan serve

# jika ingin melihat perubahan commit
git fetch
git config pull.rebase true
git pull origin main   
php artisan serve          
