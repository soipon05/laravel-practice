<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
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
        $validator  = Validator::make($request->query(),[
            'id'    => 'required',
            'pass'  => 'required',
        ]);
        if ($validator->fails()) {
            $msg = 'クエリーに問題があります。';
        } else {
            $msg = 'ID/PASSを受け付けました。フォームを入力下さい。';
        }
        
        return view('hello.index', ['msg'=>$msg, ]);
    }

public function post(Request $request)
    {
        $rules = [
            'name'  => 'required',
            'mail'  => 'email',
            'age'   => 'numeric',
        ];
        $messages = [
            'name.required' => '名前は必ず入力してください',
            'mail.email'    => 'メールアドレスが必要です。',
            'age.numeric'   => '年齢は整数で記入下さい。',
            'age.min'       => '年齢は0歳以上で記入してください。',
            'age.max'       => '年齢は200歳以下で記入してください。',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        $validator->sometimes('age', 'min:0', function($input){
            return !is_int($input->age);
        });
        $validator->sometimes('age', 'max:200', function($input){
            return !is_int($input->age);
        });

        if ($validator->fails()) {
            return redirect('/hello')
                        ->withErrors($validator)
                        ->withInput();
        }
        return view('hello.index', ['msg'=>'正しく入力されました！']);
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
