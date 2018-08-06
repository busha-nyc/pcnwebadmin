@extends('layouts.master')

@section('content')
    <header class="content__title">
                    <h1>Spotlight</h1>
                    <small>Below are some Key informational points about various components of the Program.</small>
    </header>
    <div class="card-deck">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('custom/img/headers/3.png') }}">

                            <div class="card-body">
                                <h4 class="card-title">Donations</h4>
                                <h6 class="card-subtitle">Donations still below Average Monthly Requirement</h6>

                                <p class="card-text">After a good start to the year, February donations have tailed off, and thus placing a greater average deficit for the remaining months. </p>

                                <p class="card-text">Plans for Fundraising events in each of regional will need to prioritize to make up existing deficits and bring budget in-line with current funding obligations. Daniel to provide a project amount to be raised weekly to meet funding target.</p>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('custom/img/headers/4.png') }}">

                            <div class="card-body">
                                <h4 class="card-title">Student Progress</h4>
                                <h6 class="card-subtitle">Student Report Cards Received for Christmas 2017 Term</h6>

                                <p class="card-text">A review of the Grades has idicated mixed results. The overall number of awardees meeting the 70% Benchmark Pass rate has increased over the prior term.</p>

                                <p class="card-text">Compared with the prior marking period, there were fewer students averaging 90% or higher. We will need to monitor the upcoming marking period fo further insight.</p>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('custom/img/headers/5.png') }}">

                            <div class="card-body">
                                <h4 class="card-title">Mentoring</h4>
                                <h6 class="card-subtitle">Mentoring Needed for Awardees Currently below the Required 70% Benchmark.</h6>

                                <p class="card-text">Based on the reports received, 4 awardees have fallen below the 70% benchmark level for mintaining good academic standing in the program. Appropriate steps will have to be taken to get each of these awardees back on track.</p>

                                 <p class="card-text">Board members will need to lead the charge to ensure that awardees are challenged and encourage to perform.</p>
                            </div>
                        </div>
                        
                    </div>
        <hr />
        <div class="card-deck">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('custom/img/headers/3.png') }}">

                            <div class="card-body">
                                <h4 class="card-title">Kids Club</h4>
                                <h6 class="card-subtitle">Kids Club Presenting Challenges</h6>

                                <p class="card-text">There has been a concerted effort to engage the awardees and the WhatsApp group despite it challenges have gotten some traction.</p>

                                <p class="card-text">We will need to use the medium as a way of getting the Kids Club functional.</p>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('custom/img/headers/4.png') }}">

                            <div class="card-body">
                                <h4 class="card-title">Volunteer</h4>
                                <h6 class="card-subtitle">Volunteer Activity Ongoing</h6>

                                <p class="card-text">Based on Principal feedback, a number of awardees have fulfilled their volunteer commitment. </p>

                                <p>One area for concern is that awardees often do not report to the office making the activity harder to track</p>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('custom/img/headers/5.png') }}">

                            <div class="card-body">
                                <h4 class="card-title">Parents Association</h4>
                                <h6 class="card-subtitle">Higher Parent Engagement Required</h6>

                                <p class="card-text">Meeting held with Parents Regarding the need to be more engaged. Conversations were candid and  open.</p>
                                <p>Commitment in place to have more effective and engage parental support.</p>
                            </div>
                        </div>
                        
    </div>
@endsection
