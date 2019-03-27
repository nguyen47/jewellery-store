<?php

namespace App\Http\Controllers\Admin;

use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = Setting::all();
        return view('admin.settings.edit', compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.settings.edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $setting = new Setting;

        $setting->name = $request->name;
        $setting->operation_hours = $request->operation_hours;
        $setting->address = $request->address;
        $setting->phone_number = $request->phone_number;
        $setting->email = $request->email;
        $setting->facebook = $request->facebook;
        $setting->instagram = $request->instagram;
      
        $setting->save();

        return redirect()->route('settings.edit');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $setting = Setting::where('id',$id)->first();
        return view('admin.settings.edit', compact('setting'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $setting = Setting::where('id',$id)->first();
        return view('admin.settings.edit', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $setting = Setting::where('id',$id)->first();

        $setting->name = $request->name;
        $setting->operation_hours = $request->operation_hours;
        $setting->address = $request->address;
        $setting->phone_number = $request->phone_number;
        $setting->email = $request->email;
        $setting->facebook = $request->facebook;
        $setting->instagram = $request->instagram;
      
        $setting->save();

        return redirect()->route('settings.edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
