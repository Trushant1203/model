<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
use App\Models\mobile;

class CustomerController extends Controller
{
    public function add_customer(){
        $mobile=new Mobile();
        $mobile->m_name = 'Redmi';

        $customer=new Customer();
        $customer->name='Trushant';

        $customer->save();

        $customer->mobile()->Save($mobile);
    }
    public function show_mobile($id)
    {
        $mobile=Customer::find($id)->mobile;
        return $mobile;
    }
}
