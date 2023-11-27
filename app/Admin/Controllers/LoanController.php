<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Loan;

class LoanController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Loan';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Loan());

        $grid->column('id', __('Id'));
        $grid->column('member_id', __('Member id'));
        $grid->column('first_name', __('First name'));
        $grid->column('middle_name', __('Middle name'));
        $grid->column('last_name', __('Last name'));
        $grid->column('address', __('Address'));
        $grid->column('contact_number', __('Contact number'));
        $grid->column('nature_of_loan', __('Nature of loan'));
        $grid->column('date_of_loan_application', __('Date of loan application'));
        $grid->column('monthly_salary', __('Monthly salary'));
        $grid->column('other_income', __('Other income'));
        $grid->column('less_deduction', __('Less deduction'));
        $grid->column('monthly_net_pay', __('Monthly net pay'));
        $grid->column('term_of_loan', __('Term of loan'));
        $grid->column('name_of_comaker', __('Name of comaker'));
        $grid->column('loan_balance', __('Loan balance'));
        $grid->column('approved_loan_amount', __('Approved loan amount'));
        $grid->column('notes_and_comments', __('Notes and comments'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('interest', __('Interest'));
        $grid->column('payments', __('Payments'));

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
        $show = new Show(Loan::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('member_id', __('Member id'));
        $show->field('first_name', __('First name'));
        $show->field('middle_name', __('Middle name'));
        $show->field('last_name', __('Last name'));
        $show->field('address', __('Address'));
        $show->field('contact_number', __('Contact number'));
        $show->field('nature_of_loan', __('Nature of loan'));
        $show->field('date_of_loan_application', __('Date of loan application'));
        $show->field('monthly_salary', __('Monthly salary'));
        $show->field('other_income', __('Other income'));
        $show->field('less_deduction', __('Less deduction'));
        $show->field('monthly_net_pay', __('Monthly net pay'));
        $show->field('term_of_loan', __('Term of loan'));
        $show->field('name_of_comaker', __('Name of comaker'));
        $show->field('loan_balance', __('Loan balance'));
        $show->field('approved_loan_amount', __('Approved loan amount'));
        $show->field('notes_and_comments', __('Notes and comments'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('interest', __('Interest'));
        $show->field('payments', __('Payments'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Loan());

        $form->number('member_id', __('Member id'));
        $form->text('first_name', __('First name'));
        $form->text('middle_name', __('Middle name'));
        $form->text('last_name', __('Last name'));
        $form->textarea('address', __('Address'));
        $form->text('contact_number', __('Contact number'));
        $form->text('nature_of_loan', __('Nature of loan'));
        $form->date('date_of_loan_application', __('Date of loan application'))->default(date('Y-m-d'));
        $form->decimal('monthly_salary', __('Monthly salary'));
        $form->decimal('other_income', __('Other income'));
        $form->decimal('less_deduction', __('Less deduction'));
        $form->decimal('monthly_net_pay', __('Monthly net pay'));
        $form->text('term_of_loan', __('Term of loan'));
        $form->text('name_of_comaker', __('Name of comaker'));
        $form->decimal('loan_balance', __('Loan balance'));
        $form->decimal('approved_loan_amount', __('Approved loan amount'));
        $form->text('notes_and_comments', __('Notes and comments'));
        $form->decimal('interest', __('Interest'));
        $form->decimal('payments', __('Payments'));

        return $form;
    }
}
