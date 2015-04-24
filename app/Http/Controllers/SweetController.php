<?php namespace App\Http\Controllers;

use Request;
class SweetController extends Controller {
    
    public function getHomePage(){
        return view('homePage');
    }
    
    public function getText(){
        return view('text');
    }
    
    public function postText(){
        $number = Request::input('number');
        $paragraphs = $this->getParagraphs($number);
        //print_r($paragraphs);
        return view('resultsText')->with('paragraphs',$paragraphs);
    }
    
    public function getPeople(){
        return view('people');
    }
    
    public function postPeople(){
        $number = Request::input('number');
        $birthday = Request::input('hasBirthday');
        $description = Request::input('hasDescription');
        $names = $this->getNames($number);
        $birthdays = array();
        if($birthday){
            $birthdays = $this->getBirthdays($number);
        }
        $descriptions = array();
        if($description){
            $descriptions = $this->getDescriptions($number);    
        }
        return view('resultsPeople')->with('names',$names)->with('birthdays',$birthdays)->with('descriptions',$descriptions);
    }
    
    /*
     *This is wrong I will SOC in the future
     */
    
    public function getParagraphs($number){
        $paragraphArr = ["alex is awesome","big dog jumps over mr pillai","cool bro I like lax","diggers are from construction","eons ago in a galaxy far far away","fidgeting in class is annoying to mr pillai","ground is very hard when it is rock","hard rock cafe isnt even that good","I want candy do du du du I want candy do du du du","jakub voracek scores a lot of goals"];
        $paragraphs = array();
        $size = sizeof($paragraphArr)-1;
        for($i=0;$i<$number;$i++){
            array_push($paragraphs,$paragraphArr[rand(0,$size)]);
        }
        return $paragraphs;
    }
    public function getNames($number){
        $nameArr = ["Kelly", "Kiara", "Justin", "Richard", "Alexander", "Bob","Carl","Derek","Ed","Franz","George","Hank","Indigo","Louise","Mary","Natalie","Oprah","Penelope","Quiznos","Steve","Tony","Ursala","Victor","Walter","Xavier","Yiskah","Zach"];
        $names = array();
        $size = sizeof($nameArr)-1;
        for($i=0;$i<$number;$i++){
            array_push($names,$nameArr[rand(0,$size)]);
        }
        return $names;
    }
    public function getBirthdays($number){
        $toReturn = array();
        for($i=0;$i<$number;$i++){
            array_push($toReturn, $this->createBirthday());
        }
        return $toReturn;
    }
    public function createBirthday(){
        $month = rand (1, 12);
        $year = rand(1900, 2015);
        if($month === 2){
            $day = rand(1,28);
        }
        if($month === 4 ||$month === 6 ||$month === 9 ||$month === 11){
            $day = rand(1,30);
        }
        else $day = rand (1,31);
        return $month . "/" . $day . "/" . $year;
    }
    public function getDescriptions($number){
        $descriptionsArr = ["I love getting 117s!","I have a pet math exam","I've studied for this exam since the 117th minute of my life","I do get disappointed when I get low grades like 100","My face after a mere 100 is :(","The derivative of 117x is 117","My favorite number is the square root of 13689","Want to hear a joke? Knock Knock. Whos there. 117. 117 Who? No I got the 117 not you!","The distance between Boston,MA and Campton,NH is equivalent to my math grade 87 miles jk lol","I wish Alex didn'tknow that I got a 117 on my BC Calculus first semester exam"];
        $profiles = array();
        $size = sizeof($descriptionsArr)-1;
        for($i=0;$i<$number;$i++){
            array_push($profiles,$descriptionsArr[rand(0,$size)]);
        }
        return $profiles;
    }    
}