<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Produit extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Produit_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'produit/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'produit/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'produit/index.html';
            $config['first_url'] = base_url() . 'produit/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Produit_model->total_rows($q);
        $produit = $this->Produit_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'produit_data' => $produit,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('produit/produit_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Produit_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'designation' => $row->designation,
		'description' => $row->description,
		'prix' => $row->prix,
		'categorie' => $row->categorie,
	    );
            $this->load->view('produit/produit_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('produit'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('produit/create_action'),
	    'id' => set_value('id'),
	    'designation' => set_value('designation'),
	    'description' => set_value('description'),
	    'prix' => set_value('prix'),
	    'categorie' => set_value('categorie'),
	);
        $this->load->view('produit/produit_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'designation' => $this->input->post('designation',TRUE),
		'description' => $this->input->post('description',TRUE),
		'prix' => $this->input->post('prix',TRUE),
		'categorie' => $this->input->post('categorie',TRUE),
	    );

            $this->Produit_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('produit'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Produit_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('produit/update_action'),
		'id' => set_value('id', $row->id),
		'designation' => set_value('designation', $row->designation),
		'description' => set_value('description', $row->description),
		'prix' => set_value('prix', $row->prix),
		'categorie' => set_value('categorie', $row->categorie),
	    );
            $this->load->view('produit/produit_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('produit'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'designation' => $this->input->post('designation',TRUE),
		'description' => $this->input->post('description',TRUE),
		'prix' => $this->input->post('prix',TRUE),
		'categorie' => $this->input->post('categorie',TRUE),
	    );

            $this->Produit_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('produit'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Produit_model->get_by_id($id);

        if ($row) {
            $this->Produit_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('produit'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('produit'));
        }
    }

    public function _rules() 
    {
        $this->form_validation->set_rules('designation', 'designation', 'trim|required');
        $this->form_validation->set_rules('description', 'description', 'trim|required');
        $this->form_validation->set_rules('prix', 'prix', 'trim|required');
        $this->form_validation->set_rules('categorie', 'categorie', 'trim|required');

        $this->form_validation->set_rules('id', 'id', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}
