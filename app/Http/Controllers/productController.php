<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use LDAP\Result;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product_data = products::join('categories', 'products.category', '=', 'categories.category_id')
            ->select('products.*', 'categories.category')
            ->get();
        // dd($product_data);
        return view('adminPage.product.viewProduct', compact('product_data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = category::get();
        return view('adminPage.product.addProduct', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate
        $request->validate([
            'product' => 'required',
            'disc' => 'required',
            'short_disc' => 'required|max:100',
            'category' => 'required',
            'price' => 'numeric',
            'discount_price' => 'numeric|nullable',
            'availableStoke' => 'numeric|nullable',
            'product_imgs.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'product_imgs' => 'max:5|min:1|required',
            'img_title.*' => 'required',
        ], [
            'product' => "Product name description is required",
            'disc' => "Description is required",
            'short_disc' => "Short description is required",
            'category' => "Category description is required",
            'price' => "price is required and must be a numeric",
            'product_imgs.max' => "You can't more then 5 image",
            'product_imgs.required' => "You have to upload minimum 1 image",
            'img_title.*' => "image title is required",
        ]);

        // product id handel
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789';
        $random_string = '';
        for ($i = 0; $i < 3; $i++) {
            $random_string .= $characters[rand(0, strlen($characters) - 1)];
        }
        $random_string .= date('mi');
        for ($i = 0; $i < 2; $i++) {
            $random_string .= $characters[rand(0, strlen($characters) - 1)];
        }

        // images save and array make
        $imageNames = [];
        foreach ($request->product_imgs as $i => $img) {
            $imageName = $random_string . date('dmy') . $i . '.' . $img->extension();
            $img->move(public_path('asset/image/product'), $imageName);

            $image = [
                'img' => $imageName,
                'title' => $request->img_title[$i],
                'disc' => $request->img_disc[$i],
            ];

            $imageNames[] = $image;
        }

        // dd(json_encode($imageNames));

        $data = new products;
        $data->product_id = $random_string;
        $data->name = $request->product;
        $data->desc = $request->disc;
        $data->short_desc = $request->short_disc;
        $data->image = json_encode($imageNames);
        $data->category = $request->category;
        $data->price = $request->price;
        $data->discount_price = $request->discount_price;
        $data->color = json_encode($request->color);
        $data->size = json_encode($request->size);
        $data->available_stoke = $request->availableStoke;
        $data->product_model_number = $request->product_model;
        $data->brand = $request->brand;
        $data->warranty = $request->warranty;
        $data->delivery_cost = $request->delivery;
        $data->save();

        return back()->with('success', 'Product successfully added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product_data = products::where('product_id', $id)
            ->join('categories', 'products.category', '=', 'categories.category_id')
            ->select('products.*', 'categories.category')
            ->first();
        // dd($product_data);
        return view('adminPage.product.showProduct', compact('product_data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product_data = products::where('product_id', $id)->first();
        $categories = category::all();
        return view('adminPage.product.editProduct', compact('categories', 'product_data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // validate
        $request->validate([
            'product' => 'required',
            'disc' => 'required',
            'short_disc' => 'required|max:100',
            'category' => 'required',
            'price' => 'numeric',
            'discount_price' => 'numeric|nullable',
            'availableStoke' => 'numeric|nullable',
            'img_title.*' => 'required',
        ], [
            'product' => "Product name description is required",
            'disc' => "Description is required",
            'short_disc' => "Short description is required",
            'category' => "Category description is required",
            'price' => "price is required and must be a numeric",
            'img_title.*' => "image title is required",
        ]);

        // product id handel
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789';
        $random_string = '';
        for ($i = 0; $i < 3; $i++) {
            $random_string .= $characters[rand(0, strlen($characters) - 1)];
        }
        $random_string .= date('mi');


        $data = products::where('product_id', $id)->first();
        $decodeImg = json_decode($data->image, true);

        // DELETE IMAGE
        for ($i = 0; $i < 5; $i++) {
            if (array_key_exists($i, $decodeImg) && !empty($request->delete_image[$i]) && $request->delete_image[$i]) {
                
                $destination = public_path('asset/image/product/' . $decodeImg[$i]['img']);
                if (File::exists($destination)) {
                    File::delete($destination);
                }

                unset($decodeImg[$i]);
                $decodeImg = array_values($decodeImg);
                $data->image = json_encode($decodeImg);
                $data->save();
            }else{}
        }

        for ($i = 0; $i < 5; $i++) {

            // IMAGE CREATE UPDATE 
            if (!empty($request->product_imgs[$i]) && $request->product_imgs[$i] != null) {
                // UPDATE IMAGE
                if (!empty($decodeImg[$i]['img'])) {

                    $destination = public_path('asset/image/product/' . $decodeImg[$i]['img']);
                    // delete existing file
                    if (File::exists($destination)) {
                        File::delete($destination);
                    }
                    $imageName = $random_string . date('dmy') . $i . '.' . $request->product_imgs[$i]->extension();
                    $request->product_imgs[$i]->move(public_path('asset/image/product'), $imageName);

                    $image = [
                        'img' => $imageName,
                        'title' => $request->img_title[$i],
                        'disc' => $request->img_disc[$i],
                    ];

                    $decodeImg[$i] = $image;
                    $data->image = json_encode($decodeImg);
                    $data->save();

                    // CREATE IMAGE
                } elseif (empty($decodeImg[$i]['img'])) {
                    $imageName = $random_string . date('dmy') . $i . '.' . $request->product_imgs[$i]->extension();
                    $request->product_imgs[$i]->move(public_path('asset/image/product'), $imageName);

                    $image = [
                        'img' => $imageName,
                        'title' => $request->img_title[$i],
                        'disc' => $request->img_disc[$i],
                    ];

                    $decodeImg[] = $image;
                    $data->image = json_encode($decodeImg);
                    $data->save();
                }

                // UPDATE ONLY IMAGE INFO
            } elseif (array_key_exists($i, $decodeImg) && !empty($request->img_title[$i])) {
                $image = [
                    'img' => $decodeImg[$i]['img'],
                    'title' => $request->img_title[$i],
                    'disc' => $request->img_disc[$i],
                ];

                $decodeImg[$i] = $image;
                $data->image = json_encode($decodeImg);
                $data->save();
            } else {
            }
        }


        $data->name = $request->product;
        $data->desc = $request->disc;
        $data->short_desc = $request->short_disc;
        $data->category = $request->category;
        $data->price = $request->price;
        $data->discount_price = $request->discount_price;
        $data->color = json_encode($request->color);
        $data->size = json_encode($request->size);
        $data->available_stoke = $request->availableStoke;
        $data->product_model_number = $request->product_model;
        $data->brand = $request->brand;
        $data->warranty = $request->warranty;
        $data->delivery_cost = $request->delivery;
        $data->update();

        return redirect( route('product'))->with('success', 'Product successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
