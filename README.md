-  Create a database locally named Morsum
-  Download composer https://getcomposer.org/download/
-  Pull Laravel/php project from git provider.
- Rename .env.example file to .envinside your Morsum and fill the database information.
  
- Open the console and cd Morsum root directory
- Run composer install or php composer.phar install
- Run php artisan key:generate
- Run php artisan migrate (or) php artisan migrate:fresh
- Run php artisan serve
- Run php artisan Bankholiday:json(i used Json Api Url of Bankholidays in 
  console/commands/Bankholiday.php(Json URl :https://www.gov.uk/bank-holidays.json)).

-First task
Open url with morsum.test/bookshelf - this page contains button that creates a new book that will store in table (book_shelvs)and gives json data in (morsum.test/bookjson) and i am calling that data via jquery and ajax to the display in view.

-Second Task
Open url morsum.test/bankholidays it displays all year holidays and it will run every year and i used url (https://www.gov.uk/bank-holidays.json) json data and stored data in database with name 
(bank_holidays) and displays data in view.