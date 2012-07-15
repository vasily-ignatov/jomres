<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
**/
##################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
##################################################################
define('_JOMRES_COM_MR_QUICKRESDESC','הזמנה מהירה');
define('_JOMRES_COM_MR_SHOWPROFILES','הצג פרופילים');
define('_JOMRES_COM_MR_GENERALCONFIGDESC','תצורה כללית');
define('_JOMRES_COM_MR_BACK','חזרה');
define('_JOMRES_COM_MR_YES','כן');
define('_JOMRES_COM_MR_NO','לא');
define('_JOMRES_COM_MR_NEWTARIFF','חדש');
define('_JOMRES_COM_MR_NEWPROPERTY','נכס חדש');
define('_JOMRES_COM_MR_NEWPROPERTYFEATURE','אפיון נכס חדש');
define('_JOMRES_COM_MR_NEWGUEST','אורח חדש');
define('_JOMRES_COM_MR_SAVE','שמור');
// View bookings
define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME','שם');
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL','הגעה');
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE','עזיבה');
define('_JOMRES_COM_MR_ASSIGNUSER_TITLE','הקצאת פונקציות משתמש');
define('_JOMRES_COM_MR_ASSIGNUSER_ID','מקט');
define('_JOMRES_COM_MR_ASSIGNUSER_NAME','שם');
define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME','שם משתמש');
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER','מאושר כיום');
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL','נכס ברירת מחדל');
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS','שנה את זה');
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL','רמת גישה');
define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE','משתמש עודכן');
define('_JOMRES_COM_MR_ASSIGNUSER_NOTAPPLICABLE','לא זמין');
define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION','קבלה');
define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN','מנהל נכס');
// Edit bookings
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE','כל ההזמנות');
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS','הזמנות חדשות');
define('_JOMRES_COM_MR_EDITBOOKINGTITLE','ערוך הזמנות');
define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL','הגעה/עזיבה');
define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST','אורח');
define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM','חדר');
define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT','תשלום');
define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL','שם פרטי');
define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL','שם משפחה');
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ','דרישות מיוחדות');
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER','אנא שים לב, חלק מדרישות מיוחדות יכולות להביא לחיובים נוספים.');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING','בטל הזמנה');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL','מספר בית או שם');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL','רחוב');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL','עיר');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','מיקוד');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','טלפון קווי');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL','טלפון נייד');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL','דואר אלקטרני');
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN','אי אפשר לבטל הזמנה, כי אורח כבר בחדר');
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT','הפקדה לא שולמה');
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON','אשר את הביטול');
define('_JOMRES_COM_MR_EB_GUEST_CANCELLED','ביטול הזמנה');
define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL','ימים להגעה');
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL','סוג הזמנה');
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK','שחור');
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION','קבלה');
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET','אינטרנט');
define('_JOMRES_COM_MR_EB_ROOM_NAME','שם חדר');
define('_JOMRES_COM_MR_EB_ROOM_NUMBER','חדר');
define('_JOMRES_COM_MR_EB_ROOM_FLOOR','קומה');
define('_JOMRES_COM_MR_EB_ROOM_DISABLED','יש גישה לנכים?');
define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE','מספר אנשים מקסימלי');
define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV','סוג חדר');
define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC','תאור סוג חדר');
define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST','רשימת מאפייני החדר');
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID','הפקדה שולמה');
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE','הכנס הפקדה');
define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL','סה"כ לתשלום');
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF','סימוכין הפקדה');
define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER','הזמנת מקום');
define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED','הפקדה');
define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE','הפקדה נשמרה');
// Edit Language
define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE','אין חדרים פנויים');
define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME','נכס');
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE','סוג חדר');
// Display guest form
define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS','ערוך פרטי אורח');
define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME','שם פרטי');
define('_JOMRES_COM_MR_DISPGUEST_SURNAME','שם משפחה');
define('_JOMRES_COM_MR_DISPGUEST_HOUSE','בית');
define('_JOMRES_COM_MR_DISPGUEST_STREET','רחוב');
define('_JOMRES_COM_MR_DISPGUEST_TOWN','עיר');
define('_JOMRES_COM_MR_DISPGUEST_POSTCODE','מיקוד');
define('_JOMRES_COM_MR_DISPGUEST_LANDLINE','טלפון קווי');
define('_JOMRES_COM_MR_DISPGUEST_MOBILE','טלפון נייד');
define('_JOMRES_COM_MR_DISPGUEST_FAX','פקס');
define('_JOMRES_COM_MR_DISPGUEST_CCARDNO','מספר כרטיס אשראי');
define('_JOMRES_COM_MR_DISPGUEST_CCARDISS','תאריך הנפקת כרטיס');
define('_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE','תוקף הכרטיס');
define('_JOMRES_COM_MR_DISPGUEST_CCARISSNO','מספר הנפקה');
define('_JOMRES_COM_MR_DISPGUEST_CCARDNAME','שם בעל הכרטיס');
define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE','תבחר את בחירתך');
define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS','ימי שהייה');
define('_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS','מספר אורחים');
define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE','סה"כ');
// Rooms tab
define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE','הצג תצורת חדרים ונכס');
define('_JOMRES_COM_MR_VRCT_TAB_ROOM','חדרים');
define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES','מאפייני החדר');
define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES','סוגי חדרים');
define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS','נכס');
define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES','מאפייני הנכס');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK','חדר');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE','סוג');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME','שם');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER','מספר');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR','קומה');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS','גישת נכים?');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE','מקסימום אנשים');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES','מאפיינים');
define('_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT','הוספת חדר הושלמה');
define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT','ערוך פריט');
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK','מאפייני החדר');
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT','תאור מאפיין');
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT','מאפיין החדר נוסף בהצלחה');
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE','מאפיין החדר עודכן');
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK','סוג חדר');
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV','קיצור סוג החדר');
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC','תאור סוג החדר');
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT','סוג חדר נוסף בהצלחה');
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE','סוג חדר עודכן');
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT','ערוך פריט');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME','שם');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET','רחוב');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN','עיר');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION','מחוז');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY','מדינה');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE','מיקוד');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE','טלפון');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX','פקס');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL','אימייל');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE','אתר');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES','מאפיינים');
define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_INSERT','נכס נוסף בהצלחה');
define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE','נכס עודכן');
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK','מאפייני הנכס');
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV','קיצור מאפייני הנכס');
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC','תאור מלא של מאפייני הנכס');
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT','מאפיין נכס נוסף בהצלחה');
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE','מאפיין נכס עודכן');
define('_JOMRES_COM_MR_LISTTARIFF_TITLE','תעריפים');
define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE','כותרת התעריף');
define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION','תאור');
define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM','טופס תקף');
define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO','תקף ל');
define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY','תעריף ללילה');
define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS','מינימום ימים');
define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS','מקסימום ימים');
define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE','מינימום אנשים');
define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE','מקסימום אנשים');
define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS','סוג חדר');
define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN','התעלם ממחיר לילה לבן אדם');
define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE','לאפשר סופי שבוע');
define('_JOMRES_COM_MR_LISTTARIFF_SAVE_INSERT','תעריף נוסף בהצלחה');
define('_JOMRES_COM_MR_LISTTARIFF_SAVE_UPDATE','תעריף עודכן');
define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT','ערוך פריט');
define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE','שכפל פריט');
define('_JOMRES_COM_MR_LISTTARIFF_DELETED','תעריף נמחק');
define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT','ערוך תעריף');
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE','חגים לאומיים');
define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE','הזמנה נשמרה');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN','רשום הזמנת אורח');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT','מחק הזמנת אורח');
define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS','הצג הזמנות');
define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS','הזמנות חדשות');
define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME','לוח בקרה');
define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN','ניהול אורח');
define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN','ניהול נכס');
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY','בדוק זמינות');
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CONFIRMYOURDETAILS','אשר את פרטיך');
define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME','שם פרטי');
define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME','שם משפחה');
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL','מספר בית');
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL','רחוב');
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL','עיר');
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','מיקוד');
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','טלפון קווי');
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL','טלפון נייד');
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE','לא נמצאו חדרים לפי דרישות שלך');
define('_JOMRES_FRONT_MR_BOOKINGMADE','<center>Tתודה שהזמנת אצלנו. מקווים שתהנה משהייתך<br><br> <b>אנא שים לב , זוהי רק קדם הזמנה. ההזמנה תאושר עם קבלת דואל על ידך ואישורו </center>');
define('_JOMRES_FRONT_MR_EMAIL_SUBJECT_INTERNETBOOKINGMADE','הזמנה בוצעה בנכס: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ROOM','הזמנה בוצעה לחדר: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ARRIVAL','תאריך הגעה: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_DEPARTURE','תאריך עזיבה: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME','שם: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_LANDLINE','טלפון: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_MOBILE','טלפון נייד: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_TOTAL','ערך החוזה הוא: ');
define('_JOMRES_FRONT_MR_BOOKIN_TITLE','רשום אורח ');
define('_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON','בחר אורח ');
define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN','אורח נרשם בהצלחה');
define('_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN','אין אורחים שאמורים להגיע היום');
define('_JOMRES_FRONT_MR_BOOKOUT_TITLE','הוצא אורח מהחדר');
define('_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT','אין אורחים שאמורים לעזוב היום');
// Config panel
define('_JOMRES_COM_A_SUPPLIMENTS','תוספות');
define('_JOMRES_COM_A_TARIFFS','תעריפים וסוגי מטבע');
define('_JOMRES_COM_A_DISCOUNTS','הנחות');
define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS','ההעלאת קבצים');
define('_JOMRES_COM_A_CURRENT_SETTINGS','תצורה נוכחית');
define('_JOMRES_COM_A_EXPLANATION','הסבר');
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON','תוספת לבן אדם יחיד');
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC','אנא וודא שזה נקבע ל-כן, אם אתא רוצה לשנות את מחיר תוספת ליחיד');
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST','חיוב תוספת ליחיד');
define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE','ההפקדה מחושבת באחוזים?');
define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC','האם ההפקדה נדרשת להיות אחוז מעסקה כוללת? אם לא אז הפקדה תרשם כסכום קבוע');
define('_JOMRES_COM_A_DEPOSIT_VALUE','ערך הפקדה הנדרשת');
define('_JOMRES_COM_A_TARIFFS_PER','לבן אדם, ללילה');
define('_JOMRES_COM_A_TARIFFS_PER_DESC','סמן כן אם ברצונך לחייב על בסיס בן אדם-ללילה, אם לא המחיר יחושב על בסיס  חדר-ללילה');
define('_JOMRES_COM_A_UPLOADS_FILESIZE','גודל קוובץ');
define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC','גודל תמונה מירבי בקילובייט');
define('_JOMRES_FRONT_MR_BOOKED','מוזמן');
define('_JOMRES_COM_CONFIRMATION_TITLE','מכתב אישור');
define('_JOMRES_COM_CONFIRMATION_DEAR',' היקר ');
define('_JOMRES_COM_CONFIRMATION_RATE_RULES',' מחיר לחדר ללילה');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS','פרטי הזמנה');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO1','תודה שהמנת ב');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO2','להלן סיכום פרטי הזמנתך. אנא בדוק שהפרטים שברשותנו אכן נכונים וצור איתנו קשר אם יש טעות כלשהיא');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_CHECKIN','חדרך יהיה שמור עד להגעתך, ושעת כניסה לחדר היא החל מ-2 בצהריים');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_LOOKFORWARD','אנו מצפים לקבל את פניך ב-');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_HAVEAPLEASANTSTAY','מאחלים שיהיה לך יום נעים');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINTINTRO','עכשיו ברצוננו להפנות את תשומת לבך לאותיות הקטנות');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT','אנו מזכירים לך שהזמנה היא מסמך קושר חוקי, אם מסיבה כלשהיא ברצונך לבטל או לקצר את הזמנתך, אתה עדיין אחראי לשלם את הסכום המלא');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_NOALLOWANCE','לא ניתן לתקצב לארוחות שלא נלקחו או חדרים שלא מאוכלסים לתקופת הזמנה מלאה. אנו ממליצים בחזקה שתשתמש במתקן ששמור לחגים');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO','<i>דמי ביטול וקיצוץ</i> אם אתה מבטל את חופשתך, הביטול צריך להיות בכתב. דמי ביטול הן:');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_30DAYSPLUS','30 יום או יותר');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_DEPOSITONLY',' הפקדה בלבד');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_1530DAYS','15 עד 30 יום');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_50PERCENT','50% מעסקה הכוללת');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS','תאריל הגעה ל-14 יום');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_100_PERCENT','  מהעיסקה הכוללת 100% ');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_VAT','כל המחירים כוללים מע"מ, כל שינוי במס יחוייב אוטומטית');
define('_JOMRES_COM_CONFIRMATION_PRINT','הדפס מכתב אישור');
define('_JOMRES_COM_INVOICE_TITLE','הדפסת חשבונית');
define('_JOMRES_COM_INVOICE_STAYNIGHTS','מספר מבוגרים: ');
define('_JOMRES_COM_INVOICE_CONTRACTAGREED','החוזה מאושר על ידי: ');
define('_JOMRES_COM_INVOICE_COSTPERNIGHT','מחיר ללילה: ');
define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL','סה"כ');
define('_JOMRES_COM_INVOICE_LETTER_INTRO1','תודה, תמיד לשרותך ב-');
define('_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY','מקווים לראותך אותך אצלנו');
define('_JOMRES_COM_INVOICE_PRINT','הדפס חשבונית');
define('_JOMRES_COM_ADDSERVICE_TITLE','הוסף שרות לחשבון');
define('_JOMRES_COM_ADDSERVICE_DESCRIPTION','תאור השרות');
define('_JOMRES_COM_ADDSERVICE_VALUE','ערך השרות');
define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC','פריטים נוספים שחוייבו');
define('_JOMRES_COM_ADDSERVICE_TOTALVALUE','פריטים נוספים שחוייבו, סה"כ: ');
define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE','פריטים שנוספו לחשבון');
define('_JOMRES_UPLOAD_IMAGE','העלת תמונה');
define('_JOMRES_FILE_UPLOAD','ההעלאת קובץ ');
define('_JOMRES_FILE_ERROR_TYPE','באפשרותך להעלות קבצים רק מסוג: /n');
define('_JOMRES_FILE_ERROR_EMPTY','אנא בחר קובץ לפני העלאה');
define('_JOMRES_FILE_ERROR_NAME','שם קובץ יכול לכלול רק אותיות ומספרים וללא רווחים');
define('_JOMRES_FILE_ERROR_SIZE','גודל הקובץ יותר גדול מהמותר');
define('_JOMRES_FILE_NOT_UPLOADED','קבצים לא הועלו');
define('_JOMRES_FILE_UPDATED','הקובץ/קבצים שלך הועלו בהצלחה');
define('_JOMRES_COM_A_JSCALENDAR','לוח שנה JS');
define('_JOMRES_COM_A_CALENDARLANGUAGE','קובץ שפה של לוח שנה JS');
define('_JOMRES_COM_A_CALENDARLANGUAGE_DESC','בחר את קובץ השפה שישמש את לוח השנה. אנא שים לב שחלק מלוחות השנה יכולים להיות שגויים. ראה - http://sourceforge.net/tracker/?group_id=75569&atid=544287 לפרטים נוספים');
define('_JOMRES_COM_A_CALENDARCSS','CSS של לוח שנה');
define('_JOMRES_COM_A_CALENDARCSS_DESC','אנא בחר את קובץ CSS עבור לוח שנה JS');
define('_JOMRES_COM_A_ODDS','שונות.');
define('_JOMRES_COM_A_ERRORCHECKING','הצג רשימת קריאות למיני רכיבים');
define('_JOMRES_COM_A_ERRORCHECKING_DESC','העבר ל-כן על מנת לראות רשימת קריאות למיני רכיבים בתחתית העמוד לאחר שגומרס סיים פעולתו.  
כמו כן זה מונע את תכונת השליחה מחדש הפנימית. זה שימושי אם הנך מנסה לזהות איזה מיני רכיבים מבצעים שירותים מסויימים.');
define('_JOMRES_FILE_DELETE','מחק תמונה זאת');
define('_JOMRES_FILE_DELETED','קובץ נמחק');
define('_JOMRES_COM_MR_ROOM_DELETE','מחק');
define('_JOMRES_COM_MR_ROOM_UNABLETODELETE','אין אפשרות למחוק את החדר, כי ישנה הזמנה לחדר. מחק את ההזמנה ונסה שנית');
define('_JOMRES_COM_MR_ROOM_DELETED','חדר נמחק');
define('_JOMRES_COM_MR_ROOMFEATURE_DELETE','מחק מאפיין החדר');
define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE','אין אפשרות למחוק את המאפיין כי הוא מוקצב למספר חדרים. קודם תבטל את המאפיין בחדרים ואז תנסה למחוק');
define('_JOMRES_COM_MR_ROOMFEATURE_DELETED','מאפיין חדר נמחק');
define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE','מחק מאפיין הנכס');
define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE','אין אפשרות למחוק את המאפיין כי הוא מוקצב למספר נכסים. קודם תבטל את המאפיין בנכסים ואז תנסה למחוק');
define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED','מאפיין נכס נמחק');
define('_JOMRES_COM_MR_ROOMCLASS_DELETE','מחק סוג חדר');
define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS','אי אפשר למחוק את סוג חדר, כי קיימים חדרים מהסוג הזה. תנסה לשנות את סוג החדרים ואז למחוק');
define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS','אי אפשר למחוק את סוג חדר, כי קיימים תעריפים שקשורים לסוג זה. תנסה לקשר את התעריפים לסוג אחר ואז למחוק');
define('_JOMRES_COM_MR_ROOMCLASS_DELETED','סוג חדר נמחק');
define('_JOMRES_COM_MR_PROPERTY_DELETE','nje nkui');
define('_JOMRES_COM_MR_PROPERTY_DELETED','נכס נמחק');
define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS','אינך מורשה לבצע פעולה זאת');
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE','רוחב תמונה בגודל מלא');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK','לחץ על המפה');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION','תאור הנכס');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES','זמני הגעות');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES','פעילות באיזור');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS','הנחיות לנהגים');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS','שדות תעופה');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT','תחבורה נוספת');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS','תקנונים וכתבי מדיניות');
define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS','כתובת');
define('_JOMRES_COM_A_VISITORSCANBOOKONLINE','מבקרים יכולים להזמין מהאתר');
define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC','הגדר את זה ככן, כדי לאפשר הזמנות מהאתר');
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS','ההזמנות הן לתקופה קבועה');
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC','אם תגדיר את זה ככן, כל ההזמנות ירשמו לתקופה קבועה. אם תגדיר את זה כלא, אנא וודא ש"תאריך הגעה מוגדר" לא מוגדר ככן (אלא אם כן הינך דוחף תאריך מסויים)');
define('_JOMRES_COM_A_FIXEDPERIOD','תקופת הזמנה: ');
define('_JOMRES_COM_A_BOOKING','הזמנת חדרים');
define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS','תקופה מקסימלית, לדוגמא: 3 * 7 תקופות הזמנה = 21 יום');
define('_JOMRES_COM_A_SINGLEROOMPROPERTY','האם זאת דירה/קוטג/ווילה?');
define('_JOMRES_COM_A_SINGLEROOMPROPERTY_DESC','אם אתה מזכיר נכס ולא רק חדרים בנכס. אם זה המקרה, עליך לוודא שבכל נכס ישנו  אך ורק חדר אחד');
define('_JOMRES_FRONT_MR_REVIEWBOOKING','עיין בהזמנה');
define('_JOMRES_COM_MR_CONFIRMBOOKING','אשר הזמנה ');
define('_JOMRES_COM_MR_WEEKDAYS_MONDAY','שני');
define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY','שלישי');
define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY','רביעי');
define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY','חמישי');
define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY','שישי');
define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY','שבת');
define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY','ראשון');
define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR','ב');
define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR','ג');
define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR','ד');
define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR','ה');
define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR','ו');
define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR','ש');
define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR','א');
define('_JOMRES_COM_A_AVLCAL','זמינות');
define('_JOMRES_COM_AVLCAL_TODAYCOLOUR','צבע גופן לתאריך נוכחי');
define('_JOMRES_COM_AVLCAL_INMONTHFACE','צבע גופן לימים בתצוגת חודש ');
define('_JOMRES_COM_AVLCAL_OUTMONTHFACE','צבע גופן לימים מחוץ לתצוגת החודש');
define('_JOMRES_COM_AVLCAL_INBGCOLOUR','צבע רקע של תא ימים כש החדר/נכס זמינים');
define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR','צבע רקע תא לימים בתצוגת חודש');
define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR','צבע רקע תא לימים שהחדר מאוכלס');
define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR','צבע רקע תא לחדר בהזמנה חלקית ( הזמנה שההפקדה שלה עדייו לא שולמה');
define('_JOMRES_COM_AVLCAL_PASTCOLOUR','צבע רקע תא של ימים בעבר');
define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY','מאוכלס/לא זמין');
define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY','פנוי להזמנות');
define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY','הזמנות חלקיות');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO','תאריך הגעה מוגדר מראש');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC','רק לאתרים שמציעים הזמנות לתקופות קבועות. בחר את התאריך תחילת ההגעה');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY',',תאריך הגעה קבוע');
define('_JOMRES_FRONT_MR_FIXEDPRIOD1','תקופת שהייה (ימים)');
define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR','להציג לוח שנה של זמינות?');
define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC','הגדר את זה ככן כדי להציג את לוח שנה של זמינות');
define('_JOMRES_FRONT_AVAILABILITY','זמינות');
define('_JOMRES_FRONT_CALENDAR_CLICKDATES','לחץ על תאריך פנוי, כדי להציג טופס הזמנה');
define('_JOMRES_FRONT_BLACKBOOKING','הזמנות שחורות');
define('_JOMRES_FRONT_BLACKBOOKING_NEW','הזמנות שחורות חדשות');
define('_JOMRES_FRONT_DELETEGUEST','מחק אורח');
define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED','אורח נמחק');
define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST','אין אפשרות למחוק אורח זה, כי ישנם הזמנות על שמו. בטל את ההזמנות ונסה שנית');
define('_JOMRES_COM_INVOICE_ACTUALROOMCOST','מחיר ממשי של חדר: ');
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_HELLO','שלום');
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_THANKS','תודה שהזמנת ב-');
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_SUMMARY','סכום הזנה כולל הוא: ');
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_ANYQUESTIONS','אם יש לך שאלות לגבי ההזמנה או כל דבר אחר, אנא צור איתנו קשר.');
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_TELEPHONE','הטלפון שלנו: ');
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_EMAIL','או לחילופין, תוכל ליצור קשר באימייל: ');
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING','מעשן');
define('_JOMRES_FRONT_ROOMSMOKING_EITHER',"כלשהו");
define('_JOMRES_COM_CALENDAROUTPUT','מראה של לוח שנה');
define('_JOMRES_COM_CALENDAROUTPUT_DESC','זה מאפשר למשתמשים לשנות את תצורת תאריכים בלוח שנה של Jomres');
define('_JOMRES_COM_CALENDARINPUT','מראה של לוח שנה');
define('_JOMRES_COM_CALENDARINPUT_DESC','זה מאפשר למשתמשים לשנות את תצורת תאריכים בלוח שנה של Jomres');
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT','הזמנות בתקופה קבועה מאפשרות הפסקות קצרות');
define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS','משך זמן של ההפקה');
define('_JOMRES_COM_MR_VRCT_PUBLISHED','פורסם');
define('_JOMRES_COM_A_PAYPAL','Paypal');
define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL','מעקב חשבונות');
define('_JOMRES_MR_AUDIT_LISTING_DATE','תאריך');
define('_JOMRES_MR_AUDIT_LISTING_TIME','זמן');
define('_JOMRES_MR_AUDIT_LISTING_USER','שם משתמש');
define('_JOMRES_MR_AUDIT_LISTING_OPERATION','פעולה');
define('_JOMRES_MR_AUDIT_LISTING_VIEWSQL','ראה פרטים');
define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE','סנן לפי תאריך');
define('_JOMRES_MR_AUDIT_LISTING_FILTER_USERNAME','סנן לפי משתמש');
define('_JOMRES_MR_AUDIT_LISTING_FILTER_OPERATION','סנן לפי פעולה');
define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS','סטטוס');
define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING','מחכה להגעה');
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY','מגיע היום');
define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT','שוכן כרגע');
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY','עוזב היום');
define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE','כבר עזב');
define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE','טרם הגיע');
define('_JOMRES_MR_AUDIT_UNKNOWNUSER','משתמש לא מזוהה');
define('_JOMRES_MR_AUDIT_INSERT_ROOM','חדר נוצר');
define('_JOMRES_MR_AUDIT_UPDATE_ROOM','חדר עודכן');
define('_JOMRES_MR_AUDIT_DELETE_ROOM','חדר נמחק');
define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE','מאפיין חדר נוצר');
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE','מאפיין חדר עודכן');
define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE','מאפיין חדר נמחק');
define('_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE','סוג חדר הוכנס');
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_TYPE','סוג חדר עודכן');
define('_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE','סוג חדר נמחק');
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY','נכס נוצר');
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY','נכס עודכן');
define('_JOMRES_MR_AUDIT_DELETE_PROPERTY','נכס נמחק');
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY_FEATURE','מאפיין נכס נוצר');
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_FEATURE','מאפיין נכס עודכן');
define('_JOMRES_MR_AUDIT_DELETE_PROPERTY_FEATURE','מאפיין נכס נמחק');
define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS','הגדרות נכס ערוכות');
define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY','נכס פורסם');
define('_JOMRES_MR_AUDIT_INSERT_TARIFF','תעריף נוצר');
define('_JOMRES_MR_AUDIT_UPDATE_TARIFF','תעריף עודכן');
define('_JOMRES_MR_AUDIT_DELETE_TARIFF','תעריף נמחק');
define('_JOMRES_MR_AUDIT_ADDSERVICE','חיוב שרות נוצר');
define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN','אורח שהזמין');
define('_JOMRES_MR_AUDIT_BOOKEDGUESTOUT','אורח שביטל');
define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT','הפקדה הוכנסה');
define('_JOMRES_MR_AUDIT_INSERT_GUEST','אורח נוצר');
define('_JOMRES_MR_AUDIT_UPDATE_GUEST','אורח עודכן');
define('_JOMRES_MR_AUDIT_DELETE_GUEST','אורח נמחק');
define('_JOMRES_MR_AUDIT_BOOKED_ROOM','הזמין חדר');
define('_JOMRES_MR_AUDIT_INSERT_EXTRA','יצר תוספת');
define('_JOMRES_MR_AUDIT_UPDATE_EXTRA','עידכן תוספת');
define('_JOMRES_MR_AUDIT_DELETE_EXTRA','מחק תוספת');
define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA','תוספת פורסמה');
define('_JOMRES_MR_AUDIT_BLACKBOOKING','הוכנס לספר שחור');
define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE','נמחק מספר שחור');
define('_JOMRES_COM_MR_EXTRA_TITLE','תוספות');
define('_JOMRES_COM_MR_EXTRA_DESC','תאור');
define('_JOMRES_COM_MR_EXTRA_NAME','שם');
define('_JOMRES_COM_MR_EXTRA_PRICE','מחיר');
define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED','תוספת עודכנה');
define('_JOMRES_COM_MR_EXTRA_LINKTEXT','ערוך פריט');
define('_JOMRES_COM_MR_EXTRA_DELETED','תוספת נמחקה');
define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS','ניהול תוספות');
define('_JOMRES_COM_A_EXTRAS','הצג תוספות בזמן ביצוע הזמנה?');
define('_JOMRES_COM_A_EXTRAS_DESC','הגדר את זה ככן כדי להציג תוספות שברצונך להציע לאורח');
define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP','תוספות לבחירה');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS','תחילת תאריך ספר שחור');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES','תאריך סיום השרות');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS','הזמנות בספר שחור');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR','נוצרה שגיה בניסיון להזמין את החדרים. אחד או יותר חדרים שבחרת כבר הוזמן');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT','חדרים נוספו לרשימה שחורה');
define('_JOMRES_COM_MR_BLACKBOOKINGS_VIEWBLACKBOOKING','ראה רשימה שחורה');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS','אין רישומים ברשימה שחורה');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS','מספר כוכבים');
define('_JOMRES_COM_A_SMOKING','הצג אפשרות עישון?');
define('_JOMRES_COM_A_SMOKING_DESC','הגדר את זה ככן אם ברצונך לשאול שאלת העישון');
define('_JOMRES_COM_A_RESET','איפוס');
define('_JOMRES_COM_A_PAYPAL_CANCELLED','הזמנה בוטלה');
define('_JOMRES_FRONT_MR_SEARCH_HERE','חפש את ה:');
define('_JOMRES_COM_A_SMOKING_OPTION','ברירת מחדל לעישון');
define('_JOMRES_COM_A_CURRENCYSYMBOL','סימן מטבע');
define('_JOMRES_COM_A_CURRENCYSYMBOL_DESC','כגון &amp;pound&#59; אנא שים לב שאתה צריך להשתמש ב-חחחחח לקוד של הסמל');
define('_JOMRES_COM_A_CURRENCYCODE','קוד הסמל');
define('_JOMRES_COM_A_CURRENCYCODE_DESC','זה ישמש באמייל ללקוח, כדי לאשר את הזמנתם');
define('_JOMRES_COM_A_CLICKFORMOREINFORMATION','הקלק למידע נוסף');
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO','להגביל הזמנות מראש?');
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC','הגדר את זה ככן אם ברצונך להגביל  את המשתמש בהזמנות לעתיד של N ימים. אם הוא ינסה לחרוג, התוכנה תחזיר אותו לתאריך של היום');
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS','ימי הגבלה להזמנה מראש');
define('_JOMRES_COM_A_TAX_WARNING','<font color=red>הערה: לא מומלץ שתגדיר את שתי הבחירות הבאות לכן, עליך להשתמש רק בצורת מיסוי אחת מהשניים </FONT>');
define('_JOMRES_COM_FRONT_ROOMTAX','מיסוי');
define('_JOMRES_COM_A_ROOMTAX','מיסוי חדר');
define('_JOMRES_COM_A_ROOMTAX_DESC','מעוצב לשוק האמריקאי. מיסי חדר אלו יחיבו את האורח. באפשרותך לחייב אחוזי מס שונים. שים לב - המס הוא עבור חדר בודד');
define('_JOMRES_COM_A_ROOMTAX_FIXED','מיסוי בסכום קבוע');
define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE','מיסוי באחוזים');
define('_JOMRES_COM_A_EUROTAX','Tax');
define('_JOMRES_COM_A_EUROTAX_PERCENTAGE','אחוזי מס');
define('_JOMRES_MR_AUDIT_ARCHIVE','העבר את הכל לארכיון');
define('_JOMRES_MR_AUDIT_ARCHIVED_MESSAGE',' רשימות הועברו לארכיון');
define('_JOMRES_MR_AUDIT_ARCHIVED_AUDIT','רשימות מבקר הועברו לארכיון');
define('_JOMRES_FRONT_TARIFFS','תעריפים שלנו');
define('_JOMRES_FRONT_TARIFFS_TITLE','שם תעריף');
define('_JOMRES_FRONT_TARIFFS_DESC','תאור תעריף');
define('_JOMRES_FRONT_TARIFFS_ROOMTYPE','סוג חדר');
define('_JOMRES_FRONT_TARIFFS_STARTS','טופס תקף');
define('_JOMRES_FRONT_TARIFFS_ENDS','בתוקף עד ');
define('_JOMRES_FRONT_TARIFFS_PPPN','לאדם ללילה');
define('_JOMRES_FRONT_TARIFFS_PN','ללילה');
define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND','ללא כולל סופי שבוע');
define('_JOMRES_FRONT_TARIFFS_MINDAYS','מינימום ימים');
define('_JOMRES_FRONT_TARIFFS_MAXDAYS','מקסימום ימים');
define('_JOMRES_FRONT_TARIFFS_MINPEEPS','מינימום אנשים');
define('_JOMRES_FRONT_TARIFFS_MAXPEEPS','מקסימום אנשים');
define('_JOMRES_FRONT_PREVIEW','תצוגה מקדימה');
define('_JOMRES_COM_A_EDITINGMODEON','לאפשר עריכה?');
define('_JOMRES_COM_A_EDITING_CURRENTTEXT','טקסט נוכחי');
define('_JOMRES_COM_A_EDITING_NEWTEXT','טקסט חדש');
define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT','טקסט אישי עודכן');
define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE','עריכת שפה');
define('_JOMRES_COM_A_AUDITING_SHOWING','מספר רשימות שהוצאו מארכיון');
define('_JOMRES_FRONT_PTYPE','סוג נכס');
define('_JOMRES_COM_PTYPES_LIST_TITLE','הצג סוגי נכס');
define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT','ערוך סוג נכס');
define('_JOMRES_COM_PTYPES_PTYPE','סוג נכס');
define('_JOMRES_COM_PTYPES_PTYPE_DESC','תאור סוג נכס');
define('_JOMRES_COM_PTYPES_SAVED','סוג נכס נשמר');
define('_JOMRES_COM_PTYPES_UNABLETO_DELETE','אי אפשר למחוק את סוג נכס כי קיימים נכסים מסוג זה. אנא שנה את סוגם ואז תנסה למחוק את הסוג');
define('_JOMRES_COM_PTYPES_DELETED','סוג נכס נמחק');
define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY','תזכורת לתשלום');
define('_JOMRES_EXTRAS_NOEXTRAS','אין שרותים נוספים לחיוב');
define('_JOMRES_COM_CHARGING_DEPOSIT','הפקדה');
define('_JOMRES_COM_CHARGING_FULLAMT','סכום מלא');
define('_JOMRES_COM_CHARGING_CONFIG','סכום שחויב בזמן ביצוע הנמנה');
define('_JOMRES_COM_CHARGING_CONFIG_DESC','התשמש באופציה זאת, אם החלטת לחייב את החשבון בזמן ביצוע הזמנה. בחר אם ברצונך לחייב סכום חלקי או מלא');
define('_JOMRES_COM_MONTHSTOSHOW','חודשים להצגה');
define('_JOMRES_COM_MONTHSTOSHOW_DESC','כמה חודשים ברצונך להציג בלוח זמינות החדר?');
define('_JOMRES_INVOICE_SIGNEDONBEHALFOF','חתום בשם: ');
// V1.4
define('_JOMRES_COM_A_GATEWAYLIST','מעברים');
define('_JOMRES_COM_A_CANCEL','ביטול');
define('_JOMRES_FRONT_BLACKBOOKING_DESC','אנא בחר חדר שברצונך להוציא מהשימוש ותאריכים השורים<br>אם החדר לא מסומן, הוא לא יכלל ברשימת חדרים להזמנה, עד שתאריכים לא יפוגו<br>כשבחרת תאריכים מתאימים לחץ על הכפתר אישור הכחול כדילשנות את מצב החדר');
define('_JOMRES_JR_NOTLOGGEDIN','<center><b>נראה שהתנתקת מהמערכת, אנא התחסר שנית');
define('_JOMRES_JR_BLACKBOOKING_REASON','סיבה');
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS','השתמש בשערי תשלום?');
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC','הגדר את זה ככן אם ברצונך להשתמש בחיובים מקוונים<b>הערה:</b>זה לא מבטל את חישובי ההפקדות בזמן תהליך ההזמנה. כדי לבטל את האופצייה הזאת, אנא ערוך את הטמפלייט שמתייחס להפקדות בהזמנה');
define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE','אנא בחר צורת תשלום');
define('_JOMRES_COM_A_GATEWAY_ENABLED','לאפשרי שערי תשלום');
define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE','הגדרות פלגין מעודכנות');
define('_JOMRES_MR_AUDIT_PLUGINS_INSERT','הגדרות פלגים משובצות');
define('_JOMRES_FRONT_GALLERYLINK','View this property\'s website');
define('_JOMRES_COM_A_GALLERYLINK','External link');
define('_JOMRES_COM_A_GALLERYLINK_DESC','Put a link to your website here.');
define('_JOMRES_MR_AUDIT_CREDITCARD_VIEWED','כרטיס אשראי נצפה');
define('_JOMRES_MR_AUDIT_CREDITCARD_UPDATED','כרטיס אשראי עודכן');
define('_JOMRES_MR_CREDITCARD_EDIT','ערוך כרטיס אשראי');
define('_JOMRES_COM_A_EDITICON','ערוך גודל אייקון');
define('_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD','אוסף תמונות הנכס נשמר');
define('_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR','תמונות כבר בתיקיה');
define('_JOMRES_COM_A_SLIDESHOWS','מצגת');
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK','הצג קישור למצגת?');
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE','הראה מצגת בדף?');
define('_JOMRES_COM_A_SLIDESHOW_THUMBSIZE','גובה יעד של מצגת ממוזרת');
define('_JOMRES_FRONT_SLIDESHOW','מצגת תמונות');
define('_JOMRES_COM_A_SLIDESHOWS_NOIMAGES','<br />מצטערים, אין תמונות של הנכס כרגע. אנא העלה כמה תמונות לאתר');
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK','הצג קישור לתעריפים');
define('_JOMRES_COM_A_POPUPSALLOWED','לאפשר חלונות קופצים?');
define('_JOMRES_COM_A_POPUPSALLOWED_DESC','אם מוגדר לא - הקישורים יפתחו באותה שורה.  עדיין ניסיוני ');
define('_JOMRES_FRONT_IMAGEUPLOADS','עלאת תמונות למצגת');
define('_JOMRES_FRONT_IMAGEUPLOADS_INFO','
השתמש בטופס זה כדי לעלות תמונות מרובות של הנכס<br/><b>הערה</b> כל תמונה עם שם זהה תוחלף בתמונה חדשה<br/><b>Note</b> כל התמונות ישמרו ל: /images/stories/jomres/*property_uid*');
define('_JOMRES_A_TABS_MISC','שונות');
define('_JOMRES_A','תצורת האתר');
define('_JOMRES_A_GLOBALPFEATURES','השתמשמ במאפיינים גלובליים');
define('_JOMRES_A_GLOBALPFEATURES_DESC','הגדר ככן אם ברצונך שכל הנכסים ישתמשו באותם מאפיינים');
define('_JOMRES_A_GLOBALPFEATURES_INFO','כדי להקצות תמונה למאפיין הזה, יש קודם לעלות תמונת נכס ל-/images/stories/jomres/pfeatures/');
define('_JOMRES_A_ICON','אייקון');
define('_JOMRES_A_GLOBAL_SEARCHOPTION','בחר פלגין חיפוש שברצונך להשתמש');
define('_JOMRES_FRONT_NORESULTS','<b>מצטערים, החיפוש לא החזיר תוצאות, אנא נסה שנית</b>');
define('_JOMRES_AREYOUSURE','אתה בטוח רוצה לעשות את זה?');
define('_JOMRES_FRONT_MR_MENU_BOOKAROOM','הזמן חדר');
define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY','הזמן את הנכס');
define('_JOMRES_COM_MR_DISPGUEST_CCV','מספר בטחון');
//v1.4c
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE','הצג תעריפים בשורה?');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS','כתובת');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS','מידע מפורט');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS','לחץ לבדיקת זמינות חדרים');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS','הצג מידע על תעריפים');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE','הצג כתובת מתחת לקישור זה');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE','הצג מידע אודות נכס מתחת לקישור זה');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE','הצג חדרים וזמינות מתחת לקישור זה');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE','הצג פרטי תעריף מתחת לקישור זה');
define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF','תעריפים קבועים');
define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES','ממוצע');
define('_JOMRES_COM_A_TARIFFS_MODEL','בחר סוג תעריף שברצונך להשתמש בו');
define('_JOMRES_COM_A_TARIFFS_MODEL_DESC','באפשרותך לבחור אחד משני צורת חישוב. ראשון היא - תעריף קבוע, המאפשרת להציע מספר תעריפים לאורח ועלות השהייה זהה כל הזמן. זה שימושי אם ברצונך להציע  תעריפים שונים לאותו יום. לדוגמא תעריף BB ותעריף HB. בחר ב"ממוצע" כדי לעדכן מחירים לאותו יום. ותוכנה תיקח את כל התעריפים ותחשב את הממוצע לתקופה מסוימת');
// v1.4e
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT','הצג קלט תאריל עזיבה');
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC',"ההגדר כ-לא אם אתה לא אינך מעוניין להציג תאריך עזיבה כתיבת קלט. התמש בזה אך ורק אם אתה יודע מה לעשות, כי תאריך עזיבה תמיד יהיה יום לאחר ההגעה ");
// v1.4f
define('_JOMRES_COM_PROPERTYLISTDESC','הגבלת תאור');
define('_JOMRES_COM_PROPERTYLISTDESC_DESC',"זה מגביל את כמות התווים המוצגים בדף כש תאור הנכס מוצג.");
// v1.4g+
define('_JOMRES_COM_A_DATEFORMATSTYLE','לשנות צורת תאריך משומש?');
define('_JOMRES_COM_A_DATEFORMATSTYLE_DESC','הגדר כ-כן אם ברצונך להציג תאריכים בפורמט  date()  (ראה <a href="http://www.php.net/manual/en/function.date.php">פו</a>). הגדר כ-לא כדי להשתמש ספורמט strftime() (ראה <a href="http://www.php.net/manual/en/function.strftime.php">כן</a> eg. %b %d %Y ');
define('_JOMRES_COM_MR_VRCT_PUBLISH','לחץ כדי לפרסם באתר');
define('_JOMRES_COM_MR_VRCT_UNPUBLISH','לחץ כדי להוריד מהאתר');
define('_JOMRES_A_GLOBALROOMTYPES','השתמש בסוג חדר גלובלי');
define('_JOMRES_A_GLOBALROOMTYPES_DESC','הגדר כ-כן אם ברצונך שכל החדרים יהיו מאותו סוג, מודר מראש');
define('_JOMRES_A_GLOBALROOMTYPES_INFO','כדי להקצות תמונה לסוג חדר זה, קודם צריך לעלות התמונות של סג חדר ל-/images/stories/jomres/rmtypes/ ');
define('_JOMRES_COM_INPUTERROR_BACKGROUND','הכנס צבע רקע לשגיה');
define('_JOMRES_COM_CONFIGCOUNTRIES','מדינה ברירת מחדל בטופס הזמנה');
define('_JOMRES_JAVASCRIPT_','פריטים מסומנים באדום הינם פריטי חובה');
define('_JOMRES_COM_SELFREGISTRATION','משתמשים יכולים להוסיף נכסים?');
define('_JOMRES_COM_SELFREGISTRATION_DESC','הגדר כ-כן אם ברצונך לאפשר להוסיף נכסים משלהם בלי אישור מנהל אתר');
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1','אנא הכנס מדינה ואזור של הנכס שלך');
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1','אנא השלם את פירטי הנכס שלך');
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2','פריטים מסומנים באדום הינם פריטי חובה');
define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY','נכס נוצר');
define('_JOMRES_REGISTRATION_NOTALLOWED',"מצטערים. אין באפשרותך להוסיף נכסים למערכת. הינך צריך להיות רשום כמשתמש מורשה ולא בעל נכס שכבר במערכת");
define('_JOMRES_REGISTRATION_CREATEDPROPERTY','Cנכס שנוצר: ');
define('_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER','עבור משתמש: ');
// v1.4i
define('_JOMRES_COM_MONTHS_STARTOFYEAR','הצג לוח שנה מתחילת השנה?');
define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC','לוח זמינות מוצג מתחילת השנה הנוכחית');
define('_JOMRES_NUMBEROFROOMSAVAILABLE','מספר חדרים פנויים');
define('_JOMRES_BACKTOPROPERTYDETAILSLINK','חזרה לפרטי הנכס');
define('_JOMRES_FRONT_ROOMTYPES','סוגי חדרים');
define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT','גבול חיפוש רנדומלי');
define('_JOMRES_SHOWGOOGLECURRENCYLINKS','הצג קישור לגוגל-מטבעות בדף תעריפים?');
define('_JOMRES_CURRENCYCONVERSIONTEXT','להמיר ל-');
define('_JOMRES_COM_ALLOWHTMLEDITOR','לאשר למשתמשים לעבוד עם עורך HTML');
// v2
define('_JOMRES_AJAXFORM_INSTRUCTIONS','השתמש בטופס זה, כדי לרשום את הזמנתך. העבר סמן מעל "I" למידע נוסף אודות העמודה. עדכן את הזמנתך, שנה זמני הגעה או עזיבה ומספר אורחים. לאחר מכן - בחר חדר מרשימת חדרים פנויים, והזמן. לבסוף תדרש להכניס מידע אישי על עצמך, כדי לקבל את ההזמנה באימייל ולאשרה');
define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP','השתמש בטופס זה, כדי לרשום את הזמנתך. העבר סמן מעל "I" למידע נופס אודות העמודה. עדכן את הזמנתך, שנה זמני הגעה או עזיבה ומספר אוחים. לאחר מכן - בחר חדר מרשימת חדרים פנויים, והזמן. לבסוף תדרש להכניס מידע אישי על צמך, כדי לקבל את ההזנהבאימייל ולאשרץ');
define('_JOMRES_AJAXFORM_PARTICULARS','פירוט הזמנה');
define('_JOMRES_AJAXFORM_PARTICULARS_DESC','בחר פרטים נדרשים להזמנתך');
define('_JOMRES_AJAXFORM_AVAILABLE','זמינות ');
define('_JOMRES_AJAXFORM_AVAILABLE_DESC','בחר את החדרים שאתה רוצה');
define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP','בדוק פו, כדי לראות עם הנכס פנוי כרגע להזמנות');
define('_JOMRES_AJAXFORM_EXTRAS','תוספות לבחירה');
define('_JOMRES_AJAXFORM_EXTRAS_DESC','בחר כל תוספת שברצונך לכלול בהזמנה');
define('_JOMRES_COM_PERDAY','ללילה');
define('_JOMRES_AJAXFORM_ADDRESS','כתובתך');
define('_JOMRES_AJAXFORM_ADDRESS_DESC','אנא הכנס את פרטיך. כל השדות חובה חוץ ממספר טלפון נייד');
define('_JOMRES_AJAXFORM_AVAILABLEROOMS','חדרים פנויים');
define('_JOMRES_AJAXFORM_SELECTEDROOMS','בחר חדרים');
define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE','<br>תאריך הגעה הכי מוקדם הוא: ');
define('_JOMRES_AJAXFORM_BILLING_ROOM','ללילה:');
define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL','סה"כ:');
define('_JOMRES_AJAXFORM_BILLING_EXTRAS','תוספות:');
define('_JOMRES_AJAXFORM_BILLING_TAX','מיסוי:');
define('_JOMRES_AJAXFORM_BILLING_DISCOUNT','הנחה:');
define('_JOMRES_AJAXFORM_BILLING_TOTAL','סה"כ כללי');
define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY','אורחים');
define('_JOMRES_AJAXFORM_CLICKHERECAPTION','הקלק כעת כדי להוסיף את החדר לבחירה');
define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE','הקלק כעת כדי להסיר את החדר לבחירה');
define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES','סוגי אורחים');
define('_JOMRES_VARIANCES_TYPE','סוג');
define('_JOMRES_VARIANCES_TYPE_TT','סוג האורח כגון: תינוק, ילד או סטודנט');
define('_JOMRES_VARIANCES_NOTES','הערות');
define('_JOMRES_VARIANCES_NOTES_TT','הערות שברצונך להוסיף לסוג אורח זה');
define('_JOMRES_VARIANCES_MAXIMUM','מקסימום');
define('_JOMRES_VARIANCES_MAXIMUM_TT','המספר המירבי של סוג אורח זה שיכול להופיע בטופס הזמנה');
define('_JOMRES_VARIANCES_ISPERCENTAGE','הוא אחוז');
define('_JOMRES_VARIANCES_ISPERCENTAGE_TT','המספר המחושב הוא אחוז ממחיר בסיסי של החדר, אם מוגדר כלא -  המספר שתכניס פשוט  יחובר או יחוסר ממחיר הבסיסי');
define('_JOMRES_VARIANCES_POSNEG','להוסיף משתנה?');
define('_JOMRES_VARIANCES_POSNEG_TT','המספר המחושב מחובר או יחוסר ממחיר הבסיסי של החדר הגדר כלא אם ברצונך שהנחה הזאת תהיה מספר קבוע ');
define('_JOMRES_VARIANCES_VARIANCE','משתנה');
define('_JOMRES_VARIANCES_VARIANCE_TT','זהו גודל המשתנה');
define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE','עודכן סדר סוגי האורח');
define('_JOMRES_MR_AUDIT_PUBLISH_CUSTOMERTYPE','פורסם סוג אורחים');
define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE','נמחק סוג אורחים');
define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE','נוצר סוג אורחים');
define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE','עודכן סוג אורחים');
define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED','עודכן סוג אורחים');
define('_JOMRES_COM_A_SHOWROOMSLISTLINK','הצג קישור לרשימת חדרים בדף פרטי הנכס?');
define('_JOMRES_COM_A_SHOWONLYAVLCAL','הצג <b>רק</b> לוח זמינות/רשימת חדרים?');
define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC','הגדר את זה ככן אם ברצונך להציג דף של הנכס בצורה כזאת, שחדרי הנכס יופיעו באותו דף. זה באמת מיועד לנכסים בעלי חדר אחד. כגון בעלי דירות ויחידות נופש');
define('_JOMRES_COM_A_MINIMUMINTERVAL','המרווח המינימלי בין הגעה לעזיבה');
define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC','מרווח מנימלי בהזמנות בין יום ההגעה ליום העזיבה');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO','הצג מספר חדר בטופס הזמנה');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME','הצג שמות חדר בטופס הזמנה');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE','הצג כותרת תעריף בטופס הזמנה');
define('_JOMRES_ORDER','סדר');
define('_JOMRES_REQUIREDFIELDS','נדרש');
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING','ימים לפני הגעה');
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC','מספר מינימלי של ימים שאמורים לחלוף מיום לפני תאריך הגעה');
define('_JOMRES_DTV','ווריאציות סוגי תאריך');
define('_JOMRES_DTV_DOW','יום השבוע');
define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE','ברירת מחדל לסוג אורח');
define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC','מספר ברירת מחדל לסוג אורח ראשון. אם הינך משתמש בסוגי אורחים, זהו יהיה מספר אורחים שיופיע אוטומטית בהזמנה');
define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK','הזמנות פתוחות רק למשתמשים רשומים?');
define('_JOMRES_REGISTEREDUSERSONLYBOOK','מצטעריםת עלך להיות משתמש מורשה, כדי לבצע הזמנות באתר. לחץ כאן כדי להרשם ');
define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT','צבע הקישור להזמנות נוכחיות');
define('_JOMRES_COM_AVLCAL_WEEKENDBORDER','גבולות של סופי שבוע');
define('_JOMRES_COM_AVLCAL_BOOKING_KEY','חדר מוזמן');
define('_JOMRES_COM_AVLCAL_BLACK_KEY','הזמנות ספר שחור');
define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP','לעגל סכום הפקדה למספר שלם?');
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT','לחייב הפקדות?');
define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY','לשמור חיובי תעריפים כמספרים שבועיים');
define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC','יש לך לשמור חיובים כמספרים שבועיים או כמספרים יומיים. אם תרצה לראות תוצאות שבועייות - הגדר את זה כ-כן');
define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK','מחיר לשבוע');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING','תאריכי הגעה קבועים?');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC','אם בחרת לאופציה של תאריכי הגעה קבועים, תאריכם יוצגו בתיבת בחירה');
define('_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID','חסרה בחירת עישון');
define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID','תאריך הגעה לא תיקני');
define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID','תאריך עזיבה לא תיקני');
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1','ההזמנה יותר מדי קצרה, בין ההגעה לעזיבה אמורים להיות לפחות מספר זה של ימים: ');
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2','תאריך הגעתך הוא');
define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT','בחירת סוג אורח שגויה');
define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS','אנא בחר את סוג האורח');
define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS','יש לך יותר מדי משתתפים לתעריף הזמין');
define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS','בחרת יותר חדרים מאשר מספר האורחים, לחץ על מספר החדר כדי להוריד אותו מהרשימה');
define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS','יותר מדי אורחים למיטות הפנויות');
define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS','אתה צריך לבחור יותר חדרים');
define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM','בחר חדר');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME','שם פרטי הינו שדה חובה');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME','שם משפחה הינו שדה חובה');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO','מספר בית הינו שדה חובה');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET','רחוב הינו שדה חובה');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN','עיר הינו שדה חובה');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION','איזור הינו שדה חובה');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE','מיקוד הינו שדה חובה');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY','מדינה הינו שדה חובה');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE','טלפון הינו שדה חובה');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE','טלפון נייד הינו שדה חובה');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL','אימייל הינו שדה חובה');
define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_INVALID','אימייל שהקלדת הינו חוקי');
define('_JOMRES_BOOKINGFORM_MONITORING_CANNOT_VALIDATE_EMAIL','אין אפשרות לבדוק דומיין של האימייל');
define('_JOMRES_SRP_WEHAVEVACANCIES','יש חדרים פנויים!');
define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET','לא נבחר אף חדר');
define('_JOMRES_BOOKING_NUMBER','מספר הזמנה');
define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND','אפשר להזמין, רקע הודעת טקסט');
define('_JOMRES_COM_DUMPTEMPLATEDATA','לרוקן משתנים בטמפלייטים');
define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC','הגדר כן, כדי לאפשר את ה-DHTML לשפוך משתנים לכל גגג טמפלייטץ שימושי אם ברצונך אלמנטים מסויימים שיופיעו בטמפלייטים מסוימים');
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE','מספר באחוזים');
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC','הגדר ככן אם חישוב ליחיד מבוצע באחוזים, הגדר כ-לא אם זה יהיה מספר קבוע');
//v2rc2
define('_JOMRES_COM_LIMITROOMSLIST','הגבלת זמינות חדרים/תעריפים');
define('_JOMRES_COM_LIMITROOMSLIST_DESC','השתמש בקלט זה כדי להגביל את מספרים חדרים הפנויים ותעריפים שרשומים בטופס הזמנה. הגדר כ-0 אם אינך מעוניין בהגבלה ');
define('_JOMRES_SRP_WEHAVENOVACANCIES','כרגע אין חדרים פנויים');
// Introduced in v2.5
// v2.6
define('_JOMRES_BOOKITNOW','הזמן עכשיו: ');
define('_JOMRES_COM_JRCONFIG_GLOBALEDITING','מצב עריכה גלובלי?');
define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC','טפל בפונקציה הזאת. אם תגדיר כן, אז השינויים שתבצע ישפיעו על כל הנכסים/חדרים במערכת');
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO','השתמש במטבע גלובלי?');
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC','אם מוגדר כן, כל הנכסים ישתמשו באותה מטבע');
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY','סימן מטבע גלובלי');
define('_JOMRES_COM_JRCONFIG_ISWRAPPED','להסתיר את המרכיב?');
define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC','אם מוגדר כן, הראש של המודל לא תוצג בדף');
define('_JOMRES_COM_USERIS_SUPERPROPERTYMANAGER','מנהל נכס ראשי');
define('_JOMRES_COM_WEEKENDONLY','ימי שבוע בלבד');
define('_JOMRES_COM_WEEKENDDAYS','ימי סופשבוע');
define('_JOMRES_COM_WEEKENDDAYS_DESC','בחר את ימי סופהשבוע שלך. תעריפים המאפשרים, או שאינם מאפשרים, סופי שבוע יקחו זאת בחשבון בזמן יצירת רשימות החדרים');
define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY','בחר את המדינה שלך לפני הוספת נתוני הנכס');
define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD','שמור את השינויים בפרטי הנכס לפני ההעלאת תמונות');
define('_JOMRES_TARIFFSFROM','מחירים מ - ');
define('_JOMRES_SEARCH_ALL','הכל');
define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH','חפש לפי מדינה');
define('_JOMRES_SEARCH_GEO_REGIONSEARCH','חפש לפי אזור');
define('_JOMRES_SEARCH_GEO_TOWNSEARCH','חפש לפי מקום ישוב');
define('_JOMRES_SEARCH_FEATURE_INFO','חפוש תכונות.');
define('_JOMRES_SEARCH_BUTTON','חפש');
define('_JOMRES_SEARCH_DESCRIPTION_INFO','הזן מילת חיפוש בקופסה ולחץ על הכפתור');
define('_JOMRES_SEARCH_DESCRIPTION_LABEL','מלה (מלות) חיפוש :');
define('_JOMRES_SEARCH_AVL_INFO','הזן בבקשה את מועדי ההגעה והעזיבה המתוכננים שלך ולחץ על הכפתור על מנת לאתר נכסים זמינים בתאריכים הנבחרים');
define('_JOMRES_SEARCH_PTYPES','הצג את רשימת כל הנכסים ממוינים לפי סוג נכס');
define('_JOMRES_SEARCH_RTYPES','הצג את רשימת כל הנכסים ממוינים לפי סוג חדר');
define('_JOMRES_SORTORDER_DEFAULT','ברירת מחדל');
define('_JOMRES_SORTORDER_PROPERTYNAME','שם נכס');
define('_JOMRES_SORTORDER_PROPERTYREGION','אזור שבו נמצא הנכס');
define('_JOMRES_SORTORDER_PROPERTYTOWN','מקום ישוב שבו נמצא הנכס');
define('_JOMRES_SORTORDER_STARS','התחל');
define('_JOMRES_PATHWAY_PROPERTYLIST','רשימת נכסים');
define('_JOMRES_PATHWAY_PROPERTYDETAILS','פרטי נכס');
define('_JOMRES_PATHWAY_BOOKINGFORM','טופס הזמנה');
define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON','עדכן את פרטי הכתובת שלך');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY','בודק מחדש את זמינות החדרים (בחירת החדרים תאופס)');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP','בודק מחדש זמינות');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA','משנה את התוספות האופציונליות');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION','משנה את בחירת החדרים');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS','מעדכן את פרטי הכתובת');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR','מצטער, שדה כתובת אחד או יותר אינם נכונים');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE','תמונת חדר');
define('_JOMRES_CURRENCYFORMAT','מבנה מטבע');
define('_JOMRES_MANAGEROPTIONSASIMAGES','הראה אפשרויות מנהל בתור תמונה');
define('JOMRES_COM_A_SEARCHOPTIONSTAB','אפשרויות חיפוש');
define('JOMRES_COM_A_AVAILABLELOGS','יומני זמינות');
define('JOMRES_COM_A_LOGS_NOENTRIES','אין רשומות ביומן. זהו מצב נורמלי, אתה צריך לשנות ידנית את jonres.php על מנת להפעיל רשומות.');
define('JOMRES_COM_A_MESSAGE','הודעה');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3
define('JOMRES_COM_A_TARIFFMODE_NORMAL','רגיל');
define('JOMRES_COM_A_TARIFFMODE_ADVANCED','מתקדם');
define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES','ניהול מיקרו');
define('JOMRES_COM_A_TARIFFMODE','מצב הגדרת מבנה תעריף');
define('JOMRES_COM_A_TARIFFMODE_DESC',"<b>אזהרה: מעבר בין סוגי תעריפים שונים עלול להביא לאיבוד נתונים. ראה את ההערה להלן בהקשר זה</b>.
<br/><br/>
יש לך שלוש אפשרויות להגדרת מבני התעריפים שלך: <br/>
מצב רגיל: יהיה לך תעריף אחד לכל סוג חדר שיהיה בתוקף לעשר השנים הבאות<br/>
ניהול פרטני: אתה יכול לשנות את המחיר לכל יום ויום ולכל סוג חדר/נכס<br/>
מתקדם: השיטה הישנה של ג'ומרס לניהול תעריפים <br/>
<br/>
מבני התעריפים השונים מאפשרים לך לבחור את שיטת הגדרת התעריפים המתאימה לך ביותר.<br/>
מבנה רגיל הוא הפשטני ביותר אך הוא הקל ביותר להבנה מאחר שהוא יעשה הצלבות בין חדרים לתעריפים לבין סוגי חדרים/ נכסים ומאפשר לך להגדיר חדרים ותעריפים באותו עמוד<br/>
ניהול פרטני מאפשר לך לשנות את השערים על בסיס יום יומי בלי שתהיה חייב לנהל מבני תעריפים<br/>
דבר זה נעשה על ידי הצלבת תעריפים רבים ושונים אחד עם השני וכתוצאה מכך נוצרים עבורך מספר תעריפים המכסים תקופת זמן אבל אינך יכול לסדר תעריפים בצורה שכבתית<br/>
מצב מתקדם מאפשר לך ליצור חדר ולשייך אותו לסוג חדר. לאחר מכן אתה יוצר תעריף ומשייך אותו לסוג חדר. שימוש בשיטה זו מאפשר לך לסדר תעריפים בשכבות אחד על השני <br/>
לדוגמא לחדר מסוג מיטה כפולה יכול להיות תעריף אחד ללינה וארוחת בוקר ותעריף אחר ללינה, ארוחת בוקר וארוחת ערב. המצב המתקדם דורש מעט יותר תשומת לב לפרטים מאחר ואפשרי  <br/>
שלא לשייך חדר או תעריף לסוג חדר או נכס, או לקבוע בצורה לא נכונה תאריכי הגעה ועזבה תקפים, אבל נותן לך אפשרויות הגדרה שאינן אפשריות במבני תעריפים אחרים <br/>
<br/>
מאחר ומצב רגיל ומצב ניהול פרטני דורשים סט ספציפי של חדרים ותעריפים על מנת לפעול, המערכת תצטרך לאפס נתונים על מנת שמבנה התעריף העכשווי יהיה תואם <br/>
עם מצב עריכת התעריפים הנוכחי<br/>
<br/>
מצב רגיל למצב מתקדם: אין שינוי התעריפים הנוכחיים נשמרים<br/>
מצב רגיל לניהול פרטני: כל התעריפים הקיימים נמחקים<br/>
מצב מתקדם למצב רגיל: כל התעריפים הקיימים נמחקים<br/>
מצב מתקדם לניהול פרטני: כל התעריפים הקיימים נמחקים<br/>
ניהול פרטני למצב מתקדם: כל ההצלבות הקיימות בין תעריפים נמחקות, אבל התעריפים עצמם נשארים<br/>
ניהול פרטני למצב רגיל: כל ההצלבות הקיימות והתעריפים עצמם נמחקים<br/>");
define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS','הראה רשימת חדרים בדף פרטי הנכס?');
define('JOMRES_PROPERTYTYPE','סוג נכס');
define('JOMRES_COM_A_SRPONLY','נכס בעל חדר אחד בלבד');
define('JOMRES_MAXPEOPLEINROOM','מספר אנשים מקסימלי לחדר');
define('JOMRES_MAXPEOPLEINBOOKING','מס אנשים מקסימלי להזמנה');
define('_JOMCOMP_BOOKINGNOTES_ADD','הוסף הערה');
define('_JOMCOMP_BOOKINGNOTES_EDIT','ערוך הערה');
define('_JOMCOMP_BOOKINGNOTES_DELETE','בטל הערה');
define('_JOMCOMP_BOOKINGNOTES_VIEW','צפה בהערות');
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE','נוספה הערה חדשה');
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT','הערה אחרי עריכה');
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE','הערה מבוטלת');
define('_JOMCOMP_MYUSER_MENUTITLE','האפשרויות שלי');
define('_JOMCOMP_MYUSER_LISTBOOKINGS','הצג רשימת הזמנות');
define('_JOMCOMP_MYUSER_MYBOOKINGS','ההזמנות שלי');
define('_JOMCOMP_MYUSER_VIEWBOOKING','הצג הזמנה');
define('_JOMCOMP_MYUSER_VIEWFAVOURITES','הצג מועדפים');
define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE','לא הוספת עדיין לרשימת המועדפים!');
define('_JOMCOMP_MYUSER_ADDTOFAVOURITES','הוסף למועדפים');
define('_JOMCOMP_MYUSER_PROPERTYTYPE','סוג נכס');
define('_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES','נכסים באתר');
define('_JOMCOMP_WISEPRICE_TITLE','מחיר חכם');
define('_JOMCOMP_WISEPRICE_ACTIVE','פעיל');
define('_JOMCOMP_WISEPRICE_TITLE_DESC','רכיב זה מאפשר לך לנהל ולהגדיר את מחירי החדרים בצורה דינמית');
define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL','רוב העסקים יחשבו מחדש את מחירי החדרים בהתבסס על מספר החדרים מסוג נדרש שהם זמינים ביום נתון. דבר זה מאפשר להם להציע הנחות על סוג חדר שאינו תפוס בתקופה נתונה 
במטרה למשוך עסקאות שאחרת יוחמצו
אפשור והגדרת רכיב זה מאפשר לך להציע מחיר מתואם המבוסס על מספר החדרים מסוג נבחר הזמינים בנכס בתאריך מסויים.
ערך הסף של הימים מגדיר את מספר הימים עד ליום ההגעה לפני שהמחירים מתואמים על ידי תכונה זו,
ואז אופציית האחוזים מאפשרת להגדיר את אחוז החדרים שיכולים להיות זמינים לפני שהנחה מסוימת נתנת.');
define('_JOMCOMP_WISEPRICE_THREASHOLD','מרווח ( מספר הימים מיום ההגעה להיום)');
define('_JOMCOMP_WISEPRICE_PERCENTAGE10','אחוז תפוסה < 10%');
define('_JOMCOMP_WISEPRICE_PERCENTAGE25','אחוז תפוסה < 25%');
define('_JOMCOMP_WISEPRICE_PERCENTAGE50','אחוז תפוסה < 50%');
define('_JOMCOMP_WISEPRICE_PERCENTAGE75','אחוז תפוסה< 75%');
define('_JOMCOMP_WISEPRICE_DISCOUNT','הנחה %');
define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED',' אחרי הנחה מ - ');
define('_JOMCOMP_WISEPRICE_TO',' אל ');
define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED',' מחיר החדר ללא הנחה ');
define('JOMRES_COM_A_MAPSKEY','מפתח למפת גוגל');
define('JOMRES_COM_A_MAPSKEY_DESC','פקודת GET יכולה לקבל ממשק למפת גוגל מהאתר<a href="http://www.google.com/apis/maps/signup.html" target="_blank">Google maps</a>. לאחר שהכנסת את מפתח המפה שלך במקום זה, גומרס יראה את המפה בדף פרטי הנכס שלך');
define('JOMRES_COM_A_USE_SSL','השתמש ב-SSL בטופס ההזמנה?');
define('JOMRES_COM_A_USE_SSL_DESC','עליך להבטיח שברשותך רישוי SSL תקף על מנת ');
define('_JOMCOMP_LASTMINUTE_CPANEL','רגע אחרון');
define('_JOMCOMP_LASTMINUTE_ACTIVE','פעיל?');
define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC','בחר כן אם ברצונך להציע עסקאות רגע אחרון');
define('_JOMCOMP_LASTMINUTE_THREASHOLD','מרווח');
define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC','אם מתבצעת הזמנה ויום ההגעה הו רק X ימים מיום ההזמנה, אפשר לתת את ההנחה');
define('_JOMCOMP_LASTMINUTE_DISCOUNT','הנחה');
define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC','באחוזים');
define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1','הנחה נתנה בהזמנה זו!');
define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2','מחיר השהייה הופחת ב ');
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE','נכס זה מציע הנחת רגע אחרון של ');
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID',' אחוזים אם תתבצע הזמנה להגעה לפני');
define('_JOMCOMP_LASTMINUTE_ORMORE',' אחוזים או יותר אם תתבצע הזמנה להגעה לפני ');
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST','. הזמן כעת על מנת להפיק את המקסימום מעסקה זו');
define('JOMRES_COM_A_VERBOSETARIFFINTO','מידע תעריף מילולי');
define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC','בחר כן על מנת להציג מידע עריפי מפורט בחלון קופץ פרטי הנכס/ תעריף');
define('JOMRES_COM_A_MINIMALCONFIG','צמצם אפשרויות תצורה');
define('_JOMCOMP_AMEND','הזמנה - בחירת נכס');
define('_JOMCOMP_AMEND_SELECTPROPERTY','בחר נכס חדש');
define('_JOMCOMP_AMEND_HEADER','חוזה מקורי');
define('_JOMCOMP_AMEND_DEPOSITPAID','מקדמה שולמה');
define('_JOMCOMP_AMEND_DEPOSITDUE','מקדמה לא שולמה');
define('_JOMCOMP_AMEND_OVERRIDE_TOTAL','הכתב סכום כללי');
define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT','הכתב אחוז הנחה');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5
define('_JRPORTAL_CANCEL','בטל');
define('_JRPORTAL_CPANEL','פנל בקרה פורטל הזמנות');
define('_JRPORTAL_CONFIG_DEFAULT_CRATE','דמי ניהול בסיסיים');
define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC','בחר את שיעור דמי הניהול הבסיסיים שיושמו לנכס במקרה ושיעור אחר לא נקבע במפורש');
define('_JRPORTAL_CPANEL_LISTCRATES','הצג רשימת תעריפי ניהול');
define('_JRPORTAL_CPANEL_PATETITLE','תעריפי ניהול');
define('_JRPORTAL_CRATE_TITLE','כותרת');
define('_JRPORTAL_CRATE_TYPE','סוג');
define('_JRPORTAL_CRATE_VALUE','שעור דמי ניהול');
define('_JRPORTAL_CRATE_CURRENCYCODE','קוד מטבע');
define('_JRPORTAL_CPANEL_LISTPROPERTIES','הצג  נכסים');
define('_JRPORTAL_PROPERTIES_PROPERTYNAME','שם נכס');
define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS','כתובת נכס');
define('_JRPORTAL_PROPERTIES_LEGEND','לנכסים שצבע הרקע שלהם אדום עדיין לא נקבע שיעור דמי ניהול');
define('_JRPORTAL_STATS_PATETITLE','סטטיסטיקות');
define('_JRPORTAL_STATS_STATTYPE','סטיסטיקות עבור: ');
define('_JRPORTAL_STATS_STATTYPE_PROPERTIES','נכסים - הקלקות');
define('_JRPORTAL_PROPERTIES_VIEWPROPERTY','הצג נכס');
define('_JRPORTAL_PROPERTIES_NUMBEROFBOOKINGS','מס הזמנות');
define('_JRPORTAL_PROPERTIES_VALUEOFBOOKINGS','ערך הזמנות');
define('_JRPORTAL_PROPERTIES_COMMISSIONESTIMATE','הערכת דמי ניהול');
define('_JRPORTAL_PROPERTIES_COMMISSIONRATE','שיעור דמי ניהול');
define('_JRPORTAL_CPANEL_LISTBOOKINGS','הצג הזמנות');
define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID','זיהוי נכס');
define('_JRPORTAL_LISTBOOKINGS_HEADER_GUEST_ID','זיהוי לקוח');
define('_JRPORTAL_LISTBOOKINGS_HEADER_AFFILIATE_ID','זיהוי בעלים');
define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID','זיהוי חשבונית');
define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL','סך כל הזמנה');
define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_ID','זיהוי איש קשר');
define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_NUMBER','מס איש קשר');
define('_JRPORTAL_LISTBOOKINGS_HEADER_CURRENCYCODE','קוד מטבע');
define('_JRPORTAL_LISTBOOKINGS_HEADER_CREATED','נוצר');
define('_JRPORTAL_LISTBOOKINGS_HEADER_ARCHIVED','נשמר בארכיון');
define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED','תאריך שמירה בארכיון');
define('_JRPORTAL_CPANEL_ADD_ADHOC_ITEM','הוסף פריט לחשבון');
define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEMANAGER','על המנהל להוציא חשבונית');
define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEPROPERTY','נכסים מקושרים (אם ישים)');
define('_JRPORTAL_ADD_ADHOC_ITEM_VALUE','ערך');
define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION','תאור');
define('_JRPORTAL_ADD_ADHOC_ITEM_SUCCESS',"פריט תמחור הוסף בהצלחה ל -  ");
define('_JRPORTAL_ADD_ADHOC_ITEM_VIEWNBILLORDERS',"הצג הזמנות");
define('_JRPORTAL_ADD_ADHOC_ITEM_FAILURE',"נכשל בהוספת פריט תמחור");
define('_JRPORTAL_ADD_ADHOC_ITEM_NOVALUE',"שגיאה, לא קבעת ערך לחשבון");
define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER','ביכולתך ליצור קובצי שפת סוג נכס ספציפיים על ידי קביעת התיאור לשם של תת מחיצה, לדוגמא ניהול יכטות והעתקת קובץ שפה לתת מחיצה זו. 
באפשרותך לשנות את קובץ השפה לסוג נכס זה כך שחדרים הופכים , לדוגמא, לקלטות וידאו או כל מוצר שניתן להשכירו');
define('_JOMRES_EDITPROPERTY_CONNOTDELETE1','אינך יכול לבטל נכס זה מאחר וזה הנכס היחיד שיש לך גישה אליו. אם ברצונך למנוע גישה לנכס זה, השתמש בבחירה לא לפרסום בסרגל הכלים שלך ');
define('_JOMRES_EDITPROPERTY_CONNOTDELETE2','אם זו התקנה לדוגמא ובכוונתך להתקדם לגומרס סולו - הגבלה לנכס אחד בלבד - אתה צריך ליצור נכס חדש תחילה ואז לבטל את הנכס הנוכחי לפני שינוי מפתח הרשיון למפתח רשיון סולו
שתקבל בזמן הרכישה');
define('_JOMRES_COM_EMAILERRORS',"שלח בדואל הודעות מרשם שגיאות");
define('_JOMRES_COM_EMAILERRORS_DESC',"קבע זאת ל-כן אם ברצונך שJOMRES.NET יועתק אוטומטית כאשר נוצרת הודעת מרשם שגיאות.
זה מאפשר לנו לפעול בגישת מניעה מראש לטיפול בבעיות פוטנציאליות, בתקווה לפתור בעיות לפני שאתה מודע להן כלל. שים לב שתכונה זו אינה מאופשרת על שרת מקומי");
define('_JOMRES_COM_ISTHISANMRP',"האם נכס זה הוא מלון-לינה וארוחת בוקר-מקום ארוח-פנסיון?");
define('_JOMRES_COM_ISTHISANMRP_DESC',"אפשרויות הגדרה משתנות אם אתה משכיר חדרים בנכס או את הנכס עצמו. בחר כן אם אתה מציע חדרים. בחר לא אם אתה מציע את הנכס כולו ");
// Jomres v3.0.6
define('_JOMRES_COM_JOMRESEMAILCHECK',"השתמש בבודק כתובת דואל של גומרס? ");
define('_JOMRES_COM_JOMRESEMAILCHECK_DESC',"הפעל בדיקה מדוקדקת על דואל שנשלח. כמה שרתי רשת מאובטחים יזרקו שגיאה פנימית 500 אם אתה מנסה לשלוח דואל לכתובת לא קיימת.
הפעלת תכונה זו מאפשרת לנו להשתמש בתכונות CHECKDNSRR של PHP לפני שמנסים לשלוח דואל ולמנוע שגיאות 500 אלו");
// Jomres v3.1
define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL',"סך הכל אירוח");
define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS',"לילה - לילות ב");
define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM',"לכל חדר ");
define('_JOMRES_AJAXFORM_EXTRAS_TOTAL',"שדרג את סך כל השהייה שלך ");
define('_JOMRES_AJAXFORM_PRICE_SUMMARY',"סיכום מחירים");
define('_JOMRES_CONFIRMATION_ALERT',"בבקשה קרא והסכם ל- ");
define('_JOMRES_CONFIRMATION_HEADER',"סכום ההזמנה שלך מוצג להלן<br /> על מנת לעשות שינוי כלשהוא, בבקשה לחץ על כפתור שינוי הזמנה");
define('_JOMRES_CONFIRMATION_AMENDTEXT',"אם יש צורך בשינוי המידע שלמעלה בבקשה לחץ כאן");
define('_JOMRES_CONFIRMATION_AMEND',"עדכן הזמנה");
define('_JOMRES_CONFIRMATION_SPECIALS',"בבקשה ציין בקשות מיוחדות בחלון שלמטה");
define('_JOMRES_CONFIRMATION_TERMS_PRETEXT',"אני מאשר שהמידע למעלה הוא נכון ןמסכים ל-");
define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON',"per person per night ");
// Jomres 3.1.10
define('_JOMRES_COM_A_SITELANGUAGE_FILE',"Default language file");
define('_JOMRES_COM_A_SITELANGUAGE_FILE_DESC',"Choose the default language file that Jomres should use if the language hasn't been set by Joomfish.");
// Jomres 3.1.11
// Jomres 3.1.13
if (!defined('_PN_OF'))
	define('_PN_OF','of');
if (!defined('_PN_START'))
	define('_PN_START','Start');
if (!defined('_PN_PREVIOUS'))
	define('_PN_PREVIOUS','Prev');
if (!defined('_PN_NEXT'))
	define('_PN_NEXT','Next');
if (!defined('_PN_END'))
	define('_PN_END','End');
if (!defined('_PN_RESULTS'))
	define('_PN_RESULTS','Results');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE','Note that this is not a booking form, instead you are sending an email.<br/>Please enter the message you\'d like to send to ');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL','Contact hotel');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT','Property enquiry from ');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS','Thank you for your enquiry, your message has been sent to the property\'s contact email address, and copied to your own address for your records. They will respond to you as soon as possible with their reply.');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING',' regarding ');
define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG1','Type the characters that you see in the box');
define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG2','I cannot read the characters. Generate a ');
define('_JOMRES_FRONT_MR_MENU_CAPTCHA_BUTTONTEXT','Send');
define('_JOMRES_FRONT_MR_MENU_CAPTCHA_REFRESHBUTTONTEXT','new image');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY','Enquiry');
define('_JOMRES_BOOKINGFORM_LOOKRIGHT','Please select your required accommodation from the list on the right');
define('_JOMRES_COM_MR_EB_ROOM_MINROOMS','Min rooms already selected');
define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC','Minimum number of rooms already selected in booking before tariff/room type combo can be offered. Allows you to have discounted tariffs when more than N rooms are already selected. ');
define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS','Max rooms already selected');
define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC','Maximum number of rooms already selected in booking before tariff/room combo is no longer offered. Allows you to stop offering this room type/tariff combination once N rooms have been selected in the booking form. ');
define('_JOMRES_COM_SPS_EDITROOM_DESC','Note that Single person suppliments set here will not be used if Single Person Suppliments are set to Yes in General Configuration. The settings here are an alternative to having flat rates Single Person Suppliements, not an addition to the flat rate SPS.');
define('_JOMRES_AVLCAL_NOBOOKINGS',"Available"); 
define('_JOMRES_AVLCAL_QUARTER',"Some bookings");
define('_JOMRES_AVLCAL_HALF',"Half booked");
define('_JOMRES_AVLCAL_THREEQUARTER',"Mostly booked");
define('_JOMRES_AVLCAL_FULLYBOOKED',"Fully booked");
define('_JOMRES_COM_SEF_URL_PREFIX','Url prefix');
define('_JOMRES_COM_SEF_URL_PREFIX_DESC','This is the first item displayed after the domain - Change to what you require - If you don\'t want to use it then blank it out');
define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY','View property task alias');
define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY_DESC','');
define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING','dobooking task alias');
define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING_DESC','');
define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH','Search task alias');
define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH_DESC','');
define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY','Add country to url');
define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY_DESC','');
define('_JOMRES_COM_SEF_PROPERTY_URL_REGION','Add region to url');
define('_JOMRES_COM_SEF_PROPERTY_URL_REGION_DESC','');
define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN','Add town to url');
define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN_DESC','');
define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE','Add property type to url');
define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE_DESC','');
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME','Add property name to url');
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME_DESC','');
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID','Append property id to property name');
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID_DESC','if property name is set to No then the id will not be used. If set to yes then the url will look like fawlty_towers-1');
define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY','Search URL Structure - Add country to url');
define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY_DESC','');
define('_JOMRES_COM_SEF_DEFAULT_COUNTRY','Search URL Structure - Default country');
define('_JOMRES_COM_SEF_DEFAULT_COUNTRY_DESC','If all your properties are in one country then you will not have country in the search - enter a default country here if you want to display a country');
define('_JOMRES_COM_SEF_SEARCH_URL_REGION','Search URL Structure - Add region to url');
define('_JOMRES_COM_SEF_SEARCH_URL_REGION_DESC','');
define('_JOMRES_COM_SEF_DEFAULT_REGION','Search URL Structure - Default region');
define('_JOMRES_COM_SEF_DEFAULT_REGION_DESC','If all your properties are in one region then you will not have region in the search - enter a default region here if you want to display a region');
define('_JOMRES_COM_SEF_SEARCH_URL_TOWN','Search URL Structure - Add town to url');
define('_JOMRES_COM_SEF_SEARCH_URL_TOWN_DESC','');
define('_JOMRES_COM_SEF_DEFAULT_TOWN','Search URL Structure - Default town');
define('_JOMRES_COM_SEF_DEFAULT_TOWN_DESC','');
define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE','Search URL Structure - Property type');
define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE_DESC','');
define('_JOMRES_COM_SEF_DEFAULT_PTYPE','Search URL Structure - Default property type');
define('_JOMRES_COM_SEF_DEFAULT_PTYPE_DESC','Used in url if search is for all property types');
define('_JOMRES_COM_SEF_NOTINSTALLED','Either she404sef is not installed, or you haven\'t yet copied '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'cms_specific'.JRDS.'joomla15'.JRDS.'other_component_files'.JRDS.'sh404sef'.JRDS.'com_jomres.php to '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_sh404sef'.JRDS.'sef_ext. Once you have installed sh404sef and/or copied that file over, then you will be able to configure your sef urls from here. ');
define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO','Autodetect Javascript calendar language');
define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO_DESC','Enable autodetection of language for the javascript calendars? If we cannot autodetect the language then we will fall back to the language configured below');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK','Per week');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS','Per day');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING','Per booking');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING','Per person per booking');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY','Per person per day');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK','Per person per week');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS','Per days (min days)');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM','Per days X rooms selected');
define('_JOMRES_REGISTRYREBUILD','Rebuild minicomponent registry');
define('_JOMRES_REGISTRYREBUILD_NOTES',"Normally the Jomres plugin registry is rebuilt automatically whenever you view the plugin manager and add or remove a plugin, however it's possible that you cannot use these features for some reason, therefore you can use this function to rebuild the registry manually. If you have access to the Plugin Manager and Upgrades feature then it's unlikely that you will need to use this function. You will need to rebuild the plugin registry whenever you add a new mini-component and didn't use the Plugin Manager to add it.");
define('_JOMRES_REGISTRYREBUILD_SUCCESS','Registry rebuilt successfully');
define('_JOMRES_REGISTRYREBUILD_FAILURE','There was an error with rebuilding the registry of minicomponents. You should check your Jomres error log to see if there is a record of what triggered the error.');
define('_JOMRES_SEARCH_PRICERANGES','Search by price range.');
define('JOMRES_WORD_SAVING','Saving...');
define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS','Use Composite Property details?');
define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS_DESC','Jomres 3.3 introduces the composite property details where all of the property details output is sent to one template file (composite_property_details.html). If you do not wish to use this set it to No (only existing users are expected to set this to No, new users will probably want to leave it set to Yes)');
define('_JOMRES_PROFILELIST_INSTRUCTIONS','This is a list of all users on the system. Non-property managers will have a Guest icon, property managers will have Reception/Property Manager/Super property manager icons.<br/>When Jomres is first installed "admin" is automatically added as a property manager and is considered an authorised user.<br/>Non-super property managers must be assigned to at least one property otherwise they will see an error when they try to log on and use Jomres.<br/>Once a user is authorised then you can edit their profiles, assign them to propertys or give them super property manager rights.<br/>To authorise a user, click on the red Cross next to their name. To unauthrorise them, click the green Tick.<br/>To assign users to specific properties only, or give them super property manager rights, authorise them then click the edit icon (which is only visible once they\'ve been authorised). Users who\'ve registered their property(s) themselves will be automatically assigned to those propertys. Super property managers automatically have rights over all properties, and will see all configuration options even if the minimised configuration option is set in Site Config.');
define('_JOMRES_PROFILEEDIT_INSTRUCTIONS','Here you can assign a manager to certain propertys. Ensure, if they\'re not going to be a super property manager, that they have rights to at least one property otherwise they will see an error when they log in. To give a receptionist/property manager rights over only certain propertys, ensure that the Super Property Manager dropdown is not set to Yes.');
define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE','You haven\'t made any bookings yet!');
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_TAB','Property type');
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE','Edit your property type');
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO','Select your property type');
define('_JOMRES_COM_LOGGING','Jomres logging');
define('_JOMRES_COM_LOGGING_WARNING','These options allow you to enable/disable logging within Jomres. Error logging is always enabled, but other logs such as Booking, Gateway, System and Request logs can be switched on and off. You are advised that <b>the ability to enable this logging is provided purely as a way of making debugging easier but it carries a big security risk</b> as it is easy for outside users to view your logs without being authorised therefore you are advised to leave it switched off most of the time. If you have enabled logging, then when you have disabled it, you should also ensure that the <i>'.JOMRESPATH_BASE.JRDS.'temp'.JRDS.'</i> folder does not contain any old log files. Note that enabling logging will also significantly slow your sytem down as it collects a lot of information.');
define('_JOMRES_COM_LOGGING_BOOKING','Booking form logging (Booking engine logs) ');
define('_JOMRES_COM_LOGGING_GATEWAY','Gateway logs (eg paypal etc) ');
define('_JOMRES_COM_LOGGING_REQUEST','Request log (all incoming server requests)');
define('_JOMRES_COM_LOGGING_SYSTEM','System (misc log) ');
define('_JOMRES_COM_LOGGING_JRPORTAL','JR Portal (mainly for recording commission etc) ');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY','Your enquiry...');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMTYPEIMAGE','Booking form room list show room type image');
define('_JOMRES_COM_A_LISTLIMIT','Property List limit');
define('_JOMRES_COM_A_LISTLIMIT_DESC','The number of propertys to show on a page after a search');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE','Integrated search feature');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC','The Jomres integrated search feature allows your users to search through Jomres propertys according to a set of functions. If you have already used the search features of Jomres in Joomla you will be familiar with these settings.<br/>This feature allows us to offer search handling within Jomres for those users who don\'t want to use Joomla search modules, or for other CMS users who\'s CMS doesn\'t have it\'s own Jomres search modules.<br/>Just remember that if you choose to search for something via a link (ie not a dropdown) then other search options will not be implemented, only the element that corresponds with the link that you clicked.<br/>Note that by default the layout of this integrated search isn\'t very pretty. That\'s because the template file that performs the layout has to include all possible options, some of which are incompatible. To improve the layout and achieve the look you desire, you will need to edit <b>srch.html</b> in the folder <b>'.JOMRES_TEMPLATEPATH_FRONTEND.'</b> ');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE','Activate this feature?');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC','If this feature is enabled, then any call to Jomres that shows the property list will mean that the search options are also shown.');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS','Use columns');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC',"Any search option that you have defined as link type (where pertinent) will be shown as columns (IE br put on the end of the link)");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS',"Feature columns");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS_DESC',"The number of feature icons that can be shown before a br is inserted to go to next row.");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO',"Search region by select combo dropdown");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC',"Offer a search dropdown to filter through countries/regions/towns. If you are going to use this feature then you're best off not using the region/town searches below.");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME',"Search by property name");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC',"Show the search by property name input.");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN',"Show as dropdown?");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC',"Set this to no to show the list as links");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION',"Search by town/region");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC',"Show the search by region input");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN',"Show as dropdown?");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC',"Set this to no to show the list as links");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE',"Search by property type");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC',"Show the search by property type input");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN',"Show as dropdown?");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC',"Set this to no to show the list as links");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE',"Search by room type");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC',"Show the search by room type input");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN',"Show as dropdown?");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC',"Set this to no to show the list as links");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES',"Search by features");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC',"Show the search by feature input");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN',"Show as dropdown?");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC',"Set this to no to show the list as tooltip images and checkboxes");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION',"Search by description");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC',"Show the search by description input");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY',"Search by availability");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC',"Show the search by availability input");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES',"Search by price ranges");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC',"Show the search by price ranges input");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS',"Price range increments");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC',"Jomres will look at all the values in the tariffs then work out a series of price ranges based on the increments value you set here.");
define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC','By default, if a property is not selected in Jomres it will perform a search. If this search was not triggered by a search module then that search will produce random results (deliberately). This option allows you to limit the number of returns in that random search.');
define('_JOMRES_COM_A_CRON_TITLE','Cron job settings and logs');
define('_JOMRES_COM_A_CRON_DESC','Pseudocron job information. The pseudocron functionality is needed by invoicing and commission handling.');
define('_JOMRES_COM_A_CRON_IMMEDIATERUN','Installed cron minicomponents. To run an individual cron job use the links specified below. Note that the cron jobs do not produce any output so you will not see any information on the page. Instead, refer to the job log below.');
global $jomresConfig_secret;
define('_JOMRES_COM_A_CRON_METHOD','Method');
define('_JOMRES_COM_A_CRON_METHOD_DESC',"If you do not have access to cron jobs, set this to Minicomponent, otherwise create a cron job and tell it to run<br /> <i>curl -s ".JOMRES_SITEPAGE_URL_AJAX."&task=cronjobs&tmpl=component&no_html=1&secret=".$jomresConfig_secret."> /dev/null</i> ");
define('_JOMRES_COM_A_CRON_LOGGING','Display logging in the browser');
define('_JOMRES_COM_A_CRON_LOGGING_DESC','Only works if the method is set to Minicomponent.');
define('_JOMRES_COM_A_CRON_LOGGINGENABLED','Logging enabled');
define('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC','Set this to Yes for logging to be enabled. The results of the logs will be output below.');
define('_JOMRES_COM_A_CRON_VERBOSELOGS','Verbose logging');
define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC','Lots of logging output');
define('_JOMRES_COM_TEMPLATEEDITING_TITLE','Template Editing');
define('_JOMRES_COM_TEMPLATEEDITING_DESC','This functionality allows us to edit Jomres frontend templates on the server, saving the results to the database. Advanced feature, be careful with it.');
define('_JOMRES_COM_TEMPLATEEDITING_TEMPLATENAME','Template Name');
define('_JOMRES_COM_TEMPLATEEDITING_HASBEENCUSTOMISED','Template has been customised?');
define('_JOMRES_COM_CUSTOMFIELDS_TITLE','Custom fields');
define('_JOMRES_COM_CUSTOMFIELDS_DESC','Here you can define simple custom fields that will be shown in the booking form.');
define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME','Fieldname (no spaces)');
define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE','Default value');
define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION','Description');
define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED','Required');
define('_JOMRES_COM_MR_EXTRA_QUANTITY','Maximum Quantity');
define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC','If Maximum quantity is set to greater than 1 then guests will be offered a dropdown to choose the quantiy of the extras that they require.');
define('_JRPORTAL_INVOICES_ISSUE',"Issue invoices");
define('_JRPORTAL_TAXRATES_TITLE',"Tax rates");
define('_JRPORTAL_TAXRATES_CODE',"Tax code");
define('_JRPORTAL_TAXRATES_DESCRIPTION',"Rate description");
define('_JRPORTAL_TAXRATES_CANNOTDELETE',"You cannot delete this tax rate.");
define('_JRPORTAL_TAXRATES_RATE',"Rate");
define('_JRPORTAL_INVOICES_TITLE',"Invoices");
define('_JRPORTAL_INVOICES_STATUS_UNPAID',"Unpaid");
define('_JRPORTAL_INVOICES_STATUS_PAID',"Paid");
define('_JRPORTAL_INVOICES_STATUS_CANCELLED',"Cancelled");
define('_JRPORTAL_INVOICES_STATUS_PENDING',"Pending");
define('_JRPORTAL_INVOICES_USER',"User");
define('_JRPORTAL_INVOICES_STATUS',"Status");
define('_JRPORTAL_INVOICES_RAISED',"Raised");
define('_JRPORTAL_INVOICES_DUE',"Due");
define('_JRPORTAL_INVOICES_SUBSCRIPTION',"Subscription");
define('_JRPORTAL_INVOICES_INITTOTAL',"Outstanding total");
define('_JRPORTAL_INVOICES_RECUR_TOTAL',"Recurring total");
define('_JRPORTAL_INVOICES_RECUR_FREQUENCY',"Recurring frequency");
define('_JRPORTAL_INVOICES_RECUR_DOMONTH',"Recurring day of month");
define('_JRPORTAL_INVOICES_CURRENCYCODE',"Currency code");
define('_JRPORTAL_INVOICES_LINEITEMS',"Line items");
define('_JRPORTAL_INVOICES_LINEITEMS_NAME',"Name");
define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION',"Description");
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE',"Initial Price");
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY',"Initial Quantity");
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT',"Initial Discount");
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL',"Initial Total");
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_PRICE',"Recurring Price");
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_QTY',"Recurring quantity");
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_DISCOUNT',"Recurring discount");
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_TOTAL',"Recurring total");
define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE',"Tax code");
define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION',"Tax description");
define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE',"Tax rate");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_TITLE',"Paypal settings");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_CURRENCYCODE',"Currency code (eg EUR)");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_USESANDBOX',"Use sandbox?");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_PAYPALEMAIL',"Your paypal email address");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_NOTES',"Note: To use paypal you must go to your paypal account & disable Autoreturn. (Profile/Website Payment Preferences), and set IPN (Profile/Instant Payment Notification Preferences)to on URL of:<br/><b>&nbsp;".JOMRES_SITEPAGE_URL_AJAX."&task=completebk");
define('_JRPORTAL_INVOICES_IMMEDIATEPAYMENT_PLEASEPAY',"This invoice is now due. Please click the button to be taken to paypal.");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE',"Override standard Jomres gateway settings?");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE_DESC',"If the paypal settings override option is set to Yes then several things happen: General Configuration no longer shows any gateway settings, and two, when a booking is made the settings used here are used so that payment is sent to the address entered here, not that previously configured in General Configuration.");
define('_JRPORTAL_INVOICES_SHOWINVOICES',"Show my invoices");
define('_JRPORTAL_COUPONS_TITLE',"Discount coupons");
define('_JRPORTAL_COUPONS_DESC',"Discount codes can be generated and passed onto guests as an incentive to make bookings. Valid from and to dates refer to the dates that a booking can be made on, not the dates of the booking itself.");
define('_JRPORTAL_COUPONS_CODE',"Coupon code");
define('_JRPORTAL_COUPONS_VALIDFROM',"Valid from");
define('_JRPORTAL_COUPONS_VALIDTO',"Valid to");
define('_JRPORTAL_COUPONS_AMOUNT',"Discount amount");
define('_JRPORTAL_COUPONS_ISPERCENTAGE',"Discount is a percentage");
define('_JRPORTAL_COUPONS_ROOMONLY',"Room only");
define('_JRPORTAL_COUPONS_ROOMONLY_DESC',"Discount is only applied to the cost of the room. If No, then the discount is applied to the entire cost of the booking.");
define('_JRPORTAL_COUPONS_SQLERROR',"Sql error when trying to delete/insert a coupon");
define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS','If you have a coupon code, please enter it into the box and click the "Save coupon" link to save the coupon details against your booking.');
define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON','Save coupon');
define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED','Coupon saved against booking');
define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND','Coupon number not found');
define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE','Coupon discount value');
define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE','Booking discounted. Coupon code/discount value/coupon settings : ');
define('_JOMRES_COM_CACHING','Use the Jomres caching feature?');
define('_JOMRES_COM_CACHING_DESC','Set this to No to disable the Jomres caching feature.');
define('_JOMRES_COM_CHOOSELANGUAGES','Choose languages');
define('_JOMRES_COM_CHOOSELANGUAGES_INFO','Choose the language options to be shown in the language switch dropdown.');
define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN','Show the language selection dropdown?');
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_HISTORICBOOKINGS','Booked out and Cancelled bookings');
/*
* @ignore
*/
define('_JRPORTAL_NEWUSER_DEAR',"Dear");
define('_JRPORTAL_NEWUSER_THANKYOU',"Thank you for registering ");
define('_JRPORTAL_NEWUSER_USERNAME',"Your user name is : ");
define('_JRPORTAL_NEWUSER_PASSWORD',"Your password is : ");
define('_JRPORTAL_NEWUSER_LOG_IN',"Please log in to view your bookings ");
define('_JOMRES_MR_AUDIT_UPDATE_COUPON','Coupon saved');
define('_JOMRES_MR_AUDIT_DELETE_COUPON','Coupon deleted');
// Not used yet
define('_JOMRES_COM_GROWL','Use Jomres messaging');
define('_JOMRES_COM_GROWL_DESC','Many manager updates provide feedback in the form of a javascript message when the page is reloaded, use this option to enable/disable that feature.');
define('_JRPORTAL_SMS_CLICKATELL_TITLE',"Jomres -> Clickatell SMS");
define('_JRPORTAL_SMS_CLICKATELL_USERNAME',"Username");
define('_JRPORTAL_SMS_CLICKATELL_PASSWORD',"Password");
define('_JRPORTAL_SMS_CLICKATELL_APIID',"API id");
define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER',"Notification mobile number");
define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC',"Please use the format 'Country code, mobile number'. For example a UK based mobile number would be something like '447979123456'. Leave this blank if you don't want any notification emails sent to your mobile phone.");
define('_JRPORTAL_SMS_CLICKATELL_TABTITLE',"SMS");
define('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS',"
<b>Obviously, you cannot use/test this gateway from localhost, you'll need to do that on a 'live' server.</b>
<br/>
<br/>
In order to use the Clickatell gateway you need a Clickatell account and at least one registered connection (API sub-product instance) between your application and our gateway. Each connection
method is known as a sub-product. Here's how:<br/>
<br/>
<b>Step 1 - register for a Clickatell account</b><br/>
If you do not already have a Clickatell account, you need to register for one as per below. Otherwise proceed to Step 2.<br/>
* Go to http://www.clickatell.com/products/sms_gateway.php, and choose the appropriate API subproduct (connection method) you wish to use ( Clickatell Central (API) )<br/>
* Click on the registration hyperlink.<br/>
* Fill out the registration form.<br/>
After successfully submitting the form you will automatically be logged into your new account and taken to a page where you can add your chosen API connection.<br/>
<b>Step 2 - add a registered API connection (sub-product)</b><br/>
If you are not already logged into your account, then you must do so at http://www.clickatell.com/login.php<br/>
* Select \"Manage my Products\" from the top menu.<br/>
* Select the API connection type you wish to use (HTTP API) from the drop down menu ('Add Connection').<br/>
* Complete the form. Make sure that you enter the locked IP(the IP of this server), set Callback to HTTP POST. You'll need to set the IP callback to ".$jomresConfig_live_site."/index.php?option=com_jomres&task=sms_clickatell_callback and a userid and password.<br/>
If you register more than one API connection, the description name you enter for each must be unique - you cannot have multiple APIs with the same name.<br/>
After successfully submitting the form, your authentication details will be displayed, including each connection's unique API ID (api_id). These authentication details are required when connecting to the Clickatell gateway to send a message.<br/>
<br/>
Use your userid, password and api_id to populate the fields above.<br/>
<br/>
");
define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED','Booking form room list show disabled access');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE','Booking form room list show max people');
define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING',"Please note that room prices listed are estimates and the full price of the booking will not be calculated until you have added a room or rooms to your selection.");
define('_JOMRES_LASTEDITED_DB','Database template Last edited');
define('_JOMRES_LASTEDITED_DISK','Disk template Last edited');
define('_JOMRES_LASTEDITED_WARNINGICON','Database template warning');
define('_JOMRES_LASTEDITED_WARNINGICON_TEXT','Database template may be out of date');
define('_JOMRES_LASTEDITED_WARNING','If there is an icon against a template, then Jomres has detected that the template stored in the database <strong><i>may</i></strong> be older than that stored on disk, in which case it is possible that the template has been updated in a newer version of Jomres. If this is the case, then it is possible that your template may not be benefiting from a new feature in Jomres, or that existing functionality may no longer work as expected, and you should compare the file on disk to your customisations to ensure that you are not missing out on new features.');
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE',"Subscription packages");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME',"Name");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION',"Description");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED',"Published");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY',"Frequency");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD',"Trial period");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALAMOUNT',"Trial amount");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT',"Full amount");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_ROOMSLIMIT',"Rooms limit"); // Not currently used, saved for a rainy day
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT',"Property limit");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY_DESC',"Frequency: M/Q/B/A Monthly/Quarterly/Bianually/Anually");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD_DESC',"Trial period: Integer input, 0 (zero) to not set, 1 for one month, 2 for two months etc");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE',"Subscribe");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE_DESC',"Please enter/update your subscriber information. Please note that all fields are required.");
define('_JRPORTAL_SUBSCRIBERS_FIRSTNAME',"First name");
define('_JRPORTAL_SUBSCRIBERS_SURNAME',"Surname");
define('_JRPORTAL_SUBSCRIBERS_ADDRESS',"Address");
define('_JRPORTAL_SUBSCRIBERS_COUNTRY',"Country");
define('_JRPORTAL_SUBSCRIBERS_POSTCODE',"Postcode");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES1',"You need a valid subscription to create new properties. At this moment in time, you have purchased subscriptions for ");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES2'," published property(s). ");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES3',"You can increase the number of properties you can create by <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'>purchasing more subscription packages here.</a>");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES4'," You have used ");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES5'," property slots. ");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES6',"To see a list of your current properties click <a href='".JOMRES_SITEPAGE_URL."&task=listyourproperties'>here</a>. ");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES7',"To see a list of the current subscription packages available, click <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'>here</a>. ");
define('_JRPORTAL_SUBSCRIPTIONS_PUBLISHERROR',"Unfortunately, you cannot publish this property as you have reached your maximum number of available property slots.");
define('_JRPORTAL_SUBSCRIBERS_SUBSCRIBED',"Thank you for creating a subscription to list your property on our server. Once your invoice is marked as paid (there may be a delay depending on Paypal) please <a href='".JOMRES_SITEPAGE_URL."&task=registerProp_step1'>click here to continue creating your property(s).</a>");
define('_JRPORTAL_SUBSCRIBERS_CANCED_SUBSCRIBE',"We are sorry that you have not chosen to subscribe to our service. Please let us know if there's any way we can help you further");
define('_JRPORTAL_SUBSCRIBERS_CANNOT_PUBLISH',"We are sorry, but you've met the limit of the number of properties that you can have published on this system at any one time. You can raise the number of properties that you can publish by <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages&Itemid=".$Itemid."'>purchasing more subscription packages here.</a> ");
define('_JRPORTAL_SUBSCRIPTIONS_USE',"Use subscription handling functionality");
define('_JOMRES_COM_NEWUSER','Create new user on booking');
define('_JOMRES_COM_NEWUSER_DESC','Create new user account on unregistered user booking.');
define('_JOMRES_CLICKTOREGISTER','Click here to register your property');
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIPTIONS_TITLE',"Active subscriptions");
define('_JRPORTAL_SUBSCRIPTIONS_GATEWAYSUBSCRIPTIONID',"Gateway subscription id");
define('_JRPORTAL_NEWUSER_SUBJECT',"Thank you for your booking - new user details follow");
define('_JOMRES_LATLONG_DESC',"Use your mouse to move around the map, and drag the pointer to the location of your property to set the latitude and longitude.");
define('_JOMRES_CONTROLPANEL','Control Panel');
define('_JOMRES_COM_FAUXHEADERS','Output Jomres javascript headers into the body of the html?');
define('_JOMRES_COM_FAUXHEADERS_DESC','Set this to Yes if you are having problems with mootools and Jomres\'s jQuery conflicting in IE. This will force Jomres to output the javascript calls within the body of the page instead of the HEAD area, which isn\'t valid html, however it seems to resolve the probems with jquery and mootools conflicting with each other.');
// Jomres v4.2
define('_JOMRES_MANAGER_SHOWINVOICE','Show invoice');
define('_JOMRES_MANAGER_SHOWINVOICES','Show invoices');
define('_JOMRES_USER_LISTMYPROPERTY','Add my property to this site');
define('_JOMRES_WARNINGS_DANGERWILLROBINSON','Warning : ');
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_FREEBIENOTES',"You can have one free package on the system if you wish, by creating a package and setting both the trial amount and the full amount to 0.00");
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID',"Sorry, but that package ID is not recognised.");
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE',"Sorry, you are already subscribed to a free package, you cannot subscribe to that package again.");
define('_JRPORTAL_SUBSCRIPTIONS_STATUS_EXPL'," Status <b>0:</b> Pending payment <b>1:</b> Created <b>2:</b> Cancelled <b>3:</b> End of Term");
define('_JRPORTAL_SUBSCRIPTIONS_MYSUBSCRIPTIONS',"My Account");
define('_JOMRES_COM_YOURBUSINESS','Your business details');
define('_JOMRES_COM_YOURBUSINESS_NAME','business name');
define('_JOMRES_COM_YOURBUSINESS_VATNO','VAT number');
define('_JOMRES_COM_YOURBUSINESSADDRESS','Building number');
define('_JOMRES_COM_A_TAX_WARNING2','<font color=red>NOTE: The following tax rates are designed for use by the American market. If you want to use a flat rate tax (eg VAT) for your accommodation, please choose a tax rate from the option above.</FONT>');
define('_JOMRES_INVOICE_NUMBER','Invoice No. ');
define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP','Select the dates that you want to apply the black booking for. When you have selected the appropriate dates, click the "apply" button to re-check availability. <br/> 
<br/> 
If the property has one or more bookings for the period selected, then you will not be able to book it out until the other bookings/black bookings, have been cancelled/booked out.');
define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK','Sorry, you cannot black book this property for those dates.');
define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK','You can blackbook this property for those dates.');
define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES','Your property is configured to charge per person per night but you do not have any guest types created or published, please create and publish one or more guest types. ');
define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS','You don\'t have any tariffs configured yet, you will not be able take any bookings for your property.');
define('_JOMRES_EDITINGMODE_ON','Editing mode on');
define('_JOMRES_EDITINGMODE_OFF','Editing mode off');
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE','Charge variable deposits?');
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC','Variable deposits allow you to define if you\'d like to charge the full amount if the booking\'s arrival date is within N days from "today". Set this option to Yes to enable the feature, and enter the number of days below, so for example if the arrival day is within 60 days, then the deposit amount charged will be the full amount, otherwise the amount will be based on the deposit options configured above.');
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS','The number of days, within which the full amount will be charged as a deposit.');
define('_JOMRES_CONTACTOWNER_TO_ADMIN','Send Contact Owner emails to Alternative address?');
define('_JOMRES_CONTACTOWNER_TO_ADMIN_DESC','Set this option to Yes if you want Contact Owner emails to be sent to the below input. Leave it set to No to send the emails to the email address defined in the property configuration area.');
define('_JOMRES_CONTACTOWNER_TO_ADMIN_ALTERNATIVE','Alternative address for Contact Owner emails.');
define('_JOMRES_CONFIRMATION_EMAIL_SENT','Confirmation email has been sent. You may close this window now.');
define('_JOMRES_REALESTATE_TITLE','Real estate listing');
define('_JOMRES_REALESTATE_YESNO','Is this property a Real estate listing?');
define('_JOMRES_REALESTATE_YESNO_DESC','Select Yes if you are selling the property, select No if it is a hotel/b&b/guest house/villa type property where you will be offering the property or rooms in the property for short term rental and will be using this system for taking bookings.');
define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT','Contact agent');
define('_JOMRES_INVOICE_MARKASPAID','Mark invoice as paid');
define('_JOMRES_INVOICE_MARKEDASPAID','Invoice marked as paid');
define('_JOMRES_APIKEY_REMAKE','Make new API key');
define('_JOMRES_AUTOTRANSLATE_TITLE','Use Google for initial translations?');
define('_JOMRES_AUTOTRANSLATE_DESC','This feature is new and experimental, so use at your own risk. The purpose of the feature is to query Google\'s translation tool to automatically set up translations for a given property. Note that this feature sanitizes all input, so if you use a html editor for formatting your property details, then this will break that formatting.<br/>');
define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE','Is this a single property installation?');
define('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC','If this option is set to Yes, then the frontend view of Jomres to non-authorised users is greatly simplified. Default calls to Jomres from a menu option, instead of being given a list of propertys, just takes the guest to the booking form for the first property in the system. Property managers also will not see see the Property Details preview button or the Add new property button. Ideal if you only want to list one property and take bookings for it.<br/>');
define('_JOMRES_HTMP_PURIFIER','Use HTML purifier functionality?');
define('_JOMRES_HTMP_PURIFIER_DESC','Switch this on to enable Jomres to use the html purifier library (http://htmlpurifier.org/). The library is used as an extra layer of security when dealing with input and output data and it is recommended that you leave it enabled, however it will use more memory.');
define('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT','Balance payment');
define('_JOMRES_AJAXFORM_BILLING_INVOICE_BALANCE','Balance');
define('_JOMRES_WARNINGS_GLOBALEDITINGMODE','Note, you are using Editing Mode with the Global Editing mode enabled. This is fine if you understand what Global Editing mode means, however if you don\'t you may cause yourself problems. If you are unsure if you should be using Jomres in this way, please see <a href="http://manual.jomres.net/developers_guide_customising_editmode.html" target="_blank">the editing mode manual page</a> for more information on this subject.');
define('_JOMRES_SUPPORTKEY','Support key');
define('_JOMRES_SUPPORTKEY_DESC','Your support license key number (also known as your license number). You will need an up-to-date license to be able to download plugins for Jomres.');
define('_JOMRES_PERSONAL_DISCOUNT','Personal discount');
define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO','Limit property registration to one country?');
define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC','You can ensure that property registrations are limited to just one country by setting this option to Yes and setting the country in the following option.');
define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY','Properties are located in this country : ');
define('_JOMRES_JQUERYTHEME','Jquery theme');
define('_JOMRES_JQUERYTHEME_DESC','Choose a jquery theme to use for the property details tabs.');
define('_JOMRES_PROPERTYNOTOUBLISHED','We are sorry, but that property is not currently available.');
define('_JOMRES_REVIEWS','Reviews');
define('_JOMRES_REVIEWS_TITLE','Review title');
define('_JOMRES_REVIEWS_DATE','posted on ');
define('_JOMRES_REVIEWS_NOREVIEWS','There are no reviews for this property yet.');
define('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST','Would you like to be the first to review this property?');
define('_JOMRES_REVIEWS_IAGREE','I agree with this review');
define('_JOMRES_REVIEWS_IDISAGREE','I disagree with this review');
define('_JOMRES_REVIEWS_AVERAGE_RATING','Average Rating: ');
define('_JOMRES_REVIEWS_TOTAL_VOTES','Total Votes:');
define('_JOMRES_REVIEWS_ADD_REVIEW','Add a new review.');
define('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN','You need to be logged in to post a review.');
define('_JOMRES_REVIEWS_REVIEWBODY','Tell us what you think about this property : ');
define('_JOMRES_REVIEWS_REVIEWBODY_SAID','This reviewer told us : ');
define('_JOMRES_REVIEWS_PROS','Pros: ');
define('_JOMRES_REVIEWS_CONS','Cons: ');
define('_JOMRES_REVIEWS_SUBMITTEDDATE','Submitted On: ');
define('_JOMRES_REVIEWS_ALREADYREVIEWED','You have already reviewed this property, you can\'t post another review about it.');
define('_JOMRES_REVIEWS_CANNOTREVIEW','Sorry, but you are not allowed to post reviews on this site.');
define('_JOMRES_REVIEWS_CLICKTOSHOW','Click to show reviews');
define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW',' guests agree with this review. ');
define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW',' guests do not agree with this review.');
define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR',' guest agrees with this review. ');
define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR','guest does not agree with this review.');
define('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM','Thank you for sharing your opinion of this review.');
define('_JOMRES_REVIEWS_ALREADY_CONFIRMED','Thank you, but you have already shared your opinion of this review.');
define('_JOMRES_REVIEWS_COMPLETEALLFIELDS','Please ensure that all fields have been filled.');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE','Please summarise your review by entering a title');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION','Please enter a more complete review in the description box');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS','Please enter the good parts of your experience of being a guest at this property');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS','Please enter any negative thoughts you might have of your experience');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1','Please rate the hostpitality you received from the staff');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2','Please rate your opinion of the property\s locale');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3','Please provide your opinion of the cleanliness of the property');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4','Please rate the accommodation. Was it comfortable or threadbare');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5','Please provide your opinion of whether it was value for money');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6','Please rate the services');
define('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY','Review summary');
define('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL','Your experience in more detail');
define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW','Thank you for submitting your review.');
define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED','Thank you for submitting your review. It will be published soon by one of our hard working moderators.');
define('_JOMRES_REVIEWS_ADMIN_CONTROL','Use Jomres review functionality?');
define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH','Automatically publish reviews?');
define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC','If you set this to No you will need to manually publish reviews');
define('_JOMRES_REVIEWS_ADMIN_TESTMODE','Set reviews to test mode?');
define('_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC','Normally property managers cannot review propertys. With test mode enabled, they can. Naturally this is not ideal in a production environment.');
define('_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO','This is a list of all properties. To see a property\'s reviews, click on that property. From there you will be able to publish or delete a review.');
define('_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED','Number of unpublished reviews');
define('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL','Total number of reviews');
define('_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW','Publish/Unpublish review');
define('_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW','Delete review');
define('_JOMRES_REVIEWS_REPORT_REVIEW','Report review');
define('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE','Review reports');
define('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR','Please enter your report');
define('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL','See something in this review which is objectional or inaccurate? Report it and we will look into it for you.');
define('_JOMRES_REVIEWS_SUBMIT','Submit');
define('_JOMRES_REVIEWS_REPORT_CREATED_BY','Report created by ');
define('_JOMRES_REVIEWS_REPORT_INSTRUCTIONS','Reports are posted by users who may disagree with the content of a review. The only way to remove a report is to delete the review.');
define('_JOMRES_REVIEWS_RATING','Ratings (1 = poor 10 = excellent) ');
define('_JOMRES_REVIEWS_RATING_1','Hospitality  ');
define('_JOMRES_REVIEWS_RATING_2','Location ');
define('_JOMRES_REVIEWS_RATING_3','Cleanliness ');
define('_JOMRES_REVIEWS_RATING_4','Accommodation ');
define('_JOMRES_REVIEWS_RATING_5','Value for money ');
define('_JOMRES_REVIEWS_RATING_6','Services ');
define('_JOMRES_REVIEWS_REVIEWED_BY','Reviewed by : ');
define('_JOMRES_REVIEWS_CLICKTOHIDE','Hide reviews');
define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS','Show Booking form in property details page?');
define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC','Set this to Yes to show the booking form in the property details page. If you set it to No, then a link will appear in the property details page instead pointing to the booking form.');
define('_JOMRES_COM_A_TAXINCLUSIVE','Are prices set inclusive of tax?');
define('_JOMRES_COM_A_TAXINCLUSIVE_DESC','Prices set are inclusive? If your prices include tax, then select Yes. If they are not, select No.');
define('_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS','Extras tax:');
define('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK','The day of week fields allow you to set a rate for a given day of week, once you click the day of week button all days of the week will be set to that rate.');
define('_JOMRES_MICROMANAGE_PICKER_DATERANGES','The date pickers and the rate input allow you to set one price for a given date range. Choose a start and end date, input a price, and click the Set Rates button.');
define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START','Start range');
define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END','End range');
define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE','Rate');
define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET','Set rates');
define('_JOMRES_PARTNERS_TITLE','Partners');
define('_JOMRES_CALENDAR_TODAY','Today');
define('_JOMRES_CALENDAR_PREV','Previous');
define('_JOMRES_CALENDAR_NEXT','Next');
define('_JOMRES_CALENDAR_RTL','true');
define('_JOMRES_ROOMALLOCATIONS_ROOM','Room ');
define('_JOMRES_ROOMALLOCATIONS_GUESTS','guest(s). ');
define('_JOMRES_ROOMALLOCATIONS_INFORMATION','This how we have assigned your guest numbers to their rooms. If you would like to change this allocation, you will need to contact the hotel after making the booking. Extra charges may apply if you change your assignments.');
define('_JOMRES_SANITY_CHECK_NOT_PUBLISHED',"Note that your property is not yet published, only you can see the property, site visitors will not see it");
// 4.5.5
define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT','Default search result order');
define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC','Change this option to change the order that search results are presented by default.');
define('_JOMRES_PROPERTYLIST_FILTERS_SHOW','Show search result order dropdown');
define('_JOMRES_ROOMMSLIST_STYLE','Rooms list style');
define('_JOMRES_ROOMMSLIST_STYLE_DESC','In the booking form, using the "classic" rooms list style you offer individual rooms to guests. With the room type view, guests choose the number of rooms of type X (eg. 2 x doubles) instead');
define('_JOMRES_ROOMMSLIST_STYLE_CLASSIC','Classic');
define('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES','Room types');
define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_START','(Re)checking availability');
define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_AVAILABLEROOMS','Rebuilding available rooms list');
define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_CALCTOTALS','Calculating totals');
define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_DONE','Finished form update');
define('_JOMRES_COM_CALENDAR_STARTDAY','Calendar week start day, Sunday or Monday');
define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY','Only property guests can review?');
define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC','Set this to Yes if you want to restrict reviews to only those users who have been a guest already in this property.');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING','Per room');
define('_JOMRES_MAX_GUESTS_PER_ROOM','Guests per room : ');
define('_JOMRES_MAX_GUESTS_PER_BOOKING','Guests per booking : ');
define('_JOMRES_NUMBER_OF_ROOMS','Number of rooms');
define('_JOMRES_MICROMANAGE_TARIFFDEFAULT','Tariff default price');
define('_JOMRES_MICROMANAGE_TARIFFDEFAULT_DESC',"This only applies to new tariffs");
define('_JOMRES_MICROMANAGE_YEARSTOSHOW',"Years to show");
define('_JOMRES_MICROMANAGE_YEARSTOSHOW_DESC',"Defines the number of years to show when editing a micromanage tariff");
define('_JRPORTAL_MONTHS_LONG_0','January');
define('_JRPORTAL_MONTHS_LONG_1','February');
define('_JRPORTAL_MONTHS_LONG_2','March');
define('_JRPORTAL_MONTHS_LONG_3','April');
define('_JRPORTAL_MONTHS_LONG_4','May');
define('_JRPORTAL_MONTHS_LONG_5','June');
define('_JRPORTAL_MONTHS_LONG_6','July');
define('_JRPORTAL_MONTHS_LONG_7','August');
define('_JRPORTAL_MONTHS_LONG_8','September');
define('_JRPORTAL_MONTHS_LONG_9','October');
define('_JRPORTAL_MONTHS_LONG_10','November');
define('_JRPORTAL_MONTHS_LONG_11','December');

