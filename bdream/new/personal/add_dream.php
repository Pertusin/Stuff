<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Добавить мечту");
?><?$APPLICATION->IncludeComponent("bitrix:iblock.element.add", "add", array(
	"NAV_ON_PAGE" => "1",
	"USE_CAPTCHA" => "N",
	"USER_MESSAGE_ADD" => "",
	"USER_MESSAGE_EDIT" => "",
	"DEFAULT_INPUT_SIZE" => "30",
	"RESIZE_IMAGES" => "N",
	"IBLOCK_TYPE" => "dreams",
	"IBLOCK_ID" => "2",
	"PROPERTY_CODES" => array(
		0 => "NAME",
		1 => "DETAIL_TEXT",
		2 => "41",
		3 => "10",
		4 => "39",
	),
	"PROPERTY_CODES_REQUIRED" => array(
		0 => "NAME",
		1 => "DETAIL_TEXT",
	),
	"GROUPS" => array(
		0 => "5",
	),
	"STATUS" => "ANY",
	"STATUS_NEW" => "NEW",
	"ALLOW_EDIT" => "Y",
	"ALLOW_DELETE" => "Y",
	"ELEMENT_ASSOC" => "PROPERTY_ID",
	"ELEMENT_ASSOC_PROPERTY" => "3",
	"MAX_USER_ENTRIES" => "100000000000",
	"MAX_LEVELS" => "1",
	"LEVEL_LAST" => "Y",
	"MAX_FILE_SIZE" => "0",
	"PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
	"DETAIL_TEXT_USE_HTML_EDITOR" => "Y",
	"SEF_MODE" => "N",
	"SEF_FOLDER" => "/personal/",
	"AJAX_MODE" => "N",
	"AJAX_OPTION_JUMP" => "N",
	"AJAX_OPTION_STYLE" => "Y",
	"AJAX_OPTION_HISTORY" => "N",
	"CUSTOM_TITLE_NAME" => "Название на родном языке",
	"CUSTOM_TITLE_TAGS" => "",
	"CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
	"CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
	"CUSTOM_TITLE_IBLOCK_SECTION" => "",
	"CUSTOM_TITLE_PREVIEW_TEXT" => "",
	"CUSTOM_TITLE_PREVIEW_PICTURE" => "",
	"CUSTOM_TITLE_DETAIL_TEXT" => "Описание мечты на родном языке",
	"CUSTOM_TITLE_DETAIL_PICTURE" => "",
	"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>