# PHPTodoListWithAjax
This is a simple PHP program that let you create , delete , ... Todos in simplest way.

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
