<?php
/*  Show English Date Time in Bengali
 * Version: 1.0
 * Description: Show bangla date time like the following
 * Author: Shaharia Azam
 * Author URL: http://www.shahariaazam.com
 */
class ShowBanglaDateTime{
    //Base function
    public function ShowBanglaDateTime($time=null,$type=null,$additional=null){
        
    }
	public function ShowDate($datetime){
	if(!is_bool($datetime)){
		$DateTime=date_parse($datetime);
		$year=$this->IntToBn(substr($DateTime['year'],-2));
		
		$month=$this->MonthToBn($DateTime['month']);
		$day=$this->IntToBn($DateTime['day']);
		$hour=$this->IntToBn($DateTime['hour']);
		$minute=$this->IntToBn($DateTime['minute']);
		//28 September'12 shokal 12:32
		$prefix=$this->prefix($DateTime['hour']);
		echo $day . " " .$month." '".$year." ".$prefix." ".$hour."টা ".$minute." মিনিটে";
		
	}else{
		$day=$this->dateToBn(false);
		$month=$this->MonthToBn(false);
		$hour=$this->IntToBn(date('h'));
		$minute=$this->IntToBn(date('i'));
		$prefix=$this->prefix(date('a'));
		$dayName=$this->bnDayName(false);
		echo $day . " " .$month.", ". $dayName . ", ". $prefix." ".$hour.":".$minute;
		}
	}
	function prefix($time){
		//$value="";
		if(is_bool($time)){
		$time= date('H');
		}else{
			$time= date('H');
		}
			if($time>=05 && $time<12 ){
			return "সকাল";
		}else if($time>=12 && $time<15){
			return "দুপুর";}
		else if($time>=15 && $time<19){
		return "বিকাল";}
		else if($time>=19 && $time<20){
		return "সন্ধা";}
		else if($time>=20 && $time<23){
		return "রাত";}
		else if($time>=0 && $time<04){
		return "রাত";}
		else if($time>=04 && $time<05){
		return "ভোর";}else{
		return "রাত";}
		//return date('a');
	}
	public function IntToBn($digit){
		$value="";
		$count=strlen($digit);
		$Number=str_split($digit);
		for($i=0; $i<$count; $i++){
			if($Number[$i]==0){
				$value.="০";
			}else if($Number[$i]==1){
				$value.="১";
			}else if($Number[$i]==2){
				$value.="২";
			}else if($Number[$i]==3){
				$value.="৩";
			}else if($Number[$i]==4){
				$value.="৪";
			}else if($Number[$i]==5){
				$value.="৫";
			}else if($Number[$i]==6){
				$value.="৬";
			}else if($Number[$i]==7){
				$value.="৭";
			}else if($Number[$i]==8){
				$value.="৮";
			}else if($Number[$i]==9){
				$value.="৯";
			}
		}
		return $value;
	}
	function dateToBn($type){
		//$type = set, get provide time as argument or get system time
		return $day=$this->IntToBn(date('d'));
	}
	function bnDayName($type){
		$DayName=date('N');
		if($DayName=="1"){
			return "সোমবার";
		}else if($DayName=="2"){
			return "মঙ্গলবার";
		}else if($DayName=="3"){
			return "বুধবার";
		}else if($DayName=="4"){
			return "বৃহস্পতিবার";
		}else if($DayName=="5"){
			return "শুত্রুবার";
		}else if($DayName=="6"){
			return "শনিবার";
		}else if($DayName=="7"){
			return "রবিবার";
		}
	}
	function MonthToBn($month){
		if(is_bool($month)){
			$month=date('n');
		}
		if($month=="1"){
			return "জানুয়ারী";
		}else if($month=="2"){
			return "ফেব্রুয়ারী";
		}else if($month=="3"){
			return "মার্চ";
		}else if($month=="4"){
			return "এপ্রিল";
		}else if($month=="5"){
			return "মে";
		}else if($month=="6"){
			return "জুন";
		}else if($month=="7"){
			return "জুলাই";
		}else if($month=="8"){
			return "আগষ্ট";
		}else if($month=="9"){
			return "সেপ্টেম্বর";
		}else if($month=="10"){
			return "অক্টোবর";
		}else if($month=="11"){
			return "নভেম্বর";
		}else if($month=="12"){
			return "ডিসেম্বর";
		}
	}
	//Bangla date time direct english replace
	function bangla_date_time($str)
	{
		$eng = array('January','February','March','April','May','June','July','August','September','October','November','December',
					 'Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec',
					 'Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday','Friday',
					 'Sat','Sun','Mon','Tue','Wed','Thu','Fri',
					 '1','2','3','4','5','6','7','8','9','0',
					 'am','pm');
		$bng = array('জানুয়ারি','ফেব্রুয়ারি','মার্চ','এপ্রিল','মে','জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর',
					 'জানু','ফেব্রু','মার্চ','এপ্রি','মে','জুন','জুলা','আগ','সেপ্টে','অক্টো','নভে','ডিসে',
					 'শনিবার','রবিবার','সোমবার','মঙ্গলবার','বুধবার','বৃহস্পতিবার','শুক্রবার',
					 'শনি','রবি','সোম','মঙ্গল','বুধ','বৃহঃ','শুক্র',
					 '১','২','৩','৪','৫','৬','৭','৮','৯','০',
					 'পূর্বাহ্ণ','অপরাহ্ণ');
		return str_ireplace($eng, $bng, $str);
	}
}
?>