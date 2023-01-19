# PHP Todo-List with AJAX

This is a simple PHP web-application that let you create, edit, and delete the tasks in the simplest way. (HTML, CSS, JS, PHP)

For start you should create a new Database and two table like below:

![1](https://user-images.githubusercontent.com/107758775/208897255-66e9e48c-ada9-48e3-b22d-cca30bab3e9b.png)

After that you can use describe command in interactive mysql shell environment. To open this environment first run your mysql and use terminal or cmd in windows:

```
mysql -h <your-domain> -u <your-username> -p
```

Now select your Database:

```
USE <db-name>;
```

And after that get your tables:

```
SHOW tables;
```

For any table in your Database run below command and you should get same result like me:

```
DESCRIBE <table-name>;
```

## tasks table

![2](https://user-images.githubusercontent.com/107758775/208900075-6552c14f-1742-4392-9f8d-1f0e15731119.png)

## users table


![3](https://user-images.githubusercontent.com/107758775/208900322-a979d5f0-d994-4680-86da-0a80335ecb63.png)

## Display

When you go to project if you are logged in you see your tasks.

if not you will redirect to login page.

Login page would be like this:

![7](https://user-images.githubusercontent.com/107758775/210042811-b1e8feee-156b-42f8-891a-d0258a953e77.png)

When successfully logged in again you will back to main page and see your tasks:

![6](https://user-images.githubusercontent.com/107758775/210042920-ce0d5d15-31da-4cca-8280-aed5dd11ae24.png)

Now you can add a task by writing a title and description in inputs and save it.

When you completed this task click on delete icon on task box. it will delete from database.

If you don't want to delete it you can change its status to completed.

## Contributors

* Ali Ahmadi
* Max Base
