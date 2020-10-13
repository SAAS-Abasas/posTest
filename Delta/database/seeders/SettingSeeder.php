<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            [
                'table_name' => 'brands',
                'model' => 'App\Models\brand.php',
                'setting' => '"[{\"componentDetails\":{\"title\":\"Brand List\",\"editTitle\":\"Edit Brand\"},\"routes\":{\"create\":{\"name\":\"brands.create\",\"link\":\"brands\"},\"update\":{\"name\":\"brands.update\",\"link\":\"brands\"},\"delete\":{\"name\":\"brands.destroy\",\"link\":\"brands\"}},\"fieldList\":[{\"position\":\"1\",\"create\":\"1\",\"read\":\"1\",\"update\":\"1\",\"require\":\"1\",\"name\":\"name\",\"input_type\":\"text\",\"database_name\":\"name\",\"title\":\"Name\"},{\"position\":\"2\",\"create\":\"1\",\"read\":\"1\",\"update\":\"1\",\"require\":\"0\",\"name\":\"description\",\"input_type\":\"text\",\"database_name\":\"description\",\"title\":\"Description\"}]}]"',
            ],
            [
                'table_name' => 'customers',
                'model' => 'App\Models\customer.php',
                'setting' => '"[{\"componentDetails\":{\"title\":\"Customers List\",\"editTitle\":\"Edit Customers\"},\"routes\":{\"create\":{\"name\":\"customers.create\",\"link\":\"customers\"},\"update\":{\"name\":\"customers.update\",\"link\":\"customers\"},\"delete\":{\"name\":\"customers.destroy\",\"link\":\"customers\"}},\"fieldList\":[{\"position\":\"1\",\"create\":\"1\",\"read\":\"1\",\"update\":\"0\",\"require\":\"1\",\"name\":\"phone\",\"input_type\":\"number\",\"database_name\":\"phone\",\"title\":\"Phone\"},{\"position\":\"2\",\"create\":\"3\",\"read\":\"1\",\"update\":\"3\",\"require\":\"0\",\"name\":\"due\",\"input_type\":\"number\",\"database_name\":\"due\",\"title\":\"Due\"},{\"position\":\"3\",\"create\":\"1\",\"read\":\"1\",\"update\":\"0\",\"require\":\"1\",\"name\":\"name\",\"input_type\":\"text\",\"database_name\":\"name\",\"title\":\"Name\"},{\"position\":\"4\",\"create\":\"1\",\"read\":\"1\",\"update\":\"0\",\"require\":\"0\",\"name\":\"address\",\"input_type\":\"text\",\"database_name\":\"address\",\"title\":\"Address\"},{\"position\":\"5\",\"create\":\"1\",\"read\":\"1\",\"update\":\"0\",\"require\":\"0\",\"name\":\"company\",\"input_type\":\"text\",\"database_name\":\"company\",\"title\":\"Company\"}]}]"',
            ],
            [
                'table_name' => 'designations',
                'model' => 'App\Models\designation.php',
                'setting' => '"[{\"componentDetails\":{\"title\":\"Employee List\",\"editTitle\":\"Edit Employee\"},\"routes\":{\"create\":{\"name\":\"employees.create\",\"link\":\"employees\"},\"update\":{\"name\":\"employees.update\",\"link\":\"employees\"},\"delete\":{\"name\":\"employees.destroy\",\"link\":\"employees\"}},\"fieldList\":[{\"position\":\"1\",\"create\":\"1\",\"read\":\"1\",\"update\":\"1\",\"require\":\"0\",\"input_type\":\"text\",\"name\":\"description\",\"database_name\":\"description\",\"title\":\"Description\"},{\"position\":\"111\",\"create\":\"2\",\"read\":\"1\",\"update\":\"1\",\"require\":\"1\",\"input_type\":\"text\",\"name\":\"name\",\"title\":\"Name\",\"database_name\":\"name\"}]}]"',
            ],
            [
                'table_name' => 'drop_products',
                'model' => 'App\Models\dropProduct.php',
                'setting' => '"[{\n            \"componentDetails\":{\n                \"title\":\"Designation List\",\n                \"editTitle\":\"Edit Designation\"\n            },\n            \"routes\":{\n                \"create\":{\n                    \"name\":\"drop_products.create\",\n                    \"link\":\"drop_products\"\n                },\n                \"update\":{\n                    \"name\":\"drop_products.update\",\n                    \"link\":\"drop_products\"\n                },\n                \"delete\":{\n                    \"name\":\"drop_products.destroy\",\n                    \"link\":\"drop_products\"\n                }\n            },\n            \"fieldList\":[{\n                \n                \"position\":11,\n    \n                \"create\":\"3\",\n                \"read\":\"1\",\n                \"update\":\"3\",\n                \"require\":\"0\",\n    \n                \"name\":\"user\",\n                \"input_type\" : \"text\",\n                \"database_name\":\"user_id\",  \n                \"title\":\"Employee Name\"\n             },{\n                \n                \"position\":11,\n    \n                \"create\":\"2\",\n                \"read\":\"1\",\n                \"update\":\"1\",\n                \"require\":\"1\",\n    \n                \"name\":\"product\",\n                \"input_type\" : \"dropDown\",\n                \"database_name\":\"product_id\",  \n                \"title\":\"Product\",\n                \"data\" : \"products\"\n            },{\n                \n                \"position\":11,\n    \n                \"create\":\"2\",\n                \"read\":\"1\",\n                \"update\":\"1\",\n                \"require\":\"1\",\n    \n                \"name\":\"quantity\",\n                \"input_type\" : \"text\",\n                \"database_name\":\"quantity\",  \n                \"title\":\"Quantity\"\n            },{\n                \n                \"position\":11,\n    \n                \"create\":\"1\",\n                \"read\":\"1\",\n                \"update\":\"1\",\n                \"require\":\"0\",\n    \n                \"name\":\"comment\",\n                \"input_type\" : \"text\",\n                \"database_name\":\"comment\",  \n                \"title\":\"Comment\"\n            }\n            ]\n        }]"',
            ],


            [
                'table_name' => 'duty_statuses',
                'model' => 'App\Models\dutyStatus.php',
                'setting' => '"[{\"componentDetails\":{\"title\":\"Duty Status List\",\"editTitle\":\"Edit Duty Status\"},\"routes\":{\"create\":{\"name\":\"duty_status.create\",\"link\":\"duty_status\"},\"update\":{\"name\":\"duty_status.update\",\"link\":\"duty_status\"},\"delete\":{\"name\":\"duty_status.destroy\",\"link\":\"duty_status\"}},\"fieldList\":[{\"position\":\"11\",\"create\":\"3\",\"read\":\"1\",\"update\":\"3\",\"require\":\"1\",\"name\":\"name\",\"input_type\":\"text\",\"database_name\":\"name\",\"title\":\"Name\"},{\"position\":\"111\",\"create\":\"3\",\"read\":\"1\",\"update\":\"1\",\"require\":\"1\",\"input_type\":\"text\",\"name\":\"description\",\"title\":\"Description\",\"database_name\":\"description\"}]}]"',
            ],


            [
                'table_name' => 'employees',
                'model' => 'App\Models\employee.php',
                'setting' => '"[{\"componentDetails\":{\"title\":\"Employee List\",\"editTitle\":\"Edit Employee\"},\"routes\":{\"create\":{\"name\":\"employees.create\",\"link\":\"employees\"},\"update\":{\"name\":\"employees.update\",\"link\":\"employees\"},\"delete\":{\"name\":\"employees.destroy\",\"link\":\"employees\"}},\"fieldList\":[{\"position\":\"1\",\"create\":\"1\",\"read\":\"1\",\"update\":\"1\",\"require\":\"0\",\"input_type\":\"dropDown\",\"name\":\"user\",\"database_name\":\"user_id\",\"title\":\"User Name\",\"data\":\"users\"},{\"position\":\"2\",\"create\":\"2\",\"read\":\"1\",\"update\":\"1\",\"require\":\"1\",\"input_type\":\"text\",\"name\":\"name\",\"title\":\"Name\",\"database_name\":\"name\"},{\"position\":\"3\",\"create\":\"2\",\"read\":\"1\",\"update\":\"1\",\"require\":\"1\",\"input_type\":\"dropDown\",\"name\":\"designation\",\"database_name\":\"designation_id\",\"title\":\"Designation\",\"data\":\"designations\"},{\"position\":\"4\",\"create\":\"2\",\"read\":\"1\",\"update\":\"1\",\"require\":\"1\",\"input_type\":\"text\",\"name\":\"phone\",\"database_name\":\"phone\",\"title\":\"Phone\"},{\"position\":\"5\",\"create\":\"2\",\"read\":\"1\",\"update\":\"1\",\"require\":\"1\",\"input_type\":\"text\",\"name\":\"address\",\"database_name\":\"address\",\"title\":\"Address\"},{\"position\":\"6\",\"create\":\"1\",\"read\":\"1\",\"update\":\"1\",\"require\":\"0\",\"input_type\":\"date\",\"name\":\"joining_date\",\"database_name\":\"joining_date\",\"title\":\"Joining Date\"},{\"position\":\"7\",\"create\":\"1\",\"read\":\"1\",\"update\":\"1\",\"require\":\"0\",\"input_type\":\"text\",\"name\":\"reference\",\"database_name\":\"reference\",\"title\":\"Reference\"},{\"position\":\"8\",\"create\":\"1\",\"read\":\"1\",\"update\":\"1\",\"require\":\"0\",\"input_type\":\"date\",\"name\":\"term_of_contract\",\"database_name\":\"term_of_contract\",\"title\":\"Term of Contract\"},{\"position\":\"9\",\"create\":\"2\",\"read\":\"1\",\"update\":\"1\",\"require\":\"1\",\"input_type\":\"time\",\"name\":\"fixed_duty_hour\",\"database_name\":\"fixed_duty_hour\",\"title\":\"Fixed Duty Hour\"},{\"position\":\"10\",\"create\":\"2\",\"read\":\"1\",\"update\":\"1\",\"require\":\"1\",\"input_type\":\"date\",\"name\":\"salary\",\"database_name\":\"salary\",\"title\":\"Salary\"}]}]"',
            ],


            // [
            //     'table_name' => 'employee_payments',
            //     'model' => 'App\Models\employeePayment.php',
            //     'setting' => '"[{\"componentDetails\":{\"title\":\"Employee Payment List\",\"editTitle\":\"Edit Employee Payment\"},\"routes\":{\"create\":{\"name\":\"employee_payments.create\",\"link\":\"employee_payments\"},\"update\":{\"name\":\"employee_payments.update\",\"link\":\"employee_payments\"},\"delete\":{\"name\":\"employee_payments.destroy\",\"link\":\"employee_payments\"}},\"fieldList\":[{\"position\":\"1\",\"create\":\"1\",\"read\":\"1\",\"update\":\"1\",\"require\":\"1\",\"input_type\":\"dropDown\",\"name\":\"employee\",\"database_name\":\"employee_id\",\"title\":\"Employee\",\"data\":\"employees\"},{\"position\":\"2\",\"create\":\"1\",\"read\":\"1\",\"update\":\"1\",\"require\":\"0\",\"input_type\":\"text\",\"name\":\"comment\",\"database_name\":\"comment\",\"title\":\"Comment\"},{\"position\":\"3\",\"create\":\"1\",\"read\":\"1\",\"update\":\"1\",\"require\":\"1\",\"input_type\":\"dropDown\",\"name\":\"payment_type\",\"database_name\":\"employee_payment_type_id\",\"title\":\"Payment Type\",\"data\":\"employeePaymentTypes\"},{\"position\":\"4\",\"create\":\"1\",\"read\":\"1\",\"update\":\"1\",\"require\":\"0\",\"input_type\":\"dropDown\",\"name\":\"salary_status\",\"database_name\":\"salary_status_id\",\"title\":\"Salary Status\",\"data\":\"salaryStatuses\"},{\"position\":\"5\",\"create\":\"1\",\"read\":\"1\",\"update\":\"1\",\"require\":\"0\",\"input_type\":\"number\",\"name\":\"amount\",\"database_name\":\"amount\",\"title\":\"Amount\"},{\"position\":\"6\",\"create\":\"2\",\"read\":\"1\",\"update\":\"2\",\"require\":\"0\",\"input_type\":\"number\",\"name\":\"changed_amount\",\"database_name\":\"changed_amount\",\"title\":\"Changed Amount\"},{\"position\":\"7\",\"create\":\"1\",\"read\":\"1\",\"update\":\"1\",\"require\":\"1\",\"input_type\":\"month\",\"name\":\"month\",\"database_name\":\"month\",\"title\":\"Month\"}]}]"',
            // ],


            [
                'table_name' => 'employee_payment_types',
                'model' => 'App\Models\employeePaymentType.php',
                'setting' => '"[{\"componentDetails\":{\"title\":\"Employee Payment Type List\",\"editTitle\":\"Edit Employee Payment Type\"},\"routes\":{\"create\":{\"name\":\"employee_payment_types.create\",\"link\":\"employee_payment_types\"},\"update\":{\"name\":\"employee_payment_types.update\",\"link\":\"employee_payment_types\"},\"delete\":{\"name\":\"employee_payment_types.destroy\",\"link\":\"employee_payment_types\"}},\"fieldList\":[{\"position\":\"1\",\"create\":\"3\",\"read\":\"1\",\"update\":\"3\",\"require\":\"0\",\"input_type\":\"text\",\"name\":\"description\",\"title\":\"Description\",\"database_name\":\"description\"},{\"position\":\"2\",\"create\":\"3\",\"read\":\"1\",\"update\":\"3\",\"require\":\"1\",\"name\":\"name\",\"input_type\":\"text\",\"database_name\":\"name\",\"title\":\"Name\"}]}]"',
            ],
            [
                'table_name' => 'employee_salaries',
                'model' => 'App\Models\employeeSalary.php',
                'setting' => '"[{\"componentDetails\":{\"title\":\"Employee Salary List\",\"editTitle\":\"Edit Employee Salary\"},\"routes\":{\"create\":{\"name\":\"employee_salaries.create\",\"link\":\"employee_salaries\"},\"update\":{\"name\":\"employee_salaries.update\",\"link\":\"employee_salaries\"},\"delete\":{\"name\":\"employee_salaries.destroy\",\"link\":\"employee_salaries\"}},\"fieldList\":[{\"position\":\"1\",\"create\":\"3\",\"read\":\"0\",\"update\":\"3\",\"require\":\"0\",\"input_type\":\"dropDown\",\"name\":\"employee\",\"database_name\":\"employee_id\",\"title\":\"Employee\",\"data\":\"employees\"},{\"position\":\"2\",\"create\":\"3\",\"read\":\"0\",\"update\":\"3\",\"require\":\"0\",\"input_type\":\"number\",\"name\":\"amount_other\",\"database_name\":\"amount_other\",\"title\":\"Amount Other\"},{\"position\":\"3\",\"create\":\"3\",\"read\":\"0\",\"update\":\"3\",\"require\":\"0\",\"input_type\":\"dropDown\",\"name\":\"salary_status\",\"database_name\":\"salary_status_id\",\"title\":\"Salary Status\",\"data\":\"salaryStatuses\"},{\"position\":\"4\",\"create\":\"3\",\"read\":\"1\",\"update\":\"3\",\"require\":\"0\",\"input_type\":\"number\",\"name\":\"fixed_salary\",\"title\":\"Fixed Salary\",\"database_name\":\"fixed_salary\"},{\"position\":\"5\",\"create\":\"3\",\"read\":\"1\",\"update\":\"3\",\"require\":\"0\",\"input_type\":\"number\",\"name\":\"amount_salary\",\"database_name\":\"amount_salary\",\"title\":\"Amount Salary\"},{\"position\":\"6\",\"create\":\"3\",\"read\":\"1\",\"update\":\"3\",\"require\":\"0\",\"input_type\":\"month\",\"name\":\"month\",\"database_name\":\"month\",\"title\":\"Month\"}]}]"',
            ],
            [
                'table_name' => 'payment_systems',
                'model' => 'App\Models\paymentSystem.php',
                'setting' => '"[{\"componentDetails\":{\"title\":\"Payment System List\",\"editTitle\":\"Edit Payment System\"},\"routes\":{\"create\":{\"name\":\"payment_systems.create\",\"link\":\"payment_systems\"},\"update\":{\"name\":\"payment_systems.update\",\"link\":\"payment_systems\"},\"delete\":{\"name\":\"payment_systems.destroy\",\"link\":\"payment_systems\"}},\"fieldList\":[{\"position\":\"1\",\"create\":\"1\",\"read\":\"1\",\"update\":\"1\",\"require\":\"1\",\"input_type\":\"text\",\"name\":\"description\",\"title\":\"Description\",\"database_name\":\"description\"},{\"position\":\"2\",\"create\":\"1\",\"read\":\"1\",\"update\":\"3\",\"require\":\"1\",\"name\":\"payment_system\",\"input_type\":\"text\",\"database_name\":\"payment_system\",\"title\":\"Payment System\"}]}]"',
            ],
            [
                'table_name' => 'return_products',
                'model' => 'App\Models\returnProduct.php',
                'setting' => '"[{\"componentDetails\":{\"title\":\"Returned Product List\",\"editTitle\":\"Edit Returned Product\"},\"routes\":{\"create\":{\"name\":\"return_products.create\",\"link\":\"return_products\"},\"update\":{\"name\":\"return_products.update\",\"link\":\"return_products\"},\"delete\":{\"name\":\"return_products.destroy\",\"link\":\"return_products\"}},\"fieldList\":[{\"position\":\"3\",\"create\":\"3\",\"read\":\"1\",\"update\":\"3\",\"require\":\"0\",\"input_type\":\"dropDown\",\"name\":\"user\",\"database_name\":\"user_id\",\"title\":\"Employee\",\"data\":\"users\"},{\"position\":\"3\",\"create\":\"2\",\"read\":\"0\",\"update\":\"1\",\"require\":\"1\",\"input_type\":\"dropDown\",\"name\":\"product\",\"database_name\":\"product_id\",\"title\":\"Product\",\"data\":\"products\"},{\"position\":\"3\",\"create\":\"2\",\"read\":\"0\",\"update\":\"1\",\"require\":\"1\",\"input_type\":\"dropDown\",\"name\":\"customer\",\"database_name\":\"customer_id\",\"title\":\"Customer\",\"data\":\"customers\"},{\"position\":\"11\",\"create\":\"2\",\"read\":\"0\",\"update\":\"1\",\"require\":\"1\",\"name\":\"quantity\",\"input_type\":\"number\",\"database_name\":\"quantity\",\"title\":\"Quantity\"},{\"position\":\"11\",\"create\":\"2\",\"read\":\"1\",\"update\":\"1\",\"require\":\"1\",\"name\":\"price\",\"input_type\":\"number\",\"database_name\":\"price\",\"title\":\"Price\"},{\"position\":\"11\",\"create\":\"3\",\"read\":\"1\",\"update\":\"3\",\"require\":\"0\",\"name\":\"profit\",\"input_type\":\"number\",\"database_name\":\"profit\",\"title\":\"Profit\"},{\"position\":\"11\",\"create\":\"1\",\"read\":\"1\",\"update\":\"1\",\"require\":\"0\",\"name\":\"comment\",\"input_type\":\"text\",\"database_name\":\"comment\",\"title\":\"Comment\"}]}]"',
            ],
            [
                'table_name' => 'suppliers',
                'model' => 'App\Models\supplier.php',
                'setting' => '"[{\n    \"componentDetails\":{\n        \"title\":\"Suppliers List\",\n        \"editTitle\":\"Edit Supplier\"\n    },\n    \"routes\":{\n        \"create\":{\n            \"name\":\"suppliers.create\",\n            \"link\":\"suppliers\"\n        },\n        \"update\":{\n            \"name\":\"suppliers.update\",\n            \"link\":\"suppliers\"\n        },\n        \"delete\":{\n            \"name\":\"suppliers.destroy\",\n            \"link\":\"suppliers\"\n        }\n    },\n    \"fieldList\":[{\n        \n            \"position\":11,\n\n            \"create\":\"2\",\n            \"read\":\"1\",\n            \"update\":\"1\",\n            \"require\":\"1\",\n\n            \"name\":\"name\",\n            \"input_type\" : \"text\",\n            \"database_name\":\"name\",  \n            \"title\":\"Name\"\n        },{\n            \n            \"position\":111,\n\n            \"create\":\"2\",\n            \"read\":\"1\",\n            \"update\":\"1\",\n            \"require\":\"1\",\n\n           \"input_type\":\"text\",\n           \"name\":\"phone\",\n           \"title\":\"Phone\",\n\n\n           \"database_name\":\"phone\"\n        },{\n            \n            \"position\":1,\n\n            \"create\":\"1\",\n            \"read\":\"1\",\n            \"update\":\"1\",\n            \"require\":\"0\",\n\n           \"input_type\":\"text\",\n           \"name\":\"address\",\n           \"database_name\":\"address\",\n           \"title\": \"Address\"\n        },{\n            \n            \"position\":1,\n\n            \"create\":\"2\",\n            \"read\":\"1\",\n            \"update\":\"1\",\n            \"require\":\"0\",\n\n           \"input_type\":\"text\",\n           \"name\":\"company\",\n           \"database_name\":\"company\",\n           \"title\": \"Company\"\n        },{\n            \n            \"position\":12,\n\n            \"create\":\"3\",\n            \"read\":\"1\",\n            \"update\":\"3\",\n            \"require\":\"0\",\n\n           \"input_type\":\"number\",\n           \"name\":\"due\",\n           \"database_name\":\"due\",\n           \"title\": \"Due\"\n        }\n    ]\n}]"',
            ],
            [
                'table_name' => 'expense_type',
                'model' => 'App\Models\expenseType.php',
                'setting' => '"[{\"componentDetails\":{\"title\":\"Expense Type List\",\"editTitle\":\"Edit Expense Type\"},\"routes\":{\"create\":{\"name\":\"expense_type.create\",\"link\":\"expense_type\"},\"update\":{\"name\":\"expense_type.update\",\"link\":\"expense_type\"},\"delete\":{\"name\":\"expense_type.destroy\",\"link\":\"expense_type\"}},\"fieldList\":[{\"position\":\"1\",\"create\":\"2\",\"read\":\"1\",\"update\":\"1\",\"require\":\"1\",\"name\":\"name\",\"input_type\":\"text\",\"database_name\":\"name\",\"title\":\"Name\"},{\"position\":\"2\",\"create\":\"0\",\"read\":\"1\",\"update\":\"1\",\"require\":\"0\",\"input_type\":\"text\",\"name\":\"description\",\"title\":\"Description\",\"database_name\":\"description\"}]}]"',
            ],
        ]);

    }
}
