<?php

namespace App\Exports;

use App\Models\Shipment_Order;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class ShipmentExport implements FromCollection, WithHeadings, WithEvents
{
    protected $data;

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function collection()
    {
        return collect($this->data);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings(): array
    {
        return [
            'id',
            'user_id',
            'HWB',
            'total_pkg',
            'total_weight',
            'total_volume',
            'total_charge',
            'total_value',
            'shipment_type',
            'shipment_service',
            'shipment_reason',
            'sender_company',
            'sender_fullname',
            'sender_country',
            'sender_countrycode',
            'sender_address1',
            'sender_address2',
            'sender_zipcode',
            'sender_city',
            'sender_state',
            'sender_phone',
            'sender_email',
            'receiver_company',
            'receiver_fullname',
            'receiver_country',
            'receiver_countrycode',
            'receiver_address1',
            'receiver_address2',
            'receiver_zipcode',
            'receiver_city',
            'receiver_state',
            'receiver_phone',
            'receiver_email',
            'receiver_company',
            'created_at',
            'updated_at'
        ];
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function registerEvents(): array
    {
        return [

            AfterSheet::class => function (AfterSheet $event) {

                $event->sheet->getDelegate()->getStyle('A1:D1')
                    ->getFill()
                    ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                    ->getStartColor()
                    ->setARGB('FFA500');
              
                 $event->sheet->getDelegate()->freezePane('A2');  
            },

        ];
    }
}
