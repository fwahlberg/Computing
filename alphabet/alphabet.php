<?
class Phonetic
{
	private $phonetic = array(
            "a" => "alfa ", 
            "b" => "bravo ", 
            "c" => "charlie ", 
            "d" => "delta ", 
            "e" => "echo ", 
            "f" => "foxtrot ", 
            "g" => "golf ", 
            "h" => "hotel ", 
            "i" => "india ", 
            "j" => "juliett ", 
            "k" => "kilo ", 
            "l" => "lima ", 
            "m" => "mike ", 
            "n" => "november ", 
            "o" => "oscar ", 
            "p" => "papa ", 
            "q" => "quebec ", 
            "r" => "romeo ", 
            "s" => "sierra ", 
            "t" => "tango ", 
            "u" => "uniform ", 
            "v" => "victor ", 
            "w" => "whisky ", 
            "x" => "x-ray ", 
            "y" => "yankee ", 
            "z" => "zulu ", 
            "0" => "zero ", 
            "1" => "one ", 
            "2" => "two ", 
            "3" => "three ", 
            "4" => "four ", 
            "5" => "five ", 
            "6" => "six ", 
            "7" => "seven ", 
            "8" => "eight ", 
            "9" => "niner ",
            );
			
		public function getPhoneticWord($char)
		{
                  $char = strtolower($char);
                  if(array_key_exists($char, $this->phonetic)){
			   return strtoupper($this->phonetic[$char]); 
                  } 
		}
}
$word = str_split($_GET["q"]);
$alphabet = new Phonetic();
foreach ($word as $key => $value) {
      echo $alphabet->getPhoneticWord($value);
}

