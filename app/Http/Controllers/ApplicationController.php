<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Category;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return view('ajax_application', ['objects' => []]);
        }

        $objects = Application::query()->with('categories')->whereHas('categories', function ($query) {
            $query->where('slug', '=', 'platnie');
            $query->orWhere('slug', '=', 'ios');
            $query->orWhere('slug', '=', 'android');
        })->get();

        $categories = Category::all();

        return view('application', ['objects' => $objects,
            'categories' => $categories]);
    }

    public function filter(string $filter1, string $filter2 = null)
    {
        $filterPrice = preg_split('/-i-/', $filter1);
        $filterSystem = [];
        if ($filter2) {
            $filterSystem = preg_split('/-i-/', $filter2);
        }
        $filters = array_merge($filterPrice, $filterSystem);

        $objects = Application::query()->with('categories')->whereHas('categories', function ($query) use ($filters) {
            $query->where(function ($subquery) use ($filters) {
                foreach ($filters as $filter) {
                    $subquery->orWhere('slug', $filter);
                }
            });
        })->get();

        return view('ajax_application', ['objects' => $objects]);
    }
}
