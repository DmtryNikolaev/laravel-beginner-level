<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApplicationController extends Controller
{
    public function store(Request $request)
    {   
        $data = $request->validate([
            'name' => 'required',
            'phone' => ['required', 'integer'],
            'mail' => 'email',
            'additional_information' => 'string',
            'clientID' => 'integer',
            'utm_source' => 'string',
            'utm_medium' => 'string',
            'utm_campaign' => 'string',
            'utm_content' => 'string',
            'utm_term' => 'string',
            'source' => 'text'
        ]);

        $application = new Application();
        $application->source = $request->header('User-Agent');
        $application->fill($data);
        $application->save();
        
        return response('Успешно отправлено');
    }

    public function sorted(Request $request)
    {
        $sortedQuery = $request->query('groupBy') ?? 'created_at';
        $applications = DB::table('applications')->orderBy($sortedQuery)->simplePaginate(150);

        return response($applications);
    }
}