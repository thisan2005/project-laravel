# Laravel
## Procedure to run the app on a local server
### Installing dependencies
Go to the project directory and run command **composer install** to install dependencies </br>
Copy the environment configuration usinf **cp .env.example .env** </br>
Generate an app key using **php artisan key:generate** to encryption </br>
Then run **php artisan migrate** command to set up the database </br>

### Additional Content (tailwindcss)
Run **npm install** to install npm packages to run css tools </br>
Then run **npm run dev** to compile .css files to sync stylings

After installing all the dependencies and configurations run **php artisan serve** start the developmet server (A server should be up and running to view the app)

