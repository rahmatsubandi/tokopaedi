<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

use App\Http\Requests\Admin\CategoryRequest;

use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
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
            // memanggil query untuk model category
            $query = Category::query();

            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return ' 
                    <div class="btn-group">
                        <div class="dropdown">
                        <button class="btn btn-success dropdown-toggle mr-1 mb-1" type="button" data-toggle="dropdown">Action</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="' . route('category.edit', $item->id) . '">Edit</a>
                                <form method="post" action="' . route('category.destroy', $item->id) . '">
                                ' . method_field('DELETE') . csrf_field() . '
                                <button class="dropdown-item text-danger" type="submit">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    ';
                })
                ->editColumn('photo', function ($item) {
                    return $item->photo ? '<img src="' . Storage::url($item->photo) . '" style="max-height: 50px;" />' : '';
                })
                ->rawColumns(['action', 'photo'])
                ->make();
        }
        return view('pages.admin.category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $data = $request->all();

        $data['slug'] = Str::slug($request->name);
        $data['photo'] = $request->file('photo')->store('assets/category', 'public');

        Category::create($data);

        return redirect()->route('category.index');
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
        $item = Category::findOrFail($id);

        return view('pages.admin.category.edit', [
            'item' => $item,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\CategoryRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        $data = $request->all();

        $data['slug'] = Str::slug($request->name);
        // jika perbaharui data tanpa ganti photo
        if (!$request->hasFile('photo')) {
            $data['photo'] = Category::findOrFail($id)->photo;
            // jika ganti photo, hapus foto lama
        } elseif (!empty($request->file('photo')) && $request->file('photo')->isValid()) {
            // simpan photo baru
            $data['photo'] = $request->file('photo')->store('assets/category', 'public');
            // hapus photo lama
            $oldPhoto = Category::findOrFail($id)->photo;
            Storage::delete('public/' . $oldPhoto);
        }

        $item = Category::findOrFail($id);
        $item->update($data);

        return redirect()->route('category.index');
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
        $item = Category::findOrFail($id);
        $oldPhoto = $item->photo;
        $item->delete();
        Storage::delete('public/' . $oldPhoto);
        // kembali ke halaman index
        return redirect()->route('category.index');
    }
}
