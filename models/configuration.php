<?php
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
   
  function load(){
    $settings = $this->find('all');
    foreach ($settings as $variable){
      Configure::write("CFG.{$variable['Configuration']['name']}",$variable['Configuration']['value']);
    }
  }
}
?>
