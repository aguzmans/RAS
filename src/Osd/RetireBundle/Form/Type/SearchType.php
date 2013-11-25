<?php

namespace Osd\RetireBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class SearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {    
            $builder->add('omang', 'text', array('required' => false))
            ->add('workerName', 'text', array('required' => false))
            ->add('workerSurname', 'text', array('required' => false))
            ->add('birthDay', 'date', 
                    array('required' => false, 'years' => range(1900, date('Y'))))
            ->add('dateOfEmployment', 'date', 
                    array('required' => false, 'years' => range(1900, date('Y'))))
            ->add('fileNumber', 'text', 
                    array('required' => false))
            ->add('aIdWorkerStatus', 'entity', array('required' => false, 'class'   => 'OsdRetireBundle:WorkerStatus'
                    , 'property' => 'description', 'empty_value' => 'All'))
            ->add('search', 'submit');
    }
    public function getName()
    {
        return 'worker';
    }
}
?>
