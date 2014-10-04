<?php

namespace  assessmentOne\Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class search extends AbstractType
{
    public function  buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('Id','number')->add('search','submit');

    }

    public function getId(){

        return 'Id';
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