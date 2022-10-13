<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DailyProcess extends Controller
{
    public function PriceList(){
        return view('daily_process.price');
    }
    public function expenseRecord(){
        return view('daily_process.expense-record');
    }
    public function expensesHead(){
        return view('daily_process.expenses-head');
    }
    public function AddExpensesHead(){
        return view('daily_process.add-expenses-head');
    }
}
