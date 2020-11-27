<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataSuratKeluar extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_surat_keluar'		=> [
				'type'				=> 'INT',
				'constraint'		=> 15,
				'unsigned'			=> true,
				'auto_increment'	=> true,
			],
			'no_surat_keluar'	=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> '15'
			],
			'tgl_surat'	=> [
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
			'no_surat_masuk'	=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> '15',
			],
			'file'	=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> '200',
			],
			'file'	=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> '200',
			]
		]);
		$this->forge->addPrimaryKey('id_surat_keluar');
		$this->forge->createTable('data_surat_keluar');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('data_surat_keluar');
	}
}
