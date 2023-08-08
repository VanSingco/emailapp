
## Email App Installation

This is are the following steps to run this application to your local machine

1. Clone the project repository by running this command.
   
   ```bash
    git clone https://github.com/VanSingco/emailapp.git
   ```
2. After running the repo, run this command.

   ```bash
    <!-- Go to your project directory -->

    cd emailapp

    git fetch origin main

    git checkout main

    git  pull origin main

    <!-- Install all packages needed -->
    composer update

    npm install
   ```
3. Next run migrate to create tables from your database
   **Note** Before running migrate, make sure you have **`.env`** file in your project directory, which you may get from the developer.
   ```bash
    php artisan migrate
   ```

4. Netx open your **`.env`** file and change the following environment variable.
    ```bash
   
    QUEUE_CONNECTION=database

    <!-- Change this with your email provider credintials -->

    MAIL_MAILER=
    MAIL_HOST=
    MAIL_PORT=
    MAIL_USERNAME=
    MAIL_PASSWORD=
    ```

6. Next run this command to run the application
   ```bash

    php artisan config:cache

    php artisan serve
   ```

7. Run this command to send email asynchronous.
   ```bash

    php artisan queue:work
   ```