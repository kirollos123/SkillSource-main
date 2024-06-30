<?php
namespace Controllers;

use Models\Job;
use Models\Skill;
use Models\User;
use Support\Request;

class JobsController
{
    public function index() {
        // type your logic here and don't forget to return the value
        view('job/index', ['jobs' => Job::all()]);
    }

    public function create() {
        view('job/create');
    }

    public function store() {
        RedirectIfGuest();
        $salary_range = request()->salaryFrom.'$'.' - '.request()->salaryTo."$";
        $job = [
            'recuiter_id' => auth()->id,
            'job_title' => request()->jobTitle,
            'position' => request()->Experience == '6+ years' ? 'Senior' : 'Junior',
            'Experience_level' => request()->Experience,
            'description' => request()->description,
            'Employee_type' => request()->jobType,
            'salary' => request()->salary ?: 0,
            'salary_range' => $salary_range ?? '',
            'salary_type' => request()->SalaryType
        ];
        $job_id = Job::create($job);

        redirect('/job/'.$job_id);
        // $job_id = Job::lastInsertedId();
        // foreach ($skills as $skill_name) {
        //     $skill = Skill::findOrInsert('skill_name', $skill_name);
        //     $skill_ids[] = $skill['id'];
        // }
        // echo '<pre>'.print_r($skill_ids, true).'</pre>';
        // Job::attach('job_skills', 'job_id', 'skill_id', $job_id, $skill_ids[0]);
    }

    public function candidate($job_id, $jobseeker_id) {
        // type your logic here and don't forget to return the value
        $user = User::find($jobseeker_id);
        $job = Job::find($job_id);
        if (in_array((int)$jobseeker_id, $job->candidates($job_id)))
            return view('job/candidate', ['job_id' => $job_id, 'candidate' => $user]);
        return view('errors/404', ['message' => 'Candidate not found']);
    }
    public function update($id) {
        // type your logic here and don't forget to return the value
    }

    public function show($id) {
        $job = Job::find($id);
        // return '<pre>'.print_r($job, true).'</pre>';
        if (!$job) {
            return view('errors/404');
        }
        return view('job/show', ['job' => $job, 'comments' => $job->comments($id), 'recuiters' => $job->recuiter($id)]);
    }

    public function delete($id) {
        Job::delete($id);
        return view('job/manage-jobs', ['jobs' => Job::where('recuiter_id', auth()->id)]);

    }

    public function manage() {
        // type your logic here and don't forget to return the value
        // return '<pre></pre>'.print_r(Job::where('recuiter_id', auth()->id), true).'</pre>';
        return view('job/manage-jobs', ['jobs' => Job::where('recuiter_id', auth()->id)]);
    }

    public function apply($id) {
        if (Job::exists('id', $id))
            Job::attach('applications', 'job_id', 'job_seeker_id', $id, auth()->id);
        else
            return view('errors/404', ['message' => 'Job not found']);
    }
    public function candidates($id) {
        // type your logic here and don't forget to return the value
        return view('job/candidates', ['id' => $id]);
    }
}

?>
