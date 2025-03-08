<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Middleware\IsAdminn;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Books;
use File;

class BookController extends Controller implements HasMiddleware
{   
    public static function middleware(): array
    {
        return [
            new Middleware([IsAdminn::class], except: ['index', 'show']),
        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $book = Books::all();
        return view('books.tampil', ['book'=>$book]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();

        return view('books.tambah', ['category' => $category]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:jpeg,jpg,png|max:2048',
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required'
        ]);
        
        $book = new Books;
        
        $newImageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('image'), $newImageName);
        
        $book->title = $request->input('title');
        $book->content = $request->input('content');
        $book->category_id = $request->input('category_id');
        $book->image = $newImageName;
        
        $book->save();
        
        return redirect('/books');        
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = Books::find($id);
        return view('books.detail', ['book'=>$book]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Books::find($id);
        $category = Category::all();
        return view('books.edit', ['book'=>$book, 'category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => 'mimes:jpeg,jpg,png|max:2048',
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required'
        ]);
    
        $book = Books::find($id);
    
        if($request->has('image')){
            // Hapus gambar lama jika ada
            if ($book->image) {
                File::delete(public_path('image/' . $book->image));
            }
    
            // Simpan gambar baru
            $newImageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('image'), $newImageName);
            $book->image = $newImageName;
        }
    
        $book->title = $request->input('title');
        $book->content = $request->input('content');
        $book->category_id = $request->input('category_id');
        $book->save();

        return redirect('/books');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Books::find($id);

        File::delete('image/' . $book->image);

        $book->delete();

        return redirect('/books');
    }
}
