<?php

use Illuminate\Database\Seeder;


class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('settings')->delete();

        \DB::table('settings')->insert(array(
            array( // row #0
                'id' => 1,
                'company_id' => 1,
                'key' => 'general.default_account',
                'value' => '1',
            ),
            array( // row #1
                'id' => 2,
                'company_id' => 1,
                'key' => 'general.date_format',
                'value' => 'd M Y',
            ),
            array( // row #2
                'id' => 3,
                'company_id' => 1,
                'key' => 'general.date_separator',
                'value' => 'space',
            ),
            array( // row #3
                'id' => 4,
                'company_id' => 1,
                'key' => 'general.timezone',
                'value' => 'Europe/London',
            ),
            array( // row #4
                'id' => 5,
                'company_id' => 1,
                'key' => 'general.percent_position',
                'value' => 'after',
            ),
            array( // row #5
                'id' => 6,
                'company_id' => 1,
                'key' => 'general.invoice_number_prefix',
                'value' => 'INV-',
            ),
            array( // row #6
                'id' => 7,
                'company_id' => 1,
                'key' => 'general.invoice_number_digit',
                'value' => '5',
            ),
            array( // row #7
                'id' => 8,
                'company_id' => 1,
                'key' => 'general.invoice_number_next',
                'value' => '2',
            ),
            array( // row #8
                'id' => 9,
                'company_id' => 1,
                'key' => 'general.default_payment_method',
                'value' => 'offlinepayment.cash.1',
            ),
            array( // row #9
                'id' => 10,
                'company_id' => 1,
                'key' => 'general.email_protocol',
                'value' => 'mail',
            ),
            array( // row #10
                'id' => 11,
                'company_id' => 1,
                'key' => 'general.email_sendmail_path',
                'value' => '/usr/sbin/sendmail -bs',
            ),
            array( // row #11
                'id' => 12,
                'company_id' => 1,
                'key' => 'general.send_invoice_reminder',
                'value' => '0',
            ),
            array( // row #12
                'id' => 13,
                'company_id' => 1,
                'key' => 'general.schedule_invoice_days',
                'value' => '1,3,5,10',
            ),
            array( // row #13
                'id' => 14,
                'company_id' => 1,
                'key' => 'general.send_bill_reminder',
                'value' => '0',
            ),
            array( // row #14
                'id' => 15,
                'company_id' => 1,
                'key' => 'general.schedule_bill_days',
                'value' => '10,5,3,1',
            ),
            array( // row #15
                'id' => 16,
                'company_id' => 1,
                'key' => 'general.item_stocks',
                'value' => '0',
            ),
            array( // row #16
                'id' => 17,
                'company_id' => 1,
                'key' => 'general.send_item_reminder',
                'value' => '3,5,7',
            ),
            array( // row #17
                'id' => 18,
                'company_id' => 1,
                'key' => 'general.schedule_time',
                'value' => '09:00',
            ),
            array( // row #18
                'id' => 19,
                'company_id' => 1,
                'key' => 'general.admin_theme',
                'value' => 'skin-green-light',
            ),
            array( // row #19
                'id' => 20,
                'company_id' => 1,
                'key' => 'general.list_limit',
                'value' => '25',
            ),
            array( // row #20
                'id' => 21,
                'company_id' => 1,
                'key' => 'general.use_gravatar',
                'value' => '0',
            ),
            array( // row #21
                'id' => 22,
                'company_id' => 1,
                'key' => 'general.session_handler',
                'value' => 'file',
            ),
            array( // row #22
                'id' => 23,
                'company_id' => 1,
                'key' => 'general.session_lifetime',
                'value' => '30',
            ),
            array( // row #23
                'id' => 24,
                'company_id' => 1,
                'key' => 'general.file_size',
                'value' => '2',
            ),
            array( // row #24
                'id' => 25,
                'company_id' => 1,
                'key' => 'general.file_types',
                'value' => 'pdf,jpeg,jpg,png',
            ),
            array( // row #25
                'id' => 26,
                'company_id' => 1,
                'key' => 'general.company_name',
                'value' => 'Asesorías ASA Ltda',
            ),
            array( // row #26
                'id' => 27,
                'company_id' => 1,
                'key' => 'general.company_email',
                'value' => 'asesorias@asatemuco.cl',
            ),
            array( // row #27
                'id' => 28,
                'company_id' => 1,
                'key' => 'general.default_currency',
                'value' => 'CLP',
            ),
            array( // row #28
                'id' => 29,
                'company_id' => 1,
                'key' => 'general.default_locale',
                'value' => 'es-ES',
            ),
            array( // row #29
                'id' => 30,
                'company_id' => 1,
                'key' => 'offlinepayment.methods',
                'value' => '[{"code":"offlinepayment.cash.1","name":"Cash","order":"1","description":null},{"code":"offlinepayment.bank_transfer.2","name":"Bank Transfer","order":"2","description":null}]',
            ),
            array( // row #30
                'id' => 31,
                'company_id' => 1,
                'key' => 'general.company_address',
                'value' => 'Asesorías Laborales, Contables,Tibutarias y computacioneales',
            ),
            array( // row #31
                'id' => 32,
                'company_id' => 2,
                'key' => 'general.default_account',
                'value' => '2',
            ),
            array( // row #32
                'id' => 33,
                'company_id' => 2,
                'key' => 'general.date_format',
                'value' => 'd M Y',
            ),
            array( // row #33
                'id' => 34,
                'company_id' => 2,
                'key' => 'general.date_separator',
                'value' => 'space',
            ),
            array( // row #34
                'id' => 35,
                'company_id' => 2,
                'key' => 'general.timezone',
                'value' => 'Europe/London',
            ),
            array( // row #35
                'id' => 36,
                'company_id' => 2,
                'key' => 'general.percent_position',
                'value' => 'before',
            ),
            array( // row #36
                'id' => 37,
                'company_id' => 2,
                'key' => 'general.invoice_number_prefix',
                'value' => 'INV-',
            ),
            array( // row #37
                'id' => 38,
                'company_id' => 2,
                'key' => 'general.invoice_number_digit',
                'value' => '5',
            ),
            array( // row #38
                'id' => 39,
                'company_id' => 2,
                'key' => 'general.invoice_number_next',
                'value' => '2',
            ),
            array( // row #39
                'id' => 40,
                'company_id' => 2,
                'key' => 'general.default_payment_method',
                'value' => 'offlinepayment.cash.1',
            ),
            array( // row #40
                'id' => 41,
                'company_id' => 2,
                'key' => 'general.email_protocol',
                'value' => 'mail',
            ),
            array( // row #41
                'id' => 42,
                'company_id' => 2,
                'key' => 'general.email_sendmail_path',
                'value' => '/usr/sbin/sendmail -bs',
            ),
            array( // row #42
                'id' => 43,
                'company_id' => 2,
                'key' => 'general.send_invoice_reminder',
                'value' => '0',
            ),
            array( // row #43
                'id' => 44,
                'company_id' => 2,
                'key' => 'general.schedule_invoice_days',
                'value' => '1,3,5,10',
            ),
            array( // row #44
                'id' => 45,
                'company_id' => 2,
                'key' => 'general.send_bill_reminder',
                'value' => '0',
            ),
            array( // row #45
                'id' => 46,
                'company_id' => 2,
                'key' => 'general.schedule_bill_days',
                'value' => '10,5,3,1',
            ),
            array( // row #46
                'id' => 47,
                'company_id' => 2,
                'key' => 'general.item_stocks',
                'value' => '0',
            ),
            array( // row #47
                'id' => 48,
                'company_id' => 2,
                'key' => 'general.send_item_reminder',
                'value' => '3,5,7',
            ),
            array( // row #48
                'id' => 49,
                'company_id' => 2,
                'key' => 'general.schedule_time',
                'value' => '09:00',
            ),
            array( // row #49
                'id' => 50,
                'company_id' => 2,
                'key' => 'general.admin_theme',
                'value' => 'skin-black',
            ),
            array( // row #50
                'id' => 51,
                'company_id' => 2,
                'key' => 'general.list_limit',
                'value' => '10',
            ),
            array( // row #51
                'id' => 52,
                'company_id' => 2,
                'key' => 'general.use_gravatar',
                'value' => '0',
            ),
            array( // row #52
                'id' => 53,
                'company_id' => 2,
                'key' => 'general.session_handler',
                'value' => 'file',
            ),
            array( // row #53
                'id' => 54,
                'company_id' => 2,
                'key' => 'general.session_lifetime',
                'value' => '30',
            ),
            array( // row #54
                'id' => 55,
                'company_id' => 2,
                'key' => 'general.file_size',
                'value' => '2',
            ),
            array( // row #55
                'id' => 56,
                'company_id' => 2,
                'key' => 'general.file_types',
                'value' => 'pdf,jpeg,jpg,png',
            ),
            array( // row #56
                'id' => 57,
                'company_id' => 2,
                'key' => 'general.company_name',
                'value' => 'Caza y Pesca S.A.',
            ),
            array( // row #57
                'id' => 58,
                'company_id' => 2,
                'key' => 'general.company_email',
                'value' => 'Caza@olleta.cl',
            ),
            array( // row #58
                'id' => 59,
                'company_id' => 2,
                'key' => 'general.company_address',
                'value' => 'Prueba de  dirección ??',
            ),
            array( // row #59
                'id' => 60,
                'company_id' => 2,
                'key' => 'general.company_logo',
                'value' => '2',
            ),
            array( // row #60
                'id' => 61,
                'company_id' => 2,
                'key' => 'general.default_currency',
                'value' => 'USD',
            ),
            array( // row #61
                'id' => 62,
                'company_id' => 2,
                'key' => 'general.default_locale',
                'value' => 'es-ES',
            ),
            array( // row #62
                'id' => 63,
                'company_id' => 2,
                'key' => 'offlinepayment.methods',
                'value' => '[{"code":"offlinepayment.cash.1","name":"Cash","order":"1","description":null},{"code":"offlinepayment.bank_transfer.2","name":"Bank Transfer","order":"2","description":null}]',
            ),
            array( // row #63
                'id' => 67,
                'company_id' => 2,
                'key' => 'general.company_tax_number',
                'value' => '8276861-0',
            )
        ));
    }

    /*(array(
    array(['company_id' => '1', 'key' => 'general.date_format', 'value' => 'd M Y']),
    array(['company_id' => '1', 'key' => 'general.timezone' , 'value' => 'Europe/London']),
    array(['company_id' => '1', 'key' => 'general.company_name' , 'value' => 'Asesorías ASA Ltda']),
    array(['company_id' => '1', 'key' => 'general.file_types' , 'value' => 'pdf,jpeg,jpg,png']),
    array(['company_id' => '1', 'key' => 'general.company_tax_number' , 'value' => '8276861-0']),
    array(['company_id' => '2', 'key' => 'general.date_format', 'value' => 'd M Y']),
    array(['company_id' => '2', 'key' => 'general.timezone' , 'value' => 'Europe/London']),
    array(['company_id' => '2', 'key' => 'general.company_name' , 'value' => 'Cente Ltda']),
    array(['company_id' => '2', 'key' => 'general.file_types' , 'value' => 'pdf,jpeg,jpg,png']),
    array(['company_id' => '2', 'key' => 'general.company_tax_number' , 'value' => '76104329-3']),
    ));
}*/
}
