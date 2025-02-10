<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function insertData()
    {
        DB::table('test_table')->insert([
            'name' => 'Test Name',
            'email' => 'test@example.com',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return 'Data inserted successfully!';
    }
}
