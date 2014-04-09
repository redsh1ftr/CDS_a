<?php

use Illuminate\Database\Migrations\Migration;

class AddWorksiteData extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
DB::table('worksite_list')->insert(array(
				'id' => '11',
				'name' => 'The Plumbery',
				'worksite_type' => 'Commercial',
 				'first_name' => 'Alan',
				'last_name' => 'Dikinmdf',
				'phone_number' => '303-235-3647',
				'fax_number' => '303-644-5757',
				'email' => 'alan@theplumbery.com',
				'hours' => 'Monday - Friday 9-5, Saturday 10-3',
				'street' => '486 Up Dr.',
				'city' => 'City City',
				'state' => 'MI',
				'zip' => '48360',
				'access_info' => 'Door in back, Keycard acess only.',
				'notes' => 'Interwoven is a line of content management systems and related products. Previously a stand-alone company headquartered in San Jose, California, USA and founded in 1995, it was acquired on March 17, 2009 by Autonomy, which in turn was acquired by Hewlett-Packard in 2011. The Interwoven and Autonomy product lines became known as HP Autonomy.',
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