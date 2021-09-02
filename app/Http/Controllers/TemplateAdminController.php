<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateAdminController extends Controller
{
    public function index()
    {
        return view('.Admin.layout.index');
    }

    public function page_content()
    {
        return view('.Admin.page-content');
    }

    public function form_layout()
    {
        return view('.Admin.form-layout');
    }
    public function input()
    {
        return view('.Admin.input');
    }
    public function table()
    {
        return view('.Admin.table');
    }
    public function datatable()
    {
        return view('.Admin.datatable');
    }
    public function email()
    {
        return view('.Admin.email');
    }
    public function login()
    {
        return view('.Admin.login');
    }
    public function sign_in()
    {
        return view('.Admin.regitter');
    }
    public function forgot()
    {
        return view('.Admin.forgot');
    }
}
