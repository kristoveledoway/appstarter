<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataDiri extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'		=> [
				'type'				=> 'INT',
				'constraint'		=> 3,
				'unsigned'			=> true,
				'auto_increment'	=> true,
			],
			'nama'		=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> '100',
			],
			'nik'	=> [
				'type'				=> 'INT',
				'constraint'		=>  16,
			],
			'tempat_lahir'	=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> '100',
			],
			'tanggal_lahir'		=> [
				'type'				=> 'DATE',
			],
			'jk'	=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> '20',
			],
			'kewarganegaraan'	=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> '100',
			],
			'agama'	=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> '100',
			],
			'nama_ibu'	=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> '100',
			],
			'email'	=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> '50',
			],
			'no_telp'	=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> '12',
			],
			'alamat'	=> [
				'type'				=> 'TEXT',
			],
			'kode_pos'	=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> '6',
			],
			'provinsi'	=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> '100',
			],
			'kabupaten'	=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> '200',
			],
			'kecamatan'	=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> '200',
			],
			'pendidikan'	=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> '200',
			],
			'sekolah'	=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> '200',
			],
			'kampus'	=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> '200',
			],
			'prodi'	=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> '100',
			]
		]);
		$this->forge->addPrimaryKey('id');
		$this->forge->createTable('data_diri');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('data_diri');
	}
}
