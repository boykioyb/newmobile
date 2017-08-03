<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$table = [
			[
				'fullname' => 'Tran Quang Hoa',
				'username' => 'boykioyb',
				'email'    => 'boykioyb96@gmail.com',
				'password' => Hash::make('hoathan'),
				'age'      => 21,
				'date'     => '1996-07-25',
				'address'  => 'Nghia Lo - Van Chan - Yen Bai',
				'phone'    => '0979008320',
				'avatar'   => 'img/default.png',
				'status'   => 'active',
			],
			[
				'fullname' => 'admin',
				'username' => 'admin',
				'email'    => 'admin@gmail.com',
				'password' => Hash::make('admin'),
				'age'      => 21,
				'date'     => '1996-07-25',
				'address'  => 'Nghia Lo - Van Chan - Yen Bai',
				'phone'    => '0979008320',
				'avatar'   => 'img/default.png',
				'status'   => 'active',
			],

		];
		foreach ($table as $key => $value) {
			DB::table('user')->insert($value);
		}
	}
}
