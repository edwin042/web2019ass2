<?php
	//table generator class
	class TableGeneratorClass{
		//defines the heading of the table
		private $headingValue;
		//defines the table rows
		private $tableRowValue = [];
		//setting the heading in the table
		public function setTitle($headingValue){
			$this->headingValue = $headingValue;
		}
		//setting each row in the table
		public function setEachRow($tableRowValue){
			$this->tableRowValue[] = $tableRowValue;
		}
		//structuring the table with heading and row
		public function generateTable(){
			$html = '<table border="1px">';
			$html = $html . '<tr bgcolor="white">';
			
			foreach ($this->headingValue as $headingAsRow) {
				$html = $html . '<th>' . $headingAsRow . '</th>';
			}
			$html = $html . '</tr>';
			
			foreach ($this->tableRowValue as $tableRow) {

				$html = $html . '<tr>';
				foreach ($tableRow as $keys) {
					$html = $html . '<td>' . $keys . '</td>';
				}
				$html = $html . '</tr>';
			}

			$html = $html . '</table>';
			echo $html;
		}
	}
?>