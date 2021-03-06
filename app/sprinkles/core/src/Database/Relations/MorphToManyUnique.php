<?php

/*
 * UserFrosting (http://www.userfrosting.com)
 *
 * @link      https://github.com/userfrosting/UserFrosting
 * @copyright Copyright (c) 2019 Alexander Weissman
 * @license   https://github.com/userfrosting/UserFrosting/blob/master/LICENSE.md (MIT License)
 */

namespace UserFrosting\Sprinkle\Core\Database\Relations;

use Illuminate\Database\Eloquent\Relations\MorphToMany;
use UserFrosting\Sprinkle\Core\Database\Relations\Concerns\Unique;

/**
 * A MorphToMany relationship that reduces the related members to a unique (by primary key) set.
 *
 * @author Alex Weissman (https://alexanderweissman.com)
 *
 * @see https://github.com/laravel/framework/blob/5.4/src/Illuminate/Database/Eloquent/Relations/MorphToMany.php
 */
class MorphToManyUnique extends MorphToMany
{
    use Unique;
}
