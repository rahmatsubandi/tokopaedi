<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

use App\Http\Requests\Admin\UserRequest;

use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
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
            // memanggil query untuk model user
            $query = User::query();

            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return ' 
                    <div class="btn-group">
                        <div class="dropdown">
                        <button class="btn btn-success dropdown-toggle mr-1 mb-1" type="button" data-toggle="dropdown">Action</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="' . route('user.edit', $item->id) . '">Edit</a>
                                <form method="post" action="' . route('user.destroy', $item->id) . '">
                                ' . method_field('DELETE') . csrf_field() . '
                                <button class="dropdown-item text-danger" type="submit">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    ';
                })
                ->rawColumns(['action'])
                ->make();
        }
        return view('pages.admin.user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\UserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $data = $request->all();

        $data['password'] = bcrypt($request->password);

        User::create($data);

        return redirect()->route('user.index');
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
        $item = User::findOrFail($id);

        return view('pages.admin.user.edit', [
            'item' => $item,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UserRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        $data = $request->all();

        $item = User::findOrFail($id);

        if ($request->password) {
            $data['password'] = bcrypt($request->password);
        } else {
            unset($data['password']);
        }

        // Jika tidak ganti email


        $item->update($data);

        return redirect()->route('user.index');
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
        $item = User::findOrFail($id);
        $item->delete();

        return redirect()->route('user.index');
    }
}
