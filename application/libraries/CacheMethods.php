<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  
class CacheMethods{

	public function getCountryDetails(){
		$CI =& get_instance();
		$CI->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file', 'key_prefix' => CACHE_KEY_PREFIX));

		$cache_country = null;
		//Check whether country array available in cache or not
		if( ! $cache_country = $CI->cache->get('cache_country') ){
			//Country not found in cache. Getting from Database.
			$CI->db->order_by('country_name', 'ASC');
			$query = $CI->db->get(TBL_PREFIX.TBL_COUNTRY);
			$cache_country = $query->result();
			//Storing country array in cache. So that next time country list will be provided from cache.
			$CI->cache->save('cache_country', $cache_country, CACHE_REFRESH_TIME); //in seconds (one hour)
		}
		//Returning country list array
		return $cache_country;
	}
	public function getRegionDetails(){
		$CI =& get_instance();
		$CI->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file', 'key_prefix' => CACHE_KEY_PREFIX));

		$cache_region = null;
		//Check whether country array available in cache or not
		if( ! $cache_region = $CI->cache->get('cache_region') ){
			//Country not found in cache. Getting from Database.
			$CI->db->order_by('region_name', 'ASC');
			$query = $CI->db->get(TBL_PREFIX.TBL_REGION_LIST);
			$cache_region = $query->result();
			//Storing country array in cache. So that next time country list will be provided from cache.
			$CI->cache->save('cache_region', $cache_region, CACHE_REFRESH_TIME); //in seconds (one hour)
		}
		//Returning country list array
		return $cache_region;
	}
	
	
	public function getSectorDetails(){
		$CI =& get_instance();
		$CI->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file', 'key_prefix' => CACHE_KEY_PREFIX));

		$cache_sector = null;
		//Check whether sector array available in cache or not
		if( ! $cache_sector = $CI->cache->get('cache_sector') ){
			//sector not found in cache. Getting from Database.
			$CI->db->order_by('sector_name', 'ASC');
			$query = $CI->db->get(TBL_PREFIX.TBL_SECTOR);
			$cache_sector = $query->result();
			//Storing sector array in cache. So that next time sector list will be provided from cache.
			$CI->cache->save('cache_sector', $cache_sector, CACHE_REFRESH_TIME); //in seconds (one hour)
		}
		//Returning sector list array
		return $cache_sector;
	}

	public function getAllStates(){
		$CI =& get_instance();
		$CI->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file', 'key_prefix' => CACHE_KEY_PREFIX));

		$cache_state = null;
		//Check whether state array available in cache or not
		if( ! $cache_state = $CI->cache->get('cache_state') ){
			//Country not found in cache. Getting from Database.
			$CI->db->order_by('state_name', 'ASC');
			$query = $CI->db->get(TBL_PREFIX.TBL_COUNTRY_STATE);
			$cache_state = $query->result();
			//Storing state array in cache. So that next time state list will be provided from cache.
			$CI->cache->save('cache_state', $cache_state, CACHE_REFRESH_TIME); //in seconds (one hour)
		}
		//Returning state list array
		return $cache_state;
	}

	public function getStateByCountry( $countryId ){
		$CI =& get_instance();
		$allStateList = $this->getAllStates();
		$filterData;
		if ( isset($allStateList) ){
			$filterData = $this->filterData( $allStateList, 'country_id', $countryId );
			//$filterData = $this->filterData( $allStateList, 'state_name', 'Delhi' );
			//log_message('info', 'Filter Data ['.print_r($filterData, true).']');
			if ( !isset( $filterData ) ){
				return null;
			}
		}else{
			return null;
		}
		return $filterData;
	}
	
	public function getAllSubcategory(){
		$CI =& get_instance();
		$CI->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file', 'key_prefix' => CACHE_KEY_PREFIX));

		$cache_sub_category = null;
		//Check whether state array available in cache or not
		if( ! $cache_sub_category = $CI->cache->get('cache_sub_category') ){
			//Country not found in cache. Getting from Database.
			$CI->db->order_by('sub_sector_name', 'ASC');
			$query = $CI->db->get(TBL_PREFIX.TBL_SUB_SECTOR_LIST);
			$cache_sub_category = $query->result();
			//Storing state array in cache. So that next time state list will be provided from cache.
			$CI->cache->save('cache_sub_category', $cache_sub_category, CACHE_REFRESH_TIME); //in seconds (one hour)
		}
		//Returning state list array
		return $cache_sub_category;
	}
	
