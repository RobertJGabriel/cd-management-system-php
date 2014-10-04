<?php

namespace assessmentOne\Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class deleteCd extends AbstractType
{
    public function  buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('Id','text')->add('Delete','submit');

    }

    public function getId(){

        return 'id';
    }


    public function getName(){

        return 'name';
    }

}


?>