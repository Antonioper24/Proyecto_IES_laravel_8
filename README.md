
1.git clone https://github.com/Antonioper24/Proyecto_IES_laravel_8.git

2.composer install

3.create a database for use data persistent data in our Laravel application

4.add database configuration parameters in the .env file

5.php artisan migrate

5.1 Use the data found in the datos.sql file if you wish
 
6.php artisan serve


Rules to follow when we have already deployed the application.

Application rules.

When creating the administrator as a second step you must create the company staff and then the clients.

To create the Personal of the company your ID must start if you are a doctor with "DOC" and if you are a "REC" receptionist.

When we discharge the staff who will be the receptionist, they will not have a doctor's ID.

But if you are a doctor write a doctor id on the form.

Assign the client their treating physician and the staff their responsible person.

Only the Administrator can set the price of the treatment. The price to be set must have a structure like this: 120.89, do not use the comma.

