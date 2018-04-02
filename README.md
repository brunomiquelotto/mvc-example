# mvc-example
PHP MVC Boilerplate


### DB Usage:

##### Instantiation

    $db = new DB();

##### Insert

    $user = array(
    	'name' => 'Bruno',
    	'email' => 'bruno@email.com',
    	'password' => '123456'
    );
    $db->insert('users', $user);
