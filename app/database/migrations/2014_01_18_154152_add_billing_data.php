<?php

use Illuminate\Database\Migrations\Migration;

class AddBillingData extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
DB::table('billing_contact_list')->insert(array(
				'billing_company' => 'The Billing Company',
				'first_name' => 'Todd',
				'last_name' => 'Adaman',
				'hours' => 'Monday - Friday 9-5, Saturday 10-3',
				'phone_number' => '313-525-9652, Ask for Todd',
				'fax_number' => '313-525-3953',
				'email' => 'billing@thebillingcompany.com',
				'notes' => 'The Council for Electronic Billing and Payment of the National Automated Clearing House Association is credited with broadly promoting and communicating various forms of electronic billing in the USA. Certain electronic billing applications also provide the ability to electronically settle payment for goods or services. Customers of banks and billing companies can utilize the internet or telecommunications to conveniently remit payment or access billing information. The service is also supported by customer service representatives (CSRs), which may be contacted directly by the consumer to facilitate payments or receive general assistance and answer questions. It can produce substantial savings to traditional print & mail billing and payment remittance, and as an added benefit results in a significant reduction in the use of paper.',
				'street' => '24256 Long Road Suite 425',
				'city' => 'Town City',
				'state' => 'Michigan',
				'zip' => '48245',
				'created_at'=>date('Y-m-d H:m:s'),
				'updated_at'=>date('Y-m-d H:m:s'),
			));

DB::table('billing_contact_list')->insert(array(
				'billing_company' => 'Another Billing Company',
				'first_name' => 'Mark',
				'last_name' => 'Biller',
				'hours' => 'Monday - Friday 9-5, Saturday 10-3',
				'phone_number' => '313-525-9652, Ask for Todd',
				'fax_number' => '313-525-3953',
				'email' => 'billing@thebillingcompany.com',
				'notes' => 'NACHA-The Electronic Payments Association is a not-for-profit trade association that develops operating rules and business practices for the Automated Clearing House (ACH) Network and for other areas of electronic payments. NACHA activities and initiatives facilitate the adoption of electronic payments in the areas of Internet commerce, electronic bill payment and presentment, financial electronic data interchange (EDI), international payments, electronic checks, electronic benefits transfer (EBT) and student lending. To define some guidelines for best practices, NACHA has created the Council for Electronic Billing and Payment of the NACHA InteroperaBILL Initiative of the Banking Industry Technology Secretariat (BITS).',
				'street' => '6566 Short Road Suite 3245',
				'city' => 'City Town',
				'state' => 'Michigan',
				'zip' => '48542',
				'created_at'=>date('Y-m-d H:m:s'),
				'updated_at'=>date('Y-m-d H:m:s'),
			));

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}