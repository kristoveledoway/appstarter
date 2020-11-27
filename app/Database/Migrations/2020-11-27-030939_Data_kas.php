<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataKas extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'kode'		=> [
				'type'				=> 'INT',
				'constraint'		=> 3,
				'unsigned'			=> true,
				'auto_increment'	=> true,
			],
			'keterangan'	=> [
				'type'				=> 'TEXT',
			],
			'tgl'	=> [
				'type'				=> 'DATE',
			],
			'jumlah_masuk'	=> [
				'type'				=> 'INT',
				'constraint'		=>  100,
			],
			'jenis'	=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> '100',
			],
			'jenis_kas'	=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> '20',
			],
			'jumlah_keluar'		=> [
				'type'				=> 'INT',
				'constraint'		=> 100,
			]
		]);
		$this->forge->addPrimaryKey('kode');
		$this->forge->createTable('data_kas');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('data_kas');
	}
}
