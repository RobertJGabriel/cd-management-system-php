<?php

namespace assessmentOne\Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class cdType extends AbstractType
{
    public function  buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name','text')-> add('song','text')->add('story','text')->add('price','number')->add('Add','submit');

    }
    public function getId(){

        return 'id';
    }
    public function getName(){

        return 'name';
    }
    public function getSong(){

        return 'song';
    }

    public function getStory(){

        return 'story';
    }


    public function getPrice(){

        return 'price';
    }
}


?>