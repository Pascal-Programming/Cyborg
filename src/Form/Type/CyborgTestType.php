<?php

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;

class CyborgTestType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('medical-implants', CheckboxType::class, [
                'label' => 'Medizinische Implantate',
                'required' => false,])
            ->add('medical-implants', CheckboxType::class, [
                'label' => 'Leistungssteigernde Implantate',
                'required' => false,]);

    }

}
