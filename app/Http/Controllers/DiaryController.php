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
        $title = "DIARY";
        $items = json_encode([
//            [ "userId" => 1, "status" => "済み", "personInCharge" => "藤川", "registrationDate" => date("Y-m-d") ],
//            [ "userId" => 2, "status" => "まだ", "personInCharge" => "藤田", "registrationDate" => date("Y-m-d") ],
//            [ "userId" => 3, "status" => "まだ", "personInCharge" => "藤本", "registrationDate" => date("Y-m-d") ]
            [ "no" => 1, "userId" => 10, "userName" => "ほげ", "score" => 1000 ],
            [ "no" => 2, "userId" => 20, "userName" => "ほげ1", "score" => 302 ],
            [ "no" => 3, "userId" => 30, "userName" => "ほげ3", "score" => 100 ],
            [ "no" => 4, "userId" => 40, "userName" => "ほげ4", "score" => 50 ],
            [ "no" => 5, "userId" => 50, "userName" => "ほげ5", "score" => 2 ],
        ]);
        return view("diary.index", compact("title", "items"));
        //
    }
}
