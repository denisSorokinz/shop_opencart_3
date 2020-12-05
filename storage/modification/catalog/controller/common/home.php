<?php
class ControllerCommonHome extends Controller {
	public function index() {

                $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "insertdata` (
                 `insertdata_id` INT NOT NULL AUTO_INCREMENT ,
                 `record` VARCHAR(255) NOT NULL ,
                 PRIMARY KEY (`insertdata_id`)) ENGINE = InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1");
                $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "insertdata");
                if($query->num_rows == 0){
  $this->db->query("INSERT INTO " . DB_PREFIX . "insertdata SET record = 'inserted'");
                 $langdata1['language'][1] = array('title' => 'Account');
                 $langdata1['language'][2] = array('title' => 'Account');
                   $this->db->query("INSERT INTO " . DB_PREFIX . "tvcmstags SET 
                     tvcmstags_title = '" . json_encode($langdata1['language']) . "',
                     tvcmstags_link = '#',
                     tvcmstags_pos = 1,
                     tvcmstags_status = 1");
                  $langdata2['language'][1] = array('title' => 'About Us');
                   $langdata2['language'][2] = array('title' => 'About Us');
                   $this->db->query("INSERT INTO " . DB_PREFIX . "tvcmstags SET 
                     tvcmstags_title = '" . json_encode($langdata2['language']) . "',
                     tvcmstags_link = '#',
                     tvcmstags_pos = 2,
                     tvcmstags_status = 1");
                      $langdata3['language'][1] = array('title' => 'Information');
                   $langdata3['language'][2] = array('title' => 'Information');
                   $this->db->query("INSERT INTO " . DB_PREFIX . "tvcmstags SET 
                     tvcmstags_title = '" . json_encode($langdata3['language']) . "',
                     tvcmstags_link = '#',
                     tvcmstags_pos = 3,
                     tvcmstags_status = 1");
                  $langdata4['language'][1] = array('title' => 'CONTACT USContact Us');
                   $langdata4['language'][2] = array('title' => 'Contact Us');
                   $this->db->query("INSERT INTO " . DB_PREFIX . "tvcmstags SET 
                     tvcmstags_title = '" . json_encode($langdata4['language']) . "',
                     tvcmstags_link = '#',
                     tvcmstags_pos = 4,
                     tvcmstags_status = 1");
                  $langdata5['language'][1] = array('title' => 'product');
                   $langdata5['language'][2] = array('title' => 'product');
                   $this->db->query("INSERT INTO " . DB_PREFIX . "tvcmstags SET 
                     tvcmstags_title = '" . json_encode($langdata5['language']) . "',
                     tvcmstags_link = '#',
                     tvcmstags_pos = 5,
                     tvcmstags_status = 1");
                  $langdata6['language'][1] = array('title' => 'Cherry');
                   $langdata6['language'][2] = array('title' => 'Cherry');
                   $this->db->query("INSERT INTO " . DB_PREFIX . "tvcmstags SET 
                     tvcmstags_title = '" . json_encode($langdata6['language']) . "',
                     tvcmstags_link = '#',
                     tvcmstags_pos = 6,
                     tvcmstags_status = 0");
                  $langdata7['language'][1] = array('title' => 'Tin');
                   $langdata7['language'][2] = array('title' => 'Tin');
                   $this->db->query("INSERT INTO " . DB_PREFIX . "tvcmstags SET 
                     tvcmstags_title = '" . json_encode($langdata7['language']) . "',
                     tvcmstags_link = '#',
                     tvcmstags_pos = 7,
                     tvcmstags_status = 0");
                 $ee1['language'][1] = array("title"=>"About Us");
                 $ee1['language'][2] = array("title"=>"About Us");
                 $this->db->query("INSERT INTO " . DB_PREFIX . "tvcustomlink SET
                   tvcustomlink_title  = '" . json_encode($ee1['language']) . "',
                   tvcustomlink_link   = '#',
                   tvcustomlink_pos    = 1, 
                   tvcustomlink_status = 1");
                 $ee2['language'][1] = array("title"=>"Help");
                 $ee2['language'][2] = array("title"=>"Help");
                  $this->db->query("INSERT INTO " . DB_PREFIX . "tvcustomlink SET
                   tvcustomlink_title  = '" . json_encode($ee2['language']) . "',
                   tvcustomlink_link   = '#',
                   tvcustomlink_pos    = 2, 
                   tvcustomlink_status = 1");
                 $ee3['language'][1] = array("title"=>"Store Location");
                 $ee3['language'][2] = array("title"=>"Store Location");
                  $this->db->query("INSERT INTO " . DB_PREFIX . "tvcustomlink SET
                   tvcustomlink_title  = '" . json_encode($ee3['language']) . "',
                   tvcustomlink_link   = '#',
                   tvcustomlink_pos    = 3, 
                   tvcustomlink_status = 1");
                 $ee4['language'][1] = array("title"=>"Contact");
                 $ee4['language'][2] = array("title"=>"Contact");
                  $this->db->query("INSERT INTO " . DB_PREFIX . "tvcustomlink SET
                   tvcustomlink_title  = '" . json_encode($ee4['language']) . "',
                   tvcustomlink_link   = '#',
                   tvcustomlink_pos    = 4, 
                   tvcustomlink_status = 1");
                 $data['language'][1] =  array('title'=>"Brand",'des'=>"The marketing practice of creating a name",'short'=>"Place it everywhere");
                 $data['language'][2] =  array('title'=>"Brand",'des'=>"The marketing practice of creating a name",'short'=>"Place it everywhere");
                 $this->db->query("INSERT INTO `" . DB_PREFIX . "tvcmsbrandlist` SET 
                 tvcmsbrandlist_link   = '#',
                 tvcmsbrandlist_img    = 'catalog/themevolty/brand/demo_img_1.jpg',
                 tvcmsbrandlist_pos    = 1,
                 tvcmsbrandlist_lang   = '" . json_encode($data['language']) . "',
                 tvcmsbrandlist_status = 1");
                 $this->db->query("INSERT INTO `" . DB_PREFIX . "tvcmsbrandlist` SET 
                 tvcmsbrandlist_link   = '#',
                 tvcmsbrandlist_img    = 'catalog/themevolty/brand/demo_img_2.jpg',
                 tvcmsbrandlist_pos    = 2,
                 tvcmsbrandlist_lang   = '" . json_encode($data['language']) . "',
                 tvcmsbrandlist_status = 1");
                 $this->db->query("INSERT INTO `" . DB_PREFIX . "tvcmsbrandlist` SET 
                 tvcmsbrandlist_link   = '#',
                 tvcmsbrandlist_img    = 'catalog/themevolty/brand/demo_img_3.jpg',
                 tvcmsbrandlist_pos    = 3,
                 tvcmsbrandlist_lang   = '" . json_encode($data['language']) . "',
                 tvcmsbrandlist_status = 1");
                 $this->db->query("INSERT INTO `" . DB_PREFIX . "tvcmsbrandlist` SET 
                 tvcmsbrandlist_link   = '#',
                 tvcmsbrandlist_img    = 'catalog/themevolty/brand/demo_img_4.jpg',
                 tvcmsbrandlist_pos    = 4,
                 tvcmsbrandlist_lang   = '" . json_encode($data['language']) . "',
                 tvcmsbrandlist_status = 1");
                 $this->db->query("INSERT INTO `" . DB_PREFIX . "tvcmsbrandlist` SET 
                 tvcmsbrandlist_link   = '#',
                 tvcmsbrandlist_img    = 'catalog/themevolty/brand/demo_img_5.jpg',
                 tvcmsbrandlist_pos    = 5,
                 tvcmsbrandlist_lang   = '" . json_encode($data['language']) . "',
                 tvcmsbrandlist_status = 1");
                 $this->db->query("INSERT INTO `" . DB_PREFIX . "tvcmsbrandlist` SET 
                 tvcmsbrandlist_link   = '#',
                 tvcmsbrandlist_img    = 'catalog/themevolty/brand/demo_img_6.jpg',
                 tvcmsbrandlist_pos    = 6,
                 tvcmsbrandlist_lang   = '" . json_encode($data['language']) . "',
                 tvcmsbrandlist_status = 1");
                 $this->db->query("INSERT INTO `" . DB_PREFIX . "tvcmsbrandlist` SET 
                 tvcmsbrandlist_link   = '#',
                 tvcmsbrandlist_img    = 'catalog/themevolty/brand/demo_img_7.jpg',
                 tvcmsbrandlist_pos    = 7,
                 tvcmsbrandlist_lang   = '" . json_encode($data['language']) . "',
                 tvcmsbrandlist_status = 1");
                 $this->db->query("INSERT INTO `" . DB_PREFIX . "tvcmsbrandlist` SET 
                 tvcmsbrandlist_link   = '#',
                 tvcmsbrandlist_img    = 'catalog/themevolty/brand/demo_img_8.jpg',
                 tvcmsbrandlist_pos    = 8,
                 tvcmsbrandlist_lang   = '" . json_encode($data['language']) . "',
                 tvcmsbrandlist_status = 1");                  
    $this->response->redirect($this->url->link('common/home', '', true));
            }
            
		$this->document->setTitle($this->config->get('config_meta_title'));
		$this->document->setDescription($this->config->get('config_meta_description'));
		$this->document->setKeywords($this->config->get('config_meta_keyword'));

		if (isset($this->request->get['route'])) {
			$this->document->addLink($this->config->get('config_url'), 'canonical');
		}

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

                $data['footer_top'] = $this->load->controller('common/footer_top');
            

		$this->response->setOutput($this->load->view('common/home', $data));
	}
}
