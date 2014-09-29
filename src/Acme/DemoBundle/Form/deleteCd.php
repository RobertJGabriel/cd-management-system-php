<?php

namespace Acme\DemoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class deleteCd extends AbstractType
{
    public function  buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name','text')->add('submit','submit');

    }

    public function getId(){

        return 'id';
    }


    public function getName(){

        return 'name';
    }

}


?>