<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use SectionView;

class PageController extends Controller
{
    public function showFirstPage(Request $request)
    {
      if($request->input('spf') == 'navigate')
        return view('pages.page1.spf_json');
      return view('pages.page1.index');
    }

    public function showSecondPage(Request $request)
    {
      $users = User::all();
      if($request->input('spf') == 'navigate') {
        return SectionView::from('pages.page2')->with(['users' => $users])->render();
      }
      return view('pages.page2.index', compact('users'));
    }
}
