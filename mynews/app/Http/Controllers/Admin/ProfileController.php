<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Profile; #課題15-5

class ProfileController extends Controller
{
    //php＿09　課題5を追記
    public function add()
    {
      return view('admin.profile.create');
    }
    public function create()
    {
      return redirect('admin/profile/create');
    }
    public function edit()
    {
      return view('admin.profile.edit');
    }
    public function update()
    {
      return redirect('admin/profile/edit');
    }

    // lalavel_15_課題5
    public function create (Request $request)
    {
      //Validation　を行う
      $this->validate($request, Profile::$rules);

      $profile = new Profile;
      $form = $request->all();

      // フォームから送信されてきた_tokenを削除
      unset($form['_token']);

      // データベースに保存
      $profile->fill($form);
      $profile->save();

      return redirect('admin/profile/create');
    }





}
