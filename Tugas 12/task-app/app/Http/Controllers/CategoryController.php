<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategoryController extends Controller
{
    public function create() 
    {
        return view('category.tambah');
    }

    public function store(Request $request)
    {
        // validation
        $request->validate([
            'name' => 'required|min:5',
            'description' => 'required',
        ]);

        // insert data
        DB::table('genres')->insert([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return redirect('/category');
    }

    public function index()
    {
        $genres = DB::table('genres')->get();
        return view('category.tampil', ['genres' => $genres]);
    }

    public function show($id)
    {
        $genre = DB::table('genres')->find($id);
        return view('category.detail', ['genre' => $genre]);
    }

    public function edit($id)
    {
        $genre = DB::table('genres')->find($id);
        return view('category.edit', ['genre' => $genre]);
    }

    public function update($id, Request $request)
    {
        // validation
        $request->validate([
            'name' => 'required|min:5',
            'description' => 'required',
        ]);

        DB::table('genres')
            ->where('id', $id)
            ->update([
                    'name' => $request->input('name'),
                    'description' => $request->input('description'),
                    'updated_at' => Carbon::now(),
        ]);

        return redirect('/category');
    }

    public function destroy($id)
    {
        DB::table('genres')->where('id', $id)->delete();

        return redirect('/category');
    }

}
