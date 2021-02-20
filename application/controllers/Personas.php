
<?php
class Personas extends CI_Controller{

    public function __construct(){
		parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('Persona');

        $this->load->library('form_validation');
        $this->load->database();
    }

    public function index()
    {
        $vdata["personas"]=$this->Persona->findAll(); 
        $this->load->view('header');
        $this->load->view('personas/listado', $vdata);
        $this->load->view('footer');
        
    }

    public function guardar($persona_id = null)
    {

        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
        $this->form_validation->set_rules('direccion', 'Direccion', 'required');
        $this->form_validation->set_rules('telefono', 'Telefono', 'required|max_length[10]');
        $this->form_validation->set_rules('email', 'Email', 'required');


        $vdata["nombre"] = "";
        $vdata["direccion"] = "";
        $vdata["telefono"] = "";
        $vdata["email"] = "";

        if(isset($persona_id)){
            
            $persona = $this->Persona->find($persona_id);

            if(isset($persona)){
                $vdata["nombre"]=$persona->nombre;
                $vdata["direccion"]=$persona->direccion;
                $vdata["telefono"]=$persona->telefono;
                $vdata["email"]=$persona->email;
            }
        }
        if ($this->input->server("REQUEST_METHOD") == "POST"){

            $data["nombre"] = $this->input->post("nombre");
            $data["direccion"] = $this->input->post("direccion");
            $data["telefono"] = $this->input->post("telefono");
            $data["email"] = $this->input->post("email");

            $vdata["nombre"] = $this->input->post("nombre");
            $vdata["direccion"] = $this->input->post("direccion");
            $vdata["telefono"] = $this->input->post("telefono");
            $vdata["email"] = $this->input->post("email");

            if($this->form_validation->run()){
                if(isset($persona_id)){
                    $this->Persona->update($persona_id, $data);
                    redirect("http://localhost/agenda/");
                }
                else{
                    $this->Persona->insert($data);
                    redirect("http://localhost/agenda/");
                }
            }
        }

        $this->load->view('header');
        $this->load->view('personas/guardar', $vdata);
        $this->load->view('footer');
        
    }

    public function borrar($persona_id = null)
    {
        $this->Persona->delete($persona_id);

        redirect("http://localhost/agenda/");
    }

    public function ver($persona_id = null)
    {
        if(!isset($persona_id)){
            show_404();
        }
        
        if(isset($persona_id)){
            
            $persona = $this->Persona->find($persona_id);

            if(isset($persona)){
                $vdata["nombre"]=$persona->nombre;
                $vdata["direccion"]=$persona->direccion;
                $vdata["telefono"]=$persona->telefono;
                $vdata["email"]=$persona->email;
            }
        }

        $this->load->view('header');
        $this->load->view('personas/ver', $vdata);
        $this->load->view('footer');
    }




}