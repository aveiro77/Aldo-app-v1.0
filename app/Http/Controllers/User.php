<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $token = 'eyJhbGciOiJSUzUxMiIsInR5cCI6IkpXVCJ9.eyJleHAiOjE3MDYzNDU0MzMsImlhdCI6MTY3NDgwOTQzMywicmF5IjoiNmUzMmE4Y2ExOGE0YTI2ZjVkYTAyZmFhYjUyMzQwNGMiLCJzdWIiOjEwMTIzMjh9.WDaEHQ9TuM8VbD7bqnnCpI-GzCU7D8JjDyjb6Aa_Tf94EM7zYkeZt_Mpay0dQqUNkzJJM2qCs_WMEqb0DfyXDwaiUBRJ2Ys2Q2JJsa0MLLKDDWDog1Xxb59df-WvtYrm0mTpGq_pw0tGkLB0AB2y_RzJJfvjuXUGh8G5loOaqhSocYooZl5--qbp9maCXHnLdewHr-woEbhY0Yw5ThB99Yk2i6GabdL3pVsf9Vw9Z7rq18hVNKoRIaPijz71IYZhGt-WpNLT38cESovDIiIuoA4cvDqgwv4VlaDvKXKHuwQZrYSp6PFBAzSBb8Cw5Pv969lJXwxP6Z7HVHUmA5sFRg';
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://5sim.net/v1/user/profile');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');


        $headers = array();
        $headers[] = 'Authorization: Bearer ' . $token;
        $headers[] = 'Accept: application/json';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);

        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);

        //echo $result;
        $result = json_decode($result, true);
        return view('dashboard.user.index', [
            'title' => 'User Info',
            'data' => $result
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
