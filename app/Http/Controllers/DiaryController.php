<?php

namespace App\Http\Controllers;

class DiaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("diary.index", [ "title" => "DIARY", "results" => [
            [ "user_id" => 1, "status" => "済み", "personInCharge" => "藤川", "registrationDate" => date("Y-m-d") ],
            [ "user_id" => 2, "status" => "まだ", "personInCharge" => "藤田", "registrationDate" => date("Y-m-d") ],
            [ "user_id" => 3, "status" => "まだ", "personInCharge" => "藤本", "registrationDate" => date("Y-m-d") ]
        ]]);
        //
    }
}
