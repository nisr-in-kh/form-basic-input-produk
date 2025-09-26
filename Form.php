<?php
class Form{
var $fields = array();
var $action;
var $submit = "";
var $jumField=0;

function __construct($action, $submit){
$this->action = $action;
$this->submit = $submit;
}

function displayForm(){
echo"<form action='".$this->action."' method='post'>";
echo"<table widht='100%' cellspacing='8' cellpadding='5'>";
for($i=0;$i<$this->jumField;$i++)
{
echo"<tr><td align='right'>".$this->fields[$i]['label']."</td><td>";
	 
switch($this->fields[$i]['type']){
	 case "textarea":
		echo "<textarea name='".$this->fields[$i]['name']."'></textarea>";
		break;
	 case "select":
		echo "<select name='".$this->fields[$i]['name']."'>";
		foreach($this->fields[$i]['options'] as $opt){
			echo "<option value='".$opt."'>".$opt."</option>";
		}
		echo "</select>";
		break;
	default:
		echo "<input type='".$this->fields[$i]['type']."' name='".$this->fields[$i]['name']."'>";
            }

	echo "</td></tr>";
}
echo"<tr><td></td><td><input type='submit' name='tombol' value='".$this->submit."' ></td></tr>";
echo"</table></form>";
}

function addField($name,$label,$type="text",$options=array()){
	$this->fields[$this->jumField]['name']=$name;
	$this->fields[$this->jumField]['label']=$label;
	$this->fields[$this->jumField]['type']=$type;
	$this->fields[$this->jumField]['options']=$options;
	$this->jumField++;
}
}
?>