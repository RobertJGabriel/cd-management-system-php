<?php

namespace Acme\DemoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class updateCd extends AbstractType
{
    public function  buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('id','text')->add('name','text')-> add('song','text')->add('story','text')->add('price','number')->add('submit','submit');

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