<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{

    public function editShippingMethods($type)
    {

        //On a 3 methodes pour la livraison

        if ($type === 'free')
            $shippingMethod = Setting::where('key', 'free_shipping_label')->first();


        elseif ($type === 'inner')
            $shippingMethod = Setting::where('key', 'local_label')->first();

        elseif ($type === 'outer')
            $shippingMethod = Setting::where('key', 'outer_label')->first();
        else // par default
            $shippingMethod = Setting::where('key', 'free_shipping_label')->first();


        return view('dashboard.settings.shippings.edit', compact('shippingMethod'));

    }


}