define('_JOMRES_PROPERTYMANAGEMENTPROCESS',"Property management process");
define('_JOMRES_PROPERTYMANAGEMENTPROCESS_DESC',"There are different management processes depending on the way you want to list your property/business.");
define('_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL',"Rental");
define('_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL_DESC',"Choose the rental option if you are booking out rooms in a property (eg. Hotel/B&B/Villa/Apartment)");
define('_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE',"Realestate/simple listing");
define('_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE_DESC',"Choose the real estate option if you are not offering any booking functionality at all, (eg. A property/item for sale)");

define('JOMRES_COM_A_MINIMALCONFIG_DESC','Set this to Yes to reduce the number of options available to property managers in the General Configuration section. This is useful if you do not want property managers to play around with too many settings, instead you can edit jomres_config.php to define default property options.');

define('_JOMRES_AJAXFORM_EXTRAS_SELECT','Please select an option for your booking');
define('_JOMRES_COM_ALLOWHTMLEDITOR_DESC','Switches on html editors in property details editing page. Additionally, if this is set to No, then all html except p and br is stripped from all entered and displayed text.');
define('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT',"Fullscreen view");
define('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW',"Normal view");
define('_JOMRES_COM_TIMEZONE_SWITCHER',"Show the timezone switcher in the property manager's toolbar?");

