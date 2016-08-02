@extends('layouts.admin_layout')
@section('content')
<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Table Examples</h2>   
                        <h5>Welcome Jhon Deo , Love to see you back. </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Advanced Tables
                            <div class="add-members" style="float: right;">
                                <a href="{{ route('admin.add-blogs') }}">Add Blogs</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td>1</td>
                                            <td>Abc Pqr</td>
                                            <td>jdfjhgj dfbdjfbd dnngbn kjgfjngbk gbifg fgfghiufg fbfgfghfgfjh fgjbkjfg fgkfjg fkgfghkf fgfjhgkf fkgfhg fgkjfgbk fgfkjg fgkjf jdfjhgj dfbdjfbd dnngbn kjgfjngbk gbifg fgfghiufg fbfgfghfgfjh fgjbkjfg fgkfjg fkgfghkf fgfjhgkf fkgfhg fgkjfgbk fgfkjg fgkjf</td>
                                            <td><img class="user-image img-responsive" src="assets/img/find_user.png"></td>
                                             <td>Action</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>1</td>
                                            <td>Abc Pqr</td>
                                            <td>jdfjhgj dfbdjfbd dnngbn kjgfjngbk gbifg fgfghiufg fbfgfghfgfjh fgjbkjfg fgkfjg fkgfghkf fgfjhgkf fkgfhg fgkjfgbk fgfkjg fgkjf</td>
                                            <td><img class="user-image img-responsive" src="assets/img/find_user.png"></td>
                                             <td>Action</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>1</td>
                                            <td>Abc Pqr</td>
                                            <td>jdfjhgj dfbdjfbd dnngbn kjgfjngbk gbifg fgfghiufg fbfgfghfgfjh fgjbkjfg fgkfjg fkgfghkf fgfjhgkf fkgfhg fgkjfgbk fgfkjg fgkjf</td>
                                            <td><img class="user-image img-responsive" src="assets/img/find_user.png"></td>
                                             <td>Action</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>1</td>
                                            <td>Abc Pqr</td>
                                            <td>jdfjhgj dfbdjfbd dnngbn kjgfjngbk gbifg fgfghiufg fbfgfghfgfjh fgjbkjfg fgkfjg fkgfghkf fgfjhgkf fkgfhg fgkjfgbk fgfkjg fgkjf</td>
                                            <td><img class="user-image img-responsive" src="assets/img/find_user.png"></td>
                                             <td>Action</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>1</td>
                                            <td>Abc Pqr</td>
                                            <td>jdfjhgj dfbdjfbd dnngbn kjgfjngbk gbifg fgfghiufg fbfgfghfgfjh fgjbkjfg fgkfjg fkgfghkf fgfjhgkf fkgfhg fgkjfgbk fgfkjg fgkjf</td>
                                            <td><img class="user-image img-responsive" src="assets/img/find_user.png"></td>
                                             <td>Action</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>1</td>
                                            <td>Abc Pqr</td>
                                            <td>jdfjhgj dfbdjfbd dnngbn kjgfjngbk gbifg fgfghiufg fbfgfghfgfjh fgjbkjfg fgkfjg fkgfghkf fgfjhgkf fkgfhg fgkjfgbk fgfkjg fgkjf</td>
                                            <td><img class="user-image img-responsive" src="assets/img/find_user.png"></td>
                                             <td>Action</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>1</td>
                                            <td>Abc Pqr</td>
                                            <td>jdfjhgj dfbdjfbd dnngbn kjgfjngbk gbifg fgfghiufg fbfgfghfgfjh fgjbkjfg fgkfjg fkgfghkf fgfjhgkf fkgfhg fgkjfgbk fgfkjg fgkjf</td>
                                            <td><img class="user-image img-responsive" src="assets/img/find_user.png"></td>
                                             <td>Action</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>1</td>
                                            <td>Abc Pqr</td>
                                            <td>jdfjhgj dfbdjfbd dnngbn kjgfjngbk gbifg fgfghiufg fbfgfghfgfjh fgjbkjfg fgkfjg fkgfghkf fgfjhgkf fkgfhg fgkjfgbk fgfkjg fgkjf</td>
                                            <td><img class="user-image img-responsive" src="assets/img/find_user.png"></td>
                                             <td>Action</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>1</td>
                                            <td>Abc Pqr</td>
                                            <td>jdfjhgj dfbdjfbd dnngbn kjgfjngbk gbifg fgfghiufg fbfgfghfgfjh fgjbkjfg fgkfjg fkgfghkf fgfjhgkf fkgfhg fgkjfgbk fgfkjg fgkjf</td>
                                            <td><img class="user-image img-responsive" src="assets/img/find_user.png"></td>
                                             <td>Action</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>1</td>
                                            <td>Abc Pqr</td>
                                            <td>jdfjhgj dfbdjfbd dnngbn kjgfjngbk gbifg fgfghiufg fbfgfghfgfjh fgjbkjfg fgkfjg fkgfghkf fgfjhgkf fkgfhg fgkjfgbk fgfkjg fgkjf</td>
                                            <td><img class="user-image img-responsive" src="assets/img/find_user.png"></td>
                                             <td>Action</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>1</td>
                                            <td>Abc Pqr</td>
                                            <td>jdfjhgj dfbdjfbd dnngbn kjgfjngbk gbifg fgfghiufg fbfgfghfgfjh fgjbkjfg fgkfjg fkgfghkf fgfjhgkf fkgfhg fgkjfgbk fgfkjg fgkjf</td>
                                            <td><img class="user-image img-responsive" src="assets/img/find_user.png"></td>
                                             <td>Action</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>1</td>
                                            <td>Abc Pqr</td>
                                            <td>jdfjhgj dfbdjfbd dnngbn kjgfjngbk gbifg fgfghiufg fbfgfghfgfjh fgjbkjfg fgkfjg fkgfghkf fgfjhgkf fkgfhg fgkjfgbk fgfkjg fgkjf</td>
                                            <td><img class="user-image img-responsive" src="assets/img/find_user.png"></td>
                                             <td>Action</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>1</td>
                                            <td>Abc Pqr</td>
                                            <td>jdfjhgj dfbdjfbd dnngbn kjgfjngbk gbifg fgfghiufg fbfgfghfgfjh fgjbkjfg fgkfjg fkgfghkf fgfjhgkf fkgfhg fgkjfgbk fgfkjg fgkjf</td>
                                            <td><img class="user-image img-responsive" src="assets/img/find_user.png"></td>
                                             <td>Action</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>1</td>
                                            <td>Abc Pqr</td>
                                            <td>jdfjhgj dfbdjfbd dnngbn kjgfjngbk gbifg fgfghiufg fbfgfghfgfjh fgjbkjfg fgkfjg fkgfghkf fgfjhgkf fkgfhg fgkjfgbk fgfkjg fgkjf</td>
                                            <td><img class="user-image img-responsive" src="assets/img/find_user.png"></td>
                                             <td>Action</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
        </div>
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
        @endsection