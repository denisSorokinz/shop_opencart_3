<?php
class ControllerExtensionModuletvcmsnewsletter extends Controller {
	public function index($setting) {
		if($this->config->get('theme_default_directory') == "opc_jewellery_ananda_1201"){
			if(!empty($setting['status'])){
				$this->load->language('extension/module/tvcmsblog');
				$language_id 							= $this->config->get('config_language_id');
				$status 								= $this->status();
				$data['status_news_letter_title']		= $status['news_letter_title'];
   				$data['status_news_letter_short_desc'] 	= $status['news_letter_short_desc'];
				$data['title'] 							= $this->config->get('tvcmscustomsetting_customsub')['lang_text'][$language_id]['newslettertitle'];
				$data['subtitle'] 						= $this->config->get('tvcmscustomsetting_customsub')['lang_text'][$language_id]['newslettersubtitle'];
				return $this->load->view('extension/module/tvcmsnewsletter', $data);
			}
		}
	}
	protected function status(){
		return $this->Tvcmsthemevoltystatus->customsetting();
	}
}
