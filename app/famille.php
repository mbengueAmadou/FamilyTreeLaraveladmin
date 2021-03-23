<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Encore\Admin\Traits\AdminBuilder;
use Encore\Admin\Traits\ModelTree;

class famille extends Model
{
    use ModelTree, AdminBuilder;

    protected $table = 'famille';

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setParentColumn('pid');
        $this->setOrderColumn('sort');
        $this->setTitleColumn('nom');
    }
}
