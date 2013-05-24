<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Make extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
        $this->load->model('Bible_model', 'bible', TRUE);
    }

    public function index()
    {
        $url = '';

        $lexicon_hebrew = $this->bible->all_lexicon('hebrew');
        $lexicon_greek = $this->bible->all_lexicon('greek');
        $bible_books = 66;

        foreach ($lexicon_hebrew as $strongs) {
            $url = site_url('search/H' . $strongs . '.html');
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_exec($ch);
        }

        foreach ($lexicon_greek as $strongs) {
            $url = site_url('search/G' . $strongs . '.html');
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_exec($ch);
        }

        for ($i = 1; $i <= $bible_books; $i++) {
          $chpaters = $this->bible->bible_chapter_numbers($i);
          for ($j = 1; $j <= $chpaters; $j++) {
            $verses = $this->bible->bible_verse_numbers($i, $j);
            for ($k = 1; $k <= $verses; $k++) {
                $abbr = $this->bible->book_abbr_by_id($i);
                $url = site_url('reading/' . $abbr . '.' . $j . '.' . $k . '.' . '.html');
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                curl_exec($ch);
            }
          }
        }

        echo 'Done!';
    }


}