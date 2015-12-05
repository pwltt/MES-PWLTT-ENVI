<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Static_accessories_widget extends CMS_Controller {
    public function slide(){
        $this->load->model('slide_model');
        $data['slide_list'] = $this->slide_model->get();
        $data['slide_height'] = $this->cms_get_config('static_accessories_slide_height');
        $data['module_path'] = $this->cms_module_path();
        $data['show_edit'] = $this->cms_editing_mode() && $this->cms_allow_navigate($this->n('index'));
        if(count($data['slide_list'])>0){
            $this->view($this->cms_module_path().'/widget_slide', $data);
        }
    }
    
    public function tab(){
        $this->load->model('tab_model');
        $data['tab_list'] = $this->tab_model->get();
        if(count($data['tab_list'])>0){
            $this->view($this->cms_module_path().'/widget_tab', $data);
        }
    }
    
    public function visitor_counter(){
        $this->load->model('visitor_counter_model');
        $data['visitor_count'] = $this->visitor_counter_model->get();
        $this->view($this->cms_module_path().'/widget_visitor_counter', $data);
    }
}