<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContinuousIntegrationController extends Controller
{
 
    public function index()
    {
        shell_exec( 'cd /var/www/asuctf/ && git stash ' );
        $resultMessage = shell_exec( 'cd /var/www/asuctf/ && git stash ' );
        $resultMessage .= shell_exec('cd /var/www/asuctf/ && git pull ');
        return $resultMessage;
    }
}
