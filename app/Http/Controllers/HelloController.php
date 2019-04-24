<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

global $head, $style, $body, $end;
$head  = '<html><head>';
$style = <<<EOF
<style>
body {font-size:16px; color:#999; }
h1 { font-size:100px; text-align:right; color:#eee;
    margin: -40px 0px -50px 0px; }
    }
</style>
EOF;
$body = '</head><body>';
$end  = '</body>';

function tag($tag, $txt) {
    return "<{$tag}>" . $txt . "</{$tag}>";
}

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

    public function __invoke() {
        return <<<EOF
<html>
<head>
<title>Hello</title>
<style>
body { font-size: 16px; color: #999; }
h1 { font-size: 30px; text-align: right; color: #eee; margin: 15px 0 0 0; }
</style>
</head>
<body>
<h1>Single Action</h1>
<p>これは、シングルアクションコントローラのアクションです。</p>
</body>
</html>
EOF;
        
    }
}
