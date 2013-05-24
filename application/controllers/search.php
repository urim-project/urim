<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
        $this->load->model('Bible_model', 'bible', TRUE);
    }

    public function index($strongs_with_prefix='H7225')
    {
        $type = '';
        $number = (int)substr($strongs_with_prefix, 1, strlen($strongs_with_prefix));
        $prefix = substr_replace($strongs_with_prefix, '', 1);
        if (strtoupper($prefix) === 'H') {
            $type = 'hebrew';
        }
        if (strtoupper($prefix) === 'G') {
            $type = 'greek';
        }
        if ($type === '') return;

        $data['info']['type'] = $type;
        $data['info']['strongs'] = strtoupper($prefix) . $number;
        $data['info']['word'] = $this->bible->word_by_strongs($number, $type);
        $searchTexts = $this->bible->searchTextsByStrongsJSON($number, $type);

        /* 製作 json */

        $this->load->helper('file');
        $data['static'] = true;

        $static_page = $searchTexts;
        $force_static = false;
        $path = './static/search/' . $data['info']['strongs'] . '.json';
        if (! write_file($path, $static_page)) {
             echo 'Unable to write the file';
        }

        /* 製作靜態版本 */

        $static_page = $this->load->view('search_view', $data, true);
        $force_static = false;
        $path = './static/search/' . $data['info']['strongs'] . '.html';
        if (! write_file($path, $static_page)) {
             echo 'Unable to write the file';
        }
        $data['static'] = false;

        $this->load->view('search_view', $data);
    }

    function _remap($method)
    {
      $param_offset = 2;

      // Default to index
      if ( ! method_exists($this, $method))
      {
        // We need one more param
        $param_offset = 1;
        $method = 'index';
      }

      // Since all we get is $method, load up everything else in the URI
      $params = array_slice($this->uri->rsegment_array(), $param_offset);

      // Call the determined method with all params
      call_user_func_array(array($this, $method), $params);
    }

}