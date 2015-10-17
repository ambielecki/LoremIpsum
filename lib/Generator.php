<?php
/*
 * This file is part of the Badcow Lorem Ipsum Generator.
 *
 * (c) Samuel Williams <sam@badcow.co>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ambielecki\LoremIpsum;

class Generator
{
    /**
     * The mean word length of a sentence
     *
     * @var float
     */
    protected $sentenceMean = 24.460;

    /**
     * The standard deviation of words in a sentence
     *
     * @var float
     */
    protected $sentenceStDev = 5.080;

    /**
     * Mean number of sentences per paragraph
     *
     * @var float
     */
    protected $paragraphMean = 5.800;

    /**
     * The standard deviation of sentences in a paragraph
     *
     * @var float
     */
    protected $paragraphStDev = 1.930;

    /**
     * @var array
     */
    protected $words = array('a', 'ampaS', 'aqtu', 'avwl', 'baH', 'baQ', 'batlh', 'beH', 'benal', 'betleH bey', 'bij', 'bireS', 'blQa HeH', 'boDegh', 'bomwl', 'boqHa', 'bov', 'buSHa', 'chab', 'chagh',
        'chaj', 'chanaS', 'chaqu', 'chaw', 'chergh', 'chIj', 'choba', 'chong', 'chor bargh', 'chu', 'chup', 'chuwl', 'DaH', 'Daq', 'Dav', 'De jengva', 'Denlb', 'DeS', 'Diron', 'Dlj',
        'Do Qe', 'Doj', 'Dor', 'Dub', 'Dum', 'Duran lung Dir', 'eb', 'ejyo', 'emamnal', 'eSpanya', 'ghaH', 'ghaq', 'ghawran', 'ghem', 'ghew', 'ghIm', 'ghISDen', 'ghob', 'ghoH',
        'ghoma', 'ghor', 'ghubDaQ', 'ghur', 'HaD', 'HanDogh', 'Hargh', 'He', 'Heghtay', 'Hergh Qaywl', 'HISlaH', 'Hlch', 'Ho', 'Hogh', 'Hom', 'Hoqra', 'HotIhwI', 'HubneS', 'Huj',
        'Hurgh', 'Hutlh', 'Ij', 'IrneH', 'Iw', 'jaD', 'janluq pIqarD', 'jatIh', 'je', 'jemsS tly qlrq', 'jey', 'jIj', 'jIv', 'jol', 'joq', 'joS', 'juHqo', 'lab', 'lam', 'lat', 'leH',
        'lengwl', 'lev', 'lIghongan', 'lInqI', 'lo law', 'loghqam', 'lolaHghach', 'lopno', 'lot', 'luH', 'lupDujHom', 'lutlh', 'maj', 'maqoch', 'matlh', 'may', 'megh', 'meQ', 'meyIS
        tIr', 'millogh qonwl', 'mIQ', 'mIva', 'moH', 'mon', 'moS', 'much', 'muH', 'mupwl', 'mutlhegh', 'naD', 'nagh Dir', 'namtun', 'naQ', 'nav', 'neb', 'nem', 'neSlo', 'ngagh',
        'ngav', 'ngeHbej', 'ngevwl', 'ngoch', 'ngong', 'ngugh', 'nIb', 'nIM wIb ngogh', 'nISwl Hlch', 'nlvnav', 'noD', 'nooch', 'nov', 'nuH', 'nuQ', 'o', 'oj', 'orghen rojmab', 'ov',
        'pab', 'paH bID', 'parmaqqay', 'paw', 'pegh', 'peq', 'pIch', 'pIlmoH', 'pIw', 'poj', 'poQ', 'potlh', 'puDaH', 'pum', 'puq poH', 'pUqaD', 'puy', 'QaD', 'qaH', 'qalmoH', 'Qan',
        'Qapla', 'qarghan', 'qat', 'Qaw', 'qaywl', 'qegh', 'qem', 'qeq', 'qev', 'qeylIS betleH', 'qIbHeS', 'QIH', 'qImHa', 'qIq', 'qIvon', 'qoD', 'Qol', 'Qong', 'QopmoH', 'qorgh',
        'Qotlh', 'qub', 'qugh', 'Qul', 'qumwI', 'QuQ', 'qutluch', 'quvmoH', 'ram', 'raSya', 'ray', 'rejmorgh', 'rIHwI', 'rIthIh', 'roj', 'ron', 'roS', 'run', 'rutlh', 'Saj',
        'Saqghom', 'Saw', 'Sehlaw', 'Ser', 'Sibl', 'Sim', 'So', 'Soj naQ', 'SoQ', 'SoSbora', 'Sub', 'Sulop', 'Surchem', 'Suv', 'ta', 'taH', 'tam', 'taS', 'teb', 'tengchaH', 'tera
         pebot', 'teybe', 'tIH', 'tiHomIraH', 'tIQ', 'tIwI', 'tlham', 'tlhay', 'tlhlv', 'tlhon', 'tlhoy', 'tlhtb', 'tlhup', 'tlthlmqaH', 'toDSaH', 'toq', 'towaQ', 'tungHa', 'tuqvol',
        'uD Hawtaj', 'um', 'uS', 'vaD', 'van', 'vaSa', 'veD', 'vemmoH', 'veregngan HaDlbaH', 'vID', 'vIng', 'vIychorgh', 'voQ', 'vulqan', 'vutwl', 'waH', 'wanI', 'way', 'wel', 'wew',
        'wlv', 'woj', 'wovmoHwl', 'wuv', 'yaj', 'yatIh', 'yejquv', 'yIn', 'yIt', 'yoDegh', 'yopwaH buq', 'yu', 'yuQHom');
    //protected $words = array('fred', 'ted', 'ed');

    /**cd 
     * Set an array of words. Removes existing words.
     *
     * @codeCoverageIgnore
     *
     * @param $words
     */
    public function setWords(array $words)
    {
        $this->words = $words;
    }

    /**
     * Add a single or array of multiple words to the generator.
     *
     * @codeCoverageIgnore
     *
     * @param string|array $words
     */
    public function addWords($words)
    {
        if (is_array($words)) {
            $this->words = array_merge($this->words, $words);

            return;
        }

        $this->words[] = $words;
    }

    /**
     * @codeCoverageIgnore
     *
     * @return array
     */
    public function getWords()
    {
        return $this->words;
    }

    /**
     * @codeCoverageIgnore
     *
     * @param float $paragraphMean
     */
    public function setParagraphMean($paragraphMean)
    {
        $this->paragraphMean = (float) $paragraphMean;
    }

    /**
     * @codeCoverageIgnore
     *
     * @return float
     */
    public function getParagraphMean()
    {
        return $this->paragraphMean;
    }

    /**
     * @codeCoverageIgnore
     *
     * @param float $paragraphStDev
     */
    public function setParagraphStDev($paragraphStDev)
    {
        $this->paragraphStDev = (float) $paragraphStDev;
    }

    /**
     * @codeCoverageIgnore
     *
     * @return float
     */
    public function getParagraphStDev()
    {
        return $this->paragraphStDev;
    }

    /**
     * @codeCoverageIgnore
     *
     * @param float $sentenceMean
     */
    public function setSentenceMean($sentenceMean)
    {
        $this->sentenceMean = (float) $sentenceMean;
    }

    /**
     * @codeCoverageIgnore
     *
     * @return float
     */
    public function getSentenceMean()
    {
        return $this->sentenceMean;
    }

    /**
     * @codeCoverageIgnore
     *
     * @param float $sentenceStDev
     */
    public function setSentenceStDev($sentenceStDev)
    {
        $this->sentenceStDev = (float) $sentenceStDev;
    }

    /**
     * @codeCoverageIgnore
     *
     * @return float
     */
    public function getSentenceStDev()
    {
        return $this->sentenceStDev;
    }

    /**
     * Get an array of random words from $words
     *
     * @param int $count
     * @return array
     */
    public function getRandomWords($count)
    {
        $words = array();

        for ($i = 0; $i < $count; $i++) {
            $word = $this->words[array_rand($this->words)];
            if ($i > 0 && $words[$i - 1] === $word) {
                $i--;
                continue;
            }

            $words[] = $word;
        }

        return $words;
    }

    /**
     * Get an array of sentences
     *
     * @param int $count
     * @return array
     */
    public function getSentences($count)
    {
        $sentences = array();

        for ($i = 0; $i < $count; $i++) {
            $wordCount = (int) Statistics::gauss_ms($this->sentenceMean, $this->sentenceStDev);
            $sentence = $this->getRandomWords($wordCount);
            $sentences[] = $this->toSentence($sentence);
        }

        return $sentences;
    }

    /**
     * Get an array of paragraphs
     *
     * @param $count
     * @return array
     */
    public function getParagraphs($count)
    {
        $paragraphs = array();

        for ($i = 0; $i < $count; $i++) {
            $number = Statistics::gauss_ms($this->paragraphMean, $this->paragraphStDev);
            $number = ($number < 1) ? 1 : $number;
            $sentences = $this->getSentences($number);
            $paragraphs[] = implode(' ', $sentences);
        }

        return $paragraphs;
    }

    /**
     * Inserts commas and periods in the given
     * word array and capitalises first letter.
     *
     * @param array $sentence
     * @return string
     */
    protected function toSentence(array $sentence)
    {
        $count = count($sentence);
        $sentence[$count - 1] = $sentence[$count - 1] . '.';
        $sentence[0] = ucfirst($sentence[0]);

        if ($count < 4) {
            return implode(' ', $sentence);
        }

        $commas = $this->numberOfCommas($count);

        for ($i = 1; $i <= $commas; $i++) {
            $index = (int) round($i * $count / ($commas + 1));

            if ($index < ($count - 1) && $index > 0) {
                $sentence[$index] = $sentence[$index] . ',';
            }
        }

        return implode(' ', $sentence);
    }

    /**
     * Determines the number of commas for a
     * sentence of the given length. Average and
     * standard deviation are determined superficially
     *
     * @param int $len
     * @return int
     */
    protected function numberOfCommas($len)
    {
        $avg = log($len, 6);
        $stdDev = $avg / 6.000;

        return (int) round(Statistics::gauss_ms($avg, $stdDev));
    }
}