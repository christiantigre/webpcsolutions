<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\template;
use Illuminate\Http\Request;
use Auth;

class templateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */

    public function __construct()
    {
        $this->middleware('admin', ['except' => 'logout']);
    }

    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $template = template::where('titletemplate', 'LIKE', "%$keyword%")
                ->orWhere('sectioncolor', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $template = template::paginate($perPage);
        }

        return view('admin.template.index', compact('template'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.template.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        template::create($requestData);

        return redirect('admin/template')->with('flash_message', 'template added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $template = template::findOrFail($id);

        return view('admin.template.show', compact('template'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $template = template::findOrFail($id);

        return view('admin.template.edit', compact('template'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $template = template::findOrFail($id);
        $template->update($requestData);

        return redirect('admin/template')->with('flash_message', 'template updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        template::destroy($id);

        return redirect('admin/template')->with('flash_message', 'template deleted!');
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }
}
