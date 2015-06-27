<?php

namespace CC\AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class ZoneAdmin extends Admin
{
    protected $baseRoutePattern = 'zone';

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name', 'text', ['label' => 'Zone Name'])
            ->add('origin', 'text', ['label' => 'Zone Origin'])
            ->add('domain', 'text', ['label' => 'Zone Domain'])
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name')
            ->add('origin')
            ->add('domain')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name')
            ->add('origin')
            ->add('domain')
        ;
    }
}
