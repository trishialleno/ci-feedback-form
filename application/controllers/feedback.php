<?php
class Feedback extends CI_Controller {

    public function index() {
        $this->load->view('feedback_form');
    }

    public function submit_feedback() {
        // Load form validation library
        $this->load->library('form_validation');

        // Set validation rules
        $this->form_validation->set_rules('name', 'Name', 'required|alpha');
        $this->form_validation->set_rules('course_title', 'Course Title', 'required');
        $this->form_validation->set_rules('score', 'Given Score', 'required|numeric');
        $this->form_validation->set_rules('reason', 'Reason', 'required');

        // Run validation
        if ($this->form_validation->run() == FALSE) {
            // Form validation failed
            $this->load->view('feedback_form');
        } else {
            // If validation is good
            $data['name'] = $this->input->post('name');
            $data['course_title'] = $this->input->post('course_title');
            $data['score'] = $this->input->post('score');
            $data['reason'] = $this->input->post('reason');

            // Load the result view with the submitted feedback data
            $this->load->view('result', $data);
        }
    }
}
?>