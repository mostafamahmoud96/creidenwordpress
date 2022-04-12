<?php
/**
 * إعدادات ووردبريس الأساسية
 *
 * عملية إنشاء الملف wp-config.php تستخدم هذا الملف أثناء التنصيب. لا يجب عليك
 * استخدام الموقع، يمكنك نسخ هذا الملف إلى "wp-config.php" وبعدها ملئ القيم المطلوبة.
 *
 * هذا الملف يحتوي على هذه الإعدادات:
 *
 * * إعدادات قاعدة البيانات
 * * مفاتيح الأمان
 * * بادئة جداول قاعدة البيانات
 * * المسار المطلق لمجلد الووردبريس
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** إعدادات قاعدة البيانات - يمكنك الحصول على هذه المعلومات من مستضيفك ** //

/** اسم قاعدة البيانات لووردبريس */
define( 'DB_NAME', 'wordpress' );

/** اسم مستخدم قاعدة البيانات */
define( 'DB_USER', 'root' );

/** كلمة مرور قاعدة البيانات */
define( 'DB_PASSWORD', 'admin' );

/** عنوان خادم قاعدة البيانات */
define( 'DB_HOST', 'localhost' );

/** ترميز قاعدة البيانات */
define( 'DB_CHARSET', 'utf8mb4' );

/** نوع تجميع قاعدة البيانات. لا تغير هذا إن كنت غير متأكد */
define( 'DB_COLLATE', '' );

/**#@+
 * مفاتيح الأمان.
 *
 * تغيير هذه العبارات إلى عبارات فريدة مختلفة!
 * استخدم الرابط التالي لتوليد المفاتيح {@link https://api.wordpress.org/secret-key/1.1/salt/}
 * يمكنك تغيير هذه في أي وقت لإلغاء جميع ملفات تعريف الارتباط الموجودة. سيؤدي هذا إلى إجبار جميع المستخدمين على تسجيل الدخول مرة أخرى.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'FrD!E0RNBd`uia^-d pu*5=y(4z.;&px%8XfGfb3|WY=~kn9?_#C[e5$N,x.NUeh' );
define( 'SECURE_AUTH_KEY',  '/K_~WCV(H]v=}=KYxnEHP3F^;2DLTU||h#ybvN2d?X`y*.8I7Sd34O+,B&}L|Fns' );
define( 'LOGGED_IN_KEY',    '6sM8HB!A.EG;.7g2#Q#l9{KpMKIFAxNqToiAWuso.4t3<@iZF]+j9C(4 g nE{kT' );
define( 'NONCE_KEY',        '}DWdpumFL)y[J8B4?fGE4jtkP^iQ_jSdTx=Yv%ajzU1>D|KJla%Q5}x|v!|f%}Fm' );
define( 'AUTH_SALT',        '@m$un*R-Zx<.](6B+iA~Dc<<H^#!4{HGQ(~~Etr@5_a*swjSMoJ=}Dr0L)KM5d#Y' );
define( 'SECURE_AUTH_SALT', '4!*W08zBVh+OT|?E):k|!?Vw.wVIg8_8=QvB+pG:Jh~/#(58SHcK 5Imx8]~!bpq' );
define( 'LOGGED_IN_SALT',   'c<r|=r!vkJoK@E&Q80hF5{D@wUITx5= u3VF9I_ zRZAi7n5~oHxs0o@=_^0jGUT' );
define( 'NONCE_SALT',       '`H;8vq>sn[?nf MD9$EWhyM&.Z:aiY/vH)9`LIh7f0avX4~N~XuHOB,Yup,2TtE8' );

/**#@-*/

/**
 * بادئة الجداول في قاعدة البيانات.
 *
 * تستطيع تركيب أكثر من موقع على نفس قاعدة البيانات إذا أعطيت لكل موقع بادئة جداول مختلفة
 * يرجى استخدام حروف، أرقام وخطوط سفلية فقط!
 */
$table_prefix = 'wp_';

/**
 * للمطورين: نظام تشخيص الأخطاء
 *
 * قم بتغييرالقيمة، إن أردت تمكين عرض الملاحظات والأخطاء أثناء التطوير.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* هذا هو المطلوب، توقف عن التعديل! نتمنى لك التوفيق. */

/** المسار المطلق لمجلد ووردبريس. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** إعداد متغيرات الووردبريس وتضمين الملفات. */
require_once ABSPATH . 'wp-settings.php';