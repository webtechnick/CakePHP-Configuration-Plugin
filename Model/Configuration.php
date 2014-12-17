<?php
App::uses('ConfigurationAppModel','Configuration.Model');
class Configuration extends ConfigurationAppModel {
  var $name = 'Configuration';

  var $validate =  array(
          'name' => array(
            'NotEmpty' => array(
              'rule'    => 'notEmpty',
              'message' => 'No variable name specified'
            ),
            'Unique' => array(
              'rule' => 'isUnique',
              'message' => 'Name must be unique.'
            )
          )
      );
   
  function load($prefix = 'CFG'){
    $settings = $this->find('all');
    foreach ($settings as $variable){
      Configure::write("$prefix.{$variable['Configuration']['name']}",$variable['Configuration']['value']);
    }
  }
  
  /**
  * Save a configuration
  */
  function saveConfig($key, $value){
  	$result = $this->find('first', array(
  		'conditions' => array('Configuration.name' => $key)
  	));
  	if (!empty($result)) {
  		$this->id = $result['Configuration']['id'];
  		return $this->saveField('value', $value);
  	} else {
  		return $this->save(array(
  			'name' => $key,
  			'value' => $value
  		));
  	}
  }
}
?>