define('_JOMRES_PARTNER_DISCOUNT',"Partner discount ");
define('_JOMRES_PARTNER_CHOOSE_SEARCHTITLE',"Search user");
define('_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS',"Enter a few characters to search for a user.<br/> When you select a user you will automatically add them as a Partner and you will be taken to the next page where you can assign properties and discounts to the user.");
define('_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE',"Existing partners");
define('_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS',"Choose a partner to be taken to the partner administration page.");

define('_JOMRES_PARTNER_SHOW_TITLE',"Partner :");
define('_JOMRES_PARTNER_SHOW_SEARCHTITLE',"Search for a property");
define('_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS',"Enter a few characters from the property name and select a property.<br/> When you select the property you will add it to the partner's portfolio, however they will not yet enjoy any discounts, you will need to set those youself.");
define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES',"Current properties");
define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS',"Click on a property to edit the partner's discount settings for that property.");


// 4.6
define('_JOMRES_SUSPENSIONS_TITLE',"Suspended? <br/>(click to suspend a manager, this will auto-unpublish all of their properties ) ");
define('_JOMRES_SUSPENSIONS_MANAGERLIST_INFO',"Click on the Suspend Icon (the icon with the man and the green tick) to suspend a manager. This means that the manager will not be able to perform property management functions and all of their properties will be unpublished. Super property managers cannot be suspended.");
define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED',"This account has been suspended, it is not currently possible to administer your propert(ies) using this account.");
define('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE',"Manager account suspended");
define('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE',"Manager account reinstated");
define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL',"Please note that your property manager account has been suspended. You will not be able to perform any property management functions until the account has been restored.");
define('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL',"Please note that your property manager account is now active. You may continue to perform any property management functions. Please log into your account and ensure that the approprite propert(ies) have been published. Thank you.");
define('_JOMCOMP_MYUSER_REMOVE','Remove favourite');
define('_JOMRES_DATA_ARCHIVE_TITLE','Booking data archive');
define('_JOMRES_DATA_ARCHIVE_TITLE_DESC','The booking data archive is a raw dump of booking information captured after the confirm booking button is clicked. Hover over a date to see the raw data dump. The information is stored in the XXX__jomres_booking_data_archive table.');
define('_JOMRES_MY_ACCOUNT_EDIT','Edit account');
define('_JOMRES_MANAGER_CHOOSE_SEARCHTITLE',"Search users");
define('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS',"Enter a few characters from their username to search for a user.<br/> When you select a user you will automatically add them as a Manager and you will be taken to the next page where you can assign properties and access rights to the user.");
define('_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE',"Existing managers");
define('_JOMRES_MANAGER_CHOOSE_EXISTING_INSTRUCTIONS',"Choose a manager to be taken to the manager administration page.");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER',"Search by guest numbers");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC',"Show the search by guest number dropdown");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS',"Search by stars");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC',"Show the search by stars dropdown");
define('_JOMRES_SEARCH_GUESTNUMBER','Number of guests');
define('_JOMRES_SEARCH_STARS','Number of stars');

