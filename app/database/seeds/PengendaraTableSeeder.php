<?php

class PengendaraTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('pengendara')->insert(
			array(
				array('id'=>1, 'nama'=>'fahmi', 'alamat' => 'jalan danau kelimutu c3 a1 malang'
					, 'tempat_lahir'=> 'malang', 'tanggal_lahir'=>'02-02-1991', 'tinggi' => 165,
					'pekerjaan'=>'programmer', 'no_sim' => '123124343'),
				array('id'=>2, 'nama'=>'budi', 'alamat' => 'jalan danau limboto c5 d1 malang'
					, 'tempat_lahir'=> 'malang', 'tanggal_lahir'=>'05-01-1990', 'tinggi' => 170,
					'pekerjaan'=>'PNS', 'no_sim' => '9483984398')
				)
			);

	}

}
