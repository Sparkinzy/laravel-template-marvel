<?php

use Dcat\Admin\Admin;
use Dcat\Admin\Grid;
use Dcat\Admin\Form;
use Dcat\Admin\Grid\Filter;
use Dcat\Admin\Show;


// 默认列表倒序
Grid::resolving(function (Grid $grid) {
    $grid->rowSelector()->background(Admin::color()->dark40());
    $grid->filter(function (Filter $filter) {
        $filter->panel()->expand();
    });
    $grid->disableFilterButton();

//    $grid->disableDeleteButton();
    $grid->disableViewButton();
    $grid->disableEditButton();

    $grid->showQuickEditButton();
});
