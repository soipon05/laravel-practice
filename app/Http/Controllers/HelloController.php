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
        if (isset($request->id)) {
            $param = ['id' => $request->id];
            $items = DB::select('select * from people where id = :id', $param);
        } else {
            $items = DB::table('people')->get();
        }
        
        return view('hello.index', ['items' => $items]);
    }

public function post(Request $request)
    {
        $items = DB::select('select * from people');
        return view('hello.index', ['items' => $items]);
    }

public function add(Request $request)
{
    return view('hello.add');
}

public function create(Request $request)
{
    $param = [
        'name' => $request->name,
        'mail' => $request->mail,
        'age'  => $request->age,
    ];
    DB::insert('insert into people (name, mail, age) values (:name, :mail, :age)', $param);
    return redirect('/hello');
}

public function edit(Request $request)
{
    $param = ['id' => $request->id];
    $item  = DB::select('select * from people where id = :id', $param);
    // dd($item);

    return view('hello.edit', ['form' => $item[0]]);
}

public function update(Request $request)
{
    $param = [
        'id'    => $request->id,
        'name'  => $request->name,
        'mail'  => $request->mail,
        'age'   => $request->age,
    ];
    DB::update('update people set name = :name, mail = :mail, age = :age where id = :id', $param);
    return redirect('/hello');
}

public function del(Request $request)
{
    $param = ['id' => $request->id];
    $item  = DB::select('select * from people where id = :id', $param);
    return view('hello.del', ['form' => $item[0]]);
}

public function remove(Request $request)
{
    $param = ['id' => $request->id];
    DB::delete('delete from people where id = :id', $param);
    return redirect('/hello');
}

public function show(Request $request)
{
    $id = $request->id;
    $item = DB::table('people')->where('id', $id)->first();
    return view('hello.show', ['item' => $item]);
}

}
