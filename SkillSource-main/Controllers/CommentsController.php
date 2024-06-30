<?php
namespace Controllers;

use Models\Comment;

class CommentsController
{
    public function index() {
        // type your logic here and don't forget to return the value
    }

    public function store($job_id) {
        // if (!auth()->check) {
        //     return redirect('/login');
        // }
        Comment::create([   
            'job_id' => $job_id,
            'user_id' => auth()->id,
            'comment' => sanitize_input(request()->comment),
        ]);
    }
    public function update($id) {
        // type your logic here and don't forget to return the value
    }
    public function delete($id) {
        // type your logic here and don't forget to return the value
    }

}

?>
