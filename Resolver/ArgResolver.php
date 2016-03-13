<?php

/*
 * This file is part of the OverblogGraphQLBundle package.
 *
 * (c) Overblog <http://github.com/overblog/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Overblog\GraphQLBundle\Resolver;

class ArgResolver extends AbstractSimpleResolver
{
    protected function unresolvableMessage($alias)
    {
        return sprintf('Unknown arg with alias "%s" (verified service tag)', $alias);
    }
}
