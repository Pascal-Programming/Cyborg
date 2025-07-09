<?php

namespace App\Form\Type;

use Symfony\Bundle\FrameworkBundle\Translation\Translator;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Contracts\Translation\TranslatorInterface;

class CyborgTestType extends AbstractType
{
    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cyborg1', CheckboxType::class, [
                'label' => $this->translator->trans('cyborg.formLabel1'),
                'required' => false,])
            ->add('cyborg2', CheckboxType::class, [
                'label' => $this->translator->trans('cyborg.formLabel2'),
                'required' => false,])
            ->add('cyborg3', CheckboxType::class, [
                'label' => $this->translator->trans('cyborg.formLabel3'),
                'required' => false,])
            ->add('cyborg4', CheckboxType::class, [
                'label' => $this->translator->trans('cyborg.formLabel4'),
                'required' => false,]);

    }

}