define('_JRPORTAL_INVOICES_COMMISSION_TITLE',"Commission invoices");
define('_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED',"Number of properties");
// 4.6.1
define('_JOMRES_CONFIG_JQUERY',"Load Jomres jQuery library?");
define('_JOMRES_CONFIG_JQUERY_DESC',"You can set this to NO if you have a template that uses jquery. This MAY resolve jquery conflict issues on some templates, but not all.");
define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC','If you use Joomfish, you should set this to No, and use Joomfish\'s language switcher. The switcher is always enabled in the administrator area because it is needed when you use the Label Translations feature.');
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC','Thumbnails are created automatically for uploaded images.');

// 4.7.1
define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH','Small thumbnails max width (px).');
define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC','Small thumbnails are used in the property list whereas medium sized thumbnails are used in the property header.');
define('_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT','Small thumbnails max height (px).');
define('_JOMRES_COM_THUMBNAIL_MED_WIDTH','Medium thumbnails max width (px).');
define('_JOMRES_COM_THUMBNAIL_MED_HEIGHT','Medium thumbnails max height (px).');
define('_JOMRES_TOUCHTEMPLATES','Label Translations');


define('_JRPORTAL_ROI_TAB',"ROI");
define('_JRPORTAL_INVOICES_COMMISSION_USE',"Use commission functionality?");
define('_JRPORTAL_INVOICES_COMMISSION_USE_DESC',"Set this to Yes to show the manager commission invoices which have been raised.");
define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS',"Manager bookings create commission invoices?");
define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC',"If a manager makes a booking, does that also create a commission invoice line item?");
define('_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_SUBJECT',"A new commission invoice has been raised");
define('_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_MESSAGE',"A new commission invoice has been raised which requires your attention. Please click on the following link to view the invoice (you may need to log in first).");
define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND',"Auto suspend managers where invoices are marked as Pending?");
define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD',"Auto suspend threashold");
define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC',"This threashold is the number of days that a manager has to pay an invoice before they are suspended and their properties unpublished.");

