<?php
class ModelExtensionPaymentWorldline extends Model {
	
	public function getMethod($address, $total) {
		$this->load->language('extension/payment/worldline');

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "zone_to_geo_zone WHERE geo_zone_id = '" . (int)$this->config->get('payment_worldline_geo_zone_id') . "' AND country_id = '" . (int)$address['country_id'] . "' AND (zone_id = '" . (int)$address['zone_id'] . "' OR zone_id = '0')");
		
		if (($this->config->get('payment_worldline_total') > 0) && ($this->config->get('payment_worldline_total') > $total)) {
			$status = false;
		} elseif (!$this->config->get('payment_worldline_geo_zone_id')) {
			$status = true;
		} elseif ($query->num_rows) {
			$status = true;
		} else {
			$status = false;
		}

		$method_data = array();

		if ($status) {
			$_config = new Config();
			$_config->load('worldline');
			
			$config_setting = $_config->get('worldline_setting');
		
			$setting = array_replace_recursive((array)$config_setting, (array)$this->config->get('payment_worldline_setting'));
			
			$language_id = $this->config->get('config_language_id');
					
			if (!empty($setting['advanced']['title'][$language_id])) {
				$title = $setting['advanced']['title'][$language_id];
			} else {
				$title = $this->language->get('text_title');
			}
						
			$method_data = array(
				'code'       => 'worldline',
				'title'      => $title,
				'terms'      => '',
				'sort_order' => $this->config->get('payment_worldline_sort_order')
			);
		}

		return $method_data;
	}
	
	public function createOrder($data) {
		$sql = "INSERT INTO `" . DB_PREFIX . "worldline_order` SET";

		$implode = array();
			
		if (!empty($data['order_id'])) {
			$implode[] .= "`order_id` = '" . (int)$data['order_id'] . "'";
		}
		
		if (!empty($data['transaction_id'])) {
			$implode[] .= "`transaction_id` = '" . $this->db->escape($data['transaction_id']) . "'";
		}
		
		if (!empty($data['transaction_status'])) {
			$implode[] .= "`transaction_status` = '" . $this->db->escape($data['transaction_status']) . "'";
		}
		
		if (!empty($data['payment_product'])) {
			$implode[] .= "`payment_product` = '" . $this->db->escape($data['payment_product']) . "'";
		}
		
		if (!empty($data['total'])) {
			$implode[] .= "`total` = '" . (float)$data['total'] . "'";
		}
		
		if (!empty($data['amount'])) {
			$implode[] .= "`amount` = '" . (float)$data['amount'] . "'";
		}
		
		if (!empty($data['amount'])) {
			$implode[] .= "`amount` = '" . (float)$data['amount'] . "'";
		}
		
		if (!empty($data['currency_code'])) {
			$implode[] .= "`currency_code` = '" . $this->db->escape($data['currency_code']) . "'";
		}
		
		if (!empty($data['country_code'])) {
			$implode[] .= "`country_code` = '" . $this->db->escape($data['country_code']) . "'";
		}
		
		if (!empty($data['environment'])) {
			$implode[] .= "`environment` = '" . $this->db->escape($data['environment']) . "'";
		}
		
		if ($implode) {
			$sql .= implode(", ", $implode);
		}
		
		$this->db->query($sql);
	}
	
	public function updateOrder($data) {
		$sql = "UPDATE `" . DB_PREFIX . "worldline_order` SET";

		$implode = array();
		
		if (!empty($data['transaction_id'])) {
			$implode[] .= "`transaction_id` = '" . $this->db->escape($data['transaction_id']) . "'";
		}
					
		if (!empty($data['transaction_status'])) {
			$implode[] .= "`transaction_status` = '" . $this->db->escape($data['transaction_status']) . "'";
		}
		
		if (!empty($data['payment_product'])) {
			$implode[] .= "`payment_product` = '" . $this->db->escape($data['payment_product']) . "'";
		}
		
		if (!empty($data['total'])) {
			$implode[] .= "`total` = '" . (float)$data['total'] . "'";
		}
		
		if (!empty($data['amount'])) {
			$implode[] .= "`amount` = '" . (float)$data['amount'] . "'";
		}
		
		if (!empty($data['currency_code'])) {
			$implode[] .= "`currency_code` = '" . $this->db->escape($data['currency_code']) . "'";
		}
		
		if (!empty($data['country_code'])) {
			$implode[] .= "`country_code` = '" . $this->db->escape($data['country_code']) . "'";
		}
		
		if (!empty($data['environment'])) {
			$implode[] .= "`environment` = '" . $this->db->escape($data['environment']) . "'";
		}
		
		$implode[] .= "`date` = COALESCE(`date`, NOW())";
		
		if ($implode) {
			$sql .= implode(", ", $implode);
		}

		$sql .= " WHERE `order_id` = '" . (int)$data['order_id'] . "'";
		
		$this->db->query($sql);
	}
		
	public function deleteOrder($order_id) {
		$query = $this->db->query("DELETE FROM `" . DB_PREFIX . "worldline_order` WHERE `order_id` = '" . (int)$order_id . "'");
	}
	
	public function getOrder($order_id) {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "worldline_order` WHERE `order_id` = '" . (int)$order_id . "'");
		
		if ($query->num_rows) {
			return $query->row;
		} else {
			return array();
		}
	}
	
	public function getWaitingOrders() {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "worldline_order` WHERE `transaction_status` = '' OR `transaction_status` = 'created' OR `transaction_status` = 'authorization_requested' OR `transaction_status` = 'capture_requested' OR `transaction_status` = 'refund_requested'");
					
		return $query->rows;
	}
		
	public function log($data, $title = '') {
		$_config = new Config();
		$_config->load('worldline');
			
		$config_setting = $_config->get('worldline_setting');
		
		$setting = array_replace_recursive((array)$config_setting, (array)$this->config->get('payment_worldline_setting'));
		
		if ($setting['advanced']['debug']) {
			$log = new Log('worldline.log');
			
			if (is_string($data)) {
				$log->write('Worldline debug (' . $title . '): ' . $data);
			} else {
				$log->write('Worldline debug (' . $title . '): ' . json_encode($data));
			}
		}
	}
}