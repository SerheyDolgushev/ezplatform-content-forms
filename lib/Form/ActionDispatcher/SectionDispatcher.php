<?php

/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
namespace EzSystems\RepositoryForms\Form\ActionDispatcher;

use EzSystems\RepositoryForms\Event\RepositoryFormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SectionDispatcher extends AbstractActionDispatcher
{
    protected function configureOptions(OptionsResolver $resolver)
    {
        // Nothing to do.
    }

    protected function getActionEventBaseName()
    {
        return RepositoryFormEvents::SECTION_UPDATE;
    }
}
