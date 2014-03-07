<?php

require_once '../vendor/function_mock.php';
require_once '../custom_thing_login.module';

class CustomThingTest extends PHPUnit_Framework_TestCase{

  public function testThingLoginPermissionTest() {
    FunctionMock::createMockFunctionDefinition('t');

    FunctionMock::stub('t', 'login without remote_api', array('login without remote_api'));
    FunctionMock::stub('t', 'Login to the site without remote_api authentication.', array('Login to the site without remote_api authentication.'));

    $result = custom_thing_login_permission();
    $this->assertEquals($result['login without remote_api']['title'], 'login without remote_api');
    $this->assertEquals($result['login without remote_api']['description'], 'Login to the site without remote_api authentication.');
  }
  
  
  public function testThingLoginInitTest() {
    
  }  
}
