<?php namespace Mohamed\Lib;

class MaxValue{
	private $highest;
	public function __construct(array $arr = []){
		$this->highest = $arr[0];
		for ($i=0; $i < count($arr); $i++) { 
			if (isset($arr[$i+1])) {
				if ($this->highest <= $arr[$i+1]) {
					$this->highest = $arr[$i+1]; 
				}
			}
		}
	}
	public function result(){
		return $this->highest;
	}
}