	public function getSubCatBycategory( $catId ){
		$CI =& get_instance();
		$allStateList = $this->getAllSubcategory();
		$filterData;
		if ( isset($allStateList) ){
			$filterData = $this->filterData( $allStateList, 'sector_id', $catId );
			//$filterData = $this->filterData( $allStateList, 'state_name', 'Delhi' );
			//log_message('info', 'Filter Data ['.print_r($filterData, true).']');
			if ( !isset( $filterData ) ){
				return null;
			}
		}else{
			return null;
		}
		return $filterData;
	}
		
		public function getStateByRegion($regionId){
			
		
		$CI =& get_instance();
		$allStateList = $this->getAllStates();
		$filterData;
		if ( isset($allStateList) ){
			$filterData = $this->filterData( $allStateList, 'regions_id', $regionId );
			//$filterData = $this->filterData( $allStateList, 'state_name', 'Delhi' );
			log_message('info', 'Filter Data11111 ['.print_r($filterData, true).']');
			if ( !isset( $filterData ) ){
				return null;
			}
		}else{
			return null;
		}
		return $filterData;
	}


	public function getAllCities(){
		$CI =& get_instance();
		$CI->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file', 'key_prefix' => CACHE_KEY_PREFIX));

		$cache_city = null;
		if( !$cache_city = $CI->cache->get('cache_city') ){
			$CI->db->order_by('city_name', 'ASC');
			$query = $CI->db->get(TBL_PREFIX.TBL_STATE_CITY);
			$cache_city = $query->result();
			$CI->cache->save('cache_city', $cache_city, CACHE_REFRESH_TIME);
		}
		return $cache_city;
	}

	public function getCityByStateId( $stateId ){
		$CI =& get_instance();
		$allCityList = $this->getAllCities();
		$filterData;
		if( isset($allCityList) ){
			$filterData = $this->filterData( $allCityList, 'state_id', $stateId );
			//log_message('info', 'Filter Data for city ['.print_r($filterData, true).']');
			if( !isset( $filterData ) ){
				return null;
			}
		}else{
			return null;
		}

		return $filterData;
	}


	public function getCountryNameById( $countryId ){
		$countries = $this->getCountryDetails();
		foreach( $countries as $countryData ){
			if( $countryData->id == $countryId ){
				return $countryData->country_name;
			}
		}
	}

	public function getStateNameById( $stateId, $countryId ){
		$states = $this->getStateByCountry( $countryId );
		foreach( $states as $stateData ){
			if( $stateData->id == $stateId ){
				return $stateData->state_name;
			}
		}
	}
	public function getStateNameByRId( $stateId, $regionId ){
		$states = $this->getStateByRegion( $regionId );
		foreach( $states as $stateData ){
			if( $stateData->id == $stateId ){
				return $stateData->state_name;
			}
		}
	}
	
	public function getSubCatNameByCId( $subcatid, $catid ){
		$states = $this->getSubCatBycategory( $catid );
		foreach( $states as $stateData ){
			if( $stateData->sector_id == $subcatid ){
				return $stateData->sub_sector_name;
			}
		}
	}
	
	public function getCatNameByCId($catid){
		$CI =& get_instance();
		$CI->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file', 'key_prefix' => CACHE_KEY_PREFIX));

			$CI->db->where(array('id'=>$catid));
			$query = $CI->db->get(TBL_PREFIX.TBL_SECTOR);
			$cache_sector = $query->result_array();
		
			return $cache_sectorName     = $cache_sector[0]['sector_name'];
		
	}


	public function getCityNameById( $cityId, $stateId ){
		$cities = $this->getCityByStateId( $stateId );
		foreach( $cities as $cityData ){
			if( $cityData->id == $cityId ){
				return $cityData->city_name;
			}
		}
	}


	//Function to get filtered data based on a key in array and their value
	public function filterData( $findIn, $findKey, $findValue ){
		$filterData = array();
		foreach( $findIn as $key => $arrValue ){
			if( $arrValue->$findKey == $findValue ){
				$filterData[] = $arrValue;
			}
		}
		return $filterData;
	}

}

?>
