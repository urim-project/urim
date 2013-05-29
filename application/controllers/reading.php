<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reading extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('Bible_model', 'bible', TRUE);
	}

	public function index($serial='gen.1.1')
	{
		$_serial = explode('.', $serial);
		if (empty($_serial[0])) $_serial[0] = 'gen';
		$data['info']['book'] = $this->bible->book_id_by_abbr($_serial[0]);
		if (empty($_serial[1])) $_serial[1] = 1;
		$data['info']['chapter'] = $_serial[1];
		if (empty($_serial[2])) $_serial[2] = 1;
		$data['info']['verse'] = $_serial[2];

		$type= 'hebrew';
		if ($data['info']['book'] > 39) {
			$type = 'greek';
		}

		$data['info']['book_info'] = $this->bible->book_info($data['info']['book'], $data['info']['chapter']);
		$data['info']['book_chinese'] = $this->bible->book_name($data['info']['book'], 'chinese');
		$data['info']['book_hebrew'] = $this->bible->book_name($data['info']['book'], 'hebrew');
		$data['info']['book_english'] = $this->bible->book_name($data['info']['book'], 'english');

		$words_array = $this->bible->read_by_serial($_serial, true);
		if (empty($words_array)) {
			$path = base_url();
			header("location: $path");
		}

		$data['word']['with_strongs'] = $words_array;
		$data['word']['lang_type'] = 'hebrew';
		$data['word']['translation']['en'] = array(
			'kjv' => $this->bible->translation_by_serial_version($_serial, 'kjv')
		);
		$data['word']['translation']['zh-hant'] = array(
			'cunp' => $this->bible->translation_by_serial_version($_serial, 'cunp'),
		);

		$data['lexicon'] = $this->bible->make_lexicon($words_array, $_serial, $type);

		$data['layout']['next'] = implode('.', $this->bible->next_serial($_serial));
		$data['layout']['prev'] = implode('.', $this->bible->prev_serial($_serial));
		$data['layout']['nextbook'] = implode('.', $this->bible->next_book_by_serial($_serial));
		$data['layout']['prevbook'] = implode('.', $this->bible->prev_book_by_serial($_serial));

		$data['layout']['bible']['torah'] = $this->bible->book_list('torah', 'chinese', true);
		$data['layout']['bible']['prophets'] = $this->bible->book_list('prophets', 'chinese', true);
		$data['layout']['bible']['writings'] = $this->bible->book_list('writings', 'chinese', true);
		$data['layout']['bible']['goodnews'] = $this->bible->book_list('goodnews', 'chinese', true);
		$data['layout']['bible']['acts'] = $this->bible->book_list('acts', 'chinese', true);
		$data['layout']['bible']['letters_paul_public'] = $this->bible->book_list('letters_paul_public', 'chinese', true);
		$data['layout']['bible']['letters_paul_private'] = $this->bible->book_list('letters_paul_private', 'chinese', true);
		$data['layout']['bible']['letters_general'] = $this->bible->book_list('letters_general', 'chinese', true);
		$data['layout']['bible']['revelation'] = $this->bible->book_list('revelation', 'chinese', true);


		$data['layout']['type'] = $type;
		$data['layout']['strongs_note'] = $type == 'hebrew' ? 'H' : 'G';


		/* 製作靜態版本（目前暫時無法自動處理路由問題） */

		$this->load->helper('file');
		$data['static'] = true;
		$static_page = $this->load->view('reading_view', $data, true);
		$force_static = false;
		$path = './static/reading/' . $_serial[0] . '.' . $_serial[1] . '.' . $_serial[2] . '.html';
		if (! write_file($path, $static_page)) {
		     echo 'Unable to write the file';
		}
		$data['static'] = false;


		$this->load->view('reading_view', $data);
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


/* End of file homepage.php */
/* Location: ./application/controllers/homepage.php */