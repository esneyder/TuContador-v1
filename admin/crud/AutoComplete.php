<?php
/*
 * Mysql Ajax Table Editor
 *
 * Copyright (c) 2014 Chris Kitchen <info@mysqlajaxtableeditor.com>
 * All rights reserved.
 *
 * See COPYING file for license information.
 *
 * Download the latest version from
 * http://www.mysqlajaxtableeditor.com
 */
require_once('DBC.php');
require_once('Common.php');
require_once('php/lang/LangVars-en.php');
require_once('php/AjaxTableEditor.php');
class AutoComplete extends Common
{
	var $Editor;
	var $mateInstances = array('mate1_');
	
	protected function displayHtml()
	{
		$html = '
			
			<br />
			
			<div class="mateAjaxLoaderDiv"><div id="ajaxLoader1"><img src="images/ajax_loader.gif" alt="Loading..." /></div></div>
			
			<br /><br />
			
			<div id="'.$this->mateInstances[0].'information">
			</div>

			<div id="mateTooltipErrorDiv" style="display: none;"></div>
			
			<div id="'.$this->mateInstances[0].'titleLayer" class="mateTitleDiv">
			</div>
			
			<div id="'.$this->mateInstances[0].'tableLayer" class="mateTableDiv">
			</div>
			
			<div id="'.$this->mateInstances[0].'recordLayer" class="mateRecordLayerDiv">
			</div>		
			
			<div id="'.$this->mateInstances[0].'searchButtonsLayer" class="mateSearchBtnsDiv">
			</div>';
			
		echo $html;
		
		// Set default session configuration variables here
		$defaultSessionData['orderByColumn'] = 'first_name';

		$defaultSessionData = base64_encode($this->Editor->jsonEncode($defaultSessionData));
		
		$javascript = '	
			<script type="text/javascript">
				var mateHashes = {};
				var mateForward = false;
				var '.$this->mateInstances[0].' = new mate("'.$this->mateInstances[0].'");
				'.$this->mateInstances[0].'.setAjaxInfo({url: "'.$_SERVER['PHP_SELF'].'", history: true});
				if('.$this->mateInstances[0].'.ajaxInfo.history == false) {
					'.$this->mateInstances[0].'.toAjaxTableEditor("update_html","");
				} else if(window.location.hash.length == 0) {
					mateHashes.'.$this->mateInstances[0].' = {info: "", action: "update_html", sessionData: "'.$defaultSessionData.'"};
					mateForward = true;
				}
				if(mateForward) {
					var sessionCookieName = '.$this->mateInstances[0].'.getSessionCookieName();
					if($.cookie(sessionCookieName) != undefined) {
						window.location.href = window.location.href+"#"+$.cookie(sessionCookieName);
					} else {
						window.location.href = window.location.href+"#"+Base64.encode($.toJSON(mateHashes));
					}
				}
				
				function startAutoComplete()
				{
					$("input[type=text]#'.$this->mateInstances[0].'department").autocomplete({
						source: function(request, response) {
							$("#ajaxLoader1").css("display","block");
							var responseFun = function(data, textStatus, jqXHR) {
								response(data, textStatus, jqXHR);
								$("#ajaxLoader1").css("display","none");
							}
							$.getJSON("'.$_SERVER['PHP_SELF'].'", { dept: request.term }, responseFun);
						}
					});
				}
				
			</script>';
		echo $javascript;
	}

	public function autoComplete()
	{
		$this->Editor->addJavascript('startAutoComplete();');
	}
	
	protected function initiateEditor()
	{
		$tableColumns['id'] = array(
			'display_text' => 'ID', 
			'perms' => 'TVQSXO'
		);
		
		$tableColumns['first_name'] = array(
			'display_text' => 'First Name', 
			'perms' => 'EVCTAXQSHOF', 'req' => true
		);
		
		$tableColumns['last_name'] = array(
			'display_text' => 'Last Name', 
			'perms' => 'EVCTAXQSHOF'
		);
		
		$tableColumns['email'] = array(
			'display_text' => 'Email', 
			'perms' => 'EVCTAXQSHOF'
		);
		
		$tableColumns['department'] = array(
			'display_text' => 'Department', 
			'perms' => 'EVCTAXQSHOF', 
		); 
		
		$tableColumns['hire_date'] = array(
			'display_text' => 'Hire Date', 
			'req' => true, 
			'perms' => 'EVCTAXQSHOF', 
			'display_mask' => 'date_format(`hire_date`,"%d %M %Y")', 
			'order_mask' => 'employees.hire_date',
			'range_mask' => 'employees.hire_date',
			'calendar' => array('js_format' => 'dd MM yy', 
				'options' => array('showButtonPanel' => false)),
			'col_header_info' => 'style="width: 250px;"'
		);
		
		$tableName = 'employees';
		$primaryCol = 'id';
		$errorFun = array(&$this,'logError');
		$permissions = 'EAVDQCSXHOI';
		
		$this->Editor = new AjaxTableEditor($tableName,$primaryCol,$errorFun,$permissions,$tableColumns);
		$this->Editor->setConfig('tableInfo','cellpadding="1" cellspacing="1" align="center" width="1100" class="mateTable"');
		$this->Editor->setConfig('orderByColumn','first_name');
		$this->Editor->setConfig('tableTitle','Auto Complete <div style="font-size: 12px; font-weight: normal;">on the department field</div>');
		$this->Editor->setConfig('addRowTitle','Add Employee');
		$this->Editor->setConfig('editRowTitle','Edit Employee');
		$this->Editor->setConfig('addScreenFun',array(&$this,'autoComplete'));
		$this->Editor->setConfig('editScreenFun',array(&$this,'autoComplete'));
		$this->Editor->setConfig('instanceName',$this->mateInstances[0]);
		$this->Editor->setConfig('paginationLinks',true);
		//$this->Editor->setConfig('viewQuery',true);
	}
	
	public function getDeptSuggestions()
	{
		$depts = array();
		$query = "select distinct department from employees where department like :dept limit 20";
		$stmt = DBC::get()->prepare($query);
		$stmt->execute(array('dept' => $_GET['dept'].'%'));
		while($row = $stmt->fetch())
		{
			$depts[] = $row['department'];
		}
		echo $this->Editor->jsonEncode($depts);
	}
	
	function __construct()
	{
		session_start();
		ob_start();
		$this->initiateEditor();
		if(isset($_POST['json']))
		{
			if(ini_get('magic_quotes_gpc'))
			{
				$_POST['json'] = stripslashes($_POST['json']);
			}
			$this->Editor->data = $this->Editor->jsonDecode($_POST['json'],true);
			$this->Editor->setDefaults();
			$this->Editor->main();
		}
		else if(isset($_GET['mate_export']))
		{
			//var_dump('jsdflk');
			//exit();
			$this->Editor->data['sessionData'] = $_GET['session_data'];
			$this->Editor->setDefaults();
			ob_end_clean();
			header('Cache-Control: no-cache, must-revalidate');
			header('Pragma: no-cache');
			header('Content-type: application/x-msexcel');
			header('Content-Type: text/csv');
			header('Content-Disposition: attachment; filename="'.$this->Editor->tableName.'.csv"');
			// Add utf-8 signature for windows/excel
			echo chr(0xEF).chr(0xBB).chr(0xBF);
			echo $this->Editor->exportInfo();
			exit();
		}
        else if(isset($_GET['dept']))
        {
        	$this->getDeptSuggestions();
        }
		else
		{
			$this->displayHeaderHtml();
			$this->displayHtml();
			$this->displayFooterHtml();
		}
	}
}
$page = new AutoComplete();
?>
