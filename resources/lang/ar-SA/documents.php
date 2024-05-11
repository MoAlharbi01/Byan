<?php

return [

    'edit_columns'              => 'تحرير الأعمدة',
    'empty_items'               => 'لم تقم بإضافة أي عناصر.',
    'grand_total'               => 'المجموع الإجمالي',
    'accept_payment_online'     => 'قبول المدفوعات عبر الإنترنت',
    'transaction'               => 'تم الدفع بمبلغ :amount باستخدام :account.',
    'billing'                   => 'الفواتير',
    'advanced'                  => 'متقدم',

    'item_price_hidden'         => 'هذا العمود مخفي في :type الخاص بك.',

    'actions' => [
        'cancel'                => 'يلغي',
    ],

    'invoice_detail' => [
        'marked'                => '<b>لقد</b> وضعت علامة على هذه الفاتورة كـ',
        'services'              => 'خدمات',
        'another_item'          => 'عنصر آخر',
        'another_description'   => 'ووصف آخر',
        'more_item'             => '+: عد المزيد من العناصر',
    ],

    'statuses' => [
        'draft'                 => 'مسودة',
        'sent'                  => 'مرسل',
        'expired'               => 'منتهي الصلاحية',
        'viewed'                => 'تم المشاهدة',
        'approved'              => 'موافقة',
        'received'              => 'تلقى',
        'refused'               => 'رفض',
        'restored'              => 'رمم',
        'reversed'              => 'عكس',
        'partial'               => 'جزئي',
        'paid'                  => 'مدفوع',
        'pending'               => 'قيد الانتظار',
        'invoiced'              => 'مفوترة',
        'overdue'               => 'Overdue',
        'unpaid'                => 'غير مدفوعة الأجر',
        'cancelled'             => 'ألغيت',
        'voided'                => 'باطل',
        'completed'             => 'مكتمل',
        'shipped'               => 'شحنها',
        'refunded'              => 'ردها',
        'failed'                => 'فشل',
        'denied'                => 'رفض',
        'processed'             => 'تمت معالجتها',
        'open'                  => 'يفتح',
        'closed'                => 'مغلق',
        'billed'                => 'فاتورة',
        'delivered'             => 'تم التوصيل',
        'returned'              => 'عاد',
        'drawn'                 => 'مسحوب',
        'not_billed'            => 'لم يتم إصدار فاتورة بها',
        'issued'                => 'صادر',
        'not_invoiced'          => 'لم يتم إخطاره',
        'confirmed'             => 'مؤكد',
        'not_confirmed'         => 'غير مؤكد',
        'active'                => 'نشيط',
        'ended'                 => 'انتهى',
    ],

    'form_description' => [
        'companies'             => 'قم بتغيير العنوان والشعار والمعلومات الأخرى لشركتك.',
        'billing'               => 'تظهر تفاصيل الفواتير في المستند الخاص بك.',
        'advanced'              => 'حدد الفئة، وأضف التذييل أو قم بتحريره، وأضف المرفقات إلى ملفك :type.',
        'attachment'            => 'قم بتحميل الملفات المرفقة بهذا :type',
    ],

    'slider' => [
        'create'            => ':user أنشأ هذه :type في :date',
        'create_recurring'  => ':user أنشأ هذا القالب المتكرر في :date',
        'send'              => ':user ارسل :type في :date',
        'schedule'          => 'تكرار كل :interval :frequency منذ :date',
        'children'          => ':count :type تم إنشاؤها تلقائيا',
        'cancel'            => ':user ألغى هذا :type في :date',
    ],

    'messages' => [
        'email_sent'            => ':type email has been sent!',
        'restored'              => ':type has been restored!',
        'marked_as'             => ':type marked as :status!',
        'marked_sent'           => ':type marked as sent!',
        'marked_paid'           => ':type marked as paid!',
        'marked_viewed'         => ':type marked as viewed!',
        'marked_cancelled'      => ':type marked as cancelled!',
        'marked_received'       => ':type marked as received!',
    ],

    'recurring' => [
        'auto_generated'        => 'Auto-generated',

        'tooltip' => [
            'document_date'     => 'The :type date will be automatically assigned based on the :type schedule and frequency.',
            'document_number'   => 'The :type number will be automatically assigned when each recurring :type is generated.',
        ],
    ],

    'empty_attachments'         => 'There are no files attached to this :type.',
];
