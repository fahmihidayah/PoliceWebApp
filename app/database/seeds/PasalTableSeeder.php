<?php

class PasalTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('pasal')->insert(
			array(
				array('id'=>'1', 'data_pasal'=>'pasal 1, tentang tidak memakai helm', 'denda'=>100000),
				array('id'=>'2', 'data_pasal'=>'pasal 2, tentang tidak membawa sim', 'denda'=>100000),
				));
	}

}
