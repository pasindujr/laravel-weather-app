## Run this project locally

- Pull this project from git provider.
- Rename `.env.example` file to `.env`inside your project root and fill the relevant information.
  (windows won't let you do it, so you have to open your console cd your project root directory and run `mv .env.example .env` )
- Open the console and cd your project root directory
- Run `composer install`
- Run `php artisan key:generate`
- Run `php artisan serve`
- Please create an account on "OpenWeatherMap" for an API key and paste it into the `OPENWEATHEMAP_API_KEY` inside `.env` file.


