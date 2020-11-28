<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Throwable;

class ExpenseController extends Controller
{
    public function create()
    {
        return view('expense.createExpense');
    }

    public function store(Request $request)
    {   
        $request->validate([
            'detail'=>'required',
            'amount'=>'required',
        ]);

        $data = [
            'detail'=>$request->detail,
            'amount'=>$request->amount,
            'date'=>$request->date,
            'month'=>$request->month,
            'year'=>$request->year,
        ];
        try
        {
            Expense::create($data);
            return Redirect()->back()->with('message', 'Insert Successfull!');
        }catch(Throwable $Exception)
        {
            return Redirect()->back()->with('error', 'Error Successfull!');
        }
    }

    public function daily()
    {
        $date = date('d/m/y');
        $dailyEx = Expense::where('date',$date)->get();
        return view('expense.dailyExpense', compact('dailyEx'));
    }

    public function dailyEdit($id)
    {
        $dailyEdit = Expense::find($id);
        return view('expense.dailyEdit', compact('dailyEdit'));
    }

    public function dailyUpdate(Request $request, $id)
    {
        $dailyUpdate = Expense::find($id);
        $data = [
            'detail'=>$request->detail,
            'amount'=>$request->amount,
        ];
        try
        {
            $dailyUpdate->update($data);
            return Redirect()->route('daily.expense')->with('message', 'Update Successfull!');
        }catch(Throwable $Exception)
        {
            return Redirect()->back()->with('error', 'Error Successfull!');
        }
    }

    public function destroyDaily($id)
    {
        $deleteDaily = Expense::find($id);
        $deleteDaily->delete();
        return Redirect()->back()->with('message', 'Delete Successfull!');
    }

    public function monthly()
    {
        $month = date('F');
        $monthEx = Expense::where('month',$month)->get();
        return view('expense.monthlyExpense', compact('monthEx'));
    }

    public function monthEdit($id)
    {
        $monthEdit = Expense::find($id);
        return view('expense.monthEdit', compact('monthEdit'));
    }

    public function monthUpdate(Request $request, $id)
    {
        $monthUpdate = Expense::find($id);
        $data = [
            'detail'=>$request->detail,
            'amount'=>$request->amount,
        ];
        try
        {
            $monthUpdate->update($data);
            return Redirect()->route('monthly.expense')->with('message', 'Update Successfull!');
        }catch(Throwable $Exception)
        {
            return Redirect()->back()->with('error', 'Error Successfull!');
        }
    }

    public function destroyMonth($id)
    {
        $deleteMonth = Expense::find($id);
        $deleteMonth->delete();
        return Redirect()->back()->with('message', 'Delete Successfull!');
    }

    public function yearly()
    {
        $year = date('Y');
        $yearEx = Expense::where('year',$year)->get();
        return view('expense.yearlyExpense', compact('yearEx'));
    }

    public function yearEdit($id)
    {
        $yearEdit = Expense::find($id);
        return view('expense.yearEdit', compact('yearEdit'));
    }

    public function yearUpdate(Request $request, $id)
    {
        $yearUpdate = Expense::find($id);
        $data = [
            'detail'=>$request->detail,
            'amount'=>$request->amount,
        ];
        try
        {
            $yearUpdate->update($data);
            return Redirect()->route('yearly.expense')->with('message', 'Update Successfull!');
        }catch(Throwable $Exception)
        {
            return Redirect()->back()->with('error', 'Error Successfull!');
        }
    }

    public function destroyYear($id)
    {
        $deleteYear = Expense::find($id);
        $deleteYear->delete();
        return Redirect()->back()->with('message', 'Delete Successfull!');
    }
}
