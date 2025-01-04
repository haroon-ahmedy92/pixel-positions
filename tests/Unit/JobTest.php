<?php

use App\Models\Employer;
use App\Models\Job;

test('is belongs to the employer', function () {


    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id
    ]);


    
    expect($job->employer->is($employer))->toBeTrue();

});

it('can be associated with a number of tags', function(){
    // AAA
    $job = Job::factory()->create();

    $job->tag("frontEnd");

    expect($job->tags)->toHaveCount(1);

});
