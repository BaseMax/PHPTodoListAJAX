# PHPTodoListWithAjax
This is a simple PHP program that let you create , delete , ... Todos in simplest way.


+-------------+------------------+------+-----+---------------------+----------------+
| Field       | Type             | Null | Key | Default             | Extra          |
+-------------+------------------+------+-----+---------------------+----------------+
| id          | int(10) unsigned | NO   | PRI | NULL                | auto_increment |
| user_id     | int(10) unsigned | NO   |     | NULL                |                |
| title       | varchar(128)     | NO   |     | NULL                |                |
| description | varchar(512)     | NO   |     | NULL                |                |
| created_at  | datetime         | NO   |     | current_timestamp() |                |
| updated_at  | datetime         | NO   |     | NULL                |                |
| status      | tinyint(1)       | NO   |     | 0                   |                |
+-------------+------------------+------+-----+---------------------+----------------+





+-----------+------------------+------+-----+---------------------+----------------+
| Field     | Type             | Null | Key | Default             | Extra          |
+-----------+------------------+------+-----+---------------------+----------------+
| id        | int(10) unsigned | NO   | PRI | NULL                | auto_increment |
| user_name | varchar(256)     | NO   |     | NULL                |                |
| email     | varchar(256)     | NO   |     | NULL                |                |
| password  | varchar(256)     | NO   |     | NULL                |                |
| joined_at | datetime         | NO   |     | current_timestamp() |                |
+-----------+------------------+------+-----+---------------------+----------------+