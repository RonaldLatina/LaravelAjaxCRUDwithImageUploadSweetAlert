<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function fetchall()
    {
        $employee = Employee::all();
        $output = '';
        if ($employee->count() > 0) {
            $output .= '<table class="table table-striped align-middle">
            <thead>
                <tr>
                <th>ID</th>
                <th>Avatar</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Action</th>
                </tr>           
            </thead>
            <tbody>';

            $output .= '</tbody></table>';
            echo $output;
        } else {
            echo '<h1 class="text-center text-secondary my-5">No record in the database!</h1>';
        }
    }
}
