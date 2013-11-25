<?php

namespace Osd\RetireBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\Mapping as ORM;

class WorkerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {


        $builder->add('omang', 'text')
                ->add('workerName', 'text')
                ->add('workerSurname', 'text')
                ->add('workerTitle', 'choice', array(
                    'choices'   => array('Mr.' => 'Mr.', 
                        'Mrs.' => 'Mrs.', 
                        'Ms.' => 'Ms.')))
                ->add('idWorker', 'hidden')
                ->add('birthDay', 'date', 
                        array('years' => range(1900, date('Y'))))
                ->add('dateOfEmployment', 'date', 
                        array('required' => false, 'years' => range(1900, date('Y'))))
                ->add('fileNumber', 'text')
                ->add('aIdWorkerStatus', 'entity', array('class'   => 'OsdRetireBundle:WorkerStatus'
                    , 'property' => 'description'))
                ->add($options['action'], 'submit');
    }
    public function getName()
    {
        return 'worker';
    }
    
}
?>
