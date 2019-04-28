<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\HelloRequest;
use Validator;

class HelloController extends Controller
{

    // public function index() {
    //     global $head, $style, $body, $end;

    //     $html = $head . tag('title', 'Hello/index') . $style . $body . tag('h1', 'Index') . tag ('p', 'this is Index page') . '<a href="/hello/other">go to Other page</a>' . $end;
    //     return $html;
    // }

    // public function other() {
    //     global $head, $style, $body, $end;

    //     $html = $head . tag('title', 'Hello/Other') . $style . $body . tag('h1', 'Other') . tag('p', 'this is Other page') . $end;
    //     return $html;
    // }

//     public function index(Request $request, Response $response) {
//         return <<<EOF
// <html>
// <head>
// <title>Hello/Index</title>
// <style>
// body { font-size: 16px; color: #999; }
// h1 { font-size: 30px; text-align: right; color: #eee; margin: 15px 0 0 0; }
// </style>
// </head>
// <body>
// <h1>Hello</h1>
// <h3>Request</h3>
// <pre>{$request}</pre>
// <h3>Response</h3>
// <pre>{$response}</pre>
// </body>
// </html>
// EOF;
//         $response->setContent($html);
//         return $response;
//     }
public function index(Request $request) 
    {
        $items = DB::select('select * from people');
        return view('hello.index', ['items' => $items]);
    }

public function post(HelloRequest $request)
    {
        // $validate_rule = [
        //     'msg' => 'required',
        // ];
        // $this->validate($request, $validate_rule);
        $msg        = $request->msg;
        $response   = new Response(view('hello.index', ['msg'=>'「' . $msg .'」をクッキーに保存しました。']));

        $response->cookie('msg', $msg, 100);
        return $response;
        // return view('hello.index', ['msg'=>'正しく入力されました！']);
    }

// public function post(Request $request) 
//     {
//     // $msg  = $request->msg;
//     // $data = [
//     //     'msg'=>'こんにちは、' . $msg . 'さん！',
//     // ];
//     return view('hello.index', ['msg'=>$request->msg]);
//     }
}
