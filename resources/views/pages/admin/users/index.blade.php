@extends('layouts.main')
@section('title', 'Users')
@section('content')

<div class="main_content_iner ">
    <div class="container-fluid p-0 ">
    <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="white_card card_height_100 mb_30">
                            <div class="white_card_body">
                                <div class="QA_section">
                                    <div class="white_box_tittle list_header">
                                        <h4>Users List</h4>
                                        <div class="box_right d-flex lms_block">
                                            <div class="serach_field_2">
                                                <div class="search_inner">
                                                    <form Active="#">
                                                        <div class="search_field">
                                                            <input type="text" placeholder="Search content here...">
                                                        </div>
                                                        <button type="submit"> <i class="ti-search"></i> </button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="add_button ms-2">
                                                <a href="{{ route('users.create') }}" class="btn_1">Add New</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="QA_table mb_30">

                                        <table class="table lms_table_active ">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Avatar</th>
                                                    <th scope="col">Fullname</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Phone #</th>
                                                    <th scope="col">Address</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                    </div>
                </div>
    </div>
</div>
@endsection
