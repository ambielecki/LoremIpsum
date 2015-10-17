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
    //protected $words = array('a', 'ampaS', 'aqtu', 'avwI', 'baH', 'baQ', 'batlh', 'beH', 'benal', 'betleH bey', 'bIj', 'bIQa HeH', 'bIreS', 'boDegh', 'bomwI', 'boqHa', 'bov', 'buSHa', 'chab', 'chagh', 'chanaS', 'chaqu', 'chaw', 'chej', 'chergh', 'chIj', 'choba', 'chong', 'chor bargh', 'chu', 'chup', 'chuwI', 'DaH', 'Daq', 'Dav', 'De jengva', 'DenIb', 'DeS', 'DIj', 'DIron', 'Do Qe', 'Doj', 'Dor', 'Dub', 'Dum', 'Duran lung DIr', 'eb', 'ejyo', 'emamnal', 'eSpanya', 'ghaH', 'ghaq', 'ghawran', 'ghem', 'ghew', 'ghIm', 'ghISDen', 'ghob', 'ghoH', 'ghoma', 'ghor', 'ghubDaQ', 'ghur', 'HaD', 'HanDogh', 'Hargh', 'He', 'Heghtay', 'Hergh QaywI', 'HIch', 'HISlaH', 'Ho', 'Hogh', 'Hom', 'Hoqra', 'HotlhwI', 'HubneS', 'Huj', 'Hurgh', 'Hutlh', 'Ij', 'IrneH', 'Iw', 'jaD', 'janluq pIqarD»', 'jatlh', 'je', 'jemS tIy qIrq', 'jey', 'jIj', 'jIv', 'jol', 'joq', 'joS', 'juHqo', 'lab', 'lam', 'lat', 'leH', 'lengwI', 'lev', 'lIghongan', 'lIngwI', 'lo law', 'loghqam', 'lolaHghach', 'lopno', 'lot', 'luH', 'lupDujHom', 'lutlh', 'maj', 'maqoch', 'matlh', 'may', 'megh', 'meQ', 'meyIS tIr', 'mIllogh qonwI', 'mIQ', 'mIva', 'moH', 'mon', 'moS', 'much', 'muH', 'mupwI', 'mutlhegh', 'naD', 'nagh DIr', 'namtun', 'naQ', 'nav', 'neb', 'nem', 'neSlo', 'ngagh', 'ngav', 'ngeHbej', 'ngevwI', 'ngoch', 'ngong', 'ngugh', 'nIb', 'nIm wIb ngogh', 'nISwI HIch', 'nIvnav', 'noD', 'nooch', 'nov', 'nuH', 'nuQ', 'o', 'oj', 'orghen rojmab', 'ov', 'pab', 'paH bID', 'parmaqqay', 'paw', 'pegh', 'peQ', 'pIch', 'pIlmoH', 'pIqaD', 'pIw', 'poj', 'poQ', 'potlh', 'puDaH', 'pum', 'puq poH', 'puy', 'QaD', 'qaH', 'qalmoH', 'Qan', 'Qapla', 'qarghan', 'qat', 'Qaw', 'qaywI', 'qegh', 'qem', 'qeq', 'qev', 'qeylIS betleH', 'qIbHeS', 'QIH', 'qImHa', 'qIQ', 'qIvon', 'qoD', 'Qol', 'Qong', 'QopmoH', 'qorgh', 'Qotlh', 'qub', 'qugh', 'Qul', 'qumwI', 'QuQ', 'qutluch', 'quvmoH', 'ram', 'raSya', 'ray', 'rejmorgh', 'rIHwI', 'rItlh', 'roj', 'ron', 'roS', 'run', 'rutlh', 'Saj', 'Saqghom', 'Saw', 'SeHlaw', 'Ser', 'SIbI', 'SIm', 'So', 'Soj naQ', 'SoQ', 'SoSbora', 'Sub', 'Sulop', 'Surchem', 'Suv', 'ta', 'taH', 'tam', 'taS', 'teb', 'tengchaH', 'tera pebot', 'teybe', 'tIH', 'tIQ', 'tIwI', 'tlham', 'tlhay', 'tlhIb', 'tlhImqaH', 'tlhIv', 'tlhon', 'tlhoy', 'tlhup', 'toDSaH', 'toq', 'towaQ', 'tuHomIraH', 'tungHa', 'tuqvol', 'uD Haqtaj', 'um', 'uS', 'vaD', 'van', 'vaSa', 'veD', 'vemmoH', 'verengan HaDIbaH', 'vID', 'vIng', 'vIychorgh', 'voQ', 'vulqan', 'vutwI', 'waH', 'wanI', 'way', 'wel', 'wew', 'wIv', 'woj', 'wovmoHwI', 'wuv', 'yaj', 'yatlh', 'yejquv', 'yIn', 'yIt', 'yoDegh', 'yopwaH buq', 'yu', 'yuQHom');
    protected $words = array('fred', 'ted', 'ed');

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