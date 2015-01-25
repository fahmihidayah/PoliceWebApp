<?php

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->insert(
			array(
				array('id'=>1, 'nama'=>'polisi satu', 'email'=>'police@gmail.com', 'password' => Hash::make('police')),
				array('id'=>2, 'nama'=>'polisi dua', 'email'=>'police_dua@gmail.com', 'password' => Hash::make('policedua'))
				)
			);

	}

}
