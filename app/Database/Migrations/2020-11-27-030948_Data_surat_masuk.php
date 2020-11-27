<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataSuratMasuk extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_surat_masuk'		=> [
				'type'				=> 'INT',
				'constraint'		=> 15,
				'unsigned'			=> true,
				'auto_increment'	=> true,
			],
			'no_surat_masuk'	=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> '15'
			],
			'tgl_surat'	=> [
				'type'	=> 'DATE',
			],
			'tgl_diterima'	=> [
				'type'	=> 'DATE',
			],
			'prihal'	=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> '255',
			],
			'sifat'	=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> '100',
			],
			'lampiran'	=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> '255',
			],
			'file'	=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> '255',
			]
		]);
		$this->forge->addPrimaryKey('id_surat_masuk');
		$this->forge->createTable('data_surat_masuk');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('data_surat_masuk');
	}
}
