<?php
class ControllerExtensionModuleTvcmsmultibanner extends Controller {
	public function index($setting) {
		if($this->config->get('theme_default_directory') == "opc_jewellery_ananda_1201"){
			if(!empty($setting['status'])){
				$status		 							= $this->status();
				$data['status_main_form'] 				= $status['main_form'];
			    $data['status_main_title'] 				= $status['main_title'];
			    $data['status_main_short_description'] 	= $status['main_short_description'];
			    $data['status_main_description'] 		= $status['main_description'];
			    $data['status_main_image'] 				= $status['main_image'];
			    $data['status_record_form'] 			= $status['record_form'];
			    $data['status_image_upload'] 			= $status['image_upload'];
			    $data['num_services'] 					= $status['num_services'];
				$land_id 								= (int)$this->config->get('config_language_id');

				if(!empty($data['status_main_form'])){
					if(!empty($data['status_main_title'])){
						$data['main_title'] = $setting['tvcmsmultibanner_main'][$land_id]['tvcmsmultibanner_main_title']; 
					}
					if(!empty($data['status_main_short_description'])){
						$data['main_short_description'] = $setting['tvcmsmultibanner_main'][$land_id]['tvcmsmultibanner_main_short_des']; 
					}
					if(!empty($data['status_main_description'])){
						$data['main_description'] = $setting['tvcmsmultibanner_main'][$land_id]['tvcmsmultibanner_main_des']; 
					}
					if(!empty($data['status_main_image'])){
						$data['main_image'] = $setting['tvcmsmultibanner_main'][$land_id]['tvcmsmultibanner_main_img']; 
					}
				}
				if(!empty($data['status_record_form'])){
					$this->load->model('tool/image');
					foreach ($setting['tvcmsmultibanner'] as $key => $value) {
						for ($i=1; $i <=$data['num_services']; $i++) { 
							if(!empty($value['tvcmsmultibanner_status_'.$i.''])){
								if($key == $land_id){
									$data['tvcmsmultibanner_status_'.$i.''] = $value['tvcmsmultibanner_status_'.$i.''];
									$data['tvcmsmultibanner_img_'.$i.''] = $this->model_tool_image->resize($value['tvcmsmultibanner_img_'.$i.''], $value['tvcmsmultibanner_width_'.$i.''],$value['tvcmsmultibanner_height_'.$i.'']);
									$data['tvcmsmultibanner_link_'.$i.''] = $value['tvcmsmultibanner_cap_'.$i.''];
								}
							}
						}
					}
				}
				//echo "<pre>"; print_r($data); echo "</pre>"; die;
				return $this->load->view('extension/module/tvcmsmultibanner', $data);
			}
		}
	}
	protected function status(){
		return $this->Tvcmsthemevoltystatus->multibannertatus();
	}

}
