<?php
		// Include pdftk-php class
		require('../pdftk-php.php');
		
		// Initiate the class
		$pdfmaker = new pdftk_php;
		
		// Define variables for all the data fields in the PDF form. You need to assign a column in the database to each field that you'll be using in the PDF. 
		// Example:
		// $pdf_column = $data['column'];
		
		// You can also format the MySQL data how you want here. One common example is formatting a date saved in the database. For example:
		// $pdf_date = date("l, F j, Y, g:i a", strtotime($data['date']));
	

	$field1_name = $_POST['field1_name'];
	$field1_data = $_POST['field1_data'];
	
	$field2_name = $_POST['field2_name'];
	$field2_data = $_POST['field2_data'];

	$field3_name = $_POST['field3_name'];
	$field3_data = $_POST['field3_data'];

	$field4_name = $_POST['field4_name'];
	$field4_data = $_POST['field4_data'];

	$field5_name = $_POST['field5_name'];
	$field5_data = $_POST['field5_data'];

	$field6_name = $_POST['field6_name'];
	$field6_data = $_POST['field6_data'];

	$field7_name = $_POST['field7_name'];
	$field7_data = $_POST['field7_data'];

	$field8_name = $_POST['field8_name'];
	$field8_data = $_POST['field8_data'];

	$field9_name = $_POST['field9_name'];
	$field9_data = $_POST['field9_data'];

	$field10_name = $_POST['field10_name'];
	$field10_data = $_POST['field10_data'];

	$document = $_POST['document'];




		// $fdf_data_strings associates the names of the PDF form fields to the PHP variables you just set above. In order to work correctly the PDF form field name has to be exact. PDFs made in Acrobat generally have simpler names - just the name you assigned to the field. PDFs made in LiveCycle Designer nest their forms in other random page elements, creating a long and hairy field name. You can use pdftk to discover the real names of your PDF form fields: run "pdftk form.pdf dump_data_fields > form-fields.txt" to generate a report.

		// Example of field names from a PDF created in LiveCycle:
		// $fdf_data_strings= array('form1[0].#subform[0].#area[0].LastName[0]' => $pdf_lastname,  'form1[0].#subform[0].#area[0].FirstName[0]' => $pdf_firstname, 'form1[0].#subform[0].#area[0].EMail[0]' => $pdf_email, );
		$fdf_data_strings= array(
			$field1_name => $field1_data,
			$field2_name => $field2_data,
			$field3_name => $field3_data,
			$field4_name => $field4_data,
			$field5_name => $field5_data,
			$field6_name => $field6_data,
			$field7_name => $field7_data,
			$field8_name => $field8_data,
			$field9_name => $field9_data,
			$field10_name => $field10_data,
			);
		
		// See the documentation of pdftk-php.php for more explanation of these other variables.
		
		// Used for radio buttons and check boxes
		// Example: (For check boxes options are Yes and Off)
		// $pdf_checkbox1 = "Yes";
		// $pdf_checkbox2 = "Off";
		// $pdf_checkbox3 = "Yes";
		// $fdf_data_names = array('checkbox1' => $pdf_checkbox1,'checkbox2' => $pdf_checkbox2,'checkbox3' => $pdf_checkbox3,'checkbox4' => $pdf_checkbox4); 
		$fdf_data_names = array(
			'topmostSubform[0].Page1[0].CheckBox2[0]' => "1",
			'topmostSubform[0].Page1[0].CheckBox3[0]' => "1",
			); // Leave empty if there are no radio buttons or check boxes
		
		$fields_hidden = array(); // Used to hide form fields
		
		$fields_readonly = array(); // Used to make fields read only - however, flattening the output with pdftk will in effect make every field read only. If you don't want a flattened pdf and still want some read only fields, use this variable and remove the flatten flag near line 70 in pdftk-php.php
		
		// Take each REQUEST value and clean it up for fdf creation
		foreach( $_REQUEST as $key => $value ) {
		   // Translate tildes back to periods
		   $fdf_data_strings[strtr($key, '~', '.')]= $value;
		}
		
		// Name of file to be downloaded
		$pdf_filename = "$field1_data SSA Auth.pdf";
		
		// Name/location of original, empty PDF form
		$pdf_original = "$document.pdf";
		
		// Finally make the actual PDF file!
		$pdfmaker->make_pdf($fdf_data_strings, $fdf_data_names, $fields_hidden, $fields_readonly, $pdf_original, $pdf_filename);
		// The end!
	
?> 



