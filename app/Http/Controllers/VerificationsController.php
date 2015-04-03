<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;

class VerificationsController extends Controller {

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    DB::insert('insert into l27users (api_key, subdomain, url) values (?, ?, ?)', [$request->api_key, $request->subdomain, $request->url]);
  }
}
