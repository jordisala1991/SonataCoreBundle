<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\CoreBundle\Twig\Extension;

if (!class_exists(\Sonata\Twig\Extension\TemplateExtension::class, false)) {
    @trigger_error(
        'The '.__NAMESPACE__.'\TemplateExtension class is deprecated since version 3.x and will be removed in 4.0.'
        .' Use Sonata\Twig\Extension\TemplateExtension instead.',
        E_USER_DEPRECATED
    );
}

class_alias(
    \Sonata\Twig\Extension\TemplateExtension::class,
    __NAMESPACE__.'\TemplateExtension'
);

if (false) {
    /**
     * @deprecated Since version 3.x, to be removed in 4.0.
     */
    class TemplateExtension extends \Sonata\Twig\Extension\TemplateExtension
    {
    }
}
