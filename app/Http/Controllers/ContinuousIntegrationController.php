<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContinuousIntegrationController extends Controller
{
 
    public function index()
    {
        exec('bash -c "cd /var/www/ctf_sql_inj/ && git stash && git pull" ' );
        return "done";
    }
}
