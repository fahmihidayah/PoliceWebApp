<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Pelanggaran extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'pelanggaran';

	public function pengendara()
	{
		return $this->belongsTo('Pengendara', 'pengendara_id');
	}

	public function pasal()
	{
		return $this->belongsTo('Pasal', 'pasal_id');
	}
}
