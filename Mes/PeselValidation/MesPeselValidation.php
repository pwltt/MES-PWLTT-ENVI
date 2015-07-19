<?php
require_once'../../GhostRider/Homework/PeselValidation.php';

class MesPeselValidation extends PeselValidation

{

        protected function DateValidation($year, $month, $day);
   
        {
        $validationHandler = new DateValidatior()
        
       /// $isYearCorrect = $validationHandler->CheckYear($year);
       // $isMonthCorrect = $this->DecreaseMonthByTwenty($month);
        //$isDayCorrect = $validationHandler->CheckDay($year, $month, $day);
       // $result = array($isYearCorrect, $isMonthCorrect, $isDayCorrect);

        //true lub false
        return $result;
        }
        
        protected function CutOffDate($pesel)
        {
		$datahandler = new CutThisDate();
		
		return $datahandler->Cutter($pesel);
        }
        
        
        protected function CheckSum($pesel)
        {
        
        
        
        }
               
        public function ValidatePesel($pesel);







}