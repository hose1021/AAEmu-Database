<?php

namespace App\Http\Controllers;

use App\Repositories\ItemRepository;

class ThemeController extends Controller
{
	public function switchModes()
	  {
	      if (session()->has('isDark')) {
	          session()->put('isDark', !session('isDark'));
	      }
	      else {
	          //provide an initial value of isDark
	          session()->put('isDark', true);
	      }
	      return redirect()->route('home');
	}
}