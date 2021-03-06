<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreUsersRequest;
use App\Http\Requests\Admin\UpdateUsersRequest;
use App\Http\Controllers\Traits\FileUploadTrait;
use Yajra\DataTables\DataTables;

class ProdutorasController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of User.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('produtora_access')) {
            return abort(401);
        }

        //@TAUA@
        $users = User::whereHas(
            'role', function($q){
                $q->where('role_id', '5'); //##PRODUTORA
            }
        )->get();
        //$users = User::all();



        return view('admin.produtoras.index', compact('users'));
    }

    /**
     * Show the form for creating new User.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('produtora_create')) {
            return abort(401);
        }
        
        $roles = \App\Role::get()->pluck('title', 'id');


        return view('admin.produtoras.create', compact('roles'));
    }

    /**
     * Store a newly created User in storage.
     *
     * @param  \App\Http\Requests\StoreUsersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUsersRequest $request)
    {
        if (! Gate::allows('produtora_create')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $user = User::create($request->all());
        $user->role()->sync(array_filter((array)$request->input('role')));



        return redirect()->route('admin.produtoras.index');
    }


    /**
     * Show the form for editing User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('produtora_edit')) {
            return abort(401);
        }
        
        $roles = \App\Role::get()->pluck('title', 'id');


        $user = User::findOrFail($id);

        return view('admin.produtoras.edit', compact('user', 'roles'));
    }

    /**
     * Update User in storage.
     *
     * @param  \App\Http\Requests\UpdateUsersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUsersRequest $request, $id)
    {
        if (! Gate::allows('produtora_edit')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $user = User::findOrFail($id);
        $user->update($request->all());
        //@TAUA@
        $user->role()->sync(array_filter((array)$request->input('role')));



        return redirect()->route('admin.produtoras.index');
    }


    /**
     * Display User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('produtora_view')) {
            return abort(401);
        }
        
        $roles = \App\Role::get()->pluck('title', 'id');
$elencofotos = \App\Elencofoto::where('elenco_id', $id)->get();$elenco_videos = \App\ElencoVideo::where('elenco_id', $id)->get();$selecaoelencos = \App\Selecaoelenco::where('atorselecao_id', $id)->get();$selecoesv2s = \App\Selecoesv2::where('produtoraelenco_id', $id)->get();$tasks = \App\Task::where('user_id', $id)->get();

        $user = User::findOrFail($id);

        return view('admin.produtoras.show', compact('user', 'elencofotos', 'elenco_videos', 'selecaoelencos', 'selecoesv2s', 'tasks'));
    }


    /**
     * Remove User from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('produtora_delete')) {
            return abort(401);
        }
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.produtoras.index');
    }

    /**
     * Delete all selected User at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('produtora_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = User::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

}
