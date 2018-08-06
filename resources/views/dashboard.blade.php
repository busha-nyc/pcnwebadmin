@extends('layouts.app')

    @section('content')
    <div class="container">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" href="#">Students</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="#">Grades</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="#">Contacts</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="#">Calendar</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Donors</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Templates</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="#">Minutes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">Admin</a>
        </li>
        </ul>
       
    </div>
    @endsection