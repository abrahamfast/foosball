<?php


Route::get('/', function () {
    return view('welcome', [
    	'status' => false
    ]);
});

Route::post('/', function (\Illuminate\Http\Request $r) {
	$r->validate([
		'leader' => 'required',
		'player' => 'required',
		'team' => 'required',
	]);
	$re = \App\Foos::where($r->except('_token'))->first();
	if($r){
		\App\Foos::create($r->except('_token'));	
	}
	
    return view('welcome', [
    	'status' => true
    ]);
});
