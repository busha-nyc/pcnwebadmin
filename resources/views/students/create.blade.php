@extends('layouts.master')

@section('content')
<form action="{{ route('students.store') }}" method="POST">
{{ csrf_field() }}
<div class="card">
                        <div class="card-body">
                            <h4 class="card-title">New Student - Please fill in details</h4>
                            <h6 class="card-subtitle">Use this form to create a new student record.</h6>                   
                            <h3 class="card-body__title">* - Required Field</h3>
                            <br>

                            

                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="first_name" placeholder="* first name">
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>
                               

                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="last_name" placeholder="* last name">
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="email">
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="award year">
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>

                               
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <div class="select">
                                            <select class="form-control">
                                                <option>choose an award type</option>
                                                <option>PCNK</option>
                                                <option>FRED</option>
                                                <option>ERNA</option>
                                                <option>HDGR</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                    <br>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="zmdi zmdi-calendar"></i></span>
                                        </div>
                                        <input type="text" class="form-control date-picker" placeholder="date of birth">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="select">
                                            <select class="form-control">
                                                <option>* choose a gender</option>
                                                <option>male</option>
                                                <option>female</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="elementary_school_id">
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="sixth grade teacher id">
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>

                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="awardee status">
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>

                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" value="submit student">
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>
                                
                            </div>

</div>
</form>
@endsection