//4.7.2
define('_JOMRES_COM_LANGUAGE_CONTEXT','Language context');
define('_JOMRES_COM_LANGUAGE_CONTEXT_DESC','Use this option to change the site\'s language context. This feature allows Jomres to use labels that are appropriate for your current focus, so if your focus is as a Yacht Brokerage, then changing the context will allow Jomres to present labels from a different language file. For example, if you set the context to "Yacht Brokerage" then Jomres will first find the current language, then search the /jomres/languages directory for a sub-directory called "yachtbrokerage". If the file exists for the current language then that file will be used. If not, then Jomres will search for an english language file in that same directory. If that can\'t be found, Jomres will use the language file for the currently selected language in the /jomres/languages directory.');

// 4.7.3
define('_JOMRES_COM_ADVANCED_SITE_CONFIG','Advanced site config');
define('_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC','Set this option to Yes if you want to use the advanced site configuration options. If you\'re just starting with Jomres, then we advise you to leave this to No for now, as the default installation is sufficient to get you started, instead you should add Jomres to the main menu and log into the frontend as "admin" and start configuring your property(s). Please note that many of the advanced options will only be applicable to installations of Jomres Silver, Jomres Lite users will not be able to take full advantage of the features that they enable.');

define('_JOMRES_CONFIG_JQUERY_UI',"Load Jomres jQuery UI library?");

