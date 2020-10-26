<?php

namespace App\Http\Controllers;

use App\ClientShop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $shops = ClientShop::leftJoin('products','client_shops.id','products.shop_id')
            ->select(DB::raw('sum(total_product) as total_item'),'client_shops.shop_name','client_shops.id')
            ->groupBy('client_shops.id');
        if ($request->has('search')){
            $shops = $shops->where('products.product_cat','like','%'.$request->search.'%');
        }
        $shops = $shops->orderBy('total_item','desc')
            ->get();
        $shop_list = view('CliectsShop.shop',['shops'=>$shops])->render();
        return response()->json(['shops' => $shop_list]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ClientShop  $clientShop
     * @return \Illuminate\Http\Response
     */
    public function show(ClientShop $clientShop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ClientShop  $clientShop
     * @return \Illuminate\Http\Response
     */
    public function edit(ClientShop $clientShop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ClientShop  $clientShop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClientShop $clientShop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ClientShop  $clientShop
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClientShop $clientShop)
    {
        //
    }
}
