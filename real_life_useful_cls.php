<?php
class Rgb{
 	private	$color;
	private	$red;
	private$green;
	private$blue;

	public function __construct($colorcode='')
	{
        $this->color = ltrim($colorcode, '#');
         $this->parsecolor();

	}

	public function getcolor()
	{
		return $this->color;
	}

	


	  public function getRGBColor()
    {
        return array($this->red, $this->green, $this->blue);
    }

	public function getReadrgb()
	{
		echo "Red={$this->red}\nGreen={$this->green}\nBlue={$this->blue}";
	}

	public function setcolor($colorcode)
	{
 		return $this->color = ltrim($colorcode, '#');
        $this->parseColor();	
    }


	private function parsecolor()
	{
		if($this->color)
		{
			list($this->red,$this->blue,$this->green)=sscanf($this->color,"%02x%02x%02x");
		}
		else
		{
			list($this->red,$this->blue,$this->green)=array(0,0,0);
		}
	}


	public function getred()
	{
		return $this->red;
	}
	public function getgreen()
	{
		return $this->green;
	}
	public function getblue()
	{
		return $this->blue;
	}



}

$mycolor=new Rgb('#ff000');
echo $mycolor->setcolor('#ff200');

$mycolor->getReadrgb();
