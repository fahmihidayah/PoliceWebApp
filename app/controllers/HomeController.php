<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function getPengendara()
	{
		$no_sim = Input::get('no_sim');
		return Pengendara::with('daftar_pelanggaran.pasal')->where('no_sim', $no_sim)->first();
	}

	public function getPasal()
	{
		return Response::json(['data' => Pasal::all()],200);
	}

	public function insertPelanggaran()
	{
		$no_sim = Input::get('no_sim');
		$array_pasal = Input::get('array_pasal');
		$array_id_pasal = json_decode($array_pasal);
		$pengendara = Pengendara::where('no_sim', $no_sim)->first();
		foreach ($array_id_pasal as $id_pasal) {
			$pelanggaran = new Pelanggaran();
			$pelanggaran->pengendara_id = $pengendara->id;
			$pelanggaran->pasal_id = $id_pasal;
			$pelanggaran->save();
		}
		return Response::json(['data' => 'success insert data'], 200);
	}

	public function login()
	{
		$email = Input::get('email');
		$password = Input::get('password');
		if(Auth::attempt(array('email' => $email, 'password'=> $password), false)){
			$user = Auth::user();
			return Response::json(['data' => $user], 200);
		}
		else {
			return Response::json(['data' => 'error data'],400);
		}
	}
}
