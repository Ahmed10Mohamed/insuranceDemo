<?php

namespace App\Lib;

class Permissions
{
    private array $permissions = [
        'الموظفين' => [
            'add_admin' => 'اضافه',
            'edit_admin' => 'تعديل',
            'delete_admin' => 'حذف',
        ],
        'انواع الشاحنه' => [
            'add_TruckType' => 'اضافه',
            'edit_TruckType' => 'تعديل',
            'delete_TruckType' => 'حذف',
        ],
        'تخصص الشحن' => [
            'add_companySpecialization' => 'اضافه',
            'edit_companySpecialization' => 'تعديل',
            'delete_companySpecialization' => 'حذف',
        ],
        'السائقيين' => [
            'add_driver' => 'اضافه',
            'edit_driver' => 'تعديل',
            'delete_driver' => 'حذف',
        ],
          'العملاء' => [
            'add_client' => 'اضافه',
            'edit_client' => 'تعديل',
            'delete_client' => 'حذف',
            'show_orders_client' => 'مشاهده طلبات العملاء',
            'client_order_details' => 'تفاصيل طلبات العملاء',
            'delete_client_orders' => 'حذف طلبات العملاء',
            'track_client_orders' => 'تتبع طلبات العملاء',  
        ],
        'الشركات' => [
            'add_company' => 'اضافه',
            'edit_company' => 'تعديل',
            'delete_company' => 'حذف',
            'show_orders' => 'مشاهده الطلبات',
            'order_details' => 'تفاصيل الطلب',
            'delete_orders' => 'حذف الطلبات',
            'track_orders' => 'تتبع الطلبات',
            'Order_received' => 'استلام الطلبات',
            'login_as_company' => 'تسجيل دخول كشركه',
        ],
          'اسليدر' => [
            'add_slider' => 'اضافه',
            'edit_slider' => 'تعديل',
            'delete_slider' => 'حذف',
        ],
        'المحفظه' => [
            'wallet' => 'مشاهده',
            'export_wallet_excel' => 'تصدير اكسيل',
        ],
        'عن السيستم' => [
            'aboutUs' => 'تعديل',
        ],
         'الاعدادات' => [
            'settings' => 'تعديل',
        ],
         'الاحصائيات' => [
            'statistics' => 'عرض',
        ],
        
    ];

    public function all(): array
    {
        return $this->permissions;
    }

    public function getGroup(string $group): array
    {
        return $this->permissions[$group] ?? [];
    }
}
