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
                'setting' => '"[{\"componentDetails\":{\"title\":\"Customers List\",\"editTitle\":\"Edit Customers\"},\"routes\":{\"create\":{\"name\":\"customers.create\",\"link\":\"customers\"},\"update\":{\"name\":\"customers.update\",\"link\":\"customers\"},\"delete\":{\"name\":\"customers.destroy\",\"link\":\"customers\"}},\"fieldList\":[{\"position\":\"1\",\"create\":\"1\",\"read\":\"1\",\"update\":\"0\",\"require\":\"1\",\"name\":\"phone\",\"input_type\":\"number\",\"database_name\":\"phone\",\"title\":\"Phone\"},{\"position\":\"2\",\"create\":\"2\",\"read\":\"1\",\"update\":\"2\",\"require\":\"0\",\"name\":\"due\",\"input_type\":\"number\",\"database_name\":\"due\",\"title\":\"Due\"},{\"position\":\"3\",\"create\":\"1\",\"read\":\"1\",\"update\":\"0\",\"require\":\"1\",\"name\":\"name\",\"input_type\":\"text\",\"database_name\":\"name\",\"title\":\"Name\"},{\"position\":\"4\",\"create\":\"1\",\"read\":\"1\",\"update\":\"0\",\"require\":\"0\",\"name\":\"address\",\"input_type\":\"text\",\"database_name\":\"address\",\"title\":\"Address\"},{\"position\":\"5\",\"create\":\"1\",\"read\":\"1\",\"update\":\"0\",\"require\":\"0\",\"name\":\"company\",\"input_type\":\"text\",\"database_name\":\"company\",\"title\":\"Company\"}]}]"',
            ],
            [
                'table_name' => 'designations',
                'model' => 'App\Models\designation.php',
                'setting' => '"[{\n            \"componentDetails\":{\n                \"title\":\"Designation List\",\n                \"editTitle\":\"Edit Designation\"\n            },\n            \"routes\":{\n                \"create\":{\n                    \"name\":\"designations.create\",\n                    \"link\":\"designations\"\n                },\n                \"update\":{\n                    \"name\":\"designations.update\",\n                    \"link\":\"designations\"\n                },\n                \"delete\":{\n                    \"name\":\"designations.destroy\",\n                    \"link\":\"designations\"\n                }\n            },\n            \"fieldList\":[{\n                \n                    \"position\":11,\n        \n                    \"create\":\"1\",\n                    \"read\":\"1\",\n                    \"update\":\"1\",\n                    \"require\":\"0\",\n        \n                    \"name\":\"role\",\n                    \"input_type\" : \"text\",\n                    \"database_name\":\"role\",  \n                    \"title\":\"Name\"\n                }\n            ]\n        }]"',
            ],
            [
                'table_name' => 'drop_products',
                'model' => 'App\Models\dropProduct.php',
                'setting' => '"[{\n            \"componentDetails\":{\n                \"title\":\"Designation List\",\n                \"editTitle\":\"Edit Designation\"\n            },\n            \"routes\":{\n                \"create\":{\n                    \"name\":\"drop_products.create\",\n                    \"link\":\"drop_products\"\n                },\n                \"update\":{\n                    \"name\":\"drop_products.update\",\n                    \"link\":\"drop_products\"\n                },\n                \"delete\":{\n                    \"name\":\"drop_products.destroy\",\n                    \"link\":\"drop_products\"\n                }\n            },\n            \"fieldList\":[{\n                \n                \"position\":11,\n    \n                \"create\":\"3\",\n                \"read\":\"1\",\n                \"update\":\"3\",\n                \"require\":\"0\",\n    \n                \"name\":\"user\",\n                \"input_type\" : \"text\",\n                \"database_name\":\"user_id\",  \n                \"title\":\"Employee Name\"\n             },{\n                \n                \"position\":11,\n    \n                \"create\":\"2\",\n                \"read\":\"1\",\n                \"update\":\"2\",\n                \"require\":\"1\",\n    \n                \"name\":\"product\",\n                \"input_type\" : \"dropDown\",\n                \"database_name\":\"product_id\",  \n                \"title\":\"Product\",\n                \"data\" : \"products\"\n            },{\n                \n                \"position\":11,\n    \n                \"create\":\"2\",\n                \"read\":\"1\",\n                \"update\":\"2\",\n                \"require\":\"1\",\n    \n                \"name\":\"quantity\",\n                \"input_type\" : \"text\",\n                \"database_name\":\"quantity\",  \n                \"title\":\"Quantity\"\n            },{\n                \n                \"position\":11,\n    \n                \"create\":\"1\",\n                \"read\":\"1\",\n                \"update\":\"1\",\n                \"require\":\"0\",\n    \n                \"name\":\"comment\",\n                \"input_type\" : \"text\",\n                \"database_name\":\"comment\",  \n                \"title\":\"Comment\"\n            }\n            ]\n        }]"',
            ],


            [
                'table_name' => 'duty_statuses',
                'model' => 'App\Models\dutyStatus.php',
                'setting' => '"[{\"componentDetails\":{\"title\":\"Duty Status List\",\"editTitle\":\"Edit Duty Status\"},\"routes\":{\"create\":{\"name\":\"duty_status.create\",\"link\":\"duty_status\"},\"update\":{\"name\":\"duty_status.update\",\"link\":\"duty_status\"},\"delete\":{\"name\":\"duty_status.destroy\",\"link\":\"duty_status\"}},\"fieldList\":[{\"position\":\"11\",\"create\":\"2\",\"read\":\"1\",\"update\":\"2\",\"require\":\"1\",\"name\":\"name\",\"input_type\":\"text\",\"database_name\":\"name\",\"title\":\"Name\"},{\"position\":\"111\",\"create\":\"2\",\"read\":\"1\",\"update\":\"1\",\"require\":\"1\",\"input_type\":\"text\",\"name\":\"description\",\"title\":\"Description\",\"database_name\":\"description\"}]}]"',
            ],


            [
                'table_name' => 'employees',
                'model' => 'App\Models\employee.php',
                'setting' => '"[{\n    \"componentDetails\":{\n        \"title\":\"Employee List\",\n        \"editTitle\":\"Edit Employee\"\n    },\n    \"routes\":{\n        \"create\":{\n            \"name\":\"employees.create\",\n            \"link\":\"employees\"\n        },\n        \"update\":{\n            \"name\":\"employees.update\",\n            \"link\":\"employees\"\n        },\n        \"delete\":{\n            \"name\":\"employees.destroy\",\n            \"link\":\"employees\"\n        }\n    },\n    \"fieldList\":[{\n            \"position\":3,\n\n            \"create\":\"1\",\n            \"read\":\"1\",\n            \"update\":\"1\",\n            \"require\":\"1\",\n\n           \"input_type\":\"dropDown\",\n           \"name\":\"name\",\n           \"database_name\":\"user_id\",\n           \"title\": \"User\",\n           \"data\" : \"users\"\n        },{\n            \"position\":3,\n\n            \"create\":\"2\",\n            \"read\":\"1\",\n            \"update\":\"1\",\n            \"require\":\"1\",\n\n           \"input_type\":\"dropDown\",\n           \"name\":\"designation\",\n           \"database_name\":\"designation_id\",\n           \"title\": \"Designation\",\n           \"data\" : \"designations\"\n        },{\n            \n            \"position\":3,\n\n            \"create\":\"2\",\n            \"read\":\"1\",\n            \"update\":\"1\",\n            \"require\":\"1\",\n\n           \"input_type\":\"text\",\n           \"name\":\"name\",\n           \"database_name\":\"name\",\n           \"title\": \"Name\"\n        },{\n            \n            \"position\":3,\n\n            \"create\":\"2\",\n            \"read\":\"1\",\n            \"update\":\"1\",\n            \"require\":\"1\",\n\n           \"input_type\":\"number\",\n           \"name\":\"phone\",\n           \"database_name\":\"phone\",\n           \"title\": \"Phone\"\n        },{\n            \n            \"position\":3,\n\n            \"create\":\"2\",\n            \"read\":\"1\",\n            \"update\":\"1\",\n            \"require\":\"1\",\n\n           \"input_type\":\"text\",\n           \"name\":\"address\",\n           \"database_name\":\"address\",\n           \"title\": \"Address\"\n        },{\n            \n            \"position\":3,\n\n            \"create\":\"1\",\n            \"read\":\"1\",\n            \"update\":\"1\",\n            \"require\":\"0\",\n\n           \"input_type\":\"date\",\n           \"name\":\"joining_date\",\n           \"database_name\":\"joining_date\",\n           \"title\": \"Joining Date\"\n        },{\n            \n            \"position\":3,\n\n            \"create\":\"1\",\n            \"read\":\"1\",\n            \"update\":\"1\",\n            \"require\":\"0\",\n\n           \"input_type\":\"text\",\n           \"name\":\"reference\",\n           \"database_name\":\"reference\",\n           \"title\": \"Reference\"\n        },{\n            \n            \"position\":3,\n\n            \"create\":\"1\",\n            \"read\":\"1\",\n            \"update\":\"1\",\n            \"require\":\"0\",\n\n           \"input_type\":\"date\",\n           \"name\":\"term_of_contract\",\n           \"database_name\":\"term_of_contract\",\n           \"title\": \"Term of Contract\"\n        },{\n            \n            \"position\":3,\n\n            \"create\":\"2\",\n            \"read\":\"1\",\n            \"update\":\"1\",\n            \"require\":\"1\",\n\n           \"input_type\":\"time\",\n           \"name\":\"fixed_duty_hour\",\n           \"database_name\":\"fixed_duty_hour\",\n           \"title\": \"Fixed Duty Hour\"\n        },{\n            \n            \"position\":3,\n\n            \"create\":\"2\",\n            \"read\":\"1\",\n            \"update\":\"1\",\n            \"require\":\"1\",\n\n           \"input_type\":\"number\",\n           \"name\":\"salary\",\n           \"database_name\":\"salary\",\n           \"title\": \"Salary\"\n        }\n    ]\n}]"',
            ],


            [
                'table_name' => 'employee_payments',
                'model' => 'App\Models\employeePayment.php',
                'setting' => '"[{\"componentDetails\":{\"title\":\"Employee Payment List\",\"editTitle\":\"Edit Employee Payment\"},\"routes\":{\"create\":{\"name\":\"employee_payments.create\",\"link\":\"employee_payments\"},\"update\":{\"name\":\"employee_payments.update\",\"link\":\"employee_payments\"},\"delete\":{\"name\":\"employee_payments.destroy\",\"link\":\"employee_payments\"}},\"fieldList\":[{\"position\":\"1\",\"create\":\"1\",\"read\":\"1\",\"update\":\"1\",\"require\":\"1\",\"input_type\":\"dropDown\",\"name\":\"employee\",\"database_name\":\"employee_id\",\"title\":\"Employee\",\"data\":\"employees\"},{\"position\":\"2\",\"create\":\"1\",\"read\":\"1\",\"update\":\"1\",\"require\":\"0\",\"input_type\":\"text\",\"name\":\"comment\",\"database_name\":\"comment\",\"title\":\"Comment\"},{\"position\":\"3\",\"create\":\"1\",\"read\":\"1\",\"update\":\"1\",\"require\":\"1\",\"input_type\":\"dropDown\",\"name\":\"payment_type\",\"database_name\":\"employee_payment_type_id\",\"title\":\"Payment Type\",\"data\":\"employeePaymentTypes\"},{\"position\":\"4\",\"create\":\"1\",\"read\":\"1\",\"update\":\"1\",\"require\":\"0\",\"input_type\":\"dropDown\",\"name\":\"salary_status\",\"database_name\":\"salary_status_id\",\"title\":\"Salary Status\",\"data\":\"salaryStatuses\"},{\"position\":\"5\",\"create\":\"1\",\"read\":\"1\",\"update\":\"1\",\"require\":\"0\",\"input_type\":\"number\",\"name\":\"amount\",\"database_name\":\"amount\",\"title\":\"Amount\"},{\"position\":\"6\",\"create\":\"2\",\"read\":\"1\",\"update\":\"2\",\"require\":\"0\",\"input_type\":\"number\",\"name\":\"changed_amount\",\"database_name\":\"changed_amount\",\"title\":\"Changed Amount\"},{\"position\":\"7\",\"create\":\"1\",\"read\":\"1\",\"update\":\"1\",\"require\":\"1\",\"input_type\":\"month\",\"name\":\"month\",\"database_name\":\"month\",\"title\":\"Month\"}]}]"',
            ],


            [
                'table_name' => 'employee_payment_types',
                'model' => 'App\Models\employeePaymentType.php',
                'setting' => '"[{\"componentDetails\":{\"title\":\"Employee Payment Type List\",\"editTitle\":\"Edit Employee Payment Type\"},\"routes\":{\"create\":{\"name\":\"employee_payment_types.create\",\"link\":\"employee_payment_types\"},\"update\":{\"name\":\"employee_payment_types.update\",\"link\":\"employee_payment_types\"},\"delete\":{\"name\":\"employee_payment_types.destroy\",\"link\":\"employee_payment_types\"}},\"fieldList\":[{\"position\":\"1\",\"create\":\"1\",\"read\":\"1\",\"update\":\"1\",\"require\":\"0\",\"input_type\":\"text\",\"name\":\"description\",\"title\":\"Description\",\"database_name\":\"description\"},{\"position\":\"2\",\"create\":\"1\",\"read\":\"1\",\"update\":\"1\",\"require\":\"1\",\"name\":\"name\",\"input_type\":\"text\",\"database_name\":\"name\",\"title\":\"Name\"}]}]"',
            ],
        ]);

    }
}
