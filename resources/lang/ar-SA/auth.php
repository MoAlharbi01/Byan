<?php

return [

    'auth'                  => 'المصادقة',
    'profile'               => 'الملف الشخصي',
    'logout'                => 'تسجيل خروج',
    'login'                 => 'تسجيل دخول',
    'forgot'                => 'نسيت',
    'login_to'              => 'تسجيل دخول لبدء جلسة العمل الخاصة بك',
    'remember_me'           => 'تذكرني',
    'forgot_password'       => 'نسيت كلمة المرور',
    'reset_password'        => 'إعادة تعيين كلمة المرور',
    'change_password'       => 'تغيير كلمة المرور',
    'enter_email'           => 'أدخل عنوان بريدك الإلكتروني',
    'current_email'         => 'البريد الإلكتروني الحالي',
    'reset'                 => 'إعادة تعيين',
    'never'                 => 'أبداً',
    'landing_page'          => 'الصفحة المقصودة',
    'personal_information'  => 'المعلومات الشخصية',
    'register_user'         => 'تسجيل المستخدم',
    'register'              => 'تسجيل',

    'form_description' => [
        'personal'          => 'سيتم إرسال رابط الدعوة إلى المستخدم الجديد، تأكد من أن عنوان البريد الإلكتروني صحيح. سيكون بإمكان المستخدم إدخال كلمة المرور الخاصة به.',
        'assign'            => 'سيمتلك المستخدم حق الوصول إلى الشركات المحددة. يمكنك تقييد الصلاحيات من صفحة <a href=":url" class="border-b border-black">الأدوار</a>.',
        'preferences'       => 'حدد اللغة الافتراضية للمستخدم. يمكنك أيضا تعيين صفحة الهبوط بعد تسجيل دخول المستخدم.',
    ],

    'password' => [
        'pass'              => 'كلمة المرور',
        'pass_confirm'      => 'تأكيد كلمة المرور',
        'current'           => 'كلمة المرور الحاليّة',
        'current_confirm'   => 'تأكيد كلمة المرور الحالية',
        'new'               => 'كلمة المرور الجديدة',
        'new_confirm'       => 'تأكيد كلمة المرور الجديدة',
    ],

    'error' => [
        'self_delete'       => 'خطأ: لا يمكن حذف نفسك!',
        'self_disable'      => 'خطأ: لا يمكنك تعطيل حسابك!',
        'unassigned'        => 'لا يمكن إلغاء تعيين المستخدم للشركة! يجب أن يتم تعيين مستخدم واحد على الأقل لشركة :company.
',
        'no_company'        => 'خطأ: لم يتم تعيين أية شركة إلى حسابك، من فضلك تواصل مع مسؤول النظام.',
    ],

    'login_redirect'        => 'تم التحقق! يتم إعادة توجيهك...',
    'failed'                => 'بيانات الاعتماد هذه غير متطابقة مع البيانات المسجلة لدينا.',
    'throttle'              => 'عدد كبير جداً من محاولات تسجيل الدخول. يرجى إعادة المحاولة خلال :seconds ثواني.',
    'disabled'              => 'هذا الحساب غير مفعّل. من فضلك تواصل مع مسؤول النظام.',

    'notification' => [
        'message_1'         => 'تم إرسال هذه الرسالة لإبلاغك بوجود طلب إعادة تعيين كلمة المرور على الحساب الخاص بك.',
        'message_2'         => 'لا داعي لاتخاذ أي إجراء إذا لم تقم بطلب إعادة كلمة المرور.',
        'button'            => 'إعادة تعيين كلمة المرور',
    ],

    'invitation' => [
        'message_1'         => 'أنت تتلقى هذا البريد الإلكتروني لأنك مدعو للانضمام إلى Byan.',
        'message_2'         => 'إذا كنت لا ترغب في الانضمام، لا حاجة إلى اتخاذ أي إجراء.',
        'button'            => 'ابدأ الآن',
    ],

    'information' => [
        'invoice'           => 'أنشئ الفواتير بسهولة',
        'reports'           => 'الحصول على تقارير مفصلة',
        'expense'           => 'تتبع أي مصاريف',
        'customize'         => 'تخصيص Byan الخاص بك',
    ],

    'roles' => [
        'admin' => [
            'name'          => 'الإدارة',
            'description'   => 'يحصلون على الوصول الكامل إلى Byan بما في ذلك العملاء، الفواتير، التقارير، الإعدادات، والتطبيقات.',
        ],
        'manager' => [
            'name'          => 'مدير',
            'description'   => 'يحصلون على الوصول الكامل إلى Byan، ولكن لا يمكنهم إدارة المستخدمين والتطبيقات.',
        ],
        'customer' => [
            'name'          => 'عميل',
            'description'   => 'يمكنهم الوصول إلى بوابة العملاء ودفع فواتيرهم عبر الإنترنت بواسطة طرق الدفع التي قمت بإنشائها.',
        ],
        'accountant' => [
            'name'          => 'محاسب',
            'description'   => 'يمكنهم الوصول إلى الفواتير، والمعاملات، والتقارير، وإنشاء سجلات في اليومية.',
        ],
        'employee' => [
            'name'          => 'موظف',
            'description'   => 'يمكنهم إنشاء مطالبات بالمصروفات وتتبع الوقت للمشاريع المعينة، ولكن يمكنهم فقط رؤية المعلومات الخاصة بهم.',
        ],
    ],

];