define('_JOMRES_SORTORDER_PRICE_DESC','Price (highest first)');
define('_JOMRES_SORTORDER_PRICE_ASC','Price (lowest first)');

// 4.7.6

define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT','Price summary and estimates should be priced as per night/per week/per month?');
define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY','Per night');
define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY','Per week');
define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY','Per month');
define('_JOMRES_BOOKINGFORM_PERPERSON','Per person');

define('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS','week(s) at ');
define('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS','month(s) at ');
// 4.7.7

define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS','How should the search option for people numbers work?');
define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC','Affects all search modules. When using the guest number search feature, should the search feature look for properties who\'s tariffs will support guest numbers up and equal the number chosen, exactly equal the number chosen, or the number chosen and greater? ');
define('_JOMRES_PAYPAL_REDIRECTMESSAGE','Please wait, your order is being processed and you will be redirected to the Paypal website.');
define('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED','If you are not automatically redirected to Paypal within 5 seconds...');
define('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE','Click Here');
// 4.7.8

define('_JRPORTAL_COUPONS_BOOKING_VALIDFROM',"Booking valid from");
define('_JRPORTAL_COUPONS_BOOKING_VALIDTO',"Booking valid to");
define('_JRPORTAL_COUPONS_GUESTNAME',"Guest name");
define('_JRPORTAL_COUPONS_DESC_478',"Discount codes can be generated and passed onto guests as an incentive to make bookings.<br/>
Valid from and to dates refer to the dates that a booking can be made on, whereas the Booking valid from/to dates refer to the dates that the booking must cover for the coupon to be valid. If a booking falls outside of that period then normal rates will apply to the days outside of that period.<br/>
If you want the booking to be available to one specific guest, choose that guest's name in the dropdown to limit the coupon to that guest only.");
define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK',"With your coupon, this booking has been discounted from ");
define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO'," to ");

define('_JOMRES_CONFIG_JQUERY_UI_DESC',"Set this to No to disable loading of both the Jquery UI javascript and CSS files.");
define('_JOMRES_CONFIG_JQUERY_UI_CSS',"Load Jomres jQuery UI CSS library?");
define('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC',"Set this to No to disable only the jquery UI CSS file.");

//v5.1 
define('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX',"Total inc tax");
define('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY','Unpublished property');

// v5.2
define('_JOMRES_CONVERSION_TITLE',"Use conversion functionaity");
define('_JOMRES_CONVERSION_TITLE_DESC',"Use the Jomres online conversion functionality. This will offer a conversion dropdown to frontend users, where they will be able to choose a currency that they wish to see prices offered in. Price output is adjusted to show the converted price followed by the property's 'native' price in brackets.");
define('_JOMRES_CONVERSION_DISCLAIMER',"We have used our best efforts to obtain the most accurate and timely exchange rates that we can. Our online currency convertion feature is a service provided for informational purposes only and is not intended to provide exact figures. Accordingly, we do not guarantee the accuracy of the exchange rates. Using this feature, you are deemed to have agreed that any reliance on or use of the rate conversion feature shall be entirely at your own risk.");
define('_JOMRES_JAVASCRIPT_CACHING_TITLE',"Use javascript caching?");
define('_JOMRES_JAVASCRIPT_CACHING_DESC',"Choose whether or not to use the Jomres Javascript caching feature. Works on most servers, but not on all. If you're having problems with javascript errors that are reported as 'unterminated string literal' in (for example) Firebug, you should set this to No. ");

// 5.2.1
define('_JOMRES_HISTORIC_GUESTS_SHOW',"List historic and current guests");
define('_JOMRES_HISTORIC_GUESTS_NOSHOW',"Current guests only");

// 5.3.1
define('_JOMRES_CURRENCYCONVERSION_TAB','Currency conversion/currency codes');
define('_JOMRES_IP_DETECTION_API_KEY_TITLE','IP Detection API Key');
define('_JOMRES_IP_DETECTION_API_KEY_DESC','To automatically set the currency code dropdown Jomres is able to use a free service called IPinfoDB to detect the visitor\'s country, however you need to register for an API key at <a href="http://ipinfodb.com/register.php" target="_blank">IPinfoDB</a> first.');
define('_JOMRES_DEBUGGING_TAB','Debugging');
define('_JOMRES_BOOKINGORM_MODALPOPUP','Show the booking form in a modal popup?');
define('_JOMRES_BOOKINGORM_MODALPOPUP_DESC','If the option to show the booking form in the property details is set to No, then when the booking form page is opened Jomres can show the booking form in a modal popup. This allows you to include much more information in the booking form without overwhelming the customer by having too many elements on the screen (as they\'re hidden behind the popup)');
define('_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION','Totals panel location');
define('_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION_DESC','In the booking form the totals panel needs different settings depending on the template. For example, on the Jomres Joomla template a setting of 712 works well, however on Milkyway a setting of circa 1500 is more suitablem, particularly if you do not have the modal popup feature enabled. It\'s likely that you\'ll need to experiment with different settings to find something that works well in your chosen template. ');
define('_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX','Accomodation ex tax');
define('_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX','Accomodation inc tax');
define('_JOMRES_AJAXFORM_BILLING_TAX_ACCOM','Rooms tax:');
define('_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM','Open the booking form');

define('_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS','Back to property details');
define('_JOMRES_COM_MR_EXTRA_AUTO_SELECT','Automatically Selected?');
define('_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE','Balance (after deposit paid)');

define('_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER','Filter resources based on their features.');

define('_JOMRES_DATEPERIOD_LATESTBOOKING','Latest booking');
define('_JOMRES_DATEPERIOD_SECOND','second');
define('_JOMRES_DATEPERIOD_MINUTE','minute');
define('_JOMRES_DATEPERIOD_HOUR','hour');
define('_JOMRES_DATEPERIOD_DAY','day');
define('_JOMRES_DATEPERIOD_WEEK','week');
define('_JOMRES_DATEPERIOD_MONTH','month');
define('_JOMRES_DATEPERIOD_YEAR','year');
define('_JOMRES_DATEPERIOD_DECADE','decade');
define('_JOMRES_DATEPERIOD_S','s');
define('_JOMRES_DATEPERIOD_AGO','ago');
define('_JOMRES_DATEPERIOD_FROMNOW','from now');

define('_JOMRES_WHOLEDAY_TITLE','Bookings are for whole days?');
define('_JOMRES_WHOLEDAY_DESC','By default the system bookings resources out by the night, so a booking from the first of January '.date("Y",strtotime("next year")).' to the 2nd of January '.date("Y",strtotime("next year")).' covers just one night. If you set this option to Yes, however, then the booking will cover entire days instead, so a booking on those days would cover both days and the customer would be billed for two days.');
define('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY','Per day');
define('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY','Per person per day');
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY','Pickup');
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY','Return');
define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY',"days(s) at");
define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY','Return date incorrect');
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY','The booking is too short. There needs to be at least this many days between the pickup and return dates:');
define('_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY','Pickup/Return minimum interval');
define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY','The mimimum interval in the booking form between the pickup and the drop off dates. An interval of 1 means that the pickup and return dates can be set to the same day, however this is still dependant on the minimum interval that\'s automatically calculated by the booking engine, as it checks tariffs that are valid for the booking period.');
define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY','Price summary and estimates should be priced as per day/per week/per month?');
define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY','Per day');
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY','Days before the pickup date');
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY','The minimum number of days that must elapse, from "today", before the pickup date.');
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY','Set this to yes if you want to limit advance bookings (use the next field to set the limit in terms of days). If you do set this to yes then if the user tries to book more than n days in advance then their pickup date will be restored to today\'s date');
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY','Show return date input?');
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY',"Set this to No if you don't want to show the return date input box. Only use this if you know what you're doing, as the return date in bookings will always be set to the day after the pickup date.");

