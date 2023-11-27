<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Member;

class MemberController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Member';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Member());

        $grid->column('id', __('Id'));
        $grid->column('first_name', __('First name'));
        $grid->column('middle_name', __('Middle name'));
        $grid->column('last_name', __('Last name'));
        $grid->column('image', __('Image'));
        $grid->column('date_of_birth', __('Date of birth'));
        $grid->column('place_of_birth', __('Place of birth'));
        $grid->column('contact_number', __('Contact number'));
        $grid->column('email_address', __('Email address'));
        $grid->column('no_of_dependents', __('No of dependents'));
        $grid->column('religion', __('Religion'));
        $grid->column('nationality', __('Nationality'));
        $grid->column('present_address', __('Present address'));
        $grid->column('civil_status', __('Civil status'));
        $grid->column('spouse_first_name', __('Spouse first name'));
        $grid->column('spouse_middle_name', __('Spouse middle name'));
        $grid->column('spouse_last_name', __('Spouse last name'));
        $grid->column('spouse_date_of_birth', __('Spouse date of birth'));
        $grid->column('spouse_contact_number', __('Spouse contact number'));
        $grid->column('spouse_spouse_occupation', __('Spouse spouse occupation'));
        $grid->column('spouse_employer_name', __('Spouse employer name'));
        $grid->column('spouse_employer_contact_no', __('Spouse employer contact no'));
        $grid->column('spouse_monthly_income', __('Spouse monthly income'));
        $grid->column('spouse_employment_status', __('Spouse employment status'));
        $grid->column('spouse_employment_length_service', __('Spouse employment length service'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('deleted_at', __('Deleted at'));

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
        $show = new Show(Member::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('first_name', __('First name'));
        $show->field('middle_name', __('Middle name'));
        $show->field('last_name', __('Last name'));
        $show->field('image', __('Image'));
        $show->field('date_of_birth', __('Date of birth'));
        $show->field('place_of_birth', __('Place of birth'));
        $show->field('contact_number', __('Contact number'));
        $show->field('email_address', __('Email address'));
        $show->field('no_of_dependents', __('No of dependents'));
        $show->field('religion', __('Religion'));
        $show->field('nationality', __('Nationality'));
        $show->field('present_address', __('Present address'));
        $show->field('civil_status', __('Civil status'));
        $show->field('spouse_first_name', __('Spouse first name'));
        $show->field('spouse_middle_name', __('Spouse middle name'));
        $show->field('spouse_last_name', __('Spouse last name'));
        $show->field('spouse_date_of_birth', __('Spouse date of birth'));
        $show->field('spouse_contact_number', __('Spouse contact number'));
        $show->field('spouse_spouse_occupation', __('Spouse spouse occupation'));
        $show->field('spouse_employer_name', __('Spouse employer name'));
        $show->field('spouse_employer_contact_no', __('Spouse employer contact no'));
        $show->field('spouse_monthly_income', __('Spouse monthly income'));
        $show->field('spouse_employment_status', __('Spouse employment status'));
        $show->field('spouse_employment_length_service', __('Spouse employment length service'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('deleted_at', __('Deleted at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Member());

        $form->text('first_name', __('First name'));
        $form->text('middle_name', __('Middle name'));
        $form->text('last_name', __('Last name'));
        $form->textarea('image', __('Image'));
        $form->date('date_of_birth', __('Date of birth'))->default(date('Y-m-d'));
        $form->text('place_of_birth', __('Place of birth'));
        $form->text('contact_number', __('Contact number'));
        $form->text('email_address', __('Email address'));
        $form->text('no_of_dependents', __('No of dependents'));
        $form->text('religion', __('Religion'));
        $form->text('nationality', __('Nationality'));
        $form->textarea('present_address', __('Present address'));
        $form->text('civil_status', __('Civil status'));
        $form->text('spouse_first_name', __('Spouse first name'));
        $form->text('spouse_middle_name', __('Spouse middle name'));
        $form->text('spouse_last_name', __('Spouse last name'));
        $form->date('spouse_date_of_birth', __('Spouse date of birth'))->default(date('Y-m-d'));
        $form->text('spouse_contact_number', __('Spouse contact number'));
        $form->text('spouse_spouse_occupation', __('Spouse spouse occupation'));
        $form->text('spouse_employer_name', __('Spouse employer name'));
        $form->text('spouse_employer_contact_no', __('Spouse employer contact no'));
        $form->text('spouse_monthly_income', __('Spouse monthly income'));
        $form->text('spouse_employment_status', __('Spouse employment status'));
        $form->text('spouse_employment_length_service', __('Spouse employment length service'));

        return $form;
    }
}
