### متطلبات التشغيل:
1-ويب سيرفر مثلا xampp

2- نسخة php 8.2 او اعلى

3- تحميلComposer

4-تحميل node package management

#
## المكتبات المستخدمة:
1-مكتبة livewire 3    


يمكنك زيارة الموقع من هنا (https://livewire.laravel.com/)

2-مكتبة jantinnerezo/livewire-aler التي تقوم بعمل التنبيهات المنبثقه


يمكنك زيارة الموقع من هنا (https://github.com/jantinnerezo/livewire-alert)


## طريقة التشغيل:
### 1. نسخ المستودع 
ابحث عن مكان على جهاز الكمبيوتر الخاص بك حيث تريد تخزين المشروع

قم بتشغيل وحدة التحكم bash هناك واستنسخ المشروع.

`git clone https://github.com/MutazAsem/HotelBookingSystem.git`

### 2. انتقل الى مسار المشروع
يجب أن تكون داخل مسار المشروع الذي تم إنشاؤه للتو، لذا انتقل إليه.

`cd project_name`

### 3.  تنزيل composer dependencies
عندما تقوم باستنساخ مشروع Laravel جديد، يجب عليك الآن تثبيت جميع الحزم المشروع. وهذا ما يؤدي في الواقع إلى تثبيت Laravel نفسه، من بين الحزم الضرورية الأخرى للبدء.



`composer install`


### 4. قم بإنشاء ملف .env

يجب عليك عمل نسخة من ملف .env.example وتسميته .env حتى تتمكن من إعداد الاعدادات الخاص بك, يمكنك النسخ بإستخدام هذا الامر و ايضا يجب تعديل اعدادات الايميل لكي تعمل رسائل الايميل من الخلال الربط مع مزود خدمة رسائل البريد الالكتروني

`cp .env.example .env`

### 5. إنشاء مفتاح تشفير التطبيق app key 


يتطلب Laravel منك أن يكون لديك مفتاح تشفير للتطبيق يتم إنشاؤه عشوائيًا وتخزينه في ملف .env الخاص بك. سيستخدم التطبيق مفتاح التشفير هذا لتشفير عناصر مختلفة من تطبيقك من ملفات تعريف الارتباط إلى تجزئات كلمات المرور والمزيد.
يمكنك انشاء مفتاح باستخدام هذا الامر

`php artisan key:generate`



### 6. قم بانشاء Migrate للجداول 
بمجرد إضافة بيانات الاعتماد الخاصة بك إلى ملف .env، يمكنك الآن تنفيذ عمليات ترحيل قاعدة البيانات. ستؤدي هذه الخطوة إلى إنشاء جميع الجداول اللازمة في قاعدة بياناتك.

`php artisan migrate`

### 7. قم بانشاء seeder للسجلات (اضافة البيانات الاساسية لقاعدة البيانات) 
`php artisan db:seed --class=UserSeeder`

`php artisan db:seed --class=HotelSeeder`

`php artisan db:seed --class=RoomSeeder`

`php artisan db:seed --class=ReservationSeeder`


### 8. قم بتشغيل السيرفر محليا
`php artisan serve`


### 9. قم بالدخول الى لوحة التحكم من الرابط التالي 

`http://127.0.0.1:8000`

الحساب الاساسي (مدير النظام) `admin@admin.com`  كلمة المرور `12345678`



##  اختبارات وحدات (Tests Unit)
لتجربة الاختبارات اولا يجب عليك تفعيل اداة gd التي تسمح بإنشاء الصور ومعالجتها في PHP 

انا استخدمتها لاختبار رفع الصور 


طريقة تفعيلها في xampp 


#### 1-اولا ادخل الى ملف php.ini الموجود داخل xampp غالبا في هذا المسار

`C:\xampp\php\php.ini`

#### 2-ثانيا ابحث بإستخدام `Ctrl + F` واكتب `extension=gd`

سوف تكون هكذا `extension=gd;`  قم بتحويلها الى `extension=gd` اي فقط احذف  `;`

#### 3- قم بحفظ الملف واعادة تشغيل للسيرفر  xampp


#### 4- قم بالاختبار عن طريق هذا الامر

`vendor/bin/pest`
