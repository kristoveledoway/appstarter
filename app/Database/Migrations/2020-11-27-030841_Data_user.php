<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataUser extends Migration
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
				'constraint'		=> '255',
			],
			'username'	=> [
				'type'				=> 'VARCHAR',
				'constraint'		=>  '20',
			],
			'password'	=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> '20',
			],
			'level'		=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> '50',
			]
		]);
		$this->forge->addPrimaryKey('id');
		$this->forge->createTable('data_user');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('data_user');
	}
}
