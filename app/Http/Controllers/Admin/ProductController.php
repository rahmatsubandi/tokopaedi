<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

use App\Http\Requests\Admin\ProductRequest;
use App\User;
use App\Category;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // mengecek apakah memanggil ajax atau bukan
        if (request()->ajax()) {
            /** 
             * Jika ingin menampilkan data yang terhapus (bila menggunakan SoftDeletes)
             * $query = Product::with(['user', 'category']->withTrashed());
             */
            // memanggil query untuk model product berdasarkan relasi
            $query = Product::with(['user', 'category']);

            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return ' 
                    <div class="btn-group">
                        <div class="dropdown">
                        <button class="btn btn-success dropdown-toggle mr-1 mb-1" type="button" data-toggle="dropdown">Action</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="' . route('product.edit', $item->id) . '">Edit</a>
                                <form method="post" action="' . route('product.destroy', $item->id) . '">
                                ' . method_field('DELETE') . csrf_field() . '
                                <button class="dropdown-item text-danger" type="submit">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    ';
                })
                // edit column description dengan menghilangkan karakter html
                ->editColumn('description', function ($item) {
                    return strip_tags($item->description);
                })
                // edit column price dengan number format indonesia
                ->editColumn('price', function ($item) {
                    return number_format($item->price, 0, ',', '.');
                })
                ->rawColumns(['action', 'description', 'price'])
                ->make();
        }
        return view('pages.admin.product.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $categories = Category::all();

        return view('pages.admin.product.create', [
            'users' => $users,
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\ProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $data = $request->all();

        $data['slug'] = Str::slug($request->name);

        Product::create($data);

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $categories = Category::all();

        $item = Product::findOrFail($id);

        return view('pages.admin.product.edit', [
            'item' => $item,
            'users' => $users,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\ProductRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $data = $request->all();

        $item = Product::findOrFail($id);

        $data['slug'] = Str::slug($request->name);

        $item->update($data);

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // hapus data dengan menghapus photo
        $item = Product::findOrFail($id);
        $item->delete();

        return redirect()->route('product.index');
    }
}
