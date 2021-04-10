<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index()
    {
        return view("route.sample", ["msg" => "index"]);
    }

    public function show($param)
    {
        return view("route.sample", ["msg" => "show : ${param}"]);
    }

    public function create()
    {
        return view("route.sample", ["msg" => "create"]);
    }

    public function store()
    {
        return view("route.sample", ["msg" => "store"]);
    }

    public function edit($param)
    {
        return view("route.sample", ["msg" => "edit : $param"]);
    }

    public function update($param)
    {
        return view("route.sample", ["msg" => "update : $param"]);
    }

    public function destroy($param)
    {
        return view("route.sample", ["msg" => "destroy : $param"]);
    }
    //
}
