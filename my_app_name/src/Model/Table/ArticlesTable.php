<?php

namespace App\Model\Table;

use Cake\ORM\Table;
// the Tet class
use Cake\Utility\Text;
// the EventInterface class
use Cake\Event\EventInterface;
//the validator class
use Cake\Validation\Validator;

class ArticlesTable extends Table{
    public function initialize(array $config):void  //void is basically return type
    {
        $this->addBehavior('Timestamp');

    }

    // it generate sample slug
    public function beforeSave(EventInterface $event,$entity,$options){
        if($entity->isNew() && !$entity->slug){
            $sluggedTitle=Text::slug($entity->title);
            // trim slug to maxium length defined in schema
            $entity->slug=substr($sluggedTitle,0,191);
        }
    }
    // validate our data
    public function validationDefault(Validator $validator): Validator
    {
        $validator->notEmptyString('title')
        ->minLength('title',10)
        ->maxLength('title',255)
        ->notEmptyString('body')
        ->minLength('body',10);

        return $validator;
    
    }

}



?>