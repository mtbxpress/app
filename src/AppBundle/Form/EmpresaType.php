<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;




class EmpresaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nombreEmpresa',TextType::class)
                ->add('ciudadEmpresa')
                ->add('comentarioEmpresa')
                ->add('fechaInsercion',DateTimeType::class)
                ->add('Aceptar',SubmitType::class)
                ->add('Borrar',ResetType::class);

    /* TIPO TEXTO   HAY QUE IMPORTARLOS SI SE VAN A UTILIZAR, SINO SE PONE NADA, POR DEFECTO LO DETERMINA SOLO EL TIPO DE DATO
    TextType / TextareaType / EmailType / IntegerType / MoneyType / NumberType / PasswordType / PercentType / SearchType / UrlType / RangeType*/

    /* CAMPOS SELECT
    ChoiceType / EntityType / CountryType / LanguageType / LocaleType / TimezoneType / CurrencyType*/

    /* DATE AND TIME
    DateType / DateIntervalType / DateTimeType / TimeType / BirthdayType*/

    /* Other Fields
    CheckboxType / FileType / RadioType / */
  
    /* Field Groups
    CollectionType / RepeatedType*/
    
    /* Hidden Fields
    HiddenType */

    /* Buttons
    ButtonType / ResetType /SubmitType */

    /* Base Fields
    FormType*/
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Empresa'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_empresa';
    }


}
