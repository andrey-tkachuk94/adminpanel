<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller_Template
{
    public $template = 'admin';
    
    protected $_session;
    protected $_config;
    protected $_user;
    
    protected $_view;
    
    public function before()
    {
        parent::before();
        
        $this->_session = Session::instance();
        $this->_config = Kohana::$config->load('admin');
        $this->_user = $this->_session->get('admin_user');
        
        try {
            $contentView = strtolower($this->request->controller() . '/' . $this->request->action());
            $this->_view = View::factory($contentView);
        } catch (Exception $e) {
            $this->_view = View::factory('empty');
        }
        
        View::set_global('config', $this->_config);
    }
    
    public function after()
    {
        $this->template->content = $this->_view;
        
        parent::after();
    }
    
    public function action_index()
    {
        if (!$this->_user) {
            HTTP::redirect('admin/login');
            exit;
        }
    }

    public function action_general() {

    }

    public function action_paid() {

    }

    public function action_users() {

    }
    
    public function action_login()
    {
        if ($this->_user) {
            HTTP::redirect('admin');
            exit;
        }
        
        $data = !empty($_POST) ? $_POST : array();
        
        $prepopulatedFields = array();
        
        $form = new Admin_Form_Login($data);
        $form->setPrepopulatedFields($prepopulatedFields);
        $validation = $form->validate();
        $formState = $form->getFormState();
        
        if ($formState['state'] == Admin_Form_Add::STATE_FORM_SENDED_OK) {
            foreach ($this->_config['auth'] as $admin) {
                if ($formState['data']['username'] == $admin['username'] && crypt($formState['data']['password'], $this->_config['salt']) == $admin['password']) {
                    $this->_session->set('admin_user', $admin['id']);
                    HTTP::redirect('admin/index');
                    exit;
                }
            }
            
            $form->setGlobalErrorMessage('Niepoprawny login i/lub hasło');
            $formState = $form->getFormState();
        }

        $this->_view->set('form', $formState);
    }
    
    public function action_logout()
    {
        $this->_session->set('admin_user', null);
        HTTP::redirect('admin/login');
        exit;
    }
}
