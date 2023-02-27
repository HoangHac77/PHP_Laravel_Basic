<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Food;
use App\Rules\Uppercase;
use App\Http\Requests\CreateValidationRequest;

class FoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // function get(): lay ra danh sach

        $foods = Food::all();
        // dd($food);

        //filter : tra ve mang
        // $foods = Food::where('name', '=', 'sushi')
        //         ->get();

        // tra ve doi tuong
        // $foods = Food::where('name', '=', 'sushi')
        //     ->firstOrFail();

        return view('foods.index', [
            'foods' => $foods
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('foods.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    // public function store(CreateValidationRequest $request)
    {
        // dd('This is store function');
        // create new object
        // $food = new Food();
        // $food->name = $request->input('name');
        // $food->count = $request->input('count');
        // $food->descriptions = $request->input('descriptions');
        // dd($request);

        //validate
        // $request->validate([
        //     'name' => 'required|unique:food',
        //     'count' => 'required|integer|min:0|max:1000',
        //     'category_id' => 'required',
        // ]);

        // $request->validate([
        //     'name' => new Uppercase,
        //     'count' => 'required|integer|min:0|max:1000',
        //     'category_id' => 'required',
        // ]);
        // dd($request->all());
        // $request->validated();

        // get file extension: lay ra duoi file
        // dd($request->file('image')->guessExtension());
        // dd($request->file('image')->getMimeType());
        // dd($request->file('image')->getClientOriginalName());
        // dd($request->file('image')->getSize());
        // dd($request->file('image')->getError());
        // dd($request->file('image')->isValid());
        $request->validate([
            'name' => 'required',
            'count' => 'required|integer|min:0|max:1000',
            'descriptions' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048',
        ]);

        //Client image's name and server's image name
        //must be different, why?
        // trong truong nhieu nguoi cung up load mot anh khac ten

        // Xau chuoi : dau tien la ten image + tg hien tai up len + - + ten food + loai duoi file

        $generatedImageName = 'image' . time() . '-'
            . $request->name . '.'
            . $request->image->extension();
        // dd($generatedImageName);

        // move to a folder
        $request->image->move(public_path('images'), $generatedImageName);

        $food = Food::create([
            'name' => $request->input('name'),
            'count' => $request->input('count'),
            'descriptions' => $request->input('descriptions'),
            'category_id' => $request->input('category_id'),
            'image_path' => $generatedImageName,
        ]);
        // save database
        $food->save();
        return redirect('/foods');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd("This is show function" . $id);
        $food = Food::find($id);
        // $category = $food->category();
        $category = Category::find($food->category_id);
        //gan $food bang doi tuong category
        $food->category = $category;
        // dd($food);
        // dd($category);
        // with() function - truyen tham so
        return view('foods.show')->with('food', $food);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($id);
        $food = Food::find($id);
        // dd($food);
        return view('foods.edit')->with('food', $food);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateValidationRequest $request, $id)
    {
        $request->validated();
        $food = Food::where('id', $id)
            ->update([
                'name' => $request->input('name'),
                'count' => $request->input('count'),
                'descriptions' => $request->input('descriptions'),
            ]);
        return redirect('/foods');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $food = Food::find($id);
        $food->delete();

        return redirect('/foods');
    }
}
