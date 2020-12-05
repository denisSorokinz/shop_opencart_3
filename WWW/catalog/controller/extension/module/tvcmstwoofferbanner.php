<?php
class ControllerExtensionModuleTvcmstwoofferbanner extends Controller {
	public function index($setting) {
		if($this->config->get('theme_default_directory') == "opc_jewellery_ananda_1201"){
			if(isset($setting['status'])){

				$this->load->model('tool/image');

				$data['bannarlist'] = array();

				foreach ($setting['tvcmstwoofferbanner'] as $key => $value) {
					$front_land_id = (int)$this->config->get('config_language_id');
	 				if($key == $front_land_id){
						$data['bannarlist'] = array(
							'tvcmstwoofferbannersub_image_1'	  	=>  $this->model_tool_image->resize($value['tvcmstwoofferbannersub_image_1'],$value['tvcmstwoofferbannersub_width_1'],$value['tvcmstwoofferbannersub_height_1']),
							'tvcmstwoofferbannersub_img_cap_1'	  	=> $value['tvcmstwoofferbannersub_img_cap_1'],
							'tvcmstwoofferbannersub_link_1'	  		=> $value['tvcmstwoofferbannersub_link_1'],
							'tvcmstwoofferbannersub_image_2'	  	=>  $this->model_tool_image->resize($value['tvcmstwoofferbannersub_image_2'],$value['tvcmstwoofferbannersub_width_2'],$value['tvcmstwoofferbannersub_height_2']),
							'tvcmstwoofferbannersub_img_cap_2'	  	=> $value['tvcmstwoofferbannersub_img_cap_2'],
							'tvcmstwoofferbannersub_link_2'	  		=> $value['tvcmstwoofferbannersub_link_2']
						);			
					}
				}
				return $this->load->view('extension/module/tvcmstwoofferbanner', $data);
			}
		}
	}
}
