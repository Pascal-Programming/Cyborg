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
            ->add('cyborg1', CheckboxType::class, [
                'label' => '1',
                'required' => false,])
            ->add('cyborg2', CheckboxType::class, [
                'label' => '2',
                'required' => false,])
            ->add('cyborg3', CheckboxType::class, [
                'label' => '3',
                'required' => false,])
            ->add('cyborg4', CheckboxType::class, [
                'label' => '4',
                'required' => false,]);

    }

}
