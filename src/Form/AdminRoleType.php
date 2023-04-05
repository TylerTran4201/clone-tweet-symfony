<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class AdminRoleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('roles', ChoiceType::class, [
            'expanded' => true,
            'multiple' => true,
            'choices' => [
                'Quyền Khóa Tài Khoản' => 'ROLE_ADMIN_LOCK',
                'Quyền Chỉnh Sửa Bài Viết' => 'ROLE_ADMIN_EDIT',
                'Quyền Xóa Bài Viết' => 'ROLE_ADMIN_REMOVE',
                'Toàn Quyền' => 'ROLE_ADMIN',
            ],
        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
