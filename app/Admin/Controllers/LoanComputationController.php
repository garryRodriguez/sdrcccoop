<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\LoanComputation;

class LoanComputationController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'LoanComputation';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new LoanComputation());

        $grid->column('id', __('Id'));
        $grid->column('loan_id', __('Loan id'));
        $grid->column('principal_amount', __('Principal amount'));
        $grid->column('interest_amount', __('Interest amount'));
        $grid->column('service_charge', __('Service charge'));
        $grid->column('capital_build_up', __('Capital build up'));
        $grid->column('membership_fee', __('Membership fee'));
        $grid->column('loan_balance', __('Loan balance'));
        $grid->column('net_proceeds', __('Net proceeds'));
        $grid->column('monthly_amortization', __('Monthly amortization'));
        $grid->column('per_payroll_deduction', __('Per payroll deduction'));
        $grid->column('loan_status', __('Loan status'));
        $grid->column('approved_by', __('Approved by'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('term_of_payment', __('Term of payment'));

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
        $show = new Show(LoanComputation::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('loan_id', __('Loan id'));
        $show->field('principal_amount', __('Principal amount'));
        $show->field('interest_amount', __('Interest amount'));
        $show->field('service_charge', __('Service charge'));
        $show->field('capital_build_up', __('Capital build up'));
        $show->field('membership_fee', __('Membership fee'));
        $show->field('loan_balance', __('Loan balance'));
        $show->field('net_proceeds', __('Net proceeds'));
        $show->field('monthly_amortization', __('Monthly amortization'));
        $show->field('per_payroll_deduction', __('Per payroll deduction'));
        $show->field('loan_status', __('Loan status'));
        $show->field('approved_by', __('Approved by'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('term_of_payment', __('Term of payment'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new LoanComputation());

        $form->number('loan_id', __('Loan id'));
        $form->decimal('principal_amount', __('Principal amount'));
        $form->decimal('interest_amount', __('Interest amount'));
        $form->decimal('service_charge', __('Service charge'));
        $form->decimal('capital_build_up', __('Capital build up'));
        $form->decimal('membership_fee', __('Membership fee'));
        $form->decimal('loan_balance', __('Loan balance'));
        $form->decimal('net_proceeds', __('Net proceeds'));
        $form->decimal('monthly_amortization', __('Monthly amortization'));
        $form->decimal('per_payroll_deduction', __('Per payroll deduction'));
        $form->text('loan_status', __('Loan status'));
        $form->text('approved_by', __('Approved by'));
        $form->number('term_of_payment', __('Term of payment'));

        return $form;
    }
}
