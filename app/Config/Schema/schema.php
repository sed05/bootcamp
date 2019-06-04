<?php 
App::uses('User', 'Model');
class AppSchema extends CakeSchema {


	public function before($event = array()) {
		return true;
	}

	public function after($event = array()) {
		if (isset($event['create'])) {
	        switch ($event['create']) {
	            case 'users':
	                App::uses('ClassRegistry', 'Utility');
	                $post = ClassRegistry::init('User');
	                $post->create();
	                $post->save(
	                    array('User' =>
	                        array(
	                        	'id' => '1',
	                        	'username' => 'admin',
	                        	'password' => '$2a$10$ytNReQ8ztxzfqlMmhDzg6OJQSDac2xcOlFc2Dn84Bq/6P2yQ0JfL.',
	                        	'firstname' => 'Admin',
	                        	'middlename' => 'Admin',
	                        	'lastname' => 'Admin',
	                        	'active' => '1',
	                        	'last_login' => '2019-06-04 06:05:10',
	                        	'tokenhash' => '',
	                        	'created' => '2019-06-04 06:05:10',
	                        	'updated' => '2019-06-04 06:05:10'
	                        )
	                    )
	                );
	                break;
	        }
	    }
	}

	public $users = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => false, 'key' => 'primary'),
		'username' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'password' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'firstname' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'middlename' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'lastname' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'active' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'last_login' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'tokenhash' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'updated' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

}
