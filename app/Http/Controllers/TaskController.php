<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index()
    {
        $user = DB::table('task')->orderBy('list', 'DESC')->get();
        return view('task.index', [
            'user' => $user
        ]);
    }

    public function store(Request $request)
    {
        DB::table('task')->insert([
            'list' => $request->list
        ]);

        return back()->with('message', 'list successfully created');
    }

    public function edit($id)
    {
        $user = DB::table('task')->where('id', $id)->first();
        return view('task.edit', [
            'user' => $user
        ]);
    }

    public function update(Request $request, $id)
    {
        DB::table('task')->where('id', $id)->update([
            'list' => $request->list
        ]);
        return redirect('/task')->with('message', 'list successfully updated');
    }

    public function destroy($id)
    {
        DB::table('task')->where('id', $id)->delete();
        return redirect('/task')->with('message', 'list successfully delete');
    }
}
