<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Gosodiadau',
    'settings_save' => 'Cadw Gosodiadau',
    'system_version' => 'Fersiwn System',
    'categories' => 'Categorïau',

    // App Settings
    'app_customization' => 'Addasiad',
    'app_features_security' => 'Nodweddion & Diogelwch',
    'app_name' => 'Enw\'r Rhaglen',
    'app_name_desc' => 'Dangosir yr enw hwn yn y pennawd ac mewn unrhyw negeseuon e-bost a anfonir gan y system.',
    'app_name_header' => 'Dangos enw yn y pennyn',
    'app_public_access' => 'Mynediad Cyhoeddus',
    'app_public_access_desc' => 'Bydd galluogi\'r opsiwn hwn yn caniatáu i ymwelwyr, nad ydynt wedi mewngofnodi, gael mynediad at gynnwys yn achos BookStack.',
    'app_public_access_desc_guest' => 'Gellir rheoli mynediad i ymwelwyr cyhoeddus trwy\'r defnyddiwr "Gwestai".',
    'app_public_access_toggle' => 'Caniatáu mynediad i\'r cyhoedd',
    'app_public_viewing' => 'Caniatáu i\'r cyhoedd weld?',
    'app_secure_images' => 'Uwchlwytho Delwedd Diogelwch Uwch',
    'app_secure_images_toggle' => 'Galluogi uwchlwytho delwedd diogelwch uwch',
    'app_secure_images_desc' => 'Am resymau perfformiad, mae\'r holl ddelweddau yn gyhoeddus. Mae\'r opsiwn hwn yn ychwanegu llinyn ar hap, anodd ei ddyfalu o flaen urls delwedd. Sicrhau nad yw mynegeion cyfeiriadur yn cael eu galluogi i atal mynediad hawdd.',
    'app_default_editor' => 'Golygydd Tudalen Diofyn',
    'app_default_editor_desc' => 'Dewiswch pa olygydd fydd yn cael ei ddefnyddio yn ddiofyn wrth olygu tudalennau newydd. Gellir diystyru hyn ar lefel tudalen os yw’r caniatâd yn galluogi hyn.',
    'app_custom_html' => 'Cynnwys Pen HTML wedi’i deilwra',
    'app_custom_html_desc' => 'Bydd unrhyw gynnwys a ychwanegir yma yn cael ei fewnosod i waelod yr adran <head> ar bob tudalen. Mae hyn yn ddefnyddiol ar gyfer diystyru arddulliau neu ychwanegu cod dadansoddeg.',
    'app_custom_html_disabled_notice' => 'Mae cynnwys pen HTML wedi\'i deilwra wedi’i analluogi ar y dudalen gosodiadau hon i sicrhau y gellir troi unrhyw newidiadau toriadol yn ôl.',
    'app_logo' => 'Logo’r Rhaglen',
    'app_logo_desc' => 'Defnyddir hwn ym mar pennawd y rhaglen, ymhlith ardaloedd eraill. Dylai\'r ddelwedd hon fod yn 86px o uchder. Bydd delweddau mawr yn cael eu graddio i lawr.',
    'app_icon' => 'Eicon yr Ap',
    'app_icon_desc' => 'Defnyddir yr eicon hwn ar gyfer tabiau porwr ac eiconau llwybr byr. Dylai hwn fod yn ddelwedd PNG sgwâr 256px.',
    'app_homepage' => 'Hafan y Rhaglen',
    'app_homepage_desc' => 'Dewiswch wedd i\'w dangos ar yr hafan yn hytrach na\'r wedd ddiofyn. Anwybyddir caniatâd tudalen ar gyfer tudalennau dethol.',
    'app_homepage_select' => 'Dewiswch dudalen',
    'app_footer_links' => 'Dolenni Troedynnau',
    'app_footer_links_desc' => 'Ychwanegwch ddolenni i\'w dangos o fewn troedyn y safle. Bydd y rhain yn cael eu harddangos ar waelod y rhan fwyaf o dudalennau, gan gynnwys y rhai nad oes angen mewngofnodi. Gallwch ddefnyddio label "trans::<key> i ddefnyddio cyfieithiadau wedi\'u diffinio gan y system. Er enghraifft: Bydd defnyddio "trans::common.privacy_policy" yn darparu\'r testun wedi’i gyfieithu "Polisi Preifatrwydd" a "trans::common.terms_of_service" yn darparu\'r testun wedi’i gyfieithu "Telerau Gwasanaeth".',
    'app_footer_links_label' => 'Label Dolen',
    'app_footer_links_url' => 'URL Dolen',
    'app_footer_links_add' => 'Ychwanegu Dolen Troedyn',
    'app_disable_comments' => 'Analluogi Sylwadau',
    'app_disable_comments_toggle' => 'Analluogi sylwadau',
    'app_disable_comments_desc' => 'Analluogi sylwadau ar draws pob tudalen yn y rhaglen. <br> Nid yw\'r sylwadau presennol yn cael eu dangos.',

    // Color settings
    'color_scheme' => 'Cynllun Lliw’r Rhaglen',
    'color_scheme_desc' => 'Gosodwch y lliwiau i\'w defnyddio yn rhyngwyneb defnyddiwr y rhaglen. Gellir ffurfweddu lliwiau ar wahân ar gyfer moddau tywyll a golau i gyd-fynd â\'r thema orau a sicrhau ei fod yn ddarllenadwy.',
    'ui_colors_desc' => 'Gosodwch liw sylfaenol y rhaglen a’r lliw diofyn y ddolen. Defnyddir y lliw sylfaenol yn bennaf ar gyfer baner y pennyn, y botymau ac addurniadau rhyngwyneb. Defnyddir lliw diofyn y ddolen ar gyfer dolenni a chamau gweithredu testun, o fewn cynnwys ysgrifenedig ac yn rhyngwyneb y rhaglen.',
    'app_color' => 'Prif Liw',
    'link_color' => 'Lliw Diofyn y Ddolen',
    'content_colors_desc' => 'Gosodwch liwiau ar gyfer pob elfen yn hierarchaeth trefn y dudalen. Argymhellir dewis lliwiau â disgleirdeb tebyg i\'r lliwiau diofyn ar gyfer darllenadwyedd.',
    'bookshelf_color' => 'Lliw Silff',
    'book_color' => 'Lliw Llyfr',
    'chapter_color' => 'Lliw Pennod',
    'page_color' => 'Lliw Tudalen',
    'page_draft_color' => 'Lliw Tudalen Ddrafft',

    // Registration Settings
    'reg_settings' => 'Cofrestriad',
    'reg_enable' => 'Galluogi Cofrestru',
    'reg_enable_toggle' => 'Galluogi cofrestru',
    'reg_enable_desc' => 'Pan fydd cofrestru wedi\'i alluogi bydd modd i ddefnyddwyr gofrestru fel defnyddwyr y rhaglen. Wrth gofrestru maent yn cael un rôl defnyddiwr diofyn.',
    'reg_default_role' => 'Rôl defnyddiwr diofyn ar ôl cofrestru',
    'reg_enable_external_warning' => 'Anwybyddir y dewis uchod tra bod dilysu LDAP neu SAML allanol yn weithredol. Bydd cyfrifon defnyddwyr ar gyfer aelodau nad ydynt yn bodoli yn cael eu creu\'n awtomatig os bydd dilysiad, yn erbyn y system allanol sy\'n cael ei defnyddio, yn llwyddiannus.',
    'reg_email_confirmation' => 'Cadarnhad E-bost',
    'reg_email_confirmation_toggle' => 'Angen cadarnhad e-bost',
    'reg_confirm_email_desc' => 'Os defnyddir cyfyngiad parth, bydd angen cadarnhad e-bost a bydd yr opsiwn hwn yn cael ei anwybyddu.',
    'reg_confirm_restrict_domain' => 'Cyfyngiad Parth',
    'reg_confirm_restrict_domain_desc' => 'Rhowch restr wedi\'i gwahanu gan goma o barthau e-bost yr hoffech gyfyngu cofrestriad iddynt. Bydd defnyddwyr yn cael e-bost i gadarnhau eu cyfeiriad cyn cael caniatâd i ryngweithio â\'r rhaglen. <br> Noder y bydd modd i ddefnyddwyr newid eu cyfeiriadau e-bost ar ôl cofrestru\'n llwyddiannus.',
    'reg_confirm_restrict_domain_placeholder' => 'Ni osodwyd cyfyngiad',

    // Maintenance settings
    'maint' => 'Cynnal',
    'maint_image_cleanup' => 'Glanhau Delweddau',
    'maint_image_cleanup_desc' => 'Sganio tudalennau a chynnwys adolygu i wirio pa ddelweddau a darluniau sy\'n cael eu defnyddio ar hyn o bryd a pha ddelweddau sy\'n cael eu diddymu. Gwnewch yn siŵr eich bod yn creu cronfa ddata lawn a chopi wrth gefn o’r ddelwedd cyn rhedeg hwn.',
    'maint_delete_images_only_in_revisions' => 'Hefyd dilëwch ddelweddau sydd ond yn bodoli mewn dhen dudalennau',
    'maint_image_cleanup_run' => 'Rhedeg Glanhau',
    'maint_image_cleanup_warning' => 'Daethpwyd o hyd i :count o ddelweddau nas defnyddiwyd o bosibl. Ydych chi\'n siŵr eich bod eisiau dileu’r delweddau hyn?',
    'maint_image_cleanup_success' => 'daethpwyd o hyd i :count o ddelweddau nas defnyddiwyd o bosibl a chawsant eu dileu!',
    'maint_image_cleanup_nothing_found' => 'Daethpwyd o hyd i ddim ddelweddau, Dim byd wedi\'i dileu!',
    'maint_send_test_email' => 'Anfon E-bost Prawf',
    'maint_send_test_email_desc' => 'Mae hyn yn anfon e-bost prawf i\'ch cyfeiriad e-bost a nodir yn eich proffil.',
    'maint_send_test_email_run' => 'Anfon e-bost prawf',
    'maint_send_test_email_success' => 'Anfonwyd e-bost at :address',
    'maint_send_test_email_mail_subject' => 'E-bost Prawf',
    'maint_send_test_email_mail_greeting' => 'Mae\'n ymddangos bod anfon e-bost yn gweithio!',
    'maint_send_test_email_mail_text' => 'Llongyfarchiadau! Gan eich bod wedi derbyn yr hysbysiad e-bost hwn, mae\'n ymddangos bod eich gosodiadau e-bost wedi\'u ffurfweddu\'n iawn.',
    'maint_recycle_bin_desc' => 'Caiff silffoedd, llyfrau, penodau a thudalennau wedi\'u dileu eu hanfon i’r bin ailgylchu fel y gellir eu hadfer neu eu dileu\'n barhaol. Bydd eitemau hŷn yn y bin ailgylchu yn cael eu dileu’n awtomatig ar ôl ychydig o bosibl, gan ddibynnu ar ffurfweddiad y system.',
    'maint_recycle_bin_open' => 'Agor y Bin Ailgylchu',
    'maint_regen_references' => 'Atgynhyrchu Cyfeiriadau',
    'maint_regen_references_desc' => 'Bydd y weithred hon yn ailadeiladu\'r mynegai cyfeirio traws-eitem yn y gronfa ddata. Fel arfer, caiff hyn ei drin yn awtomatig ond gall y weithred hon fod yn ddefnyddiol i fynegeio hen gynnwys neu gynnwys a ychwanegwyd trwy ddulliau answyddogol.',
    'maint_regen_references_success' => 'Mae’r mynegai cyfeirio wedi cael ei atgynhyrchu!',
    'maint_timeout_command_note' => 'Noder: Gall y weithred hon gymryd amser i redeg, a all arwain at faterion amseru mewn rhai amgylcheddau gwe. Fel dewis arall, cyflawnir y weithred hon gan ddefnyddio gorchymyn terfynell.',

    // Recycle Bin
    'recycle_bin' => 'Bin Ailgylchu',
    'recycle_bin_desc' => 'Yma gallwch adfer eitemau sydd wedi\'u dileu neu ddewis eu dileu yn barhaol oddi ar y system. Nid yw’r rhestr hon wedi’i hidlo yn wahanol i restrau gweithgaredd tebyg yn y system lle mae hidlwyr caniatâd yn cael eu cymhwyso.',
    'recycle_bin_deleted_item' => 'Eitem wedi\'i Dileu',
    'recycle_bin_deleted_parent' => 'Rhiant',
    'recycle_bin_deleted_by' => 'Dilëwyd gan',
    'recycle_bin_deleted_at' => 'Amser Dileu',
    'recycle_bin_permanently_delete' => 'Dileu yn Barhaol',
    'recycle_bin_restore' => 'Adfer',
    'recycle_bin_contents_empty' => 'Mae\'r bin ailgylchu yn wag ar hyn o bryd',
    'recycle_bin_empty' => 'Gwagio’r Bin Ailgylchu',
    'recycle_bin_empty_confirm' => 'Bydd hyn yn dileu pob eitem yn y bin ailgylchu yn barhaol gan gynnwys popeth sydd wedi\'i gynnwys ym mhob eitem. Ydych chi\'n siŵr eich bod am wagio’r bin ailgylchu?',
    'recycle_bin_destroy_confirm' => 'Bydd y weithred hon yn dileu\'r eitem hon o\'r system yn barhaol, ynghyd ag unrhyw elfennau plentyn a restrir isod, ac ni fyddwch yn gallu adfer y cynnwys hwn. Ydych chi\'n siŵr eich bod eisiau dileu\'r eitem hon yn barhaol?',
    'recycle_bin_destroy_list' => 'Eitemau i\'w Dinistrio',
    'recycle_bin_restore_list' => 'Eitemau i\'w Hadfer',
    'recycle_bin_restore_confirm' => 'Bydd y weithred hon yn adfer yr eitem a ddilëwyd, gan gynnwys unrhyw elfennau plentyn, i\'w lleoliad gwreiddiol. Os yw\'r lleoliad gwreiddiol wedi\'i ddileu ers hynny, a’i fod bellach yn y bin ailgylchu, bydd angen adfer yr eitem riant hefyd.',
    'recycle_bin_restore_deleted_parent' => 'Mae rhiant yr eitem hon hefyd wedi\'i dileu. Bydd y rhain yn parhau i fod wedi’u dileu nes bod y rhiant hwnnw hefyd yn cael ei adfer.',
    'recycle_bin_restore_parent' => 'Adfer Rhiant',
    'recycle_bin_destroy_notification' => 'Dilëwyd cyfanswm o :count o eitemau o\'r bin ailgylchu.',
    'recycle_bin_restore_notification' => 'Adferwyd cyfanswm o :count o eitemau o\'r bin ailgylchu.',

    // Audit Log
    'audit' => 'Log Awdit',
    'audit_desc' => 'Mae\'r cofnod archwilio hwn yn dangos rhestr o weithgareddau sydd wedi\'u holrhain yn y system. Nid yw’r rhestr hon wedi’i hidlo yn wahanol i restrau gweithgaredd tebyg yn y system lle mae hidlwyr caniatâd yn cael eu cymhwyso.',
    'audit_event_filter' => 'Hidlydd Digwyddiad',
    'audit_event_filter_no_filter' => 'Dim Fidlydd',
    'audit_deleted_item' => 'Eitem wedi\'i Dileu',
    'audit_deleted_item_name' => 'Enw: :name',
    'audit_table_user' => 'Defnyddiwr',
    'audit_table_event' => 'Digwyddiad',
    'audit_table_related' => 'Eitem neu Fanylion Cysylltiedig',
    'audit_table_ip' => 'Cyfeiriad IP',
    'audit_table_date' => 'Dyddiad Gweithgaredd',
    'audit_date_from' => 'Amrediad Dyddiad O',
    'audit_date_to' => 'Amrediad Dyddiad Tan',

    // Role Settings
    'roles' => 'Rolau',
    'role_user_roles' => 'Rolau Defnyddiwr',
    'roles_index_desc' => 'Defnyddir rolau i grwpio defnyddwyr a rhoi caniatâd system i\'w haelodau. Pan fydd defnyddiwr yn aelod o sawl rôl, bydd y breintiau a roddir yn pentyrru a bydd y defnyddiwr yn etifeddu pob gallu.',
    'roles_x_users_assigned' => ':count defnyddiwr wedi\'u clustnodi|:count o ddefnyddwyr wedi\'u clustnodi',
    'roles_x_permissions_provided' => ':count caniatâd|:count caniatâd',
    'roles_assigned_users' => 'Clustnodi Defnyddwyr',
    'roles_permissions_provided' => 'Darparu Caniatâd',
    'role_create' => 'Creu Rôl Newydd',
    'role_delete' => 'Dileu Rôl',
    'role_delete_confirm' => 'Bydd hyn yn dileu\'r rôl gyda\'r enw \':roleName\'.',
    'role_delete_users_assigned' => 'Mae gan y rôl hon :userCount o ddefnyddwyr wedi’u clustnodi iddi. Os hoffech chi fudo\'r defnyddwyr o\'r rôl hon dewiswch rôl newydd isod.',
    'role_delete_no_migration' => "Peidiwch â mudo defnyddwyr",
    'role_delete_sure' => 'Wyt ti\'n bendant eisiau dileu\'r rôl hwn?',
    'role_edit' => 'Golygu Rôl',
    'role_details' => 'Manylion Rôl',
    'role_name' => 'Enw Rôl',
    'role_desc' => 'Disgrifiad Byr o’r Rôl',
    'role_mfa_enforced' => 'Angen Dilysu Aml-Ffactor',
    'role_external_auth_id' => 'ID Dilysu Allanol',
    'role_system' => 'Caniatâd System',
    'role_manage_users' => 'Rheoli defnyddwyr',
    'role_manage_roles' => 'Rheoli rolau & chaniatâd rolau',
    'role_manage_entity_permissions' => 'Rheoli caniatâd pob llyfr, pennod a thudalen',
    'role_manage_own_entity_permissions' => 'Rheoli caniatâd eich llyfr, pennod a thudalennau eich hun',
    'role_manage_page_templates' => 'Rheoli templedi tudalen',
    'role_access_api' => 'Mynediad i Ryngwyneb Rhaglennu Cymwysiadau (API) system',
    'role_manage_settings' => 'Rheoli gosodiadau apiau',
    'role_export_content' => 'Cynnwys allforio',
    'role_editor_change' => 'Newid golygydd tudalen',
    'role_notifications' => 'Derbyn a rheoli hysbysiadau',
    'role_asset' => 'Caniatâd Asedau',
    'roles_system_warning' => 'Byddwch yn ymwybodol y gall mynediad i unrhyw un o\'r tri chaniatâd uchod ganiatáu i ddefnyddiwr newid eu breintiau eu hunain neu freintiau eraill yn y system. Neilltuo rolau gyda\'r caniatâd hyn i ddefnyddwyr dibynadwy yn unig.',
    'role_asset_desc' => 'Mae\'r caniatâd hwn yn rheoli mynediad diofyn i\'r asedau o fewn y system. Bydd caniatâd ar Lyfrau, Penodau a Thudalennau yn diystyru\'r caniatâd hwn.',
    'role_asset_admins' => 'Mae gweinyddwyr yn cael mynediad awtomatig i\'r holl gynnwys ond gall yr opsiynau hyn ddangos neu guddio opsiynau UI.',
    'role_asset_image_view_note' => 'Mae hyn yn ymwneud â gwelededd o fewn y rheolwr delweddau. Bydd mynediad gwirioneddol i ffeiliau delwedd wedi\'u huwchlwytho yn dibynnu ar opsiwn storio delwedd y system.',
    'role_all' => 'Popeth',
    'role_own' => 'Meddu',
    'role_controlled_by_asset' => 'Wedi\'u rheoli gan yr ased y maent yn cael eu huwchlwytho iddo',
    'role_save' => 'Cadw Rôl',
    'role_users' => 'Defnyddwyr yn y rôl hon',
    'role_users_none' => 'Nid oes unrhyw ddefnyddwyr wedi’u neilltuo i\'r rôl hon ar hyn o bryd',

    // Users
    'users' => 'Defnyddwyr',
    'users_index_desc' => 'Creu a rheoli cyfrifon defnyddwyr unigol o fewn y system. Defnyddir cyfrifon defnyddwyr ar gyfer mewngofnodi a phriodoli cynnwys a gweithgaredd. Mae caniatâd mynediad yn seiliedig ar rôl yn bennaf ond gall perchenogaeth cynnwys defnyddwyr, ymhlith ffactorau eraill, hefyd effeithio ar ganiatâd a mynediad.',
    'user_profile' => 'Proffil Defnyddiwr',
    'users_add_new' => 'Ychwanegu Defnyddiwr Newydd',
    'users_search' => 'Chwilio Defnyddwyr',
    'users_latest_activity' => 'Gweithgaredd Diweddaraf',
    'users_details' => 'Manylion Defnyddiwr',
    'users_details_desc' => 'Gosodwch enw arddangos a chyfeiriad e-bost ar gyfer y defnyddiwr hwn. Bydd y cyfeiriad e-bost yn cael ei ddefnyddio ar gyfer mewngofnodi i’r cais.',
    'users_details_desc_no_email' => 'Gosodwch enw arddangos ar gyfer y defnyddiwr hwn fel y gall eraill eu hadnabod.',
    'users_role' => 'Rolau Defnyddiwr',
    'users_role_desc' => 'Dewiswch ba rolau a neilltuir i’r defnyddiwr hwn. Os yw defnyddiwr yn cael ei neilltuo i rolau lluosog, bydd y caniatâd o\'r rolau hynny yn pentyrru a byddant yn derbyn pob gallu o\'r rolau a neilltuwyd.',
    'users_password' => 'Cyfrinair Defnyddiwr',
    'users_password_desc' => 'Gosodwch gyfrinair a ddefnyddir i fewngofnodi i\'r rhaglen. Rhaid i gyfrineiriau fod yn 8 nod o leiaf.',
    'users_send_invite_text' => 'Gallwch ddewis anfon e-bost gwahoddiad i\'r defnyddiwr hwn sy\'n caniatáu iddynt osod eu cyfrinair eu hunain neu gallwch osod eu cyfrinair eich hun.',
    'users_send_invite_option' => 'Anfon e-bost gwahodd i’r defnyddiwr',
    'users_external_auth_id' => 'External Authentication ID',
    'users_external_auth_id_desc' => 'Pan fydd system ddilysu allanol yn cael ei defnyddio (megis SAML2, OIDC neu LDAP) dyma\'r ID sy\'n cysylltu\'r defnyddiwr BookStack hwn â\'r cyfrif system ddilysu. Gallwch anwybyddu\'r maes hwn os ydych chi\'n defnyddio\'r dilysiad diofyn e-bost.',
    'users_password_warning' => 'Llenwch y canlynol os hoffech newid y cyfrinair ar gyfer y defnyddiwr hwn yn unig.',
    'users_system_public' => 'Mae\'r defnyddiwr hwn yn cynrychioli unrhyw westeion sy\'n ymweld â\'ch enghraifft. Ni ellir ei ddefnyddio i fewngofnodi ond mae\'n cael ei aseinio\'n awtomatig.',
    'users_delete' => 'Dileu Defnyddiwr',
    'users_delete_named' => 'Dileu defnyddiwr :userName',
    'users_delete_warning' => 'Bydd hyn yn dileu\'r defnyddiwr hwn yn llawn gyda\'r enw \':userName\' o\'r system.',
    'users_delete_confirm' => 'Ydych chi\'n siŵr eich bod eisiau dileu’r defnyddiwr hwn?',
    'users_migrate_ownership' => 'Mudo Perchnogaeth',
    'users_migrate_ownership_desc' => 'Dewiswch ddefnyddiwr yma os ydych chi am i ddefnyddiwr arall ddod yn berchennog ar yr holl eitemau sy\'n eiddo i\'r defnyddiwr hwn ar hyn o bryd.',
    'users_none_selected' => 'Ni ddewiswyd defnyddiwr',
    'users_edit' => 'Golygu Defnyddiwr',
    'users_edit_profile' => 'Golygu Proffil',
    'users_avatar' => 'Afatar Defnyddiwr',
    'users_avatar_desc' => 'Dewiswch ddelwedd i gynrychioli\'r defnyddiwr hwn. Dylai hwn fod yn ddelwedd sgwâr tua 256px.',
    'users_preferred_language' => 'Dewis Iaith',
    'users_preferred_language_desc' => 'Bydd yr opsiwn hwn yn newid yr iaith a ddefnyddir ar gyfer rhyngwyneb defnyddiwr y rhaglen. Ni fydd hyn yn effeithio ar unrhyw gynnwys a grëwyd gan y defnyddiwr.',
    'users_social_accounts' => 'Cyfrifon Cymdeithasol',
    'users_social_accounts_desc' => 'Gweld statws y cyfrifon cymdeithasol cysylltiedig ar gyfer y defnyddiwr hwn. Gellir defnyddio cyfrifon cymdeithasol yn ychwanegol at y system ddilysu sylfaenol ar gyfer mynediad system.',
    'users_social_accounts_info' => 'Yma gallwch gysylltu eich cyfrifon eraill ar gyfer mewngofnodi cyflymach a haws. Nid yw datgysylltu cyfrif yma yn diddymu mynediad awdurdodedig blaenorol. Diddymu mynediad o\'ch gosodiadau proffil ar y cyfrif cymdeithasol cysylltiedig.',
    'users_social_connect' => 'Cysylltu Cyfrif',
    'users_social_disconnect' => 'Datgysylltu Cyfrif',
    'users_social_status_connected' => 'Wedi Cysylltu',
    'users_social_status_disconnected' => 'Wedi Datgysylltu',
    'users_social_connected' => 'Mae eich cyfrif :socialAccount wedi\'i gysylltu\'n llwyddiannus â\'ch proffil.',
    'users_social_disconnected' => 'Mae eich cyfrif :socialAccount wedi\'i ddatgysylltu\'n llwyddiannus o\'ch proffil.',
    'users_api_tokens' => 'Tocynnau API',
    'users_api_tokens_desc' => 'Creu a rheoli\'r tocynnau mynediad a ddefnyddir i ddilysu gyda\'r API BookStack REST. Rheolir caniatâd ar gyfer yr API trwy\'r defnyddiwr y mae\'r tocyn yn perthyn iddo.',
    'users_api_tokens_none' => 'Nid oes tocynnau API wedi\'u creu ar gyfer y defnyddiwr hwn',
    'users_api_tokens_create' => 'Creu Tocyn',
    'users_api_tokens_expires' => 'Yn dod i ben',
    'users_api_tokens_docs' => 'Dogfennaeth API',
    'users_mfa' => 'Dilysu Aml-Ffactor',
    'users_mfa_desc' => 'Gosod dilysu aml-ffactor fel haen ychwanegol o ddiogelwch ar gyfer eich cyfrif defnyddiwr.',
    'users_mfa_x_methods' => ':count dull wedi\'i ffurfweddu|:count dull wedi\'u ffurfweddu',
    'users_mfa_configure' => 'Ffurfweddu Dulliau',

    // API Tokens
    'user_api_token_create' => 'Creu Tocyn API',
    'user_api_token_name' => 'Enw',
    'user_api_token_name_desc' => 'Rhowch enw darllenadwy i\'ch tocyn i\'ch atgoffa o\'i bwrpas arfaethedig yn y dyfodol.',
    'user_api_token_expiry' => 'Dyddiad Dod i Ben',
    'user_api_token_expiry_desc' => 'Gosodwch ddyddiad pan fydd y tocyn hwn yn dod i ben. Ar ôl y dyddiad hwn, ni fydd ceisiadau a wneir gan ddefnyddio\'r tocyn hwn yn gweithio mwyach. Bydd gadael y maes hwn yn wag yn gosod dyddiad dod i ben 100 mlynedd i\'r dyfodol.',
    'user_api_token_create_secret_message' => 'Yn syth ar ôl creu\'r tocyn hwn bydd "ID tocyn" a "Chyfrinach Tocyn" yn cael eu cynhyrchu a\'u harddangos. Dim ond unwaith y bydd y gyfrinach yn cael ei dangos, felly gwnewch yn siŵr eich bod yn copïo\'r gwerth i rywle diogel cyn bwrw ymlaen.',
    'user_api_token' => 'Tocyn API',
    'user_api_token_id' => 'ID Tocyn',
    'user_api_token_id_desc' => 'Mae hwn yn ddynodwr a gynhyrchir gan y system na ellir ei olygu ar gyfer y tocyn hwn y bydd angen ei ddarparu mewn ceisiadau API.',
    'user_api_token_secret' => 'Cyfrinach Tocyn',
    'user_api_token_secret_desc' => 'Mae hwn yn gyfrinach a gynhyrchir gan y system ar gyfer y tocyn hwn y bydd angen ei ddarparu mewn ceisiadau API. Dim ond unwaith y bydd hyn yn cael ei arddangos, felly copïwch y gwerth hwn i rywle diogel.',
    'user_api_token_created' => 'Crëwyd tocyn :timeAgo',
    'user_api_token_updated' => 'Diweddarwyd tocyn :timeAgo',
    'user_api_token_delete' => 'Dileu Tocyn',
    'user_api_token_delete_warning' => 'Bydd hyn yn dileu\'r tocyn API hwn yn llawn gyda\'r enw \':tokenName\' o\'r system.',
    'user_api_token_delete_confirm' => 'Ydych chi\'n siŵr eich bod eisiau dileu’r tocyn API hwn?',

    // Webhooks
    'webhooks' => 'Gwe-fachau',
    'webhooks_index_desc' => 'Mae gwe-fachau’n ffordd o anfon data at URL allanol pan fydd rhai gweithredoedd a digwyddiadau yn digwydd o fewn y system sy\'n caniatáu integreiddio ar sail digwyddiadau gyda llwyfannau allanol megis systemau negeseuon neu hysbysu.',
    'webhooks_x_trigger_events' => ':count sbarduno digwyddiad|:count sbarduno digwyddiadau',
    'webhooks_create' => 'Creu Gwe-fachyn Newydd',
    'webhooks_none_created' => 'Nid oes unrhyw we-fachau wedi\'u creu eto.',
    'webhooks_edit' => 'Golygu Gwe-fachyn',
    'webhooks_save' => 'Cadw Gwe-fachyn',
    'webhooks_details' => 'Manylion Gwe-fachyn',
    'webhooks_details_desc' => 'Darparu enw defnyddiwr cyfeillgar a chyfeiriad POST fel lleoliad ar gyfer anfon y data gwe-fachyn iddo.',
    'webhooks_events' => 'Digwyddiadau Gwe-fachyn',
    'webhooks_events_desc' => 'Dewiswch yr holl ddigwyddiadau a ddylai sbarduno\'r gwe-fachyn hwn i gael ei alw.',
    'webhooks_events_warning' => 'Cadwch mewn cof y bydd y digwyddiadau hyn yn cael eu sbarduno ar gyfer yr holl ddigwyddiadau a ddewiswyd, hyd yn oed os rhoddir caniatâd arferol ar waith. Gwnewch yn siŵr na fydd defnyddio\'r gwe-fachyn hwn yn datgelu cynnwys cyfrinachol.',
    'webhooks_events_all' => 'Holl ddigwyddiadau\'r system',
    'webhooks_name' => 'Enw Gwe-fachyn',
    'webhooks_timeout' => 'Terfyn Amser Gwneud Cais Gwe-fachyn (Eiliadau)',
    'webhooks_endpoint' => 'Pwynt Terfyn Gwe-fachyn',
    'webhooks_active' => 'Gwe-fachyn Byw',
    'webhook_events_table_header' => 'Digwyddiadau',
    'webhooks_delete' => 'Dileu Gwe-fachyn',
    'webhooks_delete_warning' => 'Bydd hyn yn dileu\'r gwe-fachyn hwn yn llawn gyda\'r enw \':webhookName\', o\'r system.',
    'webhooks_delete_confirm' => 'Ydych chi\'n siŵr eich bod eisiau dileu’r gwe-fachyn hwn?',
    'webhooks_format_example' => 'Enghraifft Fformat Gwe-fachyn',
    'webhooks_format_example_desc' => 'Anfonir data Gwe-fachyn fel cais POST i\'r pwynt terfyn wedi\'i ffurfweddu fel JSON yn dilyn y fformat isod. Mae\'r nodweddion "related_item" ac "url" yn ddewisol a byddant yn dibynnu ar y math o ddigwyddiad a sbardunir.',
    'webhooks_status' => 'Statws Gwe-fachyn',
    'webhooks_last_called' => 'Galwyd Ddiwethaf:',
    'webhooks_last_errored' => 'Cafwyd Gwall Ddiwethaf:',
    'webhooks_last_error_message' => 'Neges Wall Ddiwethaf:',

    // Licensing
    'licenses' => 'Trwyddedau',
    'licenses_desc' => 'Mae\'r dudalen hon yn manylu ar wybodaeth am drwydded ar gyfer BookStack yn ychwanegol at y prosiectau a’r llyfrgelloedd a ddefnyddir o fewn BookStack. Dim ond mewn cyd-destun datblygu y gellir defnyddio llawer o’r prosiectau a restrir.',
    'licenses_bookstack' => 'Trwydded BookStack',
    'licenses_php' => 'Trwyddedau Llyfrgell PHP',
    'licenses_js' => 'Trwyddedau Llyfrgell JavaScript',
    'licenses_other' => 'Trwyddedau Eraill',
    'license_details' => 'Manylion y Drwydded',

    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English',
        'ar' => 'العربية',
        'bg' => 'Bǎlgarski',
        'bs' => 'Bosanski',
        'ca' => 'Català',
        'cs' => 'Česky',
        'cy' => 'Cymraeg',
        'da' => 'Dansk',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'el' => 'ελληνικά',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'et' => 'Eesti keel',
        'eu' => 'Euskara',
        'fa' => 'فارسی',
        'fi' => 'Suomi',
        'fr' => 'Français',
        'he' => 'עברית',
        'hr' => 'Hrvatski',
        'hu' => 'Magyar',
        'id' => 'Bahasa Indonesia',
        'it' => 'Italian',
        'ja' => '日本語',
        'ko' => '한국어',
        'lt' => 'Lietuvių Kalba',
        'lv' => 'Latviešu Valoda',
        'nb' => 'Norsk (Bokmål)',
        'nn' => 'Nynorsk',
        'nl' => 'Nederlands',
        'pl' => 'Polski',
        'pt' => 'Português',
        'pt_BR' => 'Português do Brasil',
        'ro' => 'Română',
        'ru' => 'Русский',
        'sk' => 'Slovensky',
        'sl' => 'Slovenščina',
        'sv' => 'Svenska',
        'tr' => 'Türkçe',
        'uk' => 'Українська',
        'uz' => 'O‘zbekcha',
        'vi' => 'Tiếng Việt',
        'zh_CN' => '简体中文',
        'zh_TW' => '繁體中文',
    ],
    //!////////////////////////////////
];