define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY','If you set this to Yes, then bookings will be taken for a fixed period. If this is set to No, then ensure that "defined pickup day" isn\'t set to Yes (unless you specifically want to force people to pickup on a certain day of the week) otherwise you will not get many links in the availability calendar.');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY','Pre-defined pickup day');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY','Only for sites offering fixed period bookings. Choose the day of the week that pickups must be made on.');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY','Fixed pickup day');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY','Fixed pickup dates recurr: ');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY','When fixed pickup dates are selected, the number of dates that can be shown in the dates dropdown list. Note that the list of dates will not include any dates if a booking is not possible due to prior bookings, and that the list will actually be twice as long as your selected number because it will have a similar number of historic dates (where available).');
define('_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY','Per person, per day');
define('_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY','Select Yes if you want to charge per-person-per-day. If no, then costs will be calculated on a per-resource-per-day basis');
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY','Variable deposits allow you to define if you\'d like to charge the full amount if the booking\'s pickup date is within N days from "today". Set this option to Yes to enable the feature, and enter the number of days below, so for example if the pickup day is within 60 days, then the deposit amount charged will be the full amount, otherwise the amount will be based on the deposit options configured above.');
define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY','Most businesses will recalculate resource prices based on the number of resources of a required type that are available on a given date. This allows them to offer discounts on a resource/business type that isn\'t busy during a given period with the aim of attracting business that might otherwise be missed.<br/>Enabling and configuring this plugin allows you to offer adjustable pricing based on the number of resources of a selected type are available in the business on a given day.<br/> The days threshold defines the number of days that the pickup date must be within before resource prices are adjusted by this feature, then the percentages options allow you to configure the percentage of resources that can be available before a given discount is applied. Note however, if multiple resources are booked then the current level of discount will be applied to all resources and will not reduce as more resources are selected.');
define('_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY','Threshold (number of days between pickup date and today)');
define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY','Pickup Pending');
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY','Pickup today');
define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY','Picked up');
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY','Returns today');
define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY','Return overdue');
define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY','Has not picked up');
define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY','Days');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY','Mark a booking picked up.');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY','Mark a booking returned.');
define('_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY','Mark a booking picked up');
define('_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY','Mark a booking returned');
define('_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY','Cost per day: ');
define('_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY','Number of days: ');

