<?php
class Combinations
{
    private $charlist = [];
    private $stack = [];

    public function __construct(array $charlist = [])
    {
    	if (! empty($charlist)) {
    		$this->charlist = $charlist;
    	}
    }
 
    public function setChars(array $charlist)
    {
        $this->charlist = $charlist;
    }
 
    private function recurse($limit, $nums = [])
    {
        if ($limit <= 0) {
            $this->stack[] = '';
            foreach ($nums as $n) {
                $this->stack[count($this->stack) - 1] .= $this->charlist[$n];
            }
            return;
        }
        $limit--;
    
        for ($i = 0; $i < count($this->charlist); $i++) {
            $this->recurse($limit, array_merge($nums, [$i]));
        }
    }
 
    public function getCombinations($length)
    {
        $this->stack = [];
        $this->recurse($length);
        return $this->stack;
    }
}
