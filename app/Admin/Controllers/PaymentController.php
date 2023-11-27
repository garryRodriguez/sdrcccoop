<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Payment;

class PaymentController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Payment';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Payment());

        $grid->column('id', __('Id'));
        $grid->column('member_id', __('Member id'));
        $grid->column('loan_id', __('Loan id'));
        $grid->column('principal_amount', __('Principal amount'));
        $grid->column('date_of_payment', __('Date of payment'));
        $grid->column('interest_payment', __('Interest payment'));
        $grid->column('total_amount_paid', __('Total amount paid'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Payment::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('member_id', __('Member id'));
        $show->field('loan_id', __('Loan id'));
        $show->field('principal_amount', __('Principal amount'));
        $show->field('date_of_payment', __('Date of payment'));
        $show->field('interest_payment', __('Interest payment'));
        $show->field('total_amount_paid', __('Total amount paid'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Payment());

        $form->number('member_id', __('Member id'));
        $form->number('loan_id', __('Loan id'));
        $form->decimal('principal_amount', __('Principal amount'));
        $form->date('date_of_payment', __('Date of payment'))->default(date('Y-m-d'));
        $form->decimal('interest_payment', __('Interest payment'));
        $form->decimal('total_amount_paid', __('Total amount paid'));

        return $form;
    }
}
