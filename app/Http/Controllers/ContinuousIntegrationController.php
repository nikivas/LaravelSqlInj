<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContinuousIntegrationController extends Controller
{
 
    public function index()
    {
        shell_exec('cd /var/www/ctf_sql_inj/ && git stash ' );
        $resultMessage = shell_exec( 'cd /var/www/ctf_sql_inj/ && git pull ' );
        return $resultMessage;
    }
}
