<?php

define("PATH_EASYGALLERY", dirname(__FILE__));
ini_set("memory_limit","256M");

class Bible_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function book_name($book_id, $language)
    {
        if (!isset($book_id)) return;
        if (!isset($language)) return;

        /* 待修正資安問題 */
        $tbl_name = 'book_' . $language;

        /* DB opreations */
        $this->db->select('name')->from($tbl_name)->where('id', $book_id)->limit(1);
        $query = $this->db->get();

        foreach ($query->result() as $row) {
            return $row->name;
        }
    }

    function book_info($book, $chapter) {
        if (!isset($book)) return;
        $tbl_name = 'bible_original';

        $book_info['book'] = $book;
        $book_info['abbr'] = $this->bible->book_abbr_by_id($book);
        $book_info['chapter'] = 0;
        $book_info['verse'] = 0;

        /* DB opreations */
        $this->db->select_max('chapter')->from($tbl_name)->where('book', $book);
        $query = $this->db->get();
        $result = $query->row_array();
        $book_info['chapter'] = $result['chapter'];

        /* DB opreations */
        $this->db->select_max('verse')->from($tbl_name)->where('book', $book)->where('chapter', $chapter);
        $query = $this->db->get();
        $result = $query->row_array();
        $book_info['verse'] = $result['verse'];

        return $book_info;

    }

    function book_id_by_abbr($book_abbr)
    {
        if (!isset($book_abbr)) return;

        $tbl_name = 'book_english';

        /* DB opreations */
        $this->db->select('id')->from($tbl_name)->like('abbreviation_3', $book_abbr)->limit(1);
        $query = $this->db->get();

        foreach ($query->result() as $row) {
            return $row->id;
        }

        /* DB opreations */
        $this->db->select('id')->from($tbl_name)->like('alternate', $book_abbr)->limit(1);
        $query = $this->db->get();

        foreach ($query->result() as $row) {
            return $row->id;
        }
    }

    function book_abbr_by_id($book_id, $flag=false)
    {
        if (!isset($book_id)) return;

        $tbl_name = 'book_english';

        if (!$flag) {
            /* DB opreations */
            $this->db->select('abbreviation_3')->from($tbl_name)->where('id', $book_id)->limit(1);
            $query = $this->db->get();

            foreach ($query->result() as $row) {
                return strtolower($row->abbreviation_3);
            }
        } else {
            /* DB opreations */
            $this->db->select('alternate')->from($tbl_name)->where('id', $book_id)->limit(1);
            $query = $this->db->get();

            foreach ($query->result() as $row) {
                return strtolower($row->alternate);
            }
        }
    }

    function read_by_serial(array $serial, $with_strongs=false, $abbr_to_id=true)
    {
        if (!isset($serial)) return;

        if ($abbr_to_id) {
            $book = $this->bible->book_id_by_abbr($serial[0]);
        } else {
            $book = $serial[0];
        }
        $chapter = $serial[1];
        $verse = $serial[2];

        $tbl_name = 'bible_original';

        /* DB opreations */
        $this->db->select('word, strongs, morph')->from($tbl_name)->where('book', $book)->where('chapter', $chapter)->where('verse', $verse);
        $query = $this->db->get();

        $words_array = array();
        foreach ($query->result() as $row) {

            if ($with_strongs) {
                $word = array();
                $word['word'] =  $row->word;
                $word['strongs'] =  $row->strongs;
                $word['morph'] = $row->morph;
                $words_array[] = $word;
            } else {
                $word = $row->word;
                $words_array[] = $word;
            }
        }

        return $words_array;
    }

    function translation_by_serial_version($serial, $version)
    {
        if (!isset($serial)) return;

        $book = $this->bible->book_id_by_abbr($serial[0]);
        $chapter = $serial[1];
        $verse = $serial[2];

        /* 待修正資安問題 */
        $tbl_name = 'bible_' . $version;
        $select_obj = 'words';
        $where_book = 'book ';
        $where_chapter = 'chapter';
        $where_verse = 'verse';

        /* 手動判斷資料庫結構... */
        if ($version === 'cjb') {
            $select_obj = 'Scripture';
            $where_book = 'Book ';
            $where_chapter = 'Chapter';
            $where_verse = 'Verse';
        }
        if ($version === 'cunp') {
            $select_obj = 'txt';
            $where_book = 'engs';
            $where_chapter = 'chap';
            $where_verse = 'sec';
        }

        /* DB opreations */
        $this->db->select($select_obj)->from($tbl_name)->where($where_book, $book)->where($where_chapter, $chapter)->where($where_verse, $verse)->limit(1);
        $query = $this->db->get();
        //print $this->db->last_query();
        foreach ($query->result() as $row) {
            return trim($row->$select_obj);
        }

        $book = $this->bible->book_abbr_by_id($book, true);

        $this->db->select($select_obj)->from($tbl_name)->where($where_book, $book)->where($where_chapter, $chapter)->where($where_verse, $verse)->limit(1);
        $query = $this->db->get();
        //print $this->db->last_query();
        foreach ($query->result() as $row) {
            return trim($row->$select_obj);
        }

    }

    function make_message($words_array)
    {
        if (!isset($words_array)) return;

        $message = '';

        foreach ($words_array as $row) {
            $message .= $row;
        }

        return $message;
    }

    function strongs_number($word, $type='hebrew')
    {
        if (!isset($word)) return;

        /* 待修正資安問題 */
        $tbl_name = 'lexicon_' . $type;

        /* DB opreations */
        $this->db->select('strongs')->from($tbl_name)->where('base_word', $word)->limit(1);
        $query = $this->db->get();

        foreach ($query->result() as $row) {
            return $row->strongs;
        }
    }

    function strongs_version($words_array, $type='hebrew')
    {
        if (!isset($words_array)) return;

        $words_with_strongs = array();

        foreach ($words_array as $word) {
            $item['strongs'] = $word['strongs'];
            $item['word'] = $word['word'];

            $words_with_strongs[] = $item;
        }

        return $words_with_strongs;
    }

    function translation_pos($pos, $language='zh-hant')
    {
        if (!isset($pos)) return;

        /* 要移到資料庫嗎？ */
        $text = array(
            'v' => '動詞',
            'n' => '名詞',
            'a' => '形容詞',
            'adv' => '副詞',
            'n-f' => '陰性名詞',
            'n-m' => '陽性名詞',
            'r' => '代詞',
            'prt' => '分詞',
            'prep' => '介系詞',
            'conj' => '連接詞',
            'n-pr-m' => '陽性專有名詞',
            'n-m n-pr-m' => '陽性名詞、陽性專有名詞',
            'n-f n-pr-f' => '陰性名詞、陰性專有名詞',
            'n-pr-f' => '陰性專有名詞',
            'n-pr' => '專有名詞'

        );

        if (isset($text[$pos]))
            return $text[$pos];
        else
            return $pos;
    }

    function part_of_speech($strongs, $type)
    {
        if (!isset($strongs)) return;
        if (!isset($type)) return;

        /* 待修正資安問題 */
        $tbl_name = 'lexicon_' . $type;

        if ($type == 'greek') return;

        /* DB opreations */
        $this->db->select('part_of_speech')->from($tbl_name)->where('strongs', $strongs)->limit(1);
        $query = $this->db->get();

        foreach ($query->result() as $row) {
            $pos = $row->part_of_speech;
            return $this->translation_pos($pos);
        }
    }

    /* 英文解釋 */
    function usage_text($strongs, $type)
    {
        if (!isset($strongs)) return;
        if (!isset($type)) return;

        /* 待修正資安問題 */
        $tbl_name = 'lexicon_' . $type;

        /* DB opreations */
        $this->db->select('usage')->from($tbl_name)->where('strongs', $strongs)->limit(1);
        $query = $this->db->get();

        foreach ($query->result() as $row) {
            return $row->usage;
        }
    }

    function lexicon_data($strongs, $type='hebrew')
    {
        if (!isset($strongs)) return;
        if (!isset($type)) return;

        /* 待修正資安問題 */
        $tbl_name = 'lexicon_' . $type;

        /* DB opreations */
        $this->db->select('data')->from($tbl_name)->where('strongs', $strongs)->limit(1);
        $query = $this->db->get();

        foreach ($query->result() as $row) {
            $data = json_decode($row->data);
            return $data;
        }
    }

    function word_by_strongs($strongs, $type='hebrew')
    {
        if (!isset($strongs)) return;
        if (!isset($type)) return;

        /* 待修正資安問題 */
        $tbl_name = 'lexicon_' . $type;

        /* DB opreations */
        $this->db->select('base_word')->from($tbl_name)->where('strongs', $strongs)->limit(1);
        $query = $this->db->get();

        foreach ($query->result() as $row) {
            return $row->base_word;
        }

    }

    function lexicon_fhl($strongs, $type='hebrew')
    {
        if (!isset($strongs)) return;
        if (!isset($type)) return;

        $strongs = str_pad($strongs , 5, '0', STR_PAD_LEFT);

        /* 待修正資安問題 */
        $tbl_name = '';
        if ($type === 'hebrew') {
            $tbl_name = 'hfhl';
            $where_obj = 'hsnum';
        }
        if ($type === 'greek') {
            $tbl_name = 'gfhl';
            $where_obj = 'gsnum';
        }

        /* DB opreations */
        $this->db->select('txt')->from($tbl_name)->where($where_obj, $strongs)->limit(1);
        $query = $this->db->get();

        foreach ($query->result() as $row) {
            $fhl = explode("\n\r", $row->txt);
            unset($fhl[0]);
            $result = array();
            foreach ($fhl as $txt) {

                $result[] = $txt;
            }
            return $result;
        }
    }

    function make_lexicon($words_array, $serial, $type='hebrew')
    {
        if (!isset($words_array)) return;

        $lexicon_array = array();

        $wid = 1;
        foreach ($words_array as $word) {
            $strongs = $word['strongs'];
            $data = $this->lexicon_data($strongs, $type);
            if (!empty($data)) {
                $item['word'] = $this->word_by_strongs($strongs, $type);
                $item['strongs'] = $strongs;
                if ($type == 'greek') {
                    $item['part_of_speech'] = $word['morph'];
                } else {
                    $item['part_of_speech'] = $this->part_of_speech($strongs, $type);
                }
                $item['def'] = $data->def->short;
                $item['deriv'] = isset($data->deriv) ? $data->deriv : '';
                $item['sbl'] = $data->pronun->sbl;
                $item['fhl'] = $this->lexicon_fhl($strongs, $type);
                //$item['wform'] = $this->wform($wid++, $serial, $type);

                $lexicon_array[] = $item;
            }
        }

        return $lexicon_array;
    }

    function all_lexicon($type='hebrew')
    {
        if (!isset($type)) return;

        /* 待修正資安問題 */
        $tbl_name = 'lexicon_' . $type;

        /* DB opreations */
        $this->db->select('strongs')->from($tbl_name);
        $query = $this->db->get();

        $result = array();
        foreach ($query->result() as $row) {
            $result[] = $row->strongs;
        }

        return $result;
    }

    function bible_chapter_numbers($book)
    {
        if (!isset($book)) return;

        $tbl_name = 'bible_original';

        /* DB opreations */
        $this->db->select_max('chapter')->from($tbl_name)->where('book', $book);
        $query = $this->db->get();
        $result = $query->row_array();
        return $result['chapter'];
    }

    function bible_verse_numbers($book, $chapter)
    {
        if (!isset($book)) return;
        if (!isset($chapter)) return;

        $tbl_name = 'bible_original';

        /* DB opreations */
        $this->db->select_max('verse')->from($tbl_name)->where('book', $book)->where('chapter', $chapter);
        $query = $this->db->get();
        $result = $query->row_array();

        return $result['verse'];
    }

    function next_serial($serial)
    {
        if (!isset($serial)) return;

        $next_serial = array();
        $next_serial[0] = $this->bible->book_id_by_abbr($serial[0]);
        $next_serial[1] = $serial[1];
        $next_serial[2] = $serial[2];

        $next_serial[2] += 1;

        $tbl_name = 'bible_original';

        /* 找看看下一節有無資料 */
        /* DB opreations */
        $this->db->select('verse')->from($tbl_name)->where('book', $next_serial[0])->where('chapter', $next_serial[1])->where('verse', $next_serial[2])->limit(1);
        $query = $this->db->get();

        foreach ($query->result() as $row) {
            if (isset($row->verse)) {
                $next_serial[0] = $this->bible->book_abbr_by_id($next_serial[0]);
                return $next_serial;
            }
        }

        /* 改找下一章 */
        $next_serial[1] += 1;
        $next_serial[2] = 1;
        /* DB opreations */
        $this->db->select('verse')->from($tbl_name)->where('book', $next_serial[0])->where('chapter', $next_serial[1])->where('verse', $next_serial[2])->limit(1);
        $query = $this->db->get();

        foreach ($query->result() as $row) {
            if (isset($row->verse)) {
                $next_serial[0] = $this->bible->book_abbr_by_id($next_serial[0]);
                return $next_serial;
            }
        }

        /* 改找下一本 */
        $next_serial[0] += 1;
        $next_serial[1] = 1;
        $next_serial[2] = 1;
        /* DB opreations */
        $this->db->select('verse')->from($tbl_name)->where('book', $next_serial[0])->where('chapter', $next_serial[1])->where('verse', $next_serial[2])->limit(1);
        $query = $this->db->get();

        foreach ($query->result() as $row) {
            if (isset($row->verse)) {
                $next_serial[0] = $this->bible->book_abbr_by_id($next_serial[0]);
                return $next_serial;
            }
        }

        /* 沒有下一節（到最後面了） */
        return array();
    }

    function prev_serial($serial)
    {
        if (!isset($serial)) return;

        $prev_serial = array();
        $prev_serial[0] = $this->bible->book_id_by_abbr($serial[0]);
        $prev_serial[1] = $serial[1];
        $prev_serial[2] = $serial[2];

        $tbl_name = 'bible_original';

        $prev_serial[2] -= 1;

        /* 先直接找看看上一節有無資料 */
        /* DB opreations */
        $this->db->select('verse')->from($tbl_name)->where('book', $prev_serial[0])->where('chapter', $prev_serial[1])->where('verse', $prev_serial[2])->limit(1);
        $query = $this->db->get();

        foreach ($query->result() as $row) {
            if (isset($row->verse)) {
                $prev_serial[0] = $this->bible->book_abbr_by_id($prev_serial[0]);
                return $prev_serial;
            }
        }

        $prev_serial[2] = $serial[2];
        /* 取得本節 id */
        $this->db->select('id')->from($tbl_name)->where('book', $prev_serial[0])->where('chapter', $prev_serial[1])->where('verse', $prev_serial[2])->limit(1);
        $query = $this->db->get();

        $id = 0;
        foreach ($query->result() as $row) {
            $id = $row->id;
        }

        $id -= 1;
        /* 改直接取得上一段的章節 */
        do {
            /* DB opreations */
            $this->db->select('book, chapter, verse')->from($tbl_name)->where('id', $id)->limit(1);
            $query = $this->db->get();

            foreach ($query->result() as $row) {
                $prev_serial[0] = $this->bible->book_abbr_by_id($row->book);
                $prev_serial[1] = $row->chapter;
                $prev_serial[2] = $row->verse;

                if ($prev_serial[2] != 255) {
                    return $prev_serial;
                }
            }
            $id -= 1;
        } while ($prev_serial[2] == 255);

        /* 沒有上一節（到最前面了） */
        return array();
    }

    function next_book_by_serial($serial)
    {
        if (!isset($serial)) return;

        $next_serial = array();
        $next_serial[0] = $this->bible->book_id_by_abbr($serial[0]);

        $next_serial[0] += 1;

        $tbl_name = 'bible_original';

        /* 找看看下一本有無資料 */
        /* DB opreations */
        $this->db->select('verse')->from($tbl_name)->where('book', $next_serial[0])->limit(1);
        $query = $this->db->get();

        foreach ($query->result() as $row) {
            if (isset($row->verse)) {
                $next_serial[0] = $this->bible->book_abbr_by_id($next_serial[0]);
                $next_serial[1] = 1;
                $next_serial[2] = 1;
                return $next_serial;
            }
        }

        /* 沒有下一本（到最後面了） */
        return array();
    }

    function prev_book_by_serial($serial)
    {
        if (!isset($serial)) return;

        $next_serial = array();
        $next_serial[0] = $this->bible->book_id_by_abbr($serial[0]);

        $next_serial[0] -= 1;

        $tbl_name = 'bible_original';

        /* 找看看下一本有無資料 */
        /* DB opreations */
        $this->db->select('verse')->from($tbl_name)->where('book', $next_serial[0])->limit(1);
        $query = $this->db->get();

        foreach ($query->result() as $row) {
            if (isset($row->verse)) {
                $next_serial[0] = $this->bible->book_abbr_by_id($next_serial[0]);
                $next_serial[1] = 1;
                $next_serial[2] = 1;
                return $next_serial;
            }
        }

        /* 沒有下一本（到最後面了） */
        return array();
    }

    function book_list($keyword, $language='english', $with_hebrew=false)
    {
        if (!isset($keyword)) return;

        $type = 'range';
        $num_list = array();
        $start = 1;
        $end = 66;

        /* 有空換成 dict 或 資料庫 */
        if ($keyword === 'tanakh') {
            $end = 39;
        }
        if ($keyword === 'torah') {
            $end = 5;
        }
        if ($keyword === 'goodnews') {
            $start = 40;
            $end = 43;
        }
        if ($keyword === 'acts') {
            $type = 'pick';
            $num_list = array(44);
        }
        if ($keyword === 'letters') {
            $start = 45;
            $end = 65;
        }
        if ($keyword === 'letters_paul_public') {
            $start = 45;
            $end = 53;
        }
        if ($keyword === 'letters_paul_private') {
            $start = 54;
            $end = 57;
        }
        if ($keyword === 'letters_general') {
            $start = 58;
            $end = 65;
        }
        if ($keyword === 'revelation') {
            $type = 'pick';
            $num_list = array(66);
        }
        if ($keyword === 'prophets') {
            $type = 'pick';
            $num_list = array(6,7,9,10,11,12,23,24,26,28,29,30,31,32,33,34,35,36,37,38,39);
        }
        if ($keyword === 'writings') {
            $type = 'pick';
            $num_list = array(19,20,18,22,8,25,21,17,27,15,16,13,14);
        }

        /* 待修復資安問題 */
        $tbl_name = 'book_' . $language;

        if ($type === 'range') {
            /* DB opreations */
            $this->db->select('id, name');
            $query = $this->db->get($tbl_name, $end-$start+1, $start-1);
        }
        if ($type === 'pick') {
            /* DB opreations */
            $list = implode(",", $num_list);
            $order = sprintf('FIELD(id, %s)', implode(",", $num_list));
            $query = $this->db->query("SELECT `id`, `name` FROM `$tbl_name` WHERE `id` IN ($list) ORDER BY $order;");
        }

        $book_list = array();

        foreach ($query->result() as $row) {
            $book = array();
            $book['name'] = $row->name;
            $book['id'] = $row->id;
            $book['abbr'] = $this->book_abbr_by_id($row->id);
            if ($with_hebrew) {
                $book['hebrew'] =$this->book_name($row->id, 'hebrew');
            }

            $book_list[] = $book;
        }

        return $book_list;
    }

    function multi_unique($array) {
        foreach ($array as $k=>$na)
            $new[] = serialize($na);
        $uniq = array_unique($new);
        foreach($uniq as $k=>$ser)
            $new1[] = unserialize($ser);
        return ($new1);
    }

    function searchTextsByStrongsJSON($strongs, $type='hebrew')
    {
        if (!isset($strongs)) return;

        $tbl_name = 'bible_original';

        if ($type === 'greek') {
            $prefix = 'G';
            $where = "book >= 40 AND book <= 66";
        } else {
            $prefix = 'H';
            $where = "book >= 1 AND book <= 39";
        }

        /* DB opreations */
        $this->db->select('strongs, word, book, chapter, verse')->from($tbl_name)->where('strongs', $strongs)->where($where);
        $query = $this->db->get();

        $i = 1;
        $text_serial = array();
        foreach ($query->result() as $row) {
            $w = array();

            $text['strongs'] = $row->strongs;
            $text['word'] = $row->word;
            $text['book'] = $row->book;
            $text['book_abbr'] = $this->book_abbr_by_id($row->book);
            $text['book_name_chinese'] = $this->book_name($row->book, 'chinese');
            $text['chapter'] = $row->chapter;
            $text['verse'] = $row->verse;
            $serial = array($text['book'], $text['chapter'], $text['verse']);
            $text['text'] = $this->read_by_serial($serial, true, false);

            $title = '<a target="_blank" href="../reading/' . $text['book_abbr'] . '.' . $text['chapter'] . '.' . $text['verse'] . '.html?strongs=' . $prefix . $text['strongs'] . '">' . $text['book_name_chinese'] . ' ' . $text['chapter'] . ':' . $text['verse'] . '</a>';
            $orginText = '';
            foreach ($text['text'] as $k) {
                if ($k['strongs'] === $text['strongs']) {
                    $orginText .= '<span class="highlight" data-ref="' . $prefix . $k['strongs'] . '">' . $k['word'] . '</span> ';
                } else {
                    $orginText .= '<span data-ref="' . $prefix . $k['strongs'] . '">' . $k['word'] . '</span> ';
                }
            }

            $w[0] = strval($i++);
            $w[1] = '<span class="' . $type . '">' . $orginText . '</span>';
            $w[2] = $title;

            $text_serial[] = $w;
        }

        if (!empty($text_serial)) {
            $data["aaData"] = $this->multi_unique($text_serial);
            $result = $data;
            return json_encode($result, JSON_PRETTY_PRINT);
        } else {
            return '';
        }
    }

    /* 目前取得的資料不完整，不使用 */
    function wform($wid, $serial, $type='hebrew')
    {
        if (!isset($wid)) return;
        if (!isset($serial)) return;

        /* 待修正資安問題 */
        if ($type === 'hebrew') {
            $tbl_name = 'lparsing';
        }
        if ($type === 'greek') {
            $tbl_name = 'fhlwhparsing';
        }

        $serial[0] = $this->bible->book_id_by_abbr($serial[0]);
        $serial[0] = $this->bible->book_abbr_by_id($serial[0], true);

        /* DB opreations */
        $this->db->select('wform')->from($tbl_name)->where('engs', $serial[0])->where('chap', $serial[1])->where('sec', $serial[2])->where('wid', strval($wid))->limit(1);
        $query = $this->db->get();

        $result = $query->row_array();
        if (!isset($result['wform'])) {
            return '無';
        }
        $text = $result['wform'];

        /* 轉換 COBSHebrew 為 Unicode */

        $ctable = array(
            '`' => '׃',
            'p' => 'פ',
            's' => 'ס',
            '"G' => 'גָּ',
            '<' => 'גֶּ',
            '>G' => 'גְּ',
            '?G' => 'גֱּ',
            ':G' => 'גַּ',
            'EG' => 'גֵּ',
            'IG' => 'גִּ',
            'OG' => 'גֹּ',
            'UG' => 'גֻּ',
            '\G' => 'גֳּ',
            '}G' => 'גֲּ',
            "'B" => 'בָּ',
            ',B' => 'בֶּ',
            '.B' => 'בְּ',
            '/B' => 'בֱּ',
            ';B' => 'בַּ',
            'eB' => 'בֵּ',
            'iB' => 'בִּ',
            'oB' => 'בֹּ',
            'uB' => 'בֻּ',
            '|B' => 'בֳּ',
            ']B' => 'בֲּ',
            'oR' => 'רֹּ',
            '!' => 'ן',
            'A' => 'וֹ',
            'G' => 'גּ',
            'N' => 'נּ',
            'W' => 'וּ',
            'Y' => 'יּ',
            'Z' => 'זּ',
            'g' => 'ג',
            'n' => 'נ',
            'w' => 'ו',
            'y' => 'י',
            'z' => 'ז',
            'D' => 'דּ',
            'R' => 'רּ',
            'd' => 'ד',
            'r' => 'ר',
            '#' => 'ץ',
            '$' => 'ך',
            '%' => 'ךְ',
            '&' => 'ךּ',
            '@' => 'ף',
            '^' => 'ךָ',
            'B' => 'בּ',
            'C' => 'צּ',
            'F' => 'שּׂ',
            'H' => 'הּ',
            'J' => 'טּ',
            'K' => 'כּ',
            'L' => 'לּ',
            'M' => 'מּ',
            'P' => 'פּ',
            'Q' => 'קּ',
            'S' => 'סּ',
            'T' => 'תּ',
            'V' => 'שּׁ',
            'X' => 'ש',
            '[' => 'ע',
            'a' => 'א',
            'b' => 'ב',
            'c' => 'צ',
            'f' => 'שׂ',
            'h' => 'ה',
            'j' => 'ט',
            'k' => 'כ',
            'l' => 'ל',
            'm' => 'מ',
            'p' => 'פ',
            'q' => 'ק',
            's' => 'ס',
            't' => 'ת',
            'v' => 'שׁ',
            'x' => 'ח',
            '~' => 'ם'

        );

        foreach ($ctable as $k => $v) {
            $text = str_replace($k, $v, $text);
        }

        return $text;
    }



}