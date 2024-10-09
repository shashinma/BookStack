<?php
/**
 * Text used for 'Entities' (Document Structure Elements) such as
 * Books, Shelves, Chapters & Pages
 */
return [

    // Shared
    'recently_created' => 'Legutóbb létrehozott',
    'recently_created_pages' => 'Legutóbb létrehozott oldalak',
    'recently_updated_pages' => 'Legutóbb frissített oldalak',
    'recently_created_chapters' => 'Legutóbb létrehozott fejezetek',
    'recently_created_books' => 'Legutóbb létrehozott könyvek',
    'recently_created_shelves' => 'Legutóbb létrehozott polcok',
    'recently_update' => 'Legutóbb frissített',
    'recently_viewed' => 'Legutóbb megtekintett',
    'recent_activity' => 'Legutóbbi tevékenység',
    'create_now' => 'Létrehozás most',
    'revisions' => 'Változatok',
    'meta_revision' => 'Változat #:revisionCount',
    'meta_created' => 'Létrehozva :timeLength',
    'meta_created_name' => ':user hozta létre :timeLength',
    'meta_updated' => 'Frissítve :timeLength',
    'meta_updated_name' => ':user frissítette :timeLength',
    'meta_owned_name' => ':user tulajdona',
    'meta_reference_count' => 'Hivatkozva a következő által: :count |Hivatkozva a következő által: :count',
    'entity_select' => 'Entitás kiválasztása',
    'entity_select_lack_permission' => 'Nincs meg a szükséges jogosultságod ennek az elemnek a kiválasztásához',
    'images' => 'Képek',
    'my_recent_drafts' => 'Legutóbbi vázlataim',
    'my_recently_viewed' => 'Általam legutóbb megtekintett',
    'my_most_viewed_favourites' => 'Legtöbbet Megtekintett Kedvencek',
    'my_favourites' => 'Kedvencek',
    'no_pages_viewed' => 'Még nincsenek általam megtekintett oldalak',
    'no_pages_recently_created' => 'Nincsenek legutóbb létrehozott oldalak',
    'no_pages_recently_updated' => 'Nincsenek legutóbb frissített oldalak',
    'export' => 'Exportálás',
    'export_html' => 'Webfájlt tartalmaz',
    'export_pdf' => 'PDF fájl',
    'export_text' => 'Egyszerű szövegfájl',
    'export_md' => 'Markdown jegyzetek',
    'default_template' => 'Alapértelmezett oldalsablon',
    'default_template_explain' => 'Rendeljen hozzá egy oldalsablont, amely alapértelmezett tartalomként lesz használva az ezen az elemen belül létrehozott összes oldalon. Ne feledje, hogy ezt csak akkor használja, ha az oldal készítője megtekintési hozzáféréssel rendelkezik a kiválasztott sablonoldalhoz.',
    'default_template_select' => 'Válasszon ki egy oldalsablont',

    // Permissions and restrictions
    'permissions' => 'Jogosultságok',
    'permissions_desc' => 'Itt állítsa be az engedélyeket a felhasználói szerepkörök által biztosított alapértelmezett engedélyek felülbírálásához.',
    'permissions_book_cascade' => 'A könyvekre beállított engedélyek automatikusan az alárendelt fejezetekhez és oldalakhoz kapcsolódnak, kivéve, ha saját engedélyekkel rendelkeznek.',
    'permissions_chapter_cascade' => 'A fejezetekre beállított engedélyek automatikusan az alárendelt oldalakra lépnek át, hacsak nem rendelkeznek saját engedélyekkel.',
    'permissions_save' => 'Jogosultságok mentése',
    'permissions_owner' => 'Tulajdonos',
    'permissions_role_everyone_else' => 'Mindenki más',
    'permissions_role_everyone_else_desc' => 'Állítson be engedélyeket az összes, kifejezetten nem felülírt szerepkörhöz.',
    'permissions_role_override' => 'A szerepkör engedélyeinek felülbírálása',
    'permissions_inherit_defaults' => 'Alapértelmezett értékek öröklése',

    // Search
    'search_results' => 'Keresési eredmények',
    'search_total_results_found' => ':count találat|összesen :count találat',
    'search_clear' => 'Keresés törlése',
    'search_no_pages' => 'Nincsenek a keresésnek megfelelő oldalak',
    'search_for_term' => ':term keresése',
    'search_more' => 'További eredmények',
    'search_advanced' => 'Részletes keresés',
    'search_terms' => 'Keresési kifejezések',
    'search_content_type' => 'Tartalomtípus',
    'search_exact_matches' => 'Pontos egyezések',
    'search_tags' => 'Címke keresések',
    'search_options' => 'Beállítások',
    'search_viewed_by_me' => 'Általam megtekintett',
    'search_not_viewed_by_me' => 'Általam nem megtekintett',
    'search_permissions_set' => 'Jogosultságok beállítva',
    'search_created_by_me' => 'Általam létrehozott',
    'search_updated_by_me' => 'Általam frissített',
    'search_owned_by_me' => 'Tulajdonomban lévő',
    'search_date_options' => 'Dátum beállítások',
    'search_updated_before' => 'Frissítve ez előtt',
    'search_updated_after' => 'Frissítve ez után',
    'search_created_before' => 'Létrehozva ez előtt',
    'search_created_after' => 'Létrehozva ez után',
    'search_set_date' => 'Dátum beállítása',
    'search_update' => 'Keresés frissítése',

    // Shelves
    'shelf' => 'Polc',
    'shelves' => 'Polcok',
    'x_shelves' => ':count polc|:count polcok',
    'shelves_empty' => 'Nincsenek könyvespolcok létrehozva',
    'shelves_create' => 'Új polc létrehozása',
    'shelves_popular' => 'Népszerű polcok',
    'shelves_new' => 'Új polcok',
    'shelves_new_action' => 'Új polc',
    'shelves_popular_empty' => 'A legnépszerűbb polcok itt fognak megjelenni.',
    'shelves_new_empty' => 'A legutoljára létrehozott polcok itt fognak megjelenni.',
    'shelves_save' => 'Polc mentése',
    'shelves_books' => 'Könyvek ezen a polcon',
    'shelves_add_books' => 'Könyvek hozzáadása ehhez a polchoz',
    'shelves_drag_books' => 'Könyveket áthúzással lehet elhelyezni ezen a polcon',
    'shelves_empty_contents' => 'Ehhez a polchoz nincsenek könyvek rendelve',
    'shelves_edit_and_assign' => 'Polc szerkesztése könyvek hozzárendeléséhez',
    'shelves_edit_named' => ':name polc szerkesztése',
    'shelves_edit' => 'Polc szerkesztése',
    'shelves_delete' => 'Polc törlése',
    'shelves_delete_named' => ':name polc törlése',
    'shelves_delete_explain' => "':name'. nevű polc ezzel le lesz törölve. A benne található könyvek nem lesznek törölve.",
    'shelves_delete_confirmation' => 'Biztosan törölhető ez a polc?',
    'shelves_permissions' => 'Polc jogosultság',
    'shelves_permissions_updated' => 'Polc jogosultságok frissítve',
    'shelves_permissions_active' => 'Polc jogosultságok aktívak',
    'shelves_permissions_cascade_warning' => 'A polcokhoz kapcsolódó jogosultságok nem kapcsolódnak automatikusan a tárolt könyvekhez. Ennek az az oka, hogy egy könyv több polcon is létezhet. Az engedélyek azonban lemásolhatók a gyermekkönyvekbe az alábbi lehetőség segítségével.',
    'shelves_permissions_create' => 'A polclétrehozási jogosultságok csak az alárendelt könyvekbe való másoláshoz használhatók az alábbi művelettel. Nem szabályozzák a könyvek létrehozásának lehetőségét.',
    'shelves_copy_permissions_to_books' => 'Jogosultság másolása könyvekre',
    'shelves_copy_permissions' => 'Jogosultság másolása',
    'shelves_copy_permissions_explain' => 'Ezzel a polc jelenlegi engedélybeállításait alkalmazza a benne található összes könyvre. Az aktiválás előtt győződjön meg arról, hogy a polc engedélyeinek módosításait elmentette.',
    'shelves_copy_permission_success' => 'Könyvespolc jogosultságok átmásolva :count könyvre',

    // Books
    'book' => 'Könyv',
    'books' => 'Könyvek',
    'x_books' => ':count könyv|:count könyv',
    'books_empty' => 'Nincsenek könyvek létrehozva',
    'books_popular' => 'Népszerű könyvek',
    'books_recent' => 'Legutóbbi könyvek',
    'books_new' => 'Új könyvek',
    'books_new_action' => 'Új könyv',
    'books_popular_empty' => 'A legnépszerűbb könyvek itt fognak megjelenni.',
    'books_new_empty' => 'A legutoljára létrehozott könyvek itt fognak megjelenni.',
    'books_create' => 'Új könyv létrehozása',
    'books_delete' => 'Könyv törlése',
    'books_delete_named' => ':bookName könyv törlése',
    'books_delete_explain' => '\':bookName\' nevű könyv törölve lesz. Minden oldal és fejezet el lesz távolítva.',
    'books_delete_confirmation' => 'Biztosan törölhető ez a könyv?',
    'books_edit' => 'Könyv szerkesztése',
    'books_edit_named' => ':bookName könyv szerkesztése',
    'books_form_book_name' => 'Könyv neve',
    'books_save' => 'Könyv mentése',
    'books_permissions' => 'Könyv jogosultságok',
    'books_permissions_updated' => 'Könyv jogosultságok frissítve',
    'books_empty_contents' => 'Ehhez a könyvhöz nincsenek oldalak vagy fejezetek létrehozva.',
    'books_empty_create_page' => 'Új oldal létrehozása',
    'books_empty_sort_current_book' => 'Aktuális könyv rendezése',
    'books_empty_add_chapter' => 'Fejezet hozzáadása',
    'books_permissions_active' => 'Könyv jogosultságok aktívak',
    'books_search_this' => 'Keresés ebben a könyvben',
    'books_navigation' => 'Könyv navigáció',
    'books_sort' => 'Könyv tartalmak rendezése',
    'books_sort_desc' => 'Mozgassa át a fejezeteket és oldalakat a könyvben, hogy átszervezze a tartalmát. Más könyvek is hozzáadhatók, ami lehetővé teszi a fejezetek és oldalak könnyű mozgatását a könyvek között.',
    'books_sort_named' => ':bookName könyv rendezése',
    'books_sort_name' => 'Rendezés név szerint',
    'books_sort_created' => 'Rendezés létrehozás dátuma szerint',
    'books_sort_updated' => 'Rendezés frissítés dátuma szerint',
    'books_sort_chapters_first' => 'Fejezetek elől',
    'books_sort_chapters_last' => 'Fejezetek hátul',
    'books_sort_show_other' => 'Egyéb könyvek mutatása',
    'books_sort_save' => 'Új elrendezés mentése',
    'books_sort_show_other_desc' => 'Adjon hozzá más könyveket, hogy bevonja őket a rendezési műveletbe, és lehetővé tegye a könyvek közötti egyszerű átszervezést.',
    'books_sort_move_up' => 'Mozgatás fel',
    'books_sort_move_down' => 'Mozgatás le',
    'books_sort_move_prev_book' => 'Mozgatás az előző könyvbe',
    'books_sort_move_next_book' => 'Mozgatás a következő könyvbe',
    'books_sort_move_prev_chapter' => 'Mozgatás az előző fejezetbe',
    'books_sort_move_next_chapter' => 'Mozgatás a következő fejezetbe',
    'books_sort_move_book_start' => 'Mozgatás a könyv elejére',
    'books_sort_move_book_end' => 'Mozgatás a könyv végére',
    'books_sort_move_before_chapter' => 'Morgazás a fejezet elé',
    'books_sort_move_after_chapter' => 'Mozgatás a fejezet után',
    'books_copy' => 'Könyv másolása',
    'books_copy_success' => 'Könyv sikeresen lemásolva',

    // Chapters
    'chapter' => 'Fejezet',
    'chapters' => 'Fejezetek',
    'x_chapters' => ':count fejezet|:count fejezetek',
    'chapters_popular' => 'Népszerű fejezetek',
    'chapters_new' => 'Új fejezet',
    'chapters_create' => 'Új fejezet létrehozása',
    'chapters_delete' => 'Fejezet törlése',
    'chapters_delete_named' => ':chapterName fejezet törlése',
    'chapters_delete_explain' => 'A(z) \':chapterName\' törlésére készül. A fejezethez tartozó minden oldal is törlésre fog kerülni.',
    'chapters_delete_confirm' => 'Biztosan törölhető ez a fejezet?',
    'chapters_edit' => 'Fejezet szerkesztése',
    'chapters_edit_named' => ':chapterName fejezet szerkesztése',
    'chapters_save' => 'Fejezet mentése',
    'chapters_move' => 'Fejezet áthelyezése',
    'chapters_move_named' => ':chapterName fejezet áthelyezése',
    'chapters_copy' => 'Fejezet másolása',
    'chapters_copy_success' => 'Fejezet sikeresen lemásolva',
    'chapters_permissions' => 'Fejezet jogosultságok',
    'chapters_empty' => 'Jelenleg nincsenek oldalak ebben a fejezetben.',
    'chapters_permissions_active' => 'Fejezet jogosultságok aktívak',
    'chapters_permissions_success' => 'Fejezet jogosultságok frissítve',
    'chapters_search_this' => 'Keresés ebben a fejezetben',
    'chapter_sort_book' => 'Könyv rendezése',

    // Pages
    'page' => 'Oldal',
    'pages' => 'Oldalak',
    'x_pages' => ':count oldal|:count oldal',
    'pages_popular' => 'Népszerű oldalak',
    'pages_new' => 'Új oldal',
    'pages_attachments' => 'Csatolmányok',
    'pages_navigation' => 'Oldal navigáció',
    'pages_delete' => 'Oldal törlése',
    'pages_delete_named' => ':pageName oldal törlése',
    'pages_delete_draft_named' => ':pageName vázlat oldal törlése',
    'pages_delete_draft' => 'Vázlat oldal törlése',
    'pages_delete_success' => 'Oldal törölve',
    'pages_delete_draft_success' => 'Vázlat oldal törölve',
    'pages_delete_warning_template' => 'Ez az oldal aktívan használatban van könyv vagy fejezet alapértelmezett oldalsablonjaként. Ezekhez a könyvekhez vagy fejezetekhez a továbbiakban nem lesz alapértelmezett oldalsablon hozzárendelve az oldal törlése után.',
    'pages_delete_confirm' => 'Biztosan törölhető ez az oldal?',
    'pages_delete_draft_confirm' => 'Biztosan törölhető ez a vázlatoldal?',
    'pages_editing_named' => ':pageName oldal szerkesztése',
    'pages_edit_draft_options' => 'Vázlatbeállítások',
    'pages_edit_save_draft' => 'Vázlat mentése',
    'pages_edit_draft' => 'Oldal vázlat szerkesztése',
    'pages_editing_draft' => 'Vázlat szerkesztése',
    'pages_editing_page' => 'Oldal szerkesztése',
    'pages_edit_draft_save_at' => 'Vázlat elmentve:',
    'pages_edit_delete_draft' => 'Vázlat törlése',
    'pages_edit_delete_draft_confirm' => 'Biztos benne, hogy törölni kívánja az oldalmódosítások piszkozatát? Az utolsó teljes mentés óta végrehajtott összes módosítása elvész, és a szerkesztő frissül a legfrissebb, nem vázlatos mentési állapottal.',
    'pages_edit_discard_draft' => 'Vázlat elvetése',
    'pages_edit_switch_to_markdown' => 'Váltás Markdown szerkesztőre',
    'pages_edit_switch_to_markdown_clean' => '(Tisztított tartalom)',
    'pages_edit_switch_to_markdown_stable' => '(Stabil tartalom)',
    'pages_edit_switch_to_wysiwyg' => 'Váltás a WYSIWYG szerkesztőre',
    'pages_edit_switch_to_new_wysiwyg' => 'Switch to new WYSIWYG',
    'pages_edit_switch_to_new_wysiwyg_desc' => '(In Alpha Testing)',
    'pages_edit_set_changelog' => 'Változásnapló beállítása',
    'pages_edit_enter_changelog_desc' => 'A végrehajtott módosítások rövid leírása',
    'pages_edit_enter_changelog' => 'Változásnapló megadása',
    'pages_editor_switch_title' => 'Szerkesztőváltás',
    'pages_editor_switch_are_you_sure' => 'Biztosan módosítani szeretné ennek az oldalnak a szerkesztőjét?',
    'pages_editor_switch_consider_following' => 'A szerkesztők módosításakor vegye figyelembe a következőket:',
    'pages_editor_switch_consideration_a' => 'Mentés után az új szerkesztő opciót minden jövőbeli szerkesztő használni fogja, beleértve azokat is, amelyek esetleg nem tudják maguk módosítani a szerkesztő típusát.',
    'pages_editor_switch_consideration_b' => 'Ez bizonyos körülmények között a részletek és a szintaxis elvesztéséhez vezethet.',
    'pages_editor_switch_consideration_c' => 'A legutóbbi mentés óta végrehajtott címke- vagy változásnapló-módosítások nem maradnak fenn a módosítás során.',
    'pages_save' => 'Oldal mentése',
    'pages_title' => 'Oldal címe',
    'pages_name' => 'Oldal neve',
    'pages_md_editor' => 'Szerkesztő',
    'pages_md_preview' => 'Előnézet',
    'pages_md_insert_image' => 'Kép beillesztése',
    'pages_md_insert_link' => 'Entitás hivatkozás beillesztése',
    'pages_md_insert_drawing' => 'Rajz beillesztése',
    'pages_md_show_preview' => 'Előnézet megjelenítése',
    'pages_md_sync_scroll' => 'Előnézet pozíció szinkronizálása',
    'pages_drawing_unsaved' => 'Nem mentett rajz található',
    'pages_drawing_unsaved_confirm' => 'A rendszer nem mentett rajzadatokat talált egy korábbi sikertelen rajzmentési kísérletből. Szeretné visszaállítani és folytatni a nem mentett rajz szerkesztését?',
    'pages_not_in_chapter' => 'Az oldal nincs fejezetben',
    'pages_move' => 'Oldal áthelyezése',
    'pages_copy' => 'Oldal másolása',
    'pages_copy_desination' => 'Másolás célja',
    'pages_copy_success' => 'Oldal sikeresen lemásolva',
    'pages_permissions' => 'Oldal jogosultságok',
    'pages_permissions_success' => 'Oldal jogosultságok frissítve',
    'pages_revision' => 'Változat',
    'pages_revisions' => 'Oldal változatai',
    'pages_revisions_desc' => 'Az alábbiakban az oldal összes korábbi verziója látható. Visszatekinthet, összehasonlíthatja és visszaállíthatja a régi oldalverziókat, ha az engedélyek lehetővé teszik. Előfordulhat, hogy az oldal teljes előzménye itt nem jelenik meg teljes mértékben, mivel a rendszerkonfigurációtól függően a régi változatok automatikusan törlődnek.',
    'pages_revisions_named' => ':pageName oldal változatai',
    'pages_revision_named' => ':pageName oldal változata',
    'pages_revision_restored_from' => 'Visszaállítva innen: #:id; :summary',
    'pages_revisions_created_by' => 'Létrehozta:',
    'pages_revisions_date' => 'Változat dátuma',
    'pages_revisions_number' => '#',
    'pages_revisions_sort_number' => 'Változat száma',
    'pages_revisions_numbered' => 'Változat #:id',
    'pages_revisions_numbered_changes' => '#:id változat módosításai',
    'pages_revisions_editor' => 'Szerkesztő típusa',
    'pages_revisions_changelog' => 'Változásnapló',
    'pages_revisions_changes' => 'Módosítások',
    'pages_revisions_current' => 'Aktuális verzió',
    'pages_revisions_preview' => 'Előnézet',
    'pages_revisions_restore' => 'Visszaállítás',
    'pages_revisions_none' => 'Ennek az oldalnak nincsenek változatai',
    'pages_copy_link' => 'Hivatkozás másolása',
    'pages_edit_content_link' => 'Ugrás a szakaszhoz a szerkesztőben',
    'pages_pointer_enter_mode' => 'Lépjen be a szakaszválasztó módba',
    'pages_pointer_label' => 'Oldalszakasz beállításai',
    'pages_pointer_permalink' => 'Oldalszakasz állandó hivatkozás',
    'pages_pointer_include_tag' => 'Oldalszakasz tartalmazza a címkét',
    'pages_pointer_toggle_link' => 'Permalink mód, Nyomja meg az include tag megjelenítéséhez',
    'pages_pointer_toggle_include' => 'Include tag mód, Nyomja meg az permalink megjelenítéséhez',
    'pages_permissions_active' => 'Oldal jogosultságok aktívak',
    'pages_initial_revision' => 'Kezdeti közzététel',
    'pages_references_update_revision' => 'A belső hivatkozások automatikus frissítése',
    'pages_initial_name' => 'Új oldal',
    'pages_editing_draft_notification' => 'A jelenleg szerkesztett vázlat legutóbb ekkor volt elmentve: :timeDiff.',
    'pages_draft_edited_notification' => 'Ezt az oldalt azóta már frissítették. Javasolt ennek a vázlatnak az elvetése.',
    'pages_draft_page_changed_since_creation' => 'Ez az oldal a vázlat létrehozása óta frissült. Javasoljuk, hogy dobja el ezt a piszkozatot, vagy ügyeljen arra, hogy ne írja felül az oldal módosításait.',
    'pages_draft_edit_active' => [
        'start_a' => ':count felhasználók kezdte el szerkeszteni ezt az oldalt',
        'start_b' => ':userName elkezdte szerkeszteni ezt az oldalt',
        'time_a' => 'mióta az oldal utoljára frissítve volt',
        'time_b' => 'az utolsó :minCount percben',
        'message' => ':start :time. Ügyeljen arra, hogy ne írjuk felül egymás frissítéseit!',
    ],
    'pages_draft_discarded' => 'Vázlat elvetve! A szerkesztő frissítve lesz az oldal aktuális tartalmával',
    'pages_draft_deleted' => 'Vázlat elvetve! A szerkesztő frissítve lesz az oldal aktuális tartalmával',
    'pages_specific' => 'Egy bizonyos oldal',
    'pages_is_template' => 'Oldalsablon',

    // Editor Sidebar
    'toggle_sidebar' => 'Oldalsáv ki/be',
    'page_tags' => 'Oldal címkék',
    'chapter_tags' => 'Fejezet címkék',
    'book_tags' => 'Könyv címkék',
    'shelf_tags' => 'Polc címkék',
    'tag' => 'Címke',
    'tags' =>  'Címkék',
    'tags_index_desc' => 'A címkék a rendszeren belüli tartalomra alkalmazhatók a kategorizálás rugalmas formája alkalmazása érdekében. A címkéknek kulcsuk és értékük is lehetnek, de az érték nem kötelező. Alkalmazása után a tartalom lekérdezhető a címkenév és érték használatával.',
    'tag_name' =>  'Címkenév',
    'tag_value' => 'Címke érték (nem kötelező)',
    'tags_explain' => "Címkék hozzáadása a tartalom jobb kategorizálásához.\nA mélyebb szervezettség megvalósításához hozzá lehet rendelni egy értéket a címkéhez.",
    'tags_add' => 'Másik címke hozzáadása',
    'tags_remove' => 'Címke eltávolítása',
    'tags_usages' => 'Összes címkehasználat',
    'tags_assigned_pages' => 'Oldalakhoz Rendelt',
    'tags_assigned_chapters' => 'Fejezetekhez rendelt',
    'tags_assigned_books' => 'Könyvekhez Rendelt',
    'tags_assigned_shelves' => 'Polcokhoz Rendelt',
    'tags_x_unique_values' => ':count egyedi érték',
    'tags_all_values' => 'Összes érték',
    'tags_view_tags' => 'Címke megtekintése',
    'tags_view_existing_tags' => 'Címkék megtekintése',
    'tags_list_empty_hint' => 'A címkék hozzárendelhetők az oldalszerkesztő oldalsávján keresztül, vagy egy könyv, fejezet vagy polc adatainak szerkesztése közben.',
    'attachments' => 'Csatolmányok',
    'attachments_explain' => 'Az oldalon megjelenő fájlok feltöltése vagy hivatkozások csatolása. Az oldal oldalsávjában fognak megjelenni.',
    'attachments_explain_instant_save' => 'Az itt történt módosítások azonnal el lesznek mentve.',
    'attachments_upload' => 'Fájlfeltöltés',
    'attachments_link' => 'Hivatkozás csatolása',
    'attachments_upload_drop' => 'Alternatív megoldásként a fájlt ide húzva is fel lehet tölteni mellékletként.',
    'attachments_set_link' => 'Hivatkozás beállítása',
    'attachments_delete' => 'Biztosan törölhető ez a melléklet?',
    'attachments_dropzone' => 'Húzza a file(oka)t ide a feltöltéshez',
    'attachments_no_files' => 'Nincsenek fájlok feltöltve',
    'attachments_explain_link' => 'Fájl feltöltése helyett hozzá lehet kapcsolni egy hivatkozást. Ez egy hivatkozás lesz egy másik oldalra vagy egy fájlra a felhőben.',
    'attachments_link_name' => 'Hivatkozás neve',
    'attachment_link' => 'Csatolmány hivatkozás',
    'attachments_link_url' => 'Hivatkozás fájlra',
    'attachments_link_url_hint' => 'Weboldal vagy fájl webcíme',
    'attach' => 'Csatolás',
    'attachments_insert_link' => 'Melléklet hivatkozás hozzáadása oldalhoz',
    'attachments_edit_file' => 'Fájl szerkesztése',
    'attachments_edit_file_name' => 'Fájl neve',
    'attachments_edit_drop_upload' => 'Feltöltés és felülírás ejtéssel vagy kattintással',
    'attachments_order_updated' => 'Csatolmány sorrend frissítve',
    'attachments_updated_success' => 'Csatolmány részletei frissítve',
    'attachments_deleted' => 'Csatolmány törölve',
    'attachments_file_uploaded' => 'Fájl sikeresen feltöltve',
    'attachments_file_updated' => 'Fájl sikeresen frissítve',
    'attachments_link_attached' => 'Hivatkozás sikeresen hozzácsatolva az oldalhoz',
    'templates' => 'Sablonok',
    'templates_set_as_template' => 'Az oldal egy sablon',
    'templates_explain_set_as_template' => 'Ez az oldal sablonnak lett beállítva, így a tartalma felhasználható más oldalak létrehozásakor. Más felhasználók is használhatják ezt a sablont ha megtekintési jogosultságuk van ehhez az oldalhoz.',
    'templates_replace_content' => 'Oldal tartalmának cseréje',
    'templates_append_content' => 'Hozzáfűzés az oldal tartalmához',
    'templates_prepend_content' => 'Hozzáadás az oldal tartalmának elejéhez',

    // Profile View
    'profile_user_for_x' => 'Felhasználó ez óta: :time',
    'profile_created_content' => 'Létrehozott tartalom',
    'profile_not_created_pages' => ':userName még nem hozott létre oldalt',
    'profile_not_created_chapters' => ':userName még nem hozott létre fejezetet',
    'profile_not_created_books' => ':userName még nem hozott létre könyvet',
    'profile_not_created_shelves' => ':userName még nem hozott létre polcot',

    // Comments
    'comment' => 'Megjegyzés',
    'comments' => 'Megjegyzések',
    'comment_add' => 'Megjegyzés hozzáadása',
    'comment_placeholder' => 'Megjegyzés írása',
    'comment_count' => '{0} Nincs megjegyzés|{1} 1 megjegyzés|[2,*] :count megjegyzés',
    'comment_save' => 'Megjegyzés mentése',
    'comment_new' => 'Új megjegyzés',
    'comment_created' => 'megjegyzést fűzött hozzá :createDiff',
    'comment_updated' => 'Frissítve :updateDiff :username által',
    'comment_updated_indicator' => 'Frissített',
    'comment_deleted_success' => 'Megjegyzés törölve',
    'comment_created_success' => 'Megjegyzés hozzáadva',
    'comment_updated_success' => 'Megjegyzés frissítve',
    'comment_delete_confirm' => 'Biztosan törölhető ez a megjegyzés?',
    'comment_in_reply_to' => 'Válasz erre: :commentId',
    'comment_editor_explain' => 'Itt vannak az ezen az oldalon lévő megjegyzések. Megjegyzések hozzáadhatók és kezelhetők a mentett oldal megtekintésekor.',

    // Revision
    'revision_delete_confirm' => 'Biztosan törölhető ez a változat?',
    'revision_restore_confirm' => 'Biztosan visszaállítható ez a változat? A oldal jelenlegi tartalma le lesz cserélve.',
    'revision_cannot_delete_latest' => 'A legutolsó változat nem törölhető.',

    // Copy view
    'copy_consider' => 'Kérem, fontolja meg az alábbiakat, amikor tartalmat kíván másolni.',
    'copy_consider_permissions' => 'Az egyéni engedélybeállítások nem kerülnek másolásra.',
    'copy_consider_owner' => 'Minden lemásolt tartalomnak Ön lesz a tulajdonosa.',
    'copy_consider_images' => 'Az oldalképfájlok nem duplikálódnak, és az eredeti képek megőrzik kapcsolatukat az eredetileg feltöltött oldallal.',
    'copy_consider_attachments' => 'Az oldal mellékletei nem kerülnek másolásra.',
    'copy_consider_access' => 'A change of location, owner or permissions may result in this content being accessible to those previously without access.',

    // Conversions
    'convert_to_shelf' => 'Átalakítás polccá',
    'convert_to_shelf_contents_desc' => 'Ezt a könyvet új polccá alakíthatja, azonos tartalommal. A könyvben található fejezetek új könyvekké lesznek átalakítva. Ha ez a könyv tartalmaz olyan oldalakat, amelyek nem szerepelnek egy fejezetben, akkor a könyv átnevezzük és tartalmaz ilyen oldalakat, és ez a könyv az új polc részévé válik.',
    'convert_to_shelf_permissions_desc' => 'A könyvhöz beállított engedélyek át lesznek másolva az új polcra és az összes olyan új alárendelt könyvre, amelyek nem rendelkeznek saját engedélyekkel. Vegye figyelembe, hogy a polcokon lévő engedélyek nem kapcsolódnak automatikusan a tartalomhoz, ahogy a könyvek esetében.',
    'convert_book' => 'Könyv átalakítása',
    'convert_book_confirm' => 'Biztosan konvertálni szeretné ezt a könyvet?',
    'convert_undo_warning' => 'Ezt nem lehet olyan könnyen visszavonni.',
    'convert_to_book' => 'Átalakítás könyvvé',
    'convert_to_book_desc' => 'Ezt a fejezetet új, azonos tartalmú könyvvé alakíthatja. Az ebben a fejezetben beállított engedélyek átmásolódnak az új könyvbe, de a szülőkönyvből származó örökölt engedélyek nem kerülnek másolásra, ami a hozzáférés-szabályozás megváltozásához vezethet.',
    'convert_chapter' => 'Fejezet átalakítása',
    'convert_chapter_confirm' => 'Biztosan át szeretnéd alakítani ezt a fejezetet?',

    // References
    'references' => 'Értékelések',
    'references_none' => 'Nincsenek nyomon követett hivatkozások erre az elemre.',
    'references_to_desc' => 'Az alábbiakban felsoroljuk az összes ismert tartalmat a rendszerben, amely erre az elemre hivatkozik.',

    // Watch Options
    'watch' => 'Megfigyelés',
    'watch_title_default' => 'Alapértelmezett beállítások',
    'watch_desc_default' => 'Állítsa vissza a megfigyelést az alapértelmezett értesítési beállításokra.',
    'watch_title_ignore' => 'Mellőzés',
    'watch_desc_ignore' => 'Figyelmen kívül hagyja az összes értesítést, beleértve a felhasználói szintű beállításokból származó értesítéseket is.',
    'watch_title_new' => 'Új oldalak',
    'watch_desc_new' => 'Értesítés, ha új oldal jön létre ezen az elemen belül.',
    'watch_title_updates' => 'Minden oldal frissítése',
    'watch_desc_updates' => 'Értesítés minden új oldalról és oldalváltozásról.',
    'watch_desc_updates_page' => 'Értesítsen minden oldalváltozásról.',
    'watch_title_comments' => 'Minden oldal frissítése és megjegyzése',
    'watch_desc_comments' => 'Értesítés minden új oldalról, oldalváltozásról és új megjegyzésről.',
    'watch_desc_comments_page' => 'Értesítés az oldal változásairól és az új megjegyzésekről.',
    'watch_change_default' => 'Az alapértelmezett értesítési beállítások módosítása',
    'watch_detail_ignore' => 'Az értesítések figyelmen kívül hagyása',
    'watch_detail_new' => 'Új oldalak figyelése',
    'watch_detail_updates' => 'Új oldalak és frissítések figyelése',
    'watch_detail_comments' => 'Új oldalak, frissítések és megjegyzések figyelése',
    'watch_detail_parent_book' => 'Megfigyelés szülőkönyvből',
    'watch_detail_parent_book_ignore' => 'Figyelmen kívül hagyás a szülőkönyvön keresztül',
    'watch_detail_parent_chapter' => 'Megfigyelés szülő fejezetből',
    'watch_detail_parent_chapter_ignore' => 'Figyelmen kívül hagyás a szülő fejezeten keresztül',
];