define('_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL','Override Accommodation Total');
define('_JOMCOMP_AMEND_OVERRIDE_SAVE','Save override');

define('_JOMRES_BOOKINGFORMWIDTH','Booking form width in px');
define('_JOMRES_BOOKINGORM_SLIDERENABLED','Allow the totals panel to slide down the booking form?');
define('_JOMRES_BOOKINGORM_SLIDERENABLED_DESC','The totals panel will slide down the booking form as the user scrolls down. You can enable/disable this feature with this switch. Note, if the user visits via a mobile device\'s browser then sliding is automatically disabled.');

define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS','Email new users their login details?');
define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC','If the Create New User option is set to Yes, you can set this option to No to ensure that they are not emailed their login details once the user has been created. This might be useful if you are automatically adding new users to a mailing list, for example, and do not want users to actually log in.');
define('_JOMRES_BOOKINGORM_TAX_OUTPUT','Show tax output in the booking form totals summary?');
define('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC','Prevent the booking form from showing the tax price fields in the totals summary by setting this option to No.');
define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD','Cancellation Threashold');
define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC','Logged in, registered guests can cancel their own bookings. Here you can set the threashold, in days, where the booking cannot be cancelled after a certain number of days before the arrival date.');

define('_JOMRES_EDIT_PROFILE','Edit Profile');
define('_JOMRES_PROPERTY_TYPE_ASSIGNMENT','Property type relationship');
define('_JOMRES_IMAGE','Image');
define('_JOMRES_FEATURE_PROPERTY_TYPE_ASSIGNMENT','Business types that can show this feature');
define('_JOMRES_CRATES_CLICKINITIAL','Click on a letter to show all businesses with that first character. Once you have a list of properties you can assign commission rates to those properties, or click on their "edit" icon to view the business\'s statistics.');
define('_JRPORTAL_TAX_RATE_EDIT',"Edit Tax rate");

define('_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT',"Edit Custom field");

define('_JOMRES_LICENSESERVER_PASSWORD',"License server password");
define('_JOMRES_LICENSESERVER_USERNAME',"License server username");
define('_JOMRES_LICENSESERVER_USERNAME_DESC',"If you have a username and password on the license server, please enter them here. This will help you to access plugins that you are entitled to. If you have entered a valid Support key in the field above, then it is not necessary to supply the username/password here.");

define('_JOMRES_VERSIONCHECK_THISJOMRESVERSION',"This Jomres version : ");
define('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION',"Latest Jomres version");
define('_JOMRES_VERSIONCHECK_VERSIONWARNING',"Alert : There is a new version of Jomres available, you are advised to upgrade at your earliest convenience.");

define('_JOMRES_PRODUCT_INFORMATION','Welcome to Jomres, we hope you enjoy using Joomla\'s favourite booking system. If you would like to purchase a Jomres Silver or Jomres Gold license, <a href="http://www.jomres.net/prices" target="_blank"> please visit our site</a> for information on how you can upgrade.');
define('_JOMRES_PRODUCT_INFORMATION2','This system is ideal for any scenario, be it a simple booking form for a single property, right up to a site that has multiple users, in multiple languages, with multiple properties. Please see the "Help" section to the left, including the "Getting Started" page which will guide you through your first steps.');

define('_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY',"Active property");
define('_JOMRES_ROBBED_PORTALUI_SWITCH_PROPERTY',"Change your active property");
define('_JOMRES_ROBBED_PORTALUI_CLICKINITIAL',"Click a character to reveal all properties that start with that character. Once revealed, click on that property's name to change it to your active property.");

define('_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE',"Alternate SMTP Settings");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_DESC',"Set this option to Yes to use these Alternate SMTP settings. An increasing number of web hosts appear to be blocking PHP mail functionality, so you can choose to over-ride the mail settings that Jomres adopts from your host CMS (typically Joomla) and use settings of your own choice here.");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST',"Alternate Host");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC',"Change this to your smtp mail server");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT',"Alternate Port");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC',"Change this to your smtp port");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL',"Alternate Protocol");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC',"Depending on your smtp server settings, you need to leave this blank, or enter 'ssl' or 'tls'. Ask your SMTP provider if you don`t know.");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH',"Use authentication");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC',"If your SMTP server requires clients to login, set this to Yes. The Username and Password will then be used.");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME',"Alternate Username");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC',"");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD',"Alternate Password");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC',"");

define('_JOMRES_WARNING_SYSTEM_CACHE',"Warning : We have detected that your Joomla System Cache plugin is enabled. We advise you to disable this plugin as it will cache the ajax responses to the booking form, causing your system to behave erratically.");

define('_JOMRES_QUICK_INFO',"Quick Info");

define('_JOMRES_MENU_SHOW',"Show");
define('_JOMRES_MENU_HIDE',"Hide");
define('_JOMRES_MENU_SHOW_TITLE',"Use the alternate menu layout?");
define('_JOMRES_MENU_SHOW_DESC',"Set this to Yes to use the Alternate menu option in the frontend. When set to No the Jomres Main Menu shows as an accordion on the left of the page, with a button to enlarge the menu. When set to Yes, the Alternate Main Menu is used, which results in a menubar across the top of the page. Both menus will slide with the user, and the Accordion menu is considered to be the better menu, however if you find that it's not appropriate for you, you're free to choose the alternate. If neither of these menus suit you, then you will need to modify mainmenu_wrapper.html and mainmenu_options.html to suit your specific set of requirements.");


define('_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT',"Default");
define('_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY',"Anybody");
define('_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED',"Registered");
define('_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER',"Manager");
define('_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER',"Super Manager");
define('_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY',"Nobody");

define('_JOMRES_ACCESS_CONTROL_TITLE',"Menu Access control");
define('_JOMRES_ACCESS_CONTROL_DESC',"This feature allows you to control who will be able to see a plugin in the main menu. Typically user options 00009 are viewable by either/or unregistered site visitors, 00010 options generally refer to Reception type activites that are used on a day to day basis, whereas 00011 options are used for setting up and configuring a property but are accessed less often.");

define('_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST',"Receptionist");
define('_JOMRES_ACCESS_CONTROL_CONFIG_TITLE',"Full Access Control");
define('_JOMRES_ACCESS_CONTROL_CONFIG_DESC',"Set this option to Yes to enable the full access control feature, then visit the Access Control option under System Maintenance to configure access controls.");

define('_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM',"Note, however, this these settings do not control the underlying scripts that they connect to, so for example if you set <i>00009user_option_03_search</i> to 'Manager' a user who knows Jomres can still call j06000search.class.php by entering http://www.domain.com/index.php?option=com_jomres&task=search in their browser's address bar. This is intentional, as this Menu Access control simply controls what can be seen in the Jomres Main Menu. If you need tighter controls then set the Site Config -> Full Access Control option to Yes and revisit the Menu Access Control option.");
define('_JOMRES_ACCESS_CONTROL_TITLE_FULL',"Full Access control");
define('_JOMRES_ACCESS_CONTROL_DESC_FULL',"<strong>This feature is for advanced users only. If you do not know what it is for, and don't have a specific reason to use it, please return to Site Configuration and set the Full Access Control option to No.</strong><br/>
	This feature allows you to control who can access which minicomponents (with some exceptions that are hard coded into the system). If the access level next to a script's name is set to Default, then with the Full Access Control option set to Yes <strong>anybody</strong> can access scripts that they should not be able to access therefore if you intend to use this feature you MUST set the access control level for <strong>every</strong> Jomres minicomponent listed here. If you do not know what these minicomponents do, then we strongly advise you to not use this feature at all.<br/>
	In Jomres access levels follow a pyramid, so Super Property Managers are greater than Managers. In short Super Manager > Manager > Receptionist > Registered > Unregistered. So, if a Registered user has access to a minicomponent, so do Receptionists,  Managers and Super Managers.<br/>
	Note that you cannot control administrator area minicomponents. Anybody in the administrator area is considered to be a trusted user in that they should not be blocked from accessing any script (especially this one).
	");
define('_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING',"Warning! You have full access control enabled, however we have counted the access control settings and compared them to the number of minicomponents that should be controlled, and the two do not match up, therefore you may have some scripts that are not controlled. This could be a security issue and you are urged to resolve this at once by visiting the Access Control feature and checking that the appropriate levels have been applied.");

define('_JOMRES_SHOWPROFILES_USERSWITHACCESS',"Users with admin rights to this property");
define('_JOMRES_ADMIN_LISTALLUSERSINVOICES',"List all user's invoices");


define('_JOMRES_DEBUGGING_SUBJECT','Subject');
define('_JOMRES_DEBUGGING_FULLNAME','Your full name');
define('_JOMRES_DEBUGGING_YOUREMAIL','Your email address');
define('_JOMRES_DEBUGGING_ISSUE','Please describe your issue');
define('_JOMRES_EXTRAS_MODELS_MODEL','Model');
define('_JOMRES_EXTRAS_MODELS_PARAMS','Parameters');
define('_JOMRES_EXTRAS_MODELS_FORCE','Force');
define('_JOMRES_METATITLE','Meta title');
define('_JOMRES_METADESCRIPTION','Meta description');
define('_JOMRES_FOUNDPROPERTIES',"Properties found");
define('_JOMRES_REGISTRATION_STEP_1_OF_2',"Add your property : Step 1 of 2");
define('_JOMRES_REGISTRATION_STEP_2_OF_2',"Add your property : Step 2 of 2");

define('_JOMRES_MYPROPERTIES','My properties');


define('_JOMRES_CART_TITLE','My proposed bookings');
define('_JOMRES_CART_INFO','Note, these bookings have not been saved yet. If you log out or your session expires they will be lost. Remember to confirm your bookings!');
define('_JOMRES_CART_CONFIRM_BOOKINGS','Confirm booking(s)');
define('_JOMRES_CART_OR',' or ');
define('_JOMRES_CART_SAVEFORLATER','Save for later');
define('_JOMRES_CART_NOBOOKINGS_SAVED','You don\'t have any bookings saved yet.');
define('_JOMRES_CART_VIEWCART','View cart');

define('_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR','Language file subdirectory');

define('_JOMRES_DEFAULT_LAT_STARTPOINT','Default Latitude Startpoint');
define('_JOMRES_DEFAULT_LONG_STARTPOINT','Default Longitude Startpoint');
define('_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC','In the Google map on the property edit page, before the marker has been moved, what should the default latitude/longitude start points be?');

define('_JOMRES_CLEARDATES','I don\'t have any dates yet');

define('_JOMRES_MOBILE_REDIRECT','Redirect to frameless when on mobile devices?');
define('_JOMRES_MOBILE_REDIRECT_DESC','Jomres includes a feature that redirects a user to a view of Joomla that does not include modules and headers when it detects that the browser belongs to a mobile device. If you have a Joomla template that is already optimised for mobile devices, you can disable this feature by setting this option to No.');

define('_JOMRES_SYSTEM_EMAILS','Emails sent from which address?');
define('_JOMRES_SYSTEM_EMAILS_DESC',"Leave this option blank to disable it. Jomres will use the hotel's email address(es) when sending emails to guests, however your email service MAY not allow emails from arbitrary addresses (i.e. they only may allow emails from one authorised address). If this is the case, then you can use this input to enter an address which will be seen as the FROM address for all system emails.");

define('_JOMRES_CSS_CACHING_TITLE',"Use css caching?");
define('_JOMRES_CSS_CACHING_DESC',"");


define('_JOMRES_JSCALENDAR_USECLEARCHECKBOX',"Search calendars show the clear dates checkbox?");

define('_JOMRES_PROPERTYLIST_LAYOUT_LIST',"List view");
define('_JOMRES_PROPERTYLIST_LAYOUT_TILE',"Photo view");

define('_JOMRES_COMPARE',"Compare");
define('_JOMRES_REMOVE',"Remove");
define('_JOMRES_RETURN_TO_RESULTS',"Return to search results");

define('_JOMRES_ADDTOSHORTLIST',"Add to shortlist");
define('_JOMRES_REMOVEFROMSHORTLIST',"Remove from shortlist");
define('_JOMRES_VIEWSHORTLIST',"View your shortlist");

define('_JOMRES_COOKIEPOLICY_TITLE',"Cookie Policy");
define('_JOMRES_COOKIEPOLICY_DESC',"EU Legislation requires that all websites that use cookies request permission from site visitors to store cookies.
<br/>
Jomres uses the host CMS's cookie to construct it's own session file where information about the user's search results and other activities can be saved, to make the user's visit more pleasant. Whilst we believe that normal Jomres functionality is probably covered by provisions in the legislation defined as <i>'such storage or access is strictly necessary to provide an information society service requested by the subscriber or user'</i> (see http://www.ico.gov.uk/for_organisations/privacy_and_electronic_communications/the_guide/cookies.aspx) we have included this feature to give you the ability to prevent users from accessing pages other than search pages in the event that the user does not allow their cookie to be used in this way. <br/>
If enabled Jomres will show an 'opt-in' link where users can choose to have the cookie which is stored for them used in this way. If they do not choose to opt-in then Jomres will only show them some basic pages (like the properties details, show shortlist, search results etc). 
<br/>
Set this option to Yes to enact this policy.");

define('_JOMRES_COOKIEPOLICY_1',"Important: Cookie Policy");
define('_JOMRES_COOKIEPOLICY_2',"We use cookies to help keep our site relevant and easy to use.");
define('_JOMRES_COOKIEPOLICY_3',"Read more...");
define('_JOMRES_COOKIEPOLICY_4',"EU legislation requires that all websites clearly specify if cookies are being used and their purpose.");
define('_JOMRES_COOKIEPOLICY_5',"The search and booking engine of this site needs to be able to remember the options you have chosen to work at it's best. To do this it needs to store information which is associated with a small file called a \"cookie\" which uniquely identifies your browser, and for us to do that, you must agree that we can. If you do not accept this cookie policy then you will be severely limited in what you can do on this site.");
define('_JOMRES_COOKIEPOLICY_6',"Yes, I accept the use of cookies in this way.");

define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST','Deposit required is cost of the first night?');
define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC','Prices are calculated on a per night basis. Do you want the deposit to be one night\'s charge? If so, you can ignore the following options.');

define('_JOMRES_NOTHINGINSHORTLIST',"You haven't added any items to your shortlist.");

define('_JOMRES_MOBILE_SETTINGS',"Mobile device settings");
define('_JOMRES_SIMULATE_MOBILE',"Simulate mobile mode");
define('_JOMRES_SIMULATE_MOBILE_DESC',"Set this to yes to force Jomres to always switch to mobile view. Useful if you're developing templates that are for mobile devices. NOTE : You will need a mobile template plugin installed.");
define('_JOMRES_SIMULATE_MOBILE_RESTRICTION',"Simulation IP");
define('_JOMRES_SIMULATE_MOBILE_RESTRICTION_DESC',"You can configure the simulation setting to only come into force if the user's IP = xxx.xxx.xxx.xxx, so for example if you're developing on localhost, you would set the IP number to 127.0.0.1.");

define('_JOMRES_SAFEMODE',"Enable safe mode?");
define('_JOMRES_SAFEMODE_DESC',"Set this to Yes to trigger safe mode. This will disable all plugins so that Jomres will only use it's core functionality.");

define('_JOMRES_PRICE_ON_APPLICATION',"POA");

define('_JOMRES_USE_JOMRESEDITOR',"Use Jomres' WYSIWYG editor? (recommended)");
define('_JOMRES_USE_JOMRESEDITOR_DESC',"If you've enabled the WYSIWYG editor, you can choose to use the html editor(s) available for your CMS, or the one supplied with Jomres. This one is optimised for use by Property Managers and it is recommended that you choose to use it.");

define('COMMON_NEXT',"Next");
define('COMMON_CANCEL',"Cancel");
define('COMMON_SUBMIT',"Submit");
define('COMMON_SAVE',"Save");
define('COMMON_DELETE',"Delete");
define('COMMON_RETURN',"Return");
define('COMMON_CLOSE',"Close");
define('COMMON_BACK',"Back");

define('COMMON_HOME',"Home");

define('COMMON_NEW',"New");

define('COMMON_SEND',"Send");

define('RECAPTCHA_TITLE',"reCaptcha");
define('RECAPTCHA_INFO',"Captcha is used to ensure that the client using web forms is a human being, and is used to prevent Property Managers from being \"spammed\" by robots on the internet. To use the Contact Us form in Jomres you will need to register at <a href=\"http://www.google.com/recaptcha\" target=\"_blank\">the Google reCaptcha</a> home page and set your domain to receive your public and private keys. When you have received those keys, please enter them below. The reCapcha service is a free service provided by Google.");
define('RECAPTCHA_PUBLIC_KEY',"Public key");
define('RECAPTCHA_PRIVATE_KEY',"Private key");


define('_JOMRES_BOOKINGFORM_LOCK_TITLE',"Lockfile timeout");
define('_JOMRES_BOOKINGFORM_LOCK_DESC',"To prevent the danger of guests double booking rooms Jomres uses a lockfile to prevent a room from being added to the available rooms list in the booking form if somebody else has already added the room to theirs for the same dates. By default this lock will time out in 3600 seconds, or one hour. You can change the time it takes to expire this lock by changing this figure.");


define('_JOMRES_BOOTSTRAPSWITCH',"Enable Twitter Bootstrap templates");
define('_JOMRES_BOOTSTRAPSWITCH_DESC',"Joomla 2.5 only option. Setting this to Yes will tell Jomres to use it's bootstrap templates (frontend only). In Joomla 3 this option will be hidden and the switch is done automatically.");
