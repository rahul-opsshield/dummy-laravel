<?php

namespace App\Http\Controllers;

use App\Models\BruteForce;
use Illuminate\Http\Request;

class Datatable extends Controller
{
    public function index()
    {
        $data['dataArray'] = BruteForce::select(['log_ip', 'log_domain', 'log_uri', 'log_reason', 'log_user'])->paginate(15);

        return view('welcome', $data);
    }
}
