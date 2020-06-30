<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminBlogController extends Controller
{
    /**
     * ブログ記事入力フォーム
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function form()
    {
        return view('admin_blog.form');
    }
}
