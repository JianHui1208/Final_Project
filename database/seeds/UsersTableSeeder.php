<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'=>1,
                'name'=>'HR Admin',
                'email'=>'admin@admin.com',
                'position'=>'HR Admin',
                'department'=>2,
                'project_id'=>NULL,
                'phoneNumber'=>'0115654631',
                'Avater'=>'HR Admin.jpg',
                'password'=>'$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'created_at'=>NULL,
                'updated_at'=>'2020-12-15 09:17:55',
                'deleted_at'=>NULL
            ],
            [
                'id'=>2,
                'name'=>'Manager1',
                'email'=>'Manager1@Manager1.com',
                'position'=>'Manager',
                'department'=>3,
                'project_id'=>NULL,
                'phoneNumber'=>'0115654631',
                'Avater'=>'default.jpg',
                'password'=>'$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'created_at'=>NULL,
                'updated_at'=>NULL,
                'deleted_at'=>NULL
            ],
            [
                'id'=>3,
                'name'=>'Manager2',
                'email'=>'Manager2@Manager2.com',
                'position'=>'Manager',
                'department'=>2,
                'project_id'=>NULL,
                'phoneNumber'=>'0115654631',
                'Avater'=>'Manager2.jpg',
                'password'=>'$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'created_at'=>NULL,
                'updated_at'=>NULL,
                'deleted_at'=>NULL
            ],
            [
                'id'=>4,
                'name'=>'Manager3',
                'email'=>'Manager3@Manager3.com',
                'position'=>'Manager',
                'department'=>4,
                'project_id'=>NULL,
                'phoneNumber'=>'0115654631',
                'Avater'=>'Manager3.jpg',
                'password'=>'$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'created_at'=>NULL,
                'updated_at'=>NULL,
                'deleted_at'=>NULL
            ],
            [
                'id'=>5,
                'name'=>'Manager4',
                'email'=>'Manager4@Manager4.com',
                'position'=>'Manager',
                'department'=>5,
                'project_id'=>NULL,
                'phoneNumber'=>'0115654631',
                'Avater'=>'Manager4.jpg',
                'password'=>'$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'created_at'=>NULL,
                'updated_at'=>NULL,
                'deleted_at'=>NULL
            ],
            [
                'id'=>6,
                'name'=>'Manager5',
                'email'=>'Manager5@Manager5.com',
                'position'=>'Manager',
                'department'=>1,
                'project_id'=>NULL,
                'phoneNumber'=>'0115654631',
                'Avater'=>'Manager5.jpg',
                'password'=>'$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'created_at'=>NULL,
                'updated_at'=>NULL,
                'deleted_at'=>NULL
            ],
            [
                'id'=>7,
                'name'=>'Employee1',
                'email'=>'Employee1@Employee1.com',
                'position'=>'Employee',
                'department'=>2,
                'project_id'=>NULL,
                'phoneNumber'=>'0115654631',
                'Avater'=>'Employee1.jpg',
                'password'=>'$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'created_at'=>NULL,
                'updated_at'=>'2020-12-15 09:52:09',
                'deleted_at'=>NULL
            ],
            [
                'id'=>8,
                'name'=>'Employee2',
                'email'=>'Employee2@Employee2.com',
                'position'=>'Employee',
                'department'=>5,
                'project_id'=>NULL,
                'phoneNumber'=>'012-8596215',
                'Avater'=>'Employee2.jpg',
                'password'=>'$2y$10$NKGwjSeSJjvHQrfsYWVvu.5WWHCGfhUhDE3uGV8rUf/0fNG5ALFZe',
                'created_at'=>'2020-12-15 10:01:40',
                'updated_at'=>'2020-12-15 10:01:40',
                'deleted_at'=>NULL
            ],
            [
                'id'=>9,
                'name'=>'Employee3',
                'email'=>'Employee3@Employee3.com',
                'position'=>'Employee',
                'department'=>3,
                'project_id'=>NULL,
                'phoneNumber'=>'012-8596215',
                'Avater'=>'Employee3.jpg',
                'password'=>'$2y$10$NKGwjSeSJjvHQrfsYWVvu.5WWHCGfhUhDE3uGV8rUf/0fNG5ALFZe',
                'created_at'=>'2020-12-15 10:01:40',
                'updated_at'=>'2020-12-15 10:01:40',
                'deleted_at'=>NULL
            ],
            [
                'id'=>10,
                'name'=>'Employee4',
                'email'=>'Employee4@Employee4.com',
                'position'=>'Employee',
                'department'=>1,
                'project_id'=>NULL,
                'phoneNumber'=>'012-8596215',
                'Avater'=>'Employee4.jpg',
                'password'=>'$2y$10$NKGwjSeSJjvHQrfsYWVvu.5WWHCGfhUhDE3uGV8rUf/0fNG5ALFZe',
                'created_at'=>'2020-12-15 10:01:40',
                'updated_at'=>'2020-12-15 10:01:40',
                'deleted_at'=>NULL
            ],
        ];

        User::insert($users);
    }
}
