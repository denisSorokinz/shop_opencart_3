<?php
class ControllerCommonHeader extends Controller {
	public function index() {
		// Analytics
		$this->load->model('setting/extension');

		$data['analytics'] = array();

		$analytics = $this->model_setting_extension->getExtensions('analytics');

		foreach ($analytics as $analytic) {
			if ($this->config->get('analytics_' . $analytic['code'] . '_status')) {
				$data['analytics'][] = $this->load->controller('extension/analytics/' . $analytic['code'], $this->config->get('analytics_' . $analytic['code'] . '_status'));
			}
		}

		if ($this->request->server['HTTPS']) {
			$server = $this->config->get('config_ssl');
		} else {
			$server = $this->config->get('config_url');
		}

		if (is_file(DIR_IMAGE . $this->config->get('config_icon'))) {
			$this->document->addLink($server . 'image/' . $this->config->get('config_icon'), 'icon');
		}

		$data['title'] = $this->document->getTitle();

		$data['base'] = $server;
		$data['description'] = $this->document->getDescription();
		$data['keywords'] = $this->document->getKeywords();
		$data['links'] = $this->document->getLinks();
		$data['styles'] = $this->document->getStyles();
		$data['scripts'] = $this->document->getScripts('header');
		$data['lang'] = $this->language->get('code');
		$data['direction'] = $this->language->get('direction');

		$data['name'] = $this->config->get('config_name');

		if (is_file(DIR_IMAGE . $this->config->get('config_logo'))) {
			$data['logo'] = $server . 'image/' . $this->config->get('config_logo');
		} else {
			$data['logo'] = '';
		}

		$this->load->language('common/header');

		// Wishlist

                 if($this->config->get('theme_default_directory') == "opc_jewellery_ananda_1201"){
                    $this->load->language('extension/module/tvcmscustomtext');
                    $data['tv_lang_search_label']       = $this->language->get('tv_lang_search_label');
                    $data['tv_lang_search_text_label']  = $this->language->get('tv_lang_search_text_label');
                    $data['tv_lang_removecart_label']   = $this->language->get('tv_lang_removecart_label');
                    $data['tv_lang_subtottal_label']    = $this->language->get('tv_lang_subtottal_label');
                    $data['tv_lang_shipping_label']     = $this->language->get('tv_lang_shipping_label');
                    $data['tv_lang_tax_label']          = $this->language->get('tv_lang_tax_label');
                    $data['tv_lang_total_label']        = $this->language->get('tv_lang_total_label');
                    $data['tv_lang_checkout_label']     = $this->language->get('tv_lang_checkout_label');
                    $data['tvclink']                    = $this->load->controller('common/tvcmscustomlink');
                    $data['tvtags']                     = $this->load->controller('common/tvcmstags');
                    $data['ttvcpmpare']                 = $this->url->link('product/compare', '', true);
                    $data['boxlayout']                  = $this->config->get('tvcmscustomsetting_configuration')['boxlayout'];
                    $data['loader_img']                 = $server."image/catalog/themevolty/pageloader/ttv_loading.gif";
                    $data['tvcmscustomsetting_background_style_sheet']            = $this->config->get('tvcmscustomsetting_background_style_sheet');
                    $data['theme_option_status']        = $this->config->get('tvcmscustomsetting_configuration')['themeoptionstatus'];
                    if(!empty($this->session->data['compare'])){
                        $data['ttvcpmpare_count']   = count($this->session->data['compare']);
                    }else{
                        $data['ttvcpmpare_count']   = 0;
                    }
                   // $data['bottomoption']             = $this->load->controller('common/tvcmscustomsetting')['bottomoption'];
                     $customsetting = $this->load->controller('common/tvcmscustomsetting');
   if(!empty($customsetting['customsub_customtext'])){ 
                       $data['customsub_customtext']   = $customsetting['customsub_customtext'];
                      }                $data['mousehoverimage']            = $customsetting['mousehoverimage'];
                    $data['pageloader']                 = $customsetting['pageloader'];
                    $data['mainmenustickystatus']       = $customsetting['mainmenustickystatus'];
                    $data['themeoption']                = $this->load->controller('common/tvcmscustomsthemeoption');
                    $data['text_support']               = $this->language->get('text_support');
                    if(empty($_SERVER['QUERY_STRING']) || $_SERVER['QUERY_STRING'] == "route=common/home"){
                        $data['homeid'] = "index";
                        $data['header1'] = 0;
                    }else{
                        $data['homeid'] = "";
                        $data['header1'] = "ttvcmsposition-block"; 
                    }
                    if(!empty($this->session->data['customer_id'])){
                        $data['logincust'] = $this->session->data['customer_id'];
                    }else{
                        $data['logincust'] = 0;
                    }
                }
                
		if ($this->customer->isLogged()) {
			$this->load->model('account/wishlist');

                   $data['text_wishlist_tv'] = sprintf($this->model_account_wishlist->getTotalWishlist());
                

			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), $this->model_account_wishlist->getTotalWishlist());
		} else {
			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), (isset($this->session->data['wishlist']) ? count($this->session->data['wishlist']) : 0));

                  $data['text_wishlist_tv'] = sprintf((isset($this->session->data['wishlist']) ? count($this->session->data['wishlist']) : 0));
                
		}

		$data['text_logged'] = sprintf($this->language->get('text_logged'), $this->url->link('account/account', '', true), $this->customer->getFirstName(), $this->url->link('account/logout', '', true));
		
		$data['home'] = $this->url->link('common/home');
		$data['wishlist'] = $this->url->link('account/wishlist', '', true);
		$data['logged'] = $this->customer->isLogged();
		$data['account'] = $this->url->link('account/account', '', true);
		$data['register'] = $this->url->link('account/register', '', true);
		$data['login'] = $this->url->link('account/login', '', true);
		$data['order'] = $this->url->link('account/order', '', true);
		$data['transaction'] = $this->url->link('account/transaction', '', true);
		$data['download'] = $this->url->link('account/download', '', true);
		$data['logout'] = $this->url->link('account/logout', '', true);
		$data['shopping_cart'] = $this->url->link('checkout/cart');
		$data['checkout'] = $this->url->link('checkout/checkout', '', true);
		$data['contact'] = $this->url->link('information/contact');
		$data['telephone'] = $this->config->get('config_telephone');
		
		$data['language'] = $this->load->controller('common/language');
		$data['currency'] = $this->load->controller('common/currency');
		$data['search'] = $this->load->controller('common/search');
		$data['cart'] = $this->load->controller('common/cart');
		$data['menu'] = $this->load->controller('common/menu');

		return $this->load->view('common/header', $data);
	}
}
